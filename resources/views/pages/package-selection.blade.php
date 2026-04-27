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
<!-- HERO -->
<section class="hero" style="min-height: 50vh;">
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

<!-- PACKAGE SELECTION FORM -->
<section class="services" style="padding: 80px 0;">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-cube"></i> Customize Your Package</div>
      <h2 class="section-title">Select <span>Services & Features</span></h2>
    </div>

    <form action="{{ route('package.order.process') }}" method="POST" id="packageForm">
      @csrf
      
      <!-- Client Information -->
      <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Contact Information</h3>
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

      <!-- Service Selection -->
      <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Select Service</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
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
      <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Select Package</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
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

      <!-- Features Selection -->
      <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Select Features</h3>
        <p style="color: #666; margin-bottom: 20px;">Choose the features you want included in your package:</p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="responsive_design" style="margin-right: 12px;">
            <span>Responsive Design</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="seo_optimization" style="margin-right: 12px;">
            <span>SEO Optimization</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="ssl_certificate" style="margin-right: 12px;">
            <span>SSL Certificate</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="domain_registration" style="margin-right: 12px;">
            <span>Domain Registration (1 Year)</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="hosting_setup" style="margin-right: 12px;">
            <span>Hosting Setup</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="mobile_money_integration" style="margin-right: 12px;">
            <span>M-Pesa/TigoPesa Integration</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="analytics_setup" style="margin-right: 12px;">
            <span>Google Analytics Setup</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="social_media_integration" style="margin-right: 12px;">
            <span>Social Media Integration</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="email_setup" style="margin-right: 12px;">
            <span>Professional Email Setup</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="backup_system" style="margin-right: 12px;">
            <span>Automated Backup System</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="maintenance_support" style="margin-right: 12px;">
            <span>3 Months Maintenance</span>
          </label>
          <label style="display: flex; align-items: center; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; cursor: pointer;">
            <input type="checkbox" name="selected_features[]" value="training" style="margin-right: 12px;">
            <span>Client Training</span>
          </label>
        </div>
      </div>

      <!-- Extra Add-On Services -->
      <div class="form-section" style="background: white; padding: 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">🚀 Extra Add-On Services (Optional)</h3>
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
        <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Additional Notes</h3>
        <textarea name="notes" rows="4" style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; resize: vertical;" placeholder="Any additional requirements or special requests..."></textarea>
      </div>

      <!-- Submit Button -->
      <div style="text-align: center;">
        <button type="submit" class="btn-primary" style="padding: 15px 50px; font-size: 1.1rem; border-radius: 50px; border: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; cursor: pointer; transition: transform 0.2s;">
          <i class="fas fa-arrow-right"></i> Generate Invoice & Proceed to Payment
        </button>
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
function updatePrice() {
  // Add any dynamic price calculation logic here
}

function updateFeatures() {
  // Add any dynamic feature updates based on service selection
}

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
</script>
@endsection
