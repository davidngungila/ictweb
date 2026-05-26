@extends('layouts.app')

@section('title', 'Package Selection - Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Select your ICT service package and complete your order.">
  <meta name="keywords" content="ICT package selection Tanzania, web development, mobile apps, networking">
  <meta property="og:title" content="Package Selection">
  <meta property="og:description" content="Select your ICT service package and complete your order.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  .progress-bar {
    width: 100%;
    height: 8px;
    background: #e0e0e0;
    border-radius: 4px;
    margin-bottom: 40px;
    overflow: hidden;
  }
  .progress-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--accent), var(--accent-bright));
    width: 33%;
    transition: width 0.5s ease;
  }
  .progress-label {
    text-align: center;
    margin-top: 10px;
    font-weight: 600;
    color: var(--accent);
  }
  
  .form-section {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    margin-bottom: 30px;
  }
  
  .section-title {
    font-size: 1.4rem;
    margin-bottom: 25px;
    color: var(--accent);
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 15px;
    display: flex;
    align-items: center;
  }
  
  .section-title i {
    margin-right: 12px;
    font-size: 1.3rem;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
  }
  
  .form-input {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s;
  }
  
  .form-input:focus {
    border-color: var(--accent);
    outline: none;
    box-shadow: 0 0 0 3px rgba(0,0,0,0.1);
  }
  
  .service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
  }
  
  .service-card {
    border: 2px solid #e8e8e8;
    border-radius: 16px;
    padding: 25px;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
  }
  
  .service-card:hover {
    border-color: var(--accent);
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
  }
  
  .service-card.selected {
    border-color: var(--accent);
    background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
  }
  
  .service-card input[type="radio"] {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 20px;
    height: 20px;
  }
  
  .service-icon {
    font-size: 2rem;
    color: var(--accent);
    margin-bottom: 15px;
  }
  
  .service-name {
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 8px;
  }
  
  .service-desc {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.5;
  }
  
  .package-card {
    border: 2px solid #e8e8e8;
    border-radius: 16px;
    padding: 25px;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
  }
  
  .package-card:hover {
    border-color: var(--accent);
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
  }
  
  .package-card.selected {
    border-color: var(--accent);
    background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
  }
  
  .package-card.popular {
    border-color: var(--accent);
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
  }
  
  .package-card.popular .package-name,
  .package-card.popular .package-price,
  .package-card.popular .package-desc {
    color: white;
  }
  
  .package-card input[type="radio"] {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 20px;
    height: 20px;
  }
  
  .package-name {
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 8px;
  }
  
  .package-price {
    font-size: 1.4rem;
    font-weight: 800;
    color: var(--accent);
    margin-bottom: 8px;
  }
  
  .package-desc {
    color: #666;
    font-size: 0.9rem;
  }
  
  .addon-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
  }
  
  .addon-card {
    position: relative;
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s;
  }

  .package-hint {
    color: #596273;
    font-size: 0.95rem;
    margin: -8px 0 18px;
    padding: 14px 16px;
    background: #f4f8ff;
    border-radius: 12px;
    border: 1px dashed #c9daf5;
  }
  
  .addon-card:hover {
    border-color: var(--accent);
  }
  
  .addon-card.selected {
    border-color: var(--accent);
    background: #f0f8ff;
  }
  
  .addon-card input[type="checkbox"] {
    position: absolute;
    top: 15px;
    right: 15px;
  }
  
  .addon-name {
    font-weight: 600;
    margin-bottom: 6px;
    padding-right: 28px;
  }

  .addon-desc {
    font-size: 0.82rem;
    color: #666;
    line-height: 1.45;
    margin-bottom: 10px;
  }

  .addon-category {
    grid-column: 1 / -1;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--navy, #1a2744);
    margin: 28px 0 14px;
    padding-bottom: 8px;
    border-bottom: 2px solid #eef4ff;
  }

  .addon-category:first-of-type {
    margin-top: 6px;
  }

  .addon-super {
    font-size: 1.35rem;
    font-weight: 800;
    color: var(--navy, #1a2744);
    margin: 0 0 10px;
    letter-spacing: -0.02em;
  }

  .addon-lead {
    color: #555;
    margin: 0 0 10px;
    line-height: 1.55;
    font-size: 0.98rem;
  }

  .addon-note {
    font-size: 0.82rem;
    color: #777;
    margin: 0 0 8px;
    line-height: 1.5;
  }
  
  .addon-price {
    color: var(--accent);
    font-weight: 700;
  }
  
  .btn-primary {
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
    border: none;
    padding: 18px 40px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  }
  
  .btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
  }

  .advanced-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 24px;
    align-items: start;
  }

  .summary-panel {
    position: sticky;
    top: 20px;
    border: 2px solid #e8e8e8;
    border-radius: 16px;
    padding: 24px;
    background: white;
    box-shadow: 0 8px 28px rgba(0,0,0,0.08);
  }

  .summary-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--accent);
    margin-bottom: 16px;
  }

  .summary-line {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 10px;
    font-size: 0.95rem;
  }

  .summary-total {
    margin-top: 14px;
    padding-top: 14px;
    border-top: 1px solid #eee;
    font-size: 1.1rem;
    font-weight: 800;
    color: var(--accent);
  }

  .feature-list {
    margin-top: 12px;
    padding-left: 20px;
    color: #444;
    font-size: 0.9rem;
    line-height: 1.6;
  }

  .highlight-box {
    border: 2px dashed #d9e7ff;
    border-radius: 14px;
    background: #f9fbff;
    padding: 16px 18px;
    margin-bottom: 20px;
    color: #35517a;
  }

  .inline-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 14px;
  }

  .quick-chip {
    display: inline-flex;
    align-items: center;
    border: 1px solid #dde6f5;
    border-radius: 999px;
    padding: 8px 12px;
    font-size: 0.85rem;
    color: #35517a;
    margin: 4px 6px 0 0;
    background: #f7faff;
  }

  @media (max-width: 980px) {
    .advanced-grid {
      grid-template-columns: 1fr;
    }

    .summary-panel {
      position: static;
    }
  }
  
  .error-message {
    background: #fee;
    border: 1px solid #fcc;
    color: #c33;
    padding: 12px 16px;
    border-radius: 8px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
  }
  
  .error-message i {
    margin-right: 10px;
  }
