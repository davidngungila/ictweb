@extends('layouts.app')

@section('title', 'Our Companies | Jezdan Group - Business, Finance, Technology & Advisory')

@section('meta_tags')
  <meta name="description" content="Jezdan Group is a diversified business group spanning business & investment, accounting & financial services, technology & digital innovation, and business advisory & consulting.">
  <meta name="keywords" content="Jezdan Group companies, business group Tanzania, investment Tanzania, technology company Tanzania">
  <meta property="og:title" content="Our Companies | Jezdan Group">
  <meta property="og:description" content="A diversified business group providing business, financial, technology, and strategic solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  .company-hero { min-height: 62vh; }
  .company-hero-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #fff, #9CC9EE, #fff);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: companyShine 5s linear infinite;
  }
  @keyframes companyShine { to { background-position: 200% center; } }

  /* ─── Company Pillars ─── */
  .co-section { position: relative; background: var(--off-white); padding: 110px 0 0; }
  .co-header { position: relative; z-index: 1; text-align: center; max-width: 720px; margin: 0 auto 60px; }
  .co-header-tag {
    position: relative;
    display: inline-flex; align-items: center; gap: 12px;
    margin-bottom: 20px;
    color: var(--primary); font-size: 0.78rem; font-weight: 800;
    letter-spacing: 2.2px; text-transform: uppercase;
  }
  .co-header-tag::before,
  .co-header-tag::after {
    content: '';
    width: 32px; height: 2px;
    background: linear-gradient(90deg, var(--primary), var(--sky-bright));
    animation: coTagLine 2.4s ease-in-out infinite;
  }
  .co-header-tag::after { background: linear-gradient(90deg, var(--sky-bright), var(--primary)); }
  @keyframes coTagLine {
    0%, 100% { transform: scaleX(1); }
    50%      { transform: scaleX(0.4); }
  }
  .co-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #062B4D, #0C4580, #6FB1E8, #062B4D);
    background-size: 300% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: coGradientText 6s linear infinite;
  }
  .co-title span { color: transparent; }
  @keyframes coGradientText { to { background-position: 300% center; } }
  .co-sub { color: var(--ink-muted); line-height: 1.7; max-width: 640px; margin: 0 auto; }

  .co-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    position: relative; z-index: 1;
  }
  @media (max-width: 860px) { .co-grid { grid-template-columns: 1fr; } }

  .co-card {
    position: relative;
    background: #fff;
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 14px 40px rgba(6, 43, 77, 0.07);
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .co-card::after {
    content: '';
    position: absolute; inset: 0; z-index: 3; pointer-events: none;
    border-radius: 24px;
    box-shadow: inset 0 0 0 2px rgba(12, 69, 128, 0);
    transition: box-shadow 0.45s ease;
  }
  .co-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 34px 80px rgba(6, 43, 77, 0.18);
    border-color: transparent;
  }
  .co-card:hover::after { box-shadow: inset 0 0 0 2px var(--co-color); }

  .co-card-media { position: relative; height: 240px; overflow: hidden; }
  .co-card-media img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transform: scale(1.01);
    transition: transform 0.8s cubic-bezier(.22, .61, .36, 1);
  }
  .co-card:hover .co-card-media img { transform: scale(1.1); }
  .co-card-media::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(6,43,77,0.05) 30%, rgba(6,43,77,0.75) 100%);
    opacity: 0.9; transition: opacity 0.45s ease;
  }
  .co-card:hover .co-card-media::after { opacity: 1; }
  .co-card-num {
    position: absolute; top: 18px; left: 20px; z-index: 2;
    font-family: var(--font-mono); font-weight: 900; font-size: 0.98rem;
    color: #fff; letter-spacing: 2px;
    background: rgba(6, 43, 77, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.35);
    backdrop-filter: blur(6px);
    padding: 5px 15px; border-radius: 30px;
  }
  .co-card-icon {
    position: absolute; bottom: 0; right: 26px; z-index: 4;
    width: 62px; height: 62px; border-radius: 18px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem;
    color: #fff;
    background: var(--co-color);
    box-shadow: 0 14px 30px rgba(6, 43, 77, 0.3);
    transform: translateY(50%);
    transition: transform 0.4s cubic-bezier(.34, 1.56, .64, 1), rotate 0.4s ease;
  }
  .co-card:hover .co-card-icon { transform: translateY(50%) rotate(-10deg) scale(1.1); }

  .co-card-body { padding: 52px 32px 36px; }
  .co-card-body h3 {
    font-family: var(--font-display);
    font-size: 1.55rem; font-weight: 900;
    color: var(--dark); margin-bottom: 14px; letter-spacing: -0.3px;
    transition: color 0.3s ease;
  }
  .co-card:hover .co-card-body h3 { color: var(--co-color); }
  .co-card-body > p { font-size: 0.96rem; color: var(--ink-muted); line-height: 1.75; margin-bottom: 24px; }
  .co-check-list { list-style: none; padding: 0; margin: 0 0 26px; display: grid; gap: 12px; }
  .co-check-list li {
    display: flex; align-items: flex-start; gap: 12px;
    font-size: 0.9rem; font-weight: 600; color: #475569; line-height: 1.5;
  }
  .co-check-list li i {
    flex: 0 0 auto; margin-top: 3px;
    width: 22px; height: 22px; border-radius: 50%;
    background: var(--co-soft);
    color: var(--co-color);
    display: inline-flex; align-items: center; justify-content: center;
    font-size: 0.68rem;
  }
  .co-link {
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--co-color); font-weight: 800; font-size: 0.95rem;
    text-decoration: none; position: relative;
  }
  .co-link::after {
    content: '';
    position: absolute; left: 0; bottom: -3px; height: 2px; width: 0;
    background: var(--co-color);
    transition: width 0.35s ease;
  }
  .co-link i { transition: transform 0.35s ease; }
  .co-card:hover .co-link::after { width: 100%; }
  .co-card:hover .co-link i { transform: translateX(6px); }

  /* ─── Synergy Flow ─── */
  .synergy {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #062B4D 0%, #0C4580 55%, #0F5FA8 100%);
    padding: 100px 0;
    margin-top: 110px;
  }
  .synergy::before {
    content: ''; position: absolute; width: 420px; height: 420px; border-radius: 50%;
    top: -150px; right: -100px;
    background: radial-gradient(circle, rgba(111, 177, 232, 0.45), transparent 70%);
    animation: coBlob 12s ease-in-out infinite;
  }
  .synergy::after {
    content: ''; position: absolute; width: 360px; height: 360px; border-radius: 50%;
    bottom: -140px; left: -90px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.25), transparent 70%);
    animation: coBlob 12s ease-in-out infinite reverse;
  }
  @keyframes coBlob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50%      { transform: translate(30px, 22px) scale(1.08); }
  }
  .synergy .container { position: relative; z-index: 2; }
  .synergy-head { text-align: center; margin-bottom: 70px; }
  .synergy-head .section-label { color: var(--sky-bright); }
  .synergy-head .section-title { color: #fff; }
  .synergy-head .section-title span { color: var(--sky-bright); }
  .synergy-head .section-sub { color: rgba(255, 255, 255, 0.75); }

  .synergy-flow {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    position: relative;
  }
  @media (max-width: 992px) { .synergy-flow { grid-template-columns: repeat(2, 1fr); gap: 36px 20px; } }
  @media (max-width: 520px) { .synergy-flow { grid-template-columns: 1fr; } }

  .synergy-line {
    position: absolute; top: 52px; left: 9%; right: 9%; height: 2px; z-index: 0;
    background: repeating-linear-gradient(90deg, rgba(255,255,255,0.35) 0 12px, transparent 12px 22px);
    animation: coDash 14s linear infinite;
  }
  @keyframes coDash { to { background-position: 320px 0; } }
  .synergy-dot {
    position: absolute; top: 45px; left: 9%; width: 14px; height: 14px; z-index: 0;
    border-radius: 50%;
    background: var(--sky-bright);
    box-shadow: 0 0 0 0 rgba(111, 177, 232, 0.6);
    animation: coTravel 14s linear infinite, coPing 2s ease-out infinite;
  }
  @keyframes coTravel {
    0%   { left: 9%; }
    100% { left: calc(91% - 14px); }
  }
  @keyframes coPing {
    0% { box-shadow: 0 0 0 0 rgba(111, 177, 232, 0.6); }
    70%, 100% { box-shadow: 0 0 0 16px rgba(111, 177, 232, 0); }
  }
  @media (max-width: 992px) { .synergy-line, .synergy-dot { display: none; } }

  .syn-node {
    position: relative; z-index: 1;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 20px;
    padding: 30px 24px;
    text-align: center;
    backdrop-filter: blur(8px);
    transition: transform 0.4s ease, background 0.4s ease, border-color 0.4s ease;
  }
  .syn-node:hover { transform: translateY(-8px); background: rgba(255, 255, 255, 0.13); border-color: rgba(255, 255, 255, 0.4); }
  .syn-node-icon {
    width: 56px; height: 56px; margin: 0 auto 18px;
    border-radius: 16px;
    background: linear-gradient(135deg, var(--sky-bright), var(--primary));
    color: #fff; font-size: 1.25rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.25);
    animation: coFloat 4s ease-in-out infinite;
  }
  .syn-node:nth-child(2) .syn-node-icon { animation-delay: -1s; }
  .syn-node:nth-child(3) .syn-node-icon { animation-delay: -2s; }
  .syn-node:nth-child(4) .syn-node-icon { animation-delay: -3s; }
  @keyframes coFloat {
    0%, 100% { transform: translateY(0); }
    50%      { transform: translateY(-7px); }
  }
  .syn-node h4 { color: #fff; font-family: var(--font-display); font-size: 1.08rem; font-weight: 800; margin-bottom: 10px; }
  .syn-node p { color: rgba(255, 255, 255, 0.7); font-size: 0.85rem; line-height: 1.6; }
  .syn-node-arrow {
    position: absolute; top: 50%; right: -28px; transform: translateY(-50%);
    color: var(--sky-bright); font-size: 1rem; z-index: 2;
  }
  .syn-node:nth-child(4) .syn-node-arrow { display: none; }
  @media (max-width: 992px) { .syn-node-arrow { display: none !important; } }

  /* ─── Why Group ─── */
  .why-group { background: #fff; padding: 110px 0; }
  .why-group-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
  @media (max-width: 992px) { .why-group-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 640px) { .why-group-grid { grid-template-columns: 1fr; } }
  .why-group-card {
    background: linear-gradient(180deg, #fff, #F7FAFE);
    border: 1px solid var(--line);
    border-radius: 20px;
    padding: 40px 32px;
    position: relative;
    overflow: hidden;
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease;
  }
  .why-group-card::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, var(--primary), var(--sky-bright));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.45s ease;
  }
  .why-group-card:hover { transform: translateY(-10px); box-shadow: 0 24px 55px rgba(6, 43, 77, 0.12); }
  .why-group-card:hover::before { transform: scaleX(1); }
  .why-group-icon {
    width: 64px; height: 64px; border-radius: 18px;
    background: rgba(12, 69, 128, 0.08);
    color: var(--primary); font-size: 1.5rem;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 26px;
    transition: transform 0.4s cubic-bezier(.34, 1.56, .64, 1), background 0.4s ease, color 0.4s ease;
  }
  .why-group-card:hover .why-group-icon { transform: rotate(-10deg) scale(1.1); background: var(--primary); color: #fff; }
  .why-group-card h3 { font-family: var(--font-display); font-size: 1.3rem; font-weight: 900; color: var(--dark); margin-bottom: 12px; }
  .why-group-card p { font-size: 0.92rem; color: var(--ink-muted); line-height: 1.7; }

  .co-cta {
    position: relative; overflow: hidden;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    animation: coCtaShift 8s linear infinite;
  }
  @keyframes coCtaShift { to { background-position: 200% center; } }
</style>

<!-- HERO -->
<section class="hero company-hero" id="home">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay" style="mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%); -webkit-mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%);"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <div style="max-width: 860px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Our Companies
      </div>
      <h1 class="hero-title company-hero-title">
        The Companies Behind <span>Jezdan Group</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Jezdan Group is a diversified business group built on integrity, innovation, and long-term value. Each company works together to help organizations grow, operate efficiently, and create lasting impact.
      </p>
    </div>
  </div>
</section>

<!-- COMPANY PILLARS -->
<section class="co-section">
  <div class="container">
    <div class="co-header reveal">
      <div class="co-header-tag"><i class="fas fa-building"></i> Group Companies</div>
      <h2 class="co-title">One Group. <span>Four Focus Areas.</span></h2>
      <p class="co-sub">Explore the companies that make up Jezdan Group and the solutions they deliver across business, finance, technology, and strategy.</p>
    </div>

    <div class="co-grid">
      <div class="reveal" style="--d:0s;">
        <article class="co-card" style="--co-color:#E8A33D; --co-soft:rgba(232,163,61,0.12);">
          <div class="co-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Business & Investment">
            <span class="co-card-num">01</span>
            <div class="co-card-icon"><i class="fas fa-chart-line"></i></div>
          </div>
          <div class="co-card-body">
            <h3>Business &amp; Investment</h3>
            <p>Strategic investments and business ventures that create sustainable value — identifying opportunities, building partnerships, and supporting responsible growth in promising sectors.</p>
            <ul class="co-check-list">
              <li><i class="fas fa-check"></i> Opportunity identification &amp; market entry</li>
              <li><i class="fas fa-check"></i> Strategic partnerships &amp; joint ventures</li>
              <li><i class="fas fa-check"></i> Sustainable value creation</li>
            </ul>
            <a href="{{ route('contact') }}" class="co-link">Partner With Us <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>

      <div class="reveal" style="--d:120ms;">
        <article class="co-card" style="--co-color:#10B981; --co-soft:rgba(16,185,129,0.12);">
          <div class="co-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" alt="Accounting & Financial Services">
            <span class="co-card-num">02</span>
            <div class="co-card-icon"><i class="fas fa-calculator"></i></div>
          </div>
          <div class="co-card-body">
            <h3>Accounting &amp; Financial Services</h3>
            <p>Professional bookkeeping, financial reporting, payroll, tax support, and financial advisory that help businesses keep accurate records and make confident decisions.</p>
            <ul class="co-check-list">
              <li><i class="fas fa-check"></i> Bookkeeping &amp; financial reporting</li>
              <li><i class="fas fa-check"></i> Payroll management &amp; tax support</li>
              <li><i class="fas fa-check"></i> Financial advisory</li>
            </ul>
            <a href="{{ route('services.accounting') }}" class="co-link">Accounting Services <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>

      <div class="reveal" style="--d:60ms;">
        <article class="co-card" style="--co-color:#1A6FC4; --co-soft:rgba(26,111,196,0.12);">
          <div class="co-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg" alt="Technology & Digital Innovation">
            <span class="co-card-num">03</span>
            <div class="co-card-icon"><i class="fas fa-microchip"></i></div>
          </div>
          <div class="co-card-body">
            <h3>Technology &amp; Digital Innovation</h3>
            <p>Software development, business systems, and digital transformation that improve operations, automate processes, and create smarter ways of working.</p>
            <ul class="co-check-list">
              <li><i class="fas fa-check"></i> Software &amp; mobile app development</li>
              <li><i class="fas fa-check"></i> Networks, cybersecurity &amp; cloud</li>
              <li><i class="fas fa-check"></i> Digital transformation</li>
            </ul>
            <a href="{{ route('technology') }}" class="co-link">Technology Solutions <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>

      <div class="reveal" style="--d:180ms;">
        <article class="co-card" style="--co-color:#8B5CF6; --co-soft:rgba(139,92,246,0.12);">
          <div class="co-card-media">
            <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg" alt="Business Advisory & Consulting">
            <span class="co-card-num">04</span>
            <div class="co-card-icon"><i class="fas fa-handshake"></i></div>
          </div>
          <div class="co-card-body">
            <h3>Business Advisory &amp; Consulting</h3>
            <p>Practical advisory services helping organizations improve performance, manage resources, solve challenges, and plan for sustainable growth.</p>
            <ul class="co-check-list">
              <li><i class="fas fa-check"></i> Performance improvement</li>
              <li><i class="fas fa-check"></i> Resource &amp; risk management</li>
              <li><i class="fas fa-check"></i> Growth &amp; strategy planning</li>
            </ul>
            <a href="{{ route('services') }}" class="co-link">Our Services <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- SYNERGY FLOW -->
<section class="synergy">
  <div class="container">
    <div class="synergy-head reveal">
      <div class="section-label"><i class="fas fa-sitemap"></i> How We Connect</div>
      <h2 class="section-title">One Group, Working <span>As One Engine</span></h2>
      <p class="section-sub">Every Jezdan company feeds the next — so you get strategy, finance, technology, and advisory that are fully aligned.</p>
    </div>

    <div class="synergy-flow">
      <div class="synergy-line"></div>
      <div class="synergy-dot"></div>

      <div class="syn-node reveal">
        <div class="syn-node-icon"><i class="fas fa-compass"></i></div>
        <h4>Strategy</h4>
        <p>Advisory defines direction, goals, and the roadmap for growth.</p>
        <i class="fas fa-chevron-right syn-node-arrow"></i>
      </div>
      <div class="syn-node reveal" style="--d:120ms;">
        <div class="syn-node-icon"><i class="fas fa-coins"></i></div>
        <h4>Finance</h4>
        <p>Accounting keeps books accurate and funds available to act.</p>
        <i class="fas fa-chevron-right syn-node-arrow"></i>
      </div>
      <div class="syn-node reveal" style="--d:240ms;">
        <div class="syn-node-icon"><i class="fas fa-microchip"></i></div>
        <h4>Technology</h4>
        <p>Tech turns plans into working systems that run operations.</p>
        <i class="fas fa-chevron-right syn-node-arrow"></i>
      </div>
      <div class="syn-node reveal" style="--d:360ms;">
        <div class="syn-node-icon"><i class="fas fa-arrow-trend-up"></i></div>
        <h4>Growth</h4>
        <p>Investment fuels expansion and creates long-term value.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY GROUP -->
<section class="why-group">
  <div class="container">
    <div class="section-header" style="text-align:center; max-width: 640px; margin: 0 auto 56px;">
      <div class="section-label"><i class="fas fa-users"></i> Why Jezdan Group</div>
      <h2 class="section-title">A Partner Across <span>Every Stage of Growth</span></h2>
      <p class="section-sub">From your first set of accounts to enterprise technology and long-term investment, one group supports your entire journey.</p>
    </div>
    <div class="why-group-grid">
      <div class="reveal" style="--d:0s;">
        <div class="why-group-card">
          <div class="why-group-icon"><i class="fas fa-layer-group"></i></div>
          <h3>Integrated Solutions</h3>
          <p>Business, finance, technology, and strategy under one roof — so decisions stay aligned and nothing falls through the cracks.</p>
        </div>
      </div>
      <div class="reveal" style="--d:120ms;">
        <div class="why-group-card">
          <div class="why-group-icon"><i class="fas fa-shield-halved"></i></div>
          <h3>Trust &amp; Transparency</h3>
          <p>We build long-term relationships based on clear communication, honest advice, and consistent delivery.</p>
        </div>
      </div>
      <div class="reveal" style="--d:240ms;">
        <div class="why-group-card">
          <div class="why-group-icon"><i class="fas fa-earth-africa"></i></div>
          <h3>Built for Africa</h3>
          <p>Deep understanding of local markets, regulation, and opportunity — from Tanzania and across the continent.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="co-section" style="background:#fff; padding-top:0; padding-bottom:110px;">
  <div class="container">
    <div class="co-cta reveal" style="border-radius: 26px; padding: 62px 52px; color:#fff; text-align:center;">
      <div style="position: relative; z-index: 2; max-width: 640px; margin: 0 auto;">
        <h2 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 900; margin-bottom: 14px;">Let's Grow Your <span style="color: var(--sky-bright);">Business</span> Together</h2>
        <p style="color: rgba(255,255,255,0.8); font-size: 1.02rem; line-height: 1.7; margin-bottom: 34px;">Whatever stage you're at — talk to the Jezdan Group team and discover how our companies can work for you.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
          <a href="{{ route('contact') }}" class="btn-primary" style="background:#fff; color: var(--primary);"><i class="fas fa-envelope"></i> Get in Touch</a>
          <a href="{{ route('request.quote') }}" class="btn-outline" style="border-color: rgba(255,255,255,0.55); color:#fff;"><i class="fas fa-file-invoice"></i> Request a Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
