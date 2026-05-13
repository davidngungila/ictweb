@extends('layouts.app')

@section('title', 'Our Portfolio | ICT Projects in Tanzania')

@section('meta_tags')
  <meta name="description" content="View our portfolio of ICT projects in Tanzania including websites, mobile apps, network installations and cybersecurity solutions.">
  <meta name="keywords" content="ICT portfolio Tanzania, web development projects Tanzania, IT projects Dar es Salaam">
  <meta property="og:title" content="Our Portfolio | ICT Projects in Tanzania">
  <meta property="og:description" content="View our portfolio of ICT projects in Tanzania including websites, mobile apps, network installations and cybersecurity solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
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
<section class="hero" id="home" style="min-height: 75vh; display: flex; align-items: center; justify-content: center; text-align: center;">
  <div class="hero-bg-img" style="opacity: 0.1; background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1600&q=80');"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="display: block; max-width: 900px;">
    <div class="hero-badge" style="margin: 0 auto 24px;">
      <span class="dot"></span>
      Innovation in Motion
    </div>
    <h1 class="hero-title">
      Showcasing Our <span>Digital Excellence</span>
    </h1>
    <p class="hero-subtitle" style="margin: 0 auto 40px; max-width: 650px;">
      A curated collection of high-impact digital solutions, from enterprise systems to bespoke web experiences, crafted for the Tanzanian and global markets.
    </p>
    <div class="hero-actions" style="justify-content: center;">
      <a href="{{ route('contact') }}" class="btn-primary">
        <i class="fas fa-rocket"></i> Start Your Project
      </a>
      <a href="#portfolio-grid" class="btn-outline">
        <i class="fas fa-th-large"></i> Browse Work
      </a>
    </div>
  </div>
</section>

<!-- PORTFOLIO GRID -->
<section class="portfolio-section" style="background: var(--off-white); padding: 100px 5%;">
  <div class="container">
    <div class="section-header" style="text-align: center; margin-bottom: 80px;">
      <div class="section-label" style="margin: 0 auto 16px;"><i class="fas fa-briefcase"></i> Selected Works</div>
      <h2 class="section-title">Featured <span>Projects</span></h2>
      <p class="section-sub" style="margin: 0 auto;">Explore our track record of delivering robust, scalable, and user-centric digital products that drive business growth.</p>
    </div>

    <div class="portfolio-filters-wrapper" style="margin-bottom: 50px; display: flex; justify-content: center;">
      <div style="display:flex; flex-wrap:wrap; gap:12px; background: white; padding: 8px; border-radius: 50px; box-shadow: var(--shadow);" id="portfolio-filters">
        <button type="button" class="tab-btn active" data-tag="all" style="border:none;">All Projects</button>
        @foreach($portfolioTags as $tag)
          <button type="button" class="tab-btn" data-tag="{{ $tag }}" style="border:none;">{{ $tag }}</button>
        @endforeach
      </div>
    </div>

    <div class="services-grid" id="portfolio-grid">
      @foreach($projects as $project)
      <article class="service-card portfolio-item" data-tag="{{ $project['tag'] }}" style="padding: 0; overflow: hidden; display:flex; flex-direction:column; border: none; transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);">
        <div class="portfolio-img-container" style="position: relative; overflow: hidden; height: 260px;">
          <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;" />
          <div class="portfolio-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11,31,58,0.9), transparent); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: flex-end; padding: 24px;">
             <span style="color: white; font-weight: 600; font-size: 0.9rem;">View Details <i class="fas fa-arrow-right" style="margin-left: 8px;"></i></span>
          </div>
        </div>
        <div style="padding: 30px; flex:1; display:flex; flex-direction:column; background: white;">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
            <span style="display: inline-block; background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 14px; border-radius: 50px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">{{ $project['tag'] }}</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.35rem; font-weight: 700; color: var(--navy); margin-bottom: 12px; line-height: 1.3;">{{ $project['title'] }}</h3>
          <p style="font-size: 0.95rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 24px; flex:1;">{{ $project['excerpt'] }}</p>
          <a href="{{ route('portfolio.show', $project['slug']) }}" class="portfolio-link" style="display: inline-flex; align-items: center; gap: 10px; font-weight: 700; color: var(--accent); text-decoration: none; font-size: 0.9rem; transition: gap 0.3s;">
            Explore Case Study <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i>
          </a>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</section>

