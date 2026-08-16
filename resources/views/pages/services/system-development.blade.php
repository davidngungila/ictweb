@extends('layouts.app')

@section('title', 'System Development Services in Tanzania | Custom Software Solutions')

@section('meta_tags')
  <meta name="description" content="Custom system development in Tanzania. We build tailored software solutions, management systems and business applications.">
  <meta name="keywords" content="system development Tanzania, custom software Tanzania, business applications Dar es Salaam">
  <meta property="og:title" content="System Development Services in Tanzania">
  <meta property="og:description" content="Custom system development in Tanzania. We build tailored software solutions, management systems and business applications.">
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
        System Development
      </div>
      <h1 class="hero-title">
        Build Powerful <span>Business Systems</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Custom software development, ERP systems, CRM systems, and business automation solutions for Tanzanian enterprises. Scalable, efficient, and tailored to your needs.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-chart-line', 'title' => 'ERP Development', 'desc' => 'Custom ERP systems that integrate all your business processes with inventory management, financial management, and HR management.'],
    ['icon' => 'fa-users', 'title' => 'CRM Development', 'desc' => 'Powerful CRM solutions to manage customer relationships with lead management, sales automation, and analytics & reporting.'],
    ['icon' => 'fa-boxes', 'title' => 'Inventory Management', 'desc' => 'Smart inventory systems to optimize stock levels with real-time tracking, automated reordering, and multi-location support.'],
    ['icon' => 'fa-user-tie', 'title' => 'HR Management', 'desc' => 'Comprehensive HR systems to manage your workforce with payroll management, performance tracking, and leave management.'],
    ['icon' => 'fa-calculator', 'title' => 'Financial Systems', 'desc' => 'Robust financial management systems for accurate accounting and reporting with accounting software, budget management, and financial reporting.'],
    ['icon' => 'fa-puzzle-piece', 'title' => 'Custom Solutions', 'desc' => 'Tailored software solutions designed specifically for your unique business requirements with bespoke development, system integration, and ongoing support.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-cogs',
  'title'     => 'Comprehensive <span>System Development</span> Solutions',
  'sub'       => 'We build powerful, scalable, and efficient business systems that streamline operations and drive growth.',
  'offers'    => $serviceOffers,
])

<!-- TECHNOLOGIES -->
<div class="tech-strip">
  <div class="tech-strip-inner">
    <div style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-code-branch"></i> Technologies We Use</div>
      <h3 style="font-family:var(--font-display);color:var(--navy);font-size:1.6rem;font-weight:900;margin-top:8px;">Built with <span style="color:var(--accent);">Modern Tech</span></h3>
    </div>
    <div class="tech-logos">
      <div class="tech-logo-item">PHP</div>
      <div class="tech-logo-item">Laravel</div>
      <div class="tech-logo-item">Python</div>
      <div class="tech-logo-item">Java</div>
      <div class="tech-logo-item">React</div>
      <div class="tech-logo-item">Vue.js</div>
      <div class="tech-logo-item">Angular</div>
      <div class="tech-logo-item">Node.js</div>
    </div>
  </div>
</div>

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">System Development <span>Pricing Packages</span></h2>
      <p class="section-sub">Project-based pricing tailored to your system requirements.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">System Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small businesses</p>
        <div class="pricing-price">
          <span class="pricing-amount">Request Quote</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Single module system</li>
          <li><i class="fas fa-check"></i> Basic features</li>
          <li><i class="fas fa-check"></i> 1–2 user roles</li>
          <li><i class="fas fa-check"></i> 3 months support</li>
          <li><i class="fas fa-check"></i> Delivered in 4–6 weeks</li>
        </ul>
        <a href="{{ route('request.quote') }}" class="btn-package">Request Quote</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">System Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-amount">Request Quote</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-module system</li>
          <li><i class="fas fa-check"></i> Advanced features</li>
          <li><i class="fas fa-check"></i> 3–5 user roles</li>
          <li><i class="fas fa-check"></i> 6 months support</li>
          <li><i class="fas fa-check"></i> Delivered in 6–10 weeks</li>
        </ul>
        <a href="{{ route('request.quote') }}" class="btn-package">Request Quote</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">System Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Large organizations</p>
        <div class="pricing-price">
          <span class="pricing-amount">Request Quote</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full ERP/CRM suite</li>
          <li><i class="fas fa-check"></i> Custom integrations</li>
          <li><i class="fas fa-check"></i> Unlimited user roles</li>
          <li><i class="fas fa-check"></i> 12 months support</li>
          <li><i class="fas fa-check"></i> Delivered in 3–6 months</li>
        </ul>
        <a href="{{ route('request.quote') }}" class="btn-package">Request Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Development <span>Process</span></h2>
      <p class="section-sub">From discovery to deployment — we ensure a proven methodology for successful system development.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Discovery</h4>
        <p>Understanding your business needs and requirements.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Design</h4>
        <p>Creating detailed system architecture and UI/UX designs.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Building robust and scalable system solutions.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Deployment</h4>
        <p>Launching your system with comprehensive training and support.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Build Your Custom <span>System Today</span></h2>
    <p>Get a free consultation and detailed quote within 24 hours. Let our expert developers create a system that fits your business needs.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20system%20development." class="btn-whatsapp" target="_blank">
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
