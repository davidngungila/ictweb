@extends('layouts.app')

@section('title', 'Solutions | Ready-Made Management Systems – Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Explore Jezdan Technology solutions: School & University Management Systems, HRMIS, Accounting, CRM, Inventory, POS, Digital Payments, Microfinance MIS, Hospital Management (HMIS), E-Commerce, Dispatch & Delivery, Fleet, Hotel, Property and Government systems — plus custom software development.">
  <meta name="keywords" content="school management system Tanzania, HRMIS Tanzania, microfinance system Tanzania, hospital management system Tanzania, POS system Tanzania, digital payment system Tanzania, ICT solutions Tanzania">
  <meta property="og:title" content="Solutions | Jezdan Technology">
  <meta property="og:description" content="20+ ready-to-deploy management information systems for schools, businesses, SACCOs, hospitals, hotels and government — built for Tanzania.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  /* ═══ Page-scoped sticky fix (keeps position:sticky working) ═══ */
  body { overflow-x: clip; }

  /* ═══ HERO ═══ */
  .sln-hero-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #fff, #9CC9EE, #fff);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: slnShine 5s linear infinite;
  }
  @keyframes slnShine { to { background-position: 200% center; } }
  .solutions-hero { min-height: 46vh; text-align: center; }
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
    animation: slnGlowFloat 9s ease-in-out infinite;
  }
  .solutions-hero .hero-glow-2 {
    width: 250px; height: 250px;
    bottom: -70px; left: auto; right: 14%;
    background: radial-gradient(circle, rgba(255, 210, 31, 0.7) 0%, transparent 70%);
    opacity: 0.10;
    filter: blur(60px);
    animation: slnGlowFloatAlt 11s ease-in-out infinite;
  }
  @keyframes slnGlowFloat {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50%      { transform: translate(-50%, -50%) scale(1.08); }
  }
  @keyframes slnGlowFloatAlt {
    0%, 100% { transform: scale(1); }
    50%      { transform: scale(1.18); }
  }
  .solutions-hero .hero-content {
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    text-align: center; padding: 70px 20px 56px; width: 92%; max-width: 1240px; margin: 0 auto;
  }
  .solutions-hero .hero-badge {
    gap: 8px; padding: 7px 14px; font-size: 0.75rem; font-weight: 600;
    letter-spacing: 0.08em; margin-bottom: 18px;
    animation: slnHeroUp 0.5s ease both;
  }
  .solutions-hero .hero-badge .dot { width: 6px; height: 6px; }
  .solutions-hero .hero-title {
    font-size: clamp(2.3rem, 4.2vw, 3.4rem); line-height: 1.1; letter-spacing: -0.025em;
    max-width: 900px; margin: 0 auto 18px;
    animation: slnHeroUp 0.6s 0.1s ease both;
  }
  .solutions-hero .hero-title.soln-hero-title { background: none; -webkit-text-fill-color: #fff; color: #fff; }
  .solutions-hero .hero-title span {
    background: linear-gradient(120deg, #FFD21F 0%, #F5B53C 100%);
    -webkit-background-clip: text; background-clip: text;
    -webkit-text-fill-color: transparent; color: transparent;
  }
  .solutions-hero .hero-subtitle {
    max-width: 680px; margin: 0 auto; font-size: 1.02rem; line-height: 1.7;
    color: rgba(255, 255, 255, 0.72);
    animation: slnHeroUp 0.6s 0.2s ease both;
  }
  .sln-hero-chips {
    display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;
    margin-top: 26px; animation: slnHeroUp 0.6s 0.3s ease both;
  }
  .sln-hero-chip {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(111, 177, 232, 0.32);
    color: rgba(255, 255, 255, 0.85);
    padding: 7px 15px; border-radius: 50px;
    font-size: 0.78rem; font-weight: 700;
    backdrop-filter: blur(6px);
  }
  .sln-hero-chip i { color: var(--sky-bright); font-size: 0.75rem; }
  .hero-accent-line {
    position: relative; width: 170px; height: 2px; margin: 24px auto 0;
    background: linear-gradient(90deg, transparent, rgba(111, 177, 232, 0.6) 42%, rgba(111, 177, 232, 0.6) 58%, transparent);
    animation: slnHeroUp 0.6s 0.35s ease both;
  }
  .hero-accent-line::after {
    content: ''; position: absolute; top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--os-yellow, #FFD21F);
    box-shadow: 0 0 14px rgba(255, 210, 31, 0.8);
  }
  @keyframes slnHeroUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ═══ CATEGORY TAB BAR (sticky) ═══ */
  .sln-tabsbar {
    position: sticky; top: 76px; z-index: 940;
    background: rgba(245, 248, 253, 0.94);
    backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
    border-bottom: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.05);
  }
  .sln-tabs {
    max-width: 1240px; margin: 0 auto;
    display: flex; gap: 8px; align-items: center;
    overflow-x: auto; scrollbar-width: none;
    padding: 12px 4%;
  }
  .sln-tabs::-webkit-scrollbar { display: none; }
  .sln-tab {
    flex: 0 0 auto;
    display: inline-flex; align-items: center; gap: 8px;
    padding: 9px 17px; border-radius: 50px;
    font-size: 0.84rem; font-weight: 800;
    color: var(--ink-muted); text-decoration: none;
    border: 1.5px solid var(--line); background: #fff;
    transition: all 0.22s ease; white-space: nowrap;
  }
  .sln-tab i { font-size: 0.78rem; color: var(--primary); transition: color 0.22s ease; }
  .sln-tab:hover { color: var(--primary); border-color: var(--primary-ring); transform: translateY(-1px); }
  .sln-tab.active {
    background: var(--grad-primary); border-color: var(--primary); color: #fff;
    box-shadow: var(--shadow-primary);
  }
  .sln-tab.active i { color: #fff; }

  /* ═══ CATEGORY SECTIONS ═══ */
  .sln-section {
    padding: 96px 4%;
    scroll-margin-top: 150px;
  }
  .sln-section.alt { background: #fff; }
  .sln-cat-head {
    display: flex; flex-direction: column; align-items: center; gap: 0;
    max-width: 860px; margin: 0 auto 52px; text-align: center;
  }
  .sln-cat-icon {
    width: 68px; height: 68px; flex-shrink: 0; border-radius: 20px;
    background: var(--grad-primary); color: var(--sky-bright); font-size: 1.65rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: var(--shadow-primary), 0 0 0 8px rgba(12, 69, 128, 0.06);
  }
  .sln-cat-kicker {
    display: inline-flex; align-items: center; gap: 10px;
    color: var(--primary); font-size: 0.76rem; font-weight: 800;
    letter-spacing: 2.2px; text-transform: uppercase; margin-bottom: 10px;
  }
  .sln-cat-kicker::before, .sln-cat-kicker::after {
    content: ''; width: 28px; height: 2px;
    background: linear-gradient(90deg, transparent, var(--sky));
  }
  .sln-cat-kicker::after { background: linear-gradient(90deg, var(--sky), transparent); }
  .sln-cat-title {
    font-family: var(--font-display);
    font-size: clamp(1.8rem, 3.4vw, 2.6rem); font-weight: 900;
    color: var(--dark); line-height: 1.15; letter-spacing: -0.7px;
    margin-bottom: 12px;
  }
  .sln-cat-title span { color: var(--primary); }
  .sln-cat-desc { font-size: 1rem; color: var(--ink-muted); line-height: 1.75; max-width: 640px; }

  .sln-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 26px;
    max-width: 1240px; margin: 0 auto;
  }
  @media (max-width: 420px) { .sln-grid { grid-template-columns: 1fr; } }
  .sln-reveal { height: 100%; transition-delay: var(--d, 0s); }

  /* ═══ SYSTEM CARD ═══ */
  .sln-card {
    position: relative; height: 100%; display: flex; flex-direction: column;
    background: #fff; border-radius: 20px; overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.05);
    transition: transform 0.45s cubic-bezier(.22,.61,.36,1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .sln-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: var(--grad-primary);
    transform: scaleX(0); transform-origin: left;
    transition: transform 0.45s cubic-bezier(.22,.61,.36,1);
  }
  .sln-card:hover {
    transform: translateY(-10px);
    border-color: rgba(12, 69, 128, 0.28);
    box-shadow: var(--shadow-hover);
  }
  .sln-card:hover::before { transform: scaleX(1); }

  .sln-card-top {
    display: flex; align-items: center; gap: 16px;
    padding: 28px 28px 0;
  }
  .sln-card-icon {
    width: 56px; height: 56px; flex-shrink: 0; border-radius: 15px;
    background: var(--grad-primary); color: var(--sky-bright); font-size: 1.3rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: var(--shadow-primary);
    transition: transform 0.4s cubic-bezier(.34,1.56,.64,1);
  }
  .sln-card:hover .sln-card-icon { transform: translateY(-4px) rotate(-6deg) scale(1.07); }
  .sln-card-titles h3 {
    font-family: var(--font-display);
    font-size: 1.14rem; font-weight: 900; color: var(--dark);
    line-height: 1.28; letter-spacing: -0.3px;
  }
  .sln-card-tag {
    display: inline-block; margin-top: 5px;
    background: var(--off-white); border: 1px solid var(--line);
    color: var(--primary); font-size: 0.66rem; font-weight: 800;
    letter-spacing: 0.8px; text-transform: uppercase;
    padding: 2.5px 10px; border-radius: 30px;
  }
  .sln-card-num {
    position: absolute; top: 18px; right: 20px;
    font-family: var(--font-mono); font-weight: 900; font-size: 1rem;
    color: var(--line); letter-spacing: 1px;
    transition: color 0.35s ease;
  }
  .sln-card:hover .sln-card-num { color: var(--sky-bright); }

  .sln-card-body { padding: 16px 28px 26px; display: flex; flex-direction: column; flex-grow: 1; }
  .sln-card-body > p { font-size: 0.9rem; color: var(--ink-muted); line-height: 1.68; margin-bottom: 16px; }
  .sln-modules {
    list-style: none; margin: 0 0 22px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 8px 14px;
  }
  .sln-modules li {
    display: flex; align-items: flex-start; gap: 8px;
    font-size: 0.82rem; font-weight: 700; color: var(--text);
    line-height: 1.45;
  }
  .sln-modules li i {
    flex-shrink: 0; margin-top: 3px;
    width: 15px; height: 15px; border-radius: 50%;
    background: rgba(31, 169, 122, 0.12); color: var(--success);
    font-size: 0.58rem; display: inline-flex; align-items: center; justify-content: center;
  }
  .sln-link {
    margin-top: auto; align-self: flex-start;
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--primary); font-weight: 800; font-size: 0.9rem;
    text-decoration: none; position: relative;
  }
  .sln-link::after {
    content: ''; position: absolute; left: 0; bottom: -4px; height: 2px; width: 0;
    background: var(--primary); transition: width 0.35s ease;
  }
  .sln-link i { transition: transform 0.35s ease; }
  .sln-card:hover .sln-link::after { width: 100%; }
  .sln-card:hover .sln-link i { transform: translateX(6px); }

  /* ═══ CUSTOM SOFTWARE (dark) ═══ */
  .sln-custom {
    position: relative; overflow: hidden;
    background: var(--grad-dark); padding: 96px 4%;
    scroll-margin-top: 150px;
  }
  .sln-custom::before {
    content: ''; position: absolute; inset: 0;
    background-image:
      linear-gradient(rgba(111,177,232,0.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(111,177,232,0.06) 1px, transparent 1px);
    background-size: 48px 48px;
  }
  .sln-custom::after {
    content: ''; position: absolute;
    width: 480px; height: 480px; border-radius: 50%;
    background: radial-gradient(circle, rgba(61,143,212,0.22), transparent 70%);
    top: -180px; right: -140px; pointer-events: none;
  }
  .sln-custom > * { position: relative; z-index: 1; }
  .sln-custom .sln-cat-kicker { color: var(--sky-bright); }
  .sln-custom .sln-cat-kicker::before, .sln-custom .sln-cat-kicker::after {
    background: linear-gradient(90deg, transparent, rgba(111,177,232,0.6));
  }
  .sln-custom .sln-cat-kicker::after { background: linear-gradient(90deg, rgba(111,177,232,0.6), transparent); }
  .sln-custom .sln-cat-title { color: #fff; }
  .sln-custom .sln-cat-title span {
    background: linear-gradient(120deg, #9CC9EE, #E0EBF5);
    -webkit-background-clip: text; background-clip: text;
    -webkit-text-fill-color: transparent; color: transparent;
  }
  .sln-custom .sln-cat-desc { color: rgba(255, 255, 255, 0.66); }

  .sln-dev-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px;
    max-width: 1240px; margin: 0 auto;
  }
  @media (max-width: 1024px) { .sln-dev-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .sln-dev-grid { grid-template-columns: 1fr; } }
  .sln-dev-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(111, 177, 232, 0.22);
    backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
    border-radius: 18px; padding: 30px 26px;
    height: 100%; display: flex; flex-direction: column;
    transition: all 0.35s ease;
  }
  .sln-dev-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.09);
    border-color: rgba(111, 177, 232, 0.5);
    box-shadow: 0 24px 50px rgba(0, 0, 0, 0.35);
  }
  .sln-dev-icon {
    width: 54px; height: 54px; border-radius: 14px;
    background: var(--grad-primary); color: var(--sky-bright);
    font-size: 1.25rem; display: flex; align-items: center; justify-content: center;
    box-shadow: var(--shadow-primary); margin-bottom: 20px;
    transition: transform 0.4s cubic-bezier(.34,1.56,.64,1);
  }
  .sln-dev-card:hover .sln-dev-icon { transform: rotate(-6deg) scale(1.08); }
  .sln-dev-card h3 {
    font-family: var(--font-display); font-size: 1.1rem; font-weight: 900;
    color: #fff; margin-bottom: 10px; letter-spacing: -0.3px;
  }
  .sln-dev-card p { font-size: 0.86rem; color: rgba(255, 255, 255, 0.62); line-height: 1.7; }
  .sln-dev-list { list-style: none; margin-top: 16px; display: flex; flex-direction: column; gap: 8px; }
  .sln-dev-list li {
    display: flex; align-items: flex-start; gap: 9px;
    font-size: 0.82rem; font-weight: 700; color: rgba(255, 255, 255, 0.8);
    line-height: 1.5;
  }
  .sln-dev-list li i { color: var(--success); flex-shrink: 0; margin-top: 4px; font-size: 0.72rem; }

  .sln-custom-cta {
    max-width: 1240px; margin: 44px auto 0;
    display: flex; align-items: center; justify-content: space-between;
    gap: 20px; flex-wrap: wrap;
    background: rgba(255, 255, 255, 0.04);
    border: 1px dashed rgba(111, 177, 232, 0.35);
    border-radius: 18px; padding: 26px 30px;
  }
  .sln-custom-cta p {
    color: rgba(255, 255, 255, 0.78); font-size: 0.95rem; font-weight: 700; line-height: 1.6;
    max-width: 620px;
  }
  .sln-custom-cta p i { color: var(--gold); margin-right: 8px; }

  /* ═══ STATS STRIP ═══ */
  .sln-stats {
    background: #fff; padding: 64px 4%;
    border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);
  }
  .sln-stats-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 36px; text-align: center;
  }
  @media (max-width: 800px) { .sln-stats-inner { grid-template-columns: repeat(2, 1fr); gap: 30px; } }
  .sln-stat-num {
    font-family: var(--font-display); font-size: 2.3rem; font-weight: 900;
    color: var(--dark); line-height: 1.1; letter-spacing: -0.5px;
  }
  .sln-stat-num span { color: var(--primary); }
  .sln-stat-label {
    font-size: 0.8rem; color: var(--ink-faint); font-weight: 800;
    text-transform: uppercase; letter-spacing: 1px; margin-top: 8px;
  }

  /* ═══ CTA BANNER ═══ */
  .sln-banner {
    position: relative; overflow: hidden;
    display: flex; align-items: center; justify-content: space-between; gap: 28px; flex-wrap: wrap;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    border-radius: 22px; padding: 42px 46px; color: #fff;
    animation: slnCtaShift 8s linear infinite;
  }
  @keyframes slnCtaShift { to { background-position: 200% center; } }
  .sln-banner::before {
    content: ''; position: absolute; width: 280px; height: 280px; border-radius: 50%;
    top: -90px; right: -70px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.28), transparent 70%);
    animation: slnPulse 5s ease-in-out infinite;
  }
  @keyframes slnPulse {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50%      { transform: scale(1.15); opacity: 1; }
  }
  .sln-banner h3 { font-family: var(--font-display); font-size: 1.6rem; font-weight: 900; margin-bottom: 8px; }
  .sln-banner p { color: rgba(255, 255, 255, 0.8); font-size: 0.98rem; max-width: 560px; line-height: 1.65; }
  .sln-banner-actions { display: flex; gap: 14px; flex-wrap: wrap; position: relative; z-index: 2; }
  .sln-banner .btn-primary { background: #fff; color: var(--primary); box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2); }
  .sln-banner .btn-primary:hover { background: var(--sky-bright); color: #062B4D; }
  .sln-banner .btn-outline { border-color: rgba(255, 255, 255, 0.55); color: #fff; }
  .sln-banner .btn-outline:hover { background: rgba(255, 255, 255, 0.12); }

  @media (max-width: 767px) {
    .solutions-hero .hero-content { padding: 55px 18px 46px; }
    .sln-section, .sln-custom { padding: 72px 5%; scroll-margin-top: 140px; }
    .sln-banner { padding: 34px 26px; }
    .sln-banner-actions { width: 100%; }
    .sln-banner-actions a { flex: 1; justify-content: center; }
  }
  @media (prefers-reduced-motion: reduce) {
    .sln-hero-title,
    .solutions-hero .hero-glow,
    .solutions-hero .hero-glow-2,
    .solutions-hero .hero-badge,
    .solutions-hero .hero-title,
    .solutions-hero .hero-subtitle,
    .sln-hero-chips,
    .hero-accent-line,
    .sln-banner,
    .sln-banner::before { animation: none !important; }
    .sln-card, .sln-dev-card, .sln-card-icon, .sln-dev-icon,
    .sln-tab { transition: none !important; }
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
    <h1 class="hero-title soln-hero-title">
      Powerful Management Systems for Every Organization — <span>All In One Place</span>
    </h1>
    <p class="hero-subtitle">
      From schools to SACCOs, hospitals to hotels — 20+ ready-to-deploy management
      information systems tailored for Tanzanian organizations, backed by custom development.
    </p>
    <div class="sln-hero-chips">
      <span class="sln-hero-chip"><i class="fas fa-mobile-screen"></i> Mobile Money Ready</span>
      <span class="sln-hero-chip"><i class="fas fa-comment-sms"></i> SMS &amp; WhatsApp Alerts</span>
      <span class="sln-hero-chip"><i class="fas fa-cloud"></i> Cloud Hosted</span>
      <span class="sln-hero-chip"><i class="fas fa-language"></i> English &amp; Swahili</span>
    </div>
    <div class="hero-accent-line"></div>
  </div>
</section>

<!-- STICKY CATEGORY TABS -->
<div class="sln-tabsbar">
  <nav class="sln-tabs" aria-label="Solution categories">
    @php
      $cats = [
        ['id' => 'business-management', 'icon' => 'fa-briefcase', 'label' => 'Business'],
        ['id' => 'education', 'icon' => 'fa-graduation-cap', 'label' => 'Education'],
        ['id' => 'financial', 'icon' => 'fa-coins', 'label' => 'Financial'],
        ['id' => 'healthcare', 'icon' => 'fa-heart-pulse', 'label' => 'Healthcare'],
        ['id' => 'commerce-logistics', 'icon' => 'fa-truck-fast', 'label' => 'Commerce &amp; Logistics'],
        ['id' => 'hospitality-property', 'icon' => 'fa-concierge-bell', 'label' => 'Hospitality'],
        ['id' => 'government-institutional', 'icon' => 'fa-landmark', 'label' => 'Government &amp; Institutions'],
        ['id' => 'custom-software', 'icon' => 'fa-code', 'label' => 'Custom Software'],
      ];
    @endphp
    @foreach($cats as $cat)
      <a href="#{{ $cat['id'] }}" class="sln-tab{{ $loop->first ? ' active' : '' }}" data-target="{{ $cat['id'] }}">
        <i class="fas {{ $cat['icon'] }}"></i>{!! $cat['label'] !!}
      </a>
    @endforeach
  </nav>
</div>

@php
  $categories = [
    [
      'id' => 'business-management',
      'num' => '01',
      'icon' => 'fa-briefcase',
      'title' => 'Business <span>Management Solutions</span>',
      'desc' => 'Run your entire back office on one integrated suite — people, money, customers and stock working together in real time.',
      'systems' => [
        [
          'name' => 'HR Management Information System',
          'tag' => 'HRMIS',
          'icon' => 'fa-users-gear',
          'desc' => 'Manage the full employee lifecycle — from recruitment to retirement — with payroll and self-service included.',
          'modules' => ['Employee Records', 'Payroll', 'Leave Management', 'Attendance', 'Recruitment', 'Performance Management', 'Employee Self-Service'],
        ],
        [
          'name' => 'Accounting & Financial Management',
          'tag' => 'Finance',
          'icon' => 'fa-file-invoice-dollar',
          'desc' => 'Keep your books accurate and your cash flow visible with automated invoicing, budgets and reports.',
          'modules' => ['Income & Expenses', 'Invoicing', 'Accounts Payable / Receivable', 'Financial Reports', 'Budget Management', 'Tax Integrations'],
        ],
        [
          'name' => 'Customer Relationship Management',
          'tag' => 'CRM',
          'icon' => 'fa-handshake',
          'desc' => 'Track every lead, deal and conversation so no opportunity ever slips through the cracks.',
          'modules' => ['Customer Management', 'Leads', 'Sales Pipeline', 'Customer Communication', 'Follow-ups & Reminders', 'Customer Analytics'],
        ],
        [
          'name' => 'Inventory & Stock Management',
          'tag' => 'Stock Control',
          'icon' => 'fa-boxes-stacked',
          'desc' => 'Full visibility of every item you buy, store, transfer or sell — with alerts before you run out.',
          'modules' => ['Stock Management', 'Purchases', 'Sales', 'Suppliers', 'Stock Transfers', 'Low-Stock Alerts', 'Inventory Reports'],
        ],
        [
          'name' => 'Point of Sale System',
          'tag' => 'POS',
          'icon' => 'fa-cash-register',
          'desc' => 'Fast, reliable checkout for retail shops, pharmacies, hardware stores and restaurants.',
          'modules' => ['Sales', 'Cashier Management', 'Receipts', 'Product Management', 'Payment Integration', 'Sales Analytics'],
        ],
      ],
    ],
    [
      'id' => 'education',
      'num' => '02',
      'icon' => 'fa-graduation-cap',
      'title' => '<span>Education</span> Solutions',
      'desc' => 'Digitize the whole academic journey — admissions, fees, examinations and communication between school and home.',
      'systems' => [
        [
          'name' => 'School Management Information System',
          'tag' => 'SMIS',
          'icon' => 'fa-school',
          'desc' => 'One platform for running schools of any size — from single campuses to multi-branch academies.',
          'modules' => ['Student Management', 'Admissions', 'Fees & Payments', 'Examination Management', 'Attendance', 'Academic Reports', 'Parent/Teacher Portals'],
        ],
        [
          'name' => 'University & Student Information System',
          'tag' => 'USIS',
          'icon' => 'fa-building-columns',
          'desc' => 'Handle high-volume intakes, course registration and graduation workflows with confidence.',
          'modules' => ['Admissions', 'Student Records', 'Course Registration', 'Examinations', 'Results Publishing', 'Fees Management', 'Graduation Management'],
        ],
        [
          'name' => 'E-Learning System',
          'tag' => 'Online Learning',
          'icon' => 'fa-laptop-file',
          'desc' => 'Extend the classroom online with courses, live sessions and automatic progress tracking.',
          'modules' => ['Online Courses', 'Assignments & Quizzes', 'Live Classes', 'Learning Materials', 'Progress Tracking', 'Certificates'],
        ],
      ],
    ],
    [
      'id' => 'financial',
      'num' => '03',
      'icon' => 'fa-coins',
      'title' => 'Financial <span>Solutions</span>',
      'desc' => 'Collect payments anywhere, reconcile automatically, and run lending operations with full audit trails.',
      'systems' => [
        [
          'name' => 'Digital Payment Management System',
          'tag' => 'Payments',
          'icon' => 'fa-money-bill-transfer',
          'desc' => 'Accept M-Pesa, Tigo Pesa, Airtel Money, cards and bank transfers — reconciled automatically.',
          'modules' => ['Online Payments', 'Mobile Money Integration', 'Payment Tracking', 'Automated Reconciliation', 'Digital Receipts', 'SMS/Email/WhatsApp Notifications'],
        ],
        [
          'name' => 'Microfinance Management Information System',
          'tag' => 'MF-MIS',
          'icon' => 'fa-hand-holding-dollar',
          'desc' => 'Purpose-built for SACCOs, microfinance institutions and village community banks (VICOBA).',
          'modules' => ['Member Management', 'Loans', 'Savings', 'Contributions', 'Repayments', 'Interest & Penalties', 'Financial Reports'],
        ],
        [
          'name' => 'Savings & Loan Management',
          'tag' => 'SACCO',
          'icon' => 'fa-piggy-bank',
          'desc' => 'Group savings and lending made simple — from application and guarantors to final repayment.',
          'modules' => ['Member Savings Accounts', 'Loan Applications & Approvals', 'Guarantor Tracking', 'Repayment Schedules', 'Arrears Monitoring', 'Statements & Reports'],
        ],
      ],
    ],
    [
      'id' => 'healthcare',
      'num' => '04',
      'icon' => 'fa-heart-pulse',
      'title' => '<span>Healthcare</span> Solutions',
      'desc' => 'Give patients faster care and clinicians instant access to records — from reception to pharmacy.',
      'systems' => [
        [
          'name' => 'Hospital & Health Information Management System',
          'tag' => 'HMIS / HIS',
          'icon' => 'fa-hospital',
          'desc' => 'An end-to-end hospital platform connecting every department on one patient record.',
          'modules' => ['Patient Registration', 'Appointments', 'Clinical Records', 'Pharmacy', 'Laboratory', 'Billing', 'Health Reports'],
        ],
        [
          'name' => 'Clinic & Health Information Management',
          'tag' => 'Clinic MIS',
          'icon' => 'fa-user-doctor',
          'desc' => 'Lightweight clinic management for dispensaries, health centres and specialist practices.',
          'modules' => ['Electronic Medical Records', 'Queue Management', 'Prescriptions', 'Lab Results', 'Invoicing & Claims', 'Reports & Analytics'],
        ],
      ],
    ],
    [
      'id' => 'commerce-logistics',
      'num' => '05',
      'icon' => 'fa-truck-fast',
      'title' => 'Commerce &amp; <span>Logistics</span>',
      'desc' => 'Sell online, deliver on time and keep your wheels turning — one connected commerce stack.',
      'systems' => [
        [
          'name' => 'E-Commerce & Online Ordering System',
          'tag' => 'E-Commerce',
          'icon' => 'fa-cart-shopping',
          'desc' => 'A complete online storefront with local payment options and order management built in.',
          'modules' => ['Online Product Catalogue', 'Shopping Cart', 'Online Payments', 'Order Management', 'Customer Accounts', 'Delivery Tracking'],
        ],
        [
          'name' => 'Dispatch & Delivery Management System',
          'tag' => 'Delivery',
          'icon' => 'fa-route',
          'desc' => 'Coordinate riders, batches and proof of delivery — with live status customers can trust.',
          'modules' => ['Dispatch Batch Management', 'Rider/Driver Management', 'Order Allocation', 'Delivery Tracking', 'Proof of Delivery', 'Delivery Reports'],
        ],
        [
          'name' => 'Fleet & Transport Management System',
          'tag' => 'Fleet',
          'icon' => 'fa-truck',
          'desc' => 'Know where every vehicle is, what it costs and when it needs service.',
          'modules' => ['Vehicle Management', 'Driver Management', 'Trip Management', 'Fuel Tracking', 'Maintenance', 'GPS Tracking'],
        ],
      ],
    ],
    [
      'id' => 'hospitality-property',
      'num' => '06',
      'icon' => 'fa-concierge-bell',
      'title' => 'Hospitality, Property &amp; <span>Tourism</span>',
      'desc' => 'Deliver five-star experiences and collect every shilling of rent and booking revenue.',
      'systems' => [
        [
          'name' => 'Hotel & Hospitality Management System',
          'tag' => 'Hotel',
          'icon' => 'fa-hotel',
          'desc' => 'From front desk to housekeeping — everything your guests never see, perfectly organized.',
          'modules' => ['Reservations', 'Guest Management', 'Rooms', 'Billing', 'Housekeeping', 'Reports'],
        ],
        [
          'name' => 'Property & Real Estate Management System',
          'tag' => 'Real Estate',
          'icon' => 'fa-house-circle-check',
          'desc' => 'Manage landlords, tenants, leases and maintenance across unlimited properties.',
          'modules' => ['Property Management', 'Tenants', 'Rent Collection', 'Lease Management', 'Maintenance Requests', 'Property Reports'],
        ],
        [
          'name' => 'Tourism & Travel Management System',
          'tag' => 'Tourism',
          'icon' => 'fa-earth-africa',
          'desc' => 'Package, book and manage safaris and tours with integrated payments and guides.',
          'modules' => ['Tour Packages', 'Online Bookings', 'Customer Management', 'Payments', 'Guide Management', 'Transport Coordination', 'Booking Reports'],
        ],
      ],
    ],
    [
      'id' => 'government-institutional',
      'num' => '07',
      'icon' => 'fa-landmark',
      'title' => 'Government &amp; <span>Institutional Solutions</span>',
      'desc' => 'Transparent public services, accountable document trails and engaged communities — fully digitized.',
      'systems' => [
        [
          'name' => 'Government & Public Service Management System',
          'tag' => 'Public Sector',
          'icon' => 'fa-id-card',
          'desc' => 'Citizen-facing services with digital applications, payments and status tracking end-to-end.',
          'modules' => ['Citizen Registration', 'Service Applications', 'Digital Payments', 'Status Tracking', 'Reporting & Dashboards'],
        ],
        [
          'name' => 'Document & Workflow Management System',
          'tag' => 'Workflow',
          'icon' => 'fa-diagram-project',
          'desc' => 'Route files through configurable approvals with complete audit trails and secure archives.',
          'modules' => ['Central Document Repository', 'Version Control', 'Workflow & Approvals', 'Search & Retrieval', 'Access Controls', 'Audit Trails'],
        ],
        [
          'name' => 'Church & Membership Management System',
          'tag' => 'Membership',
          'icon' => 'fa-people-group',
          'desc' => 'Built for churches, associations and member-based organizations of any size.',
          'modules' => ['Member Registration', 'Contributions', 'Events', 'Attendance', 'Groups', 'Elections', 'Communication'],
        ],
      ],
    ],
  ];
@endphp

@foreach($categories as $category)
<section class="sln-section" id="{{ $category['id'] }}" style="background: {{ $loop->even ? '#fff' : 'var(--off-white)' }};">
  <div class="container">
    <header class="sln-cat-head reveal">
      <div class="sln-cat-icon"><i class="fas {{ $category['icon'] }}"></i></div>
      <div class="sln-cat-kicker">{{ $category['num'] }} — Solution Suite</div>
      <h2 class="sln-cat-title">{!! $category['title'] !!}</h2>
      <p class="sln-cat-desc">{!! $category['desc'] !!}</p>
    </header>

    <div class="sln-grid">
      @foreach($category['systems'] as $system)
      <div class="reveal sln-reveal" style="--d:{{ ($loop->index % 3) * 90 }}ms;">
        <article class="sln-card">
          <span class="sln-card-num">/{{ str_pad($loop->index + 1, 2, '0', STR_PAD_LEFT) }}</span>
          <div class="sln-card-top">
            <div class="sln-card-icon"><i class="fas {{ $system['icon'] }}"></i></div>
            <div class="sln-card-titles">
              <h3>{{ $system['name'] }}</h3>
              <span class="sln-card-tag">{{ $system['tag'] }}</span>
            </div>
          </div>
          <div class="sln-card-body">
            <p>{{ $system['desc'] }}</p>
            <ul class="sln-modules">
              @foreach($system['modules'] as $module)
                <li><i class="fas fa-check"></i>{{ $module }}</li>
              @endforeach
            </ul>
            <a href="{{ route('request-demo') }}" class="sln-link">Request a Demo <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endforeach

<!-- CUSTOM SOFTWARE DEVELOPMENT -->
<section class="sln-custom" id="custom-software">
  <div class="container" style="max-width:1240px;">
    <header class="sln-cat-head reveal">
      <div class="sln-cat-icon"><i class="fas fa-code"></i></div>
      <div class="sln-cat-kicker">08 — Built From Scratch</div>
      <h2 class="sln-cat-title">Custom Software <span>Development</span></h2>
      <p class="sln-cat-desc">When off-the-shelf isn't enough, our engineering team designs and builds software around your exact workflow.</p>
    </header>

    <div class="sln-dev-grid">
      <div class="reveal" style="--d:0ms;">
        <div class="sln-dev-card">
          <div class="sln-dev-icon"><i class="fas fa-window-maximize"></i></div>
          <h3>Web Applications</h3>
          <p>Scalable platforms built on modern frameworks — fast, secure and accessible from any device.</p>
          <ul class="sln-dev-list">
            <li><i class="fas fa-circle-check"></i> Business portals &amp; dashboards</li>
            <li><i class="fas fa-circle-check"></i> SaaS products</li>
            <li><i class="fas fa-circle-check"></i> Progressive web apps</li>
          </ul>
        </div>
      </div>
      <div class="reveal" style="--d:90ms;">
        <div class="sln-dev-card">
          <div class="sln-dev-icon"><i class="fas fa-mobile-screen-button"></i></div>
          <h3>Mobile Applications</h3>
          <p>Native-feel Android &amp; iOS apps that work even when connectivity doesn't cooperate.</p>
          <ul class="sln-dev-list">
            <li><i class="fas fa-circle-check"></i> Flutter &amp; React Native</li>
            <li><i class="fas fa-circle-check"></i> Offline-first design</li>
            <li><i class="fas fa-circle-check"></i> Push notifications</li>
          </ul>
        </div>
      </div>
      <div class="reveal" style="--d:180ms;">
        <div class="sln-dev-card">
          <div class="sln-dev-icon"><i class="fas fa-plug-circle-bolt"></i></div>
          <h3>API &amp; System Integration</h3>
          <p>Connect the tools you already use into one seamless, automated operation.</p>
          <ul class="sln-dev-list">
            <li><i class="fas fa-circle-check"></i> Mobile money gateways</li>
            <li><i class="fas fa-circle-check"></i> SMS &amp; WhatsApp APIs</li>
            <li><i class="fas fa-circle-check"></i> ERP &amp; legacy integration</li>
          </ul>
        </div>
      </div>
      <div class="reveal" style="--d:270ms;">
        <div class="sln-dev-card">
          <div class="sln-dev-icon"><i class="fas fa-cubes"></i></div>
          <h3>Enterprise Software Solutions</h3>
          <p>Large-scale systems engineered for complex organizations and heavy workloads.</p>
          <ul class="sln-dev-list">
            <li><i class="fas fa-circle-check"></i> ERP &amp; business automation</li>
            <li><i class="fas fa-circle-check"></i> Data warehousing &amp; BI</li>
            <li><i class="fas fa-circle-check"></i> AI-powered analytics</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="sln-custom-cta reveal">
      <p><i class="fas fa-lightbulb"></i> Have something unique in mind? We start with discovery workshops, prototype fast, and deliver in agile sprints you can see.</p>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-comments"></i> Discuss Your Project</a>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="sln-stats">
  <div class="sln-stats-inner">
    <div class="reveal">
      <div class="sln-stat-num">20<span>+</span></div>
      <div class="sln-stat-label">Ready Systems</div>
    </div>
    <div class="reveal" style="--d:90ms;">
      <div class="sln-stat-num">150<span>+</span></div>
      <div class="sln-stat-label">Business Modules</div>
    </div>
    <div class="reveal" style="--d:180ms;">
      <div class="sln-stat-num">100<span>%</span></div>
      <div class="sln-stat-label">Mobile Money Ready</div>
    </div>
    <div class="reveal" style="--d:270ms;">
      <div class="sln-stat-num">24/7</div>
      <div class="sln-stat-label">Local Support</div>
    </div>
  </div>
</div>

<!-- CTA -->
<section style="background: var(--off-white); padding: 96px 4%;">
  <div class="container">
    <div class="sln-banner reveal">
      <div style="position: relative; z-index: 2;">
        <h3>Not Sure Which System Fits Your Organization?</h3>
        <p>Tell us how you operate and we'll recommend the right solution — with a free consultation, live demo and detailed quote within 24 hours.</p>
      </div>
      <div class="sln-banner-actions">
        <a href="{{ route('request.quote') }}" class="btn-primary"><i class="fas fa-file-invoice"></i> Request a Quote</a>
        <a href="{{ route('request-demo') }}" class="btn-outline"><i class="fas fa-desktop"></i> Book a Demo</a>
      </div>
    </div>
  </div>
</section>

<script>
  // Scrollspy: highlight the category tab currently in view
  (function () {
    var tabs = document.querySelectorAll('.sln-tab');
    var sections = [];
    tabs.forEach(function (t) {
      var sec = document.getElementById(t.dataset.target);
      if (sec) sections.push({ el: sec, tab: t });
    });
    if (!sections.length || !('IntersectionObserver' in window)) return;

    function activate(tab) {
      tabs.forEach(function (t) { t.classList.remove('active'); });
      if (tab) tab.classList.add('active');
    }

    var current = sections[0].el;
    var spy = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) current = entry.target;
      });
      sections.forEach(function (s) {
        if (s.el === current) activate(s.tab);
      });
    }, { rootMargin: '-45% 0px -50% 0px', threshold: 0 });

    sections.forEach(function (s) { spy.observe(s.el); });
  })();
</script>
@endsection
