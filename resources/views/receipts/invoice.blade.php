<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice - Jezdan Technology</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #fff;
            line-height: 1.5;
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 0;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .header-image {
            width: 100%;
            display: block;
        }
        .content {
            padding: 40px;
        }
        .invoice-header {
            display: table;
            width: 100%;
            margin-bottom: 40px;
        }
        .header-left {
            display: table-cell;
            vertical-align: top;
        }
        .header-right {
            display: table-cell;
            vertical-align: top;
            text-align: right;
        }
        .title {
            font-size: 32px;
            font-weight: bold;
            color: #0066cc;
            margin: 0;
            text-transform: uppercase;
        }
        .invoice-meta {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }
        .invoice-meta b {
            color: #333;
        }
        .billing-grid {
            display: table;
            width: 100%;
            margin-bottom: 40px;
        }
        .billing-col {
            display: table-cell;
            width: 50%;
            vertical-align: top;
        }
        .billing-title {
            font-size: 14px;
            font-weight: bold;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 10px;
            border-bottom: 2px solid #0066cc;
            display: inline-block;
        }
        .billing-info {
            font-size: 15px;
        }
        .billing-info b {
            font-size: 16px;
        }
        table.items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        table.items th {
            background: #f8fafc;
            color: #333;
            text-align: left;
            padding: 12px 15px;
            font-size: 14px;
            border-bottom: 2px solid #eee;
        }
        table.items td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            font-size: 15px;
        }
        .totals-section {
            margin-left: auto;
            width: 300px;
        }
        .total-row {
            display: table;
            width: 100%;
            margin-bottom: 10px;
        }
        .total-label {
            display: table-cell;
            text-align: right;
            padding-right: 20px;
            color: #666;
            font-size: 14px;
        }
        .total-value {
            display: table-cell;
            text-align: right;
            font-weight: bold;
            font-size: 16px;
        }
        .grand-total {
            background: #0066cc;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .grand-total .total-label {
            color: white;
            font-weight: bold;
        }
        .grand-total .total-value {
            font-size: 20px;
        }
        .payment-link-box {
            margin-top: 40px;
            text-align: center;
            background: #f0f7ff;
            padding: 30px;
            border-radius: 12px;
            border: 2px dashed #0066cc;
        }
        .btn-pay {
            display: inline-block;
            background: #0066cc;
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            margin-top: 15px;
        }
        .footer {
            margin-top: 60px;
            text-align: center;
            font-size: 12px;
            color: #999;
            padding: 20px;
            border-top: 1px solid #eee;
        }
        .note {
            margin-top: 30px;
            font-size: 13px;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <!-- Header Image -->
        @php
            $headerImage = public_path('header_pdf.png');
            $headerBase64 = '';
            if (file_exists($headerImage)) {
                $headerBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($headerImage));
            }
        @endphp
        
        @if($headerBase64)
            <img src="{{ $headerBase64 }}" alt="Jezdan Technology Header" class="header-image">
        @else
            <div style="padding: 20px; background: #0066cc; color: white; text-align: center; font-weight: bold;">
                JEZDAN TECHNOLOGY
            </div>
        @endif

        <div class="content">
            <div class="invoice-header">
                <div class="header-left">
                    <h1 class="title">Invoice</h1>
                    <div class="invoice-meta">
                        Order #: <b>{{ $order->order_number }}</b><br>
                        Invoice #: <b>{{ $invoice->invoice_number }}</b>
                    </div>
                </div>
                <div class="header-right">
                    <div class="invoice-meta">
                        Date: <b>{{ \Carbon\Carbon::parse($invoice->created_at)->format('d M Y') }}</b><br>
                        Due Date: <b>{{ \Carbon\Carbon::parse($invoice->due_date)->format('d M Y') }}</b>
                    </div>
                </div>
            </div>

            <div class="billing-grid">
                <div class="billing-col">
                    <div class="billing-title">Bill To</div>
                    <div class="billing-info">
                        <b>{{ $invoice->client_name }}</b><br>
                        {{ $invoice->client_email }}<br>
                        {{ $invoice->client_phone }}
                    </div>
                </div>
                <div class="billing-col" style="text-align: right;">
                    <div class="billing-title">From</div>
                    <div class="billing-info">
                        <b>Jezdan Technology</b><br>
                        Dar es Salaam, Tanzania<br>
                        info@jezdantech.com<br>
                        +255 685 847 002
                    </div>
                </div>
            </div>

            <table class="items">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th style="text-align: right;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div style="font-weight: bold; font-size: 16px; color: #0066cc; margin-bottom: 5px;">
                                {{ \App\Models\Service::find($order->service_id)->name ?? 'Service' }} - 
                                {{ \App\Support\PackagePricing::package($order->service_id, $order->package_id)['name'] ?? 'Package' }}
                            </div>
                            
                            <div style="margin-top: 10px;">
                                <div style="font-weight: bold; font-size: 13px; color: #666; text-transform: uppercase;">Included Features:</div>
                                <ul style="margin: 5px 0; padding-left: 20px; font-size: 13px; color: #555;">
                                    @foreach($order->selected_features ?? [] as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            @if(!empty($order->selected_addons))
                            <div style="margin-top: 10px;">
                                <div style="font-weight: bold; font-size: 13px; color: #666; text-transform: uppercase;">Extra Add-Ons:</div>
                                <ul style="margin: 5px 0; padding-left: 20px; font-size: 13px; color: #555;">
                                    @php $addonCatalog = \App\Support\PackagePricing::addonPrices(); @endphp
                                    @foreach($order->selected_addons as $addonSlug)
                                        <li>{{ ucwords(str_replace('_', ' ', $addonSlug)) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if($order->notes)
                            <div style="margin-top: 10px; padding: 10px; background: #f9f9f9; border-left: 3px solid #ddd; font-size: 13px;">
                                <strong>Client Notes:</strong> {{ $order->notes }}
                            </div>
                            @endif
                            
                            <div style="margin-top: 15px; font-size: 12px; color: #999; border-top: 1px dashed #eee; padding-top: 5px;">
                                Full Project Amount: TZS {{ number_format($order->total_price, 0) }}
                            </div>
                        </td>
                        <td style="text-align: right; font-weight: bold; vertical-align: top;">TZS {{ number_format($order->total_price, 0) }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="totals-section">
                <div class="total-row">
                    <div class="total-label">Subtotal</div>
                    <div class="total-value">TZS {{ number_format($order->total_price, 0) }}</div>
                </div>
                <div class="total-row">
                    <div class="total-label">Tax (0%)</div>
                    <div class="total-value">TZS 0</div>
                </div>
                <div class="total-row">
                    <div class="total-label">Total Amount</div>
                    <div class="total-value">TZS {{ number_format($order->total_price, 0) }}</div>
                </div>
                <div class="total-row" style="color: #0066cc; margin-top: 10px;">
                    @php
                        $advancePercent = $order->total_price > 0 ? round(($order->advance_payment / $order->total_price) * 100) : 0;
                    @endphp
                    <div class="total-label" style="color: #0066cc;">Advance Payment ({{ $advancePercent }}%)</div>
                    <div class="total-value">TZS {{ number_format($order->advance_payment, 0) }}</div>
                </div>
                
                <div class="total-row grand-total">
                    <div class="total-label">Amount Due Now</div>
                    <div class="total-value">TZS {{ number_format($invoice->amount, 0) }}</div>
                </div>
            </div>

            @if(isset($order->payment_page_token))
            <div class="payment-link-box">
                <div style="font-weight: bold; color: #0066cc; margin-bottom: 5px;">Ready to start your project?</div>
                <div style="font-size: 14px; color: #666;">Click the button below to pay your deposit securely via Mobile Money or Card.</div>
                <a href="{{ route('payment.show', ['checkout' => $order->payment_page_token]) }}" class="btn-pay">PAY DEPOSIT NOW</a>
            </div>
            @endif

            <div class="note">
                <b>Note:</b> Work on your project will begin immediately after the advance payment is received. The remaining balance of TZS {{ number_format($order->remaining_balance, 0) }} will be due according to the agreed payment schedule.
            </div>

            <div class="footer">
                <p>This is a computer-generated document. No signature is required.</p>
                <p>&copy; {{ date('Y') }} Jezdan Technology. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
