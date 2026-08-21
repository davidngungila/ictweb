@extends('layouts.app')

@section('title', 'Web Development Services in Tanzania | Affordable & Professional')

@section('meta_tags')
  <meta name="description" content="Get modern, responsive and SEO-friendly websites in Tanzania. We design business websites that attract customers and grow your brand.">
  <meta name="keywords" content="web development Tanzania, website design Dar es Salaam, business websites Tanzania">
  <meta property="og:title" content="Web Development Services in Tanzania">
  <meta property="og:description" content="Get modern, responsive and SEO-friendly websites in Tanzania. We design business websites that attract customers and grow your brand.">
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
        Web Development
      </div>
      <h1 class="hero-title">
        Custom <span>Web Development</span><br/>
        for Tanzanian Businesses
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Professional websites and web applications tailored to your business needs. From simple starter sites to complex e-commerce platforms with full CMS and mobile money payments.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-shopping-cart', 'title' => 'E-commerce Solutions', 'desc' => 'Complete online stores with payment gateway integration (M-Pesa, TigoPesa, AzamPesa), inventory management, and order processing systems.'],
    ['icon' => 'fa-briefcase', 'title' => 'Corporate Websites', 'desc' => 'Professional business websites showcasing your brand and services effectively with custom design and SEO optimization.'],
    ['icon' => 'fa-cogs', 'title' => 'Web Applications', 'desc' => 'Custom business applications for process automation, data analytics, and API integration to streamline your operations.'],
    ['icon' => 'fab fa-wordpress', 'title' => 'CMS Development', 'desc' => 'Content management systems using WordPress or custom CMS solutions for easy website updates and maintenance.'],
    ['icon' => 'fa-search', 'title' => 'SEO Services', 'desc' => 'Search engine optimization to improve your online visibility, including keyword research, on-page optimization, and performance tracking.'],
    ['icon' => 'fa-paint-brush', 'title' => 'UI/UX Design', 'desc' => 'Beautiful, user-friendly interfaces that enhance user experience with responsive design, user testing, and brand integration.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-code',
  'title'     => 'Comprehensive <span>Web Development</span> Solutions',
  'sub'       => 'We build powerful, scalable web applications using modern technologies like Laravel, React, and Vue.js.',
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
      <div class="tech-logo-item">Laravel</div>
      <div class="tech-logo-item">React.js</div>
      <div class="tech-logo-item">Vue.js</div>
      <div class="tech-logo-item">WordPress</div>
      <div class="tech-logo-item">Node.js</div>
      <div class="tech-logo-item">MySQL</div>
      <div class="tech-logo-item">MongoDB</div>
      <div class="tech-logo-item">M-Pesa API</div>
    </div>
  </div>
</div>

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-lightbulb', 'title' => 'Tailored to Your Business', 'desc' => 'No cookie-cutter templates. Every website is designed around your brand, your goals, and the customers you want to reach.'],
    ['icon' => 'fa-mobile-screen-button', 'title' => 'Mobile-First & Fast', 'desc' => 'Responsive on every device and optimised for speed, so you never lose a visitor to slow loading pages.'],
    ['icon' => 'fa-magnifying-glass-chart', 'title' => 'SEO-Ready from Day One', 'desc' => 'Clean code, proper meta structure, and Google-friendly architecture that help customers find you.'],
    ['icon' => 'fa-headset', 'title' => 'Local Ongoing Support', 'desc' => 'Real support in Tanzania via phone, WhatsApp, and email — long after launch day.'],
  ];
  $included = [
    'Free domain name + hosting for the first year',
    'SSL certificate and full security setup',
    'Mobile-responsive design tested on all devices',
    'WhatsApp button & social media integration',
    'Contact forms with spam protection',
    'Google Maps and business location setup',
    'Google Analytics installation',
    'Training on managing your website + 1 month free support',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>Web Development</span>',
  'whySub'    => 'We build websites that do more than look good — they load fast, rank well, and turn visitors into customers.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every Website Project</span>',
  'incSub'     => 'Every project is quoted individually based on your pages and features — and always includes:',
  'included'  => $included,
])

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Web Development <span>Process</span></h2>
      <p class="section-sub">From discovery to deployment — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Discovery</h4>
        <p>Understanding your requirements, goals, and target audience to create the perfect solution strategy.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Design</h4>
        <p>Creating wireframes, mockups, and prototypes to visualize the perfect user experience.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Building your solution using clean code, best practices, and modern technologies.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Launch</h4>
        <p>Deploying your solution and providing ongoing support for optimal performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Build Your <span>Web Solution</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20web%20development." class="btn-whatsapp" target="_blank">
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
