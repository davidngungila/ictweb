@extends('layouts.app')

@section('title', 'Step 4: Add-ons - Package Selection')

@section('meta_tags')
  <meta name="description" content="Add extra services and features to enhance your package.">
  <meta name="keywords" content="ICT add-ons, extra services Tanzania, Jezdan Technology">
  <meta property="og:title" content="Step 4: Add-ons">
  <meta property="og:description" content="Add extra services and features to enhance your package.">
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
  
  .addons-card {
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
  
  .addon-item {
    display: block;
    padding: 22px;
    border: 2px solid #e8e8e8;
    border-radius: 14px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: white;
    position: relative;
    overflow: hidden;
  }
  
  .addon-item::before {
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
  
  .addon-item:hover {
    border-color: var(--accent) !important;
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
  }
  
  .addon-item:hover::before {
    opacity: 1;
  }
  
  .addon-item input {
    position: relative;
    z-index: 2;
    width: 24px;
    height: 24px;
    accent-color: var(--accent);
    cursor: pointer;
    margin-right: 15px;
  }
  
  .addon-item input:checked + div {
    color: var(--accent);
  }
  
  .addon-name {
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 6px;
    color: #333;
  }
  
  .addon-desc {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 10px;
    line-height: 1.5;
  }
  
  .addon-price {
    color: var(--accent);
    font-weight: 800;
    font-size: 1.2rem;
  }
  
  .category-section {
    margin-bottom: 35px;
  }
  
  .category-title {
    color: var(--accent);
    margin-bottom: 18px;
    font-size: 1.2rem;
    font-weight: 700;
    display: flex;
    align-items: center;
  }
  
  .category-title i {
    margin-right: 10px;
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
        Step 4 of 5
      </div>
      <h1 class="hero-title">
        Add <span>Add-ons</span>
      </h1>
      <p class="hero-subtitle">
        Supercharge your package with these optional extra services.
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
      <div class="step active" id="step4">
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

<!-- ADD-ONS FORM -->
<section class="services" style="padding: 70px 0;">
  <div class="container">
    <form action="{{ route('package.selection.step4.process') }}" method="POST">
      @csrf
      
      <!-- Preserve previous steps data -->
      <input type="hidden" name="client_name" value="{{ old('client_name') }}">
      <input type="hidden" name="client_email" value="{{ old('client_email') }}">
      <input type="hidden" name="client_phone" value="{{ old('client_phone') }}">
      <input type="hidden" name="company_name" value="{{ old('company_name') }}">
      <input type="hidden" name="service_id" value="{{ old('service_id') }}">
      <input type="hidden" name="package_id" value="{{ old('package_id') }}">
      @foreach(old('selected_features', []) as $feature)
      <input type="hidden" name="selected_features[]" value="{{ $feature }}">
      @endforeach

      <div style="max-width: 950px; margin: 0 auto;">
        <div class="addons-card">
          <h3 class="section-title">
            <i class="fas fa-rocket"></i> Extra Add-on Services (Optional)
          </h3>
          <p style="color: #666; margin-bottom: 30px; font-size: 1rem; line-height: 1.6;">Supercharge any package with these additional features tailored to your business needs:</p>

          <!-- Marketing & Growth -->
          <div class="category-section">
            <h4 class="category-title">
              <i class="fas fa-rocket"></i> Marketing & Growth
            </h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px;">
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="travel_blog_5_posts" data-price="150000" {{ old('selected_addons') && in_array('travel_blog_5_posts', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Travel Blog + 5 Posts</div>
                  <div class="addon-desc">High-quality content to boost SEO</div>
                  <div class="addon-price">TZS 150,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="advanced_seo" data-price="300000" {{ old('selected_addons') && in_array('advanced_seo', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Advanced SEO Package</div>
                  <div class="addon-desc">Deep keyword optimization & ranking strategy</div>
                  <div class="addon-price">TZS 300,000 – 600,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="social_auto_posting" data-price="150000" {{ old('selected_addons') && in_array('social_auto_posting', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Social Media Auto-Posting</div>
                  <div class="addon-desc">Auto-publish to Facebook, Instagram, etc.</div>
                  <div class="addon-price">TZS 150,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="email_marketing" data-price="200000" {{ old('selected_addons') && in_array('email_marketing', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Email Marketing Setup</div>
                  <div class="addon-desc">Campaign setup, templates, automation</div>
                  <div class="addon-price">TZS 200,000</div>
                </div>
              </label>
            </div>
          </div>

          <!-- Automation & AI -->
          <div class="category-section">
            <h4 class="category-title">
              <i class="fas fa-robot"></i> Automation & AI
            </h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px;">
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="google_automation" data-price="100000" {{ old('selected_addons') && in_array('google_automation', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Google Services Automation</div>
                  <div class="addon-desc">Automate reports, invoices, workflows</div>
                  <div class="addon-price">TZS 100,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="ai_chatbot" data-price="250000" {{ old('selected_addons') && in_array('ai_chatbot', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">AI Chatbot Integration</div>
                  <div class="addon-desc">Automated customer support (Website + WhatsApp)</div>
                  <div class="addon-price">TZS 250,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="bulk_sms_system" data-price="200000" {{ old('selected_addons') && in_array('bulk_sms_system', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Bulk SMS System Setup</div>
                  <div class="addon-desc">Send SMS campaigns from Admin Panel</div>
                  <div class="addon-price">TZS 200,000</div>
                </div>
              </label>
            </div>
          </div>

          <!-- Payments & Integrations -->
          <div class="category-section">
            <h4 class="category-title">
              <i class="fas fa-credit-card"></i> Payments & Integrations
            </h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px;">
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="online_payment" data-price="200000" {{ old('selected_addons') && in_array('online_payment', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Online Payment Integration</div>
                  <div class="addon-desc">M-Pesa, Airtel Money, cards, Snippe API</div>
                  <div class="addon-price">TZS 200,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="api_integration" data-price="150000" {{ old('selected_addons') && in_array('api_integration', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">API Integration (Any System)</div>
                  <div class="addon-desc">Connect with external services (SMS, CRM)</div>
                  <div class="addon-price">TZS 150,000 – 400,000</div>
                </div>
              </label>
            </div>
          </div>

          <!-- Systems & Features -->
          <div class="category-section">
            <h4 class="category-title">
              <i class="fas fa-desktop"></i> Systems & Features
            </h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px;">
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="admin_dashboard" data-price="300000" {{ old('selected_addons') && in_array('admin_dashboard', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Admin Dashboard System</div>
                  <div class="addon-desc">Manage users, reports, payments (Custom CMS)</div>
                  <div class="addon-price">TZS 300,000 – 700,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="booking_system" data-price="250000" {{ old('selected_addons') && in_array('booking_system', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">Booking & Reservation System</div>
                  <div class="addon-desc">Online booking with calendar & notifications</div>
                  <div class="addon-price">TZS 250,000</div>
                </div>
              </label>
              <label class="addon-item">
                <input type="checkbox" name="selected_addons[]" value="ecommerce" data-price="350000" {{ old('selected_addons') && in_array('ecommerce', old('selected_addons')) ? 'checked' : '' }}>
                <div style="position: relative; z-index: 2;">
                  <div class="addon-name">E-commerce Store Setup</div>
                  <div class="addon-desc">Sell products/services with cart & checkout</div>
                  <div class="addon-price">TZS 350,000</div>
                </div>
              </label>
            </div>
          </div>

          <div class="info-card" style="margin-top: 30px;">
            <h4 style="margin: 0 0 12px 0; color: var(--accent); font-size: 1.1rem; display: flex; align-items: center;">
              <i class="fas fa-lightbulb" style="margin-right: 10px;"></i> Optional
            </h4>
            <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.6;">
              These add-ons are optional and will be added to your total price. You can skip this step if you don't need any extra services.
            </p>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div style="display: flex; gap: 15px; margin-top: 30px;">
          <button type="button" onclick="history.back()" class="btn-secondary" style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
          </button>
          <button type="submit" class="btn-primary" style="flex: 2; display: flex; align-items: center; justify-content: center;">
            Continue to Review <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
