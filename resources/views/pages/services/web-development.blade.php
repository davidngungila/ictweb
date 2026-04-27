@extends('layouts.app')

@section('title', 'Web Development Services in Tanzania | Affordable & Professional')

@section('meta_tags')
  <meta name="description" content="Get modern, responsive and SEO-friendly websites in Tanzania. We design business websites that attract customers and grow your brand.">
  <meta name="keywords" content="web development Tanzania, website design Dar es Salaam, business websites Tanzania">
  <meta property="og:title" content="Web Development Services in Tanzania">
  <meta property="og:description" content="Get modern, responsive and SEO-friendly websites in Tanzania. We design business websites that attract customers and grow your brand.">
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
        Web Development
      </div>
      <h1 class="hero-title">
        Custom <span>Web Development</span><br/>
        for Tanzanian Businesses
      </h1>
      <p class="hero-subtitle">
        Professional websites and web applications tailored to your business needs. From simple starter sites to complex e-commerce platforms with full CMS and mobile money payments.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-code"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>Web Development</span> Solutions</h2>
      <p class="section-sub">We build powerful, scalable web applications using modern technologies like Laravel, React, and Vue.js.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shopping-cart"></i></div>
        <h3>E-commerce Solutions</h3>
        <p>Complete online stores with payment gateway integration (M-Pesa, TigoPesa, AzamPesa), inventory management, and order processing systems.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-briefcase"></i></div>
        <h3>Corporate Websites</h3>
        <p>Professional business websites showcasing your brand and services effectively with custom design and SEO optimization.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cogs"></i></div>
        <h3>Web Applications</h3>
        <p>Custom business applications for process automation, data analytics, and API integration to streamline your operations.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fab fa-wordpress"></i></div>
        <h3>CMS Development</h3>
        <p>Content management systems using WordPress or custom CMS solutions for easy website updates and maintenance.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-search"></i></div>
        <h3>SEO Services</h3>
        <p>Search engine optimization to improve your online visibility, including keyword research, on-page optimization, and performance tracking.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
        <h3>UI/UX Design</h3>
        <p>Beautiful, user-friendly interfaces that enhance user experience with responsive design, user testing, and brand integration.</p>
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
      <div class="tech-logo-item">Laravel</div>
      <div class="tech-logo-item">React.js</div>
      <div class="tech-logo-item">Vue.js</div>
      <div class="tech-logo-item">WordPress</div>
      <div class="tech-logo-item">Node.js</div>
      <div class="tech-logo-item">MySQL</div>
      <div class="tech-logo-item">MongoDB</div>
      <div class="tech-logo-item">M-Pesa API</div>
    </div>
  </div>
</div>

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Web Development <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include a free domain + hosting for the first year (worth TZS 150,000), SSL certificate, and 1 month of free support.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Starter</div>
        <div class="pricing-name">Web Starter</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Individuals & small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">400K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 1–5 pages, mobile-responsive</li>
          <li><i class="fas fa-check"></i> Contact form with spam protection</li>
          <li><i class="fas fa-check"></i> WhatsApp button integration</li>
          <li><i class="fas fa-check"></i> Social media links</li>
          <li><i class="fas fa-check"></i> Google Maps location</li>
          <li><i class="fas fa-check"></i> Free domain + hosting (1 year)</li>
          <li><i class="fas fa-check"></i> Delivered in 4–7 days</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Business</div>
        <div class="pricing-name">Web Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing companies</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">800K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 8–15 pages with full CMS</li>
          <li><i class="fas fa-check"></i> Blog with SEO-rich content</li>
          <li><i class="fas fa-check"></i> Advanced analytics dashboard</li>
          <li><i class="fas fa-check"></i> Professional email accounts</li>
          <li><i class="fas fa-check"></i> SSL + full security setup</li>
          <li><i class="fas fa-check"></i> Delivered in 7–12 days</li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">E-Commerce</div>
        <div class="pricing-name">Online Store</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Selling online in Tanzania</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.5M</span>
          <span class="pricing-period">– 2.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 10–20 pages with product catalogue</li>
          <li><i class="fas fa-check"></i> Shopping cart & checkout</li>
          <li><i class="fas fa-check"></i> M-Pesa, TigoPesa & AzamPesa</li>
          <li><i class="fas fa-check"></i> Order management dashboard</li>
          <li><i class="fas fa-check"></i> SMS order confirmations</li>
          <li><i class="fas fa-check"></i> Delivered in 10–15 days</li>
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
      <h2 class="section-title" style="color:white;">Our Web Development <span>Process</span></h2>
      <p class="section-sub">From discovery to deployment — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Discovery</h4>
        <p>Understanding your requirements, goals, and target audience to create the perfect solution strategy.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Design</h4>
        <p>Creating wireframes, mockups, and prototypes to visualize the perfect user experience.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Building your solution using clean code, best practices, and modern technologies.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Launch</h4>
        <p>Deploying your solution and providing ongoing support for optimal performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Build Your <span>Web Solution</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20web%20development." class="btn-whatsapp" target="_blank">
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