<style>
  .portfolio-item:hover {
    transform: translateY(-10px) !important;
    box-shadow: 0 20px 40px rgba(11,31,58,0.15) !important;
  }
  .portfolio-item:hover img {
    transform: scale(1.1);
  }
  .portfolio-item:hover .portfolio-overlay {
    opacity: 1;
  }
  .portfolio-item:hover .portfolio-link {
    gap: 15px !important;
  }
  
  .tab-btn {
    transition: all 0.3s ease;
  }
  .tab-btn.active {
    background: var(--accent) !important;
    color: white !important;
    box-shadow: 0 4px 12px rgba(26,111,196,0.3);
  }
</style>

<!-- OUR PROCESS -->
<section class="process-section" style="background: white; padding: 100px 5%;">
  <div class="container">
    <div class="section-header" style="text-align: center; margin-bottom: 70px;">
      <div class="section-label" style="margin: 0 auto 16px;"><i class="fas fa-sync-alt"></i> Our Workflow</div>
      <h2 class="section-title">How We <span>Deliver Success</span></h2>
      <p class="section-sub" style="margin: 0 auto;">A systematic approach to turning your vision into a high-performing digital reality.</p>
    </div>
    
    <div class="process-steps" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 30px;">
      <div class="process-step-card" style="text-align: center; padding: 40px 20px; border-radius: 20px; background: var(--off-white); transition: all 0.3s;">
        <div class="step-icon" style="width: 70px; height: 70px; background: var(--navy); color: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 1.5rem; box-shadow: 0 10px 20px rgba(11,31,58,0.1);">
          <i class="fas fa-search"></i>
        </div>
        <h4 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">1. Discovery</h4>
        <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6;">We dive deep into your requirements and business goals to build a solid foundation.</p>
      </div>
      
      <div class="process-step-card" style="text-align: center; padding: 40px 20px; border-radius: 20px; background: var(--off-white); transition: all 0.3s;">
        <div class="step-icon" style="width: 70px; height: 70px; background: var(--navy); color: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 1.5rem; box-shadow: 0 10px 20px rgba(11,31,58,0.1);">
          <i class="fas fa-pencil-ruler"></i>
        </div>
        <h4 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">2. Strategy & Design</h4>
        <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6;">Crafting the blueprint and user experience tailored specifically for your target audience.</p>
      </div>
      
      <div class="process-step-card" style="text-align: center; padding: 40px 20px; border-radius: 20px; background: var(--off-white); transition: all 0.3s;">
        <div class="step-icon" style="width: 70px; height: 70px; background: var(--navy); color: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 1.5rem; box-shadow: 0 10px 20px rgba(11,31,58,0.1);">
          <i class="fas fa-code"></i>
        </div>
        <h4 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">3. Development</h4>
        <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6;">Our experts build your solution using modern, scalable, and secure technologies.</p>
      </div>
      
      <div class="process-step-card" style="text-align: center; padding: 40px 20px; border-radius: 20px; background: var(--off-white); transition: all 0.3s;">
        <div class="step-icon" style="width: 70px; height: 70px; background: var(--navy); color: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 1.5rem; box-shadow: 0 10px 20px rgba(11,31,58,0.1);">
          <i class="fas fa-rocket"></i>
        </div>
        <h4 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">4. Launch & Support</h4>
        <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6;">Deployment and continuous optimization to ensure long-term digital success.</p>
      </div>
    </div>
  </div>
</section>

<style>
  .process-step-card:hover {
    background: white !important;
    box-shadow: 0 15px 45px rgba(11,31,58,0.1);
    transform: translateY(-5px);
  }
  .process-step-card:hover .step-icon {
    background: var(--accent) !important;
    color: white !important;
  }
</style>

