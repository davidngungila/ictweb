<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt - {{ $order->order_number }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .receipt {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #2c3e50;
            margin: 0;
        }
        .header p {
            color: #7f8c8d;
            margin: 5px 0 0;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        .info-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }
        .info-item label {
            display: block;
            color: #7f8c8d;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }
        .info-item span {
            font-weight: 600;
            color: #2c3e50;
        }
        .features {
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .features h3 {
            margin: 0 0 15px;
            color: #2c3e50;
        }
        .features span {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            margin: 5px;
            font-size: 0.85rem;
        }
        .total {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
        }
        .total h2 {
            margin: 0 0 10px;
            font-size: 1.5rem;
        }
        .total .amount {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #7f8c8d;
            font-size: 0.85rem;
        }
        .status-paid {
            background: #27ae60;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            display: inline-block;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="header">
            <h1>🧾 Payment Receipt</h1>
            <p>Jezdan Technology - ICT Solutions</p>
            <span class="status-paid">✓ PAID</span>
        </div>

        <div class="info-grid">
            <div class="info-item">
                <label>Receipt Number</label>
                <span>REC-{{ $order->order_number }}</span>
            </div>
            <div class="info-item">
                <label>Payment Date</label>
                <span>{{ now()->format('M d, Y - H:i') }}</span>
            </div>
            <div class="info-item">
                <label>Client Name</label>
                <span>{{ $order->client_name }}</span>
            </div>
            <div class="info-item">
                <label>Phone Number</label>
                <span>{{ $order->client_phone }}</span>
            </div>
            <div class="info-item">
                <label>Email</label>
                <span>{{ $order->client_email }}</span>
            </div>
            <div class="info-item">
                <label>Order Number</label>
                <span>{{ $order->order_number }}</span>
            </div>
        </div>

        @if($order->service)
        <div class="info-item" style="margin-bottom: 20px;">
            <label>Service</label>
            <span>{{ $order->service->name }}</span>
        </div>
        @endif

        @if($order->package)
        <div class="info-item" style="margin-bottom: 20px;">
            <label>Package</label>
            <span>{{ $order->package->name }}</span>
        </div>
        @endif

        <div class="features">
            <h3>Selected Features</h3>
            @foreach($order->selected_features as $feature)
            <span>{{ ucfirst(str_replace('_', ' ', $feature)) }}</span>
            @endforeach
        </div>

        <div class="info-grid" style="margin-top: 20px;">
            <div class="info-item">
                <label>Total Price</label>
                <span>TZS {{ number_format($order->total_price, 0) }}</span>
            </div>
            <div class="info-item">
                <label>Advance Payment (30%)</label>
                <span>TZS {{ number_format($order->advance_payment, 0) }}</span>
            </div>
            <div class="info-item">
                <label>Remaining Balance</label>
                <span>TZS {{ number_format($order->remaining_balance, 0) }}</span>
            </div>
            <div class="info-item">
                <label>Payment Method</label>
                <span>Snippe Payment Gateway</span>
            </div>
        </div>

        <div class="total">
            <h2>Amount Paid</h2>
            <div class="amount">TZS {{ number_format($order->advance_payment, 0) }}</div>
        </div>

        <div class="footer">
            <p><strong>Jezdan Technology</strong></p>
            <p>Moshi, Kilimanjaro, Tanzania</p>
            <p>Phone: +255 685 847 002 | +255 622 239 304</p>
            <p>Email: info@jezdantech.com</p>
            <p style="margin-top: 15px;">Thank you for your payment!</p>
        </div>
    </div>
</body>
</html>
