@extends('layouts.app')

@section('title', 'ICT Services in Tanzania | Web, Apps, Network & IT Solutions')

@section('meta_tags')
  <meta name="description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta name="keywords" content="ICT services Tanzania, web development Tanzania, IT solutions Dar es Salaam, technology services Tanzania">
  <meta property="og:title" content="ICT Services in Tanzania">
  <meta property="og:description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
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
<section class="hero" id="home" style="min-height: 46vh; text-align: center;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay" style="mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%); -webkit-mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%);"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <div style="max-width: 840px;">
      <div class="hero-badge">
        <span class="dot"></span>
        What We Offer
      </div>
      <h1 class="hero-title">
        Comprehensive <span>ICT Services</span><br/>
        Built for East Africa
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
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
@php
  $serviceOffers = [
    ['icon' => 'fa-globe', 'title' => 'Web Development', 'desc' => 'Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS, product management, and integrated mobile money payments.', 'link' => ['url' => route('services.web-development'), 'label' => 'Learn More']],
    ['icon' => 'fa-mobile-alt', 'title' => 'Mobile App Development', 'desc' => 'Cross-platform Android & iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.', 'link' => ['url' => route('services.mobile-app-development'), 'label' => 'Learn More']],
    ['icon' => 'fa-network-wired', 'title' => 'Network Installation', 'desc' => 'Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, VLANs, guest Wi-Fi, security configuration, and performance optimisation.', 'link' => ['url' => route('services.network-installation'), 'label' => 'Learn More']],
    ['icon' => 'fa-shield-alt', 'title' => 'Cybersecurity', 'desc' => 'Protect your business with comprehensive vulnerability assessments, 24/7 monitoring, penetration testing, firewall configuration, and TCRA & GDPR compliance support.', 'link' => ['url' => route('services.cybersecurity'), 'label' => 'Learn More']],
    ['icon' => 'fa-headset', 'title' => 'IT Support', 'desc' => 'Reliable ongoing IT support from remote troubleshooting to on-site 24/7 enterprise service. Monthly retainer plans with guaranteed SLAs, dedicated account managers, and SMS ticket updates.', 'link' => ['url' => route('services.it-support'), 'label' => 'Learn More']],
    ['icon' => 'fa-lightbulb', 'title' => 'ICT Consultancy', 'desc' => 'Strategic digital transformation guidance. We audit your existing infrastructure, build technology roadmaps, manage vendors, and provide ongoing CTO-on-demand advisory services.', 'link' => ['url' => route('services.ict-consultancy'), 'label' => 'Learn More']],
    ['icon' => 'fa-video', 'title' => 'CCTV & Security Systems', 'desc' => 'Complete CCTV installation integrated with your network infrastructure. Ideal for hotels, offices, lodges, and residential properties. Remote monitoring and cloud storage included.', 'link' => ['url' => route('request.quote'), 'label' => 'Get Custom Quote']],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-layer-group',
  'title'     => 'Comprehensive <span>ICT Services</span><br/>Built for East Africa',
  'sub'       => 'We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.',
  'offers'    => $serviceOffers,
])
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
