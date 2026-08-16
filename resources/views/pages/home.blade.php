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

<!-- OUR SERVICES -->
@php
  $ourServices = [
    [
      'icon'  => 'fa-code',
      'title' => 'Web Development',
      'desc'  => 'Custom websites for every kind of business — from fast landing pages to full e-commerce platforms with booking systems and integrated M-Pesa payments.',
      'route' => 'services.web-development',
    ],
    [
      'icon'  => 'fa-mobile-screen-button',
      'title' => 'Mobile App Development',
      'desc'  => 'Cross-platform Android & iOS apps built with Flutter and React Native — from informational apps to full booking and payment platforms with real-time tracking.',
      'route' => 'services.mobile-app-development',
    ],
    [
      'icon'  => 'fa-network-wired',
      'title' => 'Network Installation',
      'desc'  => 'Professional network infrastructure for offices, hotels, lodges, and camps — with multi-AP coverage, VLANs, guest Wi-Fi, and security configuration.',
      'route' => 'services.network-installation',
    ],
    [
      'icon'  => 'fa-shield-alt',
      'title' => 'Cybersecurity',
      'desc'  => 'Vulnerability assessments, penetration testing, firewalls, and 24/7 monitoring — with TCRA and GDPR compliance support for your business.',
      'route' => 'services.cybersecurity',
    ],
    [
      'icon'  => 'fa-headset',
      'title' => 'IT Support',
      'desc'  => 'Reliable ongoing IT support — remote troubleshooting and on-site service with monthly retainer plans, guaranteed SLAs, and dedicated account managers.',
      'route' => 'services.it-support',
    ],
    [
      'icon'  => 'fa-lightbulb',
      'title' => 'ICT Consultancy',
      'desc'  => 'Digital transformation audits, technology roadmaps, vendor management, and CTO-on-demand advisory tailored to your organization.',
      'route' => 'services.ict-consultancy',
    ],
    [
      'icon'  => 'fa-cogs',
      'title' => 'System Development',
      'desc'  => 'Custom business systems and integrations — school, hotel, and ERP platforms with APIs, databases, and reporting dashboards built around your workflow.',
      'route' => 'services.system-development',
    ],
    [
      'icon'  => 'fa-cloud',
      'title' => 'Cloud Services',
      'desc'  => 'Cloud migration, managed hosting, domains, and business email — with automated backups and expert local support around the clock.',
      'route' => 'services.cloud-services',
    ],
    [
      'icon'  => 'fa-calculator',
      'title' => 'Accounting Software',
      'desc'  => 'Bookkeeping, POS, and inventory systems with VAT/TRA-compliant reports and multi-branch support for growing businesses.',
      'route' => 'services.accounting',
    ],
  ];
@endphp
<svg xmlns="http://www.w3.org/2000/svg" style="display:none" aria-hidden="true">
  <symbol id="os-wave-1" viewBox="0 0 400 60" preserveAspectRatio="none"><path d="M0,26 C80,46 150,8 230,16 C300,24 360,40 400,30 L400,60 L0,60 Z" fill="#D9F0FA"/></symbol>
  <symbol id="os-wave-2" viewBox="0 0 400 60" preserveAspectRatio="none"><path d="M0,34 C90,52 170,18 250,26 C320,34 375,46 400,40 L400,60 L0,60 Z" fill="#FFFFFF" opacity="0.78"/></symbol>
  <symbol id="os-wave-3" viewBox="0 0 400 60" preserveAspectRatio="none"><path d="M0,44 C100,58 190,30 270,38 C340,46 385,52 400,50 L400,60 L0,60 Z" fill="#BDE4F8" opacity="0.55"/></symbol>
</svg>
<section class="os-section" id="services">
  <div class="os-circuit" aria-hidden="true"></div>

  <div class="os-inner">
    <div class="os-head reveal">
      <h2 class="os-title"><span class="os-title-blue">Our</span> <span class="os-title-yellow">Services</span></h2>
      <p class="os-sub">We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.</p>
    </div>
  </div>

  <div class="os-slider-wrap reveal">
    <div class="os-slider swiper" role="region" aria-roledescription="carousel" aria-label="Our services carousel">
      <div class="swiper-wrapper">
        @foreach($ourServices as $service)
        <div class="swiper-slide">
          <article class="os-card">
            <div class="os-media">
              <div class="os-media-ring" aria-hidden="true"></div>
              <img class="os-media-img" src="{{ config('site_content.service_card_images')[$service['title']] ?? asset('logo.png') }}" alt="{{ $service['title'] }}" loading="lazy" />
              <span class="os-media-shade" aria-hidden="true"></span>
              <div class="os-waves" aria-hidden="true">
                <svg class="os-wave os-wave-1"><use href="#os-wave-1"/></svg>
                <svg class="os-wave os-wave-2"><use href="#os-wave-2"/></svg>
                <svg class="os-wave os-wave-3"><use href="#os-wave-3"/></svg>
              </div>
            </div>
            <div class="os-body">
              <h3 class="os-card-title">{{ $service['title'] }}</h3>
              <p class="os-card-text">{{ $service['desc'] }}</p>
              <a href="{{ route($service['route']) }}" class="os-card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="os-inner">
    <div class="os-controls">
      <button type="button" class="os-nav os-prev" aria-label="Previous service"><i class="fas fa-arrow-left"></i></button>
      <div class="os-pagination swiper-pagination" aria-label="Carousel pagination"></div>
      <button type="button" class="os-nav os-next" aria-label="Next service"><i class="fas fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- FEATURED PROJECTS -->
<section class="fp-section" id="portfolio">
  <div class="fp-deco" aria-hidden="true">Works</div>
  <div class="container">
    <div class="fp-head reveal">
      <span class="fp-tag"><i class="fas fa-briefcase"></i> Our Work</span>
      <h2 class="fp-title">Featured <span>Projects</span></h2>
      <p class="fp-sub">Explore our track record of delivering robust, scalable, and user-centric digital products that drive business growth across Tanzania and beyond.</p>
    </div>

    @php
      $fpProjects = collect(config('site_content.portfolio_projects', []));
      $fpFeatured = $fpProjects->firstWhere('featured', true) ?? $fpProjects->first();
    @endphp
    @if($fpFeatured)
    <div class="fp-grid">
      <a class="fp-card fp-card-lg reveal" href="{{ route('portfolio.show', $fpFeatured['slug']) }}" style="--d:0ms;">
        <img src="{{ $fpFeatured['image'] }}" alt="{{ $fpFeatured['title'] }}" loading="lazy" />
        <span class="fp-shade" aria-hidden="true"></span>
        <span class="fp-chip">{{ $fpFeatured['categoryLabel'] }}</span>
        <div class="fp-card-body">
          <h3>{{ $fpFeatured['title'] }}</h3>
          <p>{{ $fpFeatured['excerpt'] }}</p>
          <span class="fp-link">View Case Study <i class="fas fa-arrow-right"></i></span>
        </div>
      </a>
      @foreach($fpProjects->reject(fn($p) => $p['slug'] === $fpFeatured['slug'])->take(4) as $project)
      <a class="fp-card reveal" href="{{ route('portfolio.show', $project['slug']) }}" style="--d:{{ ($loop->index + 1) * 80 }}ms;">
        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy" />
        <span class="fp-shade" aria-hidden="true"></span>
        <span class="fp-chip">{{ $project['categoryLabel'] }}</span>
        <div class="fp-card-body">
          <h4>{{ $project['title'] }}</h4>
          <span class="fp-link"><i class="fas fa-arrow-right"></i></span>
        </div>
      </a>
      @endforeach
    </div>

    <div class="fp-more reveal">
      <a href="{{ route('portfolio') }}" class="fp-btn"><i class="fas fa-briefcase"></i> View All Projects</a>
    </div>
    @endif
  </div>
