<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\PackageOrder;
use App\Models\Invoice;

class SnippePaymentService
{
    protected string $snippeKey;

    protected string $webhookSecret;

    protected string $postPaymentRedirectUrl;

    protected ?string $webhookUrl;

    protected string $baseUrl;

    public function __construct()
    {
        $cfg = config('services.snippe', []);
        $this->snippeKey = (string) ($cfg['api_key'] ?? '');
        $this->webhookSecret = (string) ($cfg['webhook_secret'] ?? '');
        $this->postPaymentRedirectUrl = (string) ($cfg['post_payment_redirect_url'] ?? 'https://jezdantech.com/thank-you');
        $webhook = $cfg['webhook_url'] ?? null;
        $this->webhookUrl = is_string($webhook) && $webhook !== '' ? $webhook : null;
        $this->baseUrl = rtrim((string) ($cfg['base_url'] ?? 'https://api.snippe.sh'), '/');
    }

    public function isConfigured(): bool
    {
        return $this->snippeKey !== '';
    }

    /**
     * Create a payment checkout session
     */
    public function createCheckout($order)
    {
        try {
            $sessionPayload = [
                'amount' => (int) $order->advance_payment,
                'currency' => 'TZS',
                'allowed_methods' => ['mobile_money', 'card'],
                'customer' => [
                    'name' => $order->client_name,
                    'phone' => $this->formatPhoneForSnippe($order->client_phone),
                    'email' => $order->client_email,
                ],
                'description' => "Order #{$order->order_number} - 30% Advance Payment",
                'redirect_url' => $this->buildPostPaymentRedirectUrl($order),
                'metadata' => [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                    'client_name' => $order->client_name,
                    'client_email' => $order->client_email,
                    'client_phone' => $order->client_phone,
                ],
                'expires_in' => 3600, // 1 hour
            ];
            $sessionPayload = array_merge($sessionPayload, $this->webhookPayloadField());

            $response = Http::timeout(45)->withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
                'Content-Type' => 'application/json',
                'Idempotency-Key' => 'order-' . $order->id . '-' . time(),
            ])->post($this->baseUrl . '/api/v1/sessions', $sessionPayload);

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
    public function verifyWebhookSignature($payload, $signature, $timestamp = null)
    {
        if (!$signature) {
            return false;
        }
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
        $order->update([
            'status' => 'paid_advance',
            'payment_status' => 'completed',
        ]);

        // Update invoice status
        $invoice = \App\Models\Invoice::where('order_id', $order->id)->first();
        if (!$invoice) {
            $invoice = \App\Models\Invoice::where('description', 'like', "%{$order->order_number}%")->first();
        }
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
            $phone = $this->formatPhoneForSnippe($order->client_phone);
            if ($phone === '') {
                return ['error' => 'Please provide a valid Tanzania mobile number for M-Pesa / mobile money.'];
            }

            $payload = [
                'payment_type' => 'mobile',
                'details' => [
                    'amount' => (int) $order->advance_payment,
                    'currency' => 'TZS',
                ],
                'phone_number' => $phone,
                'customer' => $this->customerBlock($order),
                'metadata' => [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                ],
            ];
            $payload = array_merge($payload, $this->webhookPayloadField());

            $response = Http::connectTimeout(25)
                ->timeout(120)
                ->retry(3, 750, throw: false)
                ->withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
                'Content-Type' => 'application/json',
                'Idempotency-Key' => 'mobile-' . $order->id . '-' . time(),
            ])->post($this->baseUrl . '/v1/payments', $payload);

            $parsed = $this->parseV1PaymentCreateResponse($response);
            if (! $parsed['ok']) {
                Log::error('Snippe mobile money payment failed', [
                    'order_id' => $order->id,
                    'message' => $parsed['message'] ?? null,
                    'response' => $parsed['raw'] ?? $response->body(),
                ]);

                return ['error' => $this->userFacingGatewayMessage($parsed['message'] ?? null)];
            }

            $data = $parsed['data'];

            return [
                'payment_token' => $data['payment_token'] ?? null,
                'reference' => $data['reference'] ?? null,
                'status' => $data['status'] ?? null,
                'payment_qr_code' => $data['payment_qr_code'] ?? null,
            ];
        } catch (\Throwable $e) {
            Log::error('Snippe mobile money payment error', [
                'error' => $e->getMessage(),
                'order_id' => $order->id,
            ]);

            $detail = config('app.debug') ? ' '.$e->getMessage() : '';

            return ['error' => 'Failed to reach payment gateway. Check your connection and try again.'.$detail];
        }
    }

    /**
     * Create a card payment directly
     */
    public function createCardPayment($order)
    {
        try {
            $phone = $this->formatPhoneForSnippe($order->client_phone);
            if ($phone === '') {
                return ['error' => 'Please provide a valid phone number on your order for card checkout.'];
            }

            $payload = [
                'payment_type' => 'card',
                'details' => [
                    'amount' => (int) $order->advance_payment,
                    'currency' => 'TZS',
                    'redirect_url' => $this->buildPostPaymentRedirectUrl($order),
                    'cancel_url' => route('payment.show', ['order' => $order->id]),
                ],
                'phone_number' => $phone,
                'customer' => $this->customerBlock($order),
                'metadata' => [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                ],
            ];
            $payload = array_merge($payload, $this->webhookPayloadField());

            $response = Http::connectTimeout(25)
                ->timeout(120)
                ->retry(3, 750, throw: false)
                ->withHeaders([
                'Authorization' => 'Bearer ' . $this->snippeKey,
                'Content-Type' => 'application/json',
                'Idempotency-Key' => 'card-' . $order->id . '-' . time(),
            ])->post($this->baseUrl . '/v1/payments', $payload);

            $parsed = $this->parseV1PaymentCreateResponse($response);
            if (! $parsed['ok']) {
                Log::error('Snippe card payment failed', [
                    'order_id' => $order->id,
                    'message' => $parsed['message'] ?? null,
                    'response' => $parsed['raw'] ?? $response->body(),
                ]);

                return ['error' => $this->userFacingGatewayMessage($parsed['message'] ?? null)];
            }

            $data = $parsed['data'];

            return [
                'payment_url' => $data['payment_url'] ?? null,
                'payment_token' => $data['payment_token'] ?? null,
                'reference' => $data['reference'] ?? null,
            ];
        } catch (\Throwable $e) {
            Log::error('Snippe card payment error', [
                'error' => $e->getMessage(),
                'order_id' => $order->id,
            ]);

            $detail = config('app.debug') ? ' '.$e->getMessage() : '';

            return ['error' => 'Failed to reach payment gateway. Check your connection and try again.'.$detail];
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
                'payment_status' => 'failed',
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
            $response = Http::connectTimeout(8)
                ->timeout(14)
                ->retry(1, 300, throw: false)
                ->withHeaders([
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
     * Snippe expects MSISDN as digits only, e.g. 2557XXXXXXXX (no leading +).
     */
    protected function formatPhoneForSnippe(?string $phone): string
    {
        if ($phone === null || $phone === '') {
            return '';
        }
        $digits = preg_replace('/\D+/', '', $phone);
        if ($digits === null || $digits === '') {
            return '';
        }
        if (str_starts_with($digits, '0') && strlen($digits) === 10) {
            $digits = '255' . substr($digits, 1);
        } elseif (strlen($digits) === 9) {
            $digits = '255' . $digits;
        } elseif (str_starts_with($digits, '255') && strlen($digits) === 12) {
            // ok
        } elseif (str_starts_with($digits, '00255')) {
            $digits = substr($digits, 2);
        } elseif (str_starts_with($digits, '255') && strlen($digits) > 12) {
            $digits = substr($digits, 0, 12);
        }

        if (strlen($digits) < 12 || ! str_starts_with($digits, '255')) {
            return '';
        }

        return $digits;
    }

    protected function customerBlock(PackageOrder $order): array
    {
        $first = $this->getFirstName($order->client_name);
        $last = $this->getLastName($order->client_name);
        if ($last === '') {
            $last = $first !== '' ? $first : 'Customer';
        }
        if ($first === '') {
            $first = 'Customer';
        }

        return [
            'firstname' => $first,
            'lastname' => $last,
            'email' => $order->client_email,
            'address' => $order->client_address ?? 'N/A',
            'city' => $order->client_city ?? 'Dar es Salaam',
            'state' => $order->client_state ?? 'DSM',
            'postcode' => $order->client_postcode ?? '14101',
            'country' => 'TZ',
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function webhookPayloadField(): array
    {
        if ($this->webhookUrl && filter_var($this->webhookUrl, FILTER_VALIDATE_URL)) {
            return ['webhook_url' => $this->webhookUrl];
        }

        return [];
    }

    /**
     * @return array{ok: bool, data: array, message?: string, raw?: string}
     */
    protected function parseV1PaymentCreateResponse(\Illuminate\Http\Client\Response $response): array
    {
        $raw = $response->body();
        $json = $response->json();
        if (! is_array($json)) {
            return ['ok' => false, 'data' => [], 'message' => 'Invalid response from payment gateway.', 'raw' => $raw];
        }

        $data = $json['data'] ?? [];
        if (! is_array($data)) {
            $data = [];
        }

        $topStatus = $json['status'] ?? null;
        $httpOk = $response->successful();

        $hasRedirectOrToken = ! empty($data['payment_url']) || ! empty($data['payment_token']);
        $hasMobileRef = ! empty($data['reference']) || ! empty($data['payment_token']);
        $usable = $hasRedirectOrToken || $hasMobileRef;

        $failedTop = in_array($topStatus, ['error', 'failed'], true);
        $dataStatus = $data['status'] ?? null;
        $failedData = in_array($dataStatus, ['error', 'failed'], true);

        if ($httpOk && $usable && ! $failedTop && ! $failedData) {
            return ['ok' => true, 'data' => $data];
        }

        $msg = $json['message'] ?? ($data['message'] ?? null);
        if ($msg === null && isset($json['errors'])) {
            $err = $json['errors'];
            $msg = is_array($err) ? json_encode($err) : (string) $err;
        }

        return [
            'ok' => false,
            'data' => $data,
            'message' => is_string($msg) && $msg !== '' ? $msg : 'Payment gateway rejected the request.',
            'raw' => $raw,
        ];
    }

    protected function userFacingGatewayMessage(?string $apiMessage): string
    {
        if ($apiMessage === null || $apiMessage === '') {
            return 'Failed to initiate payment. Please try again.';
        }
        $trimmed = trim($apiMessage);
        if (config('app.debug')) {
            return strlen($trimmed) > 500 ? substr($trimmed, 0, 500) . '…' : $trimmed;
        }

        if (strlen($trimmed) <= 180) {
            return $trimmed;
        }

        return 'Failed to initiate payment. Please try again.';
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

    /**
     * Build post-payment redirect URL and attach order context.
     */
    protected function buildPostPaymentRedirectUrl($order)
    {
        $separator = str_contains($this->postPaymentRedirectUrl, '?') ? '&' : '?';
        return $this->postPaymentRedirectUrl . $separator . http_build_query([
            'order' => $order->id,
            'order_number' => $order->order_number,
        ]);
    }
}
