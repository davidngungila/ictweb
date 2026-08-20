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

@php
  $leadership = [
      [
          'name' => 'David Ngungila',
          'position' => 'Chief Executive Officer (CEO)',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/portrait-male-engineer-working-field-engineers-day-celebration_afzsch.jpg',
          'bio' => 'Mkuu wa kampuni na msimamizi wa shughuli zote za kampuni. Anaongoza utekelezaji wa strategy na maamuzi ya Board.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Jeremia Thomas',
          'position' => 'Chief Operating Officer (COO)',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg',
          'bio' => 'Anasimamia shughuli za kila siku za kampuni. Anafuatilia utendaji wa departments na operations.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Samson Muro',
          'position' => 'Chief Financial Officer (CFO) / Finance Director',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg',
          'bio' => 'Fedha, bajeti, accounting, financial reporting, taxation na financial controls.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Lucas Sondoma',
          'position' => 'Chief Technology Officer (CTO) / Technology Director',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/programmer-home-office-concentrating-finding-bugs-while-he-codes_gctbqc.jpg',
          'bio' => 'Technology, software development, IT infrastructure, cybersecurity na digital transformation.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Kelvin Shaushi',
          'position' => 'Chief Marketing Officer (CMO) / Marketing & Communications Director',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg',
          'bio' => 'Marketing, branding, advertising, social media na public relations.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Remijo Msigwa',
          'position' => 'Chief Commercial Officer (CCO) / Business Development Director',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg',
          'bio' => 'Business development, sales, partnerships, tenders na client acquisition.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
  ];

  $teamMembers = [
      [
          'name' => 'Grace Mutua',
          'position' => 'Cybersecurity Analyst',
          'department' => 'Cybersecurity',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg',
          'bio' => 'Security audits, penetration testing and 24/7 monitoring that keep businesses protected around the clock.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Peter Nkosi',
          'position' => 'Network Engineer',
          'department' => 'Networks & CCTV',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg',
          'bio' => 'Designs and deploys structured cabling, enterprise Wi-Fi and video surveillance systems that just work.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Neema Shayo',
          'position' => 'Senior Software Engineer',
          'department' => 'Software Development',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg',
          'bio' => 'Full-stack engineer focused on clean architecture, API design and systems that scale with your business.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Baraka Mushi',
          'position' => 'Mobile Applications Developer',
          'department' => 'Mobile Development',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg',
          'bio' => 'Builds intuitive Flutter and React Native apps with offline-first behaviour and seamless payment integrations.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Zawadi Kessy',
          'position' => 'Cloud & Systems Administrator',
          'department' => 'Cloud & Infrastructure',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg',
          'bio' => 'Manages cloud landing zones, automation pipelines and disaster recovery that keep platforms resilient.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Emmanuel Mosha',
          'position' => 'ICT Consultant',
          'department' => 'ICT Consultancy',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg',
          'bio' => 'Translates business goals into technology roadmaps, budgets and vendor management plans that deliver ROI.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Salma Juma',
          'position' => 'UI/UX Designer',
          'department' => 'Software Development',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/programmer-home-office-concentrating-finding-bugs-while-he-codes_gctbqc.jpg',
          'bio' => 'Designs clean, accessible interfaces backed by research, wireframes and usability testing.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
      [
          'name' => 'Kelvin Mwita',
          'position' => 'Data & Analytics Specialist',
          'department' => 'Data & Analytics',
          'image' => 'https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/modern-data-center-providing-cloud-services-enabling-businesses-access-computing-resources-storage-demand-internet-server-room-infrastructure-3d-render-animation_lljtml.jpg',
          'bio' => 'Turns raw data into dashboards and decisions with pipelines built for accuracy and speed.',
          'linkedin' => '#',
          'email' => 'mailto:info@jezdantech.com',
      ],
  ];

  $expertise = [
      ['icon' => 'fas fa-code', 'title' => 'Software Development', 'desc' => 'Custom web platforms, APIs and enterprise systems built with proven frameworks.'],
      ['icon' => 'fas fa-arrows-rotate', 'title' => 'Digital Transformation', 'desc' => 'Modernising processes and legacy tools into efficient digital operations.'],
      ['icon' => 'fas fa-shield-halved', 'title' => 'Cybersecurity', 'desc' => 'Audits, penetration testing and 24/7 monitoring that protect your data.'],
      ['icon' => 'fas fa-cloud-arrow-up', 'title' => 'Cloud & Infrastructure', 'desc' => 'Resilient cloud landing zones, backups and disaster-recovery planning.'],
      ['icon' => 'fas fa-lightbulb', 'title' => 'ICT Consultancy', 'desc' => 'Roadmaps, budgeting and vendor management that turn strategy into results.'],
      ['icon' => 'fas fa-chart-line', 'title' => 'Data & Analytics', 'desc' => 'Dashboards and pipelines that turn raw data into confident decisions.'],
      ['icon' => 'fas fa-mobile-screen-button', 'title' => 'Mobile Applications', 'desc' => 'Offline-first Android and iOS apps with seamless payment integration.'],
      ['icon' => 'fas fa-network-wired', 'title' => 'Systems Integration', 'desc' => 'Connecting CRMs, ERPs, payment gateways and SMS into one workflow.'],
  ];

  $teamStats = config('site_content.team_stats', [
      ['value' => '10', 'suffix' => '+', 'label' => 'Professionals'],
      ['value' => '8', 'suffix' => '+', 'label' => 'Technology Areas'],
      ['value' => '50', 'suffix' => '+', 'label' => 'Projects Delivered'],
      ['value' => '24', 'suffix' => '/7', 'label' => 'Digital Support'],
  ]);
@endphp

<style>
  .tm-hero {
    position: relative;
    padding: 120px 0 110px;
    background: linear-gradient(180deg, #F4FAFE 0%, #FFFFFF 100%);
    overflow: hidden;
  }
  .tm-hero-grid {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(8,120,181,0.07) 1px, transparent 1px), linear-gradient(90deg, rgba(8,120,181,0.07) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: radial-gradient(ellipse at 62% 42%, #000 20%, transparent 76%);
    -webkit-mask-image: radial-gradient(ellipse at 62% 42%, #000 20%, transparent 76%);
  }
  .tm-hero-bg {
    position: absolute; inset: 0; pointer-events: none;
    background: radial-gradient(820px 460px at 84% 18%, rgba(8,120,181,0.12), transparent 60%), radial-gradient(680px 420px at 10% 88%, rgba(255,210,31,0.12), transparent 62%);
  }
  .tm-hero-glow {
    position: absolute; inset: 0; pointer-events: none;
    background: radial-gradient(340px 340px at 76% 30%, rgba(8,120,181,0.18), transparent 70%);
  }
  .tm-hero-inner {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center;
  }
  .tm-hero-copy { max-width: 620px; }
  .tm-badge {
    display: inline-flex; align-items: center; gap: 9px;
    background: #E7F3FB; color: #005B8F;
    font-weight: 800; font-size: .78rem; letter-spacing: 1.4px; text-transform: uppercase;
    padding: 8px 16px; border-radius: 50px; border: 1px solid rgba(8,120,181,0.18);
  }
  .tm-badge .dot { width: 8px; height: 8px; border-radius: 50%; background: #FFD21F; box-shadow: 0 0 0 4px rgba(255,210,31,0.25); }
  .tm-hero-copy h1 {
    font-family: var(--font-display, inherit);
    font-size: clamp(2.2rem, 4.2vw, 3.4rem); line-height: 1.08; font-weight: 900;
    letter-spacing: -1px; color: #062B4D; margin: 22px 0 18px;
  }
  .tm-gold { color: #E8A800; }
  .tm-hero-copy p { font-size: 1.04rem; color: #4A5E78; line-height: 1.75; margin: 0; max-width: 540px; }
  .tm-pills { display: flex; flex-wrap: wrap; gap: 10px; margin: 26px 0 30px; }
  .tm-pills span {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: .82rem; font-weight: 700; color: #0B3A5C;
    background: #fff; border: 1px solid rgba(8,120,181,0.16); border-radius: 50px;
    padding: 8px 14px; box-shadow: 0 2px 8px rgba(6,43,77,0.05);
  }
  .tm-pills i { color: #0878B5; }
  .tm-hero-cta { display: flex; flex-wrap: wrap; gap: 14px; }
  .tm-btn-primary, .tm-btn-outline, .tm-btn-wa {
    display: inline-flex; align-items: center; justify-content: center; gap: 9px;
    font-weight: 800; font-size: .92rem; padding: 14px 24px; border-radius: 12px;
    text-decoration: none; transition: all .25s ease;
  }
  .tm-btn-primary { background: linear-gradient(135deg, #0878B5, #005B8F); color: #fff; box-shadow: 0 10px 24px -8px rgba(8,120,181,0.55); }
  .tm-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 14px 30px -8px rgba(8,120,181,0.65); color: #fff; }
  .tm-btn-outline { background: #fff; color: #005B8F; border: 1.5px solid #0878B5; }
  .tm-btn-outline:hover { background: #E7F3FB; transform: translateY(-2px); }
  .tm-btn-wa { background: #1DA851; color: #fff; box-shadow: 0 10px 24px -8px rgba(29,168,81,0.5); }
  .tm-btn-wa:hover { background: #179244; color: #fff; transform: translateY(-2px); }
  .tm-hero-art { position: relative; display: flex; justify-content: center; }
  .tm-art-frame {
    position: relative; width: min(460px, 100%); aspect-ratio: 4 / 4.4;
    border-radius: 24px; overflow: hidden; border: 6px solid #fff;
    box-shadow: 0 30px 60px -20px rgba(6,43,77,0.35);
  }
  .tm-art-frame img { width: 100%; height: 100%; object-fit: cover; }
  .tm-art-ring {
    position: absolute; inset: -16px; pointer-events: none;
    border: 2px dashed rgba(8,120,181,0.35); border-radius: 34px;
  }
  .tm-art-card {
    position: absolute; display: flex; align-items: center; gap: 11px;
    background: #fff; border-radius: 14px; padding: 12px 16px;
    border: 1px solid rgba(8,120,181,0.12);
    box-shadow: 0 16px 34px -12px rgba(6,43,77,0.28);
  }
  .tm-art-card-a { bottom: 18px; left: -34px; }
  .tm-art-card-b { top: 34px; right: -30px; }
  .tm-art-ico {
    width: 38px; height: 38px; border-radius: 10px; flex: none;
    background: #E7F3FB; color: #0878B5;
    display: flex; align-items: center; justify-content: center; font-size: 1rem;
  }
  .tm-art-card strong { font-size: .82rem; color: #062B4D; display: block; }
  .tm-art-card small { font-size: .72rem; color: #5B7089; }

  .tm-lead, .tm-team, .tm-expert { padding: 96px 0; }
  .tm-lead { background: #fff; }
  .tm-team { background: #F4FAFE; }
  .tm-expert { background: #fff; }
  .tm-head { text-align: center; max-width: 660px; margin: 0 auto 54px; }
  .tm-tag {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: .75rem; font-weight: 800; letter-spacing: 1.6px; text-transform: uppercase;
    color: #0878B5; background: #E7F3FB; border: 1px solid rgba(8,120,181,0.16);
    padding: 7px 16px; border-radius: 50px;
  }
  .tm-tag i { color: #E8A800; }
  .tm-title {
    font-family: var(--font-display, inherit);
    font-size: clamp(1.7rem, 3vw, 2.4rem); font-weight: 900;
    letter-spacing: -.6px; color: #062B4D; margin: 16px 0 14px;
  }
  .tm-sub { font-size: .98rem; color: #4A5E78; line-height: 1.7; margin: 0; }

  .tm-lead-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 28px; }
  .tm-lead-card {
    display: flex; flex-direction: column;
    background: #fff; border-radius: 20px; overflow: hidden;
    border: 1px solid rgba(8,120,181,0.12);
    box-shadow: 0 14px 34px -18px rgba(6,43,77,0.18);
    transition: transform .3s ease, box-shadow .3s ease;
  }
  .tm-lead-card:hover { transform: translateY(-6px); box-shadow: 0 26px 50px -22px rgba(6,43,77,0.28); }
  .tm-lead-photo { position: relative; height: 300px; overflow: hidden; }
  .tm-lead-photo::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(180deg, transparent 60%, rgba(4,28,51,0.55));
  }
  .tm-lead-photo img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }
  .tm-lead-card:hover .tm-lead-photo img { transform: scale(1.05); }
  .tm-lead-badge {
    position: absolute; right: 14px; top: 14px; z-index: 2;
    width: 40px; height: 40px; border-radius: 12px;
    background: #FFD21F; color: #062B4D;
    display: flex; align-items: center; justify-content: center; font-size: 1rem;
    box-shadow: 0 8px 18px -6px rgba(255,210,31,0.6);
  }
  .tm-lead-body { padding: 26px 26px 28px; }
  .tm-lead-body h3 {
    font-family: var(--font-display, inherit); font-size: 1.28rem; font-weight: 900;
    letter-spacing: -.4px; color: #062B4D; margin: 0 0 6px;
  }
  .tm-role {
    display: inline-block; font-size: .74rem; font-weight: 800;
    text-transform: uppercase; letter-spacing: 1px; color: #0878B5;
    background: #E7F3FB; padding: 5px 12px; border-radius: 50px; margin-bottom: 12px;
  }
  .tm-lead-body p { font-size: .9rem; color: #4A5E78; line-height: 1.7; margin: 0 0 20px; }
  .tm-socials { display: flex; gap: 9px; }
  .tm-socials a {
    width: 40px; height: 40px; border-radius: 11px;
    display: flex; align-items: center; justify-content: center;
    background: #E7F3FB; color: #0878B5; font-size: .9rem; text-decoration: none;
    transition: all .25s ease;
  }
  .tm-socials a:hover { background: #005B8F; color: #fff; transform: translateY(-2px); }

  .tm-team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
  .tm-member {
    background: #fff; border-radius: 16px; overflow: hidden;
    border: 1px solid rgba(8,120,181,0.10);
    box-shadow: 0 10px 26px -16px rgba(6,43,77,0.16);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
  }
  .tm-member:hover { transform: translateY(-7px); box-shadow: 0 24px 44px -20px rgba(6,43,77,0.26); border-color: rgba(255,210,31,0.7); }
  .tm-photo { position: relative; height: 220px; overflow: hidden; }
  .tm-photo img { width: 100%; height: 100%; object-fit: cover; transition: transform .55s ease; }
  .tm-member:hover .tm-photo img { transform: scale(1.08); }
  .tm-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(180deg, transparent 40%, rgba(0,91,143,0.88));
    opacity: .82; transition: opacity .3s ease;
  }
  .tm-member:hover .tm-overlay { opacity: 1; }
  .tm-socials-overlay {
    position: absolute; bottom: 16px; left: 0; right: 0; justify-content: center;
    opacity: 0; transform: translateY(10px); transition: all .35s ease;
  }
  .tm-member:hover .tm-socials-overlay { opacity: 1; transform: translateY(0); }
  .tm-body { padding: 20px 20px 22px; }
  .tm-body h3 {
    font-family: var(--font-display, inherit); font-size: 1.05rem; font-weight: 900;
    letter-spacing: -.3px; color: #062B4D; margin: 0 0 4px;
  }
  .tm-dept { display: block; font-size: .74rem; font-weight: 700; color: #5B7089; margin-top: 2px; }
  .tm-body p { font-size: .85rem; color: #4A5E78; line-height: 1.65; margin: 12px 0 0; }
  .tm-member .tm-role { margin-bottom: 0; }
  .tm-member:hover .tm-role { background: #FFD21F; color: #062B4D; }
  .tm-member:hover .tm-body h3 { color: #005B8F; }

  .tm-expert-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }
  .tm-expert-card {
    position: relative; overflow: hidden;
    background: #fff; border: 1px solid rgba(8,120,181,0.12); border-radius: 16px;
    padding: 28px 24px; box-shadow: 0 10px 26px -18px rgba(6,43,77,0.14);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
  }
  .tm-expert-card::before {
    content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 4px;
    background: linear-gradient(180deg, #0878B5, #005B8F); opacity: 0; transition: opacity .3s ease;
  }
  .tm-expert-card:hover { transform: translateY(-6px); border-color: rgba(255,210,31,0.6); box-shadow: 0 22px 44px -20px rgba(6,43,77,0.24); }
  .tm-expert-card:hover::before { opacity: 1; }
  .tm-expert-ico {
    width: 52px; height: 52px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center; font-size: 1.25rem;
    color: #0878B5; background: #E7F3FB; margin-bottom: 18px; transition: all .3s ease;
  }
  .tm-expert-card:hover .tm-expert-ico { background: #FFD21F; color: #062B4D; }
  .tm-expert-card h3 {
    font-family: var(--font-display, inherit); font-size: 1.02rem; font-weight: 900;
    letter-spacing: -.3px; color: #062B4D; margin: 0 0 8px;
  }
  .tm-expert-card p { font-size: .85rem; color: #4A5E78; line-height: 1.65; margin: 0; }

  .tm-stats {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #041C33 0%, #0A3A66 100%); padding: 72px 0;
  }
  .tm-stats::before {
    content: ''; position: absolute; inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 82%);
    -webkit-mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 82%);
  }
  .tm-stats-grid {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center;
  }
  .tm-stat { border-right: 1px solid rgba(255,255,255,0.12); padding: 0 18px; }
  .tm-stat:last-child { border-right: 0; }
  .tm-stat-num {
    font-family: var(--font-display, inherit);
    font-size: clamp(2rem, 4vw, 2.9rem); font-weight: 900; line-height: 1;
    letter-spacing: -1px; color: #fff; display: block;
  }
  .tm-stat-num em { font-style: normal; color: #FFD21F; }
  .tm-stat-label {
    display: block; margin-top: 10px;
    font-size: .82rem; font-weight: 700; letter-spacing: .6px; text-transform: uppercase;
    color: rgba(255,255,255,0.75);
  }

  .tm-join {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #0878B5 0%, #005B8F 60%, #004A78 100%); padding: 88px 0;
  }
  .tm-join-bg { position: absolute; inset: 0; pointer-events: none; }
  .tm-join-bg::before {
    content: ''; position: absolute; inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.06) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px);
    background-size: 38px 38px;
  }
  .tm-join-bg::after {
    content: ''; position: absolute; right: -140px; top: -170px;
    width: 460px; height: 460px; border-radius: 50%;
    background: radial-gradient(circle, rgba(255,210,31,0.28), transparent 62%);
  }
  .tm-join-inner { position: relative; z-index: 2; text-align: center; max-width: 720px; margin: 0 auto; }
  .tm-join-inner h2 {
    font-family: var(--font-display, inherit);
    font-size: clamp(1.8rem, 3.4vw, 2.6rem); font-weight: 900;
    letter-spacing: -.6px; color: #fff; margin: 0 0 14px;
  }
  .tm-join-inner .tm-gold { color: #FFD21F; }
  .tm-join-inner p { font-size: 1rem; line-height: 1.7; color: rgba(255,255,255,0.85); margin: 0 0 30px; }

  .tm-final { background: #fff; border-top: 1px solid rgba(8,120,181,0.1); padding: 56px 0; }
  .tm-final-inner { display: flex; align-items: center; justify-content: space-between; gap: 28px; flex-wrap: wrap; }
  .tm-final-copy h2 {
    font-family: var(--font-display, inherit);
    font-size: clamp(1.3rem, 2.4vw, 1.9rem); font-weight: 900;
    letter-spacing: -.5px; color: #062B4D; margin: 0 0 6px;
  }
  .tm-final-copy p { font-size: .95rem; color: #4A5E78; margin: 0; }
  .tm-final-actions { display: flex; flex-wrap: wrap; gap: 12px; }

  .tm-team-grid .reveal:nth-child(2) { transition-delay: .06s; }
  .tm-team-grid .reveal:nth-child(3) { transition-delay: .12s; }
  .tm-team-grid .reveal:nth-child(4) { transition-delay: .18s; }
  .tm-expert-grid .reveal:nth-child(2) { transition-delay: .06s; }
  .tm-expert-grid .reveal:nth-child(3) { transition-delay: .12s; }
  .tm-expert-grid .reveal:nth-child(4) { transition-delay: .18s; }

  a:focus-visible { outline: 3px solid #FFD21F; outline-offset: 2px; border-radius: 8px; }

  @media (max-width: 1023px) {
    .tm-team-grid { grid-template-columns: repeat(2, 1fr); }
    .tm-expert-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 900px) {
    .tm-hero { padding: 84px 0 90px; }
    .tm-hero-inner { grid-template-columns: 1fr; gap: 56px; }
    .tm-hero-copy { text-align: center; }
    .tm-hero-copy p { margin: 0 auto; }
    .tm-pills, .tm-hero-cta { justify-content: center; }
    .tm-art-frame { width: min(380px, 100%); }
    .tm-art-card-a { left: 6px; }
    .tm-art-card-b { right: 6px; }
    .tm-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .tm-stat:nth-child(2n) { border-right: 0; }
    .tm-stat:nth-child(n+3) { border-top: 1px solid rgba(255,255,255,0.12); padding-top: 26px; margin-top: 12px; }
  }
  @media (max-width: 600px) {
    .tm-team-grid, .tm-expert-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 480px) {
    .tm-stats-grid { grid-template-columns: 1fr; }
    .tm-stat { border-right: 0; border-top: 1px solid rgba(255,255,255,0.12); padding: 22px 0 0; }
    .tm-stat:first-child { border-top: 0; padding-top: 0; }
  }
  @media (prefers-reduced-motion: reduce) {
    .tm-hero, .tm-hero-grid, .tm-hero-bg, .tm-hero-glow, .tm-art-ring,
    .tm-lead-card, .tm-lead-photo img, .tm-member, .tm-photo img, .tm-overlay,
    .tm-socials a, .tm-socials-overlay, .tm-expert-card, .tm-expert-ico,
    .tm-btn-primary, .tm-btn-outline, .tm-btn-wa {
      transition: none !important;
      transform: none !important;
    }
  }
</style>

<section class="tm-hero">
  <div class="tm-hero-bg" aria-hidden="true"></div>
  <div class="tm-hero-grid" aria-hidden="true"></div>
  <div class="tm-hero-glow" aria-hidden="true"></div>
  <div class="container tm-hero-inner">
    <div class="tm-hero-copy">
      <span class="tm-badge"><span class="dot"></span> Our Team</span>
      <h1>Meet the people behind our <span class="tm-gold">digital solutions.</span></h1>
      <p>A team of professionals committed to innovation, digital transformation and delivering reliable technology solutions.</p>
      <div class="tm-pills" aria-label="Our team qualities">
        <span><i class="fas fa-check"></i> Professional</span>
        <span><i class="fas fa-lightbulb"></i> Innovative</span>
        <span><i class="fas fa-star"></i> Experienced</span>
      </div>
      <div class="tm-hero-cta">
        <a href="#leadership" class="tm-btn-primary"><i class="fas fa-user-tie"></i> Meet the Team</a>
        <a href="{{ route('careers') }}" class="tm-btn-outline"><i class="fas fa-rocket"></i> Join Our Team</a>
      </div>
    </div>
    <div class="tm-hero-art">
      <div class="tm-art-frame">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Jezdan Technology engineers collaborating in a server room">
      </div>
      <div class="tm-art-ring" aria-hidden="true"></div>
      <div class="tm-art-card tm-art-card-a">
        <span class="tm-art-ico"><i class="fas fa-shield-halved"></i></span>
        <div><strong>Security First</strong><small>Audits &amp; 24/7 monitoring</small></div>
      </div>
      <div class="tm-art-card tm-art-card-b">
        <span class="tm-art-ico"><i class="fas fa-bolt"></i></span>
        <div><strong>Fast Delivery</strong><small>Days, not months</small></div>
      </div>
    </div>
  </div>
</section>

<section class="tm-lead" id="leadership">
  <div class="container">
    <div class="tm-head">
      <span class="tm-tag"><i class="fas fa-user-tie"></i> Leadership</span>
      <h2 class="tm-title">Our <span class="tm-gold">Leadership</span></h2>
      <p class="tm-sub">The strategists and specialists guiding every project with experience, accountability and a deep understanding of local business needs.</p>
    </div>
    <div class="tm-lead-grid">
      @foreach($leadership as $member)
        <article class="tm-lead-card reveal">
          <div class="tm-lead-photo">
            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}, {{ $member['position'] }}">
            <span class="tm-lead-badge" aria-hidden="true"><i class="fas fa-medal"></i></span>
          </div>
          <div class="tm-lead-body">
            <h3>{{ $member['name'] }}</h3>
            <span class="tm-role">{{ $member['position'] }}</span>
            <p>{{ $member['bio'] }}</p>
            <div class="tm-socials">
              <a href="{{ $member['linkedin'] }}" target="_blank" rel="noopener" aria-label="{{ $member['name'] }} on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="{{ $member['email'] }}" aria-label="Email {{ $member['name'] }}"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="tm-expert" id="expertise">
  <div class="container">
    <div class="tm-head">
      <span class="tm-tag"><i class="fas fa-cogs"></i> Capabilities</span>
      <h2 class="tm-title">Our <span class="tm-gold">Expertise</span></h2>
      <p class="tm-sub">One team, eight specialist areas — so your technology stays consistent, integrated and accountable to a single partner.</p>
    </div>
    <div class="tm-expert-grid">
      @foreach($expertise as $area)
        <div class="tm-expert-card reveal">
          <span class="tm-expert-ico" aria-hidden="true"><i class="{{ $area['icon'] }}"></i></span>
          <h3>{{ $area['title'] }}</h3>
          <p>{{ $area['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="tm-stats" aria-label="Team statistics">
  <div class="container tm-stats-grid">
    @foreach($teamStats as $stat)
      <div class="tm-stat reveal">
        <span class="tm-stat-num">{{ $stat['value'] }}<em>{{ $stat['suffix'] }}</em></span>
        <span class="tm-stat-label">{{ $stat['label'] }}</span>
      </div>
    @endforeach
  </div>
</section>

<section class="tm-join" id="careers">
  <div class="tm-join-bg" aria-hidden="true"></div>
  <div class="container tm-join-inner">
    <h2>Want to be part of <span class="tm-gold">our team?</span></h2>
    <p>We are always looking for talented people who are passionate about technology and innovation.</p>
    <a href="{{ route('careers') }}" class="tm-btn-primary"><i class="fas fa-rocket"></i> View Opportunities</a>
  </div>
</section>

<div class="tm-final">
  <div class="container tm-final-inner">
    <div class="tm-final-copy">
      <h2>Ready to <span class="tm-gold">Transform</span> Your Business?</h2>
      <p>Get a free consultation and a detailed quote within 24 hours.</p>
    </div>
    <div class="tm-final-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20working%20with%20your%20team." class="tm-btn-wa" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
      <a href="{{ route('request.quote') }}" class="tm-btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>

@endsection
