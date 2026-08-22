@extends('layouts.app')

@section('title', 'Contact Us | Jezdan Group – ICT Company in Tanzania')

@section('meta_tags')
  <meta name="description" content="Contact Jezdan Group for web development, mobile apps, network installation, cybersecurity and IT support. Call, WhatsApp, email or visit our office in Moshi, Kilimanjaro, Tanzania.">
  <meta name="keywords" content="contact ICT company Tanzania, IT services Moshi contact, Jezdan Group contact, web development Tanzania contact">
  <meta property="og:title" content="Contact Us | Jezdan Group – ICT Company in Tanzania">
  <meta property="og:description" content="Get in touch with Jezdan Group. We reply within 2 hours – call, WhatsApp, email or visit our office in Moshi, Kilimanjaro.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')

@php
  $contactCards = [
      [
          'icon' => 'fab fa-whatsapp',
          'title' => 'WhatsApp Us',
          'text' => 'Fastest response. Chat with our team and get instant answers.',
          'action' => 'https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%27d%20like%20a%20free%20consultation.',
          'label' => '+255 685 847 002',
          'accent' => '#25D366',
      ],
      [
          'icon' => 'fas fa-phone',
          'title' => 'Call Us',
          'text' => 'Speak directly with our team. Available Mon–Sat, 8am–7pm.',
          'action' => 'tel:+255685847002',
          'label' => '+255 685 847 002',
          'accent' => 'linear-gradient(135deg,#0C4580,#093967)',
      ],
      [
          'icon' => 'fas fa-envelope',
          'title' => 'Email Us',
          'text' => 'Send detailed inquiries. We respond within 2 business hours.',
          'action' => 'mailto:info@jezdantech.com',
          'label' => 'info@jezdantech.com',
          'accent' => 'linear-gradient(135deg,#3D8FD4,#0C4580)',
      ],
      [
          'icon' => 'fas fa-map-location-dot',
          'title' => 'Visit Us',
          'text' => 'Meet us face to face. Free parking and coffee for clients.',
          'action' => 'https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania',
          'label' => 'Moshi, Kilimanjaro',
          'accent' => 'linear-gradient(135deg,#1FA97A,#0C7A5C)',
      ],
  ];

  $directLines = [
      [
          'icon' => 'fas fa-file-signature',
          'title' => 'Sales & New Projects',
          'desc' => 'Quotes, pricing, proposals and kicking off a new project.',
          'phone' => '+255 685 847 002',
          'wa' => 'https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%27m%20interested%20in%20a%20new%20project.',
          'badge' => 'Replies in 2 hrs',
      ],
      [
          'icon' => 'fas fa-headset',
          'title' => 'Technical Support',
          'desc' => 'Help with existing websites, apps, networks and IT systems.',
          'phone' => '+255 622 239 304',
          'wa' => 'https://wa.me/255622239304?text=Hello%20Jezdan%20Group!%20I%20need%20technical%20support.',
          'badge' => 'Priority support',
      ],
      [
          'icon' => 'fas fa-calculator',
          'title' => 'Accounting & Financial Services',
          'desc' => 'Invoicing, billing, financial reporting and account inquiries.',
          'phone' => '+255 615 301 112',
          'wa' => 'https://wa.me/255615301112?text=Hello%20Jezdan%20Group!%20I%20have%20an%20accounting%20inquiry.',
          'badge' => 'Business hours',
      ],
      [
          'icon' => 'fas fa-handshake',
          'title' => 'Partnerships & Tenders',
          'desc' => 'Business development, partnerships, tenders and enterprise deals.',
          'phone' => '+255 685 847 002',
          'wa' => 'https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%27d%20like%20to%20discuss%20a%20partnership.',
          'badge' => 'By appointment',
      ],
  ];

  $faqs = [
      [
          'q' => 'How fast do you reply to inquiries?',
          'a' => 'We respond to all inquiries within 2 business hours during working days. WhatsApp messages usually get an even faster reply – often within minutes.',
      ],
      [
          'q' => 'Do you offer free consultations?',
          'a' => 'Yes. We provide a free, no-obligation consultation for every new project. We will discuss your needs and give you a clear proposal and detailed quote within 24 hours.',
      ],
      [
          'q' => 'Do you work with clients outside Moshi / Tanzania?',
          'a' => 'Absolutely. We serve clients across Tanzania and internationally. We can meet over WhatsApp, Zoom or Google Meet and manage projects fully remotely.',
      ],
      [
          'q' => 'How do I get a quote for a project?',
          'a' => 'Fill in the contact form on this page or use the WhatsApp buttons to reach the Sales team. Share your requirements and we will prepare a detailed, fixed-price quote for you.',
      ],
      [
          'q' => 'What payment methods do you accept?',
          'a' => 'We accept M-Pesa, Tigo Pesa, Airtel Money, bank transfer and card payments, making it easy for businesses and individuals to work with us.',
      ],
      [
          'q' => 'Do you provide support after project delivery?',
          'a' => 'Yes. Every project includes a free support period, and we offer affordable ongoing IT support retainer plans for websites, apps, networks and systems.',
      ],
  ];

  $teamStats = [
      ['value' => '10', 'suffix' => '+', 'label' => 'Years Combined Experience'],
      ['value' => '50', 'suffix' => '+', 'label' => 'Projects Delivered'],
      ['value' => '2', 'suffix' => 'hrs', 'label' => 'Average Response Time'],
      ['value' => '24', 'suffix' => '/7', 'label' => 'Monitoring & Support'],
  ];
