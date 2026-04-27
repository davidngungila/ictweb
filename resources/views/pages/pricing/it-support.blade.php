@extends('layouts.app')

@section('title', 'IT Support Services Pricing Packages in Tanzania')

@section('meta_tags')
  <meta name="description" content="Professional IT support services pricing packages in Tanzania. Remote and on-site IT support for businesses.">
  <meta name="keywords" content="IT support pricing Tanzania, managed IT services cost Tanzania, business IT support packages">
  <meta property="og:title" content="IT Support Services Pricing Packages in Tanzania">
  <meta property="og:description" content="Professional IT support services pricing packages in Tanzania. Remote and on-site IT support for businesses.">
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
        IT Support
      </div>
      <h1 class="hero-title">
        IT Support <span>Pricing</span>
      </h1>
      <p class="hero-subtitle">
        Professional IT support services including remote support, on-site assistance, and 24/7 enterprise support.
      </p>
    </div>
  </div>
</section>

<!-- PRICING PACKAGES -->
<section class="tour-packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-headset"></i> IT Support</div>
      <h2 class="section-title">IT Support <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include ticket management system, SMS notifications, and performance reporting.</p>
    </div>
    
    <div class="pricing-grid">
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Remote Support</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small teams, weekday coverage</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">150K</span>
          <span class="pricing-period">– 300K/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Remote support only</li>
          <li><i class="fas fa-check"></i> 9am–5pm, Mon–Fri</li>
          <li><i class="fas fa-check"></i> 2-hour response time</li>
          <li><i class="fas fa-check"></i> SMS ticket system</li>
          <li><i class="fas fa-check"></i> Up to 5 devices supported</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Remote + On-site</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">300K</span>
          <span class="pricing-period">– 600K/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Remote + on-site support</li>
          <li><i class="fas fa-check"></i> 8am–6pm, Mon–Sat</li>
          <li><i class="fas fa-check"></i> 1-hour response time</li>
          <li><i class="fas fa-check"></i> Monthly analytics reports</li>
          <li><i class="fas fa-check"></i> Unlimited devices</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">24/7 Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Hotels, NGOs, large offices</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">600K</span>
          <span class="pricing-period">– 1.2M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 24/7 on-site availability</li>
          <li><i class="fas fa-check"></i> 30-minute response time</li>
          <li><i class="fas fa-check"></i> 99.9% SLA uptime</li>
          <li><i class="fas fa-check"></i> Dedicated account manager</li>
          <li><i class="fas fa-check"></i> Priority escalation path</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
    
    <!-- FEATURES SECTION -->
    <div style="margin-top: 60px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.8rem;">What's Included in Our IT Support</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">💻</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Remote Support</h4>
          <p style="color: #666;">Quick remote assistance via TeamViewer, AnyDesk, or remote desktop.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🏢</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">On-Site Visits</h4>
          <p style="color: #666;">On-site technician visits for hardware issues and complex problems.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🎫</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Ticket System</h4>
          <p style="color: #666;">SMS and email ticket system for tracking and managing support requests.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📊</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Performance Reports</h4>
          <p style="color: #666;">Monthly reports on system performance, issues resolved, and uptime.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔧</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Hardware Maintenance</h4>
          <p style="color: #666;">Preventive maintenance and hardware troubleshooting for all devices.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📱</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Mobile Support</h4>
          <p style="color: #666;">Support for mobile devices, tablets, and smartphones.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need <span>IT Support</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20IT%20support%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('package.selection') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
