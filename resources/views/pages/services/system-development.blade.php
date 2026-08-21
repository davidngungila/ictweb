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

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-puzzle-piece', 'title' => 'Built Around Your Workflow', 'desc' => 'Off-the-shelf software forces you to change how you work. We build systems that fit your exact processes.'],
    ['icon' => 'fa-database', 'title' => 'Own Your Data', 'desc' => 'Centralised databases with reporting dashboards that turn daily operations into business insight.'],
    ['icon' => 'fa-plug', 'title' => 'Integrates Everything', 'desc' => 'Connect payment gateways, SMS APIs, accounting tools, and legacy systems into one platform.'],
    ['icon' => 'fa-user-shield', 'title' => 'Role-Based Access', 'desc' => 'Granular permissions for admins, staff, and clients keep your sensitive data secure.'],
  ];
  $included = [
    'Requirements workshop & system documentation',
    'Custom web-based system development',
    'User roles & permission management',
    'Reports & analytics dashboard',
    'Third-party API integrations',
    'Data migration from existing tools',
    'Staff training & user manuals',
    'Warranty period & ongoing support options',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>System Development</span>',
  'whySub'    => 'From ERPs to CRMs and custom internal tools — we automate your operations with software made exactly for you.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every System Project</span>',
  'incSub'     => 'Every system is scoped and quoted individually based on your modules and requirements — and always includes:',
  'included'  => $included,
])

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
