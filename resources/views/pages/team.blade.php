@extends('layouts.app')

@section('title', 'Our Team | Jezdan Technology – ICT Experts in Tanzania')

@section('meta_tags')
  <meta name="description" content="Meet the team behind Jezdan Technology. Skilled software engineers, network specialists, cybersecurity experts and ICT consultants based in Moshi, Kilimanjaro, Tanzania.">
  <meta name="keywords" content="ICT team Tanzania, software engineers Tanzania, network experts Kilimanjaro, Jezdan Technology team">
  <meta property="og:title" content="Our Team | Jezdan Technology">
  <meta property="og:description" content="Meet the skilled engineers, developers and ICT consultants behind Jezdan Technology.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')

<!-- HERO -->
<section class="hero" id="home" style="min-height: 62vh; text-align: center;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay" style="mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%); -webkit-mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%);"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <div style="max-width: 820px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Our Team
      </div>
      <h1 class="hero-title">
        The People Behind Your <span>Digital Success</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        A passionate team of engineers, developers, security experts and consultants — committed to delivering world-class ICT solutions for Tanzanian businesses from Moshi, Kilimanjaro.
      </p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="#team" class="btn-primary"><i class="fas fa-users"></i> Meet the Team</a>
        <a href="{{ route('careers') }}" class="btn-outline"><i class="fas fa-rocket"></i> Join Our Team</a>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="team-section" id="team">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:640px;margin:0 auto 60px;">
      <div class="section-label"><i class="fas fa-user-tie"></i> Who We Are</div>
      <h2 class="section-title">Meet Our <span>Specialists</span></h2>
      <p class="section-sub" style="margin:0 auto;">Certified professionals with hands-on experience across web, mobile, networks, security and enterprise systems.</p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/portrait-male-engineer-working-field-engineers-day-celebration_afzsch.jpg" alt="Eng. John Makweta">
          <div class="team-socials">
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="team-body">
          <h3>Eng. John Makweta</h3>
          <span class="team-role">Founder &amp; Managing Director</span>
          <p>Strategic leader with 10+ years in ICT, guiding businesses through complete digital transformation.</p>
        </div>
      </div>
      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/programmer-home-office-concentrating-finding-bugs-while-he-codes_gctbqc.jpg" alt="Amina Rashidi">
          <div class="team-socials">
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="team-body">
          <h3>Amina Rashidi</h3>
          <span class="team-role">Head of Software Engineering</span>
          <p>Leads our web &amp; mobile development team, delivering scalable Laravel, React and Flutter solutions.</p>
        </div>
      </div>
      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg" alt="David Msangi">
          <div class="team-socials">
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="team-body">
          <h3>David Msangi</h3>
          <span class="team-role">Network &amp; Infrastructure Lead</span>
          <p>Certified network specialist (Cisco, Ubiquiti, Mikrotik) building fast, secure and reliable networks.</p>
        </div>
      </div>
      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" alt="Grace Mutua">
          <div class="team-socials">
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="team-body">
          <h3>Grace Mutua</h3>
          <span class="team-role">Cybersecurity Analyst</span>
          <p>Security audits, penetration testing and 24/7 monitoring — keeping businesses protected around the clock.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="team-values">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:640px;margin:0 auto 60px;">
      <div class="section-label"><i class="fas fa-heart"></i> What Drives Us</div>
      <h2 class="section-title">Our Core <span>Values</span></h2>
    </div>
    <div class="addons-grid">
      <div class="addon-card reveal">
        <div class="addon-icon"><i class="fas fa-medal"></i></div>
        <div>
          <h5>Certified Expertise</h5>
          <p style="font-size:0.88rem;color:#4A5E78;line-height:1.6;">Continuously trained and certified across global platforms and local standards.</p>
        </div>
      </div>
      <div class="addon-card reveal">
        <div class="addon-icon"><i class="fas fa-handshake"></i></div>
        <div>
          <h5>Local Commitment</h5>
          <p style="font-size:0.88rem;color:#4A5E78;line-height:1.6;">We understand Tanzanian business — Swahili support, M-Pesa, TCRA compliance.</p>
        </div>
      </div>
      <div class="addon-card reveal">
        <div class="addon-icon"><i class="fas fa-clock"></i></div>
        <div>
          <h5>On-Time Delivery</h5>
          <p style="font-size:0.88rem;color:#4A5E78;line-height:1.6;">We deliver in days, not months — with transparent timelines and regular updates.</p>
        </div>
      </div>
      <div class="addon-card reveal">
        <div class="addon-icon"><i class="fas fa-lightbulb"></i></div>
        <div>
          <h5>Innovation First</h5>
          <p style="font-size:0.88rem;color:#4A5E78;line-height:1.6;">We adopt modern tools and proven frameworks to keep you ahead of the curve.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="stats-grid">
    <div class="stat-item">
      <span class="stat-num">15<span>+</span></span>
      <div class="stat-label">Specialist Team Members</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:80%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">500<span>+</span></span>
      <div class="stat-label">Projects Delivered</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:90%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">98<span>%</span></span>
      <div class="stat-label">Client Satisfaction</div>
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
    <h2>Ready to Work <span>With Our Team</span>?</h2>
    <p>Let's discuss how our specialists can help your business grow. Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20working%20with%20your%20team." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('request.quote') }}" class="btn-primary"><i class="fas fa-envelope"></i> Get a Quote</a>
    </div>
  </div>
</div>

<style>
  .team-section { background: var(--off-white); }
  .team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 26px;
  }
  .team-card {
    background: #fff;
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--line);
    transition: all 0.3s ease;
  }
  .team-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-hover); border-color: rgba(12,69,128,0.2); }
  .team-photo { position: relative; overflow: hidden; }
  .team-photo img { width: 100%; height: 280px; object-fit: cover; display: block; transition: transform 0.5s ease; }
  .team-card:hover .team-photo img { transform: scale(1.06); }
  .team-photo::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(180deg, transparent 55%, rgba(6,43,77,0.45));
  }
  .team-socials {
    position: absolute; bottom: 14px; left: 50%; transform: translateX(-50%) translateY(10px);
    display: flex; gap: 8px; z-index: 2;
    opacity: 0; transition: all 0.3s ease;
  }
  .team-card:hover .team-socials { opacity: 1; transform: translateX(-50%) translateY(0); }
  .team-socials a {
    width: 38px; height: 38px; border-radius: 10px;
    background: rgba(255,255,255,0.95); color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 0.9rem; text-decoration: none;
    transition: all 0.2s;
  }
  .team-socials a:hover { background: var(--primary); color: #fff; }
  .team-body { padding: 24px 24px 26px; }
  .team-body h3 { font-family: var(--font-display); font-size: 1.2rem; font-weight: 900; color: var(--dark); margin-bottom: 4px; letter-spacing: -0.3px; }
  .team-role {
    display: inline-block; font-size: 0.76rem; font-weight: 800;
    text-transform: uppercase; letter-spacing: 0.8px;
    color: var(--primary); background: var(--primary-soft);
    padding: 4px 12px; border-radius: 50px; margin-bottom: 12px;
  }
  .team-body p { font-size: 0.88rem; color: var(--ink-muted); line-height: 1.65; }
  .team-values { background: #fff; }
</style>

@endsection
