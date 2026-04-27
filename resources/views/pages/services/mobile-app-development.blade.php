@extends('layouts.app')

@section('title', 'Mobile App Development in Tanzania | Android & iOS Apps')

@section('meta_tags')
  <meta name="description" content="We build powerful mobile apps in Tanzania for businesses. Android and iOS app development with modern features and secure systems.">
  <meta name="keywords" content="mobile app development Tanzania, android apps Tanzania, app developers Dar es Salaam">
  <meta property="og:title" content="Mobile App Development in Tanzania">
  <meta property="og:description" content="We build powerful mobile apps in Tanzania for businesses. Android and iOS app development with modern features and secure systems.">
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
        Mobile App Development
      </div>
      <h1 class="hero-title">
        Cross-Platform <span>Mobile Apps</span><br/>
        Built for Tanzania
      </h1>
      <p class="hero-subtitle">
        Native-performance Android and iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-mobile-screen-button"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>Mobile App</span> Solutions</h2>
      <p class="section-sub">We build powerful, scalable mobile applications using Flutter and React Native for iOS and Android platforms.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shopping-bag"></i></div>
        <h3>E-commerce Apps</h3>
        <p>Mobile shopping experiences with M-Pesa, TigoPesa, and AzamPesa payment integration, inventory sync, and push notifications.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-briefcase"></i></div>
        <h3>Business Apps</h3>
        <p>Custom solutions for process automation, team collaboration, real-time sync, and data analytics for your enterprise needs.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-map-marked-alt"></i></div>
        <h3>Delivery & Tracking</h3>
        <p>GPS-enabled applications with real-time tracking, geofencing, route optimization, and driver management systems.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
        <h3>Healthcare Apps</h3>
        <p>Medical solutions with patient management, appointment booking, health tracking, and secure telemedicine features.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Educational Apps</h3>
        <p>Interactive learning platforms with video content, progress tracking, offline access, and engaging course delivery.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-gamepad"></i></div>
        <h3>Gaming & Entertainment</h3>
        <p>Engaging mobile games with stunning graphics, multiplayer support, leaderboards, and in-app purchase systems.</p>
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
      <div class="tech-logo-item">Firebase</div>
      <div class="tech-logo-item">Google Maps</div>
      <div class="tech-logo-item">Swift</div>
      <div class="tech-logo-item">Kotlin</div>
      <div class="tech-logo-item">M-Pesa API</div>
      <div class="tech-logo-item">TigoPesa API</div>
    </div>
  </div>
</div>

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Mobile App <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include App Store & Google Play submission, 1 month of free support, and bug fixes.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">App Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Android + iOS informational apps</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 6M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Flutter / React Native (Android + iOS)</li>
          <li><i class="fas fa-check"></i> Information, gallery, maps, contact</li>
          <li><i class="fas fa-check"></i> SMS push notifications</li>
          <li><i class="fas fa-check"></i> App Store & Google Play submission</li>
          <li><i class="fas fa-check"></i> Analytics dashboard</li>
          <li><i class="fas fa-check"></i> Delivered in 4–6 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">App Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Full-featured booking & payments</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">6M</span>
          <span class="pricing-period">– 12M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> All Basic features included</li>
          <li><i class="fas fa-check"></i> User accounts & profiles</li>
          <li><i class="fas fa-check"></i> Booking & reservation system</li>
          <li><i class="fas fa-check"></i> Mobile money payment integration</li>
          <li><i class="fas fa-check"></i> Push notifications</li>
          <li><i class="fas fa-check"></i> Delivered in 6–10 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">App Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Custom multi-role platforms</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">12M</span>
          <span class="pricing-period">– 25M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-role: admin, driver, customer</li>
          <li><i class="fas fa-check"></i> Real-time GPS tracking</li>
          <li><i class="fas fa-check"></i> API integrations (3rd party)</li>
          <li><i class="fas fa-check"></i> Custom backend & dashboard</li>
          <li><i class="fas fa-check"></i> Full white-label branding</li>
          <li><i class="fas fa-check"></i> Delivered in 10–14 weeks</li>
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
      <h2 class="section-title" style="color:white;">Our Mobile App <span>Development Process</span></h2>
      <p class="section-sub">From strategy to launch — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Strategy</h4>
        <p>Market research, competitor analysis, and feature planning for app success.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>UI/UX Design</h4>
        <p>Creating intuitive interfaces and delightful user experiences.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Clean, efficient code with comprehensive testing and quality assurance.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Launch & Support</h4>
        <p>App store deployment and ongoing maintenance for optimal performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Build Your <span>Mobile App</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20mobile%20app%20development." class="btn-whatsapp" target="_blank">
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
