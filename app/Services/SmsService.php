<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SmsService
{
    protected $smsToken;
    protected $senderName;
    protected $baseUrl = 'https://messaging-service.co.tz';

    public function __construct()
    {
        $this->smsToken = '1eae2ad8cc14b11552a9dc54317f4e55';
        $this->senderName = 'JEZDANTECH';
    }

    /**
     * Send SMS
     */
    public function sendSms($phone, $message)
    {
        try {
            // Format phone number - remove + and spaces
            $phone = preg_replace('/[^0-9]/', '', $phone);
            
            // Ensure phone starts with country code if not already
            if (strlen($phone) === 10 && substr($phone, 0, 1) === '0') {
                $phone = '255' . substr($phone, 1);
            }

            $response = Http::get($this->baseUrl . '/link/sms/v2/text/single', [
                'token' => $this->smsToken,
                'from' => $this->senderName,
                'to' => $phone,
                'text' => $message,
            ]);

            if ($response->successful()) {
                Log::info('SMS sent successfully', [
                    'phone' => $phone,
                    'response' => $response->json(),
                ]);
                return true;
            }

            Log::error('SMS sending failed', [
                'phone' => $phone,
                'response' => $response->body(),
            ]);

            return false;
        } catch (\Exception $e) {
            Log::error('SMS service error', [
                'error' => $e->getMessage(),
                'phone' => $phone,
            ]);
            return false;
        }
    }

    /**
     * Send payment confirmation SMS
     */
    public function sendPaymentConfirmation($order)
    {
        $message = "Thank you {$order->client_name}! Your payment of TZS " . number_format($order->advance_payment, 0) . " for Order #{$order->order_number} has been received. We will contact you shortly to discuss your project details. - Jezdan Technology";
        
        return $this->sendSms($order->client_phone, $message);
    }

    /**
     * Send order confirmation SMS
     */
    public function sendOrderConfirmation($order)
    {
        $message = "Hello {$order->client_name}! Your order #{$order->order_number} has been received. Total: TZS " . number_format($order->total_price, 0) . ". Advance payment: TZS " . number_format($order->advance_payment, 0) . ". Please complete payment to proceed. - Jezdan Technology";
        
        return $this->sendSms($order->client_phone, $message);
    }
}
