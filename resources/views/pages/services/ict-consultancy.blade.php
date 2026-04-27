@extends('layouts.app')

@section('title', 'ICT Consultancy Services in Tanzania | Digital Transformation')

@section('meta_tags')
  <meta name="description" content="Expert ICT consultancy in Tanzania. We help businesses improve operations with technology, systems and digital transformation strategies.">
  <meta name="keywords" content="ICT consultancy Tanzania, IT consulting Dar es Salaam, digital transformation Tanzania">
  <meta property="og:title" content="ICT Consultancy Services in Tanzania">
  <meta property="og:description" content="Expert ICT consultancy in Tanzania. We help businesses improve operations with technology, systems and digital transformation strategies.">
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
        ICT Consultancy
      </div>
      <h1 class="hero-title">
        Transform Your Business <span>With Strategy</span>
      </h1>
      <p class="hero-subtitle">
        Strategic technology consulting that drives digital innovation, operational efficiency, and sustainable growth for Tanzanian businesses. Expert guidance for your digital transformation journey.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-lightbulb"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>ICT Consultancy</span> Solutions</h2>
      <p class="section-sub">We help Tanzanian businesses leverage technology for competitive advantage and sustainable growth.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-sitemap"></i></div>
        <h3>Digital Strategy</h3>
        <p>Comprehensive digital transformation roadmap with technology assessment, digital roadmap, and competitive analysis.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-pie"></i></div>
        <h3>Process Optimization</h3>
        <p>Business process analysis and optimization for maximum efficiency with workflow analysis, automation planning, and efficiency metrics.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cogs"></i></div>
        <h3>Technology Planning</h3>
        <p>Strategic technology infrastructure planning with infrastructure design, vendor evaluation, and budget optimization.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Training & Development</h3>
        <p>Staff training and capability development for technology adoption with technical training, skills development, and change management.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Performance Analytics</h3>
        <p>KPI development and business intelligence for data-driven decisions with dashboard design and ROI analysis.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Compliance & Risk</h3>
        <p>Regulatory compliance and risk management for business protection with compliance audits, risk assessment, and policy development.</p>
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
      <div class="tech-logo-item">Tableau</div>
      <div class="tech-logo-item">Power BI</div>
      <div class="tech-logo-item">Jira</div>
      <div class="tech-logo-item">Confluence</div>
      <div class="tech-logo-item">Miro</div>
      <div class="tech-logo-item">Asana</div>
      <div class="tech-logo-item">ServiceNow</div>
      <div class="tech-logo-item">Salesforce</div>
    </div>
  </div>
</div>

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Consultancy <span>Pricing Packages</span></h2>
      <p class="section-sub">Project-based and retainer options tailored to your needs.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Consult Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1M</span>
          <span class="pricing-period">– 3M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Technology assessment</li>
          <li><i class="fas fa-check"></i> Basic digital roadmap</li>
          <li><i class="fas fa-check"></i> 2 consulting sessions</li>
          <li><i class="fas fa-check"></i> Written report</li>
          <li><i class="fas fa-check"></i> Delivered in 1–2 weeks</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Consult Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 8M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full digital strategy</li>
          <li><i class="fas fa-check"></i> Process optimization</li>
          <li><i class="fas fa-check"></i> 5 consulting sessions</li>
          <li><i class="fas fa-check"></i> Implementation roadmap</li>
          <li><i class="fas fa-check"></i> Delivered in 3–4 weeks</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Consult Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Large organizations</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">8M</span>
          <span class="pricing-period">– 20M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full transformation strategy</li>
          <li><i class="fas fa-check"></i> Dedicated consultant</li>
          <li><i class="fas fa-check"></i> Ongoing advisory (3 months)</li>
          <li><i class="fas fa-check"></i> Training for staff</li>
          <li><i class="fas fa-check"></i> Delivered in 1–2 months</li>
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
      <h2 class="section-title" style="color:white;">Our Consulting <span>Process</span></h2>
      <p class="section-sub">From discovery to implementation — we ensure a structured approach for successful transformation.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Discovery</h4>
        <p>Understanding your business, challenges, and opportunities for tailored solutions.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Analysis</h4>
        <p>Comprehensive analysis of current systems and future requirements.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Strategy</h4>
        <p>Developing actionable strategies and implementation roadmaps for success.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Implementation</h4>
        <p>Guiding successful implementation and measuring business impact.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Transform Your Business <span>With Strategy</span></h2>
    <p>Get a free consultation and detailed proposal within 24 hours. Start your digital transformation journey today.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20ICT%20consultancy." class="btn-whatsapp" target="_blank">
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
