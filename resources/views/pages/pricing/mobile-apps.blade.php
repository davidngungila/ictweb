@extends('layouts.app')

@section('title', 'Mobile App Development Pricing Packages in Tanzania')

@section('meta_tags')
  <meta name="description" content="Professional mobile app development pricing packages in Tanzania. Android and iOS apps for businesses, booking systems, and custom applications.">
  <meta name="keywords" content="mobile app pricing Tanzania, app development cost Tanzania, Android iOS app packages">
  <meta property="og:title" content="Mobile App Development Pricing Packages in Tanzania">
  <meta property="og:description" content="Professional mobile app development pricing packages in Tanzania. Android and iOS apps for businesses, booking systems, and custom applications.">
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
        Mobile Apps
      </div>
      <h1 class="hero-title">
        Mobile App <span>Pricing</span>
      </h1>
      <p class="hero-subtitle">
        Professional mobile app development for Android and iOS. From informational apps to full-featured booking systems.
      </p>
    </div>
  </div>
</section>

<!-- PRICING PACKAGES -->
<section class="tour-packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-mobile-alt"></i> Mobile Apps</div>
      <h2 class="section-title">Mobile App <span>Pricing Packages</span></h2>
      <p class="section-sub">All apps include App Store and Google Play submission, analytics dashboard, and 3 months of support.</p>
    </div>
    
    <div class="pricing-grid">
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">App Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Android + iOS informational apps</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 6M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Flutter / React Native (Android + iOS)</li>
          <li><i class="fas fa-check"></i> Information, gallery, maps, contact</li>
          <li><i class="fas fa-check"></i> SMS push notifications</li>
          <li><i class="fas fa-check"></i> App Store & Google Play submission</li>
          <li><i class="fas fa-check"></i> Analytics dashboard</li>
          <li><i class="fas fa-check"></i> Delivered in 4–6 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">App Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Full-featured booking & payments</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">6M</span>
          <span class="pricing-period">– 12M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> All Basic features included</li>
          <li><i class="fas fa-check"></i> User accounts & profiles</li>
          <li><i class="fas fa-check"></i> Booking & reservation system</li>
          <li><i class="fas fa-check"></i> Mobile money payment integration</li>
          <li><i class="fas fa-check"></i> Push notifications</li>
          <li><i class="fas fa-check"></i> Delivered in 6–10 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">App Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Custom multi-role platforms</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">12M</span>
          <span class="pricing-period">– 25M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-role: admin, driver, customer</li>
          <li><i class="fas fa-check"></i> Real-time GPS tracking</li>
          <li><i class="fas fa-check"></i> API integrations (3rd party)</li>
          <li><i class="fas fa-check"></i> Custom backend & dashboard</li>
          <li><i class="fas fa-check"></i> Full white-label branding</li>
          <li><i class="fas fa-check"></i> Delivered in 10–14 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
    
    <!-- FEATURES SECTION -->
    <div style="margin-top: 60px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.8rem;">What's Included in Our Mobile Apps</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📱</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Cross-Platform</h4>
          <p style="color: #666;">Flutter and React Native for both Android and iOS from a single codebase.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔔</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Push Notifications</h4>
          <p style="color: #666;">SMS and in-app push notifications to engage users with updates and offers.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">💳</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Payment Integration</h4>
          <p style="color: #666;">M-Pesa, TigoPesa, AzamPesa, and card payment integration for in-app purchases.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📍</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">GPS Tracking</h4>
          <p style="color: #666;">Real-time location tracking for delivery, taxi, and service apps.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">👤</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">User Accounts</h4>
          <p style="color: #666;">Secure user registration, profiles, and authentication systems.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📊</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Analytics Dashboard</h4>
          <p style="color: #666;">Track app usage, user engagement, and performance with detailed analytics.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need a <span>Custom Mobile App</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20mobile%20app%20development%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
