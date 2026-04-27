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
        $services = Service::where('status', 'active')->get();
        $packages = Package::where('status', 'active')->get();
        return view('pages.package-selection', compact('services', 'packages'));
    }

    public function processOrder(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            'service_id' => 'nullable|exists:services,id',
            'package_id' => 'nullable|exists:packages,id',
            'selected_features' => 'required|array',
            'selected_features.*' => 'string',
            'notes' => 'nullable|string',
        ]);

        $service = Service::find($request->service_id);
        $package = Package::find($request->package_id);

        // Calculate total price
        $basePrice = $package ? $package->price : ($service ? $service->base_price : 0);
        $totalPrice = $basePrice;

        // Add feature costs if needed (you can define feature pricing logic here)
        // For now, we'll assume features are included in the package price

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
                'service_id' => $request->service_id,
                'package_id' => $request->package_id,
                'selected_features' => $validated['selected_features'],
                'total_price' => $totalPrice,
                'advance_payment' => $advancePayment,
                'remaining_balance' => $remainingBalance,
                'status' => 'pending',
                'notes' => $validated['notes'] ?? null,
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

            DB::commit();

            return redirect()->route('payment.show', ['order' => $order->id])
                ->with('success', 'Order created successfully. Please complete the advance payment.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Failed to create order. Please try again.');
        }
    }

    public function showPaymentPage($orderId)
    {
        $order = PackageOrder::with(['service', 'package'])->findOrFail($orderId);
        return view('pages.payment', compact('order'));
    }

    public function initiatePayment(Request $request, $orderId)
    {
        $order = PackageOrder::with(['service', 'package'])->findOrFail($orderId);
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
        $order = PackageOrder::with(['service', 'package'])->findOrFail($orderId);
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
