@extends('layouts.app')

@section('title', 'Thank You | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Thank you for your payment. Jezdan Technology has received your order and our team will contact you shortly.">
  <meta name="keywords" content="Jezdan Technology thank you, payment success Tanzania, ICT order confirmation">
  <meta property="og:title" content="Thank You - Jezdan Technology">
  <meta property="og:description" content="Your payment has been received. We are preparing the next steps for your project.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  .thanks-wrap {
    max-width: 980px;
    margin: 0 auto;
  }

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

  .detail-key {
    color: #6a7380;
    font-size: 0.86rem;
    margin-bottom: 6px;
  }

  .detail-value {
    color: #222;
    font-weight: 700;
    word-break: break-word;
  }

  .next-box {
    margin-top: 20px;
    background: #f4f9ff;
    border-left: 4px solid var(--accent);
    border-radius: 10px;
    padding: 18px;
  }

  .next-box ul {
    margin: 10px 0 0;
    padding-left: 20px;
    color: #445066;
    line-height: 1.75;
  }

  .cta-row {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 22px;
  }

  .btn-solid {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: #fff;
    text-decoration: none;
    border-radius: 999px;
    padding: 12px 22px;
    font-weight: 700;
  }

  .btn-soft {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #f0f3f8;
    color: #263145;
    text-decoration: none;
    border-radius: 999px;
    padding: 12px 22px;
    font-weight: 700;
  }
</style>

@php
  $ref = request('ref');
  $orderId = request('order');
  $orderNumber = request('order_number');
  $orderFromRef = null;
  if (is_string($ref) && preg_match('/^[a-f0-9]{32}$/', $ref)) {
      $orderFromRef = \App\Models\PackageOrder::where('payment_page_token', $ref)->first();
  }
@endphp

<section class="hero" style="min-height: 36vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 840px; margin: 0 auto; text-align: center;">
      <div class="hero-badge"><span class="dot"></span>Jezdan Technology</div>
      <h1 class="hero-title">Thank You for <span>Your Payment</span></h1>
      <p class="hero-subtitle">Your project request is confirmed. Our team will reach out shortly to begin execution.</p>
    </div>
  </div>
</section>

<section class="services" style="padding: 60px 0;">
  <div class="container">
    <div class="thanks-wrap">
      <div class="thanks-card">
        <div class="ok-badge"><i class="fas fa-check"></i></div>
        <h2 style="text-align: center; margin-bottom: 8px;">Payment Received Successfully</h2>
        <p style="text-align: center; color: #596273; margin-bottom: 8px;">
          We appreciate your trust in Jezdan Technology. We are preparing your onboarding and project kickoff.
        </p>

        <div class="detail-grid">
          <div class="detail-item">
            <div class="detail-key">Order number</div>
            <div class="detail-value">{{ optional($orderFromRef)->order_number ?? $orderNumber ?? ($orderId ? 'ORD #' . $orderId : 'Will be shared by our team') }}</div>
          </div>
          <div class="detail-item">
            <div class="detail-key">Payment reference</div>
            <div class="detail-value">
              @if($orderFromRef && $orderFromRef->payment_page_token)
                {{ substr($orderFromRef->payment_page_token, 0, 8) }}…
              @elseif(is_string($ref) && $ref !== '')
                {{ strlen($ref) > 12 ? substr($ref, 0, 8).'…' : $ref }}
              @else
                —
              @endif
            </div>
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
            <li>Our team reviews your order and payment confirmation.</li>
            <li>You receive a follow-up call or WhatsApp message within 24 hours.</li>
            <li>We align on scope, timeline, and immediate kickoff steps.</li>
          </ul>
        </div>

        <div class="cta-row">
          <a href="{{ route('home') }}" class="btn-soft"><i class="fas fa-home"></i>Back to Home</a>
          <a href="{{ route('services') }}" class="btn-soft"><i class="fas fa-layer-group"></i>Explore Services</a>
          <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology,%20I%20have%20completed%20payment%20for%20my%20order." class="btn-solid" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i>Chat on WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
