@extends('layouts.app')

@section('title', 'Step 2: Service & Package - Package Selection')

@section('meta_tags')
  <meta name="description" content="Select your service and package for your ICT project.">
  <meta name="keywords" content="ICT services, package selection Tanzania, Jezdan Technology">
  <meta property="og:title" content="Step 2: Service & Package">
  <meta property="og:description" content="Select your service and package for your ICT project.">
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
    background: linear-gradient(90deg, var(--accent) 50%, #e0e0e0 50%);
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
  
  .selection-card {
    background: white;
    padding: 45px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    margin-bottom: 30px;
  }
  
  .section-title {
    font-size: 1.5rem;
    margin-bottom: 25px;
    color: var(--accent);
    display: flex;
    align-items: center;
  }
  
  .section-title i {
    margin-right: 12px;
    font-size: 1.3rem;
  }
  
  .option-card {
    border: 3px solid #e8e8e8;
    border-radius: 16px;
    padding: 25px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: white;
    position: relative;
    overflow: hidden;
  }
  
  .option-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.02) 0%, transparent 100%);
    opacity: 0;
    transition: opacity 0.3s;
  }
  
  .option-card:hover {
    border-color: var(--accent) !important;
    transform: translateY(-5px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.15);
  }
  
  .option-card:hover::before {
    opacity: 1;
  }
  
  .option-card input {
    position: relative;
    z-index: 2;
    width: 24px;
    height: 24px;
    accent-color: var(--accent);
    cursor: pointer;
  }
  
  .option-card input:checked + div {
    color: var(--accent);
  }
  
  .option-card.popular {
    border-color: var(--accent);
    background: linear-gradient(135deg, #f0f8ff 0%, white 100%);
  }
  
  .popular-badge {
    position: absolute;
    top: -12px;
    right: 20px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
    padding: 6px 18px;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 700;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    z-index: 3;
  }
  
  .option-icon {
    font-size: 1.8rem;
    color: var(--accent);
    margin-bottom: 12px;
  }
  
  .option-name {
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 8px;
    color: #333;
  }
  
  .option-desc {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.5;
  }
  
  .option-price {
    color: var(--accent);
    font-weight: 800;
    font-size: 1.4rem;
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
  
  .error-alert {
    background: linear-gradient(135deg, #fee 0%, #fcc 0%);
    border: 2px solid #fcc;
    padding: 18px 22px;
    border-radius: 12px;
    margin-bottom: 25px;
    animation: shake 0.5s ease-in-out;
  }
  
  @keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-10px); }
    75% { transform: translateX(10px); }
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
        Step 2 of 5
      </div>
      <h1 class="hero-title">
        Select <span>Service & Package</span>
      </h1>
      <p class="hero-subtitle">
        Choose the service category and package that best fits your needs.
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
      <div class="step active" id="step2">
        <div class="step-number">2</div>
        <div class="step-label">Service & Package</div>
      </div>
      <div class="step" id="step3">
        <div class="step-number">3</div>
        <div class="step-label">Features</div>
      </div>
      <div class="step" id="step4">
        <div class="step-number">4</div>
        <div class="step-label">Add-ons</div>
      </div>
      <div class="step" id="step5">
        <div class="step-number">5</div>
        <div class="step-label">Review</div>
      </div>
    </div>
  </div>
</div>

<!-- SERVICE & PACKAGE FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    <form action="{{ route('package.selection.step2.process') }}" method="POST">
      @csrf
      
      <!-- Preserve contact info from step 1 -->
      <input type="hidden" name="client_name" value="{{ old('client_name') }}">
      <input type="hidden" name="client_email" value="{{ old('client_email') }}">
      <input type="hidden" name="client_phone" value="{{ old('client_phone') }}">
      <input type="hidden" name="company_name" value="{{ old('company_name') }}">

      @if($errors->any())
        <div class="error-alert" style="max-width: 900px; margin: 0 auto 30px;">
          @foreach($errors->all() as $error)
            <p style="color: #c33; margin: 5px 0; display: flex; align-items: center;">
              <i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i> {{ $error }}
            </p>
          @endforeach
        </div>
      @endif

      <div style="max-width: 950px; margin: 0 auto;">
        <!-- Service Selection -->
        <div class="selection-card">
          <h3 class="section-title">
            <i class="fas fa-cogs"></i> Select Service Category
          </h3>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            @foreach($services as $service)
            <label class="option-card">
              <input type="radio" name="service_id" value="{{ $service->id }}" required style="margin-right: 15px;">
              <div style="position: relative; z-index: 2;">
                <div class="option-icon">
                  <i class="{{ $service->icon }}"></i>
                </div>
                <div class="option-name">{{ $service->name }}</div>
                <p class="option-desc">{{ $service->description }}</p>
                <div class="option-price">From TZS {{ number_format($service->base_price, 0) }}</div>
              </div>
            </label>
            @endforeach
          </div>
        </div>

        <!-- Package Selection -->
        <div class="selection-card">
          <h3 class="section-title">
            <i class="fas fa-box"></i> Select Package
          </h3>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            @foreach($packages as $package)
            <label class="option-card {{ $package->is_popular ? 'popular' : '' }}">
              @if($package->is_popular)
              <span class="popular-badge">POPULAR</span>
              @endif
              <input type="radio" name="package_id" value="{{ $package->id }}" required style="margin-right: 15px;">
              <div style="position: relative; z-index: 2;">
                <div class="option-name">{{ $package->name }}</div>
                <p class="option-desc">{{ $package->description }}</p>
                <div class="option-price">TZS {{ number_format($package->price, 0) }}</div>
                @if($package->duration)
                <div style="margin-top: 8px; color: #888; font-size: 0.9rem; font-weight: 500;">{{ $package->duration }}</div>
                @endif
              </div>
            </label>
            @endforeach
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div style="display: flex; gap: 15px;">
          <button type="button" onclick="history.back()" class="btn-secondary" style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
          </button>
          <button type="submit" class="btn-primary" style="flex: 2; display: flex; align-items: center; justify-content: center;">
            Continue to Features <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
