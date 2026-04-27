@extends('layouts.app')

@section('title', 'Network Installation Pricing Packages in Tanzania')

@section('meta_tags')
  <meta name="description" content="Professional network installation pricing packages in Tanzania. WiFi setup, office networking, and enterprise network solutions.">
  <meta name="keywords" content="network installation pricing Tanzania, WiFi setup cost Tanzania, office network packages">
  <meta property="og:title" content="Network Installation Pricing Packages in Tanzania">
  <meta property="og:description" content="Professional network installation pricing packages in Tanzania. WiFi setup, office networking, and enterprise network solutions.">
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
        Networking
      </div>
      <h1 class="hero-title">
        Network Installation <span>Pricing</span>
      </h1>
      <p class="hero-subtitle">
        Professional network installation services including WiFi setup, office networking, and enterprise network solutions.
      </p>
    </div>
  </div>
</section>

<!-- PRICING PACKAGES -->
<section class="tour-packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-network-wired"></i> Networking</div>
      <h2 class="section-title">Network Installation <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include site survey, security configuration, and documentation.</p>
    </div>
    
    <div class="pricing-grid">
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Home / Small Office</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Single router / access point</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">300K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Site survey & coverage planning</li>
          <li><i class="fas fa-check"></i> Single router / AP installation</li>
          <li><i class="fas fa-check"></i> Basic security configuration</li>
          <li><i class="fas fa-check"></i> Performance testing report</li>
          <li><i class="fas fa-check"></i> Network credentials documentation</li>
          <li><i class="fas fa-check"></i> Delivered in 1–3 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Best Value</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Small Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Multi-AP with security</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">700K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi access-point deployment</li>
          <li><i class="fas fa-check"></i> Separate guest Wi-Fi network</li>
          <li><i class="fas fa-check"></i> Firewall & access control</li>
          <li><i class="fas fa-check"></i> Bandwidth management</li>
          <li><i class="fas fa-check"></i> SMS maintenance alerts</li>
          <li><i class="fas fa-check"></i> Delivered in 3–5 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Hotel / Lodge / Office</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Multi-location enterprise grade</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.5M</span>
          <span class="pricing-period">– 4M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-location deployment</li>
          <li><i class="fas fa-check"></i> VLANs & enterprise security</li>
          <li><i class="fas fa-check"></i> 24/7 network monitoring</li>
          <li><i class="fas fa-check"></i> SLA up to 99.9% uptime</li>
          <li><i class="fas fa-check"></i> Optional CCTV integration</li>
          <li><i class="fas fa-check"></i> Delivered in 5–10 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
    
    <!-- FEATURES SECTION -->
    <div style="margin-top: 60px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.8rem;">What's Included in Our Network Installation</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📶</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Site Survey</h4>
          <p style="color: #666;">Professional site survey to determine optimal access point placement and coverage.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔒</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Security Setup</h4>
          <p style="color: #666;">Firewall configuration, access control, and secure network credentials.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📊</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Performance Testing</h4>
          <p style="color: #666;">Comprehensive speed and coverage testing to ensure optimal performance.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">👥</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Guest Network</h4>
          <p style="color: #666;">Separate guest WiFi network for visitors and customers.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">⚡</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Bandwidth Management</h4>
          <p style="color: #666;">Quality of Service (QoS) to prioritize critical applications.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📋</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Documentation</h4>
          <p style="color: #666;">Complete network documentation including diagrams and credentials.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need <span>Network Installation</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20network%20installation%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('package.selection') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
