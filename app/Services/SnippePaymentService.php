<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\PackageOrder;
use App\Models\Invoice;

class SnippePaymentService
{
    protected $snippeKey;
    protected $webhookSecret;
    protected $baseUrl = 'https://api.snippe.sh';

    public function __construct()
    {
        $this->snippeKey = 'snp_3237bfe6ff9bc8592d84438d511d2f9613ee85521561e03584762138b6f027e3';
        $this->webhookSecret = 'whsec_f49fd8c6730db5eae37648fcb059194b6a7b8529b19be5937de5c33e4527f519';
    }

    /**
     * Create a payment checkout session
     */
    public function createCheckout($order)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
                'Content-Type' => 'application/json',
                'Idempotency-Key' => 'order-' . $order->id . '-' . time(),
            ])->post($this->baseUrl . '/api/v1/sessions', [
                'amount' => (int) $order->advance_payment,
                'currency' => 'TZS',
                'allowed_methods' => ['mobile_money', 'card'],
                'customer' => [
                    'name' => $order->client_name,
                    'phone' => $this->formatPhoneNumber($order->client_phone),
                    'email' => $order->client_email,
                ],
                'description' => "Order #{$order->order_number} - 30% Advance Payment",
                'redirect_url' => route('payment.confirmation', ['order' => $order->id]),
                // 'webhook_url' => route('webhook.snippe'), // Commented out for localhost testing (requires HTTPS)
                'metadata' => [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                    'client_name' => $order->client_name,
                    'client_email' => $order->client_email,
                    'client_phone' => $order->client_phone,
                ],
                'expires_in' => 3600, // 1 hour
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return [
                    'checkout_url' => $data['data']['checkout_url'] ?? null,
                    'payment_link_url' => $data['data']['payment_link_url'] ?? null,
                    'reference' => $data['data']['reference'] ?? null,
                ];
            }

            Log::error('Snippe session creation failed', [
                'response' => $response->body(),
                'order_id' => $order->id,
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('Snippe checkout error', [
                'error' => $e->getMessage(),
                'order_id' => $order->id,
            ]);
            return null;
        }
    }

    /**
     * Verify webhook signature
     */
    public function verifyWebhookSignature($payload, $signature)
    {
        $expectedSignature = hash_hmac('sha256', $payload, $this->webhookSecret);
        return hash_equals($expectedSignature, $signature);
    }

    /**
     * Process webhook event
     */
    public function processWebhook($payload)
    {
        $eventType = $payload['event_type'] ?? null;
        $data = $payload['data'] ?? [];

        switch ($eventType) {
            case 'payment.completed':
                return $this->handlePaymentCompleted($data);
            case 'payment.failed':
                return $this->handlePaymentFailed($data);
            default:
                Log::info('Unhandled webhook event', ['event_type' => $eventType]);
                return false;
        }
    }

    /**
     * Handle payment completed event
     */
    protected function handlePaymentCompleted($data)
    {
        $orderId = $data['metadata']['order_id'] ?? null;
        
        if (!$orderId) {
            Log::error('Payment completed webhook missing order_id');
            return false;
        }

        $order = \App\Models\PackageOrder::find($orderId);
        if (!$order) {
            Log::error('Order not found for payment webhook', ['order_id' => $orderId]);
            return false;
        }

        // Update order status
        $order->update(['status' => 'paid_advance']);

        // Update invoice status
        $invoice = \App\Models\Invoice::where('description', 'like', "%{$order->order_number}%")->first();
        if ($invoice) {
            $invoice->update([
                'status' => 'paid',
                'paid_date' => now(),
            ]);
        }

        // Send SMS confirmation
        $smsService = new SmsService();
        $smsService->sendPaymentConfirmation($order);

        return true;
    }

    /**
     * Create a direct mobile money payment (USSD push)
     */
    public function createMobileMoneyPayment($order)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
                'Content-Type' => 'application/json',
                'Idempotency-Key' => 'mobile-' . $order->id . '-' . time(),
            ])->post($this->baseUrl . '/v1/payments', [
                'payment_type' => 'mobile',
                'details' => [
                    'amount' => (int) $order->advance_payment,
                    'currency' => 'TZS',
                    'phone_number' => $this->formatPhoneNumber($order->client_phone),
                    'redirect_url' => route('payment.confirmation', ['order' => $order->id]),
                ],
                'phone_number' => $this->formatPhoneNumber($order->client_phone),
                'customer' => [
                    'firstname' => $this->getFirstName($order->client_name),
                    'lastname' => $this->getLastName($order->client_name),
                    'email' => $order->client_email,
                    'address' => $order->client_address ?? 'N/A',
                    'city' => $order->client_city ?? 'Dar es Salaam',
                    'state' => $order->client_state ?? 'DSM',
                    'postcode' => $order->client_postcode ?? '14101',
                    'country' => 'TZ',
                ],
                // 'webhook_url' => route('webhook.snippe'), // Commented out for localhost testing (requires HTTPS)
                'metadata' => [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                ],
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return [
                    'payment_token' => $data['data']['payment_token'] ?? null,
                    'reference' => $data['data']['reference'] ?? null,
                    'status' => $data['data']['status'] ?? null,
                    'payment_qr_code' => $data['data']['payment_qr_code'] ?? null,
                ];
            }

            Log::error('Snippe mobile money payment failed', [
                'response' => $response->body(),
                'order_id' => $order->id,
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('Snippe mobile money payment error', [
                'error' => $e->getMessage(),
                'order_id' => $order->id,
            ]);
            return null;
        }
    }

    /**
     * Create a card payment directly
     */
    public function createCardPayment($order)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
                'Content-Type' => 'application/json',
                'Idempotency-Key' => 'card-' . $order->id . '-' . time(),
            ])->post($this->baseUrl . '/v1/payments', [
                'payment_type' => 'card',
                'details' => [
                    'amount' => (int) $order->advance_payment,
                    'currency' => 'TZS',
                    'redirect_url' => route('payment.confirmation', ['order' => $order->id]),
                    'cancel_url' => route('payment.show', ['order' => $order->id]),
                ],
                'phone_number' => $this->formatPhoneNumber($order->client_phone),
                'customer' => [
                    'firstname' => $this->getFirstName($order->client_name),
                    'lastname' => $this->getLastName($order->client_name),
                    'email' => $order->client_email,
                    'address' => $order->client_address ?? 'N/A',
                    'city' => $order->client_city ?? 'Dar es Salaam',
                    'state' => $order->client_state ?? 'DSM',
                    'postcode' => $order->client_postcode ?? '14101',
                    'country' => 'TZ',
                ],
                // 'webhook_url' => route('webhook.snippe'), // Commented out for localhost testing (requires HTTPS)
                'metadata' => [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                ],
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return [
                    'payment_url' => $data['data']['payment_url'] ?? null,
                    'payment_token' => $data['data']['payment_token'] ?? null,
                    'reference' => $data['data']['reference'] ?? null,
                ];
            }

            Log::error('Snippe card payment failed', [
                'response' => $response->body(),
                'order_id' => $order->id,
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('Snippe card payment error', [
                'error' => $e->getMessage(),
                'order_id' => $order->id,
            ]);
            return null;
        }
    }

    /**
     * Handle payment failed event
     */
    protected function handlePaymentFailed($data)
    {
        $orderId = $data['metadata']['order_id'] ?? null;
        
        if (!$orderId) {
            Log::error('Payment failed webhook missing order_id', ['data' => $data]);
            return false;
        }

        $order = PackageOrder::find($orderId);
        if ($order) {
            $order->update([
                'status' => 'payment_failed',
                'failure_reason' => $data['failure_reason'] ?? 'Unknown',
            ]);
            Log::info('Payment failed recorded', ['order_id' => $orderId]);
        }

        return true;
    }

    /**
     * Handle payment voided event
     */
    protected function handlePaymentVoided($data)
    {
        $orderId = $data['metadata']['order_id'] ?? null;
        
        if (!$orderId) {
            Log::error('Payment voided webhook missing order_id', ['data' => $data]);
            return false;
        }

        $order = PackageOrder::find($orderId);
        if ($order) {
            $order->update(['status' => 'payment_voided']);
            Log::info('Payment voided recorded', ['order_id' => $orderId]);
        }

        return true;
    }

    /**
     * Handle payment expired event
     */
    protected function handlePaymentExpired($data)
    {
        $orderId = $data['metadata']['order_id'] ?? null;
        
        if (!$orderId) {
            Log::error('Payment expired webhook missing order_id', ['data' => $data]);
            return false;
        }

        $order = PackageOrder::find($orderId);
        if ($order) {
            $order->update(['status' => 'payment_expired']);
            Log::info('Payment expired recorded', ['order_id' => $orderId]);
        }

        return true;
    }

    /**
     * Get payment status by reference
     */
    public function getPaymentStatus($reference)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
            ])->get($this->baseUrl . '/v1/payments/' . $reference);

            if ($response->successful()) {
                return $response->json();
            }

            return null;
        } catch (\Exception $e) {
            Log::error('Failed to get payment status', [
                'error' => $e->getMessage(),
                'reference' => $reference,
            ]);
            return null;
        }
    }

    /**
     * Format phone number to international format
     */
    protected function formatPhoneNumber($phone)
    {
        // Remove any non-digit characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // Add 255 prefix if not present
        if (strlen($phone) === 10 && substr($phone, 0, 1) === '0') {
            $phone = '255' . substr($phone, 1);
        } elseif (strlen($phone) === 9) {
            $phone = '255' . $phone;
        }
        
        return '+' . $phone;
    }

    /**
     * Extract first name from full name
     */
    protected function getFirstName($fullName)
    {
        $parts = explode(' ', trim($fullName));
        return $parts[0] ?? '';
    }

    /**
     * Extract last name from full name
     */
    protected function getLastName($fullName)
    {
        $parts = explode(' ', trim($fullName));
        if (count($parts) > 1) {
            array_shift($parts);
            return implode(' ', $parts);
        }
        return '';
    }
}
