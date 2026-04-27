@extends('layouts.app')

@section('title', 'About Us | ICT Solutions Company in Tanzania')

@section('meta_tags')
  <meta name="description" content="Learn about our ICT company in Tanzania. We provide web development, systems, networks and IT solutions for businesses and organizations.">
  <meta name="keywords" content="about ICT company Tanzania, IT experts Tanzania, software company Dar es Salaam">
  <meta property="og:title" content="About Us | ICT Solutions Company in Tanzania">
  <meta property="og:description" content="Learn about our ICT company in Tanzania. We provide web development, systems, networks and IT solutions for businesses and organizations.">
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
        About Us
      </div>
      <h1 class="hero-title">
        Tanzania's Most Trusted <span>ICT Partner</span>
      </h1>
      <p class="hero-subtitle">
        Based in Arusha — the gateway to Kilimanjaro and Tanzania's safari capital — we understand your market better than anyone. We've helped tour operators, hotels, NGOs, and businesses across Tanzania go digital and grow faster.
      </p>
    </div>
  </div>
</section>

<!-- WHY US -->
<section class="why-us" id="why-us">
  <div class="container">
    <div class="why-grid">
      <div class="why-img-stack">
        <div class="why-img-main">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="TechNova Africa Team" />
        </div>
        <div class="why-img-sec">
          <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=500&q=80" alt="Working on digital solutions" />
        </div>
        <div class="why-img-badge2">
          <div class="why-img-badge2-num">7+</div>
          <div class="why-img-badge2-label">Years of Excellence</div>
        </div>
      </div>
      <div>
        <div class="section-label"><i class="fas fa-star"></i> Why TechNova Africa</div>
        <h2 class="section-title">Tanzania's Most Trusted <span>ICT Partner</span></h2>
        <p style="color:var(--text-mid);line-height:1.75;margin-bottom:8px;">
          Based in Arusha — the gateway to Kilimanjaro and Tanzania's safari capital — we understand your market better than anyone. We've helped tour operators, hotels, NGOs, and businesses across Tanzania go digital and grow faster.
        </p>
        <div class="why-points">
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h5>Deep Local Market Knowledge</h5>
              <p>We know the Tanzanian business landscape — from M-Pesa integrations to Swahili content and TCRA compliance requirements.</p>
            </div>
          </div>
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-bolt"></i></div>
            <div>
              <h5>Fast Delivery, No Shortcuts</h5>
              <p>Most projects delivered in days — not months. We use modern frameworks and agile workflows to move fast without sacrificing quality.</p>
            </div>
          </div>
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-phone-volume"></i></div>
            <div>
              <h5>Real Support in Real Time</h5>
              <p>Call, WhatsApp, or SMS us — we actually answer. Our local team speaks Swahili and English and responds fast.</p>
            </div>
          </div>
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-coins"></i></div>
            <div>
              <h5>Transparent, Competitive Pricing</h5>
              <p>No surprise fees. Our packages are clearly priced in TZS with everything spelled out upfront. We work within Tanzanian budgets.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Simple <span>4-Step Process</span></h2>
      <p class="section-sub">From first call to going live — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Free Consultation</h4>
        <p>We discuss your goals, requirements, and budget. No hidden costs — full transparency from the start.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Custom Proposal</h4>
        <p>You receive a detailed proposal with clear scope, timeline, pricing, and all deliverables.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Our team builds your solution with regular updates, testing, and feedback rounds along the way.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Launch &amp; Support</h4>
        <p>We deploy, train your team, and provide 1 month of free post-launch support and monitoring.</p>
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
      <div class="tech-logo-item">Flutter</div>
      <div class="tech-logo-item">React Native</div>
      <div class="tech-logo-item">WordPress</div>
      <div class="tech-logo-item">Laravel</div>
      <div class="tech-logo-item">Node.js</div>
      <div class="tech-logo-item">React.js</div>
      <div class="tech-logo-item">MySQL</div>
      <div class="tech-logo-item">Firebase</div>
      <div class="tech-logo-item">M-Pesa API</div>
      <div class="tech-logo-item">TigoPesa API</div>
      <div class="tech-logo-item">Google Analytics</div>
      <div class="tech-logo-item">AWS / Cloud</div>
      <div class="tech-logo-item">Cisco / Ubiquiti</div>
      <div class="tech-logo-item">Mikrotik</div>
    </div>
  </div>
</div>

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
    <h2>Ready to Work <span>With Us</span>?</h2>
    <p>Let's discuss how we can help your business grow. Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255700000000?text=Hello%20TechNova%20Africa!%20I'm%20interested%20in%20working%20with%20you." class="btn-whatsapp" target="_blank">
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
