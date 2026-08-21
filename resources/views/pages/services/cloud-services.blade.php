@extends('layouts.app')

@section('title', 'Cloud Services in Tanzania | Secure Cloud Solutions')

@section('meta_tags')
  <meta name="description" content="Secure cloud services in Tanzania. We provide cloud hosting, storage solutions and cloud migration for businesses.">
  <meta name="keywords" content="cloud services Tanzania, cloud hosting Dar es Salaam, cloud storage Tanzania">
  <meta property="og:title" content="Cloud Services in Tanzania">
  <meta property="og:description" content="Secure cloud services in Tanzania. We provide cloud hosting, storage solutions and cloud migration for businesses.">
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
        Cloud Services
      </div>
      <h1 class="hero-title">
        Transform Your Business <span>With Cloud</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Scalable cloud solutions for Tanzanian businesses. Cloud migration, cloud storage, cloud computing, and cloud security to enhance flexibility, reduce costs, and drive innovation.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-exchange-alt', 'title' => 'Cloud Migration', 'desc' => 'Seamless migration of your applications, data, and infrastructure to the cloud with zero-downtime migration, data integrity assurance, and post-migration support.'],
    ['icon' => 'fa-database', 'title' => 'Cloud Storage', 'desc' => 'Secure, scalable, and reliable cloud storage solutions with unlimited storage options, automated backups, and version control.'],
    ['icon' => 'fa-server', 'title' => 'Cloud Computing', 'desc' => 'High-performance computing resources on demand with auto-scaling resources, load balancing, and performance monitoring.'],
    ['icon' => 'fa-shield-alt', 'title' => 'Cloud Security', 'desc' => 'Advanced security solutions to protect your cloud infrastructure with encryption services, threat detection, and compliance management.'],
    ['icon' => 'fa-cloud-download-alt', 'title' => 'Cloud Backup', 'desc' => 'Automated backup solutions to ensure your data is always safe with automated scheduling, quick recovery, and disaster recovery.'],
    ['icon' => 'fa-lightbulb', 'title' => 'Cloud Consulting', 'desc' => 'Expert guidance to help you make the right cloud decisions with strategy development, cost optimization, and vendor selection.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-cloud',
  'title'     => 'Comprehensive <span>Cloud Services</span> Solutions',
  'sub'       => 'We provide scalable, secure, and reliable cloud solutions that transform your business operations.',
  'offers'    => $serviceOffers,
])

<!-- TECHNOLOGIES -->
<div class="tech-strip">
  <div class="tech-strip-inner">
    <div style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-code-branch"></i> Technologies We Use</div>
      <h3 style="font-family:var(--font-display);color:var(--navy);font-size:1.6rem;font-weight:900;margin-top:8px;">Built with <span style="color:var(--accent);">Leading Platforms</span></h3>
    </div>
    <div class="tech-logos">
      <div class="tech-logo-item">AWS</div>
      <div class="tech-logo-item">Google Cloud</div>
      <div class="tech-logo-item">Azure</div>
      <div class="tech-logo-item">DigitalOcean</div>
      <div class="tech-logo-item">Docker</div>
      <div class="tech-logo-item">Kubernetes</div>
      <div class="tech-logo-item">Terraform</div>
      <div class="tech-logo-item">Ansible</div>
    </div>
  </div>
</div>

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-cloud-arrow-up', 'title' => 'Smooth Migration', 'desc' => 'Move email, files, and systems to the cloud with zero data loss and minimal downtime.'],
    ['icon' => 'fa-arrows-down-to-line', 'title' => 'Pay As You Grow', 'desc' => 'Scale resources up or down as your business changes — you only pay for what you actually use.'],
    ['icon' => 'fa-database', 'title' => 'Backup & Recovery', 'desc' => 'Automated backups and tested disaster-recovery plans keep your business data safe.'],
    ['icon' => 'fa-globe', 'title' => 'Work From Anywhere', 'desc' => 'Give your team secure access to files and systems from the office, home, or on the road.'],
  ];
  $included = [
    'Cloud readiness assessment',
    'Migration planning & execution',
    'Email & collaboration setup (Microsoft 365 / Google Workspace)',
    'File storage & sharing configuration',
    'Automated backup solutions',
    'Security & access controls',
    'Staff onboarding & training',
    'Ongoing management & optimisation options',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>Cloud Services</span>',
  'whySub'    => 'The cloud lets small teams work like big companies — we handle the migration, security, and management for you.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every Cloud Project</span>',
  'incSub'     => 'Cloud solutions are tailored to your workloads and budget — and always include:',
  'included'  => $included,
])

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Cloud <span>Migration Process</span></h2>
      <p class="section-sub">From assessment to deployment — we ensure a smooth transition to the cloud.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Assessment</h4>
        <p>Evaluating your current infrastructure and cloud readiness.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Planning</h4>
        <p>Creating a detailed migration strategy and architecture design.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Migration</h4>
        <p>Executing seamless migration with minimal downtime.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Optimization</h4>
        <p>Monitoring performance and optimizing for cost and efficiency.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Transform to the Cloud <span>Today</span></h2>
    <p>Get a free cloud assessment and detailed quote within 24 hours. Scale your business with our cloud solutions.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20cloud%20services." class="btn-whatsapp" target="_blank">
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
