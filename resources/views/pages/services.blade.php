@extends('layouts.app')

@section('title', 'ICT Services in Tanzania | Web, Apps, Network & IT Solutions')

@section('meta_tags')
  <meta name="description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta name="keywords" content="ICT services Tanzania, web development Tanzania, IT solutions Dar es Salaam, technology services Tanzania">
  <meta property="og:title" content="ICT Services in Tanzania">
  <meta property="og:description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-N2F56W4HPN');
  </script>
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 60vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="justify-content: center; text-align: center;">
    <div class="hero-left" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <div class="hero-badge">
        <span class="dot"></span>
        What We Offer
      </div>
      <h1 class="hero-title">
        Comprehensive <span>ICT Services</span><br/>
        Built for East Africa
      </h1>
      <p class="hero-subtitle">
        We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.
      </p>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust-strip">
  <div class="trust-strip-inner">
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-mobile-alt"></i> Online Payment Integrated</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fab fa-whatsapp"></i> WhatsApp Business Support</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-globe-africa"></i> Serving All Tanzania</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-headset"></i> 24/7 Technical Support</div>
    <div class="trust-divider"></div>
  </div>
</div>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-layer-group"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>ICT Services</span><br/>Built for East Africa</h2>
      <p class="section-sub">We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.</p>
    </div>
    <div class="services-grid">
      <div class="service-card" id="web-development">
        <div class="service-card-image">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Web Development" />
          <div class="service-badge">Popular</div>
        </div>
        <div class="service-card-content">
          <h3>Web Development</h3>
          <p>Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS and integrated mobile money payments.</p>
          <div class="service-meta">
            <span class="service-price">From TZS 400,000</span>
            <div class="service-tags">
              <span>E-commerce</span>
              <span>CMS</span>
            </div>
          </div>
          <div class="service-actions">
            <a href="{{ route('services.web-development') }}" class="btn-outline">Learn More</a>
            <a href="{{ \App\Support\PackagePricing::wizardUrl(1) }}" class="btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="service-card" id="mobile-apps">
        <div class="service-card-image">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" alt="Mobile App Development" />
        </div>
        <div class="service-card-content">
          <h3>Mobile App Development</h3>
          <p>Cross-platform Android & iOS apps built with Flutter and React Native. From informational apps to full-featured booking platforms.</p>
          <div class="service-meta">
            <span class="service-price">From TZS 3,000,000</span>
            <div class="service-tags">
              <span>Android</span>
              <span>iOS</span>
            </div>
          </div>
          <div class="service-actions">
            <a href="{{ route('services.mobile-app-development') }}" class="btn-outline">Learn More</a>
            <a href="{{ \App\Support\PackagePricing::wizardUrl(2) }}" class="btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="service-card" id="networking">
        <div class="service-card-image">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" alt="Network Installation" />
        </div>
        <div class="service-card-content">
          <h3>Network Installation</h3>
          <p>Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, and security configuration.</p>
          <div class="service-meta">
            <span class="service-price">From TZS 300,000</span>
            <div class="service-tags">
              <span>Wi-Fi</span>
              <span>Infrastructure</span>
            </div>
          </div>
          <div class="service-actions">
            <a href="{{ route('services.network-installation') }}" class="btn-outline">Learn More</a>
            <a href="{{ \App\Support\PackagePricing::wizardUrl(3) }}" class="btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="service-card" id="cybersecurity">
        <div class="service-card-image">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" alt="Cybersecurity" />
        </div>
        <div class="service-card-content">
          <h3>Cybersecurity</h3>
          <p>Protect your business with comprehensive vulnerability assessments, 24/7 monitoring, and TCRA & GDPR compliance support.</p>
          <div class="service-meta">
            <span class="service-price">From TZS 300,000</span>
            <div class="service-tags">
              <span>Security</span>
              <span>Compliance</span>
            </div>
          </div>
          <div class="service-actions">
            <a href="{{ route('services.cybersecurity') }}" class="btn-outline">Learn More</a>
            <a href="{{ \App\Support\PackagePricing::wizardUrl(4) }}" class="btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="service-card" id="it-support">
        <div class="service-card-image">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" alt="IT Support" />
        </div>
        <div class="service-card-content">
          <h3>IT Support</h3>
          <p>Reliable ongoing IT support from remote troubleshooting to on-site service. Monthly retainer plans with guaranteed SLAs.</p>
          <div class="service-meta">
            <span class="service-price">From TZS 150,000/mo</span>
            <div class="service-tags">
              <span>24/7 Support</span>
              <span>Maintenance</span>
            </div>
          </div>
          <div class="service-actions">
            <a href="{{ route('services.it-support') }}" class="btn-outline">Learn More</a>
            <a href="{{ \App\Support\PackagePricing::wizardUrl(5) }}" class="btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="service-card" id="consultancy">
        <div class="service-card-image">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" alt="ICT Consultancy" />
        </div>
        <div class="service-card-content">
          <h3>ICT Consultancy</h3>
          <p>Strategic digital transformation guidance. We audit your existing infrastructure and build technology roadmaps.</p>
          <div class="service-meta">
            <span class="service-price">From TZS 500,000</span>
            <div class="service-tags">
              <span>Strategy</span>
              <span>Audit</span>
            </div>
          </div>
          <div class="service-actions">
            <a href="{{ route('services.ict-consultancy') }}" class="btn-outline">Learn More</a>
            <a href="{{ \App\Support\PackagePricing::wizardUrl(6) }}" class="btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    padding: 40px 0;
  }

  .service-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #f0f0f0;
    display: flex;
    flex-direction: column;
  }

  .service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-color: var(--accent);
  }

  .service-card-image {
    position: relative;
    height: 220px;
    overflow: hidden;
  }

  .service-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .service-card:hover .service-card-image img {
    transform: scale(1.1);
  }

  .service-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--accent);
    color: white;
    padding: 5px 15px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  }

  .service-card-content {
    padding: 30px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }

  .service-card-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: var(--navy);
  }

  .service-card-content p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
  }

  .service-meta {
    margin-bottom: 25px;
  }

  .service-price {
    display: block;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--accent);
    margin-bottom: 10px;
  }

  .service-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }

  .service-tags span {
    background: #f0f7ff;
    color: #3182ce;
    padding: 4px 12px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 500;
  }

  .service-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
  }

  .btn-outline {
    border: 2px solid var(--accent);
    color: var(--accent);
    padding: 12px;
    border-radius: 12px;
    text-align: center;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
  }

  .btn-outline:hover {
    background: var(--accent);
    color: white;
  }

  .btn-primary {
    background: var(--accent);
    color: white;
    padding: 12px;
    border-radius: 12px;
    text-align: center;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
    border: 2px solid var(--accent);
  }

  .btn-primary:hover {
    background: var(--accent-bright);
    border-color: var(--accent-bright);
    transform: translateY(-2px);
  }
