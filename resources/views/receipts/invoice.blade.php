<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }
        .invoice {
            background: white;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header-image {
            width: 100%;
            display: block;
        }
        .header-content {
            padding: 30px 40px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #0066cc;
        }
        .invoice-details {
            text-align: right;
        }
        .invoice-number {
            font-size: 18px;
            font-weight: bold;
        }
        .invoice-date {
            color: #666;
            margin-top: 5px;
        }
        .section {
            margin-bottom: 30px;
            padding: 0 40px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 10px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .info-label {
            color: #666;
            font-weight: 500;
        }
        .info-value {
            font-weight: 600;
            color: #333;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 40px;
            background: #f0f8ff;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .total-label {
            color: #0066cc;
        }
        .total-value {
            color: #0066cc;
        }
        .footer {
            margin-top: 40px;
            padding: 20px 40px;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .note-box {
            margin: 20px 40px;
            padding: 15px;
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            border-radius: 5px;
            font-size: 14px;
            color: #856404;
        }
    </style>
</head>
<body>
    <div class="invoice">
        <!-- Header Image -->
        @if(isset($invoice->header_image) && $invoice->header_image)
            <img src="{{ $invoice->header_image }}" alt="Jezdan Technology Header" class="header-image" style="display: block;">
        @else
            <img src="{{ url('header_pdf.png') }}" alt="Jezdan Technology Header" class="header-image" style="display: block;">
        @endif
        
        <div class="header-content">
            <div class="header">
                <div style="width: 100%; border-bottom: 2px solid #0066cc; padding-bottom: 20px;">
                    <!-- Horizontal line instead of logo -->
                </div>
                <div class="invoice-details" style="text-align: right;">
                    <div class="invoice-number">Invoice #{{ $invoice->invoice_number }}</div>
                    <div class="invoice-date">Date: {{ $invoice->created_at->format('d M Y') }}</div>
                    <div class="invoice-date">Due: {{ $invoice->due_date->format('d M Y') }}</div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Bill To</div>
                <div class="info-row">
                    <span class="info-label">Name</span>
                    <span class="info-value">{{ $invoice->client_name }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email</span>
                    <span class="info-value">{{ $invoice->client_email }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Phone</span>
                    <span class="info-value">{{ $invoice->client_phone }}</span>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Order Details</div>
                <div class="info-row">
                    <span class="info-label">Order Number</span>
                    <span class="info-value">{{ $order->order_number }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Service</span>
                    <span class="info-value">{{ $invoice->description }}</span>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Payment Summary</div>
                <div class="info-row">
                    <span class="info-label">Total Package Amount</span>
                    <span class="info-value">TZS {{ number_format($order->total_price, 0) }}</span>
                </div>
                <div class="info-row" style="background: #f0f8ff; padding: 10px; border-radius: 5px; margin: 5px -40px; padding-left: 40px; padding-right: 40px;">
                    <span class="info-label" style="color: #0066cc; font-weight: bold;">Advance Payment (30%)</span>
                    <span class="info-value" style="color: #0066cc; font-weight: bold;">TZS {{ number_format($order->advance_payment, 0) }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Remaining Balance (70%)</span>
                    <span class="info-value">TZS {{ number_format($order->remaining_balance, 0) }}</span>
                </div>
            </div>

            <div class="total-row">
                <span class="total-label">Amount Due Now (30% Advance)</span>
                <span class="total-value">TZS {{ number_format($invoice->amount, 0) }}</span>
            </div>

            <div class="note-box">
                <strong>Note:</strong> This is a 30% advance payment invoice. The remaining balance of TZS {{ number_format($order->remaining_balance, 0) }} will be due upon project completion.
            </div>

            <div class="footer">
                <p>Thank you for choosing Jezdan Technology!</p>
                <p>Contact: info@jezdantech.com | Phone: +255 XXX XXX XXX</p>
                <p>Dar es Salaam, Tanzania</p>
            </div>
        </div>
    </div>
</body>
</html>
