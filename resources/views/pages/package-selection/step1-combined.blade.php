@extends('layouts.app')

@section('title', 'Package Selection - Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Select your ICT service package and complete your order.">
  <meta name="keywords" content="ICT package selection Tanzania, web development, mobile apps, networking">
  <meta property="og:title" content="Package Selection">
  <meta property="og:description" content="Select your ICT service package and complete your order.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
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
      $prefillService = old('service_id', request('service_id'));
      $prefillPackage = old('package_id', request('package_id'));
    @endphp
    <script type="application/json" id="package-matrix-json">{!! json_encode(\App\Support\PackagePricing::matrixForJs()) !!}</script>

    <form action="{{ route('package.selection.step1.process') }}" method="POST">
      @csrf
      
      <div style="max-width: 1150px; margin: 0 auto;" class="advanced-grid">
        <div>
        <div class="highlight-box">
          <strong>Advanced Package Planner:</strong> Select a service, compare package capability, and get a live cost estimate before moving to review.
          <div>
            <span class="quick-chip"><i class="fas fa-check-circle" style="margin-right: 6px;"></i>Instant estimate</span>
            <span class="quick-chip"><i class="fas fa-check-circle" style="margin-right: 6px;"></i>Flexible add-ons</span>
            <span class="quick-chip"><i class="fas fa-check-circle" style="margin-right: 6px;"></i>Priority options</span>
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
              <input type="text" name="client_name" class="form-input" value="{{ old('client_name') }}" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
              <label class="form-label">Email *</label>
              <input type="email" name="client_email" class="form-input" value="{{ old('client_email') }}" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label class="form-label">Phone *</label>
              <input type="text" name="client_phone" class="form-input" value="{{ old('client_phone') }}" placeholder="Enter your phone number" pattern="[0-9+\-\s]{8,20}" required>
            </div>
            <div class="form-group">
              <label class="form-label">Company (Optional)</label>
              <input type="text" name="company_name" class="form-input" value="{{ old('company_name') }}" placeholder="Enter company name">
            </div>
          </div>
        </div>

        <!-- Service Selection -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-cog"></i> Select Service *
          </h3>
          <div class="service-grid">
            <label class="service-card {{ (string) old('service_id', request('service_id')) === '1' ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="1" {{ (string) old('service_id', request('service_id')) === '1' ? 'checked' : '' }} required>
              <div class="service-icon"><i class="fas fa-code"></i></div>
              <div class="service-name">Web Development</div>
              <div class="service-desc">Custom websites for all businesses</div>
            </label>
            <label class="service-card {{ (string) old('service_id', request('service_id')) === '2' ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="2" {{ (string) old('service_id', request('service_id')) === '2' ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
              <div class="service-name">Mobile App Development</div>
              <div class="service-desc">Cross-platform Android & iOS apps</div>
            </label>
            <label class="service-card {{ (string) old('service_id', request('service_id')) === '3' ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="3" {{ (string) old('service_id', request('service_id')) === '3' ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-network-wired"></i></div>
              <div class="service-name">Network Installation</div>
              <div class="service-desc">Professional network infrastructure</div>
            </label>
            <label class="service-card {{ (string) old('service_id', request('service_id')) === '4' ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="4" {{ (string) old('service_id', request('service_id')) === '4' ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
              <div class="service-name">Cybersecurity</div>
              <div class="service-desc">Comprehensive security solutions</div>
            </label>
            <label class="service-card {{ (string) old('service_id', request('service_id')) === '5' ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="5" {{ (string) old('service_id', request('service_id')) === '5' ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-screwdriver-wrench"></i></div>
              <div class="service-name">IT Support</div>
              <div class="service-desc">Reliable ongoing IT support</div>
            </label>
            <label class="service-card {{ (string) old('service_id', request('service_id')) === '6' ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="6" {{ (string) old('service_id', request('service_id')) === '6' ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
              <div class="service-name">ICT Consultancy</div>
              <div class="service-desc">Strategic digital transformation guidance</div>
            </label>
          </div>
        </div>

        <!-- Package Selection (dynamic per service) -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-box"></i> Select Package *
          </h3>
          <p class="package-hint" id="package-hint">Select a service above to load the correct tiers and anchor pricing.</p>
          <div id="package-picker-root" class="service-grid"></div>
        </div>

        @php
          $addonCatalog = \App\Support\PackagePricing::addonCatalog();
          $addonOld = old('selected_addons', []);
        @endphp

        <!-- Add-ons -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-rocket"></i> Extra Add-On Services
          </h3>
          <p class="addon-super">Supercharge Your Project</p>
          <p class="addon-lead">Enhance any package with these additional features tailored to your business needs.</p>
          <p class="addon-note">Where a price is shown as a range, per month, or &ldquo;+&rdquo;, your live estimate uses the <strong>starting quote</strong>; we confirm the exact scope before invoicing.</p>

          @foreach($addonCatalog as $group)
            <h4 class="addon-category">{{ $group['heading'] }}</h4>
            <div class="addon-grid">
              @foreach($group['items'] as $item)
                @php $addonSelected = in_array($item['slug'], $addonOld, true); @endphp
                <label class="addon-card {{ $addonSelected ? 'selected' : '' }}" data-addon="{{ $item['name'] }}" data-price="{{ $item['price'] }}">
                  <input type="checkbox" name="selected_addons[]" value="{{ $item['slug'] }}" {{ $addonSelected ? 'checked' : '' }}>
                  <div class="addon-name">{{ $item['name'] }}</div>
                  <div class="addon-desc">{{ $item['desc'] }}</div>
                  <div class="addon-price">{{ $item['price_label'] }}</div>
                </label>
              @endforeach
            </div>
          @endforeach
        </div>

        <!-- Project Preferences -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-sliders"></i> Project Preferences
          </h3>
          <div class="inline-grid">
            <div class="form-group">
              <label class="form-label">Timeline Priority</label>
              <select name="timeline_priority" class="form-input">
                <option value="standard" {{ old('timeline_priority') == 'standard' ? 'selected' : '' }}>Standard Delivery</option>
                <option value="fast_track" {{ old('timeline_priority') == 'fast_track' ? 'selected' : '' }}>Fast Track</option>
                <option value="urgent" {{ old('timeline_priority') == 'urgent' ? 'selected' : '' }}>Urgent Project</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Preferred Payment Plan (ICT)</label>
              <select name="payment_plan" class="form-input" id="payment_plan_select">
                <option value="startup" {{ old('payment_plan', 'enterprise') == 'startup' ? 'selected' : '' }}>Startup / Small — 50% deposit to start</option>
                <option value="standard" {{ old('payment_plan', 'enterprise') == 'standard' ? 'selected' : '' }}>Standard — 40% deposit to start</option>
                <option value="enterprise" {{ old('payment_plan', 'enterprise') == 'enterprise' ? 'selected' : '' }}>Enterprise / Large — 30% initial (default)</option>
              </select>
              <p class="form-hint" style="font-size: 0.82rem; color: #666; margin-top: 8px; line-height: 1.45;">The amount due on this checkout is your <strong>first deposit</strong> only. Later milestones follow the plan shown on the review step.</p>
            </div>
          </div>
        </div>

        <!-- Notes -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-edit"></i> Additional Notes
          </h3>
          <textarea name="notes" rows="4" class="form-input" placeholder="Any additional requirements or special requests...">{{ old('notes') }}</textarea>
        </div>

        <!-- Submit Button -->
        <div style="text-align: center; margin-top: 30px;">
          <input type="hidden" name="estimated_total" id="estimated_total" value="0">
          <button type="submit" class="btn-primary">
            <i class="fas fa-arrow-right" style="margin-right: 10px;"></i> Continue to Review
          </button>
        </div>
      </div> <!-- left column -->

      <!-- Right Summary Column -->
      <aside class="summary-panel">
        <div class="summary-title"><i class="fas fa-receipt" style="margin-right: 8px;"></i>Live Order Summary</div>
        <div class="summary-line">
          <span>Selected Package:</span>
          <span id="summary_package">Not selected</span>
        </div>
        <div class="summary-line">
          <span>Add-ons:</span>
          <span id="summary_addon_count">0 item(s)</span>
        </div>
        <div class="summary-line">
          <span>Add-ons Total:</span>
          <span id="summary_addons_total">TZS 0</span>
        </div>
        <div class="summary-total summary-line">
          <span>Estimated Total:</span>
          <span id="summary_total">TZS 0</span>
        </div>
        <p style="margin-top: 14px; color: #666; font-size: 0.85rem; line-height: 1.6;">
          This estimate updates instantly based on your selections. Final total is confirmed in review.
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
    var prefillService = @json($prefillService !== null && $prefillService !== '' ? (string) $prefillService : null);
    var prefillPackage = @json($prefillPackage !== null && $prefillPackage !== '' ? (string) $prefillPackage : null);

    var serviceCards = document.querySelectorAll('.service-card');
    var addonCards = document.querySelectorAll('.addon-card');
    var packageRoot = document.getElementById('package-picker-root');
    var packageHint = document.getElementById('package-hint');
    var summaryPackage = document.getElementById('summary_package');
    var summaryAddonCount = document.getElementById('summary_addon_count');
    var summaryAddonsTotal = document.getElementById('summary_addons_total');
    var summaryTotal = document.getElementById('summary_total');
    var estimatedTotalInput = document.getElementById('estimated_total');

    function formatTZS(amount) {
      return 'TZS ' + amount.toLocaleString('en-US');
    }

    function refreshServiceStyles() {
      serviceCards.forEach(function (card) {
        var input = card.querySelector('input[name="service_id"]');
        if (input) {
          card.classList.toggle('selected', input.checked);
        }
      });
    }

    function refreshPackageStyles() {
      document.querySelectorAll('#package-picker-root .package-card').forEach(function (card) {
        var input = card.querySelector('input[type="radio"]');
        if (input) {
          card.classList.toggle('selected', input.checked);
        }
      });
    }

    function refreshAddonStyles() {
      addonCards.forEach(function (card) {
        var input = card.querySelector('input[type="checkbox"]');
        if (input) {
          card.classList.toggle('selected', input.checked);
        }
      });
    }

    function updateSummary() {
      var selectedPackage = document.querySelector('#package-picker-root .package-card input[type="radio"]:checked');
      var packagePrice = 0;
      var packageName = 'Not selected';

      if (selectedPackage) {
        var packageCard = selectedPackage.closest('.package-card');
        packagePrice = parseInt(packageCard.getAttribute('data-price') || '0', 10);
        packageName = packageCard.getAttribute('data-package') || 'Selected';
      }

      var checkedAddons = document.querySelectorAll('.addon-card input[type="checkbox"]:checked');
      var addonsTotal = 0;
      checkedAddons.forEach(function (addon) {
        var addonCard = addon.closest('.addon-card');
        addonsTotal += parseInt(addonCard.getAttribute('data-price') || '0', 10);
      });

      var total = packagePrice + addonsTotal;

      summaryPackage.textContent = packageName;
      summaryAddonCount.textContent = checkedAddons.length + ' item(s)';
      summaryAddonsTotal.textContent = formatTZS(addonsTotal);
      summaryTotal.textContent = formatTZS(total);
      estimatedTotalInput.value = total;
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
      if (!packageRoot) {
        return;
      }
      var tiers = serviceId ? matrix[String(serviceId)] : null;
      if (!tiers || !Object.keys(tiers).length) {
        packageRoot.innerHTML = '';
        if (packageHint) {
          packageHint.style.display = 'block';
          packageHint.textContent = 'Select a service above to load tier packages aligned with our public pricing.';
        }
        updateSummary();
        return;
      }
      if (packageHint) {
        packageHint.style.display = 'none';
      }

      var ids = Object.keys(tiers).map(Number).sort(function (a, b) { return a - b; });
      var html = '';
      ids.forEach(function (tierId) {
        var p = tiers[String(tierId)];
        if (!p) {
          return;
        }
        var popularClass = p.popular ? ' popular' : '';
        var checked = '';
        if (usePrefill && prefillPackage && String(prefillPackage) === String(tierId) &&
            prefillService && String(prefillService) === String(serviceId)) {
          checked = ' checked';
        }
        var feats = (p.features || []).map(function (f) {
          return '<li>' + escapeHtml(f) + '</li>';
        }).join('');
        html +=
          '<label class="package-card' + popularClass + '" data-package="' + escapeAttr(p.name) + '" data-price="' + Number(p.price) + '">' +
          '<input type="radio" name="package_id" value="' + tierId + '"' + checked + ' required>' +
          '<div class="package-name">' + escapeHtml(p.name) + '</div>' +
          '<div class="package-price">' + formatTZS(Number(p.price)) + '</div>' +
          '<div class="package-desc">' + escapeHtml(p.desc || '') + '</div>' +
          '<ul class="feature-list">' + feats + '</ul>' +
          '</label>';
      });
      packageRoot.innerHTML = html;

      if (!packageRoot.querySelector('input[name="package_id"]:checked')) {
        var firstRadio = packageRoot.querySelector('input[name="package_id"]');
        if (firstRadio) {
          firstRadio.checked = true;
        }
      }

      packageRoot.querySelectorAll('.package-card input[type="radio"]').forEach(function (input) {
        input.addEventListener('change', function () {
          refreshPackageStyles();
          updateSummary();
        });
      });

      refreshPackageStyles();
      updateSummary();
    }

    document.querySelectorAll('input[name="service_id"]').forEach(function (radio) {
      radio.addEventListener('change', function () {
        renderPackages(this.value, { usePrefill: false });
        refreshServiceStyles();
      });
    });

    if (packageRoot) {
      packageRoot.addEventListener('click', function (e) {
        var label = e.target.closest('.package-card');
        if (!label) {
          return;
        }
        setTimeout(function () {
          refreshPackageStyles();
          updateSummary();
        }, 0);
      });
    }

    serviceCards.forEach(function (card) {
      card.addEventListener('click', function () {
        setTimeout(refreshServiceStyles, 0);
      });
    });

    addonCards.forEach(function (card) {
      card.addEventListener('click', function () {
        setTimeout(function () {
          refreshAddonStyles();
          updateSummary();
        }, 0);
      });
    });

    var initialService = document.querySelector('input[name="service_id"]:checked');
    if (initialService) {
      renderPackages(initialService.value, { usePrefill: true });
    } else if (packageHint) {
      packageHint.style.display = 'block';
    }

    refreshServiceStyles();
    refreshAddonStyles();
    updateSummary();
  })();
</script>
@endsection