</section>

<!-- HOW WE WORK -->
<section class="workflow" id="process">
  <div class="container">
    <div class="wf-head reveal">
      <span class="wf-tag"><i class="fas fa-route"></i> How We Work</span>
      <h2 class="wf-title">Our Simple <span>4-Step Process</span></h2>
      <p class="wf-sub">From first call to going live — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="wf-steps">
      <div class="wf-step reveal" style="--d:0ms;">
        <span class="wf-ghost">01</span>
        <span class="wf-badge"><i class="fas fa-comments"></i></span>
        <h4>Free Consultation</h4>
        <p>We discuss your goals, requirements, and budget. No hidden costs — full transparency from the start.</p>
      </div>
      <div class="wf-step reveal" style="--d:100ms;">
        <span class="wf-ghost">02</span>
        <span class="wf-badge"><i class="fas fa-file-signature"></i></span>
        <h4>Custom Proposal</h4>
        <p>You receive a detailed proposal with clear scope, timeline, pricing, and all deliverables.</p>
      </div>
      <div class="wf-step reveal" style="--d:200ms;">
        <span class="wf-ghost">03</span>
        <span class="wf-badge"><i class="fas fa-laptop-code"></i></span>
        <h4>Development</h4>
        <p>Our team builds your solution with regular updates, testing, and feedback rounds along the way.</p>
      </div>
      <div class="wf-step reveal" style="--d:300ms;">
        <span class="wf-ghost">04</span>
        <span class="wf-badge"><i class="fas fa-rocket"></i></span>
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
<section class="ts-section" id="why-us">
  <div class="ts-deco" aria-hidden="true">Trust</div>
  <div class="container">
    <div class="ts-layout">
      <div class="ts-head reveal">
        <span class="ts-tag"><i class="fas fa-star"></i> Why TechNova Africa</span>
        <h2 class="ts-title">Tanzania's Most Trusted <span>ICT Partner</span></h2>
        <p class="ts-intro">Based in Moshi, Kilimanjaro — at the foot of Mount Kilimanjaro and gateway to Tanzania's northern safari circuit — we understand your market better than anyone. We've helped tour operators, hotels, NGOs, and businesses across Tanzania go digital and grow faster.</p>
        <div class="ts-note">
          <span class="ts-note-ico"><i class="fas fa-medal"></i></span>
          <div>
            <strong>7+ Years of Excellence</strong>
            <small>Trusted by 200+ businesses across Tanzania</small>
          </div>
        </div>
        <a href="{{ route('about') }}" class="ts-link">More About Us <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="ts-grid">
        <div class="ts-card reveal" style="--d:0ms;">
          <span class="ts-ico"><i class="fas fa-map-location-dot"></i></span>
          <h3>Deep Local Market Knowledge</h3>
          <p>We know the Tanzanian business landscape — from M-Pesa integrations to Swahili content and TCRA compliance requirements.</p>
        </div>
        <div class="ts-card reveal" style="--d:80ms;">
          <span class="ts-ico"><i class="fas fa-bolt"></i></span>
          <h3>Fast Delivery, No Shortcuts</h3>
          <p>Most projects delivered in days — not months. We use modern frameworks and agile workflows to move fast without sacrificing quality.</p>
        </div>
        <div class="ts-card reveal" style="--d:160ms;">
          <span class="ts-ico"><i class="fas fa-phone-volume"></i></span>
          <h3>Real Support in Real Time</h3>
          <p>Call, WhatsApp, or SMS us — we actually answer. Our local team speaks Swahili and English and responds fast.</p>
        </div>
        <div class="ts-card reveal" style="--d:240ms;">
          <span class="ts-ico"><i class="fas fa-coins"></i></span>
          <h3>Transparent, Competitive Pricing</h3>
          <p>No surprise fees. We provide detailed, itemized quotes upfront with everything spelled out clearly. We work within Tanzanian budgets.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TECHNOLOGIES -->
