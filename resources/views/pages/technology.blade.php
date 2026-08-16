@extends('layouts.app')

@section('title', 'Technology & Digital Innovation | Jezdan Group Tanzania')

@section('meta_tags')
  <meta name="description" content="Technology and digital innovation solutions from Jezdan Group - software development, business systems, digital transformation, and automation that create smarter ways of working.">
  <meta name="keywords" content="technology Tanzania, digital transformation Tanzania, software development Tanzania, business systems Tanzania">
  <meta property="og:title" content="Technology & Digital Innovation | Jezdan Group">
  <meta property="og:description" content="Technology that transforms business. Digital solutions, software development, and business systems for smarter ways of working.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 46vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 820px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Technology &amp; Digital Innovation
      </div>
      <h1 class="hero-title">
        Technology That <span>Transforms Business</span>
      </h1>
      <p class="hero-subtitle">
        We leverage technology and digital innovation to improve business operations, automate processes, connect people, and create smarter ways of working.
      </p>
    </div>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-microchip"></i> What We Do</div>
      <h2 class="section-title">Digital Solutions for <span>Modern Business</span></h2>
      <p class="section-sub">Practical technology that connects to real business outcomes.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-code"></i></div>
        <h3>Software Development</h3>
        <p>Custom websites, web applications, and business software built around the way your business actually works.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
        <h3>Business Systems</h3>
        <p>Management systems, portals, and automation tools that replace manual processes and free up your team.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-arrows-rotate"></i></div>
        <h3>Digital Transformation</h3>
        <p>Step-by-step modernization of your operations, from digitizing records to rethinking how your business runs.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-plug"></i></div>
        <h3>Automation &amp; Integration</h3>
        <p>Connecting your tools and automating repetitive work so your team focuses on what matters.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cloud"></i></div>
        <h3>Cloud &amp; Digital Infrastructure</h3>
        <p>Reliable hosting, email, data backup, and infrastructure that keeps your business online and secure.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
        <h3>Security &amp; Compliance</h3>
        <p>Protection for your systems and data, aligned with local regulation and industry best practice.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="services" style="background: var(--white);">
  <div class="container" style="text-align: center; max-width: 760px;">
    <h2 class="section-title">Let's Build Something <span>Smarter</span></h2>
    <p class="section-sub" style="margin-bottom: 30px;">Discover how technology can improve your operations and create new opportunities.</p>
    <a href="{{ route('services') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> Our Services</a>
  </div>
</section>
@endsection
