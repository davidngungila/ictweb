<x-mail::message>
# Hello {{ $order->client_name }},

Thank you for choosing Jezdan Technology. We have received your request for our services.

Please find the attached invoice for your order **{{ $order->order_number }}**.

## Order Summary
- **Service:** {{ \App\Models\Service::find($order->service_id)->name ?? 'Service' }}
- **Package:** {{ \App\Support\PackagePricing::package($order->service_id, $order->package_id)['name'] ?? 'Package' }}
- **Total Price:** TZS {{ number_format($order->total_price, 0) }}
- **Advance Payment (50%):** TZS {{ number_format($order->advance_payment, 0) }}

<x-mail::button :url="route('payment.show', ['checkout' => $order->payment_page_token])">
Proceed to Payment
</x-mail::button>

If you have any questions, feel free to reply to this email or contact us via WhatsApp.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
