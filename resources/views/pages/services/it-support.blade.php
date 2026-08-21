@extends('layouts.app')

@section('title', 'IT Support Services in Tanzania | Business IT Solutions')

@section('meta_tags')
  <meta name="description" content="Reliable IT support services in Tanzania. We provide system maintenance, troubleshooting and ongoing IT support for businesses.">
  <meta name="keywords" content="IT support Tanzania, computer support Dar es Salaam, IT services Tanzania">
  <meta property="og:title" content="IT Support Services in Tanzania">
  <meta property="og:description" content="Reliable IT support services in Tanzania. We provide system maintenance, troubleshooting and ongoing IT support for businesses.">
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
        IT Support
      </div>
      <h1 class="hero-title">
        Keep Your Business <span>Running Smoothly</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        24/7 remote support, on-site service, preventive maintenance, and expert technical assistance for Tanzanian businesses. Fast response times and guaranteed service levels.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-desktop', 'title' => 'Remote Support', 'desc' => 'Instant remote assistance with screen sharing, remote desktop, and phone support for software, hardware, and network issues.'],
    ['icon' => 'fa-user-tie', 'title' => 'On-site Service', 'desc' => 'Professional technicians visit your location for hands-on support including hardware installation, network setup, and equipment repair.'],
    ['icon' => 'fa-wrench', 'title' => 'Maintenance', 'desc' => 'Preventive maintenance and optimization of IT systems with regular system updates, performance tuning, and backup management.'],
    ['icon' => 'fa-graduation-cap', 'title' => 'Consulting', 'desc' => 'Strategic IT consulting to optimize your technology infrastructure with technology planning, process optimization, and training services.'],
    ['icon' => 'fa-shield-alt', 'title' => 'Security Services', 'desc' => 'Comprehensive security solutions and vulnerability management with security audits, malware protection, and data recovery.'],
    ['icon' => 'fa-chart-line', 'title' => 'Cloud Services', 'desc' => 'Cloud migration, management, and optimization services including cloud migration, backup solutions, and disaster recovery.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-headset',
  'title'     => 'Comprehensive <span>IT Support</span> Solutions',
  'sub'       => 'We provide reliable support that keeps your technology infrastructure running smoothly and minimizes downtime.',
  'offers'    => $serviceOffers,
])

<!-- TECHNOLOGIES -->
<div class="tech-strip">
  <div class="tech-strip-inner">
    <div style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-code-branch"></i> Technologies We Use</div>
      <h3 style="font-family:var(--font-display);color:var(--navy);font-size:1.6rem;font-weight:900;margin-top:8px;">Built with <span style="color:var(--accent);">Industry Tools</span></h3>
    </div>
    <div class="tech-logos">
      <div class="tech-logo-item">TeamViewer</div>
      <div class="tech-logo-item">AnyDesk</div>
      <div class="tech-logo-item">Microsoft Intune</div>
      <div class="tech-logo-item">VMware</div>
      <div class="tech-logo-item">AWS</div>
      <div class="tech-logo-item">Azure</div>
      <div class="tech-logo-item">N-able</div>
      <div class="tech-logo-item">ConnectWise</div>
    </div>
  </div>
</div>

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-bolt', 'title' => 'Fast Response Times', 'desc' => 'Guaranteed response windows and a 24/7 emergency line keep your business moving when issues strike.'],
    ['icon' => 'fa-building', 'title' => 'Remote + On-Site', 'desc' => 'Most issues fixed remotely in minutes — and a technician at your door whenever hands are needed.'],
    ['icon' => 'fa-calendar-check', 'title' => 'Preventive Care', 'desc' => 'Scheduled maintenance stops problems before they start, instead of expensive fixes after.'],
    ['icon' => 'fa-handshake', 'title' => 'Your IT Department', 'desc' => 'Enterprise-grade IT expertise without the cost of hiring a full in-house team.'],
  ];
  $included = [
    'Helpdesk via phone, WhatsApp & email',
    'Remote troubleshooting & fixes',
    'On-site technician visits',
    'Preventive maintenance schedule',
    'Windows / Linux / macOS support',
    'Printer, scanner & peripheral support',
    'Microsoft 365 / Google Workspace management',
    'Monthly system health reports',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>IT Support</span>',
  'whySub'    => 'Downtime costs money. Our support plans keep your computers, network, and staff productive every day.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every Support Plan</span>',
  'incSub'     => 'Support plans are tailored to your team size and needs — and always include:',
  'included'  => $included,
])

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Support <span>Process</span></h2>
      <p class="section-sub">From contact to resolution — we ensure quick and efficient support delivery.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Contact</h4>
        <p>Reach us via phone, email, or support portal for immediate assistance.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Diagnosis</h4>
        <p>Quick problem identification and root cause analysis for fast resolution.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Resolution</h4>
        <p>Efficient problem solving with minimal disruption to your business operations.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Follow-up</h4>
        <p>Ensuring complete resolution and customer satisfaction with post-support checks.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need IT Support? <span>We're Here 24/7</span></h2>
    <p>Get immediate assistance and a detailed quote within 24 hours. Keep your business running smoothly.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I%20need%20IT%20support." class="btn-whatsapp" target="_blank">
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
