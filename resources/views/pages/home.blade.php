@extends('layouts.app')

@section('title', 'ICT Company in Tanzania | Web, Apps, Network & IT Support')

@section('meta_tags')

    <!-- Primary SEO -->
    <meta name="title" content="Jezdan Technology | Web Development, Mobile Apps & ICT Solutions Tanzania">

    <meta name="description"
        content="Jezdan Technology is a leading ICT company in Tanzania offering professional web development, mobile app development, cybersecurity, network installation, CCTV systems, IT support, cloud services, payment integration, and digital transformation solutions for businesses across Tanzania and East Africa.">

    <meta name="keywords"
        content="ICT Company Tanzania, Web Development Tanzania, Website Design Tanzania, Mobile App Development Tanzania, Cybersecurity Tanzania, CCTV Installation Tanzania, Network Installation Tanzania, IT Support Tanzania, Software Company Tanzania, SEO Tanzania, ICT Consultancy Tanzania, Business Website Tanzania, Safari Website Development, Tour Operator Website Tanzania, Moshi ICT Company, Kilimanjaro Web Design">

    <meta name="author" content="Jezdan Technology">

    <meta name="robots" content="index, follow">

    <meta name="language" content="English">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:title"
        content="Jezdan Technology | Web Development & ICT Solutions Tanzania">

    <meta property="og:description"
        content="Professional ICT services in Tanzania including websites, mobile apps, cybersecurity, CCTV systems, networking, cloud solutions, and business automation.">

    <meta property="og:type" content="website">

    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:image" content="{{ asset('logo.png') }}">

    <meta property="og:site_name" content="Jezdan Technology">

    <meta property="og:locale" content="en_US">

    <!-- Twitter SEO -->
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title"
        content="Jezdan Technology | ICT Solutions Tanzania">

    <meta name="twitter:description"
        content="Leading ICT company in Tanzania offering web development, mobile apps, networking, cybersecurity, CCTV systems, and IT support services.">

    <meta name="twitter:image" content="{{ asset('logo.png') }}">

    <!-- Local SEO -->
    <meta name="geo.region" content="TZ">

    <meta name="geo.placename" content="Moshi, Kilimanjaro, Tanzania">

    <meta name="geo.position" content="-3.3349;37.3404">

    <meta name="ICBM" content="-3.3349, 37.3404">

    <!-- Contact SEO -->
    <meta name="telephone" content="+255685847002">

    <meta name="email" content="info@jezdantech.com">

    <!-- Theme -->
    <meta name="theme-color" content="#062B4D">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@endsection










@section('content')