</style>
  </div>
</section>

<!-- EXTRA ADD-ON SERVICES -->
<section class="extra-addons" style="padding: 80px 0; background: #f8fafc;">
  <div class="container">
    <div class="section-header" style="text-align:center; max-width:800px; margin:0 auto 60px;">
      <div class="section-label"><i class="fas fa-rocket"></i> Extra Add-On Services</div>
      <h2 style="font-size:2.5rem; margin-bottom:20px; color: var(--navy);">Supercharge Your <span>Project</span></h2>
      <p style="color: #666; font-size: 1.1rem;">Enhance any package with these additional features tailored to your business needs.</p>
    </div>

    <div class="addons-container">
      @foreach(\App\Support\PackagePricing::addonCatalog() as $group)
        <div class="addon-group">
          <h3 class="addon-group-title">{{ $group['heading'] }}</h3>
          <div class="addon-grid-new">
            @foreach($group['items'] as $item)
              <div class="addon-card-new">
                <div class="addon-icon-circle">
                  <i class="fas fa-check"></i>
                </div>
                <div class="addon-info-new">
                  <h4>{{ $item['name'] }}</h4>
                  <p>{{ $item['desc'] }}</p>
                  <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                    <span class="addon-price-new">{{ $item['price_label'] }}</span>
                    <a href="{{ route('package.selection', ['addon' => $item['slug']]) }}" class="btn-primary" style="padding: 6px 15px; font-size: 0.85rem; border-radius: 8px;">Book Now</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>

    <div style="text-align: center; margin-top: 60px;">
      <a href="{{ route('package.selection') }}" class="btn-primary-large">
        Get Started & Choose Add-Ons <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
      </a>
    </div>
  </div>
</section>

<style>
  .addons-container {
    display: flex;
    flex-direction: column;
    gap: 50px;
  }

  .addon-group-title {
    font-size: 1.6rem;
    color: var(--navy);
    margin-bottom: 25px;
    padding-bottom: 10px;
    border-bottom: 3px solid var(--accent);
    display: inline-block;
  }

  .addon-grid-new {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
  }

  .addon-card-new {
    background: white;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    border: 1px solid #edf2f7;
    display: flex;
    gap: 15px;
    transition: all 0.3s ease;
  }

  .addon-card-new:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    border-color: var(--accent);
  }

  .addon-icon-circle {
    width: 40px;
    height: 40px;
    background: #f0f7ff;
    color: var(--accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 0.9rem;
  }

  .addon-info-new h4 {
    font-size: 1.1rem;
    margin-bottom: 8px;
    color: var(--navy);
  }

  .addon-info-new p {
    font-size: 0.9rem;
    color: #718096;
    line-height: 1.5;
    margin-bottom: 12px;
  }

  .addon-price-new {
    display: block;
    font-weight: 700;
    color: var(--accent);
    font-size: 1rem;
  }

  .btn-primary-large {
    background: var(--accent);
    color: white;
    padding: 20px 45px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.2rem;
    text-decoration: none;
    display: inline-block;
    box-shadow: 0 10px 25px rgba(0,102,204,0.3);
    transition: all 0.3s;
  }

  .btn-primary-large:hover {
    background: var(--accent-bright);
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(0,102,204,0.4);
  }
</style>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to <span>Get Started</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
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
