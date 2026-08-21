@extends('layouts.app')

@section('title', 'Request a Quote | Jezdan Group – ICT Company in Tanzania')

@section('meta_tags')
  <meta name="description" content="Request a custom quote for web development, mobile apps, networking, cybersecurity and IT services in Tanzania. No online payment — our team responds within 24 hours.">
  <meta name="keywords" content="request quote ICT Tanzania, custom IT quote Moshi, Jezdan Group quote, web development price Tanzania">
  <meta property="og:title" content="Request a Quote | Jezdan Group – ICT Company in Tanzania">
  <meta property="og:description" content="Tell us about your project and receive a tailored official quote from Jezdan Group within 24 hours.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')

@php
  $trustItems = [
      ['icon' => 'fas fa-clock', 'text' => 'Response within 24 hours'],
      ['icon' => 'fas fa-shield-halved', 'text' => 'Confidential & secure'],
      ['icon' => 'fas fa-handshake', 'text' => 'Free consultation included'],
      ['icon' => 'fas fa-file-invoice-dollar', 'text' => 'No online payment required'],
  ];

  $steps = [
      ['num' => '1', 'icon' => 'fas fa-user-pen', 'title' => 'Tell us your needs', 'desc' => 'Fill in your details and describe your project scope.'],
      ['num' => '2', 'icon' => 'fas fa-search-dollar', 'title' => 'We review & prepare', 'desc' => 'Our team analyses requirements and drafts an official quote.'],
      ['num' => '3', 'icon' => 'fas fa-paper-plane', 'title' => 'Receive your proposal', 'desc' => 'Quote delivered by email & WhatsApp within 24 hours.'],
      ['num' => '4', 'icon' => 'fas fa-file-signature', 'title' => 'Agree scope & start', 'desc' => 'Finalise scope, timeline and payment offline — then we build.'],
  ];

  $faqs = [
      [
          'q' => 'Is there a fee to request a quote?',
          'a' => 'No. Requesting a quote is completely free. We prepare a detailed proposal at no cost, and you decide whether to proceed.',
      ],
      [
          'q' => 'How long does it take to get my quote?',
          'a' => 'We respond within 24 hours on working days. Complex or large projects may need a short discovery call first to give you accurate pricing.',
      ],
      [
          'q' => 'Can I pay online on this page?',
          'a' => 'No. This page is for quote requests only. Once you accept our proposal, payment is arranged securely offline via M-Pesa, bank transfer or other agreed methods.',
      ],
      [
          'q' => 'What if I don\'t know my budget or package?',
          'a' => 'No problem. Select "Not sure yet" as the service and leave the package unselected. Our team will guide you based on your goals.',
      ],
      [
          'q' => 'Do you support tour & safari businesses?',
          'a' => 'Yes. We specialise in tour websites with booking engines and M-Pesa payments. Selecting the Tour & Travel service shows tour-specific packages.',
      ],
      [
          'q' => 'Can I request a quote for multiple services?',
          'a' => 'Absolutely. Choose the service that best matches your main need and mention the other services in the project description so we can price everything together.',
      ],
  ];
@endphp

