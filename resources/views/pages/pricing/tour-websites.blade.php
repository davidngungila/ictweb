@extends('layouts.app')

@section('title', 'Tour Website Pricing Packages in Tanzania')

@section('meta_tags')
  <meta name="description" content="Affordable tour website pricing packages in Tanzania. Perfect for safari operators, tour guides, and travel businesses.">
  <meta name="keywords" content="tour website pricing Tanzania, safari website cost, travel website packages Tanzania">
  <meta property="og:title" content="Tour Website Pricing Packages in Tanzania">
  <meta property="og:description" content="Affordable tour website pricing packages in Tanzania. Perfect for safari operators, tour guides, and travel businesses.">
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
        Tour Websites
      </div>
      <h1 class="hero-title">
        Tour Website <span>Pricing</span>
      </h1>
      <p class="hero-subtitle">
        Professional tour and safari websites with booking engines, payment integration, and tour management systems.
      </p>
    </div>
  </div>
</section>

<!-- PRICING PACKAGES -->
<section class="tour-packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-globe"></i> Tour Websites</div>
      <h2 class="section-title">Tour Website <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include a free domain + hosting for the first year (worth TZS 150,000), SSL certificate, and 1 month of free support.</p>
    </div>
    
    <div class="pricing-grid">
      <!-- STARTER -->
      <div class="pricing-card">
        <div class="pricing-tier">Starter</div>
        <div class="pricing-name">Tour Starter</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Best for solo guides & new startups</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">400K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 1–5 Pages (Home, About, Tours, Contact)</li>
          <li><i class="fas fa-check"></i> Basic tour listing with descriptions & pricing</li>
          <li><i class="fas fa-check"></i> Photo gallery (up to 20 photos)</li>
          <li><i class="fas fa-check"></i> WhatsApp & phone call-to-action booking</li>
          <li><i class="fas fa-check"></i> 50 SMS credits included</li>
          <li><i class="fas fa-check"></i> Basic Google Analytics</li>
          <li><i class="fas fa-check"></i> Free domain + hosting (1 year)</li>
          <li><i class="fas fa-check"></i> Delivered in 4–7 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- BUSINESS -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Business</div>
        <div class="pricing-name">Tour Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing safari operators</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">800K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 8–15 Pages with blog & testimonials</li>
          <li><i class="fas fa-check"></i> Calendar-based booking engine</li>
          <li><i class="fas fa-check"></i> M-Pesa, TigoPesa & AzamPesa payments</li>
          <li><i class="fas fa-check"></i> Safari package management panel</li>
          <li><i class="fas fa-check"></i> Video embedding (safari footage)</li>
          <li><i class="fas fa-check"></i> 200 SMS credits included</li>
          <li><i class="fas fa-check"></i> Advanced Analytics & conversion funnels</li>
          <li><i class="fas fa-check"></i> Delivered in 7–12 days</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Tour Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Kilimanjaro specialists & large operators</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.8M</span>
          <span class="pricing-period">– 3.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Unlimited pages — fully custom</li>
          <li><i class="fas fa-check"></i> Full tour management admin panel</li>
          <li><i class="fas fa-check"></i> Multi-currency & multi-language (EN/DE/FR)</li>
          <li><i class="fas fa-check"></i> Customer CRM with trip history</li>
          <li><i class="fas fa-check"></i> Auto-generated invoices, itineraries & vouchers</li>
          <li><i class="fas fa-check"></i> Email marketing newsletter system</li>
          <li><i class="fas fa-check"></i> 500 SMS credits + bulk SMS campaigns</li>
          <li><i class="fas fa-check"></i> 6 months priority support</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
    
    <!-- FEATURES SECTION -->
    <div style="margin-top: 60px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.8rem;">What's Included in Our Tour Websites</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📅</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Booking Engine</h4>
          <p style="color: #666;">Calendar-based booking system with availability management and automated confirmations.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">💳</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Mobile Payments</h4>
          <p style="color: #666;">M-Pesa, TigoPesa, AzamPesa, and card payment integration for seamless transactions.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">🗺️</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Tour Maps</h4>
          <p style="color: #666;">Interactive maps showing tour routes, pick-up locations, and safari destinations.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📸</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Photo Galleries</h4>
          <p style="color: #666;">Beautiful photo galleries showcasing your tours, wildlife, and destinations.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">💬</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">WhatsApp Integration</h4>
          <p style="color: #666;">Direct WhatsApp chat for instant inquiries and booking confirmations.</p>
        </div>
        <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <div style="font-size: 2.5rem; margin-bottom: 20px;">📊</div>
          <h4 style="margin-bottom: 15px; font-size: 1.2rem;">Analytics Dashboard</h4>
          <p style="color: #666;">Track visitors, bookings, and revenue with detailed analytics and reports.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need a <span>Custom Tour Website</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20tour%20website%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
