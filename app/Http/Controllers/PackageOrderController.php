<?php

namespace App\Http\Controllers;

use App\Models\PackageOrder;
use App\Models\Service;
use App\Models\Package;
use App\Models\Invoice;
use App\Support\PackagePricing;
use App\Services\SnippePaymentService;
use App\Services\SmsService;
use Illuminate\Http\Request;
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
    public function showStep1()
    {
        return view('pages.package-selection.step1-combined');
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
        
        // Redirect to step1 if no data exists or required fields are missing
        if (empty($orderData) || !isset($orderData['package_id']) || !isset($orderData['service_id'])) {
            return redirect()->route('package.selection.step1')->with('error', 'Please complete step 1 first to generate invoice.');
        }

        // Calculate prices
        $services = [
            1 => ['name' => 'Web Development', 'base_price' => 400000],
            2 => ['name' => 'Mobile App Development', 'base_price' => 3000000],
            3 => ['name' => 'Network Installation', 'base_price' => 300000],
            4 => ['name' => 'Cybersecurity', 'base_price' => 300000],
            5 => ['name' => 'IT Support', 'base_price' => 150000],
            6 => ['name' => 'ICT Consultancy', 'base_price' => 500000],
        ];

        $addonPrices = PackagePricing::addonPrices();

        $pkg = PackagePricing::package((int) $orderData['service_id'], (int) $orderData['package_id']);
        $basePrice = $pkg['price'] ?? 0;
        $packageLabel = $pkg['name'] ?? 'Package';
        $addonsTotal = 0;
        if($orderData['selected_addons'] ?? []) {
            foreach($orderData['selected_addons'] as $addon) {
                $addonsTotal += $addonPrices[$addon] ?? 0;
            }
        }
        $totalPrice = $basePrice + $addonsTotal;
        $advFrac = PackagePricing::advanceFractionForPlan($orderData['payment_plan'] ?? null);
        $advancePayment = round($totalPrice * $advFrac, 2);
        $remainingBalance = round($totalPrice - $advancePayment, 2);

        // Create temporary order object for invoice
        $tempOrder = (object)[
            'order_number' => 'INV-' . time(),
            'client_name' => $orderData['client_name'],
            'client_email' => $orderData['client_email'],
            'client_phone' => $orderData['client_phone'],
            'total_price' => $totalPrice,
            'advance_payment' => $advancePayment,
            'remaining_balance' => $remainingBalance,
        ];

        // Get image data for header
        $headerImagePath = public_path('header_pdf.png');
        $headerImageBase64 = '';
        if (file_exists($headerImagePath)) {
            $headerImageBase64 = base64_encode(file_get_contents($headerImagePath));
            $headerImageBase64 = 'data:image/png;base64,' . $headerImageBase64;
        }

        // Create temporary invoice object
        $tempInvoice = (object)[
            'invoice_number' => 'INV-' . time(),
            'client_name' => $orderData['client_name'],
            'client_email' => $orderData['client_email'],
            'client_phone' => $orderData['client_phone'],
            'description' => 'Package Order - ' . $services[$orderData['service_id']]['name'] . ' - ' . $packageLabel,
            'amount' => $advancePayment,
            'tax' => 0,
            'total' => $advancePayment,
            'due_date' => now()->addDays(7),
            'status' => 'pending',
            'created_at' => now(),
            'header_image' => $headerImageBase64,
        ];

        // Generate PDF invoice
        $pdf = \PDF::loadView('receipts.invoice', ['order' => $tempOrder, 'invoice' => $tempInvoice])
            ->setOption('enable-local-file-access', true)
            ->setOption('images', true);
        
        // Download the PDF
        return $pdf->download('invoice-' . $tempInvoice->invoice_number . '.pdf');
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
                'notes' => trim(($validated['notes'] ?? '') . PHP_EOL . PHP_EOL . 'Timeline Priority: ' . ($validated['timeline_priority'] ?? 'standard') . PHP_EOL . 'Payment Plan: ' . ($validated['payment_plan'] ?? 'enterprise') . PHP_EOL . 'Estimated Total (Client Side): ' . number_format((float) ($validated['estimated_total'] ?? 0), 0)),
            ];

            if (Schema::hasColumn('package_orders', 'payment_plan')) {
                $orderPayload['payment_plan'] = $validated['payment_plan'] ?? 'enterprise';
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
            ];
            if (Schema::hasColumn('invoices', 'order_id')) {
                $invoicePayload['order_id'] = $order->id;
            }

            $invoice = Invoice::create($invoicePayload);

            // Clear session data (new 3-step wizard)
            session()->forget('package_order_data');

            DB::commit();

            return redirect()->route('payment.show', ['order' => $order->id])
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

    public function showPaymentPage($orderId)
    {
        $order = PackageOrder::findOrFail($orderId);
        return view('pages.payment', compact('order'));
    }

    public function initiatePayment(Request $request, $orderId)
    {
        $order = PackageOrder::findOrFail($orderId);
        $paymentMethod = $request->validate([
            'payment_method' => 'required|in:mobile,card',
        ])['payment_method'];
        
        Log::info('Initiating payment', [
            'order_id' => $orderId,
            'payment_method' => $paymentMethod,
        ]);

        if (! $this->snippeService->isConfigured()) {
            return back()->with('error', 'Payment gateway is not configured. Set SNIPPE_API_KEY in your .env file, then run php artisan config:clear.');
        }
        
        if ($paymentMethod === 'card') {
            // Create card payment - redirects to secure checkout
            $checkout = $this->snippeService->createCardPayment($order);
            Log::info('Card payment response', ['checkout' => $checkout]);
            
            if (isset($checkout['error'])) {
                return back()->with('error', $checkout['error']);
            }

            // Redirect to card payment URL
            if (isset($checkout['payment_url'])) {
                $order->update([
                    'payment_reference' => $checkout['reference'] ?? null,
                    'payment_token' => $checkout['payment_token'] ?? null,
                    'payment_status' => 'initiated',
                ]);
                Log::info('Redirecting to payment_url', ['url' => $checkout['payment_url']]);
                return redirect($checkout['payment_url']);
            }
        } else {
            // Create direct mobile money payment (USSD push) - no redirect needed
            $payment = $this->snippeService->createMobileMoneyPayment($order);
            Log::info('Mobile money payment response', ['payment' => $payment]);
            
            if (isset($payment['error'])) {
                return back()->with('error', $payment['error']);
            }

            // Store payment reference and return to payment page with status
            $order->update([
                'payment_reference' => $payment['reference'] ?? null,
                'payment_token' => $payment['payment_token'] ?? null,
                'payment_status' => 'pending',
            ]);

            return back()->with('success', 'Payment initiated! Please check your phone for the USSD prompt to complete payment.');
        }

        return back()->with('error', 'Payment gateway error. Please try again.');
    }

    public function paymentConfirmation($orderId)
    {
        $order = PackageOrder::findOrFail($orderId);
        return view('pages.payment-confirmation', compact('order'));
    }

    public function checkPaymentStatus($orderId)
    {
        $order = PackageOrder::findOrFail($orderId);
        
        // Check payment status via Snippe API if we have a reference
        if ($order->payment_reference) {
            $status = $this->snippeService->getPaymentStatus($order->payment_reference);
            
            if ($status && isset($status['data']['status'])) {
                $snippeStatus = $status['data']['status'];
                
                // Update order status based on Snippe status
                if ($snippeStatus === 'completed' || $snippeStatus === 'success') {
                    $order->update([
                        'status' => 'paid_advance',
                        'payment_status' => 'completed',
                    ]);
                    
                    // Update invoice
                    $invoice = Invoice::where('order_id', $order->id)->first();
                    if ($invoice) {
                        $invoice->update(['status' => 'paid']);
                    }
                    
                    return response()->json(['status' => 'completed']);
                } elseif ($snippeStatus === 'failed') {
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

    public function downloadReceipt($orderId)
    {
        $order = PackageOrder::with(['service', 'package'])->findOrFail($orderId);
        
        if ($order->status !== 'paid_advance') {
            return back()->with('error', 'Payment not completed yet.');
        }

        // Generate receipt PDF
        $pdf = \PDF::loadView('receipts.payment', compact('order'));
        
        return $pdf->download("receipt_{$order->order_number}.pdf");
    }

    public function showPaymentSuccess($orderId)
    {
        $order = PackageOrder::with(['service', 'package'])->findOrFail($orderId);
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
