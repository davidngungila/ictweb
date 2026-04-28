@extends('layouts.app')

@section('title', 'Step 5: Review - Package Selection')

@section('meta_tags')
  <meta name="description" content="Review your package selection before proceeding to payment.">
  <meta name="keywords" content="ICT review, package summary Tanzania, Jezdan Technology">
  <meta property="og:title" content="Step 5: Review">
  <meta property="og:description" content="Review your package selection before proceeding to payment.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
@endsection

@section('content')
<style>
  .progress-steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
    position: relative;
    max-width: 800px;
    margin: 0 auto 40px;
  }
  .progress-steps::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--accent) 100%, #e0e0e0 100%);
    z-index: 1;
    transition: all 0.5s ease;
  }
  .step {
    text-align: center;
    position: relative;
    z-index: 2;
    flex: 1;
  }
  .step-number {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: white;
    border: 3px solid #e0e0e0;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px;
    font-weight: 700;
    color: #666;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .step.active .step-number {
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    border-color: var(--accent);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
  }
  .step.completed .step-number {
    background: linear-gradient(135deg, #00c896, #00a67a);
    border-color: #00c896;
    color: white;
    box-shadow: 0 4px 15px rgba(0,200,150,0.3);
  }
  .step-label {
    font-size: 0.85rem;
    color: #666;
    font-weight: 500;
    transition: all 0.3s;
  }
  .step.active .step-label {
    color: var(--accent);
    font-weight: 700;
  }
  .step.completed .step-label {
    color: #00c896;
  }
  
  .review-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    margin-bottom: 25px;
  }
  
  .section-title {
    font-size: 1.4rem;
    margin-bottom: 20px;
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
  
  .review-item {
    display: flex;
    justify-content: space-between;
    padding: 14px 0;
    border-bottom: 1px solid #f0f0f0;
    align-items: center;
  }
  
  .review-item:last-child {
    border-bottom: none;
  }
  
  .review-label {
    color: #666;
    font-weight: 500;
    font-size: 0.95rem;
  }
  
  .review-value {
    color: #333;
    font-weight: 600;
    font-size: 0.95rem;
  }
  
  .summary-total {
    margin-top: 25px;
    padding-top: 25px;
    border-top: 3px solid #f0f0f0;
    display: flex;
    justify-content: space-between;
    font-size: 1.5rem;
    font-weight: 800;
  }
  
  .summary-advance {
    margin-top: 20px;
    padding: 20px;
    background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
    border-radius: 12px;
    font-size: 1rem;
    border-left: 5px solid var(--accent);
  }
  
  .summary-advance strong {
    color: var(--accent);
  }
  
  .btn-primary {
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
    border: none;
    padding: 18px 32px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.05rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  }
  
  .btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
  }
  
  .btn-secondary {
    background: white;
    color: #666;
    border: 2px solid #e8e8e8;
    padding: 18px 32px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.05rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }
  
  .btn-secondary:hover {
    border-color: var(--accent);
    color: var(--accent);
    transform: translateY(-2px);
  }
  
  .feature-tag {
    display: inline-block;
    background: #f0f8ff;
    color: var(--accent);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin: 5px 5px 5px 0;
  }
  
  .empty-state {
    color: #999;
    font-style: italic;
    font-size: 0.9rem;
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
        Step 5 of 5
      </div>
      <h1 class="hero-title">
        Review Your <span>Selection</span>
      </h1>
      <p class="hero-subtitle">
        Review your package details before proceeding to payment.
      </p>
    </div>
  </div>
</section>

<!-- Progress Steps -->
<div style="background: white; padding: 25px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
  <div class="container">
    <div class="progress-steps">
      <div class="step completed" id="step1">
        <div class="step-number">✓</div>
        <div class="step-label">Contact Info</div>
      </div>
      <div class="step completed" id="step2">
        <div class="step-number">✓</div>
        <div class="step-label">Service & Package</div>
      </div>
      <div class="step completed" id="step3">
        <div class="step-number">✓</div>
        <div class="step-label">Features</div>
      </div>
      <div class="step completed" id="step4">
        <div class="step-number">✓</div>
        <div class="step-label">Add-ons</div>
      </div>
      <div class="step active" id="step5">
        <div class="step-number">5</div>
        <div class="step-label">Review</div>
      </div>
    </div>
  </div>
</div>

<!-- REVIEW FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    <form action="{{ route('package.selection.step5.process') }}" method="POST">
      @csrf
      
      <!-- Preserve all data -->
      <input type="hidden" name="client_name" value="{{ old('client_name') }}">
      <input type="hidden" name="client_email" value="{{ old('client_email') }}">
      <input type="hidden" name="client_phone" value="{{ old('client_phone') }}">
      <input type="hidden" name="company_name" value="{{ old('company_name') }}">
      <input type="hidden" name="service_id" value="{{ old('service_id') }}">
      <input type="hidden" name="package_id" value="{{ old('package_id') }}">
      @foreach(old('selected_features', []) as $feature)
      <input type="hidden" name="selected_features[]" value="{{ $feature }}">
      @endforeach
      @foreach(old('selected_addons', []) as $addon)
      <input type="hidden" name="selected_addons[]" value="{{ $addon }}">
      @endforeach

      <div style="max-width: 950px; margin: 0 auto;">
        <!-- Contact Information -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-user"></i> Contact Information
          </h3>
          <div class="review-item">
            <span class="review-label">Full Name</span>
            <span class="review-value">{{ old('client_name') }}</span>
          </div>
          <div class="review-item">
            <span class="review-label">Email</span>
            <span class="review-value">{{ old('client_email') }}</span>
          </div>
          <div class="review-item">
            <span class="review-label">Phone</span>
            <span class="review-value">{{ old('client_phone') }}</span>
          </div>
          @if(old('company_name'))
          <div class="review-item">
            <span class="review-label">Company</span>
            <span class="review-value">{{ old('company_name') }}</span>
          </div>
          @endif
        </div>

        <!-- Service & Package -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-box"></i> Service & Package
          </h3>
          @php
            // Hardcoded services
            $services = [
                1 => ['name' => 'Web Development'],
                2 => ['name' => 'Mobile App Development'],
                3 => ['name' => 'Network Installation'],
                4 => ['name' => 'Cybersecurity'],
                5 => ['name' => 'IT Support'],
                6 => ['name' => 'ICT Consultancy'],
            ];
            
            // Hardcoded packages
            $packages = [
                1 => ['name' => 'Starter Package', 'price' => 400000],
                2 => ['name' => 'Business Package', 'price' => 800000],
                3 => ['name' => 'Enterprise Package', 'price' => 1500000],
            ];
            
            $service = $services[old('service_id')] ?? null;
            $package = $packages[old('package_id')] ?? null;
          @endphp
          @if($service)
          <div class="review-item">
            <span class="review-label">Service</span>
            <span class="review-value">{{ $service['name'] }}</span>
          </div>
          @endif
          @if($package)
          <div class="review-item">
            <span class="review-label">Package</span>
            <span class="review-value">{{ $package['name'] }}</span>
          </div>
          <div class="review-item">
            <span class="review-label">Package Price</span>
            <span class="review-value" style="color: var(--accent); font-weight: 700;">TZS {{ number_format($package['price'], 0) }}</span>
          </div>
          @endif
        </div>

        <!-- Selected Features -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-cog"></i> Selected Features
          </h3>
          @if(old('selected_features'))
            <div style="display: flex; flex-wrap: wrap;">
              @foreach(old('selected_features') as $feature)
              <span class="feature-tag">
                <i class="fas fa-check" style="margin-right: 5px;"></i> {{ ucfirst(str_replace('_', ' ', $feature)) }}
              </span>
              @endforeach
            </div>
          @else
          <p class="empty-state">No features selected</p>
          @endif
        </div>

        <!-- Selected Add-ons -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-rocket"></i> Selected Add-ons
          </h3>
          @if(old('selected_addons'))
            <div style="display: flex; flex-wrap: wrap;">
              @foreach(old('selected_addons') as $addon)
              <span class="feature-tag" style="background: #fff3cd; color: #856404;">
                <i class="fas fa-plus" style="margin-right: 5px;"></i> {{ ucfirst(str_replace('_', ' ', $addon)) }}
              </span>
              @endforeach
            </div>
          @else
          <p class="empty-state">No add-ons selected</p>
          @endif
        </div>

        <!-- Additional Notes -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-edit"></i> Additional Notes
          </h3>
          <textarea name="notes" rows="4" style="width: 100%; padding: 16px; border: 2px solid #e8e8e8; border-radius: 12px; resize: vertical; font-size: 1rem; transition: border-color 0.3s;" placeholder="Any additional requirements or special requests..." onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor='#e8e8e8'">{{ old('notes') }}</textarea>
        </div>

        <!-- Price Summary -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-calculator"></i> Price Summary
          </h3>
          @if($package)
          <div class="review-item">
            <span class="review-label">Package Price</span>
            <span class="review-value">TZS {{ number_format($package['price'], 0) }}</span>
          </div>
          @endif
          
          @php
            // Addon prices
            $addonPrices = [
                'travel_blog_5_posts' => 150000,
                'advanced_seo' => 300000,
                'social_auto_posting' => 150000,
                'email_marketing' => 200000,
                'google_automation' => 100000,
                'ai_chatbot' => 250000,
                'bulk_sms_system' => 200000,
                'online_payment' => 200000,
                'api_integration' => 150000,
                'admin_dashboard' => 300000,
                'booking_system' => 250000,
                'ecommerce' => 350000,
            ];
            
            $basePrice = $package ? $package['price'] : 0;
            $addonsTotal = 0;
            if(old('selected_addons')) {
                foreach(old('selected_addons') as $addon) {
                    $addonsTotal += $addonPrices[$addon] ?? 0;
                }
            }
            $totalPrice = $basePrice + $addonsTotal;
            $advancePayment = $totalPrice * 0.3;
          @endphp
          
          @if($addonsTotal > 0)
          <div class="review-item">
            <span class="review-label">Add-ons Total</span>
            <span class="review-value">TZS {{ number_format($addonsTotal, 0) }}</span>
          </div>
          @endif
          
          <div class="summary-total">
            <span>Total</span>
            <span style="color: var(--accent);">TZS {{ number_format($totalPrice, 0) }}</span>
          </div>
          <div class="summary-advance">
            <strong>30% Advance Required:</strong> TZS {{ number_format($advancePayment, 0) }}
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div style="display: flex; gap: 15px; margin-top: 30px;">
          <button type="button" onclick="history.back()" class="btn-secondary" style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
          </button>
          <button type="submit" class="btn-primary" style="flex: 2; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-check" style="margin-right: 8px;"></i> Generate Invoice & Proceed to Payment
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