<!-- JEZDAN GROUP HERO SLIDER -->
<section class="jezdan-hero" id="home">
  <div class="jezdan-hero-slider swiper">
    <div class="swiper-wrapper">

      <!-- SLIDE 1 — JEZDAN GROUP -->
      <div class="swiper-slide">
        <div class="hero-image" style="background-image:url('https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-9">
              <div class="hero-content">
                <div class="slide-tag">Jezdan Group</div>
                <h1 class="slide-title">Building Businesses.<br/><span>Creating Value.</span><br/>Shaping the Future.</h1>
                <p class="slide-desc">Jezdan Group brings together business, technology, accounting, investment, and strategic services to help organizations grow, operate efficiently, and create lasting value.</p>
                <div class="slide-actions">
                  <a href="{{ route('home') }}" class="btn-primary"><i class="fas fa-arrow-right"></i> Discover Jezdan Group</a>
                  <a href="{{ route('companies') }}" class="btn-outline"><i class="fas fa-building"></i> Our Companies</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 — ACCOUNTING & FINANCIAL SERVICES -->
      <div class="swiper-slide">
        <div class="hero-image" style="background-image:url('https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-9">
              <div class="hero-content">
                <div class="slide-tag">Accounting &amp; Financial Services</div>
                <h1 class="slide-title">Accurate Numbers.<br/><span>Better Decisions.</span><br/>Stronger Businesses.</h1>
                <p class="slide-desc">Professional accounting and financial services that help businesses maintain accurate records, understand their financial position, improve compliance, and make informed decisions.</p>
                <div class="slide-actions">
                  <a href="{{ route('services.accounting') }}" class="btn-primary"><i class="fas fa-calculator"></i> Accounting Services</a>
                  <a href="{{ route('contact') }}" class="btn-outline"><i class="fas fa-envelope"></i> Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 — BUSINESS & INVESTMENT -->
      <div class="swiper-slide">
        <div class="hero-image" style="background-image:url('https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-9">
              <div class="hero-content">
                <div class="slide-tag">Business &amp; Investment</div>
                <h1 class="slide-title">Growing Businesses.<br/>Unlocking <span>Opportunities.</span></h1>
                <p class="slide-desc">We support businesses and investment opportunities through strategic thinking, responsible growth, and solutions designed to create sustainable long-term value.</p>
                <div class="slide-actions">
                  <a href="{{ route('companies') }}" class="btn-primary"><i class="fas fa-chart-line"></i> Explore Our Businesses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 4 — TECHNOLOGY & INNOVATION -->
      <div class="swiper-slide">
        <div class="hero-image" style="background-image:url('https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-9">
              <div class="hero-content">
                <div class="slide-tag">Technology &amp; Innovation</div>
                <h1 class="slide-title">Technology That<br/><span>Transforms</span> Business.</h1>
                <p class="slide-desc">We leverage technology and digital innovation to improve business operations, automate processes, connect people, and create smarter ways of working.</p>
                <div class="slide-actions">
                  <a href="{{ route('technology') }}" class="btn-primary"><i class="fas fa-microchip"></i> Technology Solutions</a>
                  <a href="{{ route('services') }}" class="btn-outline"><i class="fas fa-layer-group"></i> Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 5 — BUSINESS ADVISORY & CONSULTING -->
      <div class="swiper-slide">
        <div class="hero-image" style="background-image:url('https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-9">
              <div class="hero-content">
                <div class="slide-tag">Business Advisory &amp; Consulting</div>
                <h1 class="slide-title">From Strategy<br/>To <span>Sustainable</span> Growth.</h1>
                <p class="slide-desc">Practical advisory and professional services helping organizations improve performance, manage resources, solve business challenges, and achieve sustainable growth.</p>
                <div class="slide-actions">
                  <a href="{{ route('services') }}" class="btn-primary"><i class="fas fa-compass"></i> Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="container">
    <div class="section-header svc-header">
      <div class="svc-header-tag"><i class="fas fa-layer-group"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>ICT Services</span><br/>Built for East Africa</h2>
      <p class="section-sub">We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.</p>
    </div>
    <div class="svc-grid">
      <div class="reveal svc-reveal" style="--d:0s;">
        <article class="svc-card">
          <div class="svc-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Web Development" />
            <span class="svc-card-num">01</span>
            <div class="svc-card-icon"><i class="fas fa-code"></i></div>
          </div>
          <div class="svc-card-body">
            <h3>Web Development</h3>
            <p>Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS, product management, and integrated mobile money payments.</p>
            <a href="{{ route('services.web-development') }}" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
      <div class="reveal svc-reveal" style="--d:90ms;">
        <article class="svc-card">
          <div class="svc-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" alt="Mobile App Development" />
            <span class="svc-card-num">02</span>
            <div class="svc-card-icon"><i class="fas fa-mobile-screen-button"></i></div>
          </div>
          <div class="svc-card-body">
            <h3>Mobile App Development</h3>
            <p>Cross-platform Android &amp; iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.</p>
            <a href="{{ route('services.mobile-app-development') }}" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
      <div class="reveal svc-reveal" style="--d:180ms;">
        <article class="svc-card">
          <div class="svc-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" alt="Network Installation" />
            <span class="svc-card-num">03</span>
            <div class="svc-card-icon"><i class="fas fa-network-wired"></i></div>
          </div>
          <div class="svc-card-body">
            <h3>Network Installation</h3>
            <p>Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, VLANs, guest Wi-Fi, security configuration, and performance optimisation.</p>
            <a href="{{ route('services.network-installation') }}" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>


