@extends('layouts.app')

@php
  $isQuote = request('type') === 'quote';
  $reference = request('ref');
@endphp

@section('title', $isQuote ? 'Quote Request Received | Jezdan Technology' : 'Thank You | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Thank you for contacting Jezdan Technology. Our team will respond to your quote request shortly.">
  <meta name="robots" content="noindex">
@endsection

@section('content')

<style>
  .ty-page { background: var(--off-white); }

  .ty-hero {
    position: relative;
    min-height: 52vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: var(--navy);
    text-align: center;
  }
  .ty-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 70% 55% at 50% 20%, rgba(43, 142, 255, 0.22), transparent),
      radial-gradient(ellipse 45% 40% at 85% 70%, rgba(245, 166, 35, 0.14), transparent),
      radial-gradient(ellipse 40% 35% at 10% 75%, rgba(0, 200, 150, 0.1), transparent);
  }
  .ty-hero-grid {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 56px 56px;
    mask-image: linear-gradient(to bottom, black 30%, transparent 95%);
  }
  .ty-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 720px;
    margin: 0 auto;
    padding: 100px 5% 72px;
  }
  .ty-brand {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 18px;
    border-radius: 999px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.14);
    color: rgba(255,255,255,0.92);
    font-size: 0.82rem;
    font-weight: 600;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 28px;
  }
  .ty-brand .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--success);
    box-shadow: 0 0 12px var(--success);
    animation: ty-pulse 2s ease-in-out infinite;
  }
  @keyframes ty-pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.7; transform: scale(0.92); }
  }
  .ty-success-ring {
    width: 100px;
    height: 100px;
    margin: 0 auto 28px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--success), #00a67e);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
    box-shadow: 0 0 0 12px rgba(0, 200, 150, 0.15), 0 20px 50px rgba(0, 200, 150, 0.35);
    animation: ty-pop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) both;
  }
  @keyframes ty-pop {
    from { transform: scale(0.5); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
  }
  .ty-hero h1 {
    font-family: var(--font-display);
    font-size: clamp(2.2rem, 5vw, 3.2rem);
    color: white;
    line-height: 1.12;
    margin-bottom: 18px;
    animation: ty-fade-up 0.7s ease 0.15s both;
  }
  .ty-hero h1 span { color: var(--gold); }
  .ty-hero-lead {
    font-size: clamp(1rem, 2.2vw, 1.15rem);
    color: rgba(255,255,255,0.88);
    line-height: 1.7;
    max-width: 560px;
    margin: 0 auto 24px;
    animation: ty-fade-up 0.7s ease 0.25s both;
  }
  .ty-hero-note {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    background: rgba(26, 111, 196, 0.25);
    border: 1px solid rgba(43, 142, 255, 0.35);
    border-radius: 999px;
    color: rgba(255,255,255,0.95);
    font-size: 0.9rem;
    font-weight: 500;
    animation: ty-fade-up 0.7s ease 0.35s both;
  }
  .ty-hero-note i { color: var(--gold); }
  @keyframes ty-fade-up {
    from { opacity: 0; transform: translateY(16px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .ty-main {
    padding: 0 5% 80px;
    margin-top: -48px;
    position: relative;
    z-index: 3;
  }
  .ty-wrap { max-width: 960px; margin: 0 auto; }

  .ty-ref-card {
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow-hover);
    padding: 32px;
    text-align: center;
    margin-bottom: 24px;
    border: 1px solid rgba(26, 111, 196, 0.08);
  }
  .ty-ref-label {
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--text-light);
    margin-bottom: 10px;
  }
  .ty-ref-value {
    font-family: var(--font-mono);
    font-size: clamp(1.25rem, 3vw, 1.65rem);
    font-weight: 700;
    color: var(--accent);
    letter-spacing: 0.04em;
    padding: 14px 24px;
    background: linear-gradient(135deg, rgba(26,111,196,0.06), rgba(43,142,255,0.04));
    border-radius: 12px;
    display: inline-block;
    border: 1px dashed rgba(26, 111, 196, 0.25);
  }
  .ty-ref-hint {
    margin-top: 14px;
    font-size: 0.9rem;
    color: var(--text-mid);
  }

  .ty-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-bottom: 24px;
  }
  @media (max-width: 768px) {
    .ty-grid { grid-template-columns: 1fr; }
  }
  .ty-info-card {
    background: white;
    border-radius: var(--radius);
    padding: 22px 20px;
    box-shadow: var(--shadow);
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .ty-info-card:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-hover);
  }
  .ty-info-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 12px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(26,111,196,0.1), rgba(43,142,255,0.06));
    color: var(--accent);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
  }
  .ty-info-card h3 {
    font-size: 0.95rem;
    color: var(--navy);
    margin-bottom: 6px;
  }
  .ty-info-card p {
    font-size: 0.88rem;
    color: var(--text-mid);
    line-height: 1.5;
    margin: 0;
  }
  .ty-info-card a {
    color: var(--accent);
    font-weight: 600;
    text-decoration: none;
  }

  .ty-timeline {
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    padding: 32px;
    margin-bottom: 24px;
  }
  .ty-timeline h2 {
    font-family: var(--font-display);
    font-size: 1.45rem;
    color: var(--navy);
    margin-bottom: 24px;
    text-align: center;
  }
  .ty-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
    position: relative;
  }
  @media (max-width: 900px) {
    .ty-steps { grid-template-columns: 1fr; gap: 20px; }
    .ty-steps::before { display: none; }
  }
  .ty-steps::before {
    content: '';
    position: absolute;
    top: 22px;
    left: 12%;
    right: 12%;
    height: 2px;
    background: linear-gradient(90deg, var(--accent), var(--success));
    opacity: 0.25;
  }
  .ty-step {
    text-align: center;
    padding: 0 12px;
    position: relative;
  }
  .ty-step-num {
    width: 44px;
    height: 44px;
    margin: 0 auto 14px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    color: white;
    font-weight: 700;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    box-shadow: 0 4px 16px rgba(11, 31, 58, 0.2);
  }
  .ty-step:first-child .ty-step-num {
    background: linear-gradient(135deg, var(--success), #00a67e);
    box-shadow: 0 4px 20px rgba(0, 200, 150, 0.35);
  }
  .ty-step h4 {
    font-size: 0.92rem;
    color: var(--navy);
    margin-bottom: 6px;
  }
  .ty-step p {
    font-size: 0.8rem;
    color: var(--text-light);
    line-height: 1.5;
    margin: 0;
  }

  .ty-cta-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
    padding: 28px;
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
  }
  .ty-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 26px;
    border-radius: 999px;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .ty-btn:hover { transform: translateY(-2px); }
  .ty-btn-primary {
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
    box-shadow: 0 8px 24px rgba(26, 111, 196, 0.3);
  }
  .ty-btn-whatsapp {
    background: #25d366;
    color: white;
    box-shadow: 0 8px 24px rgba(37, 211, 102, 0.35);
  }
  .ty-btn-ghost {
    background: var(--off-white);
    color: var(--navy);
    border: 1.5px solid var(--light-gray);
  }

  /* Generic thank-you (non-quote) */
  .ty-simple-card {
    background: white;
    border-radius: var(--radius);
    padding: 40px;
    box-shadow: var(--shadow);
    text-align: center;
    max-width: 640px;
    margin: -48px auto 0;
    position: relative;
    z-index: 3;
  }