<section class="tc-section" id="technologies">
  @php
    $tcTechs = [
        ['c' => 'fas fa-mobile-screen-button', 'n' => 'Flutter'],
        ['c' => 'fab fa-react', 'n' => 'React Native'],
        ['c' => 'fab fa-wordpress', 'n' => 'WordPress'],
        ['c' => 'fab fa-laravel', 'n' => 'Laravel'],
        ['c' => 'fab fa-node-js', 'n' => 'Node.js'],
        ['c' => 'fab fa-react', 'n' => 'React.js'],
        ['c' => 'fas fa-database', 'n' => 'MySQL'],
        ['c' => 'fas fa-fire', 'n' => 'Firebase'],
        ['c' => 'fas fa-sim-card', 'n' => 'M-Pesa API'],
        ['c' => 'fas fa-wallet', 'n' => 'TigoPesa API'],
        ['c' => 'fas fa-chart-line', 'n' => 'Google Analytics'],
        ['c' => 'fab fa-aws', 'n' => 'AWS / Cloud'],
        ['c' => 'fas fa-network-wired', 'n' => 'Cisco / Ubiquiti'],
        ['c' => 'fas fa-wifi', 'n' => 'Mikrotik'],
    ];
  @endphp
  <div class="tc-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="tc-head reveal">
      <span class="tc-tag"><i class="fas fa-code-branch"></i> Technologies We Use</span>
      <h2 class="tc-title">Built with <span>Industry-Leading Tools</span></h2>
      <p class="tc-sub">Every project is engineered on proven, battle-tested technology — from mobile money APIs to enterprise cloud infrastructure.</p>
    </div>
    <div class="tc-grid">
      @foreach($tcTechs as $idx => $tech)
      <div class="tc-chip reveal" style="--d:{{ $idx * 40 }}ms;">
        <span class="tc-chip-ico"><i class="{{ $tech['c'] }}"></i></span>
        <span>{{ $tech['n'] }}</span>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="tm-deco" aria-hidden="true">Reviews</div>
  <div class="container">
    <div class="tm-head reveal">
      <span class="tm-tag"><i class="fas fa-quote-left"></i> Testimonials</span>
      <h2 class="tm-title">Trusted by <span>Tanzania's Best Businesses</span></h2>
      <p class="tm-sub">Don't just take our word for it — hear from our clients across Arusha, Dar es Salaam, and beyond.</p>
    </div>
    <div class="testimonials-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"TechNova built our safari website in just 9 days. The M-Pesa booking integration works flawlessly and we've seen a 60% increase in direct bookings since launching. Exceptional team!"</p>
            <div class="testimonial-author">
              <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/programmer-home-office-concentrating-finding-bugs-while-he-codes_gctbqc.jpg" class="testimonial-avatar" alt="James Makwaya" />
              <div>
                <div class="testimonial-name">James Makwaya</div>
                <div class="testimonial-role">CEO, Kilimanjaro Summit Tours, Arusha</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"Their cybersecurity audit revealed 3 critical vulnerabilities in our hotel network we didn't know about. They fixed everything in 2 days. I sleep much better now knowing we're protected."</p>
            <div class="testimonial-author">
              <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/portrait-male-engineer-working-field-engineers-day-celebration_afzsch.jpg" class="testimonial-avatar" alt="Amina Rashidi" />
              <div>
                <div class="testimonial-name">Amina Rashidi</div>
                <div class="testimonial-role">Operations Manager, Serengeti Lodge Group</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"We needed a full mobile app for our delivery business. TechNova delivered a beautiful, fully functional Android and iOS app with real-time tracking and TigoPesa payments. World-class work!"</p>
            <div class="testimonial-author">
              <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg" class="testimonial-avatar" alt="David Msangi" />
              <div>
                <div class="testimonial-name">David Msangi</div>
                <div class="testimonial-role">Founder, SwiftDeliver Tanzania, Dar es Salaam</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"The network installation at our camp was professional and fast. No downtime, crystal-clear coverage in every tent, and the guest Wi-Fi works perfectly. Our guests love it!"</p>
            <div class="testimonial-author">
              <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" class="testimonial-avatar" alt="Peter Nkosi" />
              <div>
                <div class="testimonial-name">Peter Nkosi</div>
                <div class="testimonial-role">General Manager, Tarangire Tented Camp</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"After switching to TechNova's IT Support plan, our office IT issues dropped by 80%. They respond within minutes, not hours. Best investment we've made for our NGO this year."</p>
            <div class="testimonial-author">
              <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" class="testimonial-avatar" alt="Grace Mutua" />
              <div>
                <div class="testimonial-name">Grace Mutua</div>
                <div class="testimonial-role">Director, WaterAid East Africa, Arusha</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"Our ICT consultancy engagement with TechNova was transformational. They gave us a clear digital roadmap, helped select the right vendors, and saved us over TZS 5M in bad software decisions."</p>
            <div class="testimonial-author">
              <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/irritated-african-american-man-struggling-reach-internet-provider_rriiiz.jpg" class="testimonial-avatar" alt="Robert Kimani" />
              <div>
                <div class="testimonial-name">Robert Kimani</div>
                <div class="testimonial-role">CFO, Precision Air Supplier, Nairobi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="testimonials-nav">
      <button type="button" class="testimonials-btn testimonials-prev" aria-label="Previous testimonials"><i class="fas fa-arrow-left"></i></button>
      <button type="button" class="testimonials-btn testimonials-next" aria-label="Next testimonials"><i class="fas fa-arrow-right"></i></button>
    </div>
  </div>
</section>