<!-- PORTFOLIO -->
<section class="portfolio-home" id="portfolio" style="background: #fff;">
  <div class="container">
    <div class="section-header svc-header">
      <div class="svc-header-tag"><i class="fas fa-briefcase"></i> Our Work</div>
      <h2 class="section-title">Featured <span>Projects</span></h2>
      <p class="section-sub">Explore our track record of delivering robust, scalable, and user-centric digital products that drive business growth across Tanzania and beyond.</p>
    </div>
    <div class="svc-grid">
      @foreach(array_slice(config('site_content.portfolio_projects', []), 0, 3) as $project)
      <div class="reveal svc-reveal" style="--d:{{ $loop->index * 90 }}ms;">
        <article class="svc-card">
          <div class="svc-card-media">
            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" />
            <span class="svc-card-num" style="right: auto; left: 16px;">{{ $project['tag'] }}</span>
          </div>
          <div class="svc-card-body">
            <h3>{{ $project['title'] }}</h3>
            <p>{{ $project['excerpt'] }}</p>
            <a href="{{ route('portfolio.show', $project['slug']) }}" class="svc-link">View Case Study <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
      @endforeach
    </div>
    <div style="text-align: center; margin-top: 52px;">
      <a href="{{ route('portfolio') }}" class="btn-primary"><i class="fas fa-briefcase"></i> View All Projects</a>
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

<!-- WHY US -->
<section class="why-us" id="why-us">
  <div class="container">
    <div class="why-grid">
      <div class="why-img-stack">
        <div class="why-img-main">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg" alt="TechNova Africa Team" />
        </div>
        <div class="why-img-sec">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Working on digital solutions" />
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
              <p>No surprise fees. We provide detailed, itemized quotes upfront with everything spelled out clearly. We work within Tanzanian budgets.</p>
            </div>
          </div>
        </div>
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

<!-- ADD-ONS -->
<section class="extras" id="extras" style="padding: 100px 0; background: #f8fafc;">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 800px; margin: 0 auto 60px;">
      <div class="section-label"><i class="fas fa-rocket"></i> Optional Add-On Services</div>
      <h2 class="section-title">Supercharge Your <span>Project</span></h2>
      <p class="section-sub">Enhance any package with these additional features tailored to your business needs.</p>
    </div>
    
    <div class="addons-grid-home" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
      @foreach(\App\Support\PackagePricing::addonCatalog() as $group)
        @foreach(array_slice($group['items'], 0, 2) as $item)
          <div class="addon-card-home" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #edf2f7; transition: all 0.3s;">
            <div style="width: 50px; height: 50px; background: #f0f7ff; color: var(--accent); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; font-size: 1.2rem;">
              <i class="fas fa-plus"></i>
            </div>
            <h3 style="font-size: 1.25rem; margin-bottom: 12px; color: var(--navy);">{{ $item['name'] }}</h3>
            <p style="font-size: 0.95rem; color: #666; line-height: 1.6; margin-bottom: 20px;">{{ $item['desc'] }}</p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="font-weight: 700; color: var(--accent);">{{ $item['price_label'] }}</span>
              <a href="{{ route('request.quote', ['addon' => $item['slug']]) }}" class="btn-primary" style="padding: 10px 20px; font-size: 0.9rem; border-radius: 10px;">Book Now</a>
            </div>
          </div>
        @endforeach
      @endforeach
    </div>
    
    <div style="text-align: center; margin-top: 50px;">
      <a href="{{ route('request.quote') }}" class="btn-outline">View All Add-Ons <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
    </div>
  </div>
</section>

<style>
  .addon-card-home:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-color: var(--accent);
  }
</style>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 60px;">
      <div class="section-label"><i class="fas fa-quote-left"></i> Testimonials</div>
      <h2 class="section-title">Trusted by <span>Tanzania's Best Businesses</span></h2>
      <p class="section-sub">Don't just take our word for it — hear from our clients across Arusha, Dar es Salaam, and beyond.</p>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"TechNova built our safari website in just 9 days. The M-Pesa booking integration works flawlessly and we've seen a 60% increase in direct bookings since launching. Exceptional team!"</p>
        <div class="testimonial-author">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/programmer-home-office-concentrating-finding-bugs-while-he-codes_gctbqc.jpg" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">James Makwaya</div>
            <div class="testimonial-role">CEO, Kilimanjaro Summit Tours, Arusha</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"Their cybersecurity audit revealed 3 critical vulnerabilities in our hotel network we didn't know about. They fixed everything in 2 days. I sleep much better now knowing we're protected."</p>
        <div class="testimonial-author">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/portrait-male-engineer-working-field-engineers-day-celebration_afzsch.jpg" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Amina Rashidi</div>
            <div class="testimonial-role">Operations Manager, Serengeti Lodge Group</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"We needed a full mobile app for our delivery business. TechNova delivered a beautiful, fully functional Android and iOS app with real-time tracking and TigoPesa payments. World-class work!"</p>
        <div class="testimonial-author">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">David Msangi</div>
            <div class="testimonial-role">Founder, SwiftDeliver Tanzania, Dar es Salaam</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"The network installation at our camp was professional and fast. No downtime, crystal-clear coverage in every tent, and the guest Wi-Fi works perfectly. Our guests love it!"</p>
        <div class="testimonial-author">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Peter Nkosi</div>
            <div class="testimonial-role">General Manager, Tarangire Tented Camp</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"After switching to TechNova's IT Support plan, our office IT issues dropped by 80%. They respond within minutes, not hours. Best investment we've made for our NGO this year."</p>
        <div class="testimonial-author">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Grace Mutua</div>
            <div class="testimonial-role">Director, WaterAid East Africa, Arusha</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"Our ICT consultancy engagement with TechNova was transformational. They gave us a clear digital roadmap, helped select the right vendors, and saved us over TZS 5M in bad software decisions."</p>
        <div class="testimonial-author">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/irritated-african-american-man-struggling-reach-internet-provider_rriiiz.jpg" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Robert Kimani</div>
            <div class="testimonial-role">CFO, Precision Air Supplier, Nairobi</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to <span>Transform</span> Your Business?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required. We'll assess your needs and recommend the perfect package for your budget.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!" class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('request.quote') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>