</style>

<div class="ty-page">
  @if($isQuote)
  <section class="ty-hero">
    <div class="ty-hero-grid"></div>
    <div class="ty-hero-inner">
      <div class="ty-brand"><span class="dot"></span> Jezdan Technology</div>
      <div class="ty-success-ring"><i class="fas fa-check"></i></div>
      <h1>Quote Request <span>Received</span></h1>
      <p class="ty-hero-lead">
        Our team will review your project and send a tailored official quote within <strong>24 business hours</strong>.
      </p>
      <div class="ty-hero-note">
        <i class="fas fa-envelope-circle-check"></i>
        A confirmation email is on its way to your inbox
      </div>
    </div>
  </section>

  <section class="ty-main">
    <div class="ty-wrap">
      @if($reference)
      <div class="ty-ref-card">
        <div class="ty-ref-label">Your quote reference</div>
        <div class="ty-ref-value" id="quoteRef">{{ $reference }}</div>
        <p class="ty-ref-hint">
          Save this number for follow-up.
          <button type="button" onclick="navigator.clipboard.writeText(document.getElementById('quoteRef').textContent); this.textContent='Copied!'; setTimeout(() => this.textContent='Copy reference', 2000)" style="background:none;border:none;color:var(--accent);font-weight:600;cursor:pointer;margin-left:6px;">Copy reference</button>
        </p>
      </div>
      @endif

      <div class="ty-grid">
        <div class="ty-info-card">
          <div class="ty-info-icon"><i class="fas fa-clock"></i></div>
          <h3>Response time</h3>
          <p>Within 24 business hours on weekdays</p>
        </div>
        <div class="ty-info-card">
          <div class="ty-info-icon"><i class="fab fa-whatsapp"></i></div>
          <h3>WhatsApp</h3>
          <p><a href="https://wa.me/255685847002" target="_blank" rel="noopener">+255 685 847 002</a></p>
        </div>
        <div class="ty-info-card">
          <div class="ty-info-icon"><i class="fas fa-envelope"></i></div>
          <h3>Email</h3>
          <p><a href="mailto:info@jezdantech.com">info@jezdantech.com</a></p>
        </div>
      </div>

      <div class="ty-timeline">
        <h2>What happens next</h2>
        <div class="ty-steps">
          <div class="ty-step">
            <div class="ty-step-num"><i class="fas fa-check" style="font-size:0.85rem;"></i></div>
            <h4>Request received</h4>
            <p>Your details are logged and assigned to our team.</p>
          </div>
          <div class="ty-step">
            <div class="ty-step-num">2</div>
            <h4>Scope review</h4>
            <p>We analyse your services, add-ons, and project goals.</p>
          </div>
          <div class="ty-step">
            <div class="ty-step-num">3</div>
            <h4>Official quote</h4>
            <p>You receive a tailored proposal by email or WhatsApp.</p>
          </div>
          <div class="ty-step">
            <div class="ty-step-num">4</div>
            <h4>Kickoff</h4>
            <p>After you approve, we align timeline and begin work.</p>
          </div>
        </div>
      </div>

      <div class="ty-cta-bar">
        <a href="https://wa.me/255685847002?text={{ urlencode($reference ? "Hello Jezdan Technology, I submitted quote request {$reference}." : 'Hello Jezdan Technology, I submitted a quote request.') }}" class="ty-btn ty-btn-whatsapp" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
        <a href="{{ route('home') }}" class="ty-btn ty-btn-ghost"><i class="fas fa-home"></i> Back to Home</a>
        <a href="{{ route('services') }}" class="ty-btn ty-btn-primary"><i class="fas fa-layer-group"></i> Explore Services</a>
      </div>
    </div>
  </section>

  @else
  <section class="ty-hero" style="min-height: 40vh;">
    <div class="ty-hero-grid"></div>
    <div class="ty-hero-inner">
      <div class="ty-brand"><span class="dot"></span> Jezdan Technology</div>
      <div class="ty-success-ring"><i class="fas fa-check"></i></div>
      <h1>Thank <span>You</span></h1>
      <p class="ty-hero-lead">We appreciate you reaching out. Our team will get back to you shortly.</p>
    </div>
  </section>
  <section class="ty-main">
    <div class="ty-simple-card">
      <p style="color: var(--text-mid); margin-bottom: 24px;">For urgent enquiries, contact us on WhatsApp or email.</p>
      <div class="ty-cta-bar" style="box-shadow: none; padding: 0;">
        <a href="{{ route('home') }}" class="ty-btn ty-btn-ghost"><i class="fas fa-home"></i> Back to Home</a>
        <a href="https://wa.me/255685847002" class="ty-btn ty-btn-whatsapp" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp</a>
      </div>
    </div>
  </section>
  @endif
</div>
@endsection
