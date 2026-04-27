@extends('layouts.app')

@section('title', 'Cybersecurity Services in Tanzania | Protect Your Business')

@section('meta_tags')
  <meta name="description" content="Protect your business with cybersecurity services in Tanzania. We offer security audits, firewall setup and data protection solutions.">
  <meta name="keywords" content="cybersecurity Tanzania, IT security Dar es Salaam, data protection Tanzania">
  <meta property="og:title" content="Cybersecurity Services in Tanzania">
  <meta property="og:description" content="Protect your business with cybersecurity services in Tanzania. We offer security audits, firewall setup and data protection solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
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
        Cybersecurity
      </div>
      <h1 class="hero-title">
        Protect Your Business <span>From Threats</span>
      </h1>
      <p class="hero-subtitle">
        Advanced cybersecurity solutions for Tanzanian businesses. Firewall, VPN, antivirus, SIEM, and 24/7 monitoring to keep your data and systems safe from hackers and malware.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-shield-alt"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>Cybersecurity</span> Solutions</h2>
      <p class="section-sub">We protect your digital assets with multi-layered security, threat detection, and rapid incident response.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-search"></i></div>
        <h3>Security Assessment</h3>
        <p>Comprehensive security audits, vulnerability assessments, penetration testing, and compliance audits to identify risks.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-lock"></i></div>
        <h3>Data Protection</h3>
        <p>Encryption and backup solutions for sensitive data security with disaster recovery planning.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-user-shield"></i></div>
        <h3>Compliance Management</h3>
        <p>Ensure regulatory compliance with GDPR, industry standards, and policy management.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-eye"></i></div>
        <h3>Security Monitoring</h3>
        <p>24/7 monitoring with real-time threat detection, SIEM solutions, and rapid incident response.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Security Training</h3>
        <p>Employee security awareness training, phishing simulation programs, and best practices education.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cogs"></i></div>
        <h3>Incident Response</h3>
        <p>Rapid emergency response team, forensic analysis, and recovery planning for security breaches.</p>
      </div>
    </div>
  </div>
</section>

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

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Cybersecurity <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include security audit, firewall configuration, and 1 month of free monitoring.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Cyber Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">500K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Security audit (1-time)</li>
          <li><i class="fas fa-check"></i> Firewall configuration</li>
          <li><i class="fas fa-check"></i> Antivirus + malware protection</li>
          <li><i class="fas fa-check"></i> Basic monitoring (1 month)</li>
          <li><i class="fas fa-check"></i> Delivered in 2–3 days</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Cyber Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.5M</span>
          <span class="pricing-period">– 5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> All Basic features included</li>
          <li><i class="fas fa-check"></i> VPN + remote access security</li>
          <li><i class="fas fa-check"></i> SIEM implementation</li>
          <li><i class="fas fa-check"></i> 24/7 monitoring (3 months)</li>
          <li><i class="fas fa-check"></i> Delivered in 5–7 days</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Cyber Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Large organizations</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">5M</span>
          <span class="pricing-period">– 15M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-layered security architecture</li>
          <li><i class="fas fa-check"></i> Advanced threat detection (AI)</li>
          <li><i class="fas fa-check"></i> Full compliance (GDPR, ISO 27001)</li>
          <li><i class="fas fa-check"></i> 24/7 SOC + incident response</li>
          <li><i class="fas fa-check"></i> Delivered in 2–3 weeks</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
    </div>
  </div>
</section>

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
