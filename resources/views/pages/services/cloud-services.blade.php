@extends('layouts.app')

@section('title', 'Cloud Services in Tanzania | Secure Cloud Solutions')

@section('meta_tags')
  <meta name="description" content="Secure cloud services in Tanzania. We provide cloud hosting, storage solutions and cloud migration for businesses.">
  <meta name="keywords" content="cloud services Tanzania, cloud hosting Dar es Salaam, cloud storage Tanzania">
  <meta property="og:title" content="Cloud Services in Tanzania">
  <meta property="og:description" content="Secure cloud services in Tanzania. We provide cloud hosting, storage solutions and cloud migration for businesses.">
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
        Cloud Services
      </div>
      <h1 class="hero-title">
        Transform Your Business <span>With Cloud</span>
      </h1>
      <p class="hero-subtitle">
        Scalable cloud solutions for Tanzanian businesses. Cloud migration, cloud storage, cloud computing, and cloud security to enhance flexibility, reduce costs, and drive innovation.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-cloud"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>Cloud Services</span> Solutions</h2>
      <p class="section-sub">We provide scalable, secure, and reliable cloud solutions that transform your business operations.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-exchange-alt"></i></div>
        <h3>Cloud Migration</h3>
        <p>Seamless migration of your applications, data, and infrastructure to the cloud with zero-downtime migration, data integrity assurance, and post-migration support.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-database"></i></div>
        <h3>Cloud Storage</h3>
        <p>Secure, scalable, and reliable cloud storage solutions with unlimited storage options, automated backups, and version control.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-server"></i></div>
        <h3>Cloud Computing</h3>
        <p>High-performance computing resources on demand with auto-scaling resources, load balancing, and performance monitoring.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Cloud Security</h3>
        <p>Advanced security solutions to protect your cloud infrastructure with encryption services, threat detection, and compliance management.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cloud-download-alt"></i></div>
        <h3>Cloud Backup</h3>
        <p>Automated backup solutions to ensure your data is always safe with automated scheduling, quick recovery, and disaster recovery.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
        <h3>Cloud Consulting</h3>
        <p>Expert guidance to help you make the right cloud decisions with strategy development, cost optimization, and vendor selection.</p>
      </div>
    </div>
  </div>
</section>

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

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Cloud Services <span>Pricing Packages</span></h2>
      <p class="section-sub">Monthly packages with scalable resources and 99.9% uptime guarantee.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Cloud Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">500K</span>
          <span class="pricing-period">– 1M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 50GB storage</li>
          <li><i class="fas fa-check"></i> Basic computing (2 vCPU)</li>
          <li><i class="fas fa-check"></i> Standard backup</li>
          <li><i class="fas fa-check"></i> Email support</li>
          <li><i class="fas fa-check"></i> 99.9% uptime SLA</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Cloud Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1M</span>
          <span class="pricing-period">– 3M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 500GB storage</li>
          <li><i class="fas fa-check"></i> Enhanced computing (4 vCPU)</li>
          <li><i class="fas fa-check"></i> Daily backup + DR</li>
          <li><i class="fas fa-check"></i> Priority support</li>
          <li><i class="fas fa-check"></i> Auto-scaling</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Cloud Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Large organizations</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 10M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Unlimited storage</li>
          <li><i class="fas fa-check"></i> High-performance (8+ vCPU)</li>
          <li><i class="fas fa-check"></i> Real-time backup + DR</li>
          <li><i class="fas fa-check"></i> 24/7 dedicated support</li>
          <li><i class="fas fa-check"></i> Custom architecture</li>
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
