@extends('layouts.app')

@section('title', 'Review Your Order - Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Review your package selection before proceeding to payment.">
  <meta name="keywords" content="ICT review, package summary Tanzania, Jezdan Technology">
  <meta property="og:title" content="Review Your Order">
  <meta property="og:description" content="Review your package selection before proceeding to payment.">
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

  .step2-inner {
    max-width: 950px;
    margin: 0 auto;
    padding: 0 clamp(10px, 3vw, 12px);
    box-sizing: border-box;
  }

  @media (max-width: 600px) {
    .review-card {
      padding: clamp(16px, 5vw, 28px);
      border-radius: 14px;
    }
    .section-title {
      font-size: 1.12rem;
      flex-wrap: wrap;
      row-gap: 8px;
    }
    .review-item {
      flex-direction: column;
      align-items: flex-start;
      gap: 6px;
      padding: 12px 0;
    }
    .review-value {
      text-align: left;
      max-width: 100%;
      word-break: break-word;
    }
    .summary-total {
      flex-direction: column;
      gap: 10px;
      font-size: 1.22rem;
      align-items: flex-start;
    }
  }

  .review-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 24px;
  }

  .review-actions .btn-secondary {
    flex: 1 1 160px;
    min-width: 0;
  }

  .review-actions .btn-primary {
    flex: 2 1 220px;
    min-width: 0;
  }

  @media (max-width: 640px) {
    .review-actions {
      flex-direction: column;
    }
    .review-actions .btn-secondary,
    .review-actions .btn-primary {
      flex: 1 1 auto;
      width: 100%;
    }
  }

  .feature-list-review {
    margin: 0;
    padding-left: 1.15rem;
    color: #444;
    line-height: 1.65;
    font-size: 0.95rem;
  }

  .feature-list-review li {
    margin-bottom: 6px;
  }

  .ict-plans-wrap {
    margin-top: 4px;
  }

  .ict-plans-heading {
    font-size: 1.12rem;
    color: var(--accent);
    margin: 0 0 16px;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    line-height: 1.35;
  }

  .ict-plans-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(min(100%, 260px), 1fr));
    gap: 16px;
  }

  .ict-plan-card {
    border: 1px solid #e8edf5;
    border-radius: 14px;
    padding: 16px 18px;
    background: #fbfcff;
  }

  .ict-plan-title {
    font-size: 1rem;
    margin: 0 0 8px;
    color: #1a2744;
  }

  .ict-plan-tagline {
    font-size: 0.88rem;
    color: #555;
    margin: 0 0 12px;
    line-height: 1.5;
  }

  .ict-plan-sub {
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--accent);
    font-weight: 700;
    margin: 12px 0 6px;
  }

  .ict-plan-list {
    margin: 0;
    padding-left: 1.1rem;
    font-size: 0.88rem;
    color: #444;
    line-height: 1.55;
  }

  .ict-plan-suitable {
    list-style: disc;
  }

  .ict-payment-legal-note {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    margin-top: 18px;
    padding: 14px 16px;
    background: #fff9e6;
    border: 1px solid #f5e6b3;
    border-radius: 12px;
    font-size: 0.88rem;
    color: #5c4813;
    line-height: 1.55;
  }

  .ict-payment-legal-note i {
    margin-top: 3px;
    flex-shrink: 0;
    color: #c9a227;
  }

  .ict-payment-legal-note p {
    margin: 0;
  }

  .step2-shell {
    padding: clamp(32px, 6vw, 70px) 0 !important;
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
<section class="services step2-shell" style="padding: 70px 0;">
  <div class="container">
    @if(session('success'))
    <div style="background:#d4edda;border:1px solid #c3e6cb;color:#155724;padding:14px 18px;border-radius:12px;margin-bottom:22px;display:flex;align-items:center;gap:10px;">
      <i class="fas fa-check-circle"></i><span>{{ session('success') }}</span>
    </div>
    @endif
    @if(session('error'))
    <div style="background:#f8d7da;border:1px solid #f5c6cb;color:#721c24;padding:14px 18px;border-radius:12px;margin-bottom:22px;display:flex;align-items:flex-start;gap:10px;">
      <i class="fas fa-exclamation-circle" style="margin-top:2px;"></i>
      <div>
        <strong>Could not continue to payment.</strong>
        <div style="margin-top:6px;font-size:0.95rem;">{{ session('error') }}</div>
      </div>
    </div>
    @endif
    @php
      $data = session('package_order_data', []);
    @endphp
    @if(empty($data))
    <div style="background:#fff3cd;border:1px solid #ffc107;color:#856404;padding:14px 18px;border-radius:12px;margin-bottom:22px;">
      <i class="fas fa-info-circle"></i> Your session expired. Please <a href="{{ route('package.selection.step1') }}" style="color:var(--accent);font-weight:700;">start again from step 1</a>.
    </div>
    @endif
    <form action="{{ route('package.selection.step2.process') }}" method="POST">
      @csrf
      
      <!-- Preserve all data -->
      <input type="hidden" name="client_name" value="{{ $data['client_name'] ?? '' }}">
      <input type="hidden" name="client_email" value="{{ $data['client_email'] ?? '' }}">
      <input type="hidden" name="client_phone" value="{{ $data['client_phone'] ?? '' }}">
      <input type="hidden" name="company_name" value="{{ $data['company_name'] ?? '' }}">
      <input type="hidden" name="service_id" value="{{ $data['service_id'] ?? '' }}">
      <input type="hidden" name="package_id" value="{{ $data['package_id'] ?? '' }}">
      <input type="hidden" name="timeline_priority" value="{{ $data['timeline_priority'] ?? 'standard' }}">

      <input type="hidden" name="estimated_total" value="{{ $data['estimated_total'] ?? 0 }}">
      @foreach($data['selected_addons'] ?? [] as $addon)
      <input type="hidden" name="selected_addons[]" value="{{ $addon }}">
      @endforeach
      <input type="hidden" name="notes" value="{{ $data['notes'] ?? '' }}">

      <div class="step2-inner">
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
            
            $serviceName = $services[$data['service_id'] ?? 0] ?? 'N/A';
            $package = \App\Support\PackagePricing::package((int) ($data['service_id'] ?? 0), (int) ($data['package_id'] ?? 0));
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
          @endif
        </div>

        @if($package && !empty($package['features']))
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-list-check"></i> Package includes
          </h3>
          <ul class="feature-list-review">
            @foreach($package['features'] as $feat)
              <li>{{ $feat }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <!-- Selected Add-ons -->
        @php $addonLabels = \App\Support\PackagePricing::addonLabels(); @endphp
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-rocket"></i> Selected Add-ons
          </h3>
          @if($data['selected_addons'] ?? [])
            <div style="display: flex; flex-wrap: wrap;">
              @foreach($data['selected_addons'] as $addon)
              <span class="feature-tag">
                <i class="fas fa-plus" style="margin-right: 5px;"></i> {{ $addonLabels[$addon] ?? ucfirst(str_replace('_', ' ', $addon)) }}
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

        <!-- Project Preferences -->
        <div class="review-card">
          <h3 class="section-title">
            <i class="fas fa-sliders"></i> Project Preferences
          </h3>
          <div class="review-item">
            <span class="review-label">Timeline Priority</span>
            <span class="review-value">{{ ucfirst(str_replace('_', ' ', $data['timeline_priority'] ?? 'standard')) }}</span>
          </div>
        </div>

        <div class="review-card" style="font-size:0.88rem;color:#555;line-height:1.55;">
          <p>After submission, our team will review your requirements and provide a detailed official quote within 24 hours.</p>
        </div>

        <!-- Navigation Buttons -->
        <div class="review-actions">
          <button type="button" onclick="history.back()" class="btn-secondary" style="display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
          </button>
          <button type="submit" class="btn-primary" style="display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-check" style="margin-right: 8px;"></i> Submit for Official Quote
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
