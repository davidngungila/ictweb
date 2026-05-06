<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Selection - Jezdan Technology</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --accent: #2563eb;
            --accent-bright: #3b82f6;
            --accent-dark: #1d4ed8;
            --accent-light: #eff6ff;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1e293b;
            --gray: #64748b;
            --light-gray: #f8fafc;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #ffffff;
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-gray);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-dark);
        }

        /* Enhanced Hero Section */
        .hero {
            position: relative;
            min-height: 45vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            overflow: hidden;
        }

        .hero-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 1200"><path fill="rgba(37,99,235,0.05)" d="M0,0 L2000,0 L2000,1200 L0,1200 Z M500,200 L1500,200 L1500,300 L500,300 Z M300,500 L800,500 L800,600 L300,600 Z M1200,700 L1700,700 L1700,800 L1200,800 Z M600,900 L1400,900 L1400,1000 L600,1000 Z"/></svg>');
            background-size: cover;
            opacity: 0.4;
        }

        .hero-grid-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(37,99,235,0.1) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(37,99,235,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .hero-glow {
            position: absolute;
            top: 20%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: var(--accent);
            filter: blur(100px);
            opacity: 0.15;
            border-radius: 50%;
            animation: floatGlow 8s ease-in-out infinite;
        }

        .hero-glow-2 {
            position: absolute;
            bottom: 10%;
            right: -5%;
            width: 400px;
            height: 400px;
            background: var(--accent-bright);
            filter: blur(100px);
            opacity: 0.1;
            border-radius: 50%;
            animation: floatGlow 6s ease-in-out infinite reverse;
        }

        @keyframes floatGlow {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, 20px) scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 60px 0;
        }

        .hero-left {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 40px;
            font-size: 0.85rem;
            font-weight: 500;
            color: rgba(255,255,255,0.9);
            margin-bottom: 20px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .hero-badge .dot {
            width: 8px;
            height: 8px;
            background: var(--accent-bright);
            border-radius: 50%;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--accent-bright), #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.7);
            line-height: 1.6;
        }

        /* Enhanced Progress Bar */
        .progress-container {
            background: white;
            padding: 25px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.95);
        }

        .progress-bar-wrapper {
            position: relative;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: var(--border);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--accent), var(--accent-bright));
            width: 33%;
            transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 20px;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3));
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-20px); }
            100% { transform: translateX(20px); }
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .progress-step {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--gray);
        }

        .progress-step.active {
            color: var(--accent);
            font-weight: 600;
        }

        .progress-step.completed {
            color: var(--success);
        }

        .step-number {
            width: 28px;
            height: 28px;
            background: var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 600;
            transition: all 0.3s;
        }

        .progress-step.active .step-number {
            background: var(--accent);
            color: white;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.3);
        }

        .progress-step.completed .step-number {
            background: var(--success);
            color: white;
        }

        /* Enhanced Form Sections */
        .form-section {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px -15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            transition: all 0.3s;
            border: 1px solid var(--border);
        }

        .form-section:hover {
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
            transform: translateY(-2px);
        }

        .section-title {
            font-size: 1.4rem;
            margin-bottom: 25px;
            color: var(--dark);
            border-bottom: 2px solid var(--border);
            padding-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 12px;
            font-size: 1.3rem;
            color: var(--accent);
        }

        /* Enhanced Inputs */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
            font-size: 0.9rem;
        }

        .form-label .required {
            color: var(--danger);
            margin-left: 4px;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
            background: var(--light-gray);
        }

        .form-input:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.15);
            background: white;
        }

        /* Enhanced Service and Package Cards */
        .service-grid, .package-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .service-card, .package-card {
            border: 2px solid var(--border);
            border-radius: 20px;
            padding: 25px;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            background: white;
        }

        .service-card:hover, .package-card:hover {
            border-color: var(--accent);
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .service-card.selected, .package-card.selected {
            border-color: var(--accent);
            background: linear-gradient(135deg, var(--accent-light), white);
            box-shadow: 0 8px 25px rgba(37,99,235,0.15);
        }

        .service-card input[type="radio"], .package-card input[type="radio"] {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 20px;
            height: 20px;
            accent-color: var(--accent);
            cursor: pointer;
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 15px;
        }

        .service-name, .package-name {
            font-weight: 700;
            font-size: 1.15rem;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .service-desc, .package-desc {
            color: var(--gray);
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .package-price {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 8px;
        }

        .package-card.popular {
            border-color: var(--accent);
            background: linear-gradient(135deg, var(--accent), var(--accent-bright));
            position: relative;
            overflow: hidden;
        }

        .package-card.popular::before {
            content: '🔥 POPULAR';
            position: absolute;
            top: 12px;
            left: -30px;
            background: var(--warning);
            color: white;
            font-size: 0.7rem;
            font-weight: bold;
            padding: 4px 40px;
            transform: rotate(-45deg);
            pointer-events: none;
        }

        .package-card.popular .package-name,
        .package-card.popular .package-price,
        .package-card.popular .package-desc {
            color: white;
        }

        /* Enhanced Add-ons */
        .addon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
        }

        .addon-card {
            border: 2px solid var(--border);
            border-radius: 14px;
            padding: 18px 20px;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
        }

        .addon-card:hover {
            border-color: var(--accent);
            transform: translateY(-2px);
        }

        .addon-card.selected {
            border-color: var(--accent);
            background: var(--accent-light);
        }

        .addon-card input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: var(--accent);
            cursor: pointer;
        }

        .addon-info {
            flex: 1;
        }

        .addon-name {
            font-weight: 600;
            margin-bottom: 4px;
            color: var(--dark);
        }

        .addon-price {
            color: var(--accent);
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* Price Summary Card */
        .price-summary {
            background: var(--accent-light);
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(37,99,235,0.2);
        }

        .price-summary h4 {
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed var(--border);
        }

        .summary-row.total {
            border-bottom: none;
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--accent);
            padding-top: 15px;
        }

        /* Enhanced Button */
        .btn-primary {
            background: linear-gradient(135deg, var(--accent), var(--accent-bright));
            color: white;
            border: none;
            padding: 18px 45px;
            border-radius: 14px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(37,99,235,0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Floating Notification */
        .notification {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--dark);
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            transform: translateX(400px);
            transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 1000;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification.success {
            background: var(--success);
        }

        .notification.error {
            background: var(--danger);
        }

        /* Loading Overlay */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(5px);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }

        .loading-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(255,255,255,0.2);
            border-top-color: var(--accent);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title { font-size: 2rem; }
            .form-section { padding: 25px; }
            .service-grid { grid-template-columns: 1fr; }
            .addon-grid { grid-template-columns: 1fr; }
            .btn-primary { padding: 15px 30px; font-size: 1rem; }
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }
    </style>
</head>
<body>

<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="loader"></div>
</div>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg-img"></div>
    <div class="hero-grid-overlay"></div>
    <div class="hero-glow"></div>
    <div class="hero-glow-2"></div>
    <div class="hero-content">
        <div class="hero-left">
            <div class="hero-badge">
                <span class="dot"></span>
                Step 1 of 3
            </div>
            <h1 class="hero-title">
                Select Your <span>Package</span>
            </h1>
            <p class="hero-subtitle">
                Choose your service, package, and add-ons to get started with your digital transformation journey.
            </p>
        </div>
    </div>
</section>

<!-- Enhanced Progress Bar -->
<div class="progress-container">
    <div class="container">
        <div class="progress-bar-wrapper">
            <div class="progress-bar">
                <div class="progress-fill" id="progressFill"></div>
            </div>
            <div class="progress-steps">
                <div class="progress-step active" id="step1">
                    <span class="step-number">1</span>
                    <span>Package</span>
                </div>
                <div class="progress-step" id="step2">
                    <span class="step-number">2</span>
                    <span>Review</span>
                </div>
                <div class="progress-step" id="step3">
                    <span class="step-number">3</span>
                    <span>Payment</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Form -->
<section style="padding: 50px 0 80px;">
    <div class="container">
        <form id="packageForm" action="{{ route('package.selection.step1.process') }}" method="POST">
            @csrf
            
            <div style="max-width: 1000px; margin: 0 auto;">
                
                <!-- Price Summary Card (Dynamic) -->
                <div class="price-summary" id="priceSummary">
                    <h4><i class="fas fa-calculator"></i> Order Summary</h4>
                    <div class="summary-row">
                        <span>Base Package</span>
                        <span id="basePrice">TZS 0</span>
                    </div>
                    <div class="summary-row" id="addonsSummaryRow" style="display: none;">
                        <span>Add-ons</span>
                        <span id="addonsPrice">TZS 0</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total Amount</span>
                        <span id="totalPrice">TZS 0</span>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="form-section">
                    <h3 class="section-title">
                        <i class="fas fa-user"></i> Contact Information
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                        <div class="form-group">
                            <label class="form-label">Full Name <span class="required">*</span></label>
                            <input type="text" name="client_name" id="clientName" class="form-input" placeholder="Enter your full name" value="{{ old('client_name') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email <span class="required">*</span></label>
                            <input type="email" name="client_email" id="clientEmail" class="form-input" placeholder="Enter your email" value="{{ old('client_email') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone <span class="required">*</span></label>
                            <input type="text" name="client_phone" id="clientPhone" class="form-input" placeholder="Enter your phone number" value="{{ old('client_phone') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Company (Optional)</label>
                            <input type="text" name="company_name" class="form-input" placeholder="Enter company name" value="{{ old('company_name') }}">
                        </div>
                    </div>
                </div>

                <!-- Service Selection -->
                <div class="form-section">
                    <h3 class="section-title">
                        <i class="fas fa-cog"></i> Select Service <span class="required">*</span>
                    </h3>
                    <div class="service-grid" id="serviceGrid">
                        <label class="service-card {{ old('service_id') == '1' ? 'selected' : '' }}" data-service-id="1" data-price="0">
                            <input type="radio" name="service_id" value="1" {{ old('service_id') == '1' ? 'checked' : '' }} required>
                            <div class="service-icon"><i class="fas fa-code"></i></div>
                            <div class="service-name">Web Development</div>
                            <div class="service-desc">Custom websites for all businesses</div>
                        </label>
                        <label class="service-card {{ old('service_id') == '2' ? 'selected' : '' }}" data-service-id="2" data-price="0">
                            <input type="radio" name="service_id" value="2" {{ old('service_id') == '2' ? 'checked' : '' }}>
                            <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
                            <div class="service-name">Mobile App Development</div>
                            <div class="service-desc">Cross-platform Android & iOS apps</div>
                        </label>
                        <label class="service-card {{ old('service_id') == '3' ? 'selected' : '' }}" data-service-id="3" data-price="0">
                            <input type="radio" name="service_id" value="3" {{ old('service_id') == '3' ? 'checked' : '' }}>
                            <div class="service-icon"><i class="fas fa-network-wired"></i></div>
                            <div class="service-name">Network Installation</div>
                            <div class="service-desc">Professional network infrastructure</div>
                        </label>
                        <label class="service-card {{ old('service_id') == '4' ? 'selected' : '' }}" data-service-id="4" data-price="0">
                            <input type="radio" name="service_id" value="4" {{ old('service_id') == '4' ? 'checked' : '' }}>
                            <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
                            <div class="service-name">Cybersecurity</div>
                            <div class="service-desc">Comprehensive security solutions</div>
                        </label>
                        <label class="service-card {{ old('service_id') == '5' ? 'selected' : '' }}" data-service-id="5" data-price="0">
                            <input type="radio" name="service_id" value="5" {{ old('service_id') == '5' ? 'checked' : '' }}>
                            <div class="service-icon"><i class="fas fa-screwdriver-wrench"></i></div>
                            <div class="service-name">IT Support</div>
                            <div class="service-desc">Reliable ongoing IT support</div>
                        </label>
                        <label class="service-card {{ old('service_id') == '6' ? 'selected' : '' }}" data-service-id="6" data-price="0">
                            <input type="radio" name="service_id" value="6" {{ old('service_id') == '6' ? 'checked' : '' }}>
                            <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                            <div class="service-name">ICT Consultancy</div>
                            <div class="service-desc">Strategic digital transformation guidance</div>
                        </label>
                    </div>
                    @error('service_id')
                        <div style="color: var(--danger); margin-top: 10px; font-size: 0.9rem;">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Package Selection -->
                <div class="form-section">
                    <h3 class="section-title">
                        <i class="fas fa-box"></i> Select Package <span class="required">*</span>
                    </h3>
                    <div class="package-grid" id="packageGrid">
                        <label class="package-card {{ old('package_id') == '1' ? 'selected' : '' }}" data-package-id="1" data-price="400000">
                            <input type="radio" name="package_id" value="1" {{ old('package_id') == '1' ? 'checked' : '' }} required>
                            <div class="package-name">Starter Package</div>
                            <div class="package-price">TZS 400,000</div>
                            <div class="package-desc">Perfect for individuals and small businesses</div>
                        </label>
                        <label class="package-card popular {{ old('package_id') == '2' ? 'selected' : '' }}" data-package-id="2" data-price="800000">
                            <input type="radio" name="package_id" value="2" {{ old('package_id') == '2' ? 'checked' : '' }}>
                            <div class="package-name">Business Package</div>
                            <div class="package-price">TZS 800,000</div>
                            <div class="package-desc">Ideal for growing companies</div>
                        </label>
                        <label class="package-card {{ old('package_id') == '3' ? 'selected' : '' }}" data-package-id="3" data-price="1500000">
                            <input type="radio" name="package_id" value="3" {{ old('package_id') == '3' ? 'checked' : '' }}>
                            <div class="package-name">Enterprise Package</div>
                            <div class="package-price">TZS 1,500,000</div>
                            <div class="package-desc">Full-featured solution for large organizations</div>
                        </label>
                    </div>
                    @error('package_id')
                        <div style="color: var(--danger); margin-top: 10px; font-size: 0.9rem;">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Add-ons -->
                <div class="form-section">
                    <h3 class="section-title">
                        <i class="fas fa-rocket"></i> Add-ons (Optional)
                    </h3>
                    <div class="addon-grid" id="addonsGrid">
                        <label class="addon-card {{ in_array('travel_blog_5_posts', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="travel_blog_5_posts" data-price="150000">
                            <div class="addon-info">
                                <div class="addon-name">Travel Blog + 5 Posts</div>
                                <div class="addon-price">TZS 150,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="travel_blog_5_posts" {{ in_array('travel_blog_5_posts', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('advanced_seo', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="advanced_seo" data-price="300000">
                            <div class="addon-info">
                                <div class="addon-name">Advanced SEO Package</div>
                                <div class="addon-price">TZS 300,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="advanced_seo" {{ in_array('advanced_seo', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('social_auto_posting', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="social_auto_posting" data-price="150000">
                            <div class="addon-info">
                                <div class="addon-name">Social Media Auto-Posting</div>
                                <div class="addon-price">TZS 150,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="social_auto_posting" {{ in_array('social_auto_posting', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('email_marketing', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="email_marketing" data-price="200000">
                            <div class="addon-info">
                                <div class="addon-name">Email Marketing Setup</div>
                                <div class="addon-price">TZS 200,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="email_marketing" {{ in_array('email_marketing', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('online_payment', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="online_payment" data-price="200000">
                            <div class="addon-info">
                                <div class="addon-name">Online Payment Integration</div>
                                <div class="addon-price">TZS 200,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="online_payment" {{ in_array('online_payment', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('ai_chatbot', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="ai_chatbot" data-price="250000">
                            <div class="addon-info">
                                <div class="addon-name">AI Chatbot Integration</div>
                                <div class="addon-price">TZS 250,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="ai_chatbot" {{ in_array('ai_chatbot', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('admin_dashboard', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="admin_dashboard" data-price="300000">
                            <div class="addon-info">
                                <div class="addon-name">Admin Dashboard System</div>
                                <div class="addon-price">TZS 300,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="admin_dashboard" {{ in_array('admin_dashboard', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                        <label class="addon-card {{ in_array('ecommerce', old('selected_addons', [])) ? 'selected' : '' }}" data-addon-value="ecommerce" data-price="350000">
                            <div class="addon-info">
                                <div class="addon-name">E-commerce Store Setup</div>
                                <div class="addon-price">TZS 350,000</div>
                            </div>
                            <input type="checkbox" name="selected_addons[]" value="ecommerce" {{ in_array('ecommerce', old('selected_addons', [])) ? 'checked' : '' }}>
                        </label>
                    </div>
                    @error('selected_addons')
                        <div style="color: var(--danger); margin-top: 10px; font-size: 0.9rem;">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Additional Notes -->
                <div class="form-section">
                    <h3 class="section-title">
                        <i class="fas fa-edit"></i> Additional Notes
                    </h3>
                    <textarea name="notes" rows="4" class="form-input" placeholder="Any additional requirements or special requests...">{{ old('notes') }}</textarea>
                    @error('notes')
                        <div style="color: var(--danger); margin-top: 10px; font-size: 0.9rem;">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div style="text-align: center; margin-top: 30px;">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-arrow-right"></i> Continue to Review
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Notification Toast -->
<div class="notification" id="notification">
    <i class="fas fa-check-circle"></i>
    <span id="notificationMsg">Success!</span>
</div>

<script>
    // Price mapping
    const packagePrices = { 1: 400000, 2: 800000, 3: 1500000 };
    const addonPrices = {
        'travel_blog_5_posts': 150000,
        'advanced_seo': 300000,
        'social_auto_posting': 150000,
        'email_marketing': 200000,
        'online_payment': 200000,
        'ai_chatbot': 250000,
        'admin_dashboard': 300000,
        'ecommerce': 350000
    };

    let currentPackagePrice = 0;
    let selectedAddonsTotal = 0;

    // Update price summary
    function updatePriceSummary() {
        const total = currentPackagePrice + selectedAddonsTotal;
        document.getElementById('basePrice').innerHTML = `TZS ${currentPackagePrice.toLocaleString()}`;
        document.getElementById('totalPrice').innerHTML = `TZS ${total.toLocaleString()}`;
        
        const addonsRow = document.getElementById('addonsSummaryRow');
        if (selectedAddonsTotal > 0) {
            addonsRow.style.display = 'flex';
            document.getElementById('addonsPrice').innerHTML = `TZS ${selectedAddonsTotal.toLocaleString()}`;
        } else {
            addonsRow.style.display = 'none';
        }
    }

    // Package selection handler
    document.querySelectorAll('.package-card input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const card = this.closest('.package-card');
            const packageId = parseInt(card.dataset.packageId);
            currentPackagePrice = packagePrices[packageId];
            updatePriceSummary();
            
            // Visual update
            document.querySelectorAll('.package-card').forEach(c => c.classList.remove('selected'));
            card.classList.add('selected');
            
            showNotification(`Package selected: ${card.querySelector('.package-name').innerText}`, 'success');
        });
    });

    // Add-on selection handler
    document.querySelectorAll('.addon-card input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.addon-card');
            const price = parseInt(card.dataset.price);
            const addonName = card.querySelector('.addon-name').innerText;
            
            if (this.checked) {
                selectedAddonsTotal += price;
                card.classList.add('selected');
                showNotification(`Added: ${addonName}`, 'success');
            } else {
                selectedAddonsTotal -= price;
                card.classList.remove('selected');
                showNotification(`Removed: ${addonName}`, 'success');
            }
            updatePriceSummary();
        });
    });

    // Service selection - just visual feedback
    document.querySelectorAll('.service-card input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.service-card').forEach(c => c.classList.remove('selected'));
            this.closest('.service-card').classList.add('selected');
            const serviceName = this.closest('.service-card').querySelector('.service-name').innerText;
            showNotification(`Selected service: ${serviceName}`, 'success');
        });
    });

    // Form submit handler with validation
    document.getElementById('packageForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate required fields
        const clientName = document.getElementById('clientName').value.trim();
        const clientEmail = document.getElementById('clientEmail').value.trim();
        const clientPhone = document.getElementById('clientPhone').value.trim();
        const selectedService = document.querySelector('input[name="service_id"]:checked');
        const selectedPackage = document.querySelector('input[name="package_id"]:checked');
        
        if (!clientName || !clientEmail || !clientPhone) {
            showNotification('Please fill in all contact information fields', 'error');
            return;
        }
        
        if (!selectedService) {
            showNotification('Please select a service', 'error');
            return;
        }
        
        if (!selectedPackage) {
            showNotification('Please select a package', 'error');
            return;
        }
        
        // Show loading
        const overlay = document.getElementById('loadingOverlay');
        overlay.classList.add('active');
        
        // Submit form
        this.submit();
    });

    // Show notification function
    function showNotification(message, type = 'success') {
        const notification = document.getElementById('notification');
        const msgSpan = document.getElementById('notificationMsg');
        msgSpan.innerText = message;
        notification.classList.remove('success', 'error');
        notification.classList.add(type);
        notification.classList.add('show');
        
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }

    // Initialize with any pre-selected values (from old)
    const preselectedPackage = document.querySelector('input[name="package_id"]:checked');
    if (preselectedPackage) {
        const card = preselectedPackage.closest('.package-card');
        if (card) {
            currentPackagePrice = packagePrices[parseInt(card.dataset.packageId)];
            card.classList.add('selected');
        }
    }
    
    // Check for pre-selected addons
    document.querySelectorAll('.addon-card input[type="checkbox"]:checked').forEach(checkbox => {
        const card = checkbox.closest('.addon-card');
        if (card) {
            selectedAddonsTotal += parseInt(card.dataset.price);
            card.classList.add('selected');
        }
    });
    
    updatePriceSummary();
    
    // Check for pre-selected services
    document.querySelectorAll('.service-card input[type="radio"]:checked').forEach(radio => {
        radio.closest('.service-card').classList.add('selected');
    });
    
    // Add ripple effect to buttons
    document.querySelectorAll('.btn-primary').forEach(btn => {
        btn.addEventListener('click', function(e) {
            let x = e.clientX - e.target.offsetLeft;
            let y = e.clientY - e.target.offsetTop;
            let ripple = document.createElement('span');
            ripple.style.position = 'absolute';
            ripple.style.width = '0px';
            ripple.style.height = '0px';
            ripple.style.backgroundColor = 'rgba(255,255,255,0.5)';
            ripple.style.borderRadius = '50%';
            ripple.style.transform = 'translate(-50%, -50%)';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.transition = 'width 0.5s, height 0.5s';
            ripple.style.pointerEvents = 'none';
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            setTimeout(() => {
                ripple.style.width = '300px';
                ripple.style.height = '300px';
            }, 10);
            setTimeout(() => ripple.remove(), 500);
        });
    });
</script>
</body>
</html>
