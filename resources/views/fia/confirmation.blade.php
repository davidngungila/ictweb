<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIA Payment Confirmation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iosevka+Charon:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=MonteCarlo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Manrope', sans-serif;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            min-height: 100vh;
        }
        .heading-font {
            font-family: 'Lato', sans-serif;
        }
        .mono-font {
            font-family: 'Iosevka Charon', monospace;
        }
        .elegant-font {
            font-family: 'MonteCarlo', cursive;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .gradient-text {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .pulse-animation {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .slide-in {
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .hover-lift {
            transition: all 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .success-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 4px 12px;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        @media print {
            body {
                background: white;
            }
            .no-print {
                display: none !important;
            }
            .glass-effect {
                background: white;
                backdrop-filter: none;
                border: none;
            }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center px-4 py-12 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating-animation"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-emerald-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating-animation" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-teal-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating-animation" style="animation-delay: 4s;"></div>
    </div>

    <!-- Main content -->
    <div class="relative z-10 w-full max-w-4xl mx-auto">
        <!-- Action buttons -->
        <div class="flex justify-end space-x-4 mb-6 no-print">
            <button onclick="window.print()" class="flex items-center px-4 py-2 bg-white text-green-700 rounded-lg hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Print
            </button>
            <button onclick="saveAsPDF()" class="flex items-center px-4 py-2 bg-white text-green-700 rounded-lg hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Save as PDF
            </button>
        </div>

        <!-- Confirmation card -->
        <div id="confirmation-content" class="glass-effect rounded-2xl shadow-2xl p-8 lg:p-12 hover-lift slide-in">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mb-4 pulse-animation">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 heading-font mb-2">
                    <span class="elegant-font text-5xl block">FIA</span>
                    Payment Confirmation
                </h1>
                <p class="text-gray-600">
                    Your payment verification has been successfully submitted
                </p>
            </div>

            <!-- Success message -->
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 rounded-lg p-4 slide-in">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-800">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Member Information -->
            <div class="bg-gray-50 rounded-xl p-6 mb-6">
                <h2 class="text-xl font-semibold text-gray-900 heading-font mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Member Information
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Member ID</p>
                        <p class="font-semibold mono-font">{{ $confirmation->member_id }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Member Name</p>
                        <p class="font-semibold">{{ $confirmation->member_name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Member Type</p>
                        <p class="font-semibold">{{ $confirmation->member_type }}</p>
                    </div>
                    @if(!empty($confirmation->member_email))
                    <div>
                        <p class="text-sm text-gray-500">Email Address</p>
                        <p class="font-semibold">{{ $confirmation->member_email }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Payment Details -->
            <div class="bg-gray-50 rounded-xl p-6 mb-6">
                <h2 class="text-xl font-semibold text-gray-900 heading-font mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Payment Details
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Total Amount to Pay</p>
                        <p class="font-semibold text-lg">{{ number_format($confirmation->amount_to_pay, 2) }} TZS</p>
                    </div>
                    @if($paymentRecord)
                    <div>
                        <p class="text-sm text-gray-500">Gawio la FIA</p>
                        <p class="font-semibold text-lg">{{ number_format($paymentRecord->gawio_la_fia, 2) }} TZS</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">FIA iliyokomaa</p>
                        <p class="font-semibold text-lg">{{ number_format($paymentRecord->fia_iliyokomaa, 2) }} TZS</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Jumla</p>
                        <p class="font-semibold text-lg">{{ number_format($paymentRecord->jumla, 2) }} TZS</p>
                    </div>
                    @if($paymentRecord->malipo_vya_vipande)
                    <div>
                        <p class="text-sm text-gray-500">Malipo ya VIP</p>
                        <p class="font-semibold text-lg">{{ number_format($paymentRecord->malipo_vya_vipande, 2) }} TZS</p>
                    </div>
                    @endif
                    @if($paymentRecord->loan)
                    <div>
                        <p class="text-sm text-gray-500">LOAN</p>
                        <p class="font-semibold text-lg">{{ $paymentRecord->loan }}</p>
                    </div>
                    @endif
                    <div>
                        <p class="text-sm text-gray-500">Kiasi Baki</p>
                        <p class="font-semibold text-lg text-green-600">{{ number_format($paymentRecord->kiasi_baki, 2) }} TZS</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Payment Method -->
            @if($confirmation->payment_method)
            <div class="bg-gray-50 rounded-xl p-6 mb-6">
                <h2 class="text-xl font-semibold text-gray-900 heading-font mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                    Payment Method
                </h2>
                <div class="flex items-center space-x-4">
                    <span class="success-badge">
                        @switch($confirmation->payment_method)
                            @case('akiba')
                                Naweka Akiba
                                @break
                            @case('impe')
                                IMPE {{ $confirmation->impe_years }} Years
                                @break
                            @case('cash_mobile')
                                Mobile Payment
                                @break
                            @case('cash_bank')
                                Bank Payment
                                @break
                        @endswitch
                    </span>
                    @if($confirmation->mobile_number)
                        <div>
                            <p class="text-sm text-gray-500">Mobile Number</p>
                            <p class="font-semibold">{{ $confirmation->mobile_number }}</p>
                        </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- Confirmation Box -->
            <div class="bg-green-50 border border-green-200 rounded-xl p-6 mb-6">
                <h3 class="text-lg font-semibold text-gray-900 heading-font mb-2">Payment Confirmation</h3>
                <p class="text-gray-700 mb-3">This is to confirm that the above member has submitted their FIA payment details. The payment confirmation has been recorded in our system.</p>
                <div class="flex items-center space-x-4">
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="success-badge">{{ ucfirst($confirmation->status) }}</span>
                    </div>
                    @if(!empty($confirmation->notes))
                    <div>
                        <p class="text-sm text-gray-500">Notes</p>
                        <p class="font-semibold">{{ $confirmation->notes }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Status and Timestamp -->
            <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                <div>
                    <p class="text-sm text-gray-500">Submission Date</p>
                    <p class="font-semibold">{{ \Carbon\Carbon::parse($confirmation->created_at)->format('M d, Y - H:i') }}</p>
                </div>
                <div class="text-right">
                    <p class="text-sm text-gray-500">Confirmation ID</p>
                    <p class="font-semibold mono-font">#{{ str_pad($confirmation->id, 6, '0', STR_PAD_LEFT) }}</p>
                    <p class="text-sm text-gray-400">Generated: {{ $generated_at->format('M d, Y - H:i') }}</p>
                </div>
            </div>
        </div>

        <!-- Action buttons bottom -->
        <div class="flex justify-center space-x-4 mt-6 no-print">
            <a href="{{ route('fia.verify') }}" class="flex items-center px-6 py-3 bg-white text-green-700 rounded-lg hover:bg-gray-50 transition-colors font-medium">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                New Verification
            </a>
        </div>
    </div>

    <script>
        function saveAsPDF() {
            const element = document.getElementById('confirmation-content');
            const opt = {
                margin: 10,
                filename: 'FIA-Payment-Confirmation-{{ $confirmation->member_id }}.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
            
            html2pdf().set(opt).from(element).save();
        }
    </script>
</body>
</html>