</style>

<!-- HERO -->
<section class="hero" style="min-height: 35vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Step 1 of 3
      </div>
      <h1 class="hero-title">
        Select Your <span>Package</span>
      </h1>
      <p class="hero-subtitle">
        Choose your service, package, and add-ons to get started.
      </p>
    </div>
  </div>
</section>

<!-- Progress Bar -->
<div style="background: white; padding: 25px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
  <div class="container">
    <div class="progress-bar">
      <div class="progress-fill"></div>
    </div>
    <div class="progress-label">33% Complete</div>
  </div>
</div>

<!-- FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    @if($errors->any())
    <div class="error-message">
      <i class="fas fa-exclamation-circle"></i>
      <div>{{ $errors->first() }}</div>
    </div>
    @endif
    @if(session('error'))
    <div class="error-message">
      <i class="fas fa-exclamation-circle"></i>
      <div>{{ session('error') }}</div>
    </div>
    @endif
    
    @php
      $prefillService = old('service_id', $prefillService ?? request('service_id'));
      $prefillPackage = old('package_id', $prefillPackage ?? request('package_id'));
      $prefillName = old('client_name', $prefillName ?? '');
      $prefillEmail = old('client_email', $prefillEmail ?? '');
      $prefillPhone = old('client_phone', $prefillPhone ?? '');
      $prefillCompany = old('company_name', $prefillCompany ?? '');
    @endphp
    <script type="application/json" id="package-matrix-json">{!! json_encode(\App\Support\PackagePricing::matrixForJs()) !!}</script>
    <script type="application/json" id="tour-vertical-overrides">{!! json_encode(\App\Support\PackagePricing::tourVerticalTierOverlays()) !!}</script>

    <form action="{{ route('package.selection.step1.process') }}" method="POST">
      @csrf
      
      <div style="max-width: 1150px; margin: 0 auto;" class="advanced-grid">
        <div>
        <div class="highlight-box">
          <strong>Advanced Package Planner:</strong> Select a service and compare package capabilities before requesting an official quote.
          <div>
            <span class="quick-chip"><i class="fas fa-check-circle" style="margin-right: 6px;"></i>Customized Proposal</span>
            <span class="quick-chip"><i class="fas fa-check-circle" style="margin-right: 6px;"></i>Fast Response</span>
          </div>
        </div>
        
        <!-- Contact Information -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-user"></i> Contact Information
          </h3>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div class="form-group">
              <label class="form-label">Full Name *</label>
              <input type="text" name="client_name" class="form-input" value="{{ $prefillName }}" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
              <label class="form-label">Email *</label>
              <input type="email" name="client_email" class="form-input" value="{{ $prefillEmail }}" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label class="form-label">Phone *</label>
              <input type="text" name="client_phone" class="form-input" value="{{ $prefillPhone }}" placeholder="Enter your phone number" pattern="[0-9+\-\s]{8,20}" required>
            </div>
            <div class="form-group">
              <label class="form-label">Company (Optional)</label>
              <input type="text" name="company_name" class="form-input" value="{{ $prefillCompany }}" placeholder="Enter company name">
            </div>
          </div>
        </div>

        <!-- Service Selection -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-cog"></i> Select Service *
          </h3>
          <div class="custom-dropdown-container">
            <div class="custom-dropdown-header" onclick="toggleCustomDropdown('service-dropdown')">
              <span id="selected-service-label">-- Select a Service --</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div id="service-dropdown" class="custom-dropdown-options">
              <div class="dropdown-option-item" onclick="selectServiceItem(1, 'Web Development')">
                <i class="fas fa-code mr-2"></i> Web Development
              </div>
              <div class="dropdown-option-item" onclick="selectServiceItem(2, 'Mobile App Development')">
                <i class="fas fa-mobile-alt mr-2"></i> Mobile App Development
              </div>
              <div class="dropdown-option-item" onclick="selectServiceItem(3, 'Network Installation')">
                <i class="fas fa-network-wired mr-2"></i> Network Installation
              </div>
              <div class="dropdown-option-item" onclick="selectServiceItem(4, 'Cybersecurity')">
                <i class="fas fa-shield-alt mr-2"></i> Cybersecurity
              </div>
              <div class="dropdown-option-item" onclick="selectServiceItem(5, 'IT Support')">
                <i class="fas fa-headset mr-2"></i> IT Support
              </div>
              <div class="dropdown-option-item" onclick="selectServiceItem(6, 'ICT Consultancy')">
                <i class="fas fa-lightbulb mr-2"></i> ICT Consultancy
              </div>
            </div>
            <input type="hidden" name="service_id" id="service_id_hidden" value="{{ $prefillService }}">
          </div>
        </div>

        <style>
          .custom-dropdown-container {
            position: relative;
            width: 100%;
          }
          .custom-dropdown-header {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 600;
            color: var(--navy);
          }
          .custom-dropdown-header:hover {
            border-color: var(--accent);
          }
          .custom-dropdown-options {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 12px 12px;
            z-index: 50;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            max-height: 300px;
            overflow-y: auto;
          }
          .dropdown-option-item {
            padding: 12px 20px;
            cursor: pointer;
            transition: background 0.2s;
            font-size: 0.95rem;
            color: #4a5568;
          }
          .dropdown-option-item:hover {
            background: #f7fafc;
            color: var(--accent);
          }
          .dropdown-option-item i {
            width: 20px;
            text-align: center;
            color: #718096;
          }
          .dropdown-option-item:hover i {
            color: var(--accent);
          }
        </style>

        <script>
          // These will be defined in the IIFE below
          function toggleCustomDropdown(id) {
            if (window.toggleCustomDropdownGlobal) {
              window.toggleCustomDropdownGlobal(id);
            }
          }
          
          function selectServiceItem(id, label) {
            if (window.selectServiceItemGlobal) {
              window.selectServiceItemGlobal(id, label);
            }
          }

          // Close dropdowns on outside click
          window.addEventListener('click', function(e) {
            if (!e.target.closest('.custom-dropdown-container')) {
              document.querySelectorAll('.custom-dropdown-options').forEach(d => d.style.display = 'none');
            }
          });
        </script>

        <!-- Package Selection (dynamic per service) -->
        <div id="package-section-container" class="form-section" style="display: none;">
          <h3 class="section-title">
            <i class="fas fa-box"></i> Select Package *
          </h3>
          <div class="addon-category-dropdown open">
            <div class="dropdown-header">
              <span>Choose your tier</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="dropdown-content" style="display: block;">
              <div id="package-picker-root" class="package-dropdown-grid"></div>
            </div>
          </div>
        </div>

        <style>
          .package-dropdown-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
          }
          .package-option-card {
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 15px 20px;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
          }
          .package-option-card:hover {
            border-color: var(--accent);
            background: #f0f7ff;
          }
          .package-option-card.selected {
            border-color: var(--accent);
            background: #f0f7ff;
            border-width: 2px;
          }
          .package-info h4 {
            margin: 0 0 5px;
            font-size: 1.05rem;
            color: var(--navy);
          }
          .package-info p {
            margin: 0;
            font-size: 0.85rem;
            color: #666;
          }
          .package-price-tag {
            font-weight: 700;
            color: var(--accent);
            white-space: nowrap;
          }
          .package-features-list {
            margin: 10px 0 0;
            padding-left: 20px;
            font-size: 0.82rem;
            color: #555;
            display: none;
          }
          .package-option-card.selected .package-features-list {
            display: block;
          }
        </style>

        @php
          $addonCatalog = \App\Support\PackagePricing::addonCatalog();
          $addonOld = old('selected_addons', []);
        @endphp

        <!-- Add-ons Toggle -->
        <div class="form-section">
          <div style="text-align: center; margin-bottom: 20px;">
            <button type="button" class="btn-addons-toggle" id="toggle-addons-btn" onclick="toggleAddonsSection()">
              <span class="btn-content">
                <i class="fas fa-plus-circle"></i> 
                <span>Do you need Extra Add-On Services?</span>
              </span>
              <span class="btn-shine"></span>
            </button>
          </div>
          
          <div id="extra-addons-section" style="display: none; animation: slideDown 0.4s ease-out forwards;">
            <div class="addons-inner-card">
              <h3 class="section-title">
                <i class="fas fa-rocket"></i> Extra Add-On Services
              </h3>
              <p class="addon-super">Supercharge Your Project</p>
              <p class="addon-lead">Enhance any package with these additional features tailored to your business needs.</p>
              
              <div class="addon-categories-dropdowns">
                @foreach($addonCatalog as $index => $group)
                  <div class="addon-category-dropdown" id="dropdown-{{ $index }}">
                    <div class="dropdown-header" onclick="toggleDropdown({{ $index }})">
                      <span>{{ $group['heading'] }}</span>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-content" id="content-{{ $index }}">
                      <div class="addon-grid-compact">
                        @foreach($group['items'] as $item)
                          @php $addonSelected = in_array($item['slug'], $addonOld, true); @endphp
                          <label class="addon-option {{ $addonSelected ? 'selected' : '' }}" data-price="{{ $item['price'] }}" data-name="{{ $item['name'] }}">
                            <div class="addon-option-info">
                              <input type="checkbox" name="selected_addons[]" value="{{ $item['slug'] }}" {{ $addonSelected ? 'checked' : '' }} onchange="updateAddonSelection(this)">
                              <div class="addon-option-name">{{ $item['name'] }}</div>
                              <div class="addon-option-desc">{{ $item['desc'] }}</div>
                            </div>
                            <div class="addon-option-price">{{ $item['price_label'] }}</div>
                          </label>
                        @endforeach
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        <style>
          .btn-addons-toggle {
            position: relative;
            background: white;
            color: var(--accent);
            border: 2px solid var(--accent);
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.1);
          }
          .btn-addons-toggle:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.2);
          }
          .btn-addons-toggle .btn-content {
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 2;
          }
          .btn-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
              120deg,
              transparent,
              rgba(255, 255, 255, 0.3),
              transparent
            );
            transition: all 0.6s;
          }
          .btn-addons-toggle:hover .btn-shine {
            left: 100%;
          }
          .addons-inner-card {
            background: #f8fafc;
            border-radius: 20px;
            padding: 30px;
            border: 1px solid #e2e8f0;
            margin-top: 10px;
          }
          @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
          }
        </style>

        <!-- Project Preferences (Hidden from UI, handled by system) -->
        <div style="display: none;">
          <input type="hidden" name="timeline_priority" value="standard">
          <input type="hidden" name="payment_plan" value="startup">
        </div>

        <!-- Submit Button -->
        <div style="text-align: center; margin-top: 30px;">
          <input type="hidden" name="estimated_total" id="estimated_total" value="0">
          <button type="submit" class="btn-primary">
            <i class="fas fa-credit-card" style="margin-right: 10px;"></i> Continue with payment
          </button>
          <p class="form-hint" style="font-size: 0.85rem; color: #666; margin-top: 12px;">
            <i class="fas fa-info-circle"></i> A 50% deposit is required to start. You can adjust this to 30%-100% in the review step.
          </p>
        </div>
      </div> <!-- left column -->

