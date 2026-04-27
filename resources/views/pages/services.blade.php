@extends('layouts.app')

@section('title', 'ICT Services in Tanzania | Web, Apps, Network & IT Solutions')

@section('meta_tags')
  <meta name="description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta name="keywords" content="ICT services Tanzania, web development Tanzania, IT solutions Dar es Salaam, technology services Tanzania">
  <meta property="og:title" content="ICT Services in Tanzania">
  <meta property="og:description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-N2F56W4HPN');
  </script>
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 60vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px;">
      <div class="hero-badge">
        <span class="dot"></span>
        What We Offer
      </div>
      <h1 class="hero-title">
        Comprehensive <span>ICT Services</span><br/>
        Built for East Africa
      </h1>
      <p class="hero-subtitle">
        We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.
      </p>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust-strip">
  <div class="trust-strip-inner">
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-mobile-alt"></i> Online Payment Integrated</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fab fa-whatsapp"></i> WhatsApp Business Support</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-globe-africa"></i> Serving All Tanzania</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-headset"></i> 24/7 Technical Support</div>
    <div class="trust-divider"></div>
  </div>
</div>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-layer-group"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>ICT Services</span><br/>Built for East Africa</h2>
      <p class="section-sub">We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.</p>
    </div>
    <div class="services-grid">
      <div class="service-card" id="web-development">
        <div class="service-icon"><i class="fas fa-code"></i></div>
        <h3>Web Development</h3>
        <p>Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS, product management, and integrated mobile money payments.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 400,000</span>
        <a href="{{ route('services.web-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="mobile-apps">
        <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
        <h3>Mobile App Development</h3>
        <p>Cross-platform Android & iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 3,000,000</span>
        <a href="{{ route('services.mobile-app-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="networking">
        <div class="service-icon"><i class="fas fa-network-wired"></i></div>
        <h3>Network Installation</h3>
        <p>Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, VLANs, guest Wi-Fi, security configuration, and performance optimisation.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.network-installation') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="cybersecurity">
        <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
        <h3>Cybersecurity</h3>
        <p>Protect your business with comprehensive vulnerability assessments, 24/7 monitoring, penetration testing, firewall configuration, and TCRA & GDPR compliance support.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.cybersecurity') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="it-support">
        <div class="service-icon"><i class="fas fa-screwdriver-wrench"></i></div>
        <h3>IT Support</h3>
        <p>Reliable ongoing IT support from remote troubleshooting to on-site 24/7 enterprise service. Monthly retainer plans with guaranteed SLAs, dedicated account managers, and SMS ticket updates.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 150,000/mo</span>
        <a href="{{ route('services.it-support') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="consultancy">
        <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
        <h3>ICT Consultancy</h3>
        <p>Strategic digital transformation guidance. We audit your existing infrastructure, build technology roadmaps, manage vendors, and provide ongoing CTO-on-demand advisory services.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 500,000</span>
        <a href="{{ route('services.ict-consultancy') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-camera"></i></div>
        <h3>CCTV &amp; Security Systems</h3>
        <p>Complete CCTV installation integrated with your network infrastructure. Ideal for hotels, offices, lodges, and residential properties. Remote monitoring and cloud storage included.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 2,000,000</span>
        <a href="{{ route('contact') }}" class="service-link">Get Custom Quote <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to <span>Get Started</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection

@section('meta_tags')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-N2F56W4HPN');
    </script>
@endsection
