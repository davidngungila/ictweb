<?php

namespace App\Http\Controllers;

use App\Models\PackageOrder;
use App\Models\Service;
use App\Models\Package;
use App\Models\Invoice;
use App\Services\SnippePaymentService;
use App\Services\SmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
            'package_id' => 'required|integer|in:1,2,3',
            'selected_addons' => 'nullable|array',
            'selected_addons.*' => 'string',
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

        // Calculate prices
        $services = [
            1 => ['name' => 'Web Development', 'base_price' => 400000],
            2 => ['name' => 'Mobile App Development', 'base_price' => 3000000],
            3 => ['name' => 'Network Installation', 'base_price' => 300000],
            4 => ['name' => 'Cybersecurity', 'base_price' => 300000],
            5 => ['name' => 'IT Support', 'base_price' => 150000],
            6 => ['name' => 'ICT Consultancy', 'base_price' => 500000],
        ];

        $packages = [
            1 => ['name' => 'Starter Package', 'price' => 400000],
            2 => ['name' => 'Business Package', 'price' => 800000],
            3 => ['name' => 'Enterprise Package', 'price' => 1500000],
        ];

        $addonPrices = [
            'travel_blog_5_posts' => 150000,
            'advanced_seo' => 300000,
            'social_auto_posting' => 150000,
            'email_marketing' => 200000,
            'google_automation' => 100000,
            'ai_chatbot' => 250000,
            'bulk_sms_system' => 200000,
            'online_payment' => 200000,
            'api_integration' => 150000,
            'admin_dashboard' => 300000,
            'booking_system' => 250000,
            'ecommerce' => 350000,
        ];

        $basePrice = $packages[$orderData['package_id']]['price'] ?? 0;
        $addonsTotal = 0;
        if($orderData['selected_addons'] ?? []) {
            foreach($orderData['selected_addons'] as $addon) {
                $addonsTotal += $addonPrices[$addon] ?? 0;
            }
        }
        $totalPrice = $basePrice + $addonsTotal;
        $advancePayment = $totalPrice * 0.3;
        $remainingBalance = $totalPrice - $advancePayment;

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

        // Create temporary invoice object
        $tempInvoice = (object)[
            'invoice_number' => 'INV-' . time(),
            'client_name' => $orderData['client_name'],
            'client_email' => $orderData['client_email'],
            'client_phone' => $orderData['client_phone'],
            'description' => 'Package Order - ' . $services[$orderData['service_id']]['name'] . ' - ' . $packages[$orderData['package_id']]['name'],
            'amount' => $advancePayment,
            'tax' => 0,
            'total' => $advancePayment,
            'due_date' => now()->addDays(7),
            'status' => 'pending',
            'created_at' => now(),
        ];

        // Generate PDF invoice
        $pdf = \PDF::loadView('receipts.invoice', ['order' => $tempOrder, 'invoice' => $tempInvoice]);
        
        // Download the PDF
        return $pdf->download('invoice-' . $tempInvoice->invoice_number . '.pdf');
    }

    public function processOrder(Request $request)
    {
        // Get data from session (new 3-step wizard)
        $orderData = session('package_order_data', []);

        $validated = [
            'client_name' => $orderData['client_name'] ?? '',
            'client_email' => $orderData['client_email'] ?? '',
            'client_phone' => $orderData['client_phone'] ?? '',
            'service_id' => $orderData['service_id'] ?? null,
            'package_id' => $orderData['package_id'] ?? null,
            'selected_addons' => $orderData['selected_addons'] ?? [],
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

        $packages = [
            1 => ['name' => 'Starter Package', 'price' => 400000],
            2 => ['name' => 'Business Package', 'price' => 800000],
            3 => ['name' => 'Enterprise Package', 'price' => 1500000],
        ];

        $service = $services[$validated['service_id']] ?? null;
        $package = $packages[$validated['package_id']] ?? null;

        // Calculate total price
        $basePrice = $package ? $package['price'] : ($service ? $service['base_price'] : 0);
        $totalPrice = $basePrice;

        // Add addon prices
        $addonPrices = [
            'travel_blog_5_posts' => 150000,
            'advanced_seo' => 300000,
            'social_auto_posting' => 150000,
            'email_marketing' => 200000,
            'google_automation' => 100000,
            'ai_chatbot' => 250000,
            'bulk_sms_system' => 200000,
            'online_payment' => 200000,
            'api_integration' => 150000,
            'admin_dashboard' => 300000,
            'booking_system' => 250000,
            'ecommerce' => 350000,
        ];

        if (isset($validated['selected_addons'])) {
            foreach ($validated['selected_addons'] as $addon) {
                $totalPrice += $addonPrices[$addon] ?? 0;
            }
        }

        // Calculate 30% advance payment
        $advancePayment = $totalPrice * 0.30;
        $remainingBalance = $totalPrice - $advancePayment;

        DB::beginTransaction();
        try {
            // Create package order
            $order = PackageOrder::create([
                'order_number' => PackageOrder::generateOrderNumber(),
                'client_name' => $validated['client_name'],
                'client_email' => $validated['client_email'],
                'client_phone' => $validated['client_phone'],
                'service_id' => $validated['service_id'],
                'package_id' => $validated['package_id'],
                'selected_features' => [],
                'selected_addons' => $validated['selected_addons'] ?? [],
                'total_price' => $totalPrice,
                'advance_payment' => $advancePayment,
                'remaining_balance' => $remainingBalance,
                'status' => 'pending',
                'notes' => $validated['notes'],
            ]);

            // Generate invoice
            $invoiceNumber = Invoice::generateInvoiceNumber();
            $invoice = Invoice::create([
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
                'notes' => "30% advance payment for package order. Remaining balance: TZS " . number_format($remainingBalance, 2),
            ]);

            // Clear session data (new 3-step wizard)
            session()->forget('package_order_data');

            DB::commit();

            // Generate PDF invoice
            $pdf = \PDF::loadView('receipts.invoice', compact('order', 'invoice'));
            $invoicePdf = $pdf->output();

            // Store invoice PDF in session for display
            session()->put('invoice_pdf', base64_encode($invoicePdf));

            return redirect()->route('payment.show', ['order' => $order->id])
                ->with('success', 'Order created successfully. Please complete the advance payment.')
                ->with('show_invoice_modal', true);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Order creation failed', ['error' => $e->getMessage()]);
            return back()->with('error', 'Failed to create order. Please try again.');
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
        $paymentMethod = $request->input('payment_method', 'mobile');
        
        Log::info('Initiating payment', [
            'order_id' => $orderId,
            'payment_method' => $paymentMethod,
        ]);
        
        if ($paymentMethod === 'card') {
            // Create card payment - redirects to secure checkout
            $checkout = $this->snippeService->createCardPayment($order);
            Log::info('Card payment response', ['checkout' => $checkout]);
            
            if (!$checkout) {
                Log::error('Payment initiation failed', ['order_id' => $orderId]);
                return back()->with('error', 'Failed to initiate payment. Please try again.');
            }

            // Redirect to card payment URL
            if (isset($checkout['payment_url'])) {
                Log::info('Redirecting to payment_url', ['url' => $checkout['payment_url']]);
                return redirect($checkout['payment_url']);
            }
        } else {
            // Create direct mobile money payment (USSD push) - no redirect needed
            $payment = $this->snippeService->createMobileMoneyPayment($order);
            Log::info('Mobile money payment response', ['payment' => $payment]);
            
            if (!$payment) {
                Log::error('Payment initiation failed', ['order_id' => $orderId]);
                return back()->with('error', 'Failed to initiate payment. Please try again.');
            }

            // Store payment reference and return to payment page with status
            $order->update([
                'payment_reference' => $payment['reference'],
                'payment_token' => $payment['payment_token'],
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
