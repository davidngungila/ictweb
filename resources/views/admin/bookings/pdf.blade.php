<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Document - {{ $booking->order_number }}</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 40px;
        }
        .header {
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header table {
            width: 100%;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #1e3a8a;
        }
        .document-title {
            text-align: right;
            font-size: 20px;
            color: #666;
            text-transform: uppercase;
        }
        .info-section {
            margin-bottom: 30px;
        }
        .info-section table {
            width: 100%;
        }
        .info-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .info-value {
            font-size: 14px;
            font-weight: bold;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .details-table th {
            background-color: #f3f4f6;
            text-align: left;
            padding: 12px;
            font-size: 12px;
            text-transform: uppercase;
            border-bottom: 1px solid #e5e7eb;
        }
        .details-table td {
            padding: 12px;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
        }
        .summary-section {
            width: 40%;
            margin-left: 60%;
        }
        .summary-row {
            padding: 10px 0;
            border-bottom: 1px solid #f3f4f6;
        }
        .summary-row.total {
            border-top: 2px solid #3b82f6;
            border-bottom: none;
            font-weight: bold;
            font-size: 16px;
        }
        .footer {
            margin-top: 50px;
            font-size: 10px;
            color: #999;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .status-badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
        }
        .status-pending { background-color: #fef3c7; color: #92400e; }
        .status-completed { background-color: #d1fae5; color: #065f46; }
        .status-cancelled { background-color: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <table>
                <tr>
                    <td>
                        <div class="logo">JEZDANTECH</div>
                        <div style="font-size: 12px; color: #666;">Empowering Your Digital Journey</div>
                    </td>
                    <td class="document-title">
                        Booking Confirmation
                        <div style="font-size: 14px; color: #3b82f6;">#{{ $booking->order_number }}</div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="info-section">
            <table>
                <tr>
                    <td width="50%">
                        <div class="info-label">Client Information</div>
                        <div class="info-value">{{ $booking->client_name }}</div>
                        <div style="font-size: 13px;">{{ $booking->client_email }}</div>
                        <div style="font-size: 13px;">{{ $booking->client_phone }}</div>
                        @if($booking->company_name)
                            <div style="font-size: 13px;">{{ $booking->company_name }}</div>
                        @endif
                    </td>
                    <td width="50%">
                        <div class="info-label">Booking Status</div>
                        <div class="status-badge status-{{ $booking->status }}">
                            {{ strtoupper($booking->status) }}
                        </div>
                        <div style="margin-top: 15px;">
                            <div class="info-label">Date of Booking</div>
                            <div class="info-value">{{ $booking->created_at->format('F d, Y') }}</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <h3 style="font-size: 16px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Service & Package Details</h3>
        <table class="details-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th style="text-align: right;">Amount (TZS)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <strong>{{ $service->name ?? 'Unknown Service' }}</strong><br>
                        <span style="font-size: 12px; color: #666;">Package: {{ $package['name'] ?? 'Custom Package' }}</span>
                        <p style="font-size: 11px; color: #777; margin-top: 5px;">{{ $package['desc'] ?? '' }}</p>
                    </td>
                    <td style="text-align: right; vertical-align: top;">
                        {{ number_format($package['price'] ?? 0, 0) }}
                    </td>
                </tr>
                @if(!empty($booking->selected_addons))
                    @php
                        $addonPrices = \App\Support\PackagePricing::addonPrices();
                        $addonLabels = \App\Support\PackagePricing::addonLabels();
                    @endphp
                    @foreach($booking->selected_addons as $addonSlug)
                        <tr>
                            <td>
                                <span style="font-size: 13px;">{{ $addonLabels[$addonSlug] ?? ucfirst(str_replace('_', ' ', $addonSlug)) }}</span>
                            </td>
                            <td style="text-align: right;">
                                {{ number_format($addonPrices[$addonSlug] ?? 0, 0) }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        @if(!empty($booking->selected_features))
            <div style="margin-bottom: 30px;">
                <div class="info-label">Included Features</div>
                <table width="100%">
                    @foreach(array_chunk($booking->selected_features, 2) as $chunk)
                        <tr>
                            @foreach($chunk as $feature)
                                <td width="50%" style="font-size: 12px; padding: 3px 0;">
                                    • {{ $feature }}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif

        @if($booking->notes)
            <div style="margin-bottom: 30px;">
                <div class="info-label">Client Notes & Requirements</div>
                <div style="font-size: 12px; background-color: #f9fafb; padding: 15px; border-radius: 5px;">
                    {{ $booking->notes }}
                </div>
            </div>
        @endif

        <div class="summary-section">
            <div class="summary-row">
                <table width="100%">
                    <tr>
                        <td style="font-size: 13px;">Total Booking Value</td>
                        <td style="text-align: right; font-weight: bold;">TZS {{ number_format($booking->total_price, 0) }}</td>
                    </tr>
                </table>
            </div>
            <div class="summary-row" style="color: #059669;">
                <table width="100%">
                    <tr>
                        <td style="font-size: 13px;">Advance Paid</td>
                        <td style="text-align: right; font-weight: bold;">TZS {{ number_format($booking->advance_payment, 0) }}</td>
                    </tr>
                </table>
            </div>
            <div class="summary-row total" style="color: #dc2626;">
                <table width="100%">
                    <tr>
                        <td>Remaining Balance</td>
                        <td style="text-align: right;">TZS {{ number_format($booking->remaining_balance, 0) }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="footer">
            <strong>JEZDANTECH Solutions</strong><br>
            Dar es Salaam, Tanzania | support@jezdantech.com | www.jezdantech.com<br>
            <p>This is an officially generated booking document. Please retain for your records.</p>
        </div>
    </div>
</body>
</html>