<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info">
        <div class="section-label"><i class="fas fa-envelope"></i> Get In Touch</div>
        <h3>Let's Build Something <span style="color:var(--accent);">Great Together</span></h3>
        <p>Whether you're starting from scratch or upgrading your existing systems, our team is ready to help. Reach out today for a free, no-obligation consultation.</p>
        <div class="contact-details">
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <div class="contact-detail-label">Location</div>
              <div class="contact-detail-val">Moshi, Kilimanjaro, Tanzania</div>
              <a href="https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania" target="_blank" style="font-size: 0.8rem; color: var(--accent); text-decoration: none;">View on Map</a>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
            <div>
              <div class="contact-detail-label">Phone Numbers</div>
              <div class="contact-detail-val">+255 685 847 002</div>
              <div class="contact-detail-val">+255 622 239 304</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fab fa-whatsapp"></i></div>
            <div>
              <div class="contact-detail-label">WhatsApp</div>
              <div class="contact-detail-val">+255 685 847 002</div>
              <div class="contact-detail-val">+255 622 239 304</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <div class="contact-detail-label">Email</div>
              <div class="contact-detail-val">info@jezdantech.com</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-clock"></i></div>
            <div>
              <div class="contact-detail-label">Working Hours</div>
              <div class="contact-detail-val">Mon–Sat: 8am–7pm | Sun: 9am–2pm</div>
              <div class="contact-detail-val" style="color: #28a745; font-size: 0.85rem; font-weight: 600;">Available Now</div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <h4>Send Us a Message</h4>
        <div class="form-row">
          <div class="form-group">
            <label>Full Name *</label>
            <input type="text" class="form-control" placeholder="Your full name" />
          </div>
          <div class="form-group">
            <label>Phone / WhatsApp *</label>
            <input type="tel" class="form-control" placeholder="+255 7XX XXX XXX" />
          </div>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" class="form-control" placeholder="your@email.com" />
        </div>
        <div class="form-group">
          <label>Service Interested In *</label>
          <select class="form-control">
            <option value="">-- Select a Service --</option>
            <option>Tour / Safari Website</option>
            <option>Web Development</option>
            <option>Mobile App Development</option>
            <option>Network Installation</option>
            <option>Cybersecurity</option>
            <option>IT Support</option>
            <option>ICT Consultancy</option>
            <option>CCTV Installation</option>
            <option>Multiple Services</option>
          </select>
        </div>
        <div class="form-group">
          <label>Budget Range (TZS)</label>
          <select class="form-control">
            <option value="">-- Select Budget Range --</option>
            <option>Under 500,000</option>
            <option>500,000 – 1,500,000</option>
            <option>1,500,000 – 5,000,000</option>
            <option>5,000,000 – 15,000,000</option>
            <option>15,000,000+</option>
            <option>Not sure yet</option>
          </select>
        </div>
        <div class="form-group">
          <label>Tell Us About Your Project</label>
          <textarea class="form-control" placeholder="Describe your project, goals, and any specific requirements..."></textarea>
        </div>
        <button class="btn-submit" onclick="submitForm()"><i class="fas fa-paper-plane"></i> Send Message — We Reply Within 2 Hours</button>
      </div>
    </div>
  </div>
