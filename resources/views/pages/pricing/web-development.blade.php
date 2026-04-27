@extends('layouts.app')

@section('title', 'Web Development Pricing Packages in Tanzania')

@section('meta_tags')
  <meta name="description" content="Professional web development pricing packages in Tanzania. Affordable website solutions for businesses, e-commerce, and custom projects.">
  <meta name="keywords" content="web development pricing Tanzania, website cost Tanzania, custom web development packages">
  <meta property="og:title" content="Web Development Pricing Packages in Tanzania">
  <meta property="og:description" content="Professional web development pricing packages in Tanzania. Affordable website solutions for businesses, e-commerce, and custom projects.">
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
        Web Development
      </div>
      <h1 class="hero-title">
        Web Development <span>Pricing</span>
      </h1>
      <p class="hero-subtitle">
        Professional website development services including business websites, e-commerce stores, and custom web applications.
      </p>
    </div>
  </div>
</section>

<!-- PRICING PACKAGES -->
<section class="tour-packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-laptop-code"></i> Web Development</div>
      <h2 class="section-title">Web Development <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include a free domain + hosting for the first year (worth TZS 150,000), SSL certificate, and 1 month of free support.</p>
    </div>
    
    <div class="pricing-grid">
      <!-- STARTER -->
      <div class="pricing-card">
        <div class="pricing-tier">Starter</div>
        <div class="pricing-name">Web Starter</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Individuals & small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">400K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 1–5 pages, mobile-responsive</li>
          <li><i class="fas fa-check"></i> Contact form with spam protection</li>
          <li><i class="fas fa-check"></i> WhatsApp button integration</li>
          <li><i class="fas fa-check"></i> Social media links</li>
          <li><i class="fas fa-check"></i> Google Maps location</li>
          <li><i class="fas fa-check"></i> Free domain + hosting (1 year)</li>
          <li><i class="fas fa-check"></i> Delivered in 4–7 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- BUSINESS -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Business</div>
        <div class="pricing-name">Web Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing companies</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">800K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 8–15 pages with full CMS</li>
          <li><i class="fas fa-check"></i> Blog with SEO-rich content</li>
          <li><i class="fas fa-check"></i> Advanced analytics dashboard</li>
          <li><i class="fas fa-check"></i> Professional email accounts</li>
          <li><i class="fas fa-check"></i> SSL + full security setup</li>
          <li><i class="fas fa-check"></i> Delivered in 7–12 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- E-COMMERCE -->
      <div class="pricing-card">
        <div class="pricing-tier">E-Commerce</div>
        <div class="pricing-name">Online Store</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Selling online in Tanzania</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.5M</span>
          <span class="pricing-period">– 2.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 10–20 pages with product catalogue</li>
          <li><i class="fas fa-check"></i> Shopping cart & checkout</li>
          <li><i class="fas fa-check"></i> M-Pesa, TigoPesa & AzamPesa</li>
          <li><i class="fas fa-check"></i> Order management dashboard</li>
          <li><i class="fas fa-check"></i> SMS order confirmations</li>
          <li><i class="fas fa-check"></i> Delivered in 10–15 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
    
    <!-- FEATURES SECTION -->
    <div style="margin-top: 60px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.8rem;">What's Included in Our Web Development</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📱</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Mobile Responsive</h4>
          <p style="color: #666;">Websites that look great on all devices - desktop, tablet, and mobile.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔒</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">SSL Security</h4>
          <p style="color: #666;">Free SSL certificate for secure HTTPS connections and customer trust.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">⚡</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Fast Loading</h4>
          <p style="color: #666;">Optimized for speed with quick load times for better user experience and SEO.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🔍</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">SEO Optimized</h4>
          <p style="color: #666;">Built with SEO best practices to help your website rank higher on Google.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🛠️</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Easy CMS</h4>
          <p style="color: #666;">Content management system that lets you easily update your website content.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📊</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Analytics</h4>
          <p style="color: #666;">Google Analytics integration to track visitors and measure performance.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need a <span>Custom Website</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20web%20development%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
