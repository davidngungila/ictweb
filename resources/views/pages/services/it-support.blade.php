@extends('layouts.app')

@section('title', 'IT Support Services in Tanzania | Business IT Solutions')

@section('meta_tags')
  <meta name="description" content="Reliable IT support services in Tanzania. We provide system maintenance, troubleshooting and ongoing IT support for businesses.">
  <meta name="keywords" content="IT support Tanzania, computer support Dar es Salaam, IT services Tanzania">
  <meta property="og:title" content="IT Support Services in Tanzania">
  <meta property="og:description" content="Reliable IT support services in Tanzania. We provide system maintenance, troubleshooting and ongoing IT support for businesses.">
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
        IT Support
      </div>
      <h1 class="hero-title">
        Keep Your Business <span>Running Smoothly</span>
      </h1>
      <p class="hero-subtitle">
        24/7 remote support, on-site service, preventive maintenance, and expert technical assistance for Tanzanian businesses. Fast response times and guaranteed service levels.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-headset"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>IT Support</span> Solutions</h2>
      <p class="section-sub">We provide reliable support that keeps your technology infrastructure running smoothly and minimizes downtime.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-desktop"></i></div>
        <h3>Remote Support</h3>
        <p>Instant remote assistance with screen sharing, remote desktop, and phone support for software, hardware, and network issues.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-user-tie"></i></div>
        <h3>On-site Service</h3>
        <p>Professional technicians visit your location for hands-on support including hardware installation, network setup, and equipment repair.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-wrench"></i></div>
        <h3>Maintenance</h3>
        <p>Preventive maintenance and optimization of IT systems with regular system updates, performance tuning, and backup management.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Consulting</h3>
        <p>Strategic IT consulting to optimize your technology infrastructure with technology planning, process optimization, and training services.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Security Services</h3>
        <p>Comprehensive security solutions and vulnerability management with security audits, malware protection, and data recovery.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Cloud Services</h3>
        <p>Cloud migration, management, and optimization services including cloud migration, backup solutions, and disaster recovery.</p>
      </div>
    </div>
  </div>
</section>

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

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">IT Support <span>Pricing Packages</span></h2>
      <p class="section-sub">Monthly retainer packages with guaranteed response times and SLAs.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Support Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">500K</span>
          <span class="pricing-period">– 1M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Remote support (8am–6pm)</li>
          <li><i class="fas fa-check"></i> 10 tickets/month</li>
          <li><i class="fas fa-check"></i> 24h response time</li>
          <li><i class="fas fa-check"></i> Basic maintenance</li>
          <li><i class="fas fa-check"></i> Phone + email support</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Support Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1M</span>
          <span class="pricing-period">– 3M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Remote + on-site support</li>
          <li><i class="fas fa-check"></i> Unlimited tickets</li>
          <li><i class="fas fa-check"></i> 4h critical response</li>
          <li><i class="fas fa-check"></i> Preventive maintenance</li>
          <li><i class="fas fa-check"></i> 24/7 emergency line</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Support Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Large organizations</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 8M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Dedicated IT manager</li>
          <li><i class="fas fa-check"></i> 1h critical response SLA</li>
          <li><i class="fas fa-check"></i> On-site 2–3 visits/week</li>
          <li><i class="fas fa-check"></i> Full security + compliance</li>
          <li><i class="fas fa-check"></i> Custom reporting</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
  </div>
</section>

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
      <a href="{{ route('package.selection') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
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
