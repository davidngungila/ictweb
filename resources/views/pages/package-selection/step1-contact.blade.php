@extends('layouts.app')

@section('title', 'Step 1: Contact Information - Package Selection')

@section('meta_tags')
  <meta name="description" content="Enter your contact information to get started with your ICT service package selection.">
  <meta name="keywords" content="ICT contact, package selection Tanzania, Jezdan Technology">
  <meta property="og:title" content="Step 1: Contact Information">
  <meta property="og:description" content="Enter your contact information to get started with your ICT service package selection.">
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
    background: linear-gradient(90deg, var(--accent) 0%, #e0e0e0 0%);
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
  
  .form-card {
    background: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
  }
  
  .form-group {
    margin-bottom: 28px;
  }
  
  .form-label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    color: #333;
    font-size: 0.95rem;
    transition: color 0.3s;
  }
  
  .form-input {
    width: 100%;
    padding: 16px 20px;
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: #fafafa;
  }
  
  .form-input:focus {
    outline: none;
    border-color: var(--accent);
    background: white;
    box-shadow: 0 0 0 4px rgba(0,0,0,0.05);
    transform: translateY(-2px);
  }
  
  .form-input::placeholder {
    color: #aaa;
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
  
  .info-card {
    background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
    padding: 25px;
    border-radius: 16px;
    border-left: 5px solid var(--accent);
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
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
  
  .input-icon {
    position: relative;
  }
  
  .input-icon i {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    transition: color 0.3s;
  }
  
  .input-icon .form-input {
    padding-left: 50px;
  }
  
  .input-icon:focus-within i {
    color: var(--accent);
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
        Step 1 of 5
      </div>
      <h1 class="hero-title">
        Contact <span>Information</span>
      </h1>
      <p class="hero-subtitle">
        Let's start with your contact details so we can reach you about your package selection.
      </p>
    </div>
  </div>
</section>

<!-- Progress Steps -->
<div style="background: white; padding: 25px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
  <div class="container">
    <div class="progress-steps">
      <div class="step active" id="step1">
        <div class="step-number">1</div>
        <div class="step-label">Contact Info</div>
      </div>
      <div class="step" id="step2">
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

<!-- CONTACT FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    <div style="max-width: 650px; margin: 0 auto;">
      <div class="form-card">
        <div style="text-align: center; margin-bottom: 35px;">
          <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
            <i class="fas fa-user" style="font-size: 32px; color: white;"></i>
          </div>
          <h3 style="margin: 0 0 10px 0; font-size: 1.6rem; color: #333;">Your Contact Details</h3>
          <p style="margin: 0; color: #666; font-size: 1rem;">Please provide your information to get started</p>
        </div>
        
        <form action="{{ route('package.selection.step1.process') }}" method="POST">
          @csrf
          
          @if($errors->any())
            <div class="error-alert">
              @foreach($errors->all() as $error)
                <p style="color: #c33; margin: 5px 0; display: flex; align-items: center;">
                  <i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i> {{ $error }}
                </p>
              @endforeach
            </div>
          @endif

          <div class="form-group input-icon">
            <label class="form-label">Full Name *</label>
            <i class="fas fa-user"></i>
            <input type="text" name="client_name" required 
                   value="{{ old('client_name') }}"
                   class="form-input"
                   placeholder="Enter your full name">
          </div>

          <div class="form-group input-icon">
            <label class="form-label">Email Address *</label>
            <i class="fas fa-envelope"></i>
            <input type="email" name="client_email" required 
                   value="{{ old('client_email') }}"
                   class="form-input"
                   placeholder="Enter your email address">
          </div>

          <div class="form-group input-icon">
            <label class="form-label">Phone Number *</label>
            <i class="fas fa-phone"></i>
            <input type="tel" name="client_phone" required 
                   value="{{ old('client_phone') }}"
                   class="form-input"
                   placeholder="+255 XXX XXX XXX">
          </div>

          <div class="form-group input-icon">
            <label class="form-label">Company Name (Optional)</label>
            <i class="fas fa-building"></i>
            <input type="text" name="company_name" 
                   value="{{ old('company_name') }}"
                   class="form-input"
                   placeholder="Enter your company name">
          </div>

          <div style="display: flex; gap: 15px; margin-top: 40px;">
            <a href="{{ url('/') }}" class="btn-secondary" style="flex: 1; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back to Home
            </a>
            <button type="submit" class="btn-primary" style="flex: 2; display: flex; align-items: center; justify-content: center;">
              Continue to Service Selection <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </button>
          </div>
        </form>
      </div>

      <div class="info-card" style="margin-top: 35px;">
        <h4 style="margin: 0 0 12px 0; color: var(--accent); font-size: 1.1rem; display: flex; align-items: center;">
          <i class="fas fa-lightbulb" style="margin-right: 10px;"></i> Why we need this information?
        </h4>
        <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.6;">
          Your contact details allow us to send you quotes, invoices, and communicate about your project progress. We respect your privacy and never share your information with third parties.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
