@extends('layouts.app')

@section('title', 'Cybersecurity Services Pricing Packages in Tanzania')

@section('meta_tags')
  <meta name="description" content="Professional cybersecurity services pricing packages in Tanzania. Security audits, penetration testing, and ongoing protection.">
  <meta name="keywords" content="cybersecurity pricing Tanzania, security audit cost Tanzania, penetration testing packages">
  <meta property="og:title" content="Cybersecurity Services Pricing Packages in Tanzania">
  <meta property="og:description" content="Professional cybersecurity services pricing packages in Tanzania. Security audits, penetration testing, and ongoing protection.">
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
        Cybersecurity
      </div>
      <h1 class="hero-title">
        Cybersecurity <span>Pricing</span>
      </h1>
      <p class="hero-subtitle">
        Professional cybersecurity services including security audits, penetration testing, and ongoing protection.
      </p>
    </div>
  </div>
</section>

<!-- PRICING PACKAGES -->
<section class="tour-packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-shield-alt"></i> Cybersecurity</div>
      <h2 class="section-title">Cybersecurity <span>Pricing Packages</span></h2>
      <p class="section-sub">Protect your business from cyber threats with comprehensive security solutions.</p>
    </div>
    
    <div class="pricing-grid">
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Basic Protection</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">One-off security setup</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">300K</span>
          <span class="pricing-period">– 600K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full vulnerability scan</li>
          <li><i class="fas fa-check"></i> Malware detection & removal</li>
          <li><i class="fas fa-check"></i> Firewall configuration</li>
          <li><i class="fas fa-check"></i> SMS threat alerts setup</li>
          <li><i class="fas fa-check"></i> Security report delivered</li>
          <li><i class="fas fa-check"></i> Completed in 2–5 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Recommended</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Monthly Retainer</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Ongoing business protection</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">600K</span>
          <span class="pricing-period">– 1.2M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 24/7 security monitoring</li>
          <li><i class="fas fa-check"></i> Weekly vulnerability scans</li>
          <li><i class="fas fa-check"></i> Incident response team</li>
          <li><i class="fas fa-check"></i> Email security protection</li>
          <li><i class="fas fa-check"></i> Analytics security dashboard</li>
          <li><i class="fas fa-check"></i> Monthly security reports</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">SOC & Compliance</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Full compliance package</p>
        <div class="pricing-price">
          <span class="pricing-currency">Custom</span>
          <span class="pricing-amount">Pricing</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full Security Operations Center</li>
          <li><i class="fas fa-check"></i> Penetration testing</li>
          <li><i class="fas fa-check"></i> ISO 27001, TCRA & GDPR compliance</li>
          <li><i class="fas fa-check"></i> Custom security reporting</li>
          <li><i class="fas fa-check"></i> Dedicated security analyst</li>
          <li><i class="fas fa-check"></i> Ongoing retainer</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Request Quote</a>
      </div>
    </div>
    
    <!-- FEATURES SECTION -->
    <div style="margin-top: 60px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.8rem;">What's Included in Our Cybersecurity Services</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔍</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Vulnerability Scanning</h4>
          <p style="color: #666;">Comprehensive scans to identify security weaknesses and potential entry points.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🧪</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Penetration Testing</h4>
          <p style="color: #666;">Simulated attacks to test your defenses and identify vulnerabilities.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📊</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Security Monitoring</h4>
          <p style="color: #666;">24/7 monitoring to detect and respond to threats in real-time.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📧</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Email Security</h4>
          <p style="color: #666;">Protection against phishing, spam, and email-based attacks.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔒</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Firewall Setup</h4>
          <p style="color: #666;">Configure and manage firewalls to protect your network from unauthorized access.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📋</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Compliance</h4>
          <p style="color: #666;">ISO 27001, TCRA, and GDPR compliance assistance and documentation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need <span>Cybersecurity Protection</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20cybersecurity%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('package.selection') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
