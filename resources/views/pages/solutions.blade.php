@extends('layouts.app')

@section('title', 'Solutions | Web, Apps, Networks, Security & Cloud – Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Explore all Jezdan Technology solutions: web development, mobile apps, system development, network installation, cybersecurity, IT support, ICT consultancy, and cloud services.">
  <meta name="keywords" content="ICT solutions Tanzania, web development Tanzania, mobile apps Tanzania, network installation Tanzania, cybersecurity Tanzania, cloud services Tanzania">
  <meta property="og:title" content="Solutions | Jezdan Technology">
  <meta property="og:description" content="End-to-end digital solutions for Tanzanian businesses — web, mobile, systems, networks, security, support, and cloud.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  .sol-hero-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #fff, #9CC9EE, #fff);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: solShine 5s linear infinite;
  }
  @keyframes solShine { to { background-position: 200% center; } }

  .sol-header { text-align: center; max-width: 720px; margin: 0 auto 60px; }
  .sol-header-tag {
    position: relative;
    display: inline-flex; align-items: center; gap: 12px;
    margin-bottom: 20px;
    color: var(--primary); font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2.2px; text-transform: uppercase;
  }
  .sol-header-tag::before,
  .sol-header-tag::after {
    content: '';
    width: 32px; height: 2px;
    background: linear-gradient(90deg, var(--primary), var(--sky-bright));
    animation: solTagLine 2.4s ease-in-out infinite;
  }
  .sol-header-tag::after { background: linear-gradient(90deg, var(--sky-bright), var(--primary)); }
  @keyframes solTagLine {
    0%, 100% { transform: scaleX(1); }
    50%      { transform: scaleX(0.4); }
  }
  .sol-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #062B4D, #0C4580, #6FB1E8, #062B4D);
    background-size: 300% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: solGradientText 6s linear infinite;
  }
  .sol-title span { color: transparent; }
  @keyframes solGradientText { to { background-position: 300% center; } }
  .sol-sub { color: var(--ink-muted); line-height: 1.7; }

  .sol-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }
  @media (max-width: 992px) { .sol-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .sol-grid { grid-template-columns: 1fr; } }
  .sol-reveal { height: 100%; transition-delay: var(--d, 0s); }

  .sol-card {
    position: relative; height: 100%;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .sol-card::after {
    content: '';
    position: absolute; inset: 0; z-index: 3; pointer-events: none;
    border-radius: 20px;
    box-shadow: inset 0 0 0 2px rgba(12, 69, 128, 0);
    transition: box-shadow 0.45s ease;
  }
  .sol-card:hover {
    transform: translateY(-12px);
    border-color: rgba(12, 69, 128, 0.25);
    box-shadow: 0 26px 60px rgba(6, 43, 77, 0.16);
  }
  .sol-card:hover::after { box-shadow: inset 0 0 0 2px rgba(12, 69, 128, 0.12); }

  .sol-card-media { position: relative; height: 190px; overflow: hidden; }
  .sol-card-media img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transform: scale(1.01);
    transition: transform 0.7s cubic-bezier(.22, .61, .36, 1);
  }
  .sol-card:hover .sol-card-media img { transform: scale(1.12); }
  .sol-card-media::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(6, 43, 77, 0) 40%, rgba(6, 43, 77, 0.55) 100%);
    opacity: 0.85;
    transition: opacity 0.45s ease;
  }
  .sol-card:hover .sol-card-media::after { opacity: 1; }
  .sol-card-num {
    position: absolute; top: 14px; right: 16px; z-index: 2;
    font-family: var(--font-mono); font-weight: 900; font-size: 1.02rem;
    color: #fff; letter-spacing: 1.5px;
    background: rgba(6, 43, 77, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(6px);
    padding: 4px 13px; border-radius: 30px;
  }
  .sol-card-icon {
    position: absolute; bottom: -25px; left: 22px; z-index: 4;
    width: 54px; height: 54px; border-radius: 15px;
    background: #fff; color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.25rem;
    box-shadow: 0 10px 24px rgba(6, 43, 77, 0.25);
    transition: transform 0.4s cubic-bezier(.34, 1.56, .64, 1), background 0.4s ease, color 0.4s ease;
  }
  .sol-card:hover .sol-card-icon {
    transform: translateY(-6px) rotate(-8deg) scale(1.08);
    background: var(--primary); color: #fff;
  }

  .sol-card-body { padding: 30px 26px 28px; position: relative; z-index: 2; }
  .sol-card-body h3 {
    font-family: var(--font-display);
    font-size: 1.3rem; font-weight: 900;
    color: var(--dark); margin-bottom: 12px; letter-spacing: -0.3px;
  }
  .sol-card-body p { font-size: 0.92rem; color: var(--ink-muted); line-height: 1.7; margin-bottom: 20px; }
  .sol-chips { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 22px; }
  .sol-chip {
    background: #F0F6FE; color: var(--primary);
    font-size: 0.72rem; font-weight: 700;
    padding: 5px 12px; border-radius: 30px;
  }
  .sol-link {
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--primary); font-weight: 800; font-size: 0.92rem;
    text-decoration: none; position: relative;
  }
  .sol-link::after {
    content: '';
    position: absolute; left: 0; bottom: -3px; height: 2px; width: 0;
    background: var(--primary);
    transition: width 0.35s ease;
  }
  .sol-link i { transition: transform 0.35s ease; }
  .sol-card:hover .sol-link::after { width: 100%; }
  .sol-card:hover .sol-link i { transform: translateX(6px); }

  .sol-banner {
    position: relative; overflow: hidden;
    display: flex; align-items: center; justify-content: space-between; gap: 28px; flex-wrap: wrap;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    border-radius: 22px; padding: 42px 46px;
    color: #fff;
    animation: solCtaShift 8s linear infinite;
  }
  @keyframes solCtaShift { to { background-position: 200% center; } }
  .sol-banner::before {
    content: '';
    position: absolute; width: 280px; height: 280px; border-radius: 50%;
    top: -90px; right: -70px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.28), transparent 70%);
    animation: solPulse 5s ease-in-out infinite;
  }
  @keyframes solPulse {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50%      { transform: scale(1.15); opacity: 1; }
  }
  .sol-banner h3 {
    font-family: var(--font-display);
    font-size: 1.6rem; font-weight: 900; margin-bottom: 8px;
  }
  .sol-banner p { color: rgba(255, 255, 255, 0.8); font-size: 0.98rem; max-width: 560px; line-height: 1.65; }
  .sol-banner-actions { display: flex; gap: 14px; flex-wrap: wrap; position: relative; z-index: 2; }
  .sol-banner .btn-primary { background: #fff; color: var(--primary); box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2); }
  .sol-banner .btn-primary:hover { background: var(--sky-bright); color: #062B4D; }
  .sol-banner .btn-outline { border-color: rgba(255, 255, 255, 0.55); color: #fff; }
  .sol-banner .btn-outline:hover { background: rgba(255, 255, 255, 0.12); }

  /* ═══ Solutions hero — compact premium ═══ */
  .solutions-hero {
    min-height: 46vh;
    text-align: center;
  }
  .solutions-hero .hero-grid-overlay {
    mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 75%);
    -webkit-mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 75%);
  }
  .solutions-hero .hero-glow {
    width: 500px; height: 500px;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    background: radial-gradient(circle, rgba(61, 143, 212, 0.55) 0%, transparent 70%);
    opacity: 0.16;
    filter: blur(80px);
    animation: solGlowFloat 9s ease-in-out infinite;
  }
  .solutions-hero .hero-glow-2 {
    width: 250px; height: 250px;
    bottom: -70px; left: auto; right: 14%;
    background: radial-gradient(circle, rgba(255, 210, 31, 0.7) 0%, transparent 70%);
    opacity: 0.10;
    filter: blur(60px);
    animation: solGlowFloatAlt 11s ease-in-out infinite;
  }
  @keyframes solGlowFloat {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50%      { transform: translate(-50%, -50%) scale(1.08); }
  }
  @keyframes solGlowFloatAlt {
    0%, 100% { transform: scale(1); }
    50%      { transform: scale(1.18); }
  }
  .solutions-hero .hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 70px 20px 60px;
  }
  .solutions-hero .hero-badge {
    gap: 8px;
    padding: 7px 14px;
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    margin-bottom: 18px;
    animation: solHeroUp 0.5s ease both;
  }
  .solutions-hero .hero-badge .dot {
    width: 6px; height: 6px;
  }
  .solutions-hero .hero-title {
    font-size: clamp(2.4rem, 4.2vw, 3.5rem);
    line-height: 1.08;
    letter-spacing: -0.025em;
    max-width: 850px;
    margin: 0 auto 18px;
    animation: solHeroUp 0.6s 0.1s ease both;
  }
  .solutions-hero .hero-title.sol-hero-title {
    background: none;
    -webkit-text-fill-color: #fff;
    color: #fff;
  }
  .solutions-hero .hero-title span {
    background: linear-gradient(120deg, #FFD21F 0%, #F5B53C 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: transparent;
  }
  .solutions-hero .hero-subtitle {
    max-width: 650px;
    margin: 0 auto;
    font-size: 1.02rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.72);
    animation: solHeroUp 0.6s 0.2s ease both;
  }
  .hero-accent-line {
    position: relative;
    width: 170px;
    height: 2px;
    margin: 22px auto 0;
    background: linear-gradient(90deg, transparent, rgba(111, 177, 232, 0.6) 42%, rgba(111, 177, 232, 0.6) 58%, transparent);
    animation: solHeroUp 0.6s 0.3s ease both;
  }
  .hero-accent-line::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--os-yellow, #FFD21F);
    box-shadow: 0 0 14px rgba(255, 210, 31, 0.8);
  }
  @keyframes solHeroUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @media (max-width: 767px) {
    .solutions-hero .hero-content { padding: 55px 18px 50px; }
    .solutions-hero .hero-title { font-size: 32px; line-height: 1.1; }
    .solutions-hero .hero-subtitle { font-size: 15px; line-height: 1.6; }
    .hero-accent-line { margin-top: 18px; }
  }
  @media (prefers-reduced-motion: reduce) {
    .solutions-hero .hero-glow,
    .solutions-hero .hero-glow-2,
    .solutions-hero .hero-badge,
    .solutions-hero .hero-title,
    .solutions-hero .hero-subtitle,
    .hero-accent-line { animation: none !important; }
  }
