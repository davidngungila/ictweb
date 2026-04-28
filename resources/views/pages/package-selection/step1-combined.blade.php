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
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s;
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
    margin-bottom: 5px;
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
    
    <form action="{{ route('package.selection.step1.process') }}" method="POST">
      @csrf
      
      <div style="max-width: 950px; margin: 0 auto;">
        
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
              <input type="text" name="client_phone" class="form-input" value="{{ old('client_phone') }}" placeholder="Enter your phone number" required>
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
            <label class="service-card {{ old('service_id') == 1 ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="1" {{ old('service_id') == 1 ? 'checked' : '' }} required>
              <div class="service-icon"><i class="fas fa-code"></i></div>
              <div class="service-name">Web Development</div>
              <div class="service-desc">Custom websites for all businesses</div>
            </label>
            <label class="service-card {{ old('service_id') == 2 ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="2" {{ old('service_id') == 2 ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
              <div class="service-name">Mobile App Development</div>
              <div class="service-desc">Cross-platform Android & iOS apps</div>
            </label>
            <label class="service-card {{ old('service_id') == 3 ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="3" {{ old('service_id') == 3 ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-network-wired"></i></div>
              <div class="service-name">Network Installation</div>
              <div class="service-desc">Professional network infrastructure</div>
            </label>
            <label class="service-card {{ old('service_id') == 4 ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="4" {{ old('service_id') == 4 ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
              <div class="service-name">Cybersecurity</div>
              <div class="service-desc">Comprehensive security solutions</div>
            </label>
            <label class="service-card {{ old('service_id') == 5 ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="5" {{ old('service_id') == 5 ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-screwdriver-wrench"></i></div>
              <div class="service-name">IT Support</div>
              <div class="service-desc">Reliable ongoing IT support</div>
            </label>
            <label class="service-card {{ old('service_id') == 6 ? 'selected' : '' }}">
              <input type="radio" name="service_id" value="6" {{ old('service_id') == 6 ? 'checked' : '' }}>
              <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
              <div class="service-name">ICT Consultancy</div>
              <div class="service-desc">Strategic digital transformation guidance</div>
            </label>
          </div>
        </div>

        <!-- Package Selection -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-box"></i> Select Package *
          </h3>
          <div class="service-grid">
            <label class="package-card {{ old('package_id') == 1 ? 'selected' : '' }}">
              <input type="radio" name="package_id" value="1" {{ old('package_id') == 1 ? 'checked' : '' }} required>
              <div class="package-name">Starter Package</div>
              <div class="package-price">TZS 400,000</div>
              <div class="package-desc">Perfect for individuals and small businesses</div>
            </label>
            <label class="package-card popular {{ old('package_id') == 2 ? 'selected' : '' }}">
              <input type="radio" name="package_id" value="2" {{ old('package_id') == 2 ? 'checked' : '' }}>
              <div class="package-name">Business Package</div>
              <div class="package-price">TZS 800,000</div>
              <div class="package-desc">Ideal for growing companies</div>
            </label>
            <label class="package-card {{ old('package_id') == 3 ? 'selected' : '' }}">
              <input type="radio" name="package_id" value="3" {{ old('package_id') == 3 ? 'checked' : '' }}>
              <div class="package-name">Enterprise Package</div>
              <div class="package-price">TZS 1,500,000</div>
              <div class="package-desc">Full-featured solution for large organizations</div>
            </label>
          </div>
        </div>

        <!-- Add-ons -->
        <div class="form-section">
          <h3 class="section-title">
            <i class="fas fa-rocket"></i> Add-ons (Optional)
          </h3>
          <div class="addon-grid">
            <label class="addon-card {{ in_array('travel_blog_5_posts', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="travel_blog_5_posts" {{ in_array('travel_blog_5_posts', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">Travel Blog + 5 Posts</div>
              <div class="addon-price">TZS 150,000</div>
            </label>
            <label class="addon-card {{ in_array('advanced_seo', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="advanced_seo" {{ in_array('advanced_seo', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">Advanced SEO Package</div>
              <div class="addon-price">TZS 300,000</div>
            </label>
            <label class="addon-card {{ in_array('social_auto_posting', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="social_auto_posting" {{ in_array('social_auto_posting', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">Social Media Auto-Posting</div>
              <div class="addon-price">TZS 150,000</div>
            </label>
            <label class="addon-card {{ in_array('email_marketing', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="email_marketing" {{ in_array('email_marketing', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">Email Marketing Setup</div>
              <div class="addon-price">TZS 200,000</div>
            </label>
            <label class="addon-card {{ in_array('online_payment', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="online_payment" {{ in_array('online_payment', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">Online Payment Integration</div>
              <div class="addon-price">TZS 200,000</div>
            </label>
            <label class="addon-card {{ in_array('ai_chatbot', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="ai_chatbot" {{ in_array('ai_chatbot', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">AI Chatbot Integration</div>
              <div class="addon-price">TZS 250,000</div>
            </label>
            <label class="addon-card {{ in_array('admin_dashboard', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="admin_dashboard" {{ in_array('admin_dashboard', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">Admin Dashboard System</div>
              <div class="addon-price">TZS 300,000</div>
            </label>
            <label class="addon-card {{ in_array('ecommerce', old('selected_addons', [])) ? 'selected' : '' }}">
              <input type="checkbox" name="selected_addons[]" value="ecommerce" {{ in_array('ecommerce', old('selected_addons', [])) ? 'checked' : '' }}>
              <div class="addon-name">E-commerce Store Setup</div>
              <div class="addon-price">TZS 350,000</div>
            </label>
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
          <button type="submit" class="btn-primary">
            <i class="fas fa-arrow-right" style="margin-right: 10px;"></i> Continue to Review
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
