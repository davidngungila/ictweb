@extends('layouts.app')

@section('title', 'ICT Consultancy Services in Tanzania | Digital Transformation')

@section('meta_tags')
  <meta name="description" content="Expert ICT consultancy in Tanzania. We help businesses improve operations with technology, systems and digital transformation strategies.">
  <meta name="keywords" content="ICT consultancy Tanzania, IT consulting Dar es Salaam, digital transformation Tanzania">
  <meta property="og:title" content="ICT Consultancy Services in Tanzania">
  <meta property="og:description" content="Expert ICT consultancy in Tanzania. We help businesses improve operations with technology, systems and digital transformation strategies.">
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
        ICT Consultancy
      </div>
      <h1 class="hero-title">
        Transform Your Business <span>With Strategy</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Strategic technology consulting that drives digital innovation, operational efficiency, and sustainable growth for Tanzanian businesses. Expert guidance for your digital transformation journey.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
@php
  $serviceOffers = [
    ['icon' => 'fa-sitemap', 'title' => 'Digital Strategy', 'desc' => 'Comprehensive digital transformation roadmap with technology assessment, digital roadmap, and competitive analysis.'],
    ['icon' => 'fa-chart-pie', 'title' => 'Process Optimization', 'desc' => 'Business process analysis and optimization for maximum efficiency with workflow analysis, automation planning, and efficiency metrics.'],
    ['icon' => 'fa-cogs', 'title' => 'Technology Planning', 'desc' => 'Strategic technology infrastructure planning with infrastructure design, vendor evaluation, and budget optimization.'],
    ['icon' => 'fa-graduation-cap', 'title' => 'Training & Development', 'desc' => 'Staff training and capability development for technology adoption with technical training, skills development, and change management.'],
    ['icon' => 'fa-chart-line', 'title' => 'Performance Analytics', 'desc' => 'KPI development and business intelligence for data-driven decisions with dashboard design and ROI analysis.'],
    ['icon' => 'fa-shield-alt', 'title' => 'Compliance & Risk', 'desc' => 'Regulatory compliance and risk management for business protection with compliance audits, risk assessment, and policy development.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-lightbulb',
  'title'     => 'Comprehensive <span>ICT Consultancy</span> Solutions',
  'sub'       => 'We help Tanzanian businesses leverage technology for competitive advantage and sustainable growth.',
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

<!-- WHY CHOOSE US + WHAT'S INCLUDED -->
@php
  $benefits = [
    ['icon' => 'fa-compass', 'title' => 'Technology Roadmaps', 'desc' => 'Clear, budgeted plans that align every IT investment with your actual business goals.'],
    ['icon' => 'fa-coins', 'title' => 'Cost Optimisation', 'desc' => 'We audit licences, infrastructure, and vendors to cut waste without cutting capability.'],
    ['icon' => 'fa-users', 'title' => 'Vendor-Neutral Advice', 'desc' => 'Independent recommendations — we advise what is best for you, not what pays us the most margin.'],
    ['icon' => 'fa-chalkboard-user', 'title' => 'Capability Building', 'desc' => 'Training and knowledge transfer so your team can run new systems with confidence.'],
  ];
  $included = [
    'Initial consultation & needs assessment',
    'IT infrastructure audit',
    'Technology strategy & roadmap',
    'Budget planning & cost analysis',
    'Vendor evaluation & selection',
    'Project management support',
    'Policy & documentation development',
    'Team training sessions',
  ];
@endphp
@include('partials.section-service-details', [
  'whyTitle'  => 'Why Businesses Choose Our <span>ICT Consultancy</span>',
  'whySub'    => 'Technology decisions are business decisions. We help you choose, plan, and implement with confidence.',
  'benefits'  => $benefits,
  'incTitle'  => 'Included in <span>Every Consultancy Engagement</span>',
  'incSub'     => 'Engagements range from one-off assessments to ongoing advisory — and always include:',
  'included'  => $included,
])

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