<style>
  .addon-categories-dropdowns {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
  }

  .addon-category-dropdown {
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    overflow: hidden;
    background: white;
  }

  .dropdown-header {
    padding: 18px 25px;
    background: #f8fafc;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    font-weight: 700;
    color: var(--navy);
    transition: background 0.3s;
  }

  .dropdown-header:hover {
    background: #f1f5f9;
  }

  .dropdown-header i {
    transition: transform 0.3s;
  }

  .addon-category-dropdown.open .dropdown-header i {
    transform: rotate(180deg);
  }

  .dropdown-content {
    display: none;
    padding: 20px;
    border-top: 1px solid #e8e8e8;
  }

  .addon-category-dropdown.open .dropdown-content {
    display: block;
  }

  .addon-grid-compact {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10px;
  }

  .addon-option {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 15px;
    border: 1px solid #eee;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.2s;
  }

  .addon-option:hover {
    border-color: var(--accent);
    background: #f0f7ff;
  }

  .addon-option.selected {
    border-color: var(--accent);
    background: #f0f7ff;
    border-width: 2px;
  }

  .addon-option-info {
    display: flex;
    gap: 15px;
    align-items: flex-start;
  }

  .addon-option-info input[type="checkbox"] {
    margin-top: 4px;
    width: 18px;
    height: 18px;
  }

  .addon-option-name {
    font-weight: 600;
    color: #333;
    margin-bottom: 4px;
  }

  .addon-option-desc {
    font-size: 0.85rem;
    color: #666;
    line-height: 1.4;
  }

  .addon-option-price {
    font-weight: 700;
    color: var(--accent);
    font-size: 0.9rem;
    white-space: nowrap;
    margin-left: 20px;
  }
