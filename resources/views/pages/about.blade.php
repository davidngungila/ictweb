@extends('layouts.app')

@section('title', 'About Us | ICT Solutions Company in Tanzania')

@section('meta_tags')
  <meta name="description" content="Learn about our ICT company in Tanzania. We provide web development, systems, networks and IT solutions for businesses and organizations.">
  <meta name="keywords" content="about ICT company Tanzania, IT experts Tanzania, software company Dar es Salaam">
  <meta property="og:title" content="About Us | ICT Solutions Company in Tanzania">
  <meta property="og:description" content="Learn about our ICT company in Tanzania. We provide web development, systems, networks and IT solutions for businesses and organizations.">
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
  $whyPoints = [
      [
          'icon' => 'fas fa-map-marker-alt',
          'title' => 'Deep Local Market Knowledge',
          'desc' => 'We know the Tanzanian business landscape — from M-Pesa integrations to Swahili content and TCRA compliance requirements.',
      ],
      [
          'icon' => 'fas fa-bolt',
          'title' => 'Fast Delivery, No Shortcuts',
          'desc' => 'Most projects delivered in days — not months. Modern frameworks and agile workflows keep us fast without losing quality.',
      ],
      [
          'icon' => 'fas fa-phone-volume',
          'title' => 'Real Support in Real Time',
          'desc' => 'Call, WhatsApp, or SMS us — we actually answer. Our local team speaks Swahili and English and responds fast.',
      ],
      [
          'icon' => 'fas fa-coins',
          'title' => 'Transparent, Competitive Pricing',
          'desc' => 'No surprise fees. Packages are clearly priced in TZS with everything spelled out upfront — built for Tanzanian budgets.',
      ],
  ];

  $missionVision = [
      [
          'icon' => 'fas fa-bullseye',
          'label' => 'Our Mission',
          'title' => 'Make world-class technology genuinely accessible to Tanzanian businesses.',
          'desc' => 'We deliver reliable, locally supported digital solutions at honest prices — so every organization, from safari operator to NGO, can compete on the global stage.',
      ],
      [
          'icon' => 'fas fa-eye',
          'label' => 'Our Vision',
          'title' => 'A digitally transformed Tanzania, led by confident local businesses.',
          'desc' => 'We see a country where organizations trust technology, build with it daily, and rely on partners who are as committed to their success as they are.',
      ],
  ];

  $processSteps = [
      [
          'num' => '01',
          'title' => 'Free Consultation',
          'desc' => 'We discuss your goals, requirements, and budget. No hidden costs — full transparency from the start.',
      ],
      [
          'num' => '02',
          'title' => 'Custom Proposal',
          'desc' => 'You receive a detailed proposal with clear scope, timeline, pricing, and all deliverables.',
      ],
      [
          'num' => '03',
          'title' => 'Development',
          'desc' => 'Our team builds your solution with regular updates, testing, and feedback rounds along the way.',
      ],
      [
          'num' => '04',
          'title' => 'Launch & Support',
          'desc' => 'We deploy, train your team, and provide one month of free post-launch support and monitoring.',
      ],
  ];

  $technologies = [
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

  $aboutStats = [
      ['value' => '500', 'suffix' => '+', 'label' => 'Projects Completed'],
      ['value' => '200', 'suffix' => '+', 'label' => 'Active Clients'],
      ['value' => '98', 'suffix' => '%', 'label' => 'Client Satisfaction'],
      ['value' => '24', 'suffix' => '/7', 'label' => 'Support Availability'],
  ];
@endphp

<style>
  .ab-hero {
    position: relative;
    padding: 120px 0 110px;
    background: linear-gradient(180deg, #F4FAFE 0%, #FFFFFF 100%);
    overflow: hidden;
  }
  .ab-hero-grid {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(8,120,181,0.07) 1px, transparent 1px), linear-gradient(90deg, rgba(8,120,181,0.07) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: radial-gradient(ellipse at 60% 40%, #000 20%, transparent 76%);
    -webkit-mask-image: radial-gradient(ellipse at 60% 40%, #000 20%, transparent 76%);
  }
  .ab-hero-bg {
    position: absolute; inset: 0; pointer-events: none;
    background: radial-gradient(820px 460px at 14% 20%, rgba(8,120,181,0.12), transparent 60%), radial-gradient(680px 420px at 88% 86%, rgba(255,210,31,0.12), transparent 62%);
  }
  .ab-hero-inner {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center;
  }
  .ab-hero-copy { max-width: 620px; }
  .ab-badge {
    display: inline-flex; align-items: center; gap: 9px;
    background: #E7F3FB; color: #005B8F;
    font-weight: 800; font-size: .78rem; letter-spacing: 1.4px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 50px; border: 1px solid rgba(8,120,181,0.18);
  }
  .ab-badge .dot { width: 8px; height: 8px; border-radius: 50%; background: #FFD21F; box-shadow: 0 0 0 4px rgba(255,210,31,0.25); }
  .ab-hero-copy h1 {
    font-family: var(--font-display, inherit);
    font-size: clamp(2.2rem, 4.2vw, 3.4rem); line-height: 1.08; font-weight: 900;
    letter-spacing: -1px; color: #062B4D; margin: 22px 0 18px;
  }
  .ab-gold { color: #E8A800; }
  .ab-hero-copy p { font-size: 1.02rem; color: #4A5E78; line-height: 1.75; margin: 0; max-width: 560px; }
  .ab-pills { display: flex; flex-wrap: wrap; gap: 10px; margin: 26px 0 30px; }
  .ab-pills span {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: .82rem; font-weight: 700; color: #0B3A5C;
    background: #fff; border: 1px solid rgba(8,120,181,0.16); border-radius: 50px;
    padding: 8px 14px; box-shadow: 0 2px 8px rgba(6,43,77,0.05);
  }
  .ab-pills i { color: #0878B5; }
  .ab-hero-cta { display: flex; flex-wrap: wrap; gap: 14px; }
  .ab-btn-primary, .ab-btn-outline, .ab-btn-wa, .ab-btn-ghost {
    display: inline-flex; align-items: center; justify-content: center; gap: 9px;
    font-weight: 800; font-size: .92rem; padding: 14px 24px; border-radius: 12px;
    text-decoration: none; transition: all .25s ease;
  }
  .ab-btn-primary { background: linear-gradient(135deg, #0878B5, #005B8F); color: #fff; box-shadow: 0 10px 24px -8px rgba(8,120,181,0.55); }
  .ab-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 14px 30px -8px rgba(8,120,181,0.65); color: #fff; }
  .ab-btn-outline { background: #fff; color: #005B8F; border: 1.5px solid #0878B5; }
  .ab-btn-outline:hover { background: #E7F3FB; transform: translateY(-2px); }
  .ab-btn-wa { background: #1DA851; color: #fff; box-shadow: 0 10px 24px -8px rgba(29,168,81,0.5); }
  .ab-btn-wa:hover { background: #179244; color: #fff; transform: translateY(-2px); }
  .ab-btn-ghost { background: transparent; color: #fff; border: 1.5px solid rgba(255,255,255,0.4); }
  .ab-btn-ghost:hover { border-color: #FFD21F; color: #FFD21F; }
  .ab-hero-art { position: relative; display: flex; justify-content: center; }
  .ab-art-frame {
    position: relative; width: min(460px, 100%); aspect-ratio: 4 / 4.4;
    border-radius: 24px; overflow: hidden; border: 6px solid #fff;
    box-shadow: 0 30px 60px -20px rgba(6,43,77,0.35);
  }
  .ab-art-frame img { width: 100%; height: 100%; object-fit: cover; }
  .ab-art-ring {
    position: absolute; inset: -16px; pointer-events: none;
    border: 2px dashed rgba(8,120,181,0.35); border-radius: 34px;
  }
  .ab-art-card {
    position: absolute; display: flex; align-items: center; gap: 11px;
    background: #fff; border-radius: 14px; padding: 12px 16px;
    border: 1px solid rgba(8,120,181,0.12);
    box-shadow: 0 16px 34px -12px rgba(6,43,77,0.28);
  }
  .ab-art-card-a { bottom: 18px; left: -34px; }
  .ab-art-card-b { top: 34px; right: -30px; }
  .ab-art-ico {
    width: 38px; height: 38px; border-radius: 10px; flex: none;
    background: #E7F3FB; color: #0878B5;
    display: flex; align-items: center; justify-content: center; font-size: 1rem;
  }
  .ab-art-ico.gold { background: #FFF3C4; color: #E8A800; }
  .ab-art-card strong { font-size: .82rem; color: #062B4D; display: block; }
  .ab-art-card small { font-size: .72rem; color: #5B7089; }

  .ab-story { padding: 96px 0; background: #fff; }
  .ab-story-inner { display: grid; grid-template-columns: 0.95fr 1.05fr; gap: 60px; align-items: center; }
  .ab-story-media { position: relative; }
  .ab-story-main {
    position: relative; width: 100%; aspect-ratio: 4 / 3.4; border-radius: 20px; overflow: hidden;
    border: 1px solid rgba(8,120,181,0.12);
    box-shadow: 0 24px 48px -20px rgba(6,43,77,0.3);
  }
  .ab-story-main img { width: 100%; height: 100%; object-fit: cover; }
  .ab-story-sec {
    position: absolute; right: -26px; bottom: -34px;
    width: 46%; aspect-ratio: 1 / 1.1; border-radius: 16px; overflow: hidden;
    border: 6px solid #fff;
    box-shadow: 0 18px 36px -14px rgba(6,43,77,0.3);
  }
  .ab-story-sec img { width: 100%; height: 100%; object-fit: cover; }
  .ab-story-badge {
    position: absolute; left: -18px; top: -18px;
    background: linear-gradient(135deg, #0878B5, #005B8F); color: #fff;
    border-radius: 16px; padding: 16px 18px; text-align: center;
    box-shadow: 0 14px 28px -10px rgba(8,120,181,0.55);
  }
  .ab-story-badge b { font-family: var(--font-display, inherit); font-size: 1.7rem; font-weight: 900; line-height: 1; display: block; }
  .ab-story-badge b em { font-style: normal; color: #FFD21F; }
  .ab-story-badge span { font-size: .68rem; font-weight: 700; letter-spacing: .6px; text-transform: uppercase; color: rgba(255,255,255,0.85); display: block; margin-top: 4px; }
  .ab-tag {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: .75rem; font-weight: 800; letter-spacing: 1.6px; text-transform: uppercase;
    color: #0878B5; background: #E7F3FB; border: 1px solid rgba(8,120,181,0.16);
    padding: 7px 16px; border-radius: 50px;
  }
  .ab-tag i { color: #E8A800; }
  .ab-title {
    font-family: var(--font-display, inherit);
    font-size: clamp(1.7rem, 3vw, 2.4rem); font-weight: 900;
    letter-spacing: -.6px; color: #062B4D; margin: 16px 0 16px;
  }
  .ab-copy { font-size: .98rem; color: #4A5E78; line-height: 1.75; margin: 0 0 16px; }
  .ab-story-metrics { display: flex; flex-wrap: wrap; gap: 26px; margin: 26px 0 30px; }
  .ab-metric b { font-family: var(--font-display, inherit); font-size: 1.5rem; font-weight: 900; color: #062B4D; display: block; line-height: 1.1; }
  .ab-metric b em { font-style: normal; color: #E8A800; }
  .ab-metric span { font-size: .78rem; font-weight: 700; color: #5B7089; letter-spacing: .4px; }
  .ab-link {
    display: inline-flex; align-items: center; gap: 9px;
    font-weight: 800; color: #0878B5; text-decoration: none;
    transition: gap .25s ease, color .25s ease;
  }
  .ab-link:hover { color: #E8A800; gap: 13px; }

  .ab-why { padding: 96px 0; background: #F4FAFE; }
  .ab-head { text-align: center; max-width: 660px; margin: 0 auto 54px; }
  .ab-sub { font-size: .98rem; color: #4A5E78; line-height: 1.7; margin: 0; }
  .ab-why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }
  .ab-why-card {
    position: relative; overflow: hidden;
    background: #fff; border: 1px solid rgba(8,120,181,0.12); border-radius: 16px;
    padding: 28px 24px; box-shadow: 0 10px 26px -18px rgba(6,43,77,0.14);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
  }
  .ab-why-card::before {
    content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 4px;
    background: linear-gradient(180deg, #0878B5, #005B8F); opacity: 0; transition: opacity .3s ease;
  }
  .ab-why-card:hover { transform: translateY(-6px); border-color: rgba(255,210,31,0.6); box-shadow: 0 22px 44px -20px rgba(6,43,77,0.24); }
  .ab-why-card:hover::before { opacity: 1; }
  .ab-why-ico {
    width: 52px; height: 52px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center; font-size: 1.25rem;
    color: #0878B5; background: #E7F3FB; margin-bottom: 18px; transition: all .3s ease;
  }
  .ab-why-card:hover .ab-why-ico { background: #FFD21F; color: #062B4D; }
  .ab-why-card h3 {
    font-family: var(--font-display, inherit); font-size: 1.02rem; font-weight: 900;
    letter-spacing: -.3px; color: #062B4D; margin: 0 0 8px;
  }
  .ab-why-card p { font-size: .85rem; color: #4A5E78; line-height: 1.65; margin: 0; }

  .ab-mission { padding: 96px 0; background: #fff; }
  .ab-mission-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 26px; }
  .ab-mission-card {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #062B4D 0%, #0A3A66 100%);
    border-radius: 20px; padding: 38px 34px; color: #fff;
    border: 1px solid rgba(8,120,181,0.2);
    box-shadow: 0 24px 50px -24px rgba(6,43,77,0.5);
    transition: transform .3s ease, box-shadow .3s ease;
  }
  .ab-mission-card::before {
    content: ''; position: absolute; right: -80px; top: -80px;
    width: 240px; height: 240px; border-radius: 50%;
    background: radial-gradient(circle, rgba(255,210,31,0.18), transparent 62%);
  }
  .ab-mission-card:hover { transform: translateY(-6px); box-shadow: 0 30px 60px -24px rgba(6,43,77,0.55); }
  .ab-mission-ico {
    width: 54px; height: 54px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center; font-size: 1.3rem;
    background: #FFD21F; color: #062B4D; margin-bottom: 22px;
  }
  .ab-mission-label {
    display: block; font-size: .74rem; font-weight: 800; letter-spacing: 1.6px; text-transform: uppercase;
    color: #FFD21F; margin-bottom: 10px;
  }
  .ab-mission-card h3 {
    font-family: var(--font-display, inherit); font-size: 1.3rem; font-weight: 900;
    line-height: 1.35; letter-spacing: -.4px; margin: 0 0 14px; color: #fff;
  }
  .ab-mission-card p { font-size: .92rem; line-height: 1.7; color: rgba(255,255,255,0.82); margin: 0; }

  .ab-process {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #041C33 0%, #0A3A66 100%); padding: 96px 0;
  }
  .ab-process-bg { position: absolute; inset: 0; pointer-events: none; }
  .ab-process-bg::before {
    content: ''; position: absolute; inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse at 50% 0%, #000 20%, transparent 80%);
    -webkit-mask-image: radial-gradient(ellipse at 50% 0%, #000 20%, transparent 80%);
  }
  .ab-process .ab-head { position: relative; z-index: 2; }
  .ab-process .ab-tag { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.16); color: #8FCCEC; }
  .ab-process .ab-title { color: #fff; }
  .ab-process .ab-sub { color: rgba(255,255,255,0.72); }
  .ab-process-grid {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px;
  }
  .ab-step {
    position: relative;
    background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
    border-radius: 18px; padding: 30px 26px 28px;
    backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px);
    transition: transform .3s ease, border-color .3s ease, background .3s ease;
  }
  .ab-step:hover { transform: translateY(-6px); border-color: rgba(255,210,31,0.55); background: rgba(255,255,255,0.09); }
  .ab-step-num {
    font-family: var(--font-display, inherit); font-size: 2.4rem; font-weight: 900;
    color: rgba(255,255,255,0.12); line-height: 1; letter-spacing: -1px; display: block; margin-bottom: 22px;
  }
  .ab-step:hover .ab-step-num { color: rgba(255,210,31,0.45); }
  .ab-step h3 { font-size: 1.05rem; font-weight: 900; color: #fff; margin: 0 0 10px; font-family: var(--font-display, inherit); letter-spacing: -.3px; }
  .ab-step p { font-size: .86rem; line-height: 1.65; color: rgba(255,255,255,0.72); margin: 0; }
  .ab-step::after {
    content: ''; position: absolute; right: -12px; top: 46%; width: 14px; height: 14px;
    transform: translateY(-50%) rotate(45deg);
    background: #FFD21F; border-radius: 3px;
  }
  .ab-step:last-child::after { display: none; }

  .ab-tech { padding: 96px 0; background: #fff; }
  .ab-tech-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; max-width: 1000px; margin: 0 auto; }
  .ab-tech-chip {
    display: flex; align-items: center; gap: 11px;
    background: #F7FBFE; border: 1px solid rgba(8,120,181,0.14); border-radius: 14px;
    padding: 14px 16px;
    transition: all .25s ease;
  }
  .ab-tech-chip:hover { transform: translateY(-3px); border-color: rgba(255,210,31,0.7); box-shadow: 0 12px 24px -12px rgba(6,43,77,0.18); background: #fff; }
  .ab-tech-ico {
    width: 40px; height: 40px; border-radius: 11px; flex: none;
    display: flex; align-items: center; justify-content: center;
    background: #E7F3FB; color: #0878B5; font-size: 1.05rem;
    transition: all .25s ease;
  }
  .ab-tech-chip:hover .ab-tech-ico { background: #FFD21F; color: #062B4D; }
  .ab-tech-chip span { font-size: .9rem; font-weight: 800; color: #0B3A5C; }

  .ab-stats {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #041C33 0%, #0A3A66 100%); padding: 72px 0;
  }
  .ab-stats::before {
    content: ''; position: absolute; inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 82%);
    -webkit-mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 82%);
  }
  .ab-stats-grid {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center;
  }
  .ab-stat { border-right: 1px solid rgba(255,255,255,0.12); padding: 0 18px; }
  .ab-stat:last-child { border-right: 0; }
  .ab-stat-num {
    font-family: var(--font-display, inherit);
    font-size: clamp(2rem, 4vw, 2.9rem); font-weight: 900; line-height: 1;
    letter-spacing: -1px; color: #fff; display: block;
  }
  .ab-stat-num em { font-style: normal; color: #FFD21F; }
  .ab-stat-label {
    display: block; margin-top: 10px;
    font-size: .82rem; font-weight: 700; letter-spacing: .6px; text-transform: uppercase;
    color: rgba(255,255,255,0.75);
  }

  .ab-cta {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #0878B5 0%, #005B8F 60%, #004A78 100%); padding: 62px 0;
  }
  .ab-cta-bg { position: absolute; inset: 0; pointer-events: none; }
  .ab-cta-bg::before {
    content: ''; position: absolute; inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.06) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px);
    background-size: 38px 38px;
  }
  .ab-cta-bg::after {
    content: ''; position: absolute; left: -140px; bottom: -170px;
    width: 460px; height: 460px; border-radius: 50%;
    background: radial-gradient(circle, rgba(255,210,31,0.25), transparent 62%);
  }
  .ab-cta-inner {
    position: relative; z-index: 2;
    display: flex; align-items: center; justify-content: space-between; gap: 28px; flex-wrap: wrap;
  }
  .ab-cta-copy h2 {
    font-family: var(--font-display, inherit);
    font-size: clamp(1.4rem, 2.6vw, 2rem); font-weight: 900;
    letter-spacing: -.5px; color: #fff; margin: 0 0 8px;
  }
  .ab-cta-copy h2 em { font-style: normal; color: #FFD21F; }
  .ab-cta-copy p { font-size: .96rem; color: rgba(255,255,255,0.82); margin: 0; }
  .ab-cta-actions { display: flex; flex-wrap: wrap; gap: 12px; }

  .ab-why-grid .reveal:nth-child(2) { transition-delay: .06s; }
  .ab-why-grid .reveal:nth-child(3) { transition-delay: .12s; }
  .ab-why-grid .reveal:nth-child(4) { transition-delay: .18s; }
  .ab-process-grid .reveal:nth-child(2) { transition-delay: .06s; }
  .ab-process-grid .reveal:nth-child(3) { transition-delay: .12s; }
  .ab-process-grid .reveal:nth-child(4) { transition-delay: .18s; }

  a:focus-visible { outline: 3px solid #FFD21F; outline-offset: 2px; border-radius: 8px; }

  @media (max-width: 1100px) {
    .ab-why-grid, .ab-tech-grid { grid-template-columns: repeat(2, 1fr); }
    .ab-process-grid { grid-template-columns: repeat(2, 1fr); }
    .ab-step::after { display: none; }
  }
  @media (max-width: 900px) {
    .ab-hero { padding: 84px 0 90px; }
    .ab-hero-inner { grid-template-columns: 1fr; gap: 56px; }
    .ab-hero-copy { text-align: center; }
    .ab-hero-copy p { margin: 0 auto; }
    .ab-pills, .ab-hero-cta { justify-content: center; }
    .ab-art-frame { width: min(380px, 100%); }
    .ab-art-card-a { left: 6px; }
    .ab-art-card-b { right: 6px; }
    .ab-story-inner { grid-template-columns: 1fr; gap: 64px; }
    .ab-story-sec { right: 0; }
    .ab-story-badge { left: 0; }
    .ab-mission-grid { grid-template-columns: 1fr; }
    .ab-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .ab-stat:nth-child(2n) { border-right: 0; }
    .ab-stat:nth-child(n+3) { border-top: 1px solid rgba(255,255,255,0.12); padding-top: 26px; margin-top: 12px; }
    .ab-cta-inner { justify-content: center; text-align: center; }
    .ab-cta-actions { justify-content: center; }
  }
  @media (max-width: 600px) {
    .ab-why-grid, .ab-process-grid, .ab-tech-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 480px) {
    .ab-stats-grid { grid-template-columns: 1fr; }
    .ab-stat { border-right: 0; border-top: 1px solid rgba(255,255,255,0.12); padding: 22px 0 0; }
    .ab-stat:first-child { border-top: 0; padding-top: 0; }
  }
  @media (prefers-reduced-motion: reduce) {
    .ab-hero, .ab-hero-grid, .ab-hero-bg, .ab-art-ring, .ab-story-main, .ab-story-sec,
    .ab-story-badge, .ab-why-card, .ab-why-ico, .ab-mission-card, .ab-step,
    .ab-tech-chip, .ab-tech-ico, .ab-btn-primary, .ab-btn-outline, .ab-btn-wa, .ab-btn-ghost, .ab-link {
      transition: none !important;
      transform: none !important;
    }
  }
</style>

<section class="ab-hero">
  <div class="ab-hero-bg" aria-hidden="true"></div>
  <div class="ab-hero-grid" aria-hidden="true"></div>
  <div class="container ab-hero-inner">
    <div class="ab-hero-copy">
      <span class="ab-badge"><span class="dot"></span> About Us</span>
      <h1>Tanzania's Most Trusted <span class="ab-gold">ICT Partner</span></h1>
      <p>Based in Moshi, Kilimanjaro — at the foot of Mount Kilimanjaro and gateway to Tanzania's northern safari circuit — we help tour operators, hotels, NGOs and businesses across Tanzania go digital and grow faster.</p>
      <div class="ab-pills" aria-label="What makes us different">
        <span><i class="fas fa-map-marker-alt"></i> Local Experts</span>
        <span><i class="fas fa-sim-card"></i> M-Pesa Ready</span>
        <span><i class="fas fa-clock"></i> 24&middot;7 Support</span>
      </div>
      <div class="ab-hero-cta">
        <a href="#story" class="ab-btn-primary"><i class="fas fa-book-open"></i> Our Story</a>
        <a href="{{ route('team') }}" class="ab-btn-outline"><i class="fas fa-users"></i> Meet the Team</a>
      </div>
    </div>
    <div class="ab-hero-art">
      <div class="ab-art-frame">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Jezdan Technology engineers planning in a server room">
      </div>
      <div class="ab-art-ring" aria-hidden="true"></div>
      <div class="ab-art-card ab-art-card-a">
        <span class="ab-art-ico gold"><i class="fas fa-star"></i></span>
        <div><strong>7+ Years</strong><small>of Excellence</small></div>
      </div>
      <div class="ab-art-card ab-art-card-b">
        <span class="ab-art-ico"><i class="fas fa-map-marker-alt"></i></span>
        <div><strong>Moshi &middot; Kilimanjaro</strong><small>Gateway to the north</small></div>
      </div>
    </div>
  </div>
</section>

<section class="ab-story" id="story">
  <div class="container">
    <div class="ab-story-inner">
      <div class="ab-story-media reveal">
        <div class="ab-story-main">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg" alt="Jezdan Technology engineers reviewing infrastructure in a server farm">
        </div>
        <div class="ab-story-sec">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Developer building digital solutions">
        </div>
        <div class="ab-story-badge">
          <b>500<em>+</em></b>
          <span>Projects Completed</span>
        </div>
      </div>
      <div>
        <span class="ab-tag"><i class="fas fa-book-open"></i> Our Story</span>
        <h2 class="ab-title">We Build Technology That Moves <span class="ab-gold">Tanzania Forward</span></h2>
        <p class="ab-copy">We are a local team of engineers, developers, security specialists and consultants who understand the Tanzanian business landscape better than anyone — from M-Pesa integrations to Swahili content and TCRA compliance requirements.</p>
        <p class="ab-copy">Every project is delivered by people who answer their phones, speak your language, and care about the result as much as you do. No outsourcing, no shortcuts, no surprise fees.</p>
        <div class="ab-story-metrics">
          <div class="ab-metric"><b>7<em>+</em></b><span>Years of Excellence</span></div>
          <div class="ab-metric"><b>50<em>+</em></b><span>Projects Delivered</span></div>
          <div class="ab-metric"><b>100<em>%</em></b><span>Local Team</span></div>
        </div>
        <a href="{{ route('team') }}" class="ab-link">Meet the people behind the work <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="ab-why">
  <div class="container">
    <div class="ab-head reveal">
      <span class="ab-tag"><i class="fas fa-star"></i> Why Choose Us</span>
      <h2 class="ab-title">The ICT Partner You Can <span class="ab-gold">Actually Count On</span></h2>
      <p class="ab-sub">From the first call to long after launch, we make technology simple, transparent and dependable.</p>
    </div>
    <div class="ab-why-grid">
      @foreach($whyPoints as $point)
        <div class="ab-why-card reveal">
          <span class="ab-why-ico" aria-hidden="true"><i class="{{ $point['icon'] }}"></i></span>
          <h3>{{ $point['title'] }}</h3>
          <p>{{ $point['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-mission">
  <div class="container">
    <div class="ab-head reveal">
      <span class="ab-tag"><i class="fas fa-compass"></i> Purpose</span>
      <h2 class="ab-title">What Drives <span class="ab-gold">Everything We Do</span></h2>
    </div>
    <div class="ab-mission-grid">
      @foreach($missionVision as $item)
        <div class="ab-mission-card reveal">
          <span class="ab-mission-ico" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
          <span class="ab-mission-label">{{ $item['label'] }}</span>
          <h3>{{ $item['title'] }}</h3>
          <p>{{ $item['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-process">
  <div class="ab-process-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="ab-head reveal">
      <span class="ab-tag"><i class="fas fa-route"></i> How We Work</span>
      <h2 class="ab-title">Our Simple <span class="ab-gold">4-Step Process</span></h2>
      <p class="ab-sub">From first call to going live — every step is smooth, transparent and efficient.</p>
    </div>
    <div class="ab-process-grid">
      @foreach($processSteps as $step)
        <div class="ab-step reveal">
          <span class="ab-step-num">{{ $step['num'] }}</span>
          <h3>{{ $step['title'] }}</h3>
          <p>{{ $step['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-tech">
  <div class="container">
    <div class="ab-head reveal">
      <span class="ab-tag"><i class="fas fa-code-branch"></i> Technology</span>
      <h2 class="ab-title">Built on <span class="ab-gold">Industry-Leading Tools</span></h2>
      <p class="ab-sub">Every project is engineered on proven, battle-tested technology — from mobile money APIs to enterprise cloud infrastructure.</p>
    </div>
    <div class="ab-tech-grid">
      @foreach($technologies as $tech)
        <div class="ab-tech-chip reveal">
          <span class="ab-tech-ico" aria-hidden="true"><i class="{{ $tech['c'] }}"></i></span>
          <span>{{ $tech['n'] }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-stats" aria-label="Company statistics">
  <div class="container ab-stats-grid">
    @foreach($aboutStats as $stat)
      <div class="ab-stat reveal">
        <span class="ab-stat-num">{{ $stat['value'] }}<em>{{ $stat['suffix'] }}</em></span>
        <span class="ab-stat-label">{{ $stat['label'] }}</span>
      </div>
    @endforeach
  </div>
</section>

<section class="ab-cta">
  <div class="ab-cta-bg" aria-hidden="true"></div>
  <div class="container ab-cta-inner">
    <div class="ab-cta-copy">
      <h2>Ready to Work <em>With Us</em>?</h2>
      <p>Let's discuss how we can help your business grow. Get a free consultation and a detailed quote within 24 hours.</p>
    </div>
    <div class="ab-cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20working%20with%20you." class="ab-btn-wa" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
      <a href="{{ route('contact') }}" class="ab-btn-ghost"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</section>

@endsection
