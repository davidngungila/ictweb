<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FIA Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #333;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #015425;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #015425;
            margin: 0;
            font-size: 24px;
        }
        .info-section {
            margin-bottom: 25px;
        }
        .info-row {
            display: flex;
            margin-bottom: 8px;
        }
        .info-label {
            font-weight: bold;
            width: 200px;
            color: #555;
        }
        .info-value {
            flex: 1;
        }
        .amount {
            font-weight: bold;
            color: #015425;
        }
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            font-size: 10px;
            color: #777;
        }
        .confirmation-box {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .action-buttons {
            text-align: center;
            margin: 30px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #015425;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        @media print {
            .action-buttons {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>FIA Payment Confirmation</h1>
        <p>Official Payment Receipt</p>
    </div>

    @if(session('success'))
        <div class="confirmation-box">
            <h4>✓ {{ session('success') }}</h4>
        </div>
    @endif

    <div class="info-section">
        <h3>Member Information</h3>
        <div class="info-row">
            <div class="info-label">Member ID:</div>
            <div class="info-value">{{ $confirmation->member_id }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Member Name:</div>
            <div class="info-value">{{ $confirmation->member_name }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Member Type:</div>
            <div class="info-value">{{ $confirmation->member_type }}</div>
        </div>
        @if(!empty($confirmation->member_email))
        <div class="info-row">
            <div class="info-label">Email:</div>
            <div class="info-value">{{ $confirmation->member_email }}</div>
        </div>
        @endif
    </div>

    <div class="info-section">
        <h3>Payment Details</h3>
        <div class="info-row">
            <div class="info-label">Total Amount to Pay:</div>
            <div class="info-value amount">{{ number_format($confirmation->amount_to_pay, 2) }} TZS</div>
        </div>
        @if($paymentRecord)
        <div class="info-row">
            <div class="info-label">Gawio la FIA:</div>
            <div class="info-value">{{ number_format($paymentRecord->gawio_la_fia, 2) }} TZS</div>
        </div>
        <div class="info-row">
            <div class="info-label">FIA Ilivyo Koma:</div>
            <div class="info-value">{{ number_format($paymentRecord->fia_iliyokomaa, 2) }} TZS</div>
        </div>
        <div class="info-row">
            <div class="info-label">Jumla:</div>
            <div class="info-value">{{ number_format($paymentRecord->jumla, 2) }} TZS</div>
        </div>
        @if($paymentRecord->malipo_vya_vipande)
        <div class="info-row">
            <div class="info-label">Malipo ya VIP:</div>
            <div class="info-value">{{ number_format($paymentRecord->malipo_vya_vipande, 2) }} TZS</div>
        </div>
        @endif
        @if($paymentRecord->loan)
        <div class="info-row">
            <div class="info-label">Loan Reference:</div>
            <div class="info-value">{{ $paymentRecord->loan }}</div>
        </div>
        @endif
        <div class="info-row">
            <div class="info-label">Kiasi Baki:</div>
            <div class="info-value">{{ number_format($paymentRecord->kiasi_baki, 2) }} TZS</div>
        </div>
        @endif
        
        @if($confirmation->payment_method)
        <div class="info-row">
            <div class="info-label">Payment Method:</div>
            <div class="info-value">
                @switch($confirmation->payment_method)
                    @case('akiba')
                        Naweka Akiba
                        @break
                    @case('impe')
                        Nawekeza tena IMPE
                        @break
                    @case('cash_mobile')
                        CASH - Kwa Simu (Halopes/Mix By Yas)
                        @break
                    @case('cash_bank')
                        CASH - Bank
                        @break
                @endswitch
            </div>
        </div>
        @endif
        
        @if($confirmation->impe_years)
        <div class="info-row">
            <div class="info-label">IMPE Miaka:</div>
            <div class="info-value">{{ $confirmation->impe_years }} Miaka</div>
        </div>
        @endif
        
        @if($confirmation->mobile_number)
        <div class="info-row">
            <div class="info-label">Namba ya Simu:</div>
            <div class="info-value">{{ $confirmation->mobile_number }}</div>
        </div>
        @endif
        
        @if($confirmation->mobile_account_name)
        <div class="info-row">
            <div class="info-label">Jina la Namba ya Simu:</div>
            <div class="info-value">{{ $confirmation->mobile_account_name }}</div>
        </div>
        @endif
        
        @if($confirmation->bank_name)
        <div class="info-row">
            <div class="info-label">Jina la Benki:</div>
            <div class="info-value">{{ $confirmation->bank_name }}</div>
        </div>
        @endif
    </div>

    <div class="confirmation-box">
        <h4>Payment Confirmation</h4>
        <p>This is to confirm that the above member has submitted their FIA payment details. The payment confirmation has been recorded in our system.</p>
        <p><strong>Status:</strong> <span class="amount">{{ ucfirst($confirmation->status) }}</span></p>
        @if(!empty($confirmation->notes))
        <p><strong>Notes:</strong> {{ $confirmation->notes }}</p>
        @endif
    </div>

    <div class="info-section">
        <h3>Submission Information</h3>
        <div class="info-row">
            <div class="info-label">Submission Date:</div>
            <div class="info-value">{{ \Carbon\Carbon::parse($confirmation->created_at)->format('d M Y, H:i') }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Confirmation ID:</div>
            <div class="info-value">#{{ str_pad($confirmation->id, 6, '0', STR_PAD_LEFT) }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Generated On:</div>
            <div class="info-value">{{ $generated_at->format('d M Y, H:i') }}</div>
        </div>
    </div>

    <div class="action-buttons">
        <button onclick="window.print()" class="btn btn-primary">Print Confirmation</button>
        <a href="{{ route('fia.member.verify') }}" class="btn btn-secondary">New Verification</a>
    </div>

    <div class="footer">
        <p>This is an automatically generated document. No signature required.</p>
        <p>For any inquiries, please contact the FIA administration office.</p>
        <p>Document generated on: {{ $generated_at->format('d M Y H:i:s') }}</p>
    </div>
</body>
</html>