</style>

<script>
  function toggleDropdown(index) {
    const dropdown = document.getElementById('dropdown-' + index);
    dropdown.classList.toggle('open');
  }

  function toggleAddonsSection() {
    const section = document.getElementById('extra-addons-section');
    const btn = document.getElementById('toggle-addons-btn');
    const btnText = btn.querySelector('.btn-content span');
    const btnIcon = btn.querySelector('.btn-content i');
    
    if (section.style.display === 'none') {
      section.style.display = 'block';
      btnText.textContent = 'Hide Extra Add-On Services';
      btnIcon.className = 'fas fa-minus-circle';
      btn.style.background = 'var(--accent)';
      btn.style.color = 'white';
    } else {
      section.style.display = 'none';
      btnText.textContent = 'Do you need Extra Add-On Services?';
      btnIcon.className = 'fas fa-plus-circle';
      btn.style.background = 'white';
      btn.style.color = 'var(--accent)';
    }
  }

  function updateAddonSelection(checkbox) {
    const option = checkbox.closest('.addon-option');
    if (checkbox.checked) {
      option.classList.add('selected');
    } else {
      option.classList.remove('selected');
    }
    // The main updateSummary logic will handle the price update
  }
</script>

      <!-- Right Summary Column -->
      <aside class="summary-panel">
        <div class="summary-title"><i class="fas fa-receipt" style="margin-right: 8px;"></i>Order Summary</div>
        <div class="summary-line">
          <span>Selected Package:</span>
          <span id="summary_package">Not selected</span>
        </div>
        <div class="summary-line">
          <span>Add-ons:</span>
          <span id="summary_addon_count">0 item(s)</span>
        </div>
        <p style="margin-top: 14px; color: #666; font-size: 0.85rem; line-height: 1.6;">
          Your selections will be summarized here. Final pricing will be provided as a detailed quote.
        </p>
      </aside>
      </div>
    </form>
  </div>