<!-- STATS -->
<div class="stats" style="background: var(--navy); padding: 80px 5%; border-top: 1px solid rgba(255,255,255,0.1);">
  <div class="container">
    <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; text-align: center;">
      <div class="stat-item">
        <div style="font-size: 2.5rem; color: var(--gold); margin-bottom: 10px;"><i class="fas fa-check-circle"></i></div>
        <span class="stat-num" style="color: white; font-size: 2.5rem; font-weight: 800;">500<span>+</span></span>
        <div class="stat-label" style="color: rgba(255,255,255,0.6); font-weight: 600; margin-top: 8px; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem;">Projects Delivered</div>
      </div>
      <div class="stat-item">
        <div style="font-size: 2.5rem; color: var(--gold); margin-bottom: 10px;"><i class="fas fa-users"></i></div>
        <span class="stat-num" style="color: white; font-size: 2.5rem; font-weight: 800;">200<span>+</span></span>
        <div class="stat-label" style="color: rgba(255,255,255,0.6); font-weight: 600; margin-top: 8px; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem;">Trusted Clients</div>
      </div>
      <div class="stat-item">
        <div style="font-size: 2.5rem; color: var(--gold); margin-bottom: 10px;"><i class="fas fa-smile"></i></div>
        <span class="stat-num" style="color: white; font-size: 2.5rem; font-weight: 800;">98<span>%</span></span>
        <div class="stat-label" style="color: rgba(255,255,255,0.6); font-weight: 600; margin-top: 8px; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem;">Satisfaction Rate</div>
      </div>
      <div class="stat-item">
        <div style="font-size: 2.5rem; color: var(--gold); margin-bottom: 10px;"><i class="fas fa-headset"></i></div>
        <span class="stat-num" style="color: white; font-size: 2.5rem; font-weight: 800;">24<span>/7</span></span>
        <div class="stat-label" style="color: rgba(255,255,255,0.6); font-weight: 600; margin-top: 8px; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem;">Expert Support</div>
      </div>
    </div>
  </div>
</div>

<!-- CTA BANNER -->
<div class="cta-banner" style="padding: 100px 5%; background: linear-gradient(135deg, var(--navy), var(--navy-mid)); position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; right: 0; width: 400px; height: 400px; background: radial-gradient(circle, rgba(26,111,196,0.1) 0%, transparent 70%);"></div>
  <div class="cta-inner" style="max-width: 900px; margin: 0 auto; text-align: center; position: relative; z-index: 1;">
    <h2 style="font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: white; margin-bottom: 24px;">Ready to Elevate <span>Your Digital Presence</span>?</h2>
    <p style="color: rgba(255,255,255,0.7); font-size: 1.1rem; line-height: 1.8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
      Partner with ICT specialists who understand the Tanzanian market. Whether you're a startup or an established enterprise, we have the tools to help you succeed.
    </p>
    <div class="cta-actions" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20starting%20a%20project." class="btn-whatsapp" target="_blank" style="background: #25d366; color: white; padding: 14px 30px; border-radius: 50px; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 10px; transition: all 0.3s;">
        <i class="fab fa-whatsapp" style="font-size: 1.4rem;"></i> WhatsApp Us
      </a>
      <a href="{{ route('contact') }}" class="btn-primary" style="background: white; color: var(--navy); padding: 14px 30px; border-radius: 50px; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 10px; transition: all 0.3s;">
        <i class="fas fa-calendar-check"></i> Book Consultation
      </a>
    </div>
  </div>
</div>

<style>
  .portfolio-item {
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
  }
  .portfolio-item.hidden {
    opacity: 0;
    transform: scale(0.9);
    pointer-events: none;
    position: absolute;
  }
</style>
@endsection

@section('additional_scripts')
<script>
  document.querySelectorAll('#portfolio-filters .tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      document.querySelectorAll('#portfolio-filters .tab-btn').forEach(function (b) { b.classList.remove('active'); });
      this.classList.add('active');
      var tag = this.getAttribute('data-tag');
      
      const items = document.querySelectorAll('#portfolio-grid .portfolio-item');
      items.forEach(function (card) {
        var matches = tag === 'all' || card.getAttribute('data-tag') === tag;
        
        if (matches) {
          card.style.display = 'flex';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'scale(1)';
          }, 10);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(0.95)';
          setTimeout(() => {
            card.style.display = 'none';
          }, 400);
        }
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
