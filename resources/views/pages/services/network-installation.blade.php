@extends('layouts.app')

@section('title', 'Network Installation Services in Tanzania | Office & Business Setup')

@section('meta_tags')
  <meta name="description" content="Professional network installation in Tanzania. We set up secure and fast office networks, Wi-Fi systems and structured cabling.">
  <meta name="keywords" content="network installation Tanzania, WiFi setup Dar es Salaam, LAN setup Tanzania">
  <meta property="og:title" content="Network Installation Services in Tanzania">
  <meta property="og:description" content="Professional network installation in Tanzania. We set up secure and fast office networks, Wi-Fi systems and structured cabling.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
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
    <div class="hero-left" style="max-width: 840px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Network Installation
      </div>
      <h1 class="hero-title">
        Professional <span>Network Setup</span><br/>
        for Tanzanian Businesses
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Enterprise-grade network infrastructure using Cisco, Mikrotik, and Ubiquiti. From small office WiFi to multi-site campus networks with VPN, firewall, and 24/7 monitoring.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-project-diagram', 'title' => 'Network Design', 'desc' => 'Custom network architecture planning with site survey, network mapping, and capacity planning for optimal performance.'],
    ['icon' => 'fa-plug', 'title' => 'Network Installation', 'desc' => 'Professional setup and configuration of routers, switches, and access points with thorough testing and validation.'],
    ['icon' => 'fa-shield-alt', 'title' => 'Network Security', 'desc' => 'Comprehensive security solutions including firewall setup, VPN configuration, and access control policies.'],
    ['icon' => 'fa-tools', 'title' => 'Network Maintenance', 'desc' => 'Ongoing support with 24/7 monitoring, regular updates, and troubleshooting for optimal network performance.'],
    ['icon' => 'fa-wifi', 'title' => 'Wireless Solutions', 'desc' => 'WiFi planning and optimization with access point placement, site surveys, and seamless roaming coverage.'],
    ['icon' => 'fa-chart-line', 'title' => 'Network Optimization', 'desc' => 'Performance tuning with traffic analysis, traffic shaping, load balancing, and bandwidth management.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-network-wired',
  'title'     => 'Comprehensive <span>Network Solutions</span>',
  'sub'       => 'We design and implement robust network infrastructures using industry-leading equipment for reliable connectivity.',
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
      <div class="tech-logo-item">Cisco</div>
      <div class="tech-logo-item">Mikrotik</div>
      <div class="tech-logo-item">Ubiquiti</div>
      <div class="tech-logo-item">Fortinet</div>
      <div class="tech-logo-item">TP-Link</div>
      <div class="tech-logo-item">D-Link</div>
      <div class="tech-logo-item">Juniper</div>
      <div class="tech-logo-item">Netgear</div>
    </div>
  </div>
</div>

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-certificate', 'title' => 'Certified Engineers', 'desc' => 'Experienced technicians trained on MikroTik, Ubiquiti, and Cisco equipment for every scale of deployment.'],
    ['icon' => 'fa-gauge-high', 'title' => 'Fast, Stable Coverage', 'desc' => 'Proper site surveys and access-point placement eliminate dead zones and dropped connections.'],
    ['icon' => 'fa-lock', 'title' => 'Secure by Default', 'desc' => 'Firewalls, VLAN segmentation, and guest networks configured on every single installation.'],
    ['icon' => 'fa-screwdriver-wrench', 'title' => 'Local After-Sales Support', 'desc' => 'Based in Moshi — when something needs attention, we are on-site fast, not days away.'],
  ];
  $included = [
    'Free site survey & network assessment',
    'Professional structured cabling',
    'Router, switch & access point configuration',
    'Firewall & guest network setup',
    'VPN & remote access configuration',
    'Network documentation & diagrams',
    'Performance testing & handover training',
    '1 month of free remote monitoring',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>Network Installation</span>',
  'whySub'    => 'Reliable connectivity is the backbone of your business — we design networks that stay fast, secure, and online.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every Network Project</span>',
  'incSub'     => 'Every installation is quoted individually based on your site size and equipment — and always includes:',
  'included'  => $included,
])

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Network <span>Installation Process</span></h2>
      <p class="section-sub">From assessment to handover — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Site Assessment</h4>
        <p>Comprehensive site survey and requirements analysis for optimal network design.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Network Design</h4>
        <p>Creating detailed network architecture and implementation plans.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Implementation</h4>
        <p>Professional installation and configuration with minimal disruption.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Testing & Handover</h4>
        <p>Thorough testing and training before final project delivery.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Upgrade Your <span>Network</span>?</h2>
    <p>Get a free site assessment and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20network%20installation." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('request.quote') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection
