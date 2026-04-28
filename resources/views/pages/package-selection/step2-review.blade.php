@extends('layouts.app')

@section('title', 'Review Your Order - Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Review your package selection before proceeding to payment.">
  <meta name="keywords" content="ICT review, package summary Tanzania, Jezdan Technology">
  <meta property="og:title" content="Review Your Order">
  <meta property="og:description" content="Review your package selection before proceeding to payment.">
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
    width: 66%;
    transition: width 0.5s ease;
  }
  .progress-label {
    text-align: center;
    margin-top: 10px;
    font-weight: 600;
    color: var(--accent);
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
        Step 2 of 3
      </div>
      <h1 class="hero-title">
        Review Your <span>Order</span>
      </h1>
      <p class="hero-subtitle">
        Review your package details before proceeding to payment.
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
    <div class="progress-label">66% Complete</div>
  </div>
</div>

<!-- REVIEW FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    @php
      $data = session('package_order_data', []);
    @endphp
    <form action="{{ route('package.selection.step2.process') }}" method="POST">
      @csrf
      
      <!-- Preserve all data -->
      <input type="hidden" name="client_name" value="{{ $data['client_name'] ?? '' }}">
      <input type="hidden" name="client_email" value="{{ $data['client_email'] ?? '' }}">
      <input type="hidden" name="client_phone" value="{{ $data['client_phone'] ?? '' }}">
      <input type="hidden" name="company_name" value="{{ $data['company_name'] ?? '' }}">
      <input type="hidden" name="service_id" value="{{ $data['service_id'] ?? '' }}">
      <input type="hidden" name="package_id" value="{{ $data['package_id'] ?? '' }}">
      @foreach($data['selected_addons'] ?? [] as $addon)
      <input type="hidden" name="selected_addons[]" value="{{ $addon }}">
      @endforeach
      <input type="hidden" name="notes" value="{{ $data['notes'] ?? '' }}">

      <div style="max-width: 950px; margin: 0 auto;">
        <!-- Contact Information -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-user"></i> Contact Information
          </h3>
          <div class="review-item">
            <span class="review-label">Full Name</span>
            <span class="review-value">{{ $data['client_name'] ?? '' }}</span>
          </div>
          <div class="review-item">
            <span class="review-label">Email</span>
            <span class="review-value">{{ $data['client_email'] ?? '' }}</span>
          </div>
          <div class="review-item">
            <span class="review-label">Phone</span>
            <span class="review-value">{{ $data['client_phone'] ?? '' }}</span>
          </div>
          @if($data['company_name'] ?? null)
          <div class="review-item">
            <span class="review-label">Company</span>
            <span class="review-value">{{ $data['company_name'] }}</span>
          </div>
          @endif
        </div>

        <!-- Service & Package -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-box"></i> Service & Package
          </h3>
          @php
            $services = [
                1 => 'Web Development',
                2 => 'Mobile App Development',
                3 => 'Network Installation',
                4 => 'Cybersecurity',
                5 => 'IT Support',
                6 => 'ICT Consultancy',
            ];
            
            $packages = [
                1 => ['name' => 'Starter Package', 'price' => 400000],
                2 => ['name' => 'Business Package', 'price' => 800000],
                3 => ['name' => 'Enterprise Package', 'price' => 1500000],
            ];
            
            $serviceName = $services[$data['service_id'] ?? 0] ?? 'N/A';
            $package = $packages[$data['package_id'] ?? 0] ?? null;
          @endphp
          <div class="review-item">
            <span class="review-label">Service</span>
            <span class="review-value">{{ $serviceName }}</span>
          </div>
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

        <!-- Selected Add-ons -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-rocket"></i> Selected Add-ons
          </h3>
          @if($data['selected_addons'] ?? [])
            <div style="display: flex; flex-wrap: wrap;">
              @foreach($data['selected_addons'] as $addon)
              <span class="feature-tag">
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
          <p style="color: #666;">{{ $data['notes'] ?? 'No additional notes provided' }}</p>
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
            if($data['selected_addons'] ?? []) {
                foreach($data['selected_addons'] as $addon) {
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
          <button type="button" onclick="generateInvoice()" class="btn-secondary" style="flex: 1; display: flex; align-items: center; justify-content: center; border-color: var(--accent); color: var(--accent);">
            <i class="fas fa-file-invoice" style="margin-right: 8px;"></i> Generate Invoice
          </button>
          <button type="submit" class="btn-primary" style="flex: 2; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-right" style="margin-right: 8px;"></i> Proceed to Payment
          </button>
        </div>
      </div>
    </form>
  </div>
</section>

<script>
function generateInvoice() {
  const form = document.createElement('form');
  form.method = 'POST';
  form.action = '{{ route('package.invoice.generate') }}';
  
  const csrfToken = document.createElement('input');
  csrfToken.type = 'hidden';
  csrfToken.name = '_token';
  csrfToken.value = '{{ csrf_token() }}';
  form.appendChild(csrfToken);
  
  document.body.appendChild(form);
  form.submit();
}
</script>
@endsection
