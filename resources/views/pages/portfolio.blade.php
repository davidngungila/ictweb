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
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-briefcase"></i> Projects</div>
      <h2 class="section-title">Featured <span>Projects</span></h2>
      <p class="section-sub">A selection of our recent work showcasing our expertise in web development, mobile apps, and ICT solutions.</p>
    </div>
    <div class="services-grid">
      <div class="service-card" style="padding: 0; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&q=80" alt="Safari Website" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Kilimanjaro Summit Tours</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px;">Complete tour operator website with booking engine, M-Pesa integration, and multi-language support for international visitors.</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Tour Website</span>
        </div>
      </div>
      <div class="service-card" style="padding: 0; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt="E-Commerce" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Tanzania Crafts Store</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px;">Full-featured e-commerce platform with product catalog, shopping cart, and M-Pesa payment integration for local artisans.</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">E-Commerce</span>
        </div>
      </div>
      <div class="service-card" style="padding: 0; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80" alt="Mobile App" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">SwiftDeliver App</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px;">Cross-platform delivery app with real-time GPS tracking, driver management, and TigoPesa payment integration.</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Mobile App</span>
        </div>
      </div>
      <div class="service-card" style="padding: 0; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80" alt="Network Installation" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Serengeti Lodge Network</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px;">Enterprise-grade network installation with multi-AP deployment, guest Wi-Fi, and 24/7 monitoring for luxury safari lodge.</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Networking</span>
        </div>
      </div>
      <div class="service-card" style="padding: 0; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&q=80" alt="Cybersecurity" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Hotel Security Audit</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px;">Comprehensive cybersecurity assessment for hotel chain, including vulnerability scanning, penetration testing, and TCRA compliance.</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Cybersecurity</span>
        </div>
      </div>
      <div class="service-card" style="padding: 0; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80" alt="Corporate Website" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px;">
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Precision Air Supplier</h3>
          <p style="font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px;">Professional corporate website with CMS, blog, and advanced analytics dashboard for aviation supplier company.</p>
          <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Web Development</span>
        </div>
      </div>
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
      <span class="stat-num">7<span>+</span></span>
      <div class="stat-label">Years in Business</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:60%"></div></div>
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
      <a href="https://wa.me/255700000000?text=Hello%20TechNova%20Africa!%20I'm%20interested%20in%20starting%20a%20project." class="btn-whatsapp" target="_blank">
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

@section('additional_scripts')
<script>
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
