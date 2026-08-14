@extends('layouts.app')

@section('title', 'Our Companies | Jezdan Group - Business, Finance, Technology & Advisory')

@section('meta_tags')
  <meta name="description" content="Jezdan Group is a diversified business group spanning business & investment, accounting & financial services, technology & digital innovation, and business advisory & consulting.">
  <meta name="keywords" content="Jezdan Group companies, business group Tanzania, investment Tanzania, technology company Tanzania">
  <meta property="og:title" content="Our Companies | Jezdan Group">
  <meta property="og:description" content="A diversified business group providing business, financial, technology, and strategic solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 60vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 820px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Our Companies
      </div>
      <h1 class="hero-title">
        The Companies Behind <span>Jezdan Group</span>
      </h1>
      <p class="hero-subtitle">
        Jezdan Group is a diversified business group built on integrity, innovation, and long-term value. Each company works together to help organizations grow, operate efficiently, and create lasting impact.
      </p>
    </div>
  </div>
</section>

<!-- COMPANIES GRID -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-building"></i> Group Companies</div>
      <h2 class="section-title">One Group. <span>Four Focus Areas.</span></h2>
      <p class="section-sub">Explore the companies that make up Jezdan Group and the solutions they deliver.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Business &amp; Investment</h3>
        <p>Strategic investments and business ventures that create sustainable value. We identify opportunities, build partnerships, and support responsible growth in promising sectors.</p>
        <a href="{{ route('contact') }}" class="service-link">Partner With Us <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-calculator"></i></div>
        <h3>Accounting &amp; Financial Services</h3>
        <p>Professional bookkeeping, financial reporting, payroll, tax support, and financial advisory that help businesses keep accurate records and make confident decisions.</p>
        <a href="{{ route('services.accounting') }}" class="service-link">Accounting Services <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-microchip"></i></div>
        <h3>Technology &amp; Digital Innovation</h3>
        <p>Software development, business systems, and digital transformation that improve operations, automate processes, and create smarter ways of working.</p>
        <a href="{{ route('technology') }}" class="service-link">Technology Solutions <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-handshake"></i></div>
        <h3>Business Advisory &amp; Consulting</h3>
        <p>Practical advisory services helping organizations improve performance, manage resources, solve challenges, and plan for sustainable growth.</p>
        <a href="{{ route('services') }}" class="service-link">Our Services <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- WHY GROUP -->
<section class="services" style="background: var(--white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-users"></i> Why Jezdan Group</div>
      <h2 class="section-title">A Partner Across <span>Every Stage of Growth</span></h2>
      <p class="section-sub">From your first set of accounts to enterprise technology and long-term investment, one group supports your entire journey.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-layer-group"></i></div>
        <h3>Integrated Solutions</h3>
        <p>Business, finance, technology, and strategy under one roof — so decisions stay aligned and nothing falls through the cracks.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
        <h3>Trust &amp; Transparency</h3>
        <p>We build long-term relationships based on clear communication, honest advice, and consistent delivery.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-earth-africa"></i></div>
        <h3>Built for Africa</h3>
        <p>Deep understanding of local markets, regulation, and opportunity — from Tanzania and across the continent.</p>
      </div>
    </div>
  </div>
</section>
@endsection
