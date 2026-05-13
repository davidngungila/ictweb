@extends('layouts.app')

@section('title', 'Our Portfolio | ICT Projects in Tanzania')

@section('meta_tags')
  <meta name="description" content="View our portfolio of ICT projects in Tanzania including websites, mobile apps, network installations and cybersecurity solutions.">
  <meta name="keywords" content="ICT portfolio Tanzania, web development projects Tanzania, IT projects Dar es Salaam">
  <meta property="og:title" content="Our Portfolio | ICT Projects in Tanzania">
  <meta property="og:description" content="View our portfolio of ICT projects in Tanzania including websites, mobile apps, network installations and cybersecurity solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-N2F56W4HPN');
  </script>
@endsection

@section('content')
@php
  $projects = $projects ?? config('site_content.portfolio_projects', []);
  $portfolioTags = collect($projects)->pluck('tag')->unique()->values();
@endphp
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
        Our Work
      </div>
      <h1 class="hero-title">
        Our <span>Portfolio</span>
      </h1>
      <p class="hero-subtitle">
        Explore our successful projects across Tanzania and East Africa. From tour operator websites to enterprise mobile apps, we deliver results.
      </p>
    </div>
  </div>
</section>

<!-- PORTFOLIO GRID -->
<section class="services" style="background: var(--off-white); padding-bottom: 48px;">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-briefcase"></i> Projects</div>
      <h2 class="section-title">Featured <span>Projects</span></h2>
      <p class="section-sub">Deep dives across safari tech, commerce, mobility, secure networks, and regulated industries—all engineered for East African realities.</p>
    </div>

    <div style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom: 26px;" id="portfolio-filters">
      <button type="button" class="tab-btn active" data-tag="all">All work</button>
      @foreach($portfolioTags as $tag)
        <button type="button" class="tab-btn" data-tag="{{ $tag }}">{{ $tag }}</button>
      @endforeach
    </div>

    <div class="services-grid" id="portfolio-grid">
      @foreach($projects as $project)
      <article class="service-card portfolio-item" data-tag="{{ $project['tag'] }}" style="padding: 0; overflow: hidden; display:flex; flex-direction:column;">
        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex:1; display:flex; flex-direction:column;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">{{ $project['title'] }}</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex:1;">{{ $project['excerpt'] }}</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">{{ $project['tag'] }}</span>
          <a href="{{ route('portfolio.show', $project['slug']) }}" style="margin-top: 18px; display: inline-flex; align-items: center; gap: 8px; font-weight: 700; color: var(--accent); text-decoration: none;">
            View case study <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="stats-grid">
    <div class="stat-item">
      <span class="stat-num">500<span>+</span></span>
      <div class="stat-label">Projects Completed</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:90%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">200<span>+</span></span>
      <div class="stat-label">Active Clients</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:75%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">98<span>%</span></span>
      <div class="stat-label">Client Satisfaction Rate</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:98%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">24<span>/7</span></span>
      <div class="stat-label">Support Availability</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:100%"></div></div>
    </div>
  </div>
</div>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Start <span>Your Project</span>?</h2>
    <p>Let's build something amazing together. Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20starting%20a%20project." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection

@section('additional_scripts')
<script>
  document.querySelectorAll('#portfolio-filters .tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      document.querySelectorAll('#portfolio-filters .tab-btn').forEach(function (b) { b.classList.remove('active'); });
      this.classList.add('active');
      var tag = this.getAttribute('data-tag');
      document.querySelectorAll('#portfolio-grid .portfolio-item').forEach(function (card) {
        var matches = tag === 'all' || card.getAttribute('data-tag') === tag;
        card.style.display = matches ? '' : 'none';
      });
    });
  });

  // Intersection Observer for count-up animation
  const statNums = document.querySelectorAll('.stat-num');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animation = 'fadeInUp 0.6s ease both';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  statNums.forEach(n => observer.observe(n));
</script>
@endsection
