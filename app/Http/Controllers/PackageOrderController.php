<?php

namespace App\Http\Controllers;

use App\Models\PackageOrder;
use App\Models\Service;
use App\Models\Package;
use App\Models\Invoice;
use App\Support\PackagePricing;
use App\Services\SnippePaymentService;
use App\Services\SmsService;
use App\Mail\PackageInvoiceMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class PackageOrderController extends Controller
{
    protected $snippeService;
    protected $smsService;

    public function __construct(SnippePaymentService $snippeService, SmsService $smsService)
    {
        $this->snippeService = $snippeService;
        $this->smsService = $smsService;
    }
    public function showSelectionForm()
    {
        // Redirect to step 1 of the new 3-step wizard
        return redirect()->route('package.selection.step1');
    }

    // New 3-step wizard methods
    public function showStep1(Request $request)
    {
        $prefillService = $request->query('service_id');
        $prefillPackage = $request->query('package_id');
        $prefillAddon = $request->query('addon');
        
        return view('pages.package-selection.step1-combined', compact('prefillService', 'prefillPackage', 'prefillAddon'));
    }

    public function processStep1(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service_id' => 'required|integer|in:1,2,3,4,5,6',
            'package_id' => [
                'required',
                'integer',
                'in:1,2,3',
                function ($attribute, $value, $fail) use ($request) {
                    $sid = (int) $request->input('service_id');
                    $pid = (int) $value;
                    if (! PackagePricing::package($sid, $pid)) {
                        $fail('The selected package is not valid for this service.');
                    }
                },
            ],
            'selected_addons' => 'nullable|array',
            'selected_addons.*' => ['string', Rule::in(array_keys(PackagePricing::addonPrices()))],
            'timeline_priority' => 'nullable|string|in:standard,fast_track,urgent',
            'payment_plan' => 'nullable|string|in:startup,standard,enterprise,one_time,milestone,monthly',
            'estimated_total' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        session()->put('package_order_data', $validated);
        // Direct to review step to allow adjusting deposit (30-100%)
        return redirect()->route('package.selection.step2');
    }

    public function showStep2()
    {
        $step1Data = session('package_order_data', []);
        
        // Redirect to step1 if no data exists
        if (empty($step1Data)) {
            return redirect()->route('package.selection.step1')->with('error', 'Please complete step 1 first.');
        }
        
        return view('pages.package-selection.step2-review')
            ->with('old', array_merge($step1Data, old()));
    }

    public function processStep2(Request $request)
    {
        $step1Data = session('package_order_data', []);
        
        // Merge with any additional notes from review page
        $validated = array_merge($step1Data, [
            'notes' => $request->input('notes', $step1Data['notes'] ?? null),
        ]);

        session()->put('package_order_data', $validated);
        
        // Process the order directly
        return $this->processOrder($request);
    }

    public function generateInvoice(Request $request)
    {
        // Get data from session
        $orderData = session('package_order_data', []);
        
        if (empty($orderData)) {
            return redirect()->route('package.selection.step1')->with('error', 'Please complete step 1 first.');
        }

        // We need an actual order in the DB to have a payment link
        DB::beginTransaction();
        try {
            // Re-calculate prices to be sure
            $pkg = PackagePricing::package((int) $orderData['service_id'], (int) $orderData['package_id']);
            $basePrice = $pkg['price'] ?? 0;
            $addonPrices = PackagePricing::addonPrices();
            $addonsTotal = 0;
            foreach($orderData['selected_addons'] ?? [] as $addon) {
                $addonsTotal += $addonPrices[$addon] ?? 0;
            }
            $totalPrice = $basePrice + $addonsTotal;
            $advFrac = PackagePricing::advanceFractionForPlan($orderData['payment_plan'] ?? null);
            $advancePayment = round($totalPrice * $advFrac, 2);
            $remainingBalance = round($totalPrice - $advancePayment, 2);

            $orderPayload = [
                'order_number' => PackageOrder::generateOrderNumber(),
                'client_name' => $orderData['client_name'],
                'client_email' => $orderData['client_email'],
                'client_phone' => $orderData['client_phone'],
                'service_id' => $orderData['service_id'],
                'package_id' => $orderData['package_id'],
                'selected_features' => $pkg['features'] ?? [],
                'selected_addons' => $orderData['selected_addons'] ?? [],
                'total_price' => $totalPrice,
                'advance_payment' => $advancePayment,
                'remaining_balance' => $remainingBalance,
                'status' => 'pending',
                'payment_plan' => $orderData['payment_plan'] ?? 'startup',
                'timeline_priority' => $orderData['timeline_priority'] ?? 'standard',
                'notes' => $orderData['notes'] ?? null,
                'payment_page_token' => PackageOrder::generateUniquePaymentPageToken(),
                'payment_status' => 'not_started',
            ];

            $order = PackageOrder::create($orderPayload);

            $invoice = Invoice::create([
                'invoice_number' => Invoice::generateInvoiceNumber(),
                'client_name' => $order->client_name,
                'client_email' => $order->client_email,
                'client_phone' => $order->client_phone,
                'description' => "Package Order - {$order->order_number}",
                'amount' => $order->advance_payment,
                'total' => $order->advance_payment,
                'due_date' => now()->addDays(7),
                'status' => 'pending',
                'order_id' => $order->id,
            ]);

            DB::commit();

            // Generate PDF invoice
            $pdf = Pdf::loadView('receipts.invoice', ['order' => $order, 'invoice' => $invoice]);
            
            return $pdf->download('invoice-' . $invoice->invoice_number . '.pdf');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Invoice generation failed', ['error' => $e->getMessage()]);
            return back()->with('error', 'Failed to generate invoice: ' . $e->getMessage());
        }
    }

    public function processOrder(Request $request)
    {
        // Get data from session (new 3-step wizard)
        $orderData = session('package_order_data', []);

        if (empty($orderData) || ! isset($orderData['service_id'], $orderData['package_id'], $orderData['client_name'], $orderData['client_email'], $orderData['client_phone'])) {
            return redirect()->route('package.selection.step1')
                ->with('error', 'Your checkout session expired or is incomplete. Please fill in step 1 again.');
        }

        $validated = [
            'client_name' => $orderData['client_name'] ?? '',
            'client_email' => $orderData['client_email'] ?? '',
            'client_phone' => $orderData['client_phone'] ?? '',
            'company_name' => $orderData['company_name'] ?? null,
            'service_id' => $orderData['service_id'] ?? null,
            'package_id' => $orderData['package_id'] ?? null,
            'selected_addons' => $orderData['selected_addons'] ?? [],
            'timeline_priority' => $orderData['timeline_priority'] ?? null,
            'payment_plan' => $orderData['payment_plan'] ?? null,
            'estimated_total' => $orderData['estimated_total'] ?? null,
            'notes' => $orderData['notes'] ?? null,
        ];

        // Hardcoded services and packages data
        $services = [
            1 => ['name' => 'Web Development', 'base_price' => 400000],
            2 => ['name' => 'Mobile App Development', 'base_price' => 3000000],
            3 => ['name' => 'Network Installation', 'base_price' => 300000],
            4 => ['name' => 'Cybersecurity', 'base_price' => 300000],
            5 => ['name' => 'IT Support', 'base_price' => 150000],
            6 => ['name' => 'ICT Consultancy', 'base_price' => 500000],
        ];

        $service = $services[$validated['service_id']] ?? null;
        $package = PackagePricing::package((int) $validated['service_id'], (int) $validated['package_id']);

        // Calculate total price
        $basePrice = $package ? $package['price'] : ($service ? $service['base_price'] : 0);
        $totalPrice = $basePrice;

        // Add addon prices
        $addonPrices = PackagePricing::addonPrices();

        if (isset($validated['selected_addons'])) {
            foreach ($validated['selected_addons'] as $addon) {
                $totalPrice += $addonPrices[$addon] ?? 0;
            }
        }

        // Deposit due now (Snippe checkout) follows selected ICT payment plan
        $advanceFraction = PackagePricing::advanceFractionForPlan($validated['payment_plan'] ?? null);
        $advancePayment = round($totalPrice * $advanceFraction, 2);
        $remainingBalance = round($totalPrice - $advancePayment, 2);

        if (! $package) {
            Log::warning('Package order blocked: invalid service/package pair', [
                'service_id' => $validated['service_id'],
                'package_id' => $validated['package_id'],
            ]);

            return redirect()->route('package.selection.step2')
                ->with('error', 'Your package selection is no longer valid. Please go back to step 1 and choose your service and tier again.');
        }

        DB::beginTransaction();
        try {
            $orderPayload = [
                'order_number' => PackageOrder::generateOrderNumber(),
                'client_name' => $validated['client_name'],
                'client_email' => $validated['client_email'],
                'client_phone' => $validated['client_phone'],
                'service_id' => $validated['service_id'],
                'package_id' => $validated['package_id'],
                'selected_features' => $package['features'] ?? [],
                'total_price' => $totalPrice,
                'advance_payment' => $advancePayment,
                'remaining_balance' => $remainingBalance,
                'status' => 'pending',
                'notes' => $validated['notes'] ?? null,
            ];

            if (Schema::hasColumn('package_orders', 'payment_plan')) {
                $orderPayload['payment_plan'] = $validated['payment_plan'] ?? 'startup';
            }
            if (Schema::hasColumn('package_orders', 'timeline_priority')) {
                $orderPayload['timeline_priority'] = $validated['timeline_priority'] ?? 'standard';
            }

            if (Schema::hasColumn('package_orders', 'company_name')) {
                $orderPayload['company_name'] = $validated['company_name'];
            }
            if (Schema::hasColumn('package_orders', 'selected_addons')) {
                $orderPayload['selected_addons'] = $validated['selected_addons'] ?? [];
            }
            if (Schema::hasColumn('package_orders', 'payment_page_token')) {
                $orderPayload['payment_page_token'] = PackageOrder::generateUniquePaymentPageToken();
            }
            if (Schema::hasColumn('package_orders', 'payment_status')) {
                $orderPayload['payment_status'] = 'not_started';
            }

            $order = PackageOrder::create($orderPayload);

            // Generate invoice
            $invoiceNumber = Invoice::generateInvoiceNumber();
            $invoicePayload = [
                'invoice_number' => $invoiceNumber,
                'client_name' => $validated['client_name'],
                'client_email' => $validated['client_email'],
                'client_phone' => $validated['client_phone'],
                'description' => "Package Order - {$order->order_number}",
                'amount' => $advancePayment,
                'tax' => 0,
                'total' => $advancePayment,
                'due_date' => now()->addDays(7),
                'status' => 'pending',
                'payment_method' => 'mobile_money',
                'notes' => sprintf(
                    '%d%% advance payment for package order (%s). Remaining balance: TZS %s',
                    PackagePricing::advancePercentForPlan($validated['payment_plan'] ?? null),
                    PackagePricing::paymentPlanLabel($validated['payment_plan'] ?? null),
                    number_format($remainingBalance, 2)
                ),
                'order_id' => $order->id,
            ];

            $invoice = Invoice::create($invoicePayload);

            // Clear session data (new 3-step wizard)
            session()->forget('package_order_data');

            DB::commit();

            $order->refresh();
            $order->ensurePaymentPageToken();

            // Generate invoice PDF for attachment
            try {
                $tempInvoice = (object)[
                    'invoice_number' => $invoice->invoice_number,
                    'client_name' => $invoice->client_name,
                    'client_email' => $invoice->client_email,
                    'client_phone' => $invoice->client_phone,
                    'description' => $invoice->description,
                    'amount' => $invoice->amount,
                    'due_date' => $invoice->due_date,
                    'created_at' => $invoice->created_at,
                ];

                $pdf = Pdf::loadView('receipts.invoice', [
                    'order' => $order, 
                    'invoice' => $tempInvoice
                ]);
                
                $pdfContent = $pdf->output();

                // Send email with invoice
                Mail::to($order->client_email)->send(new PackageInvoiceMail($order, $invoice, $pdfContent));
                Log::info('Invoice email sent', ['order' => $order->order_number, 'email' => $order->client_email]);
            } catch (\Exception $e) {
                Log::error('Failed to send invoice email', [
                    'order' => $order->order_number,
                    'error' => $e->getMessage()
                ]);
            }

            if ($order->payment_page_token) {
                return redirect()->route('payment.show', ['checkout' => $order->payment_page_token])
                    ->with('success', 'Order created successfully. Please complete the advance payment.');
            }

            return redirect('/payment/' . $order->id)
                ->with('success', 'Order created successfully. Please complete the advance payment.');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Order creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            $hint = str_contains($e->getMessage(), 'Unknown column') || str_contains($e->getMessage(), 'does not exist')
                ? ' Run database migrations (php artisan migrate) or contact support.'
                : '';

            return redirect()->route('package.selection.step2')
                ->with('error', 'Failed to create order.' . $hint . (config('app.debug') ? ' ' . $e->getMessage() : ''));
        }
    }

    protected function findOrderByPaymentCheckout(string $checkout): PackageOrder
    {
        return PackageOrder::where('payment_page_token', $checkout)->firstOrFail();
    }

    public function showPaymentPage(string $checkout)
    {
        $order = $this->findOrderByPaymentCheckout($checkout);
        $order->ensurePaymentPageToken();

        return view('pages.payment', compact('order'));
    }

    public function initiatePayment(Request $request, string $checkout)
    {
        $order = $this->findOrderByPaymentCheckout($checkout);
        $paymentMethod = $request->validate([
            'payment_method' => 'required|in:mobile,card',
        ])['payment_method'];

        $wantsJson = $request->expectsJson() || $request->ajax();

        $jsonError = fn (string $message, int $code = 422) => $wantsJson
            ? response()->json(['ok' => false, 'message' => $message], $code)
            : back()->with('error', $message);

        Log::info('Initiating payment', [
            'order_id' => $order->id,
            'payment_method' => $paymentMethod,
            'wants_json' => $wantsJson,
        ]);

        if (! $this->snippeService->isConfigured()) {
            $msg = 'Payment gateway is not configured. Set SNIPPE_API_KEY in your .env file, then run php artisan config:clear.';

            return $wantsJson
                ? response()->json(['ok' => false, 'message' => $msg], 422)
                : back()->with('error', $msg);
        }

        if ($paymentMethod === 'card') {
            $cardResult = $this->snippeService->createCardPayment($order);
            Log::info('Card payment response', ['checkout' => $cardResult]);

            if (isset($cardResult['error'])) {
                return $jsonError($cardResult['error']);
            }

            if (isset($cardResult['payment_url'])) {
                $order->update([
                    'payment_reference' => $cardResult['reference'] ?? null,
                    'payment_token' => $cardResult['payment_token'] ?? null,
                    'payment_status' => 'initiated',
                ]);
                Log::info('Redirecting to payment_url', ['url' => $cardResult['payment_url']]);

                if ($wantsJson) {
                    return response()->json([
                        'ok' => true,
                        'redirect_url' => $cardResult['payment_url'],
                    ]);
                }

                return redirect($cardResult['payment_url']);
            }

            $fallback = 'Could not start card checkout. Please try again or choose mobile money.';

            return $jsonError($fallback);
        }

        $payment = $this->snippeService->createMobileMoneyPayment($order);
        Log::info('Mobile money payment response', ['payment' => $payment]);

        if (isset($payment['error'])) {
            return $jsonError($payment['error']);
        }

        $order->update([
            'payment_reference' => $payment['reference'] ?? null,
            'payment_token' => $payment['payment_token'] ?? null,
            'payment_status' => 'pending',
        ]);

        if ($wantsJson) {
            return response()->json([
                'ok' => true,
                'poll' => true,
                'reference' => $payment['reference'] ?? null,
                'message' => 'Check your phone for the payment prompt.',
            ]);
        }

        return back()->with('success', 'Payment initiated! Please check your phone for the USSD prompt to complete payment.');
    }

    public function paymentConfirmation(string $checkout)
    {
        $order = $this->findOrderByPaymentCheckout($checkout);
        return view('pages.payment-confirmation', compact('order'));
    }

    public function checkPaymentStatus(string $checkout)
    {
        $order = $this->findOrderByPaymentCheckout($checkout);

        if ($order->payment_status === 'completed' || $order->status === 'paid_advance') {
            return response()->json(['status' => 'completed']);
        }

        if ($order->payment_status === 'failed' || $order->status === 'payment_failed') {
            return response()->json(['status' => 'failed']);
        }

        if ($order->payment_reference) {
            $status = $this->snippeService->getPaymentStatus($order->payment_reference);

            $snippeStatus = null;
            if (is_array($status)) {
                $data = $status['data'] ?? [];
                $snippeStatus = is_array($data)
                    ? ($data['status'] ?? $data['payment_status'] ?? $data['state'] ?? null)
                    : null;
                if ($snippeStatus === null) {
                    $snippeStatus = $status['status'] ?? null;
                }
            }

            if (is_string($snippeStatus) && $snippeStatus !== '') {
                $normalized = strtolower($snippeStatus);

                if (in_array($normalized, ['completed', 'success', 'paid', 'successful', 'complete'], true)) {
                    $order->update([
                        'status' => 'paid_advance',
                        'payment_status' => 'completed',
                    ]);

                    $invoice = Invoice::where('order_id', $order->id)->first();
                    if ($invoice) {
                        $invoice->update([
                            'status' => 'paid',
                            'paid_date' => now(),
                        ]);
                    }

                    return response()->json(['status' => 'completed']);
                }

                if (in_array($normalized, ['failed', 'error', 'cancelled', 'canceled'], true)) {
                    $order->update([
                        'status' => 'payment_failed',
                        'payment_status' => 'failed',
                    ]);

                    return response()->json(['status' => 'failed']);
                }
            }
        }

        return response()->json(['status' => $order->payment_status ?? 'pending']);
    }

    public function downloadReceipt(string $checkout)
    {
        $order = PackageOrder::with(['service', 'package'])->where('payment_page_token', $checkout)->firstOrFail();
        
        if ($order->status !== 'paid_advance') {
            return back()->with('error', 'Payment not completed yet.');
        }

        // Generate receipt PDF
        $pdf = Pdf::loadView('receipts.payment', compact('order'));
        
        return $pdf->download("receipt_{$order->order_number}.pdf");
    }

    public function showPaymentSuccess(string $checkout)
    {
        $order = PackageOrder::with(['service', 'package'])->where('payment_page_token', $checkout)->firstOrFail();
        return view('pages.package-selection.payment-success', compact('order'));
    }

    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $signature = $request->header('X-Webhook-Signature');
        $timestamp = $request->header('X-Webhook-Timestamp');

        // Verify webhook signature
        if (!$this->snippeService->verifyWebhookSignature($payload, $signature, $timestamp)) {
            Log::warning('Invalid webhook signature');
            return response()->json(['error' => 'Invalid signature'], 401);
        }

        // Process webhook
        $data = json_decode($payload, true);
        $this->snippeService->processWebhook($data);

        return response()->json(['status' => 'success']);
    }
}
