@extends('layouts.app')

@section('title', 'ICT Service Packages & Pricing in Tanzania')

@section('meta_tags')
  <meta name="description" content="Explore our affordable ICT service packages in Tanzania including web development, apps, networks and IT support solutions.">
  <meta name="keywords" content="ICT pricing Tanzania, website cost Tanzania, IT service packages Tanzania, Jezdan Technology packages">
  <meta property="og:title" content="ICT Service Packages & Pricing in Tanzania">
  <meta property="og:description" content="Explore our affordable ICT service packages in Tanzania including web development, apps, networks and IT support solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
@endsection

@section('content')
<style>
  /* Progress Steps */
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
    background: #e0e0e0;
    z-index: 1;
  }
  .step {
    text-align: center;
    position: relative;
    z-index: 2;
    flex: 1;
  }
  .step-number {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: white;
    border: 2px solid #e0e0e0;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-weight: 600;
    color: #666;
    transition: all 0.3s;
  }
  .step.active .step-number {
    background: var(--accent);
    border-color: var(--accent);
    color: white;
  }
  .step.completed .step-number {
    background: #00c896;
    border-color: #00c896;
    color: white;
  }
  .step-label {
    font-size: 0.85rem;
    color: #666;
    font-weight: 500;
  }
  .step.active .step-label {
    color: var(--accent);
    font-weight: 600;
  }

  /* Summary Sidebar */
  .summary-sidebar {
    position: sticky;
    top: 100px;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  }
  .summary-title {
    font-size: 1.3rem;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f0f0f0;
  }
  .summary-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #f0f0f0;
  }
  .summary-item-name {
    font-weight: 500;
    color: #333;
  }
  .summary-item-price {
    font-weight: 600;
    color: var(--accent);
  }
  .summary-total {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 2px solid #f0f0f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.4rem;
    font-weight: 700;
  }
  .summary-total-amount {
    color: var(--accent);
  }
  .summary-advance {
    margin-top: 15px;
    padding: 15px;
    background: #f0f8ff;
    border-radius: 8px;
    font-size: 0.9rem;
  }
  .summary-advance strong {
    color: var(--accent);
  }

  /* Collapsible Sections */
  .collapsible-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: 15px 0;
    border-bottom: 1px solid #e0e0e0;
    transition: all 0.3s;
  }
  .collapsible-header:hover {
    color: var(--accent);
  }
  .collapsible-header h4 {
    margin: 0;
    font-size: 1.1rem;
  }
  .collapsible-icon {
    transition: transform 0.3s;
  }
  .collapsible-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
  }
  .collapsible-content.open {
    max-height: 2000px;
  }
  .collapsible-icon.rotated {
    transform: rotate(180deg);
  }

  /* Two Column Layout */
  .selection-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 30px;
  }
  @media (max-width: 1024px) {
    .selection-layout {
      grid-template-columns: 1fr;
    }
    .summary-sidebar {
      position: relative;
      top: 0;
      margin-bottom: 30px;
    }
  }

  /* Add-on Cards Hover */
  .addon-card:hover {
    border-color: var(--accent) !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  .addon-card.selected {
    border-color: var(--accent) !important;
    background: #f0f8ff;
  }
</style>

<!-- HERO -->
<section class="hero" style="min-height: 40vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Get Started
      </div>
      <h1 class="hero-title">
        Select Your <span>Package</span><br/>
        & Customize Features
      </h1>
      <p class="hero-subtitle">
        Choose the perfect package for your needs and select the features you want. We'll generate an invoice and you can pay 30% advance to get started.
      </p>
    </div>
  </div>
</section>

<!-- Progress Steps -->
<div style="background: white; padding: 20px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
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

<!-- PACKAGE SELECTION FORM -->
<section class="services" style="padding: 60px 0;">
  <div class="container">
    <div class="selection-layout">
      <!-- Left Column - Form Sections -->
      <div>
        <!-- Client Information -->
        <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <h3 style="margin-bottom: 20px; font-size: 1.3rem;">👤 Contact Information</h3>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div>
              <label style="display: block; margin-bottom: 8px; font-weight: 500;">Full Name *</label>
              <input type="text" name="client_name" required style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px;" placeholder="Enter your full name">
            </div>
            <div>
              <label style="display: block; margin-bottom: 8px; font-weight: 500;">Email Address *</label>
              <input type="email" name="client_email" required style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px;" placeholder="Enter your email">
            </div>
            <div>
              <label style="display: block; margin-bottom: 8px; font-weight: 500;">Phone Number *</label>
              <input type="tel" name="client_phone" required style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px;" placeholder="+255 XXX XXX XXX">
            </div>
          </div>
        </div>

        <!-- Service & Package Selection -->
        <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <h3 style="margin-bottom: 20px; font-size: 1.3rem;">🎯 Service & Package</h3>
          
          <!-- Service Selection -->
          <div style="margin-bottom: 30px;">
            <h4 style="margin-bottom: 15px; font-size: 1rem; color: #666;">Select Service</h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
              @foreach($services as $service)
              <label class="service-option" style="border: 2px solid #e0e0e0; border-radius: 12px; padding: 20px; cursor: pointer; transition: all 0.3s; display: block;">
                <input type="radio" name="service_id" value="{{ $service->id }}" required style="margin-right: 10px;" onchange="updateFeatures()">
                <div>
                  <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">
                    <i class="{{ $service->icon }}" style="color: var(--accent); margin-right: 8px;"></i>
                    {{ $service->name }}
                  </div>
                  <p style="color: #666; font-size: 0.9rem; margin: 0;">{{ $service->description }}</p>
                  <div style="margin-top: 10px; color: var(--accent); font-weight: 700;">
                    From TZS {{ number_format($service->base_price, 0) }}
                  </div>
                </div>
              </label>
              @endforeach
            </div>
          </div>

          <!-- Package Selection -->
          <div>
            <h4 style="margin-bottom: 15px; font-size: 1rem; color: #666;">Select Package</h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
              @foreach($packages as $package)
              <label class="package-option" style="border: 2px solid #e0e0e0; border-radius: 12px; padding: 20px; cursor: pointer; transition: all 0.3s; display: block; {{ $package->is_popular ? 'border-color: var(--accent); position: relative;' : '' }}">
                @if($package->is_popular)
                <span style="position: absolute; top: -10px; right: 15px; background: var(--accent); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">POPULAR</span>
                @endif
                <input type="radio" name="package_id" value="{{ $package->id }}" required style="margin-right: 10px;" onchange="updatePrice()">
                <div>
                  <div style="font-weight: 600; font-size: 1.2rem; margin-bottom: 8px;">{{ $package->name }}</div>
                  <p style="color: #666; font-size: 0.9rem; margin: 0;">{{ $package->description }}</p>
                  <div style="margin-top: 10px; color: var(--accent); font-weight: 700; font-size: 1.2rem;">
                    TZS {{ number_format($package->price, 0) }}
                  </div>
                  @if($package->duration)
                  <div style="margin-top: 5px; color: #888; font-size: 0.85rem;">{{ $package->duration }}</div>
                  @endif
                </div>
              </label>
              @endforeach
            </div>
          </div>
        </div>

        <!-- Features Selection (Collapsible) -->
        <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div class="collapsible-header" onclick="toggleCollapsible(this)">
            <h3 style="margin: 0; font-size: 1.3rem;">⚙️ Basic Features</h3>
            <i class="fas fa-chevron-down collapsible-icon"></i>
          </div>
          <div class="collapsible-content open">
            <div style="padding: 20px 0;">
              <p style="color: #666; margin-bottom: 20px;">Choose the features you want included in your package:</p>
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="responsive_design" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Responsive Design</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="seo_optimization" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>SEO Optimization</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="ssl_certificate" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>SSL Certificate</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="domain_registration" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Domain Registration (1 Year)</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="hosting_setup" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Hosting Setup</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="mobile_money_integration" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>M-Pesa/TigoPesa Integration</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="analytics_setup" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Google Analytics Setup</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="social_media_integration" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Social Media Integration</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="email_setup" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Professional Email Setup</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="backup_system" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Automated Backup System</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="maintenance_support" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>3 Months Maintenance</span>
                </label>
                <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
                  <input type="checkbox" name="selected_features[]" value="training" style="margin-right: 12px;" onchange="updateTotal()">
                  <span>Client Training</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Extra Add-On Services (Collapsible) -->
        <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div class="collapsible-header" onclick="toggleCollapsible(this)">
            <h3 style="margin: 0; font-size: 1.3rem;">🚀 Extra Add-On Services (Optional)</h3>
            <i class="fas fa-chevron-down collapsible-icon"></i>
          </div>
          <div class="collapsible-content">
            <div style="padding: 20px 0;">
              <p style="color: #666; margin-bottom: 25px;">Supercharge any package with these additional features tailored to your business needs:</p>

        <!-- Marketing & Growth -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">🚀 Marketing & Growth</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="travel_blog_5_posts" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Travel Blog + 5 Posts</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">High-quality content to boost SEO and attract visitors</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="advanced_seo" data-price="300000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Advanced SEO Package</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Deep keyword optimization, technical SEO, and ranking strategy</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 300,000 – 600,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="social_auto_posting" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Social Media Auto-Posting</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Automatically publish content to Facebook, Instagram, and more</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="email_marketing" data-price="200000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Email Marketing Setup</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Campaign setup, templates, and automation</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="advanced_analytics" data-price="100000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Analytics & Tracking Setup (Advanced)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Google Analytics, Facebook Pixel, and conversion tracking</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 100,000</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Automation & AI -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">🤖 Automation & AI</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="google_automation" data-price="100000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Google Services Automation</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Automate reports, invoices, dashboards, and workflows (Sheets, Docs, Slides, Drive)</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 100,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="ai_chatbot" data-price="250000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">AI Chatbot Integration</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Automated customer support and smart replies (Website + WhatsApp)</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 250,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="bulk_sms_system" data-price="200000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Bulk SMS System Setup</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Send SMS campaigns directly from your system (Admin Panel)</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="extra_sms_credits" data-price="50000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Extra SMS Credits (100 Pack)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Additional SMS bundles for campaigns and notifications</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 50,000</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Payments & Integrations -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">💳 Payments & Integrations</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="online_payment" data-price="200000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Online Payment Integration</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Integrate M-Pesa, Airtel Money, cards, and APIs like Snippe</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="api_integration" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">API Integration (Any System)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Connect your system with external services (SMS, CRM, payments)</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000 – 400,000</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Systems & Features -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">🖥️ Systems & Features</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="admin_dashboard" data-price="300000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Admin Dashboard System</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Manage users, reports, payments, and operations (Custom CMS)</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 300,000 – 700,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="booking_system" data-price="250000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Booking & Reservation System</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Online booking with calendar and notifications</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 250,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="ecommerce" data-price="350000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">E-commerce Store Setup</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Sell products/services with cart and checkout</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 350,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="tour_map_builder" data-price="250000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Custom Tour Map & Itinerary Builder</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Interactive travel/tour planning system</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 250,000</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Communication & Support -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">💬 Communication & Support</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="whatsapp_api" data-price="200000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">WhatsApp Business API Integration</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Automated messaging and customer engagement</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="live_chat" data-price="180000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Live Chat Support System</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Real-time website chat support</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 180,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="push_notifications" data-price="120000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Push Notifications (Web + Mobile)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Instant alerts for offers and updates</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 120,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="emergency_support" data-price="100000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Emergency 24/7 Support</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Priority technical support anytime</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 100,000/month</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Localization & Branding -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">🌍 Localization & Branding</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="multilanguage" data-price="300000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Multi-Language (DE / FR / IT)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Reach international customers</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 300,000 per language</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="logo_design" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Logo Design + Brand Kit</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Professional branding package</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="domain_email" data-price="80000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Domain + Professional Email Setup</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Custom business emails (e.g. info@yourdomain.com)</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 80,000</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Security & Performance -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">⚙️ Security, Performance & Infrastructure</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="speed_optimization" data-price="120000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Website Speed Optimization</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Improve performance and loading speed</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 120,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="security_hardening" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Security Hardening & Firewall Setup</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Protect against hacking and vulnerabilities</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="cloud_backup" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Cloud Backup & Disaster Recovery</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Automatic backups and restore solutions</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000/month</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="performance_report" data-price="80000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Monthly Performance Report</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Detailed insights on system performance</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 80,000/month</div>
              </div>
            </label>
          </div>
        </div>

        <!-- System Auditing -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">🔍 System Auditing (Premium)</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="system_audit" data-price="200000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">System Audit & Performance Review</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Full inspection: security, performance, code, APIs. Includes vulnerability check, payment & API audit, SEO review</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 200,000 – 500,000</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="monthly_monitoring" data-price="150000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Monthly System Monitoring & Audit</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Continuous monitoring, alerts, and optimization</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 150,000/month</div>
              </div>
            </label>
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="penetration_testing" data-price="400000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Penetration Testing (Advanced Security)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Simulated real-world attacks to test system security</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 400,000+</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Mobile & Advanced -->
        <div style="margin-bottom: 30px;">
          <h4 style="color: var(--accent); margin-bottom: 15px; font-size: 1.1rem;">📱 Mobile & Advanced</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
            <label class="addon-card" style="display: block; padding: 15px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
              <input type="checkbox" name="selected_addons[]" value="mobile_app_android" data-price="800000" style="margin-right: 10px;">
              <div>
                <div style="font-weight: 600;">Mobile App (Android – Basic)</div>
                <div style="font-size: 0.85rem; color: #666; margin: 5px 0;">Convert your system into a mobile app</div>
                <div style="color: var(--accent); font-weight: 700;">TZS 800,000+</div>
              </div>
            </label>
          </div>
        </div>
      </div>

      <!-- Additional Notes -->
      <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">📝 Additional Notes</h3>
        <textarea name="notes" rows="4" style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; resize: vertical;" placeholder="Any additional requirements or special requests..."></textarea>
      </div>

      <!-- Right Column - Summary Sidebar -->
      <div>
        <div class="summary-sidebar">
          <h3 class="summary-title">📋 Order Summary</h3>
          
          <div id="summary-content">
            <p style="color: #666; font-style: italic;">Select a service and package to see pricing details.</p>
          </div>

          <div class="summary-total">
            <span>Total:</span>
            <span class="summary-total-amount" id="total-amount">TZS 0</span>
          </div>

          <div class="summary-advance">
            <strong>30% Advance Required:</strong> TZS <span id="advance-amount">0</span>
          </div>

          <div style="margin-top: 20px;">
            <button type="submit" class="btn-primary" style="width: 100%; padding: 15px; font-size: 1.1rem; border-radius: 8px; border: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; cursor: pointer; transition: transform 0.2s;">
              <i class="fas fa-arrow-right"></i> Generate Invoice & Proceed to Payment
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</section>

<style>
.service-option:hover, .package-option:hover {
  border-color: var(--accent) !important;
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.service-option input:checked + div, .package-option input:checked + div {
  color: var(--accent);
}

input[type="checkbox"]:checked + span {
  color: var(--accent);
  font-weight: 600;
}

.addon-card:hover {
  border-color: var(--accent) !important;
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.addon-card input:checked + div {
  color: var(--accent);
}
</style>

<script>
// Collapsible sections
function toggleCollapsible(header) {
  const content = header.nextElementSibling;
  const icon = header.querySelector('.collapsible-icon');
  
  content.classList.toggle('open');
  icon.classList.toggle('rotated');
}

// Real-time price calculation
function updateTotal() {
  let total = 0;
  const summaryContent = document.getElementById('summary-content');
  let summaryHTML = '';
  
  // Get selected package
  const selectedPackage = document.querySelector('input[name="package_id"]:checked');
  if (selectedPackage) {
    const packageCard = selectedPackage.closest('.package-option');
    const packageName = packageCard.querySelector('div > div:first-child').textContent.trim();
    const packagePrice = parseInt(packageCard.querySelector('div > div:nth-child(3)').textContent.replace(/[^0-9]/g, ''));
    total += packagePrice;
    summaryHTML += `<div class="summary-item">
      <span class="summary-item-name">${packageName}</span>
      <span class="summary-item-price">TZS ${number_format(packagePrice)}</span>
    </div>`;
  }
  
  // Get selected addons
  document.querySelectorAll('input[name="selected_addons[]"]:checked').forEach(addon => {
    const addonCard = addon.closest('.addon-card');
    const addonName = addonCard.querySelector('div > div:first-child').textContent.trim();
    const addonPrice = parseInt(addonCard.querySelector('div > div:last-child').textContent.replace(/[^0-9]/g, ''));
    total += addonPrice;
    summaryHTML += `<div class="summary-item">
      <span class="summary-item-name">${addonName}</span>
      <span class="summary-item-price">TZS ${number_format(addonPrice)}</span>
    </div>`;
  });
  
  // Update summary
  if (summaryHTML) {
    summaryContent.innerHTML = summaryHTML;
  }
  
  // Update totals
  document.getElementById('total-amount').textContent = 'TZS ' + number_format(total);
  document.getElementById('advance-amount').textContent = number_format(Math.round(total * 0.3));
}

function number_format(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Initialize collapsible sections
document.querySelectorAll('.collapsible-content').forEach(content => {
  content.classList.remove('open');
});

// Add change event listeners
document.querySelectorAll('input[name="package_id"]').forEach(input => {
  input.addEventListener('change', updateTotal);
});

document.querySelectorAll('input[name="selected_addons[]"]').forEach(input => {
  input.addEventListener('change', function() {
    this.closest('.addon-card').classList.toggle('selected', this.checked);
    updateTotal();
  });
});

// Highlight selected options
document.querySelectorAll('.service-option input').forEach(input => {
  input.addEventListener('change', function() {
    document.querySelectorAll('.service-option').forEach(opt => opt.style.borderColor = '#e0e0e0');
    if (this.checked) {
      this.closest('.service-option').style.borderColor = 'var(--accent)';
    }
  });
});

document.querySelectorAll('.package-option input').forEach(input => {
  input.addEventListener('change', function() {
    document.querySelectorAll('.package-option').forEach(opt => opt.style.borderColor = '#e0e0e0');
    if (this.checked) {
      this.closest('.package-option').style.borderColor = 'var(--accent)';
    }
  });
});

// Update progress steps based on scroll
window.addEventListener('scroll', function() {
  const sections = document.querySelectorAll('.form-section');
  const steps = document.querySelectorAll('.step');
  
  sections.forEach((section, index) => {
    const rect = section.getBoundingClientRect();
    if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
      steps.forEach(step => step.classList.remove('active'));
      steps.forEach(step => step.classList.remove('completed'));
      
      for (let i = 0; i <= index; i++) {
        if (i < index) {
          steps[i].classList.add('completed');
        } else {
          steps[i].classList.add('active');
        }
      }
    }
  });
});
</script>
@endsection