</style>

<!-- HERO -->
<section class="hero solutions-hero" id="home">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-badge">
      <span class="dot"></span>
      Our Solutions
    </div>
    <h1 class="hero-title sol-hero-title">
      Every Digital Solution Your Business Needs — <span>All In One Place</span>
    </h1>
    <p class="hero-subtitle">
      Complete ICT solutions for websites, mobile, cloud, networks and security.
    </p>
    <div class="hero-accent-line"></div>
  </div>
</section>

<!-- SOLUTIONS -->
<section class="services" style="background: var(--off-white); padding: 110px 0;">
  <div class="container">
    <div class="sol-header reveal">
      <div class="sol-header-tag"><i class="fas fa-layer-group"></i> Complete Solutions</div>
      <h2 class="sol-title">End-to-End <span>ICT Solutions</span></h2>
      <p class="sol-sub">Every service you need to launch, protect, and grow your business — delivered by one team.</p>
    </div>

    <div class="sol-grid">
      @php
        $solutions = [
          [
            'title' => 'Web Development',
            'id' => 'web-development',
            'desc' => 'Custom websites and e-commerce platforms with CMS, product management, and integrated mobile money payments.',
            'chips' => ['Websites', 'E-Commerce', 'CMS'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg',
            'icon' => 'fa-code',
            'route' => route('services.web-development'),
          ],
          [
            'title' => 'Mobile App Development',
            'id' => 'mobile-app-development',
            'desc' => 'Cross-platform Android & iOS apps built with Flutter and React Native — from booking apps to delivery platforms.',
            'chips' => ['Android', 'iOS', 'Flutter'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg',
            'icon' => 'fa-mobile-screen-button',
            'route' => route('services.mobile-app-development'),
          ],
          [
            'title' => 'System Development',
            'id' => 'system-development',
            'desc' => 'Custom software, ERP, CRM, and business portals that automate operations and connect your teams.',
            'chips' => ['ERP', 'CRM', 'Portals'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg',
            'icon' => 'fa-cubes',
            'route' => route('services.system-development'),
          ],
          [
            'title' => 'Network Installation',
            'id' => 'network-installation',
            'desc' => 'Enterprise-grade Wi-Fi for offices, hotels, and camps — VLANs, guest networks, and security configuration.',
            'chips' => ['Wi-Fi', 'VLANs', 'Structured Cabling'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg',
            'icon' => 'fa-network-wired',
            'route' => route('services.network-installation'),
          ],
          [
            'title' => 'Cybersecurity',
            'id' => 'cybersecurity',
            'desc' => 'Vulnerability assessments, 24/7 monitoring, firewalls, and compliance support to keep your data safe.',
            'chips' => ['Audits', 'Firewalls', 'Monitoring'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg',
            'icon' => 'fa-shield-halved',
            'route' => route('services.cybersecurity'),
          ],
          [
            'title' => 'IT Support',
            'id' => 'it-support',
            'desc' => 'Remote and on-site retainer plans with guaranteed SLAs, dedicated managers, and fast response times.',
            'chips' => ['Remote', 'On-Site', 'SLAs'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/irritated-african-american-man-struggling-reach-internet-provider_rriiiz.jpg',
            'icon' => 'fa-headset',
            'route' => route('services.it-support'),
          ],
          [
            'title' => 'ICT Consultancy',
            'id' => 'ict-consultancy',
            'desc' => 'Technology audits, digital roadmaps, vendor management, and CTO-on-demand advisory services.',
            'chips' => ['Strategy', 'Roadmaps', 'CTO-on-Demand'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg',
            'icon' => 'fa-lightbulb',
            'route' => route('services.ict-consultancy'),
          ],
          [
            'title' => 'Cloud Services',
            'id' => 'cloud-services',
            'desc' => 'Hosting, business email, cloud storage, backups, and disaster recovery for reliable operations.',
            'chips' => ['Hosting', 'Email', 'Backup'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg',
            'icon' => 'fa-cloud',
            'route' => route('services.cloud-services'),
          ],
          [
            'title' => 'CCTV & Security Systems',
            'id' => 'cctv-security-systems',
            'desc' => 'Complete surveillance integrated with your network — remote monitoring and cloud storage included.',
            'chips' => ['CCTV', 'Surveillance', 'Cloud Storage'],
            'img' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg',
            'icon' => 'fa-video',
            'route' => route('services.network-installation'),
          ],
        ];
      @endphp

      @foreach($solutions as $solution)
      <div class="reveal sol-reveal" style="--d:{{ ($loop->index % 3) * 90 }}ms;">
        <article class="sol-card" id="{{ $solution['id'] }}">
          <div class="sol-card-media">
            <img src="{{ $solution['img'] }}" alt="{{ $solution['title'] }}" />
            <span class="sol-card-num">0{{ $loop->index + 1 }}</span>
            <div class="sol-card-icon"><i class="fas {{ $solution['icon'] }}"></i></div>
          </div>
          <div class="sol-card-body">
            <h3>{{ $solution['title'] }}</h3>
            <p>{{ $solution['desc'] }}</p>
            <div class="sol-chips">
              @foreach($solution['chips'] as $chip)
                <span class="sol-chip">{{ $chip }}</span>
              @endforeach
            </div>
            <a href="{{ $solution['route'] }}" class="sol-link">Explore Solution <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- INDUSTRY SOLUTIONS -->
<section style="background: #fff; padding: 110px 0;">
  <div class="container">
    <div class="section-header" style="text-align:center; max-width: 640px; margin: 0 auto 60px;">
      <div class="section-label"><i class="fas fa-briefcase"></i> Built for Your Industry</div>
      <h2 class="section-title">Solutions Tailored to <span>How You Do Business</span></h2>
      <p class="section-sub">Purpose-built solutions for the sectors we serve across Tanzania and East Africa.</p>
    </div>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">
      @php
        $industries = [
          ['icon' => 'fa-earth-africa', 'title' => 'Tour & Safari Operators', 'desc' => 'Booking engines, M-Pesa payments, and immersive safari websites that convert travelers worldwide.'],
          ['icon' => 'fa-cart-shopping', 'title' => 'E-Commerce & Retail', 'desc' => 'Online stores with mobile money checkout, inventory, and order management built for local shoppers.'],
          ['icon' => 'fa-hospital', 'title' => 'Hotels, Lodges & Camps', 'desc' => 'Guest-grade Wi-Fi, reservation systems, and CCTV for hospitality that earns five-star reviews.'],
          ['icon' => 'fa-diagram-project', 'title' => 'Business Automation', 'desc' => 'CRM, inventory, HR, and custom portals that remove manual work and speed up operations.'],
          ['icon' => 'fa-school', 'title' => 'Schools & Institutions', 'desc' => 'Student management systems, portals, and reliable campus networks for modern learning.'],
          ['icon' => 'fa-truck-fast', 'title' => 'Logistics & Delivery', 'desc' => 'Delivery and booking apps with real-time tracking, fleet management, and customer notifications.'],
        ];
      @endphp
      @foreach($industries as $industry)
      <div class="reveal" style="--d:{{ ($loop->index % 3) * 90 }}ms;">
        <div style="background: linear-gradient(180deg, #fff, #F7FAFE); border: 1px solid var(--line); border-radius: 20px; padding: 36px 30px; height: 100%; transition: transform 0.4s cubic-bezier(.22,.61,.36,1), box-shadow 0.4s ease;">
          <div style="width: 58px; height: 58px; border-radius: 16px; background: rgba(12,69,128,0.08); color: var(--primary); font-size: 1.4rem; display: flex; align-items: center; justify-content: center; margin-bottom: 22px; transition: transform 0.4s cubic-bezier(.34,1.56,.64,1), background 0.4s ease, color 0.4s ease;">
            <i class="fas {{ $industry['icon'] }}"></i>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.22rem; font-weight: 900; color: var(--dark); margin-bottom: 12px;">{{ $industry['title'] }}</h3>
          <p style="font-size: 0.92rem; color: var(--ink-muted); line-height: 1.7;">{{ $industry['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CTA -->
<section class="services" style="background: var(--off-white); padding: 0 0 110px;">
  <div class="container">
    <div class="sol-banner reveal">
      <div style="position: relative; z-index: 2;">
        <h3>Not Sure Which Solution You Need?</h3>
        <p>Tell us your goals and we'll recommend the right combination of services — with a free consultation and detailed quote within 24 hours.</p>
      </div>
      <div class="sol-banner-actions">
        <a href="{{ route('request.quote') }}" class="btn-primary"><i class="fas fa-file-invoice"></i> Request a Quote</a>
        <a href="{{ route('contact') }}" class="btn-outline"><i class="fas fa-envelope"></i> Contact Us</a>
      </div>
    </div>
  </div>
</section>
@endsection
