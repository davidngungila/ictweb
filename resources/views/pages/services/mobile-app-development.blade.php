@extends('layouts.app')

@section('title', 'Mobile App Development in Tanzania | Android & iOS Apps')

@section('meta_tags')
  <meta name="description" content="We build powerful mobile apps in Tanzania for businesses. Android and iOS app development with modern features and secure systems.">
  <meta name="keywords" content="mobile app development Tanzania, android apps Tanzania, app developers Dar es Salaam">
  <meta property="og:title" content="Mobile App Development in Tanzania">
  <meta property="og:description" content="We build powerful mobile apps in Tanzania for businesses. Android and iOS app development with modern features and secure systems.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 46vh; text-align: center;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay" style="mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%); -webkit-mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%);"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <div class="hero-left" style="max-width: 840px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Mobile App Development
      </div>
      <h1 class="hero-title">
        Cross-Platform <span>Mobile Apps</span><br/>
        Built for Tanzania
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Native-performance Android and iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-shopping-bag', 'title' => 'E-commerce Apps', 'desc' => 'Mobile shopping experiences with M-Pesa, TigoPesa, and AzamPesa payment integration, inventory sync, and push notifications.'],
    ['icon' => 'fa-briefcase', 'title' => 'Business Apps', 'desc' => 'Custom solutions for process automation, team collaboration, real-time sync, and data analytics for your enterprise needs.'],
    ['icon' => 'fa-map-marked-alt', 'title' => 'Delivery & Tracking', 'desc' => 'GPS-enabled applications with real-time tracking, geofencing, route optimization, and driver management systems.'],
    ['icon' => 'fa-heartbeat', 'title' => 'Healthcare Apps', 'desc' => 'Medical solutions with patient management, appointment booking, health tracking, and secure telemedicine features.'],
    ['icon' => 'fa-graduation-cap', 'title' => 'Educational Apps', 'desc' => 'Interactive learning platforms with video content, progress tracking, offline access, and engaging course delivery.'],
    ['icon' => 'fa-gamepad', 'title' => 'Gaming & Entertainment', 'desc' => 'Engaging mobile games with stunning graphics, multiplayer support, leaderboards, and in-app purchase systems.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-mobile-screen-button',
  'title'     => 'Comprehensive <span>Mobile App</span> Solutions',
  'sub'       => 'We build powerful, scalable mobile applications using Flutter and React Native for iOS and Android platforms.',
  'offers'    => $serviceOffers,
])

<!-- TECHNOLOGIES -->
<div class="tech-strip">
  <div class="tech-strip-inner">
    <div style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-code-branch"></i> Technologies We Use</div>
      <h3 style="font-family:var(--font-display);color:var(--navy);font-size:1.6rem;font-weight:900;margin-top:8px;">Built with <span style="color:var(--accent);">Industry-Leading Tools</span></h3>
    </div>
    <div class="tech-logos">
      <div class="tech-logo-item">Flutter</div>
      <div class="tech-logo-item">React Native</div>
      <div class="tech-logo-item">Firebase</div>
      <div class="tech-logo-item">Google Maps</div>
      <div class="tech-logo-item">Swift</div>
      <div class="tech-logo-item">Kotlin</div>
      <div class="tech-logo-item">M-Pesa API</div>
      <div class="tech-logo-item">TigoPesa API</div>
    </div>
  </div>
</div>

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-code', 'title' => 'One Codebase, Two Platforms', 'desc' => 'Flutter and React Native let us ship polished Android and iOS apps faster and at lower cost.'],
    ['icon' => 'fa-money-bill-wave', 'title' => 'Mobile Money Built In', 'desc' => 'M-Pesa, TigoPesa, and AzamPesa integrations that work reliably for Tanzanian customers.'],
    ['icon' => 'fa-rocket', 'title' => 'Store-Ready Delivery', 'desc' => 'We handle App Store and Google Play submission, review compliance, and release management.'],
    ['icon' => 'fa-shield-halved', 'title' => 'Secure & Scalable', 'desc' => 'Apps built on solid backends with authentication, encryption, and room to grow.'],
  ];
  $included = [
    'UI/UX design with interactive prototypes',
    'Cross-platform development (Android + iOS)',
    'Push notifications (SMS / Firebase)',
    'Mobile money payment integration',
    'Backend API and admin dashboard',
    'App Store & Google Play submission',
    'Analytics to track users and engagement',
    '1 month of free support and bug fixes',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>Mobile Apps</span>',
  'whySub'    => 'We combine modern frameworks with local market experience to deliver apps your customers will love to use.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every App Project</span>',
  'incSub'     => 'Every engagement is quoted individually based on your features and scope — and always includes:',
  'included'  => $included,
])

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Mobile App <span>Development Process</span></h2>
      <p class="section-sub">From strategy to launch — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Strategy</h4>
        <p>Market research, competitor analysis, and feature planning for app success.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>UI/UX Design</h4>
        <p>Creating intuitive interfaces and delightful user experiences.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Clean, efficient code with comprehensive testing and quality assurance.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Launch & Support</h4>
        <p>App store deployment and ongoing maintenance for optimal performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Build Your <span>Mobile App</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20mobile%20app%20development." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('request.quote') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
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