</section>
<script>
  (function () {
    var matrixEl = document.getElementById('package-matrix-json');
    var matrix = matrixEl ? JSON.parse(matrixEl.textContent) : {};
    var tourOverridesEl = document.getElementById('tour-vertical-overrides');
    var tourOverrides = tourOverridesEl ? JSON.parse(tourOverridesEl.textContent) : {};
    var verticalTour = @json(request('vertical') === 'tour');
    var prefillService = @json($prefillService ?? null);
    var prefillPackage = @json($prefillPackage ?? null);
    var prefillAddon = @json($prefillAddon ?? null);

    var serviceSelect = document.getElementById('service_id_hidden');
    var packageContainer = document.getElementById('package-section-container');
    var addonOptions = document.querySelectorAll('.addon-option');
    var packageRoot = document.getElementById('package-picker-root');
    var summaryPackage = document.getElementById('summary_package');
    var summaryAddonCount = document.getElementById('summary_addon_count');
    var summaryAddonsTotal = document.getElementById('summary_addons_total');
    var summaryTotal = document.getElementById('summary_total');
    var estimatedTotalInput = document.getElementById('estimated_total');

    function formatTZS(amount) {
      return 'TZS ' + amount.toLocaleString('en-US');
    }

    function refreshPackageStyles() {
      document.querySelectorAll('#package-picker-root .package-option-card').forEach(function (card) {
        var input = card.querySelector('input[type="radio"]');
        if (input) {
          card.classList.toggle('selected', input.checked);
        }
      });
    }

    function refreshAddonStyles() {
      addonOptions.forEach(function (card) {
        var input = card.querySelector('input[type="checkbox"]');
        if (input) {
          card.classList.toggle('selected', input.checked);
        }
      });
    }

    function updateSummary() {
      var selectedPackage = document.querySelector('#package-picker-root .package-option-card input[type="radio"]:checked');
      var packageName = 'Not selected';

      if (selectedPackage) {
        var packageCard = selectedPackage.closest('.package-option-card');
        packageName = packageCard.getAttribute('data-package') || 'Selected';
      }

      var checkedAddons = document.querySelectorAll('.addon-option input[type="checkbox"]:checked');

      summaryPackage.textContent = packageName;
      summaryAddonCount.textContent = checkedAddons.length + ' item(s)';
    }

    function escapeHtml(text) {
      var div = document.createElement('div');
      div.textContent = text;
      return div.innerHTML;
    }

    function escapeAttr(text) {
      return String(text)
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');
    }

    function renderPackages(serviceId, options) {
      options = options || {};
      var usePrefill = !!options.usePrefill;
      if (!packageRoot || !serviceId) {
        if (packageContainer) packageContainer.style.display = 'none';
        return;
      }
      var tiers = matrix[String(serviceId)];
      if (!tiers || !Object.keys(tiers).length) {
        packageRoot.innerHTML = '';
        if (packageContainer) packageContainer.style.display = 'none';
        updateSummary();
        return;
      }
      
      if (packageContainer) packageContainer.style.display = 'block';

      var ids = Object.keys(tiers).map(Number).sort(function (a, b) { return a - b; });
      var html = '';
      ids.forEach(function (tierId) {
        var pRaw = tiers[String(tierId)];
        if (!pRaw) {
          return;
        }
        var p = pRaw;
        if (verticalTour && String(serviceId) === '1') {
          var ov = tourOverrides[String(tierId)];
          if (ov) {
            p = Object.assign({}, pRaw, ov);
          }
        }
        
        var checked = '';
        if (usePrefill && prefillPackage && String(prefillPackage) === String(tierId) &&
            prefillService && String(prefillService) === String(serviceId)) {
          checked = ' checked';
        }
        var feats = (p.features || []).map(function (f) {
          return '<li>' + escapeHtml(f) + '</li>';
        }).join('');

        html +=
          '<label class="package-option-card' + (checked ? ' selected' : '') + '" data-package="' + escapeAttr(p.name) + '">' +
          '<div class="package-info">' +
          '<div style="display: flex; align-items: center; gap: 10px;">' +
          '<input type="radio" name="package_id" value="' + tierId + '"' + checked + ' style="width: 18px; height: 18px;">' +
          '<h4>' + escapeHtml(p.name) + (p.popular ? ' <span style="font-size: 0.7rem; background: var(--accent); color: white; padding: 2px 8px; border-radius: 10px;">POPULAR</span>' : '') + '</h4>' +
          '</div>' +
          '<div class="package-price-tag" style="color: var(--accent); font-weight: 800; margin: 8px 0 12px 28px;">Request Quote</div>' +
          '<p>' + escapeHtml(p.desc || '') + '</p>' +
          '<ul class="package-features-list">' + feats + '</ul>' +
          '</div>' +
          '</label>';
      });
      packageRoot.innerHTML = html;

      // Only auto-select first package if no package is pre-selected AND no addon is pre-selected
      var hasAddonSelected = !!document.querySelector('.addon-option input[type="checkbox"]:checked');
      if (!packageRoot.querySelector('input[name="package_id"]:checked') && !hasAddonSelected) {
        var firstRadio = packageRoot.querySelector('input[name="package_id"]');
        if (firstRadio) {
          firstRadio.checked = true;
          firstRadio.closest('.package-option-card').classList.add('selected');
        }
      }

      packageRoot.querySelectorAll('.package-option-card input[type="radio"]').forEach(function (input) {
        input.addEventListener('change', function () {
          refreshPackageStyles();
          updateSummary();
        });
      });

      refreshPackageStyles();
      updateSummary();
    }

    function toggleCustomDropdown(id) {
      const el = document.getElementById(id);
      const all = document.querySelectorAll('.custom-dropdown-options');
      all.forEach(function(d) { if(d.id !== id) d.style.display = 'none'; });
      el.style.display = el.style.display === 'block' ? 'none' : 'block';
    }

    function selectServiceItem(id, label) {
      document.getElementById('service_id_hidden').value = id;
      document.getElementById('selected-service-label').textContent = label;
      document.getElementById('service-dropdown').style.display = 'none';
      renderPackages(id, { usePrefill: false });
    }

    // Export to window
    window.renderPackages = renderPackages;
    window.toggleCustomDropdownGlobal = toggleCustomDropdown;
    window.selectServiceItemGlobal = selectServiceItem;

    // Set initial label if service_id is prefilled
    if (serviceSelect && serviceSelect.value) {
      var sid = serviceSelect.value;
      var label = '';
      if(sid == '1') label = 'Web Development';
      else if(sid == '2') label = 'Mobile App Development';
      else if(sid == '3') label = 'Network Installation';
      else if(sid == '4') label = 'Cybersecurity';
      else if(sid == '5') label = 'IT Support';
      else if(sid == '6') label = 'ICT Consultancy';
      
      if(label) {
        document.getElementById('selected-service-label').textContent = label;
      }
      renderPackages(sid, { usePrefill: true });
    } else if (prefillAddon) {
      // If we have an addon but no service, we don't necessarily need to select a service/package
      // but let's scroll to contact details to make it "direct pay" style
      var contactSection = document.querySelector('.form-section'); // First section is contact info
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
      }
    }

    if (packageRoot) {
      packageRoot.addEventListener('click', function (e) {
        var label = e.target.closest('.package-option-card');
        if (!label) {
          return;
        }
        setTimeout(function () {
          refreshPackageStyles();
          updateSummary();
        }, 0);
      });
    }

    addonOptions.forEach(function (card) {
      card.addEventListener('click', function () {
        setTimeout(function () {
          refreshAddonStyles();
          updateSummary();
        }, 0);
      });
    });

    var initialServiceValue = serviceSelect ? serviceSelect.value : null;
    if (initialServiceValue) {
      renderPackages(initialServiceValue, { usePrefill: true });
    }

    if (prefillAddon) {
      var addonSection = document.getElementById('extra-addons-section');
      var toggleBtn = document.getElementById('toggle-addons-btn');
      if (addonSection) {
        addonSection.style.display = 'block';
        if (toggleBtn) {
          var btnText = toggleBtn.querySelector('.btn-content span');
          var btnIcon = toggleBtn.querySelector('.btn-content i');
          if (btnText) btnText.textContent = 'Hide Extra Add-On Services';
          if (btnIcon) btnIcon.className = 'fas fa-minus-circle';
          toggleBtn.style.background = 'var(--accent)';
          toggleBtn.style.color = 'white';
        }
      }
      var targetCheckbox = document.querySelector('input[name="selected_addons[]"][value="' + prefillAddon + '"]');
      if (targetCheckbox) {
        targetCheckbox.checked = true;
        var opt = targetCheckbox.closest('.addon-option');
        if (opt) opt.classList.add('selected');
        // Expand the parent dropdown
        var dropdown = targetCheckbox.closest('.addon-category-dropdown');
        if (dropdown) dropdown.classList.add('open');
      }
    }

    refreshAddonStyles();
    updateSummary();
  })();
</script>
@endsection
