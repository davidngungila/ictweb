@extends('layouts.app')

@section('title', 'Thank You | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Thank you for contacting Jezdan Technology. Our team will respond to your quote request shortly.">
  <meta name="robots" content="noindex">
@endsection

@section('content')
<style>
  .thanks-wrap { max-width: 980px; margin: 0 auto; }
  .thanks-card {
    background: #fff;
    border-radius: 18px;
    padding: 34px;
    box-shadow: 0 12px 34px rgba(0, 0, 0, 0.08);
  }
  .ok-badge {
    width: 92px;
    height: 92px;
    border-radius: 50%;
    margin: 0 auto 18px;
    background: linear-gradient(135deg, #00c896, #00a67e);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 2.1rem;
  }
  .detail-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 14px;
    margin: 22px 0 16px;
  }
  .detail-item {
    border: 1px solid #edf0f5;
    border-radius: 12px;
    padding: 13px 14px;
    background: #fafcff;
  }
  .detail-key { color: #6a7380; font-size: 0.86rem; margin-bottom: 6px; }
  .detail-value { color: #222; font-weight: 700; word-break: break-word; }
  .ref-mono { font-family: var(--font-mono); color: var(--accent); }
  .next-box {
    margin-top: 20px;
    background: #f4f9ff;
    border-left: 4px solid var(--accent);
    border-radius: 10px;
    padding: 18px;
  }
  .next-box ul { margin: 10px 0 0; padding-left: 20px; color: #445066; line-height: 1.75; }
  .cta-row { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 22px; }
  .btn-solid {
    display: inline-flex; align-items: center; gap: 8px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: #fff; text-decoration: none; border-radius: 999px; padding: 12px 22px; font-weight: 700;
  }
  .btn-soft {
    display: inline-flex; align-items: center; gap: 8px;
    background: #f0f3f8; color: #263145; text-decoration: none; border-radius: 999px; padding: 12px 22px; font-weight: 700;
  }
</style>

@php
  $isQuote = request('type') === 'quote';
  $reference = request('ref');
@endphp

<section class="hero" style="min-height: 36vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 840px; margin: 0 auto; text-align: center;">
      <div class="hero-badge"><span class="dot"></span>Jezdan Technology</div>
      <h1 class="hero-title">
        @if($isQuote)
          Quote Request <span>Received</span>
        @else
          Thank <span>You</span>
        @endif
      </h1>
      <p class="hero-subtitle">
        @if($isQuote)
          Our team will review your project and send a tailored official quote within 24 business hours.
        @else
          We appreciate you reaching out to Jezdan Technology.
        @endif
      </p>
    </div>
  </div>
</section>

<section class="services" style="padding: 60px 0;">
  <div class="container">
    <div class="thanks-wrap">
      <div class="thanks-card">
        <div class="ok-badge"><i class="fas fa-check"></i></div>
        <h2 style="text-align: center; margin-bottom: 8px;">
          @if($isQuote) Your quote request is on its way @else Message received @endif
        </h2>
        <p style="text-align: center; color: #596273; margin-bottom: 8px;">
          @if($isQuote)
            A confirmation email has been sent to you. Please save your reference number below.
          @else
            Our team will get back to you shortly.
          @endif
        </p>

        <div class="detail-grid">
          @if($isQuote && $reference)
          <div class="detail-item">
            <div class="detail-key">Quote reference</div>
            <div class="detail-value ref-mono">{{ $reference }}</div>
          </div>
          @endif
          <div class="detail-item">
            <div class="detail-key">Response time</div>
            <div class="detail-value">Within 24 business hours</div>
          </div>
          <div class="detail-item">
            <div class="detail-key">Support WhatsApp</div>
            <div class="detail-value">+255 685 847 002</div>
          </div>
          <div class="detail-item">
            <div class="detail-key">Support Email</div>
            <div class="detail-value">info@jezdantech.com</div>
          </div>
        </div>

        <div class="next-box">
          <strong>What happens next:</strong>
          <ul>
            @if($isQuote)
              <li>Our specialists review your project scope and selected services.</li>
              <li>You receive a custom official quote by email (and WhatsApp if needed).</li>
              <li>We schedule a call to align on timeline, deliverables, and next steps.</li>
              <li>Payment is arranged offline only — after you approve the quote.</li>
            @else
              <li>Our team reviews your message.</li>
              <li>You receive a follow-up within 24 business hours.</li>
            @endif
          </ul>
        </div>

        <div class="cta-row">
          <a href="{{ route('home') }}" class="btn-soft"><i class="fas fa-home"></i> Back to Home</a>
          <a href="{{ route('services') }}" class="btn-soft"><i class="fas fa-layer-group"></i> Explore Services</a>
          <a href="https://wa.me/255685847002?text={{ urlencode($isQuote && $reference ? "Hello Jezdan Technology, I submitted quote request {$reference}." : 'Hello Jezdan Technology, I need assistance.') }}" class="btn-solid" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