@endphp

<style>
  .cx-hero {
    position: relative;
    padding: 110px 0 120px;
    background: linear-gradient(180deg, #062B4D 0%, #0A3A66 55%, #0C4580 100%);
    overflow: hidden;
  }
  .cx-hero-grid {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(111,177,232,0.07) 1px, transparent 1px), linear-gradient(90deg, rgba(111,177,232,0.07) 1px, transparent 1px);
    background-size: 48px 48px;
    mask-image: radial-gradient(ellipse at 62% 40%, #000 20%, transparent 76%);
    -webkit-mask-image: radial-gradient(ellipse at 62% 40%, #000 20%, transparent 76%);
  }
  .cx-hero-glow {
    position: absolute; width: 620px; height: 620px; border-radius: 50%;
    background: radial-gradient(circle, rgba(61,143,212,0.32), transparent 70%);
    top: -180px; right: -140px; pointer-events: none; filter: blur(8px);
  }
  .cx-hero-inner { position: relative; z-index: 2; display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .cx-badge {
    display: inline-flex; align-items: center; gap: 9px;
    background: rgba(111,177,232,0.14); border: 1px solid rgba(111,177,232,0.32);
    color: #6FB1E8; font-weight: 800; font-size: .78rem; letter-spacing: 1.4px;
    text-transform: uppercase; padding: 8px 16px; border-radius: 50px;
  }
  .cx-badge .dot { width: 8px; height: 8px; border-radius: 50%; background: #1FA97A; box-shadow: 0 0 0 4px rgba(31,169,122,0.25); animation: cxPulse 2s infinite; }
  @keyframes cxPulse { 0% { box-shadow: 0 0 0 0 rgba(31,169,122,0.55); } 70% { box-shadow: 0 0 0 10px rgba(31,169,122,0); } 100% { box-shadow: 0 0 0 0 rgba(31,169,122,0); } }
  .cx-hero h1 {
    font-family: var(--font-display);
    font-size: clamp(2.3rem, 4.4vw, 3.5rem); font-weight: 900; line-height: 1.08;
    letter-spacing: -1px; color: #fff; margin: 24px 0 18px;
  }
  .cx-hero h1 span { background: linear-gradient(120deg, #9CC9EE, #E0EBF5); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
  .cx-hero p { font-size: 1.06rem; color: rgba(255,255,255,0.74); line-height: 1.75; margin: 0 0 26px; max-width: 560px; }
  .cx-hero-actions { display: flex; flex-wrap: wrap; gap: 14px; }
  .cx-hero-stats { display: flex; gap: 30px; margin-top: 44px; flex-wrap: wrap; }
  .cx-hero-stat { border-left: 2px solid rgba(111,177,232,0.4); padding-left: 16px; }
  .cx-hero-stat b { display: block; font-family: var(--font-display); font-size: 1.5rem; font-weight: 900; color: #6FB1E8; line-height: 1.1; }
  .cx-hero-stat span { font-size: .76rem; color: rgba(255,255,255,0.55); text-transform: uppercase; letter-spacing: .6px; font-weight: 700; }

  .cx-hero-art { position: relative; display: flex; justify-content: center; }
  .cx-art-frame { position: relative; width: min(430px, 100%); aspect-ratio: 4 / 4.5; border-radius: 26px; overflow: hidden; border: 6px solid rgba(255,255,255,0.12); box-shadow: 0 34px 70px -20px rgba(0,0,0,0.5); }
  .cx-art-frame img { width: 100%; height: 100%; object-fit: cover; }
  .cx-art-ring { position: absolute; inset: -16px; pointer-events: none; border: 2px dashed rgba(111,177,232,0.3); border-radius: 34px; }
  .cx-art-card {
    position: absolute; display: flex; align-items: center; gap: 11px;
    background: rgba(255,255,255,0.96); backdrop-filter: blur(10px);
    border-radius: 14px; padding: 12px 16px; border: 1px solid rgba(255,255,255,0.6);
    box-shadow: 0 18px 40px rgba(0,0,0,0.3); animation: cxFloat 4s ease-in-out infinite;
  }
  @keyframes cxFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-9px); } }
  .cx-art-card-a { bottom: 24px; left: -34px; }
  .cx-art-card-b { top: 40px; right: -30px; animation-delay: 1.2s; }
  .cx-art-ico { width: 40px; height: 40px; border-radius: 11px; flex: none; background: linear-gradient(135deg,#0C4580,#093967); color: #6FB1E8; display: flex; align-items: center; justify-content: center; font-size: 1rem; }
  .cx-art-card strong { font-size: .84rem; color: #062B4D; display: block; font-weight: 800; }
  .cx-art-card small { font-size: .72rem; color: #4A5E78; font-weight: 600; }

  .cx-flash { max-width: 1240px; margin: 34px auto 0; padding: 0 4%; }
  .cx-alert { display: flex; align-items: center; gap: 14px; padding: 16px 22px; border-radius: 14px; font-weight: 700; font-size: .94rem; box-shadow: var(--shadow); }
  .cx-alert.success { background: #E9F9F1; border: 1px solid #1FA97A; color: #0C7A5C; }
  .cx-alert.error { background: #FDF0F0; border: 1px solid #D64545; color: #A83232; }
  .cx-alert i { font-size: 1.2rem; }

  .cx-cards { padding: 64px 0 8px; background: #fff; }
  .cx-cards-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; margin-top: 6px; }
  .cx-card {
    display: flex; flex-direction: column; gap: 4px;
    background: #fff; border: 1px solid var(--line); border-radius: 20px;
    padding: 26px 24px; text-decoration: none;
    box-shadow: var(--shadow-sm); transition: all .3s ease; position: relative; overflow: hidden;
  }
  .cx-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: var(--grad-primary); transform: scaleX(0); transform-origin: left; transition: transform .35s ease; }
  .cx-card:hover { transform: translateY(-7px); box-shadow: var(--shadow-hover); border-color: rgba(12,69,128,0.2); }
  .cx-card:hover::before { transform: scaleX(1); }
  .cx-card-ico { width: 54px; height: 54px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #fff; background: var(--accent, #0C4580); margin-bottom: 16px; box-shadow: var(--shadow-primary); }
  .cx-card h3 { font-family: var(--font-display); font-size: 1.06rem; font-weight: 800; color: var(--dark); letter-spacing: -.3px; }
  .cx-card p { font-size: .84rem; color: var(--ink-muted); line-height: 1.6; margin: 6px 0 12px; }
  .cx-card-val { display: inline-flex; align-items: center; gap: 7px; font-size: .82rem; font-weight: 800; color: var(--primary); }

  .cx-main { background: var(--off-white); padding: 96px 0; }
  .cx-grid { display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 48px; align-items: start; }

  .cx-info-card { background: #fff; border: 1px solid var(--line); border-radius: 24px; padding: 34px; box-shadow: var(--shadow); }
  .cx-info-card h2 { font-family: var(--font-display); font-size: 1.7rem; font-weight: 900; color: var(--dark); letter-spacing: -.5px; margin-bottom: 8px; }
  .cx-info-card > p { color: var(--ink-muted); font-size: .95rem; line-height: 1.7; margin-bottom: 28px; }
  .cx-details { display: flex; flex-direction: column; gap: 14px; }
  .cx-detail { display: flex; align-items: flex-start; gap: 15px; background: var(--off-white); border: 1px solid var(--line); border-radius: 16px; padding: 18px 20px; transition: all .25s ease; }
  .cx-detail:hover { transform: translateX(5px); border-color: var(--primary-ring); background: #fff; }
  .cx-detail-ico { width: 46px; height: 46px; border-radius: 12px; flex: none; background: var(--grad-primary); color: var(--sky-bright); display: flex; align-items: center; justify-content: center; font-size: 1.05rem; box-shadow: var(--shadow-primary); }
  .cx-detail-label { font-size: .72rem; color: var(--ink-faint); text-transform: uppercase; letter-spacing: .7px; font-weight: 800; }
  .cx-detail-val { font-weight: 800; color: var(--dark); font-size: .95rem; line-height: 1.5; }
  .cx-detail-val a { color: var(--dark); text-decoration: none; }
  .cx-detail-val a:hover { color: var(--primary); }
  .cx-detail-sub { font-size: .82rem; color: var(--success); font-weight: 700; margin-top: 3px; }
  .cx-socials { display: flex; gap: 10px; margin-top: 28px; }
  .cx-socials .social-link { width: 44px; height: 44px; border-radius: 12px; }

  .cx-form-card { background: #fff; border: 1px solid var(--line); border-radius: 24px; padding: 38px; box-shadow: var(--shadow); }
  .cx-form-head { display: flex; align-items: center; justify-content: space-between; gap: 14px; margin-bottom: 26px; flex-wrap: wrap; }
  .cx-form-head h2 { font-family: var(--font-display); font-size: 1.6rem; font-weight: 900; color: var(--dark); letter-spacing: -.4px; }
  .cx-form-head .cx-reply { display: inline-flex; align-items: center; gap: 8px; background: #E9F9F1; color: #0C7A5C; border: 1px solid rgba(31,169,122,0.3); font-size: .8rem; font-weight: 800; padding: 8px 14px; border-radius: 50px; }
  .cx-form-head .cx-reply i { animation: cxPulse 2s infinite; font-size: .5rem; color: #1FA97A; }
  .cx-form label { display: block; font-size: .8rem; font-weight: 800; color: var(--ink-muted); margin-bottom: 6px; }
  .cx-form label .req { color: #D64545; }
  .cx-form .form-control { background: var(--off-white); }
  .cx-form textarea.form-control { min-height: 120px; }
  .cx-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .cx-check { display: flex; align-items: flex-start; gap: 10px; font-size: .82rem; color: var(--ink-muted); font-weight: 600; line-height: 1.55; margin: 4px 0 20px; }
  .cx-check input { width: 18px; height: 18px; margin-top: 2px; accent-color: var(--primary); flex: none; }
  .cx-check a { color: var(--primary); font-weight: 700; }
  .cx-form .btn-submit { display: flex; align-items: center; justify-content: center; gap: 10px; }
  .cx-form .btn-submit .spin { display: none; }
  .cx-form .btn-submit.loading .spin { display: inline-block; }
  .cx-form .btn-submit.loading .lbl { display: none; }
  .cx-field-error { color: #D64545; font-size: .76rem; font-weight: 700; margin-top: 5px; display: block; }
  .cx-secure-note { display: flex; align-items: center; gap: 8px; justify-content: center; margin-top: 16px; font-size: .78rem; color: var(--ink-faint); font-weight: 600; }

  .cx-direct { background: var(--grad-dark); position: relative; overflow: hidden; padding: 96px 0; }
  .cx-direct::before { content: ''; position: absolute; inset: 0; background-image: linear-gradient(rgba(111,177,232,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(111,177,232,0.05) 1px, transparent 1px); background-size: 46px 46px; }
  .cx-direct > * { position: relative; z-index: 1; }
  .cx-direct .section-label { background: rgba(111,177,232,0.14); border-color: rgba(111,177,232,0.3); color: #6FB1E8; }
  .cx-direct .section-title { color: #fff; }
  .cx-direct .section-sub { color: rgba(255,255,255,0.6); }
  .cx-direct-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 48px; }
  .cx-direct-card { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); border-radius: 20px; padding: 30px; backdrop-filter: blur(8px); transition: all .3s ease; }
  .cx-direct-card:hover { background: rgba(255,255,255,0.1); transform: translateY(-6px); border-color: rgba(111,177,232,0.4); }
  .cx-direct-ico { width: 52px; height: 52px; border-radius: 14px; background: var(--grad-primary); color: #6FB1E8; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; margin-bottom: 18px; box-shadow: 0 12px 30px rgba(12,69,128,0.4); }
  .cx-direct-card h3 { font-family: var(--font-display); font-size: 1.1rem; font-weight: 800; color: #fff; margin-bottom: 6px; }
  .cx-direct-card p { font-size: .86rem; color: rgba(255,255,255,0.62); line-height: 1.65; margin-bottom: 18px; }
  .cx-direct-badge { display: inline-block; font-size: .7rem; font-weight: 800; letter-spacing: .6px; text-transform: uppercase; color: #6FB1E8; background: rgba(111,177,232,0.14); border: 1px solid rgba(111,177,232,0.28); padding: 5px 12px; border-radius: 50px; margin-bottom: 16px; }
  .cx-direct-actions { display: flex; gap: 10px; flex-wrap: wrap; }
  .cx-direct-actions a { display: inline-flex; align-items: center; gap: 8px; padding: 10px 18px; border-radius: 50px; font-size: .82rem; font-weight: 800; text-decoration: none; transition: all .22s ease; }
  .cx-call { background: #fff; color: var(--primary); }
  .cx-call:hover { transform: translateY(-2px); box-shadow: 0 12px 26px rgba(0,0,0,0.3); }
  .cx-wa { background: #25D366; color: #fff; }
  .cx-wa:hover { background: #1ebe57; transform: translateY(-2px); box-shadow: 0 12px 26px rgba(37,211,102,0.4); }

  .cx-faq { background: #fff; padding: 96px 0; }
  .cx-faq-grid { display: grid; grid-template-columns: 0.85fr 1.15fr; gap: 56px; align-items: start; }
  .cx-faq-side { position: sticky; top: 100px; }
  .cx-faq-side h2 { font-family: var(--font-display); font-size: 2rem; font-weight: 900; color: var(--dark); letter-spacing: -.6px; margin: 14px 0 14px; }
  .cx-faq-side p { color: var(--ink-muted); line-height: 1.7; margin-bottom: 24px; }
  .cx-faq-side .btn-primary { display: inline-flex; }
  .cx-accordion { display: flex; flex-direction: column; gap: 14px; }
  .cx-faq-item { background: var(--off-white); border: 1px solid var(--line); border-radius: 16px; overflow: hidden; transition: all .3s ease; }
  .cx-faq-item.open { background: #fff; border-color: var(--primary-ring); box-shadow: var(--shadow-sm); }
  .cx-faq-q { width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 14px; background: none; border: none; cursor: pointer; padding: 20px 22px; text-align: left; font-family: var(--font-body); font-size: .98rem; font-weight: 800; color: var(--dark); }
  .cx-faq-q .cx-faq-arrow { width: 32px; height: 32px; flex: none; border-radius: 10px; background: #fff; border: 1px solid var(--line); display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: .8rem; transition: all .3s ease; }
  .cx-faq-item.open .cx-faq-arrow { background: var(--grad-primary); color: #fff; transform: rotate(180deg); border-color: var(--primary); }
  .cx-faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
  .cx-faq-a p { padding: 0 22px 22px; font-size: .9rem; color: var(--ink-muted); line-height: 1.7; }

  .cx-stats { background: var(--grad-dark); position: relative; overflow: hidden; padding: 84px 0; }
  .cx-stats::before { content: ''; position: absolute; inset: 0; background-image: radial-gradient(circle at 50% 120%, rgba(61,143,212,0.4), transparent 60%); }
  .cx-stats-grid { position: relative; z-index: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
  .cx-stat { border-right: 1px solid rgba(255,255,255,0.12); padding: 0 18px; }
  .cx-stat:last-child { border-right: 0; }
  .cx-stat-num { font-family: var(--font-display); font-size: clamp(1.9rem, 3.6vw, 2.7rem); font-weight: 900; line-height: 1; letter-spacing: -1px; color: #fff; display: block; }
  .cx-stat-num em { font-style: normal; color: #6FB1E8; }
  .cx-stat-label { display: block; margin-top: 10px; font-size: .78rem; font-weight: 700; letter-spacing: .7px; text-transform: uppercase; color: rgba(255,255,255,0.65); }

  .cx-map { background: var(--off-white); padding: 96px 0; }
  .cx-map-grid { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 48px; align-items: center; }
  .cx-map-frame { border-radius: 24px; overflow: hidden; border: 6px solid #fff; box-shadow: var(--shadow-hover); }
  .cx-map-frame iframe { display: block; width: 100%; height: 420px; border: 0; }
  .cx-map-side h2 { font-family: var(--font-display); font-size: 2rem; font-weight: 900; color: var(--dark); letter-spacing: -.6px; margin: 14px 0 14px; }
  .cx-map-side p { color: var(--ink-muted); line-height: 1.7; margin-bottom: 22px; }
  .cx-map-points { display: flex; flex-direction: column; gap: 14px; margin-bottom: 26px; }
  .cx-map-point { display: flex; gap: 13px; align-items: flex-start; }
  .cx-map-point i { width: 38px; height: 38px; flex: none; border-radius: 10px; background: var(--grad-primary); color: var(--sky-bright); display: flex; align-items: center; justify-content: center; font-size: .9rem; }
  .cx-map-point b { display: block; font-size: .88rem; color: var(--dark); font-weight: 800; }
  .cx-map-point span { font-size: .82rem; color: var(--ink-muted); font-weight: 600; }

  .reveal { opacity: 0; transform: translateY(28px); transition: opacity .7s ease, transform .7s ease; }
  .reveal.in-view { opacity: 1; transform: translateY(0); }

  @media (max-width: 1100px) {
    .cx-hero-inner { grid-template-columns: 1fr; gap: 52px; }
    .cx-hero-copy { text-align: center; }
    .cx-hero p { margin: 0 auto 26px; }
    .cx-hero-actions, .cx-hero-stats { justify-content: center; }
    .cx-cards-grid { grid-template-columns: repeat(2, 1fr); }
    .cx-grid { grid-template-columns: 1fr; }
    .cx-direct-grid { grid-template-columns: repeat(2, 1fr); }
    .cx-faq-grid { grid-template-columns: 1fr; }
    .cx-faq-side { position: static; }
    .cx-map-grid { grid-template-columns: 1fr; }
    .cx-art-card-a { left: 6px; }
    .cx-art-card-b { right: 6px; }
  }
  @media (max-width: 600px) {
    .cx-cards-grid, .cx-stats-grid { grid-template-columns: 1fr; }
    .cx-stat { border-right: 0; border-top: 1px solid rgba(255,255,255,0.12); padding: 20px 0 0; }
    .cx-stat:first-child { border-top: 0; padding-top: 0; }
    .cx-form-row { grid-template-columns: 1fr; }
    .cx-form-card, .cx-info-card { padding: 26px 22px; }
  }
  @media (prefers-reduced-motion: reduce) {
    .cx-card, .cx-art-card, .cx-direct-card, .cx-detail, .cx-faq-item, .reveal { transition: none !important; transform: none !important; animation: none !important; }
  }
</style>

<!-- HERO -->
<section class="cx-hero" id="home">
  <div class="cx-hero-grid" aria-hidden="true"></div>
  <div class="cx-hero-glow" aria-hidden="true"></div>
  <div class="container cx-hero-inner">
    <div class="cx-hero-copy">
      <span class="cx-badge"><span class="dot"></span> We Reply Within 2 Hours</span>
      <h1>Let's build something <span>great together.</span></h1>
      <p>Whether you're starting from scratch or upgrading existing systems, our team in Moshi, Kilimanjaro is ready to help. Reach out today for a free, no-obligation consultation.</p>
      <div class="cx-hero-actions">
        <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%27d%20like%20a%20free%20consultation." class="btn-whatsapp" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i> WhatsApp Us Now
        </a>
        <a href="tel:+255685847002" class="btn-outline"><i class="fas fa-phone"></i> Call +255 685 847 002</a>
      </div>
      <div class="cx-hero-stats">
        <div class="cx-hero-stat"><b>10+</b><span>Years Experience</span></div>
        <div class="cx-hero-stat"><b>50+</b><span>Projects Delivered</span></div>
        <div class="cx-hero-stat"><b>2hrs</b><span>Avg. Response</span></div>
      </div>
    </div>
    <div class="cx-hero-art">
      <div class="cx-art-frame">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Jezdan Group team helping a client">
      </div>
      <div class="cx-art-ring" aria-hidden="true"></div>
      <div class="cx-art-card cx-art-card-a">
        <span class="cx-art-ico"><i class="fas fa-shield-halved"></i></span>
        <div><strong>Secure & Reliable</strong><small>TCRA-compliant solutions</small></div>
      </div>
      <div class="cx-art-card cx-art-card-b">
        <span class="cx-art-ico"><i class="fas fa-bolt"></i></span>
        <div><strong>Fast Delivery</strong><small>Quotes within 24 hours</small></div>
      </div>
    </div>
  </div>
</section>

@if(session('success'))
  <div class="cx-flash">
    <div class="cx-alert success">
      <i class="fas fa-circle-check"></i>
      <span>{{ session('success') }}</span>
    </div>
  </div>
@endif
@if(session('error'))
  <div class="cx-flash">
    <div class="cx-alert error">
      <i class="fas fa-circle-exclamation"></i>
      <span>{{ session('error') }}</span>
    </div>
  </div>
@endif

<!-- QUICK CONTACT CARDS -->
<section class="cx-cards">
  <div class="container">
    <div class="cx-cards-grid">
      @foreach($contactCards as $card)
        <a href="{{ $card['action'] }}" class="cx-card reveal" target="{{ str_starts_with($card['action'], 'http') ? '_blank' : '_self' }}" rel="noopener">
          <span class="cx-card-ico" style="background:{{ $card['accent'] }};"><i class="{{ $card['icon'] }}"></i></span>
          <h3>{{ $card['title'] }}</h3>
          <p>{{ $card['text'] }}</p>
          <span class="cx-card-val"><i class="fas fa-arrow-right"></i> {{ $card['label'] }}</span>
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- CONTACT MAIN -->
<section class="cx-main" id="contact">
  <div class="container">
    <div class="cx-grid">
      <div class="cx-info-card reveal">
        <div class="section-label"><i class="fas fa-envelope-open-text"></i> Contact Information</div>
        <h2>Get in <span style="color:var(--primary);">Touch</span></h2>
        <p>We're here to help with all your ICT needs. Reach out through any of these channels and we'll respond within 2 hours.</p>

        <div class="cx-details">
          <div class="cx-detail">
            <span class="cx-detail-ico"><i class="fas fa-map-location-dot"></i></span>
            <div>
              <div class="cx-detail-label">Location</div>
              <div class="cx-detail-val">Moshi, Kilimanjaro, Tanzania</div>
              <a href="https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania" target="_blank" rel="noopener" style="color:var(--primary);font-size:.82rem;font-weight:700;"><i class="fas fa-external-link-alt"></i> View on Map</a>
            </div>
          </div>

          <div class="cx-detail">
            <span class="cx-detail-ico"><i class="fas fa-phone"></i></span>
            <div>
              <div class="cx-detail-label">Phone Numbers</div>
              <div class="cx-detail-val">
                <a href="tel:+255685847002">+255 685 847 002</a>
                <span style="color:var(--ink-faint);font-weight:600;"> · </span>
                <a href="tel:+255622239304">+255 622 239 304</a>
              </div>
              <div class="cx-detail-sub"><i class="fas fa-circle" style="font-size:6px;margin-right:5px;"></i> Available Now – Mon–Sat 8am–7pm</div>
            </div>
          </div>

          <div class="cx-detail">
            <span class="cx-detail-ico"><i class="fas fa-envelope"></i></span>
            <div>
              <div class="cx-detail-label">Email</div>
              <div class="cx-detail-val"><a href="mailto:info@jezdantech.com">info@jezdantech.com</a></div>
              <div class="cx-detail-sub">For quotes, support & partnerships</div>
            </div>
          </div>

          <div class="cx-detail">
            <span class="cx-detail-ico"><i class="fas fa-clock"></i></span>
            <div>
              <div class="cx-detail-label">Working Hours</div>
              <div class="cx-detail-val">Mon–Sat: 8am – 7pm</div>
              <div class="cx-detail-val" style="font-size:.85rem;">Sun: 9am – 2pm</div>
            </div>
          </div>
        </div>

        <div class="cx-socials">
          <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-link" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>

      <div class="cx-form-card reveal">
        <div class="cx-form-head">
          <h2>Send Us a Message</h2>
          <span class="cx-reply"><i class="fas fa-circle"></i> We Reply Within 2 Hours</span>
        </div>

        @if($errors->any())
          <div class="cx-alert error" style="margin-bottom:22px;">
            <i class="fas fa-circle-exclamation"></i>
            <span>Please fix the highlighted fields and try again.</span>
          </div>
        @endif

        <form class="cx-form" action="{{ route('contact.submit') }}" method="POST" novalidate>
          @csrf
          <div class="cx-form-row">
            <div class="form-group">
              <label for="first_name">First Name <span class="req">*</span></label>
              <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="Your first name" value="{{ old('first_name') }}" required>
              @error('first_name') <span class="cx-field-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="last_name">Last Name <span class="req">*</span></label>
              <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Your last name" value="{{ old('last_name') }}" required>
              @error('last_name') <span class="cx-field-error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="cx-form-row">
            <div class="form-group">
              <label for="email">Email Address <span class="req">*</span></label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="you@email.com" value="{{ old('email') }}" required>
              @error('email') <span class="cx-field-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone / WhatsApp</label>
              <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="+255 7XX XXX XXX" value="{{ old('phone') }}">
              @error('phone') <span class="cx-field-error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="cx-form-row">
            <div class="form-group">
              <label for="company">Company / Organization</label>
              <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="Company name (optional)" value="{{ old('company') }}">
              @error('company') <span class="cx-field-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="service">Service Interested In <span class="req">*</span></label>
              <select class="form-control @error('service') is-invalid @enderror" id="service" name="service" required>
                <option value="">-- Select a Service --</option>
                @php
                  $services = ['web' => 'Web Development', 'mobile' => 'Mobile App Development', 'network' => 'Network Installation', 'cybersecurity' => 'Cybersecurity', 'it-support' => 'IT Support', 'consultancy' => 'ICT Consultancy', 'system' => 'System Development', 'cloud' => 'Cloud Services', 'multiple' => 'Multiple Services'];
                @endphp
                @foreach($services as $key => $label)
                  <option value="{{ $key }}" {{ old('service') === $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
              </select>
              @error('service') <span class="cx-field-error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="budget">Budget Range (TZS)</label>
            <select class="form-control" id="budget" name="budget">
              <option value="">-- Select Budget Range --</option>
              @php
                $budgets = ['under-500k' => 'Under 500,000', '500k-1.5m' => '500,000 – 1,500,000', '1.5m-5m' => '1,500,000 – 5,000,000', '5m-15m' => '5,000,000 – 15,000,000', '15m+' => '15,000,000+', 'not-sure' => 'Not sure yet'];
              @endphp
              @foreach($budgets as $key => $label)
                <option value="{{ $key }}" {{ old('budget') === $key ? 'selected' : '' }}>{{ $label }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="message">Tell Us About Your Project <span class="req">*</span></label>
            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" placeholder="Describe your project, goals, timeline and any specific requirements..." required>{{ old('message') }}</textarea>
            @error('message') <span class="cx-field-error">{{ $message }}</span> @enderror
          </div>

          <label class="cx-check">
            <input type="checkbox" name="privacy" value="1" {{ old('privacy') ? 'checked' : '' }} required>
            <span>I agree to the <a href="#" target="_blank">Privacy Policy</a> and consent to Jezdan Group contacting me about my inquiry. <span class="req">*</span></span>
          </label>
          @error('privacy') <span class="cx-field-error" style="margin:-14px 0 18px;">{{ $message }}</span> @enderror

          <button type="submit" class="btn-submit" id="submitBtn">
            <span class="spin"><i class="fas fa-spinner fa-spin"></i></span>
            <span class="lbl"><i class="fas fa-paper-plane"></i> Send Message – We Reply Within 2 Hours</span>
          </button>
          <div class="cx-secure-note"><i class="fas fa-lock"></i> Your information is encrypted and never shared.</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- DIRECT LINES & LEADERSHIP -->
<section class="cx-direct" id="departments">
  <div class="container">
    <div class="section-header" style="text-align:center;margin-bottom:0;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-route"></i> Direct Lines</div>
      <h2 class="section-title">Go Straight to the <span style="color:#6FB1E8;">Right Team</span></h2>
      <p class="section-sub" style="margin:0 auto;">Skip the queue – contact the department that handles your specific need.</p>
    </div>
    <div class="cx-direct-grid">
      @foreach($directLines as $line)
        <div class="cx-direct-card reveal">
          <span class="cx-direct-ico"><i class="{{ $line['icon'] }}"></i></span>
          <h3>{{ $line['title'] }}</h3>
          <p>{{ $line['desc'] }}</p>
          <span class="cx-direct-badge">{{ $line['badge'] }}</span>
          <div class="cx-direct-actions">
            <a href="tel:{{ $line['phone'] }}" class="cx-call"><i class="fas fa-phone"></i> {{ $line['phone'] }}</a>
            <a href="{{ $line['wa'] }}" class="cx-wa" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="cx-faq" id="faq">
  <div class="container">
    <div class="cx-faq-grid">
      <div class="cx-faq-side reveal">
        <div class="section-label"><i class="fas fa-circle-question"></i> FAQs</div>
        <h2>Frequently Asked <span style="color:var(--primary);">Questions</span></h2>
        <p>Can't find the answer you're looking for? Our team is one message away – we're happy to help with any question.</p>
        <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%20have%20a%20question." class="btn-primary" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Ask Us Anything</a>
      </div>
      <div class="cx-accordion">
        @foreach($faqs as $faq)
          <div class="cx-faq-item reveal">
            <button class="cx-faq-q" type="button" aria-expanded="false">
              <span>{{ $faq['q'] }}</span>
              <span class="cx-faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="cx-faq-a"><p>{{ $faq['a'] }}</p></div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="cx-stats" aria-label="Team statistics">
  <div class="container cx-stats-grid">
    @foreach($teamStats as $stat)
      <div class="cx-stat reveal">
        <span class="cx-stat-num">{{ $stat['value'] }}<em>{{ $stat['suffix'] }}</em></span>
        <span class="cx-stat-label">{{ $stat['label'] }}</span>
      </div>
    @endforeach
  </div>
</section>

<!-- MAP -->
<section class="cx-map" id="map">
  <div class="container">
    <div class="cx-map-grid">
      <div class="cx-map-frame reveal">
        <iframe title="Jezdan Group location – Moshi, Kilimanjaro" src="https://www.google.com/maps?q=Moshi%2C%20Kilimanjaro%2C%20Tanzania&z=12&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
      </div>
      <div class="cx-map-side reveal">
        <div class="section-label"><i class="fas fa-map-location-dot"></i> Visit Our Office</div>
        <h2>Find Us in <span style="color:var(--primary);">Moshi, Kilimanjaro</span></h2>
        <p>Serving clients across Tanzania and beyond. Come by for a coffee and let's talk about your project.</p>
        <div class="cx-map-points">
          <div class="cx-map-point">
            <i class="fas fa-car"></i>
            <div><b>Getting Here</b><span>Centrally located in Moshi town with free client parking.</span></div>
          </div>
          <div class="cx-map-point">
            <i class="fas fa-phone"></i>
            <div><b>Call Ahead</b><span>Book a visit on +255 685 847 002 so we're ready for you.</span></div>
          </div>
          <div class="cx-map-point">
            <i class="fas fa-video"></i>
            <div><b>Prefer Online?</b><span>We also meet over WhatsApp, Zoom or Google Meet.</span></div>
          </div>
        </div>
        <a href="https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania" class="btn-primary" target="_blank" rel="noopener"><i class="fas fa-directions"></i> Get Directions</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Start Your <span>Project</span>?</h2>
    <p>Contact us today for a free consultation. No commitment required – just honest advice and a clear quote.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%27m%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="tel:+255685847002" class="btn-primary"><i class="fas fa-phone"></i> Call Us Now</a>
    </div>
  </div>
</div>
@endsection

@section('additional_styles')
<style>
  .is-invalid { border-color: #D64545 !important; }
  .is-invalid:focus { box-shadow: 0 0 0 4px rgba(214,69,69,0.12) !important; }
  .cx-faq-a p { margin: 0; }
  .btn-primary { color: #fff; }
</style>
@endsection

@section('additional_scripts')
<script>
  // FAQ accordion
  document.querySelectorAll('.cx-faq-q').forEach(btn => {
    btn.addEventListener('click', function () {
      const item = this.closest('.cx-faq-item');
      const answer = item.querySelector('.cx-faq-a');
      const isOpen = item.classList.contains('open');

      document.querySelectorAll('.cx-faq-item.open').forEach(other => {
        other.classList.remove('open');
        other.querySelector('.cx-faq-a').style.maxHeight = null;
        other.querySelector('.cx-faq-q').setAttribute('aria-expanded', 'false');
      });

      if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Reveal on scroll for page-specific elements
  const cxReveals = document.querySelectorAll('.cx-faq-side.reveal, .cx-map-side.reveal');
  const cxRevealEls = document.querySelectorAll('.cx-cards-grid .reveal, .cx-direct-grid .reveal, .cx-faq-item.reveal, .cx-stats .reveal, .cx-info-card.reveal, .cx-form-card.reveal, .cx-map-frame.reveal');

  const cxObserve = (els) => {
    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });
      els.forEach(el => observer.observe(el));
    } else {
      els.forEach(el => el.classList.add('in-view'));
    }
  };
  cxObserve(Array.from(cxRevealEls).concat(Array.from(cxReveals)));

  // Submit button loading state (native form post)
  const form = document.querySelector('.cx-form');
  const submitBtn = document.getElementById('submitBtn');
  if (form && submitBtn) {
    form.addEventListener('submit', function () {
      submitBtn.classList.add('loading');
      submitBtn.disabled = true;
    });
  }
</script>
@endsection