<!-- CTA BANNER -->
<div class="cta-premium">
  <div class="cta-glow cta-glow-1" aria-hidden="true"></div>
  <div class="cta-glow cta-glow-2" aria-hidden="true"></div>
  <div class="cta-lines" aria-hidden="true"></div>
  <div class="cta-inner">
    <span class="cta-badge"><i class="fas fa-bolt"></i> Free Consultation</span>
    <h2>Ready to <span>Transform</span> Your Business?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required. We'll assess your needs and recommend the perfect package for your budget.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!" class="cta-wa" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('request.quote') }}" class="cta-mail"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>

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
     OUR SERVICES — premium horizontal carousel
     Palette: Blue #0878B5 · Dark #006FAE · Light #D9F0FA
              Yellow #FFD21F · Text #333333 · Border #1685C0
  ════════════════════════════════════════════════════════════ */
  .os-section {
    --os-blue: #0878B5;
    --os-blue-dark: #006FAE;
    --os-blue-light: #D9F0FA;
    --os-yellow: #FFD21F;
    --os-text: #333333;
    --os-border: #1685C0;
    --os-media-h: 248px;
    position: relative;
    background: #ffffff;
    padding: 110px 4% 96px;
    overflow: hidden;
  }
  .os-circuit {
    position: absolute;
    inset: 0;
    pointer-events: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill='none' stroke='%230878B5' stroke-opacity='0.09' stroke-width='1.5'%3E%3Cpath d='M0 130h52a14 14 0 0 0 14-14V84a12 12 0 0 1 12-12h40'/%3E%3Cpath d='M260 60h-44a12 12 0 0 0-12 12v38a14 14 0 0 1-14 14h-26'/%3E%3Cpath d='M30 260v-34a12 12 0 0 1 12-12h38a14 14 0 0 0 14-14v-22'/%3E%3Cpath d='M170 0v30a14 14 0 0 0 14 14h24'/%3E%3C/g%3E%3Ccircle cx='120' cy='60' r='4' fill='%230878B5' fill-opacity='0.12'/%3E%3Ccircle cx='200' cy='150' r='5' fill='%230878B5' fill-opacity='0.12'/%3E%3Ccircle cx='60' cy='200' r='4' fill='%230878B5' fill-opacity='0.12'/%3E%3Ccircle cx='230' cy='230' r='4' fill='%230878B5' fill-opacity='0.12'/%3E%3C/svg%3E");
    background-size: 260px 260px;
  }
  .os-circuit::after {
    content: '';
    position: absolute;
    top: -160px; right: -160px;
    width: 520px; height: 520px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(13, 134, 207, 0.08), transparent 62%);
  }

  .os-inner {
    position: relative;
    padding: 0 max(4vw, calc((100vw - 1240px) / 2));
  }
  .os-head { margin-bottom: 54px; }
  .os-title {
    font-family: var(--font-display);
    font-size: clamp(34px, 4vw, 54px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1.05;
    margin: 0;
  }
  .os-title-blue { color: var(--os-blue); }
  .os-title-yellow { color: var(--os-yellow); }
  .os-sub {
    max-width: 560px;
    margin: 18px 0 0;
    color: #5a6b7f;
    font-size: 1.05rem;
    line-height: 1.7;
  }

  /* Full-bleed carousel track (bleeds to the right viewport edge) */
  .os-slider-wrap {
    position: relative;
    width: 100vw;
    left: calc(50% - 50vw);
    padding-left: max(4vw, calc(50vw - 620px));
    overflow: hidden;
  }
  .os-slider { padding: 18px 8px 20px; }
  .os-slider .swiper-slide {
    width: min(86vw, 340px);
    height: auto;
  }

  .os-card {
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;
    border: 1px solid rgba(22, 133, 192, 0.25);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 14px 34px rgba(0, 111, 174, 0.10);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .os-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 26px 54px rgba(0, 111, 174, 0.18);
  }

  .os-media {
    position: relative;
    z-index: 2;
    height: var(--os-media-h);
    display: flex;
    align-items: center;
    justify-content: center;
    background:
      radial-gradient(circle at 78% 20%, rgba(255, 255, 255, 0.16), transparent 42%),
      radial-gradient(circle at 16% 82%, rgba(255, 255, 255, 0.10), transparent 38%),
      linear-gradient(150deg, #0B7FBF 0%, var(--os-blue) 42%, var(--os-blue-dark) 100%);
  }
  .os-media::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.22) 1.4px, transparent 1.4px);
    background-size: 22px 22px;
    opacity: 0.18;
  }
  .os-media-ring {
    position: absolute;
    width: 190px; height: 190px;
    border-radius: 50%;
    border: 2px dashed rgba(255, 255, 255, 0.3);
  }
  .os-media-chip {
    position: relative;
    z-index: 3;
    width: 112px; height: 112px;
    border-radius: 28px;
    background: #fff;
    color: var(--os-blue);
    display: flex; align-items: center; justify-content: center;
    font-size: 3rem;
    box-shadow: 0 18px 40px rgba(0, 45, 80, 0.35), 0 0 0 10px rgba(255, 255, 255, 0.14);
    transition: transform 0.3s ease;
  }
  .os-card:hover .os-media-chip { transform: translateY(-6px) scale(1.05) rotate(-4deg); }

  .os-media-img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    z-index: 1;
    transform: scale(1.01);
    transition: transform 0.55s ease;
  }
  .os-card:hover .os-media-img { transform: scale(1.08); }
  .os-media-shade {
    position: absolute; inset: 0;
    z-index: 2;
    background: linear-gradient(180deg, rgba(4,28,51,0.05) 30%, rgba(4,28,51,0.45) 100%);
  }
  .os-media:has(.os-media-img)::before { opacity: 0; }

  .os-waves {
    position: absolute;
    left: 0; right: 0;
    bottom: -34px;
    height: 70px;
    z-index: 4;
    pointer-events: none;
  }
  .os-wave {
    position: absolute;
    left: 0; top: 0;
    width: 100%; height: 100%;
    display: block;
  }

  .os-body {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    flex: 1;
    background: #fff;
    padding: 48px 30px 30px;
  }
  .os-card-title {
    font-family: var(--font-display);
    color: var(--os-blue);
    font-size: 1.32rem;
    font-weight: 800;
    letter-spacing: -0.3px;
    margin: 0 0 12px;
  }
  .os-card-text {
    color: var(--os-text);
    font-size: 0.94rem;
    line-height: 1.7;
    margin: 0 0 22px;
    flex: 1;
  }
  .os-card-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--os-blue);
    font-weight: 800;
    font-size: 0.92rem;
    text-decoration: none;
    transition: gap 0.25s ease, color 0.25s ease;
  }
  .os-card:hover .os-card-link { gap: 13px; }
  .os-card-link i { font-size: 0.8rem; }

  .os-controls {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 22px;
    margin-top: 30px;
  }
  .os-nav {
    width: 48px; height: 48px;
    border-radius: 50%;
    border: 1px solid rgba(22, 133, 192, 0.35);
    background: #fff;
    color: var(--os-blue);
    font-size: 1rem;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 6px 18px rgba(0, 111, 174, 0.12);
    transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease, opacity 0.25s ease;
  }
  .os-nav:hover {
    background: var(--os-blue);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(0, 111, 174, 0.3);
  }
  .os-nav.swiper-button-disabled { opacity: 0.4; cursor: not-allowed; }

  .os-pagination { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; }
  .os-pagination .swiper-pagination-bullet {
    width: 26px; height: 6px;
    border-radius: 3px;
    background: #cbd5e1;
    opacity: 1;
    margin: 4px 5px !important;
    transition: width 0.3s ease, background 0.3s ease;
  }
  .os-pagination .swiper-pagination-bullet-active {
    width: 40px;
    background: var(--os-yellow);
  }

  .os-card-link:focus-visible,
  .os-nav:focus-visible,
  .os-pagination .swiper-pagination-bullet:focus-visible {
    outline: 3px solid var(--os-yellow);
    outline-offset: 2px;
  }

  @media (min-width: 768px) {
    .os-slider .swiper-slide { width: 360px; }
    .os-section { --os-media-h: 228px; }
  }
  @media (min-width: 1200px) {
    .os-slider .swiper-slide { width: 380px; }
    .os-section { --os-media-h: 248px; }
  }
  @media (max-width: 767px) {
    .os-section { padding: 84px 4% 72px; --os-media-h: 210px; }
    .os-title { font-size: clamp(30px, 9vw, 38px); }
    .os-head { margin-bottom: 38px; }
    .os-controls { gap: 16px; }
    .os-media-chip { width: 96px; height: 96px; font-size: 2.5rem; border-radius: 24px; }
    .os-media-ring { width: 160px; height: 160px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .os-card,
    .os-card:hover,
    .os-media-chip,
    .os-nav,
    .os-pagination .swiper-pagination-bullet,
    .os-card-link { transition: none !important; transform: none !important; }
  }


  /* ═══════ FEATURED PROJECTS — bento showcase ═══════ */
  .fp-section {
    --os-blue: #0878B5;
    --os-blue-dark: #006FAE;
    --os-yellow: #FFD21F;
    --os-text: #333333;
    position: relative;
    background: #fff;
    padding: 110px 4% 100px;
    overflow: hidden;
  }
  .fp-section::before {
    content: '';
    position: absolute; inset: 0;
    pointer-events: none;
    background-image:
      radial-gradient(circle at 8% 12%, rgba(8, 120, 181, 0.07), transparent 40%),
      radial-gradient(circle at 92% 88%, rgba(255, 210, 31, 0.10), transparent 42%);
  }
  .fp-section .container { position: relative; z-index: 1; }
  .fp-deco {
    position: absolute;
    top: 96px; right: 3%;
    font-family: var(--font-display);
    font-weight: 900;
    font-size: 9rem;
    line-height: 1;
    letter-spacing: -2px;
    color: rgba(8, 120, 181, 0.05);
    user-select: none;
    pointer-events: none;
  }
  .fp-head { max-width: 640px; margin-bottom: 48px; }
  .fp-tag {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(8, 120, 181, 0.10);
    border: 1px solid rgba(8, 120, 181, 0.28);
    color: var(--os-blue);
    font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 999px;
    margin-bottom: 18px;
  }
  .fp-title {
    font-family: var(--font-display);
    color: #062B4D;
    font-size: clamp(32px, 4vw, 50px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1.1;
    margin: 0 0 16px;
  }
  .fp-title span {
    color: var(--os-blue);
    position: relative;
    display: inline-block;
  }
  .fp-title span::after {
    content: '';
    position: absolute;
    left: 0; right: 0; bottom: 3px;
    height: 10px;
    border-radius: 6px;
    background: linear-gradient(90deg, rgba(255, 210, 31, 0.6), rgba(255, 210, 31, 0.05));
    z-index: -1;
  }
  .fp-sub {
    color: var(--os-text);
    font-size: 1.02rem;
    line-height: 1.75;
    margin: 0;
  }

  .fp-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: 235px;
    gap: 22px;
  }
  .fp-section .reveal { transition-delay: var(--d, 0s); }
  .fp-card {
    position: relative;
    display: block;
    border-radius: 22px;
    overflow: hidden;
    text-decoration: none;
    background: #EAF3FA;
    box-shadow: 0 12px 32px rgba(6, 43, 77, 0.10);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  .fp-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 26px 56px rgba(6, 43, 77, 0.20);
  }
  .fp-card > img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(.22, .61, .36, 1);
  }
  .fp-card:hover > img { transform: scale(1.08); }
  .fp-shade {
    position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(6, 43, 77, 0) 35%, rgba(6, 43, 77, 0.88) 100%);
  }
  .fp-chip {
    position: absolute; top: 14px; left: 14px;
    background: rgba(6, 43, 77, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.35);
    color: #fff;
    font-size: 0.7rem; font-weight: 800;
    text-transform: uppercase; letter-spacing: 1px;
    padding: 6px 12px; border-radius: 999px;
    backdrop-filter: blur(4px);
  }
  .fp-card-body {
    position: absolute;
    left: 0; right: 0; bottom: 0;
    padding: 18px 22px;
  }
  .fp-card-body h3, .fp-card-body h4 {
    font-family: var(--font-display);
    color: #fff;
    margin: 0 0 8px;
    letter-spacing: -0.3px;
  }
  .fp-card-body h3 { font-size: 1.5rem; font-weight: 900; }
  .fp-card-body h4 { font-size: 1.1rem; font-weight: 800; }
  .fp-card-body p {
    color: rgba(255, 255, 255, 0.85);
    font-size: 0.92rem; line-height: 1.6;
    margin: 0 0 14px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .fp-link {
    display: inline-flex; align-items: center; gap: 10px;
    color: var(--os-yellow);
    font-weight: 800; font-size: 0.9rem;
  }
  .fp-link i {
    display: inline-flex; align-items: center; justify-content: center;
    width: 30px; height: 30px; border-radius: 50%;
    background: var(--os-yellow); color: #062B4D;
    font-size: 0.8rem;
    transition: transform 0.35s ease, background 0.35s ease;
  }
  .fp-card:hover .fp-link i { transform: translateX(5px); background: #fff; }
  .fp-card-lg { grid-column: span 2; grid-row: span 2; }

  .fp-more { text-align: center; margin-top: 52px; }
  .fp-btn {
    display: inline-flex; align-items: center; gap: 12px;
    background: linear-gradient(120deg, #0B7FBF, var(--os-blue-dark));
    color: #fff;
    font-weight: 800; font-size: 0.98rem;
    padding: 15px 34px; border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 14px 30px rgba(0, 111, 174, 0.30);
    transition: transform 0.3s ease, box-shadow 0.3s ease, gap 0.3s ease;
  }
  .fp-btn:hover { transform: translateY(-3px); box-shadow: 0 20px 40px rgba(0, 111, 174, 0.36); gap: 16px; }

  @media (max-width: 1023px) {
    .fp-grid { grid-template-columns: repeat(2, 1fr); grid-auto-rows: 210px; }
    .fp-card-lg { grid-column: span 2; grid-row: span 2; }
  }
  @media (max-width: 700px) {
    .fp-section { padding: 84px 4% 72px; }
    .fp-grid { grid-template-columns: 1fr; grid-auto-rows: 220px; }
    .fp-card-lg { grid-column: span 1; grid-row: span 1; height: 360px; }
    .fp-deco { display: none; }
  }
  @media (prefers-reduced-motion: reduce) {
    .fp-card, .fp-card > img, .fp-link i, .fp-btn { transition: none !important; transform: none !important; }
  }

  /* ═══════ HOW WE WORK — 4-step workflow ═══════ */
  .workflow {
    --os-blue: #0878B5;
    --os-blue-dark: #006FAE;
    --os-yellow: #FFD21F;
    position: relative;
    background: linear-gradient(160deg, #041C33 0%, #062B4D 55%, #0A3A66 100%);
    padding: 110px 4% 100px;
    overflow: hidden;
  }
  .workflow::before {
    content: '';
    position: absolute; inset: 0;
    pointer-events: none;
    background-image:
      radial-gradient(circle at 12% 8%, rgba(111, 177, 232, 0.12), transparent 38%),
      radial-gradient(circle at 90% 92%, rgba(255, 210, 31, 0.08), transparent 40%),
      linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    background-size: auto, auto, 56px 56px, 56px 56px;
  }
  .workflow .container { position: relative; z-index: 1; }

  .wf-head { max-width: 640px; margin-bottom: 56px; }
  .wf-tag {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255, 210, 31, 0.10);
    border: 1px solid rgba(255, 210, 31, 0.35);
    color: var(--os-yellow);
    font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 999px;
    margin-bottom: 18px;
  }
  .wf-title {
    font-family: var(--font-display);
    color: #fff;
    font-size: clamp(32px, 4vw, 50px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1.1;
    margin: 0 0 16px;
  }
  .wf-title span {
    color: var(--os-yellow);
    position: relative;
    display: inline-block;
  }
  .wf-title span::after {
    content: '';
    position: absolute; left: 0; right: 0; bottom: 4px;
    height: 8px;
    border-radius: 6px;
    background: rgba(111, 177, 232, 0.45);
    z-index: -1;
  }
  .wf-sub {
    color: rgba(255, 255, 255, 0.72);
    font-size: 1.02rem;
    line-height: 1.75;
    margin: 0;
  }

  .wf-steps {
    position: relative;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 26px;
  }
  .wf-steps::before {
    content: '';
    position: absolute;
    top: 27px; left: 12.5%; right: 12.5%;
    height: 2px;
    background: linear-gradient(90deg, rgba(111, 177, 232, 0.05), rgba(111, 177, 232, 0.45), rgba(111, 177, 232, 0.05));
    pointer-events: none;
  }
  .wf-steps::after {
    content: '';
    position: absolute;
    top: 24px; left: 12.5%;
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--os-yellow);
    box-shadow: 0 0 14px rgba(255, 210, 31, 0.8);
    animation: wfDot 7s ease-in-out infinite;
    pointer-events: none;
  }
  @keyframes wfDot {
    0%, 100% { left: 12.5%; }
    50%      { left: 86%; }
  }
  .workflow .reveal { transition-delay: var(--d, 0s); }

  .wf-step {
    position: relative;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 20px;
    padding: 36px 30px 32px;
    overflow: hidden;
    backdrop-filter: blur(4px);
    transition: transform 0.4s ease, border-color 0.4s ease, background 0.4s ease;
  }
  .wf-step:hover {
    transform: translateY(-6px);
    border-color: rgba(111, 177, 232, 0.45);
    background: rgba(255, 255, 255, 0.08);
  }
  .wf-step::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 3px;
    background: linear-gradient(90deg, var(--os-yellow), rgba(255, 210, 31, 0.1));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.5s ease;
  }
  .wf-step:hover::before { transform: scaleX(1); }
  .wf-ghost {
    position: absolute;
    top: 6px; right: 18px;
    font-family: var(--font-display);
    font-size: 4.2rem;
    font-weight: 900;
    line-height: 1;
    color: rgba(255, 255, 255, 0.06);
    user-select: none;
    pointer-events: none;
  }
  .wf-badge {
    display: inline-grid;
    place-items: center;
    width: 54px; height: 54px;
    border-radius: 16px;
    background: rgba(8, 120, 181, 0.28);
    border: 1px solid rgba(111, 177, 232, 0.4);
    color: #7CC4F0;
    font-size: 1.3rem;
    transition: background 0.35s ease, color 0.35s ease, transform 0.35s ease;
  }
  .wf-step:hover .wf-badge { background: var(--os-yellow); color: #062B4D; transform: rotate(-6deg) scale(1.06); }
  .wf-step h4 {
    font-family: var(--font-display);
    color: #fff;
    font-size: 1.15rem;
    font-weight: 800;
    letter-spacing: -0.2px;
    margin: 22px 0 12px;
  }
  .wf-step p {
    color: rgba(255, 255, 255, 0.66);
    font-size: 0.92rem;
    line-height: 1.7;
    margin: 0;
  }

  @media (max-width: 992px) {
    .wf-steps { grid-template-columns: repeat(2, 1fr); gap: 22px; }
    .wf-steps::before, .wf-steps::after { display: none; }
  }
  @media (max-width: 600px) {
    .workflow { padding: 84px 4% 72px; }
    .wf-steps { grid-template-columns: 1fr; }
    .wf-head { margin-bottom: 40px; }
  }
  @media (prefers-reduced-motion: reduce) {
    .wf-steps::after,
    .wf-step,
    .wf-badge,
    .wf-step::before { animation: none !important; transition: none !important; }
  }

  /* ═══════ WHY TECH-NOVA — trust showcase ═══════ */
  .ts-section {
    --ts-blue: #0878B5;
    --ts-blue-dark: #006FAE;
    --ts-yellow: #FFD21F;
    --ts-ink: #062B4D;
    position: relative;
    background: #F4F9FE;
    padding: 110px 4% 100px;
    overflow: hidden;
  }
  .ts-section::before {
    content: '';
    position: absolute; inset: 0;
    pointer-events: none;
    background:
      radial-gradient(circle at 90% 10%, rgba(255, 210, 31, 0.14), transparent 34%),
      radial-gradient(circle at 6% 90%, rgba(8, 120, 181, 0.10), transparent 36%),
      linear-gradient(rgba(8, 120, 181, 0.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(8, 120, 181, 0.05) 1px, transparent 1px);
    background-size: auto, auto, 46px 46px, 46px 46px;
  }
  .ts-deco {
    position: absolute;
    bottom: 40px; right: 3%;
    font-family: var(--font-display);
    font-weight: 900;
    font-size: 8.5rem;
    letter-spacing: -2px;
    line-height: 1;
    color: rgba(8, 120, 181, 0.05);
    user-select: none;
    pointer-events: none;
  }
  .ts-section .container { position: relative; z-index: 1; }
  .ts-layout {
    display: grid;
    grid-template-columns: 5fr 7fr;
    gap: 64px;
    align-items: center;
  }
  .ts-tag {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(8, 120, 181, 0.10);
    border: 1px solid rgba(8, 120, 181, 0.28);
    color: var(--ts-blue);
    font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 999px;
    margin-bottom: 18px;
  }
  .ts-title {
    font-family: var(--font-display);
    color: var(--ts-ink);
    font-size: clamp(30px, 3.6vw, 46px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1.12;
    margin: 0 0 18px;
  }
  .ts-title span {
    color: var(--ts-blue);
    position: relative;
    display: inline-block;
  }
  .ts-title span::after {
    content: '';
    position: absolute; left: 0; right: 0; bottom: 4px;
    height: 10px;
    border-radius: 6px;
    background: linear-gradient(90deg, rgba(255, 210, 31, 0.65), rgba(255, 210, 31, 0.05));
    z-index: -1;
  }
  .ts-intro {
    color: #4B5A6B;
    font-size: 1rem;
    line-height: 1.8;
    margin: 0 0 28px;
  }
  .ts-note {
    display: flex; align-items: center; gap: 16px;
    background: #fff;
    border: 1px solid rgba(8, 120, 181, 0.16);
    border-radius: 18px;
    padding: 18px 22px;
    box-shadow: 0 10px 28px rgba(6, 43, 77, 0.07);
    max-width: 380px;
  }
  .ts-note-ico {
    display: inline-grid; place-items: center;
    width: 48px; height: 48px;
    border-radius: 14px;
    background: linear-gradient(135deg, #FFD21F, #F5B53C);
    color: #062B4D;
    font-size: 1.15rem;
    flex-shrink: 0;
  }
  .ts-note strong { display: block; color: var(--ts-ink); font-size: 0.98rem; margin-bottom: 2px; }
  .ts-note small { color: #7A8794; font-size: 0.82rem; }
  .ts-link {
    display: inline-flex; align-items: center; gap: 10px;
    margin-top: 30px;
    color: var(--ts-blue);
    font-weight: 800; font-size: 0.95rem;
    text-decoration: none;
    transition: gap 0.3s ease;
  }
  .ts-link:hover { gap: 14px; }

  .ts-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
  }
  .ts-section .reveal { transition-delay: var(--d, 0s); }
  .ts-card {
    position: relative;
    background: #fff;
    border: 1px solid rgba(8, 120, 181, 0.14);
    border-radius: 20px;
    padding: 28px 26px;
    box-shadow: 0 10px 28px rgba(6, 43, 77, 0.06);
    transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
  }
  .ts-card:hover {
    transform: translateY(-6px);
    border-color: rgba(8, 120, 181, 0.35);
    box-shadow: 0 22px 44px rgba(6, 43, 77, 0.14);
  }
  .ts-ico {
    display: inline-grid; place-items: center;
    width: 52px; height: 52px;
    border-radius: 14px;
    background: rgba(8, 120, 181, 0.10);
    color: var(--ts-blue);
    font-size: 1.25rem;
    margin-bottom: 18px;
    transition: background 0.35s ease, color 0.35s ease, transform 0.35s ease;
  }
  .ts-card:hover .ts-ico { background: var(--ts-blue); color: #fff; transform: rotate(-6deg); }
  .ts-card h3 {
    font-family: var(--font-display);
    color: var(--ts-ink);
    font-size: 1.08rem;
    font-weight: 800;
    letter-spacing: -0.2px;
    margin: 0 0 10px;
  }
  .ts-card p {
    color: #5B6B7A;
    font-size: 0.9rem;
    line-height: 1.7;
    margin: 0;
  }

  @media (max-width: 1023px) {
    .ts-layout { grid-template-columns: 1fr; gap: 44px; }
  }
  @media (max-width: 640px) {
    .ts-section { padding: 84px 4% 72px; }
    .ts-grid { grid-template-columns: 1fr; }
    .ts-deco { display: none; }
  }
  @media (prefers-reduced-motion: reduce) {
    .ts-card, .ts-ico, .ts-link { transition: none !important; transform: none !important; }
  }

  /* ═══════ TECHNOLOGIES WE USE — dark tech cloud ═══════ */
  .tc-section {
    --tc-yellow: #FFD21F;
    position: relative;
    background: linear-gradient(160deg, #041C33 0%, #062B4D 60%, #0A3A66 100%);
    padding: 110px 4% 100px;
    overflow: hidden;
  }
  .tc-pattern {
    position: absolute; inset: 0;
    pointer-events: none;
    background-image:
      radial-gradient(circle at 85% 15%, rgba(255, 210, 31, 0.08), transparent 32%),
      linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
    background-size: auto, 52px 52px, 52px 52px;
  }
  .tc-section .container { position: relative; z-index: 1; }
  .tc-head { text-align: center; margin-bottom: 52px; }
  .tc-tag {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255, 210, 31, 0.10);
    border: 1px solid rgba(255, 210, 31, 0.35);
    color: var(--tc-yellow);
    font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 999px;
    margin-bottom: 18px;
  }
  .tc-title {
    font-family: var(--font-display);
    color: #fff;
    font-size: clamp(30px, 3.8vw, 46px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1.12;
    margin: 0 0 16px;
  }
  .tc-title span {
    color: var(--tc-yellow);
    position: relative;
    display: inline-block;
  }
  .tc-title span::after {
    content: '';
    position: absolute; left: 0; right: 0; bottom: 4px;
    height: 8px;
    border-radius: 6px;
    background: rgba(111, 177, 232, 0.45);
    z-index: -1;
  }
  .tc-sub {
    color: rgba(255, 255, 255, 0.70);
    font-size: 1rem;
    line-height: 1.75;
    margin: 0 auto;
    max-width: 620px;
  }
  .tc-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 14px;
  }
  .tc-section .reveal { transition-delay: var(--d, 0s); }
  .tc-chip {
    display: flex; align-items: center; gap: 14px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 16px;
    padding: 14px 20px;
    color: #EAF2FB;
    font-weight: 700;
    font-size: 0.93rem;
    transition: transform 0.35s ease, border-color 0.35s ease, background 0.35s ease;
  }
  .tc-chip:hover {
    transform: translateY(-4px);
    border-color: rgba(255, 210, 31, 0.55);
    background: rgba(255, 255, 255, 0.08);
  }
  .tc-chip-ico {
    display: inline-grid; place-items: center;
    width: 40px; height: 40px;
    border-radius: 12px;
    background: rgba(8, 120, 181, 0.35);
    color: #7CC4F0;
    font-size: 1.05rem;
    flex-shrink: 0;
    transition: background 0.35s ease, color 0.35s ease;
  }
  .tc-chip:hover .tc-chip-ico { background: var(--tc-yellow); color: #062B4D; }

  /* ═══════ TESTIMONIALS — premium review cards ═══════ */
  .testimonials {
    --tm-accent: #0878B5;
    --tm-yellow: #FFD21F;
    position: relative;
    background: linear-gradient(180deg, #F4F9FE 0%, #ffffff 100%);
    padding: 110px 4% 100px;
    overflow: hidden;
  }
  .tm-deco {
    position: absolute;
    top: 80px; left: 3%;
    font-family: var(--font-display);
    font-weight: 900;
    font-size: 8.5rem;
    letter-spacing: -2px;
    line-height: 1;
    color: rgba(8, 120, 181, 0.05);
    user-select: none;
    pointer-events: none;
  }
  .testimonials .container { position: relative; z-index: 1; }
  .tm-head { text-align: center; max-width: 640px; margin: 0 auto 56px; }
  .tm-tag {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(8, 120, 181, 0.10);
    border: 1px solid rgba(8, 120, 181, 0.28);
    color: var(--tm-accent);
    font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 999px;
    margin-bottom: 18px;
  }
  .tm-title {
    font-family: var(--font-display);
    color: #062B4D;
    font-size: clamp(30px, 3.8vw, 46px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1.12;
    margin: 0 0 16px;
  }
  .tm-title span {
    color: var(--tm-accent);
    position: relative;
    display: inline-block;
  }
  .tm-title span::after {
    content: '';
    position: absolute; left: 0; right: 0; bottom: 4px;
    height: 10px;
    border-radius: 6px;
    background: linear-gradient(90deg, rgba(255, 210, 31, 0.65), rgba(255, 210, 31, 0.05));
    z-index: -1;
  }
  .tm-sub {
    color: #4B5A6B;
    font-size: 1rem;
    line-height: 1.75;
    margin: 0;
  }
  .testimonials .testimonial-card {
    position: relative;
    background: #fff;
    border: 1px solid rgba(8, 120, 181, 0.14);
    border-radius: 24px;
    padding: 44px 40px 38px;
    box-shadow: 0 16px 40px rgba(6, 43, 77, 0.08);
    text-align: center;
    margin: 6px 6px 22px;
  }
  .testimonials .testimonial-card::before {
    content: '\201C';
    position: absolute;
    top: 8px; right: 30px;
    font-family: Georgia, serif;
    font-size: 6rem;
    line-height: 1;
    color: rgba(255, 210, 31, 0.40);
    pointer-events: none;
  }
  .testimonials .testimonial-stars {
    color: #F5B53C;
    font-size: 0.95rem;
    margin-bottom: 18px;
    letter-spacing: 3px;
  }
  .testimonials .testimonial-text {
    color: #33475B;
    font-size: 1.02rem;
    line-height: 1.8;
    margin-bottom: 26px;
  }
  .testimonials .testimonial-author {
    display: flex;
    align-items: center;
    gap: 14px;
    justify-content: center;
  }
  .testimonials .testimonial-avatar {
    width: 54px; height: 54px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--tm-yellow);
    box-shadow: 0 6px 16px rgba(6, 43, 77, 0.15);
  }
  .testimonials .testimonial-name { color: #062B4D; font-weight: 800; font-size: 0.98rem; }
  .testimonials .testimonial-role { color: #7A8794; font-size: 0.82rem; margin-top: 2px; }
  .testimonials .testimonials-nav {
    position: static;
    display: flex;
    justify-content: center;
    gap: 14px;
    margin-top: 36px;
  }
  .testimonials .testimonials-btn {
    width: 52px; height: 52px;
    border-radius: 50%;
    border: 1px solid rgba(8, 120, 181, 0.35);
    background: #fff;
    color: var(--tm-accent);
    font-size: 1rem;
    cursor: pointer;
    display: inline-grid;
    place-items: center;
    transition: all 0.3s ease;
  }
  .testimonials .testimonials-btn:hover {
    background: var(--tm-accent);
    color: #fff;
    border-color: var(--tm-accent);
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(8, 120, 181, 0.25);
  }
  .testimonials .swiper-pagination-bullet { background: #0878B5; opacity: 0.35; }
  .testimonials .swiper-pagination-bullet-active { opacity: 1; }

  /* ═══════ CTA PREMIUM — closing banner ═══════ */
  .cta-premium {
    position: relative;
    background: linear-gradient(135deg, #062B4D 0%, #0A3A66 55%, #0C4580 100%);
    padding: 96px 5%;
    text-align: center;
    overflow: hidden;
  }
  .cta-glow { position: absolute; border-radius: 50%; filter: blur(70px); pointer-events: none; }
  .cta-glow-1 {
    width: 420px; height: 420px;
    top: -140px; left: -80px;
    background: radial-gradient(circle, rgba(111, 177, 232, 0.5), transparent 70%);
  }
  .cta-glow-2 {
    width: 360px; height: 360px;
    bottom: -130px; right: -60px;
    background: radial-gradient(circle, rgba(255, 210, 31, 0.35), transparent 70%);
  }
  .cta-lines {
    position: absolute; inset: 0;
    pointer-events: none;
    background-image:
      linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
    background-size: 54px 54px;
    mask-image: radial-gradient(ellipse at 50% 50%, #000 20%, transparent 75%);
    -webkit-mask-image: radial-gradient(ellipse at 50% 50%, #000 20%, transparent 75%);
  }
  .cta-inner { position: relative; z-index: 1; max-width: 820px; margin: 0 auto; }
  .cta-badge {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255, 210, 31, 0.12);
    border: 1px solid rgba(255, 210, 31, 0.4);
    color: #FFD21F;
    font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 999px;
  }
  .cta-inner h2 {
    font-family: var(--font-display);
    color: #fff;
    font-size: clamp(2rem, 4.2vw, 3.2rem);
    font-weight: 900;
    letter-spacing: -1px;
    margin: 22px 0 18px;
  }
  .cta-inner h2 span { color: #FFD21F; }
  .cta-inner p {
    color: rgba(255, 255, 255, 0.72);
    font-size: 1.06rem;
    line-height: 1.8;
    max-width: 680px;
    margin: 0 auto 38px;
  }
  .cta-actions { display: flex; gap: 18px; justify-content: center; flex-wrap: wrap; }
  .cta-wa, .cta-mail {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 16px 34px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 0.98rem;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease, gap 0.3s ease;
  }
  .cta-wa {
    background: #25d366;
    color: #fff;
    box-shadow: 0 14px 30px rgba(37, 211, 102, 0.35);
  }
  .cta-wa:hover { transform: translateY(-3px); box-shadow: 0 20px 40px rgba(37, 211, 102, 0.42); }
  .cta-mail {
    background: linear-gradient(120deg, #0B7FBF, #006FAE);
    color: #fff;
    box-shadow: 0 14px 30px rgba(0, 111, 174, 0.35);
  }
  .cta-mail:hover { transform: translateY(-3px); box-shadow: 0 20px 40px rgba(0, 111, 174, 0.42); }
  .cta-wa:hover, .cta-mail:hover { gap: 14px; }

  @media (max-width: 600px) {
    .tc-section { padding: 84px 4% 72px; }
    .tc-grid { gap: 10px; }
    .testimonials { padding: 84px 4% 72px; }
    .testimonials .testimonial-card { padding: 34px 24px 30px; }
    .tm-deco { display: none; }
    .cta-premium { padding: 76px 5%; }
    .cta-inner p { font-size: 0.98rem; }
  }
  @media (prefers-reduced-motion: reduce) {
    .tc-chip, .tc-chip-ico, .testimonials .testimonials-btn, .cta-wa, .cta-mail { transition: none !important; transform: none !important; }
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

  if (document.querySelector('.testimonials-slider')) {
    new Swiper('.testimonials-slider', {
      slidesPerView: 1,
      spaceBetween: 24,
      speed: 700,
      loop: true,
      autoplay: { delay: 6000, disableOnInteraction: false },
      observer: true,
      observeParents: true,
      pagination: { el: '.testimonials .swiper-pagination', clickable: true },
      navigation: {
        nextEl: '.testimonials-nav .testimonials-next',
        prevEl: '.testimonials-nav .testimonials-prev',
      },
      breakpoints: {
        768: { slidesPerView: 2, spaceBetween: 24 },
        1100: { slidesPerView: 3, spaceBetween: 28 },
      },
    });
  }

  if (document.querySelector('.os-slider')) {
    var osSlider = new Swiper('.os-slider', {
      slidesPerView: 'auto',
      spaceBetween: 28,
      loop: true,
      speed: 700,
      grabCursor: true,
      autoplay: { delay: 5200, disableOnInteraction: false, pauseOnMouseEnter: true },
      keyboard: { enabled: true, onlyInViewport: true },
      observer: true,
      observeParents: true,
      pagination: { el: '.os-pagination', clickable: true },
      navigation: {
        nextEl: '.os-next',
        prevEl: '.os-prev',
      },
      breakpoints: {
        768: { spaceBetween: 24 },
        1200: { spaceBetween: 28 },
      },
      on: {
        init: function (swiper) {
          if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            swiper.autoplay.stop();
            swiper.params.speed = 0;
          }
        },
      },
    });
  }
</script>
@endsection
