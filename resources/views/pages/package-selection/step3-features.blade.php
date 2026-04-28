@extends('layouts.app')

@section('title', 'Step 3: Features - Package Selection')

@section('meta_tags')
  <meta name="description" content="Select the features you want included in your package.">
  <meta name="keywords" content="ICT features, package customization Tanzania, Jezdan Technology">
  <meta property="og:title" content="Step 3: Features">
  <meta property="og:description" content="Select the features you want included in your package.">
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
    background: linear-gradient(90deg, var(--accent) 75%, #e0e0e0 75%);
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
  
  .features-card {
    background: white;
    padding: 45px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
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
  
  .feature-item {
    display: flex;
    align-items: center;
    padding: 18px 22px;
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: white;
  }
  
  .feature-item:hover {
    border-color: var(--accent) !important;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
  }
  
  .feature-item input {
    width: 24px;
    height: 24px;
    accent-color: var(--accent);
    cursor: pointer;
    margin-right: 15px;
  }
  
  .feature-item input:checked + span {
    color: var(--accent);
    font-weight: 700;
  }
  
  .feature-icon {
    font-size: 1.3rem;
    margin-right: 12px;
    color: #666;
    transition: color 0.3s;
  }
  
  .feature-item:hover .feature-icon {
    color: var(--accent);
  }
  
  .feature-item input:checked ~ .feature-icon {
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
  
  .info-card {
    background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
    padding: 25px;
    border-radius: 16px;
    border-left: 5px solid var(--accent);
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
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
        Step 3 of 5
      </div>
      <h1 class="hero-title">
        Select <span>Features</span>
      </h1>
      <p class="hero-subtitle">
        Choose the essential features you want included in your package.
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
      <div class="step active" id="step3">
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

<!-- FEATURES FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    <form action="{{ route('package.selection.step3.process') }}" method="POST">
      @csrf
      
      <!-- Preserve previous steps data -->
      <input type="hidden" name="client_name" value="{{ old('client_name') }}">
      <input type="hidden" name="client_email" value="{{ old('client_email') }}">
      <input type="hidden" name="client_phone" value="{{ old('client_phone') }}">
      <input type="hidden" name="company_name" value="{{ old('company_name') }}">
      <input type="hidden" name="service_id" value="{{ old('service_id') }}">
      <input type="hidden" name="package_id" value="{{ old('package_id') }}">

      <div style="max-width: 950px; margin: 0 auto;">
        <div class="features-card">
          <h3 class="section-title">
            <i class="fas fa-cog"></i> Basic Features
          </h3>
          <p style="color: #666; margin-bottom: 30px; font-size: 1rem; line-height: 1.6;">Select the features you want included in your package at no extra cost:</p>
          
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px;">
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="responsive_design" {{ old('selected_features') && in_array('responsive_design', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-mobile-alt feature-icon"></i>
              <span>Responsive Design</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="seo_optimization" {{ old('selected_features') && in_array('seo_optimization', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-search feature-icon"></i>
              <span>SEO Optimization</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="ssl_certificate" {{ old('selected_features') && in_array('ssl_certificate', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-lock feature-icon"></i>
              <span>SSL Certificate</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="domain_registration" {{ old('selected_features') && in_array('domain_registration', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-globe feature-icon"></i>
              <span>Domain Registration (1 Year)</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="hosting_setup" {{ old('selected_features') && in_array('hosting_setup', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-server feature-icon"></i>
              <span>Hosting Setup</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="mobile_money_integration" {{ old('selected_features') && in_array('mobile_money_integration', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-mobile-alt feature-icon"></i>
              <span>M-Pesa/TigoPesa Integration</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="analytics_setup" {{ old('selected_features') && in_array('analytics_setup', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-chart-line feature-icon"></i>
              <span>Google Analytics Setup</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="social_media_integration" {{ old('selected_features') && in_array('social_media_integration', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-share-alt feature-icon"></i>
              <span>Social Media Integration</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="email_setup" {{ old('selected_features') && in_array('email_setup', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-envelope feature-icon"></i>
              <span>Professional Email Setup</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="backup_system" {{ old('selected_features') && in_array('backup_system', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-hdd feature-icon"></i>
              <span>Automated Backup System</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="maintenance_support" {{ old('selected_features') && in_array('maintenance_support', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-tools feature-icon"></i>
              <span>3 Months Maintenance</span>
            </label>
            <label class="feature-item">
              <input type="checkbox" name="selected_features[]" value="training" {{ old('selected_features') && in_array('training', old('selected_features')) ? 'checked' : '' }}>
              <i class="fas fa-graduation-cap feature-icon"></i>
              <span>Client Training</span>
            </label>
          </div>

          <div class="info-card" style="margin-top: 30px;">
            <h4 style="margin: 0 0 12px 0; color: var(--accent); font-size: 1.1rem; display: flex; align-items: center;">
              <i class="fas fa-lightbulb" style="margin-right: 10px;"></i> Tip
            </h4>
            <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.6;">
              These features are included in your package at no extra cost. Select all that apply to your project needs.
            </p>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div style="display: flex; gap: 15px; margin-top: 30px;">
          <button type="button" onclick="history.back()" class="btn-secondary" style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
          </button>
          <button type="submit" class="btn-primary" style="flex: 2; display: flex; align-items: center; justify-content: center;">
            Continue to Add-ons <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
