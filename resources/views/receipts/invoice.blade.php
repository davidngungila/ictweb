<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f5f5f5;
        }
        .invoice {
            background: white;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            border-bottom: 2px solid #0066cc;
            padding-bottom: 20px;
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
            padding: 15px 0;
            background: #f0f8ff;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            padding: 15px;
        }
        .total-label {
            color: #0066cc;
        }
        .total-value {
            color: #0066cc;
        }
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="invoice">
        <div class="header">
            <div class="logo">Jezdan Technology</div>
            <div class="invoice-details">
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
                <span class="info-label">Description</span>
                <span class="info-value">{{ $invoice->description }}</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Payment Summary</div>
            <div class="info-row">
                <span class="info-label">Total Package Amount</span>
                <span class="info-value">TZS {{ number_format($order->total_price, 0) }}</span>
            </div>
            <div class="info-row" style="background: #f0f8ff; padding: 10px; border-radius: 5px;">
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

        <div style="margin-top: 20px; padding: 15px; background: #fff3cd; border-left: 4px solid #ffc107; border-radius: 5px; font-size: 14px; color: #856404;">
            <strong>Note:</strong> This is a 30% advance payment invoice. The remaining balance of TZS {{ number_format($order->remaining_balance, 0) }} will be due upon project completion.
        </div>

        <div class="footer">
            <p>Thank you for choosing Jezdan Technology!</p>
            <p>Contact: info@jezdantech.com | Phone: +255 XXX XXX XXX</p>
            <p>Dar es Salaam, Tanzania</p>
        </div>
    </div>
</body>
</html>