</section>

@endsection

@section('additional_styles')
<style>
  /* ════════════════════════════════════════════════════════════
     HERO SLIDER — lighter overlay so images stay visible
  ════════════════════════════════════════════════════════════ */
  .jezdan-hero .hero-overlay {
    background:
      linear-gradient(100deg, rgba(6, 43, 77, 0.78) 0%, rgba(6, 43, 77, 0.45) 45%, rgba(6, 43, 77, 0.1) 100%),
      linear-gradient(180deg, rgba(6, 43, 77, 0.12) 0%, rgba(6, 43, 77, 0.05) 45%, rgba(6, 43, 77, 0.5) 100%);
  }
  .jezdan-hero { background: none; }
  .jezdan-hero-slider { position: absolute; inset: 0; }
  .jezdan-hero .swiper-slide { min-height: 100vh; height: 100%; }
  .jezdan-hero .hero-image { inset: 0; background-size: cover; background-position: center; }

  /* ════════════════════════════════════════════════════════════
     SERVICES REDESIGN — Unique animated 3-per-row cards
  ════════════════════════════════════════════════════════════ */
  .services {
    position: relative;
    overflow: hidden;
  }
  .services::before,
  .services::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    filter: blur(70px);
    opacity: 0.4;
    pointer-events: none;
    z-index: 0;
    animation: svcBlob 12s ease-in-out infinite;
  }
  .services::before {
    width: 430px; height: 430px; top: -130px; right: -90px;
    background: radial-gradient(circle, rgba(12, 69, 128, 0.35), transparent 70%);
  }
  .services::after {
    width: 360px; height: 360px; bottom: -110px; left: -70px;
    background: radial-gradient(circle, rgba(111, 177, 232, 0.4), transparent 70%);
    animation-delay: -6s;
  }
  @keyframes svcBlob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50%      { transform: translate(32px, 22px) scale(1.08); }
  }

  .svc-header { position: relative; z-index: 1; margin-bottom: 56px; }
  .svc-header .section-title {
    background: linear-gradient(90deg, #062B4D, #0C4580, #6FB1E8, #062B4D);
    background-size: 300% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: svcGradientText 6s linear infinite;
  }
  .svc-header .section-title span { color: transparent; }
  @keyframes svcGradientText {
    to { background-position: 300% center; }
  }
  .svc-header .section-sub { max-width: 640px; }
  .svc-header-tag {
    position: relative;
    display: inline-flex; align-items: center; gap: 12px;
    margin-bottom: 20px; padding-left: 44px;
    color: var(--primary); font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2.2px; text-transform: uppercase;
  }
  .svc-header-tag::before {
    content: '';
    position: absolute; left: 0; top: 50%;
    width: 32px; height: 2px; margin-top: -1px;
    background: linear-gradient(90deg, var(--primary), var(--sky-bright));
    transform-origin: left;
    animation: svcTagLine 2.4s ease-in-out infinite;
  }
  @keyframes svcTagLine {
    0%, 100% { transform: scaleX(1); }
    50%      { transform: scaleX(0.4); }
  }

  .svc-grid {
    position: relative; z-index: 1;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }
  .svc-reveal { height: 100%; transition-delay: var(--d, 0s); }

  .svc-card {
    position: relative; height: 100%;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .svc-card::after {
    content: '';
    position: absolute; inset: 0; z-index: 3; pointer-events: none;
    border-radius: 20px;
    box-shadow: inset 0 0 0 2px rgba(12, 69, 128, 0);
    transition: box-shadow 0.45s ease;
  }
  .svc-card:hover {
    transform: translateY(-12px);
    border-color: rgba(12, 69, 128, 0.25);
    box-shadow: 0 26px 60px rgba(6, 43, 77, 0.16);
  }
  .svc-card:hover::after { box-shadow: inset 0 0 0 2px rgba(12, 69, 128, 0.12); }

  .svc-card-media {
    position: relative; height: 205px; overflow: hidden;
  }
  .svc-card-media img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transform: scale(1.01);
    transition: transform 0.7s cubic-bezier(.22, .61, .36, 1);
  }
  .svc-card:hover .svc-card-media img { transform: scale(1.12); }
  .svc-card-media::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(6, 43, 77, 0) 40%, rgba(6, 43, 77, 0.55) 100%);
    opacity: 0.85;
    transition: opacity 0.45s ease;
  }
  .svc-card:hover .svc-card-media::after { opacity: 1; }

  .svc-card-num {
    position: absolute; top: 14px; right: 16px; z-index: 2;
    font-family: var(--font-mono); font-weight: 900; font-size: 1.02rem;
    color: #fff; letter-spacing: 1.5px;
    background: rgba(6, 43, 77, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    padding: 4px 13px; border-radius: 30px;
  }
  .svc-card-icon {
    position: absolute; bottom: -25px; left: 22px; z-index: 4;
    width: 54px; height: 54px; border-radius: 15px;
    background: #fff; color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.25rem;
    box-shadow: 0 10px 24px rgba(6, 43, 77, 0.25);
    transition: transform 0.4s cubic-bezier(.34, 1.56, .64, 1), background 0.4s ease, color 0.4s ease;
  }
  .svc-card:hover .svc-card-icon {
    transform: translateY(-6px) rotate(-8deg) scale(1.08);
    background: var(--primary); color: #fff;
  }

  .svc-card-body { padding: 30px 26px 28px; position: relative; z-index: 2; }
  .svc-card-body h3 {
    font-family: var(--font-display);
    font-size: 1.32rem; font-weight: 900;
    color: var(--dark); margin-bottom: 12px; letter-spacing: -0.3px;
  }
  .svc-card-body p { font-size: 0.92rem; color: var(--ink-muted); line-height: 1.7; margin-bottom: 20px; }

  .svc-link {
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--primary); font-weight: 800; font-size: 0.92rem;
    text-decoration: none; position: relative;
  }
  .svc-link::after {
    content: '';
    position: absolute; left: 0; bottom: -3px; height: 2px; width: 0;
    background: var(--primary);
    transition: width 0.35s ease;
  }
  .svc-link i { transition: transform 0.35s ease; }
  .svc-card:hover .svc-link::after { width: 100%; }
  .svc-card:hover .svc-link i { transform: translateX(6px); }

  .svc-cta-wrap { grid-column: 1 / -1; }
  .svc-cta {
    position: relative; overflow: hidden;
    display: flex; align-items: center; justify-content: space-between; gap: 28px; flex-wrap: wrap;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    border-radius: 22px; padding: 42px 46px;
    color: #fff;
    animation: svcCtaShift 8s linear infinite;
  }
  @keyframes svcCtaShift {
    to { background-position: 200% center; }
  }
  .svc-cta::before {
    content: '';
    position: absolute; width: 280px; height: 280px; border-radius: 50%;
    top: -90px; right: -70px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.28), transparent 70%);
    animation: svcCtaPulse 5s ease-in-out infinite;
  }
  @keyframes svcCtaPulse {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50%      { transform: scale(1.15); opacity: 1; }
  }
  .svc-cta h3 {
    font-family: var(--font-display);
    font-size: 1.6rem; font-weight: 900; margin-bottom: 8px;
  }
  .svc-cta p { color: rgba(255, 255, 255, 0.8); font-size: 0.98rem; max-width: 560px; line-height: 1.65; }
  .svc-cta-actions { display: flex; gap: 14px; flex-wrap: wrap; position: relative; z-index: 2; }
  .svc-cta .btn-primary {
    background: #fff; color: var(--primary);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2);
  }
  .svc-cta .btn-primary:hover { background: var(--sky-bright); color: #062B4D; }
  .svc-cta .btn-outline { border-color: rgba(255, 255, 255, 0.55); color: #fff; }
  .svc-cta .btn-outline:hover { background: rgba(255, 255, 255, 0.12); }

  @media (max-width: 992px) {
    .svc-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 600px) {
    .svc-grid { grid-template-columns: 1fr; }
    .svc-cta { padding: 32px 26px; }
    .svc-cta h3 { font-size: 1.35rem; }
  }
</style>
@endsection

@section('additional_scripts')
<script>
  if (document.querySelector('.jezdan-hero-slider')) {
    new Swiper('.jezdan-hero-slider', {
      loop: true,
      speed: 900,
      effect: 'fade',
      fadeEffect: { crossFade: true },
      autoplay: { delay: 7000, disableOnInteraction: false },
      observer: true,
      observeParents: true,
      pagination: { el: '.jezdan-hero .swiper-pagination', clickable: true },
      navigation: {
        nextEl: '.jezdan-hero .swiper-button-next',
        prevEl: '.jezdan-hero .swiper-button-prev',
      },
    });
  }
</script>
@endsection
