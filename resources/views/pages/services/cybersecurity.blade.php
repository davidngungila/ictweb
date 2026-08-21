@extends('layouts.app')

@section('title', 'Cybersecurity Services in Tanzania | Protect Your Business')

@section('meta_tags')
  <meta name="description" content="Protect your business with cybersecurity services in Tanzania. We offer security audits, firewall setup and data protection solutions.">
  <meta name="keywords" content="cybersecurity Tanzania, IT security Dar es Salaam, data protection Tanzania">
  <meta property="og:title" content="Cybersecurity Services in Tanzania">
  <meta property="og:description" content="Protect your business with cybersecurity services in Tanzania. We offer security audits, firewall setup and data protection solutions.">
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
        Cybersecurity
      </div>
      <h1 class="hero-title">
        Protect Your Business <span>From Threats</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Advanced cybersecurity solutions for Tanzanian businesses. Firewall, VPN, antivirus, SIEM, and 24/7 monitoring to keep your data and systems safe from hackers and malware.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-search', 'title' => 'Security Assessment', 'desc' => 'Comprehensive security audits, vulnerability assessments, penetration testing, and compliance audits to identify risks.'],
    ['icon' => 'fa-lock', 'title' => 'Data Protection', 'desc' => 'Encryption and backup solutions for sensitive data security with disaster recovery planning.'],
    ['icon' => 'fa-user-shield', 'title' => 'Compliance Management', 'desc' => 'Ensure regulatory compliance with GDPR, industry standards, and policy management.'],
    ['icon' => 'fa-eye', 'title' => 'Security Monitoring', 'desc' => '24/7 monitoring with real-time threat detection, SIEM solutions, and rapid incident response.'],
    ['icon' => 'fa-graduation-cap', 'title' => 'Security Training', 'desc' => 'Employee security awareness training, phishing simulation programs, and best practices education.'],
    ['icon' => 'fa-cogs', 'title' => 'Incident Response', 'desc' => 'Rapid emergency response team, forensic analysis, and recovery planning for security breaches.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-shield-alt',
  'title'     => 'Comprehensive <span>Cybersecurity</span> Solutions',
  'sub'       => 'We protect your digital assets with multi-layered security, threat detection, and rapid incident response.',
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
      <div class="tech-logo-item">Fortinet</div>
      <div class="tech-logo-item">Cisco</div>
      <div class="tech-logo-item">Palo Alto</div>
      <div class="tech-logo-item">Kaspersky</div>
      <div class="tech-logo-item">CrowdStrike</div>
      <div class="tech-logo-item">Splunk</div>
      <div class="tech-logo-item">Sophos</div>
      <div class="tech-logo-item">Microsoft Defender</div>
    </div>
  </div>
</div>

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-magnifying-glass', 'title' => 'Proactive Threat Hunting', 'desc' => 'We don\'t wait for breaches — continuous monitoring catches threats before they cause damage.'],
    ['icon' => 'fa-scale-balanced', 'title' => 'Compliance Ready', 'desc' => 'Security controls aligned with TCRA regulations, GDPR, and ISO 27001 best practices.'],
    ['icon' => 'fa-user-secret', 'title' => 'Experienced Analysts', 'desc' => 'Certified security professionals with real penetration-testing and incident-response experience.'],
    ['icon' => 'fa-clock-rotate-left', 'title' => 'Rapid Incident Response', 'desc' => 'When something goes wrong, our team contains, investigates, and recovers your systems — fast.'],
  ];
  $included = [
    'Comprehensive security audit & risk report',
    'Firewall configuration & hardening',
    'Antivirus / anti-malware deployment',
    'Email & web traffic filtering',
    'Vulnerability scanning & patching',
    'Staff security-awareness training',
    'Backup & disaster-recovery planning',
    'Ongoing monitoring options (24/7)',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>Cybersecurity</span>',
  'whySub'    => 'One breach can cost you data, money, and customer trust. We protect your business with layered, managed security.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every Security Engagement</span>',
  'incSub'     => 'Every engagement is scoped individually based on your environment and risk profile — and always includes:',
  'included'  => $included,
])

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Security <span>Implementation Process</span></h2>
      <p class="section-sub">From assessment to protection — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Assessment</h4>
        <p>Comprehensive security assessment and vulnerability analysis.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Protection</h4>
        <p>Implementing multi-layered security controls and safeguards.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Monitoring</h4>
        <p>Continuous monitoring and threat detection with SIEM solutions.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Response</h4>
        <p>Rapid incident response and recovery procedures.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Protect Your Business <span>From Threats</span></h2>
    <p>Get a free security assessment and detailed quote within 24 hours. Don't wait for a breach.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20cybersecurity." class="btn-whatsapp" target="_blank">
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