<style>
  .rq2-hero {
    position: relative;
    padding: 110px 0 120px;
    background: linear-gradient(180deg, #062B4D 0%, #0A3A66 55%, #0C4580 100%);
    overflow: hidden;
  }
  .rq2-hero-grid {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(111,177,232,0.07) 1px, transparent 1px), linear-gradient(90deg, rgba(111,177,232,0.07) 1px, transparent 1px);
    background-size: 48px 48px;
    mask-image: radial-gradient(ellipse at 62% 40%, #000 20%, transparent 76%);
    -webkit-mask-image: radial-gradient(ellipse at 62% 40%, #000 20%, transparent 76%);
  }
  .rq2-hero-glow {
    position: absolute; width: 620px; height: 620px; border-radius: 50%;
    background: radial-gradient(circle, rgba(61,143,212,0.32), transparent 70%);
    top: -180px; right: -140px; pointer-events: none; filter: blur(8px);
  }
  .rq2-hero-inner { position: relative; z-index: 2; display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .rq2-badge {
    display: inline-flex; align-items: center; gap: 9px;
    background: rgba(111,177,232,0.14); border: 1px solid rgba(111,177,232,0.32);
    color: #6FB1E8; font-weight: 800; font-size: .78rem; letter-spacing: 1.4px;
    text-transform: uppercase; padding: 8px 16px; border-radius: 50px;
  }
  .rq2-badge .dot { width: 8px; height: 8px; border-radius: 50%; background: #1FA97A; box-shadow: 0 0 0 4px rgba(31,169,122,0.25); animation: rq2Pulse 2s infinite; }
  @keyframes rq2Pulse { 0% { box-shadow: 0 0 0 0 rgba(31,169,122,0.55); } 70% { box-shadow: 0 0 0 10px rgba(31,169,122,0); } 100% { box-shadow: 0 0 0 0 rgba(31,169,122,0); } }
  .rq2-hero h1 {
    font-family: var(--font-display);
    font-size: clamp(2.3rem, 4.4vw, 3.5rem); font-weight: 900; line-height: 1.08;
    letter-spacing: -1px; color: #fff; margin: 24px 0 18px;
  }
  .rq2-hero h1 span { background: linear-gradient(120deg, #9CC9EE, #E0EBF5); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
  .rq2-hero p { font-size: 1.06rem; color: rgba(255,255,255,0.74); line-height: 1.75; margin: 0 0 26px; max-width: 560px; }
  .rq2-trust { display: flex; flex-wrap: wrap; gap: 14px; }
  .rq2-trust span { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.16); color: rgba(255,255,255,0.9); font-size: .82rem; font-weight: 700; padding: 8px 14px; border-radius: 50px; }
  .rq2-trust i { color: #6FB1E8; font-size: .75rem; }
  .rq2-hero-art { position: relative; display: flex; justify-content: center; }
  .rq2-art-frame { position: relative; width: min(430px, 100%); aspect-ratio: 4 / 4.5; border-radius: 26px; overflow: hidden; border: 6px solid rgba(255,255,255,0.12); box-shadow: 0 34px 70px -20px rgba(0,0,0,0.5); }
  .rq2-art-frame img { width: 100%; height: 100%; object-fit: cover; }
  .rq2-art-ring { position: absolute; inset: -16px; pointer-events: none; border: 2px dashed rgba(111,177,232,0.3); border-radius: 34px; }
  .rq2-art-card {
    position: absolute; display: flex; align-items: center; gap: 11px;
    background: rgba(255,255,255,0.96); backdrop-filter: blur(10px);
    border-radius: 14px; padding: 12px 16px; border: 1px solid rgba(255,255,255,0.6);
    box-shadow: 0 18px 40px rgba(0,0,0,0.3); animation: rq2Float 4s ease-in-out infinite;
  }
  @keyframes rq2Float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-9px); } }
  .rq2-art-card-a { bottom: 24px; left: -34px; }
  .rq2-art-card-b { top: 40px; right: -30px; animation-delay: 1.2s; }
  .rq2-art-ico { width: 40px; height: 40px; border-radius: 11px; flex: none; background: linear-gradient(135deg,#0C4580,#093967); color: #6FB1E8; display: flex; align-items: center; justify-content: center; font-size: 1rem; }
  .rq2-art-card strong { font-size: .84rem; color: #062B4D; display: block; font-weight: 800; }
  .rq2-art-card small { font-size: .72rem; color: #4A5E78; font-weight: 600; }

  .rq2-steps { background: #fff; padding: 84px 0; }
  .rq2-steps-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 48px; }
  .rq2-step { position: relative; background: var(--off-white); border: 1px solid var(--line); border-radius: 20px; padding: 30px 24px; transition: all .3s ease; }
  .rq2-step:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); border-color: var(--primary-ring); background: #fff; }
  .rq2-step-num { position: absolute; top: -18px; left: 24px; width: 38px; height: 38px; border-radius: 50%; background: var(--grad-primary); color: #fff; font-family: var(--font-display); font-weight: 900; font-size: .95rem; display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-primary); }
  .rq2-step-ico { width: 48px; height: 48px; border-radius: 12px; background: var(--grad-primary); color: var(--sky-bright); display: flex; align-items: center; justify-content: center; font-size: 1.15rem; margin: 6px 0 16px; }
  .rq2-step h3 { font-family: var(--font-display); font-size: 1.05rem; font-weight: 800; color: var(--dark); margin-bottom: 6px; }
  .rq2-step p { font-size: .86rem; color: var(--ink-muted); line-height: 1.65; margin: 0; }

  .rq2-flash { max-width: 1240px; margin: 34px auto 0; padding: 0 4%; }
  .rq2-alert { display: flex; align-items: center; gap: 14px; padding: 16px 22px; border-radius: 14px; font-weight: 700; font-size: .94rem; box-shadow: var(--shadow); }
  .rq2-alert.success { background: #E9F9F1; border: 1px solid #1FA97A; color: #0C7A5C; }
  .rq2-alert.error { background: #FDF0F0; border: 1px solid #D64545; color: #A83232; }
  .rq2-alert i { font-size: 1.2rem; }
  .rq2-alert ul { margin: 8px 0 0 18px; font-weight: 600; }

  .rq2-main { background: var(--off-white); padding: 56px 0 96px; }
  .rq2-layout { display: grid; grid-template-columns: 1fr 360px; gap: 32px; align-items: start; }
  @media (max-width: 1000px) { .rq2-layout { grid-template-columns: 1fr; } .rq2-sidebar { order: -1; } }

  .rq2-form-card { background: #fff; border: 1px solid var(--line); border-radius: 24px; box-shadow: var(--shadow); overflow: hidden; }
  .rq2-form-header { background: linear-gradient(135deg, #062B4D, #0A3A66 60%, #0C4580); color: #fff; padding: 26px 32px; }
  .rq2-form-header h2 { font-family: var(--font-display); font-size: 1.4rem; font-weight: 900; letter-spacing: -.3px; margin-bottom: 6px; }
  .rq2-form-header p { opacity: .82; font-size: .9rem; }
  .rq2-form-body { padding: 32px; }
  @media (max-width: 600px) { .rq2-form-header, .rq2-form-body { padding: 24px 20px; } }
  .rq2-section { margin-bottom: 30px; padding-bottom: 26px; border-bottom: 1px solid var(--line); }
  .rq2-section:last-of-type { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
  .rq2-section-title { display: flex; align-items: center; gap: 12px; font-size: 1.05rem; font-weight: 800; color: var(--dark); margin-bottom: 18px; letter-spacing: -.2px; }
  .rq2-section-title i { width: 38px; height: 38px; border-radius: 11px; background: var(--grad-primary); color: var(--sky-bright); display: flex; align-items: center; justify-content: center; font-size: .95rem; box-shadow: var(--shadow-primary); flex: none; }
  .rq2-hint { font-size: .86rem; color: var(--ink-faint); margin-bottom: 14px; line-height: 1.6; }
  .rq2-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  @media (max-width: 600px) { .rq2-grid-2 { grid-template-columns: 1fr; } }
  .rq2-field { margin-bottom: 16px; }
  .rq2-field label { display: block; font-weight: 800; font-size: .82rem; color: var(--ink-muted); margin-bottom: 6px; }
  .rq2-field label .req { color: #D64545; }
  .rq2-field input, .rq2-field select, .rq2-field textarea {
    width: 100%; padding: 13px 15px; border: 1.5px solid var(--line); border-radius: 12px;
    font-family: var(--font-body); font-size: .94rem; color: var(--text); background: var(--off-white);
    transition: all .22s ease; outline: none;
  }
  .rq2-field input:focus, .rq2-field select:focus, .rq2-field textarea:focus {
    border-color: var(--primary); background: #fff; box-shadow: 0 0 0 4px var(--primary-soft);
  }
  .rq2-field textarea { min-height: 130px; resize: vertical; }
  .rq2-field .error { color: #D64545; font-size: .78rem; margin-top: 5px; font-weight: 700; }
  .rq2-field input.is-invalid, .rq2-field select.is-invalid, .rq2-field textarea.is-invalid { border-color: #D64545 !important; }

  .rq2-service-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(148px, 1fr)); gap: 10px; }
  .rq2-service-opt { position: relative; }
  .rq2-service-opt input { position: absolute; opacity: 0; pointer-events: none; }
  .rq2-service-opt label {
    display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px;
    padding: 16px 10px; border: 2px solid var(--line); border-radius: 14px; cursor: pointer;
    text-align: center; font-size: .78rem; font-weight: 700; color: var(--ink-muted);
    background: var(--off-white); transition: all .22s ease; margin: 0; min-height: 96px;
  }
  .rq2-service-opt label i { font-size: 1.35rem; color: var(--primary); }
  .rq2-service-opt:hover label { border-color: var(--primary-ring); background: #fff; transform: translateY(-2px); }
  .rq2-service-opt input:checked + label { border-color: var(--primary); background: var(--primary-soft); color: var(--primary); box-shadow: 0 0 0 3px var(--primary-soft); }

  .rq2-package-row { display: none; margin-top: 18px; }
  .rq2-package-row.visible { display: block; animation: rq2FadeUp .35s ease both; }
  @keyframes rq2FadeUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
  .rq2-package-label { font-weight: 800; font-size: .82rem; color: var(--ink-muted); display: block; margin-bottom: 10px; }
  .rq2-package-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 12px; }
  .rq2-pkg-opt { position: relative; }
  .rq2-pkg-opt input { position: absolute; opacity: 0; }
  .rq2-pkg-opt label {
    display: block; padding: 16px 14px; border: 2px solid var(--line); border-radius: 14px;
    cursor: pointer; background: var(--off-white); transition: all .22s ease; margin: 0; position: relative;
  }
  .rq2-pkg-opt:hover label { border-color: var(--primary-ring); background: #fff; transform: translateY(-2px); }
  .rq2-pkg-opt input:checked + label { border-color: var(--primary); background: var(--primary-soft); box-shadow: 0 0 0 3px var(--primary-soft); }
  .rq2-pkg-opt .pkg-name { font-weight: 800; color: var(--dark); font-size: .9rem; margin-bottom: 8px; }
  .rq2-pkg-opt .pkg-badge { display: inline-block; font-size: .72rem; font-weight: 800; color: var(--primary); background: #fff; border: 1px solid var(--primary-ring); padding: 4px 10px; border-radius: 50px; }
  .rq2-pkg-opt input:checked + label .pkg-badge { background: var(--grad-primary); color: #fff; border-color: var(--primary); }
  .rq2-pkg-opt .pkg-pop { position: absolute; top: -11px; right: 12px; background: #FFD21F; color: #062B4D; font-size: .66rem; font-weight: 900; letter-spacing: .5px; text-transform: uppercase; padding: 3px 10px; border-radius: 50px; }

  .rq2-addon-groups { max-height: 380px; overflow-y: auto; padding-right: 6px; }
  .rq2-addon-groups::-webkit-scrollbar { width: 6px; }
  .rq2-addon-groups::-webkit-scrollbar-thumb { background: var(--line); border-radius: 4px; }
  .rq2-addon-group { margin-bottom: 18px; }
  .rq2-addon-group h4 { font-size: .84rem; font-weight: 800; color: var(--primary); margin-bottom: 8px; }
  .rq2-addon-item {
    display: flex; align-items: flex-start; gap: 10px; padding: 10px 12px; border-radius: 10px;
    margin-bottom: 6px; background: var(--off-white); cursor: pointer; transition: all .2s ease;
    border: 1px solid transparent;
  }
  .rq2-addon-item:hover { background: #fff; border-color: var(--primary-ring); }
  .rq2-addon-item.has-checked { background: var(--primary-soft); border-color: var(--primary-ring); }
  .rq2-addon-item input { margin-top: 3px; accent-color: var(--primary); }
  .rq2-addon-item strong { display: block; color: var(--dark); font-size: .86rem; font-weight: 800; }
  .rq2-addon-item span small { font-size: .78rem; color: var(--ink-faint); font-weight: 600; }

  .rq2-privacy { display: flex; align-items: flex-start; gap: 10px; font-size: .86rem; color: var(--ink-muted); font-weight: 600; line-height: 1.6; margin-bottom: 20px; }
  .rq2-privacy input { margin-top: 4px; accent-color: var(--primary); width: 18px; height: 18px; flex: none; }
  .rq2-privacy .req { color: #D64545; }
  .rq2-submit {
    width: 100%; padding: 17px 24px; border: none; border-radius: 50px;
    background: var(--grad-primary); color: #fff; font-family: var(--font-body);
    font-size: 1.05rem; font-weight: 800; cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    transition: all .25s ease; box-shadow: var(--shadow-primary);
  }
  .rq2-submit:hover { transform: translateY(-2px); box-shadow: 0 16px 38px rgba(12,69,128,0.42); }
  .rq2-submit:disabled { opacity: .7; cursor: not-allowed; transform: none; }
  .rq2-secure-note { display: flex; align-items: center; gap: 8px; justify-content: center; margin-top: 14px; font-size: .78rem; color: var(--ink-faint); font-weight: 600; }

  .rq2-sidebar { position: sticky; top: 100px; }
  @media (max-width: 1000px) { .rq2-sidebar { position: static; } }
  .rq2-sidebar-card { background: #fff; border: 1px solid var(--line); border-radius: 20px; padding: 26px; box-shadow: var(--shadow); margin-bottom: 20px; }
  .rq2-sidebar-card h3 { font-size: 1rem; font-weight: 800; color: var(--dark); margin-bottom: 14px; display: flex; align-items: center; gap: 8px; }
  .rq2-sidebar-card h3 i { color: var(--primary); }
  .rq2-summary { background: linear-gradient(135deg, #062B4D, #0A3A66); border: none; color: #fff; }
  .rq2-summary h3 { color: #fff; }
  .rq2-summary-empty { font-size: .86rem; color: rgba(255,255,255,0.6); line-height: 1.6; }
  .rq2-summary-line { display: flex; justify-content: space-between; align-items: center; gap: 12px; padding: 10px 0; border-bottom: 1px dashed rgba(255,255,255,0.15); font-size: .88rem; }
  .rq2-summary-line:last-of-type { border-bottom: none; }
  .rq2-summary-line b { font-weight: 800; }
  .rq2-summary-line span { color: rgba(255,255,255,0.75); font-weight: 600; text-align: right; }
  .rq2-summary-tag { display: inline-flex; align-items: center; gap: 7px; background: #FFD21F; color: #062B4D; font-size: .74rem; font-weight: 900; letter-spacing: .5px; text-transform: uppercase; padding: 5px 12px; border-radius: 50px; }
  .rq2-summary-tag i { font-size: .7rem; }
  .rq2-contact-line { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; font-size: .9rem; color: var(--ink-muted); }
  .rq2-contact-line i { width: 42px; height: 42px; border-radius: 11px; background: var(--off-white); color: var(--primary); display: flex; align-items: center; justify-content: center; flex: none; }
  .rq2-contact-line a { color: var(--primary); text-decoration: none; font-weight: 800; }
  .rq2-contact-line small { font-size: .78rem; color: var(--ink-faint); }
  .rq2-note { background: linear-gradient(135deg, rgba(31,169,122,0.08), rgba(12,69,128,0.05)); border-left: 4px solid var(--success); }
  .rq2-note p { font-size: .88rem; color: var(--ink-muted); line-height: 1.7; margin: 0; }
  .rq2-note strong { color: var(--dark); display: block; margin-bottom: 8px; }
  .rq2-note i { color: var(--success); margin-right: 6px; }

  .rq2-faq { background: #fff; padding: 96px 0; }
  .rq2-faq-grid { display: grid; grid-template-columns: 0.85fr 1.15fr; gap: 56px; align-items: start; }
  .rq2-faq-side { position: sticky; top: 100px; }
  .rq2-faq-side h2 { font-family: var(--font-display); font-size: 2rem; font-weight: 900; color: var(--dark); letter-spacing: -.6px; margin: 14px 0 14px; }
  .rq2-faq-side p { color: var(--ink-muted); line-height: 1.7; margin-bottom: 24px; }
  .rq2-faq-side .btn-primary { display: inline-flex; color: #fff; }
  .rq2-accordion { display: flex; flex-direction: column; gap: 14px; }
  .rq2-faq-item { background: var(--off-white); border: 1px solid var(--line); border-radius: 16px; overflow: hidden; transition: all .3s ease; }
  .rq2-faq-item.open { background: #fff; border-color: var(--primary-ring); box-shadow: var(--shadow-sm); }
  .rq2-faq-q { width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 14px; background: none; border: none; cursor: pointer; padding: 20px 22px; text-align: left; font-family: var(--font-body); font-size: .96rem; font-weight: 800; color: var(--dark); }
  .rq2-faq-q .rq2-faq-arrow { width: 32px; height: 32px; flex: none; border-radius: 10px; background: #fff; border: 1px solid var(--line); display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: .8rem; transition: all .3s ease; }
  .rq2-faq-item.open .rq2-faq-arrow { background: var(--grad-primary); color: #fff; transform: rotate(180deg); border-color: var(--primary); }
  .rq2-faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
  .rq2-faq-a p { padding: 0 22px 22px; font-size: .9rem; color: var(--ink-muted); line-height: 1.7; margin: 0; }

  .reveal { opacity: 0; transform: translateY(28px); transition: opacity .7s ease, transform .7s ease; }
  .reveal.in-view { opacity: 1; transform: translateY(0); }

  @media (max-width: 1100px) {
    .rq2-hero-inner { grid-template-columns: 1fr; gap: 52px; }
    .rq2-hero-copy { text-align: center; }
    .rq2-hero p { margin: 0 auto 26px; }
    .rq2-trust { justify-content: center; }
    .rq2-steps-grid { grid-template-columns: repeat(2, 1fr); }
    .rq2-faq-grid { grid-template-columns: 1fr; }
    .rq2-faq-side { position: static; }
    .rq2-art-card-a { left: 6px; }
    .rq2-art-card-b { right: 6px; }
  }
  @media (max-width: 600px) {
    .rq2-steps-grid { grid-template-columns: 1fr; }
    .rq2-service-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (prefers-reduced-motion: reduce) {
    .rq2-step, .rq2-art-card, .rq2-pkg-opt label, .rq2-service-opt label, .rq2-faq-item, .reveal { transition: none !important; transform: none !important; animation: none !important; }
  }
</style>

<!-- HERO -->
<section class="rq2-hero" id="home">
  <div class="rq2-hero-grid" aria-hidden="true"></div>
  <div class="rq2-hero-glow" aria-hidden="true"></div>
  <div class="container rq2-hero-inner">
    <div class="rq2-hero-copy">
      <span class="rq2-badge"><span class="dot"></span> Official Quote Request</span>
      <h1>Get Your <span>Custom Quote</span></h1>
      <p>Tell us about your project. Our team will review your requirements and send a tailored proposal within 24 hours — no online payment, no hidden fees.</p>
      <div class="rq2-trust">
        @foreach($trustItems as $item)
          <span><i class="{{ $item['icon'] }}"></i> {{ $item['text'] }}</span>
        @endforeach
      </div>
    </div>
    <div class="rq2-hero-art">
      <div class="rq2-art-frame">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Jezdan Group team preparing a project quote">
      </div>
      <div class="rq2-art-ring" aria-hidden="true"></div>
      <div class="rq2-art-card rq2-art-card-a">
        <span class="rq2-art-ico"><i class="fas fa-bolt"></i></span>
        <div><strong>24hr Response</strong><small>Quotes sent fast</small></div>
      </div>
      <div class="rq2-art-card rq2-art-card-b">
        <span class="rq2-art-ico"><i class="fas fa-hand-holding-dollar"></i></span>
        <div><strong>No Online Payment</strong><small>Quote first, pay offline</small></div>
      </div>
    </div>
  </div>
</section>

<!-- STEPS -->
<section class="rq2-steps" id="how-it-works">
  <div class="container">
    <div class="section-header" style="text-align:center;margin-bottom:0;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-route"></i> How It Works</div>
      <h2 class="section-title">From Request to <span style="color:var(--primary);">Project Start</span></h2>
      <p class="section-sub" style="margin:0 auto;">A simple, transparent process with no surprises.</p>
    </div>
    <div class="rq2-steps-grid">
      @foreach($steps as $step)
        <div class="rq2-step reveal">
          <span class="rq2-step-num">{{ $step['num'] }}</span>
          <span class="rq2-step-ico"><i class="{{ $step['icon'] }}"></i></span>
          <h3>{{ $step['title'] }}</h3>
          <p>{{ $step['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

@if($errors->any())
  <div class="rq2-flash">
    <div class="rq2-alert error">
      <i class="fas fa-circle-exclamation"></i>
      <div>
        <span>Please fix the following and try again:</span>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endif

<!-- MAIN FORM -->
<section class="rq2-main" id="quote-form">
  <div class="container">
    <div class="rq2-layout">
      <div class="rq2-form-card reveal">
        <div class="rq2-form-header">
          <h2><i class="fas fa-file-invoice-dollar" style="margin-right:8px;"></i> Project Quote Request Form</h2>
          <p>All fields marked with <span style="color:#FFD21F;font-weight:900;">*</span> are required.</p>
        </div>
        <div class="rq2-form-body">
          <form method="POST" action="{{ route('request.quote.submit') }}" id="quoteForm" novalidate>
            @csrf
            <input type="hidden" name="vertical" id="verticalField" value="{{ old('vertical', $prefill['vertical'] ?? '') }}">

            <div class="rq2-section">
              <div class="rq2-section-title"><i class="fas fa-user"></i> Your Details</div>
              <div class="rq2-grid-2">
                <div class="rq2-field">
                  <label>Full name <span class="req">*</span></label>
                  <input type="text" name="full_name" value="{{ old('full_name') }}" required placeholder="John Mwangi" class="{{ $errors->has('full_name') ? 'is-invalid' : '' }}">
                  @error('full_name')<div class="error">{{ $message }}</div>@enderror
                </div>
                <div class="rq2-field">
                  <label>Company / organisation</label>
                  <input type="text" name="company" value="{{ old('company') }}" placeholder="Optional">
                </div>
              </div>
              <div class="rq2-grid-2">
                <div class="rq2-field">
                  <label>Email <span class="req">*</span></label>
                  <input type="email" name="email" value="{{ old('email') }}" required placeholder="you@company.co.tz" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                  @error('email')<div class="error">{{ $message }}</div>@enderror
                </div>
                <div class="rq2-field">
                  <label>Phone / WhatsApp <span class="req">*</span></label>
                  <input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="+255 7XX XXX XXX" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}">
                  @error('phone')<div class="error">{{ $message }}</div>@enderror
                </div>
              </div>
            </div>

            <div class="rq2-section">
              <div class="rq2-section-title"><i class="fas fa-layer-group"></i> Service & Package</div>
              <p class="rq2-hint">Select the service closest to your needs. Package tiers help us understand scope — final pricing is provided in your official quote.</p>
              <div class="rq2-service-grid" id="serviceGrid">
                @foreach($services as $svc)
                  <div class="rq2-service-opt">
                    <input type="radio" name="service_id" id="svc_{{ $svc['id'] }}" value="{{ $svc['id'] }}"
                      {{ (string) old('service_id', $prefill['service_id'] ?? '') === (string) $svc['id'] ? 'checked' : '' }}>
                    <label for="svc_{{ $svc['id'] }}">
                      <i class="fas {{ $svc['icon'] }}"></i>
                      {{ $svc['name'] }}
                    </label>
                  </div>
                @endforeach
              </div>
              @error('service_id')<div class="error" style="margin-top:8px;">{{ $message }}</div>@enderror

              <div class="rq2-package-row" id="packageRow">
                <span class="rq2-package-label">Preferred package tier (optional)</span>
                <div class="rq2-package-cards" id="packageCards"></div>
                <input type="hidden" name="package_id" id="packageIdField" value="{{ old('package_id', $prefill['package_id'] ?? '') }}">
              </div>
            </div>

            <div class="rq2-section">
              <div class="rq2-section-title"><i class="fas fa-puzzle-piece"></i> Add-ons (optional)</div>
              <div class="rq2-addon-groups">
                @foreach($addonCatalog as $group)
                  <div class="rq2-addon-group">
                    <h4>{{ $group['heading'] }}</h4>
                    @foreach($group['items'] as $item)
                      <label class="rq2-addon-item">
                        <input type="checkbox" name="selected_addons[]" value="{{ $item['slug'] }}"
                          {{ in_array($item['slug'], old('selected_addons', $prefill['addons'] ?? [])) ? 'checked' : '' }}>
                        <span>
                          <strong>{{ $item['name'] }}</strong>
                          <small>{{ $item['desc'] }}</small>
                        </span>
                      </label>
                    @endforeach
                  </div>
                @endforeach
              </div>
            </div>

            <div class="rq2-section">
              <div class="rq2-section-title"><i class="fas fa-file-lines"></i> Your Message</div>
              <div class="rq2-field">
                <label>Describe your project <span class="req">*</span></label>
                <textarea name="project_description" required placeholder="Goals, features, target users, integrations, existing systems, deadlines…" class="{{ $errors->has('project_description') ? 'is-invalid' : '' }}">{{ old('project_description') }}</textarea>
                @error('project_description')<div class="error">{{ $message }}</div>@enderror
              </div>
              <div class="rq2-field">
                <label>How did you hear about us?</label>
                <select name="how_heard">
                  <option value="">Optional</option>
                  @foreach(['Google search', 'Social media', 'Referral', 'Existing client', 'Event / workshop', 'Other'] as $h)
                    <option value="{{ $h }}" {{ old('how_heard') === $h ? 'selected' : '' }}>{{ $h }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <label class="rq2-privacy">
              <input type="checkbox" name="privacy" value="1" {{ old('privacy') ? 'checked' : '' }} required>
              <span>I agree that Jezdan Group may contact me about this quote request and store my details securely. <span class="req">*</span></span>
            </label>
            @error('privacy')<div class="error" style="margin-bottom:12px;">{{ $message }}</div>@enderror

            <button type="submit" class="rq2-submit" id="submitBtn">
              <span class="rq2-spin" style="display:none;"><i class="fas fa-spinner fa-spin"></i></span>
              <span class="rq2-lbl"><i class="fas fa-paper-plane"></i> Submit Quote Request</span>
            </button>
            <div class="rq2-secure-note"><i class="fas fa-lock"></i> Your information is encrypted and never shared.</div>
          </form>
        </div>
      </div>

      <aside class="rq2-sidebar">
        <div class="rq2-sidebar-card rq2-summary">
          <h3><i class="fas fa-list-check"></i> Your Selection</h3>
          <div id="summaryContent">
            <div class="rq2-summary-empty" id="summaryEmpty">Select a service and package to preview your request here.</div>
          </div>
        </div>
        <div class="rq2-sidebar-card">
          <h3><i class="fas fa-headset"></i> Prefer to talk?</h3>
          <div class="rq2-contact-line">
            <i class="fab fa-whatsapp"></i>
            <div><a href="https://wa.me/255685847002" target="_blank" rel="noopener">+255 685 847 002</a><br><small>WhatsApp – fastest response</small></div>
          </div>
          <div class="rq2-contact-line">
            <i class="fas fa-envelope"></i>
            <div><a href="mailto:info@jezdantech.com">info@jezdantech.com</a><br><small>Email for proposals & docs</small></div>
          </div>
          <div class="rq2-contact-line">
            <i class="fas fa-location-dot"></i>
            <div>Moshi, Kilimanjaro<br><small>Tanzania</small></div>
          </div>
        </div>
        <div class="rq2-sidebar-card rq2-note">
          <strong><i class="fas fa-circle-info"></i> No online payment</strong>
          <p>This form does not process payments or show fixed prices. You will receive an official quote by email after our team reviews your request.</p>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="rq2-faq" id="faq">
  <div class="container">
    <div class="rq2-faq-grid">
      <div class="rq2-faq-side reveal">
        <div class="section-label"><i class="fas fa-circle-question"></i> FAQs</div>
        <h2>Quote <span style="color:var(--primary);">FAQs</span></h2>
        <p>Have a question about how quoting works? We're happy to help before you submit your request.</p>
        <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%20have%20a%20question%20about%20requesting%20a%20quote." class="btn-primary" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Ask Us Anything</a>
      </div>
      <div class="rq2-accordion">
        @foreach($faqs as $faq)
          <div class="rq2-faq-item reveal">
            <button class="rq2-faq-q" type="button" aria-expanded="false">
              <span>{{ $faq['q'] }}</span>
              <span class="rq2-faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="rq2-faq-a"><p>{{ $faq['a'] }}</p></div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Prefer to Get Started <span>Right Now?</span></h2>
    <p>Chat with our team on WhatsApp for a quick, informal discussion about your project before you submit the form.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Group!%20I%20have%20a%20quick%20question%20before%20requesting%20a%20quote." class="btn-whatsapp" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Contact Page</a>
    </div>
  </div>
</div>
@endsection

@section('additional_styles')
<style>
  .rq2-summary-tag { margin-top: 6px; }
</style>
@endsection

@section('additional_scripts')
<script>
(function() {
  const packageMatrix = @json($packageMatrix);
  const tourOverlays = @json(\App\Support\PackagePricing::tourVerticalTierOverlays());
  const prefillPackageId = @json(old('package_id', $prefill['package_id'] ?? null));
  const prefillVertical = @json(old('vertical', $prefill['vertical'] ?? null));
  const packageRow = document.getElementById('packageRow');
  const packageCards = document.getElementById('packageCards');
  const packageIdField = document.getElementById('packageIdField');
  const verticalField = document.getElementById('verticalField');

  const serviceNames = {};
  @foreach($services as $svc)
    serviceNames[{{ $svc['id'] }}] = '{{ $svc['name'] }}';
  @endforeach

  let currentServiceName = null;
  let currentPackageName = null;

  function updateSummary() {
    const box = document.getElementById('summaryContent');
    const empty = document.getElementById('summaryEmpty');
    if (!currentServiceName && document.querySelectorAll('.rq2-addon-item input:checked').length === 0) {
      if (!empty) {
        box.innerHTML = '<div class="rq2-summary-empty" id="summaryEmpty">Select a service and package to preview your request here.</div>';
      }
      return;
    }
    let html = '';
    if (currentServiceName) {
      html += '<div class="rq2-summary-line"><b>Service</b><span>' + currentServiceName + '</span></div>';
    }
    if (currentPackageName) {
      html += '<div class="rq2-summary-line"><b>Package</b><span>' + currentPackageName + '</span></div>';
    }
    const addons = Array.from(document.querySelectorAll('.rq2-addon-item input:checked')).map(function(cb) {
      return cb.closest('.rq2-addon-item').querySelector('strong').textContent;
    });
    if (addons.length) {
      html += '<div class="rq2-summary-line"><b>Add-ons</b><span>' + addons.length + ' selected</span></div>';
      html += '<div style="margin-top:10px;display:flex;flex-wrap:wrap;gap:6px;">' + addons.slice(0, 4).map(function(a) {
        return '<span class="rq2-summary-tag"><i class="fas fa-check"></i> ' + a + '</span>';
      }).join('') + (addons.length > 4 ? '<span class="rq2-summary-tag">+' + (addons.length - 4) + ' more</span>' : '') + '</div>';
    }
    box.innerHTML = html;
  }

  function renderPackages(serviceId) {
    const sid = String(serviceId);
    const tiers = packageMatrix[sid];
    packageCards.innerHTML = '';
    currentPackageName = null;
    if (!tiers || serviceId === '0' || serviceId === 0) {
      packageRow.classList.remove('visible');
      packageIdField.value = '';
      updateSummary();
      return;
    }
    packageRow.classList.add('visible');
    const vertical = verticalField.value;
    Object.entries(tiers).forEach(function([tierId, tier]) {
      let name = tier.name;
      if (vertical === 'tour' && sid === '1' && tourOverlays[tierId]?.name) {
        name = tourOverlays[tierId].name;
      }
      const div = document.createElement('div');
      div.className = 'rq2-pkg-opt';
      const checked = String(prefillPackageId) === String(tierId) ? 'checked' : '';
      const popular = tier.popular ? '<span class="pkg-pop">Popular</span>' : '';
      div.innerHTML = `
        <input type="radio" name="package_radio" id="pkg_${tierId}" value="${tierId}" ${checked}>
        <label for="pkg_${tierId}">
          <div class="pkg-name">${name}</div>
          <span class="pkg-badge">Request Quote</span>
          ${popular}
        </label>`;
      packageCards.appendChild(div);
      div.querySelector('input').addEventListener('change', function() {
        packageIdField.value = this.value;
        currentPackageName = name;
        updateSummary();
      });
    });
    const selected = packageCards.querySelector('input:checked');
    if (selected) {
      packageIdField.value = selected.value;
      const selLabel = selected.nextElementSibling.querySelector('.pkg-name').textContent;
      currentPackageName = selLabel;
    }
    updateSummary();
  }

  document.querySelectorAll('input[name="service_id"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
      const chosen = serviceNames[this.value] || 'Other / Not sure yet';
      currentServiceName = chosen;
      if (this.value === '9') {
        verticalField.value = 'tour';
        document.getElementById('svc_1')?.click();
        currentServiceName = 'Tour & Travel Websites';
      } else if (this.value !== '1') {
        verticalField.value = '';
      }
      renderPackages(this.value === '9' ? '1' : this.value);
      updateSummary();
    });
  });

  // Addon highlight + summary
  document.querySelectorAll('.rq2-addon-item input').forEach(function(cb) {
    cb.addEventListener('change', function() {
      this.closest('.rq2-addon-item').classList.toggle('has-checked', this.checked);
      updateSummary();
    });
  });
  document.querySelectorAll('.rq2-addon-item input:checked').forEach(function(cb) {
    cb.closest('.rq2-addon-item').classList.add('has-checked');
  });

  const checkedSvc = document.querySelector('input[name="service_id"]:checked');
  if (checkedSvc) {
    const sid = checkedSvc.value === '9' ? '1' : checkedSvc.value;
    currentServiceName = serviceNames[checkedSvc.value] || 'Other / Not sure yet';
    if (checkedSvc.value === '9') currentServiceName = 'Tour & Travel Websites';
    if (prefillVertical) verticalField.value = prefillVertical;
    renderPackages(sid);
  }

  // FAQ accordion
  document.querySelectorAll('.rq2-faq-q').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const item = this.closest('.rq2-faq-item');
      const answer = item.querySelector('.rq2-faq-a');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.rq2-faq-item.open').forEach(function(other) {
        other.classList.remove('open');
        other.querySelector('.rq2-faq-a').style.maxHeight = null;
        other.querySelector('.rq2-faq-q').setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Reveal on scroll
  const rq2Reveals = document.querySelectorAll('.rq2-step.reveal, .rq2-faq-item.reveal, .rq2-faq-side.reveal, .rq2-form-card.reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    rq2Reveals.forEach(function(el) { observer.observe(el); });
  } else {
    rq2Reveals.forEach(function(el) { el.classList.add('in-view'); });
  }

  // Submit loading state
  document.getElementById('quoteForm').addEventListener('submit', function() {
    const btn = document.getElementById('submitBtn');
    btn.disabled = true;
    btn.querySelector('.rq2-spin').style.display = 'inline-block';
    btn.querySelector('.rq2-lbl').style.display = 'none';
  });
})();
</script>
@endsection