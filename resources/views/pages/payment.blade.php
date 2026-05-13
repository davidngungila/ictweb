@extends('layouts.app')

@section('title', 'Payment | Jezdan Technology')

@section('content')
<style>
  .pay-shell { padding: clamp(36px, 6vw, 80px) 0; }
  .pay-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.15fr) minmax(0, 1fr);
    gap: clamp(20px, 4vw, 40px);
    align-items: start;
  }
  @media (max-width: 960px) {
    .pay-grid { grid-template-columns: 1fr; }
  }
  .pay-card {
    background: #fff;
    padding: clamp(18px, 4vw, 30px);
    border-radius: 14px;
    box-shadow: 0 4px 22px rgba(0,0,0,0.07);
    min-width: 0;
  }
  .pay-card h2 { font-size: clamp(1.15rem, 2.5vw, 1.45rem); margin-bottom: 1rem; }
  .pay-block { margin-bottom: 1.1rem; }
  .pay-label { color: #666; font-size: 0.85rem; margin-bottom: 4px; }
  .pay-value { font-weight: 600; font-size: 0.98rem; word-break: break-word; }
  .pay-row {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    flex-wrap: wrap;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    font-size: 0.95rem;
  }
  .pay-row:last-of-type { border-bottom: none; }
  @media (max-width: 480px) {
    .pay-row { flex-direction: column; align-items: flex-start; }
  }
  .pay-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 6px; }
  .pay-tag {
    background: #f0f8ff;
    color: var(--accent);
    padding: 5px 12px;
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 600;
    max-width: 100%;
  }
  .pay-list { margin: 0.35rem 0 0; padding-left: 1.1rem; color: #444; font-size: 0.9rem; line-height: 1.55; }
  .pay-list li { margin-bottom: 4px; }
  .pay-alert { display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; border-radius: 10px; margin-bottom: 22px; font-size: 0.92rem; line-height: 1.5; }
  .pay-method-label { display: flex; align-items: center; gap: 14px; padding: 16px; border: 2px solid #e6e6e6; border-radius: 12px; cursor: pointer; flex-wrap: wrap; }
  .pay-method-label input { flex-shrink: 0; }
  .ict-plans-wrap { margin-top: 4px; }
  .ict-plans-heading { font-size: 1.05rem; color: var(--accent); margin: 0 0 14px; display: flex; align-items: center; gap: 10px; flex-wrap: wrap; line-height: 1.35; }
  .ict-plans-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 220px), 1fr)); gap: 14px; }
  .ict-plan-card { border: 1px solid #e8edf5; border-radius: 12px; padding: 14px 16px; background: #fbfcff; }
  .ict-plan-title { font-size: 0.95rem; margin: 0 0 6px; color: #1a2744; }
  .ict-plan-tagline { font-size: 0.82rem; color: #555; margin: 0 0 10px; line-height: 1.45; }
  .ict-plan-sub { font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--accent); font-weight: 700; margin: 10px 0 4px; }
  .ict-plan-list { margin: 0; padding-left: 1rem; font-size: 0.8rem; color: #444; line-height: 1.5; }
  .ict-plan-suitable { list-style: disc; }
  .ict-payment-legal-note { display: flex; gap: 10px; align-items: flex-start; margin-top: 14px; padding: 12px 14px; background: #fff9e6; border: 1px solid #f5e6b3; border-radius: 10px; font-size: 0.82rem; color: #5c4813; line-height: 1.5; }
  .ict-payment-legal-note i { margin-top: 2px; flex-shrink: 0; color: #c9a227; }
  .ict-payment-legal-note p { margin: 0; }
  #paymentModal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.82); z-index: 9999; align-items: center; justify-content: center; padding: 20px; }
  .payment-modal-inner {
    background: #fff;
    padding: clamp(28px, 5vw, 40px);
    border-radius: 20px;
    text-align: center;
    max-width: 420px;
    width: 100%;
  }
  #paymentCountdownWrap { margin: 18px 0 8px; }
  #paymentCountdown {
    font-size: clamp(1.6rem, 5vw, 2.1rem);
    font-weight: 800;
    color: var(--accent);
    font-variant-numeric: tabular-nums;
    letter-spacing: 0.04em;
  }
  #paymentModalSubtitle { color: #555; line-height: 1.55; font-size: 0.95rem; margin-bottom: 8px; }
  #paymentModalCancel {
    margin-top: 18px;
    background: none;
    border: none;
    color: #888;
    text-decoration: underline;
    cursor: pointer;
    font-size: 0.9rem;
  }
  #paymentModalCancel:hover { color: var(--accent); }
</style>
<!-- HERO -->
<section class="hero" style="min-height: min(42vh, 360px);">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Step 3 of 3
      </div>
      <h1 class="hero-title">
        Complete Your <span>Advance Payment</span>
      </h1>
      @php
        $advPctPay = \App\Support\PackagePricing::advancePercentForPlan($order->payment_plan ?? null);
      @endphp
      <p class="hero-subtitle">
        Order #{{ $order->order_number }} — <strong>{{ $advPctPay }}% deposit</strong> due now (per your preferred plan). Total project: TZS {{ number_format($order->total_price, 0) }}.
      </p>
    </div>
  </div>
</section>

<!-- Progress Bar -->
<div style="background: white; padding: 25px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
  <div class="container">
    <div style="width: 100%; height: 8px; background: #e0e0e0; border-radius: 4px; overflow: hidden;">
      <div style="height: 100%; background: linear-gradient(90deg, var(--accent), var(--accent-bright)); width: 100%;"></div>
    </div>
    <div style="text-align: center; margin-top: 10px; font-weight: 600; color: var(--accent);">100% Complete</div>
  </div>
</div>

<!-- PAYMENT SECTION -->
<section class="services pay-shell">
  <div class="container" style="max-width: 1180px;">
    @if(session('success'))
    <div style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 15px 20px; border-radius: 8px; margin-bottom: 30px; display: flex; align-items: center;">
      <i class="fas fa-check-circle" style="margin-right: 15px; font-size: 1.2rem;"></i>
      <div>{{ session('success') }}</div>
    </div>
    @endif

    @if(session('error'))
    <div style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 15px 20px; border-radius: 8px; margin-bottom: 30px; display: flex; align-items: center;">
      <i class="fas fa-exclamation-circle" style="margin-right: 15px; font-size: 1.2rem;"></i>
      <div>{{ session('error') }}</div>
    </div>
    @endif

    @if(in_array($order->payment_status, ['pending', 'initiated']))
    <div style="background: #fff3cd; border: 1px solid #ffc107; color: #856404; padding: 15px 20px; border-radius: 8px; margin-bottom: 30px; display: flex; align-items: center;">
      <i class="fas fa-clock" style="margin-right: 15px; font-size: 1.2rem;"></i>
      <div>
        <strong>Payment Pending</strong>@if($order->payment_reference) - Reference: {{ $order->payment_reference }}@endif<br>
        <small>Please check your phone for the USSD prompt to complete payment.</small>
      </div>
    </div>
    @endif

    <div class="pay-grid">
      <!-- Order summary -->
      <div class="pay-card">
        <h2><i class="fas fa-receipt" style="margin-right:8px;"></i> Order summary</h2>

        @php
          $services = [
              1 => 'Web Development',
              2 => 'Mobile App Development',
              3 => 'Network Installation',
              4 => 'Cybersecurity',
              5 => 'IT Support',
              6 => 'ICT Consultancy',
          ];
          $pkg = \App\Support\PackagePricing::package((int) $order->service_id, (int) $order->package_id);
          $serviceName = $services[$order->service_id] ?? 'N/A';
          $packageName = $pkg['name'] ?? 'N/A';
          $addonLabels = \App\Support\PackagePricing::addonLabels();
          $pkgFeatures = ! empty($order->selected_features) ? $order->selected_features : ($pkg['features'] ?? []);
        @endphp

        <div class="pay-block">
          <div class="pay-label">Order number</div>
          <div class="pay-value">{{ $order->order_number }}</div>
        </div>

        <div class="pay-block">
          <div class="pay-label">Client</div>
          <div class="pay-value">{{ $order->client_name }}</div>
          <div class="pay-value" style="font-weight:500;font-size:0.9rem;">{{ $order->client_email }}</div>
          <div class="pay-value" style="font-weight:500;font-size:0.9rem;">{{ $order->client_phone }}</div>
        </div>

        @if($order->company_name)
        <div class="pay-block">
          <div class="pay-label">Company</div>
          <div class="pay-value">{{ $order->company_name }}</div>
        </div>
        @endif

        <div class="pay-row"><span class="pay-label" style="margin:0;">Service</span><span class="pay-value" style="text-align:right;">{{ $serviceName }}</span></div>
        <div class="pay-row"><span class="pay-label" style="margin:0;">Package</span><span class="pay-value" style="text-align:right;">{{ $packageName }}</span></div>

        <div class="pay-block" style="margin-top:14px;">
          <div class="pay-label">Preferred payment plan</div>
          <div class="pay-value">{{ \App\Support\PackagePricing::paymentPlanLabel($order->payment_plan ?? null) }}</div>
          <div class="pay-label" style="margin-top:8px;">Timeline priority</div>
          <div class="pay-value">{{ ucfirst(str_replace('_', ' ', $order->timeline_priority ?? 'standard')) }}</div>
        </div>

        <div class="pay-block">
          <div class="pay-label">Package includes</div>
          @if(!empty($pkgFeatures))
            <ul class="pay-list">
              @foreach($pkgFeatures as $feature)
                <li>{{ is_string($feature) ? $feature : json_encode($feature) }}</li>
              @endforeach
            </ul>
          @else
            <span style="color:#999;font-size:0.9rem;font-style:italic;">Details on file with your consultant.</span>
          @endif
        </div>

        <div class="pay-block">
          <div class="pay-label">Selected add-ons</div>
          @if($order->selected_addons && count($order->selected_addons))
            <div class="pay-tags">
              @foreach($order->selected_addons as $slug)
                <span class="pay-tag">{{ $addonLabels[$slug] ?? ucfirst(str_replace('_', ' ', $slug)) }}</span>
              @endforeach
            </div>
          @else
            <span style="color:#999;font-size:0.9rem;font-style:italic;">No add-ons for this order.</span>
          @endif
        </div>

        @if($order->notes)
        <div class="pay-block">
          <div class="pay-label">Notes on file</div>
          <div class="pay-value" style="font-weight:500;font-size:0.88rem;white-space:pre-wrap;">{{ \Illuminate\Support\Str::limit(strip_tags($order->notes), 800) }}</div>
        </div>
        @endif

        <hr style="border:none;border-top:1px solid #e8e8e8;margin:18px 0;">

        <div class="pay-row"><span>Project total</span><span style="font-weight:700;">TZS {{ number_format($order->total_price, 0) }}</span></div>
        <div class="pay-row">
          <span>Deposit due now ({{ $advPctPay }}%)</span>
          <span style="font-weight:800;color:var(--accent);font-size:1.05rem;">TZS {{ number_format($order->advance_payment, 0) }}</span>
        </div>
        <div class="pay-row"><span>Remaining after this payment</span><span style="font-weight:600;">TZS {{ number_format($order->remaining_balance, 0) }}</span></div>
      </div>

      <!-- Payment methods -->
      <div class="pay-card">
        <h2><i class="fas fa-lock" style="margin-right:8px;"></i> Pay deposit</h2>
        <p style="color:#666;font-size:0.9rem;line-height:1.5;margin-bottom:1.25rem;">Pay <strong>TZS {{ number_format($order->advance_payment, 0) }}</strong> securely. This matches your selected plan’s first milestone.</p>

        <form id="paymentForm" action="{{ route('payment.initiate', ['checkout' => $order->payment_page_token]) }}" method="POST">
          @csrf

          <div id="payment-page-data"
            data-initiate-url="{{ route('payment.initiate', ['checkout' => $order->payment_page_token]) }}"
            data-check-url="{{ route('payment.check.status', ['checkout' => $order->payment_page_token]) }}"
            data-thank-url="{{ route('thank.you') }}?{{ http_build_query(array_merge(['order_number' => $order->order_number], $order->payment_page_token ? ['ref' => $order->payment_page_token] : ['order' => $order->id])) }}"
            data-csrf="{{ csrf_token() }}"
            data-awaiting-mobile="{{ (in_array($order->payment_status, ['pending', 'initiated'], true) && $order->payment_reference) ? '1' : '0' }}"
            style="display:none;"
          ></div>
          <div style="margin-bottom: 1.25rem;">
            <span style="font-weight: 600; display:block; margin-bottom: 10px;">Payment method</span>
            <div style="display: flex; flex-direction: column; gap: 12px;">
              <label class="pay-method-label">
                <input type="radio" name="payment_method" value="mobile" checked>
                <div style="display:flex;align-items:center;gap:12px;flex:1;min-width:0;">
                  <i class="fas fa-mobile-alt" style="font-size:1.4rem;color:#4CAF50;flex-shrink:0;"></i>
                  <div>
                    <div style="font-weight:600;">Mobile money</div>
                    <div style="font-size:0.82rem;color:#666;">M-Pesa, TigoPesa, Airtel Money (Snippe)</div>
                  </div>
                </div>
              </label>
              <label class="pay-method-label">
                <input type="radio" name="payment_method" value="card">
                <div style="display:flex;align-items:center;gap:12px;flex:1;min-width:0;">
                  <i class="fas fa-credit-card" style="font-size:1.4rem;color:#9C27B0;flex-shrink:0;"></i>
                  <div>
                    <div style="font-weight:600;">Card</div>
                    <div style="font-size:0.82rem;color:#666;">Visa, Mastercard, debit</div>
                  </div>
                </div>
              </label>
            </div>
          </div>

          <div style="background:#f7f9fc;padding:16px;border-radius:10px;margin-bottom:1.25rem;font-size:0.88rem;color:#555;line-height:1.55;">
            <strong style="color:#333;">Instructions</strong>
            <ul style="margin:8px 0 0;padding-left:1.1rem;">
              <li>Mobile: you may receive a USSD prompt on the phone number on this order.</li>
              <li>Card: you will be redirected to secure checkout.</li>
              <li>Amount to pay now: <strong>TZS {{ number_format($order->advance_payment, 0) }}</strong></li>
            </ul>
          </div>

          <button id="payNowButton" type="button" onclick="initiatePayment()" class="btn-primary" style="width:100%;padding:14px 18px;font-size:1.05rem;border-radius:12px;border:none;background:linear-gradient(135deg,var(--accent),var(--accent-bright));color:#fff;cursor:pointer;" @if(in_array($order->payment_status, ['pending', 'initiated'], true) && $order->payment_reference) disabled @endif>
            <i class="fas fa-lock"></i> <span id="payButtonText">@if(in_array($order->payment_status, ['pending', 'initiated'], true) && $order->payment_reference)Waiting for phone confirmation…@else Pay TZS {{ number_format($order->advance_payment, 0) }} now @endif</span>
          </button>
        </form>
      </div>
    </div>

    <div class="pay-card" style="margin-top: clamp(18px, 3vw, 28px); padding: 16px 18px; font-size: 0.88rem; color: #555; line-height: 1.55;">
      {{ \App\Support\PackagePricing::paymentWorkLegalNote() }}
    </div>
  </div>
</section>

<!-- Payment Modal -->
<div id="paymentModal" role="dialog" aria-modal="true" aria-labelledby="paymentModalTitle">
  <div class="payment-modal-inner">
    <div style="margin-bottom: 22px;">
      <i class="fas fa-spinner fa-spin" id="paymentModalSpinner" style="font-size: 2.75rem; color: var(--accent);"></i>
      <i class="fas fa-mobile-screen-button" id="paymentModalPhone" style="font-size: 2.75rem; color: var(--accent); display: none;"></i>
    </div>
    <h3 id="paymentModalTitle" style="margin-bottom: 12px; font-size: 1.25rem; color: #1a2744;">Connecting…</h3>
    <p id="paymentModalSubtitle">Reaching the payment gateway securely.</p>
    <div id="paymentCountdownWrap" style="display: none;">
      <div id="paymentCountdown">1:00</div>
      <p style="font-size: 0.82rem; color: #666; margin-top: 6px;">Approve on your phone when prompted. We check every second for up to 1 minute.</p>
    </div>
    <div id="progressBarContainer" style="background: #eee; border-radius: 10px; height: 8px; overflow: hidden; margin-top: 16px;">
      <div id="progressBar" style="background: linear-gradient(90deg, var(--accent), var(--accent-bright)); height: 100%; width: 0%; transition: width 0.35s ease;"></div>
    </div>
    <div id="progressText" style="font-size: 0.82rem; color: #888; margin-top: 10px;"></div>
    <button type="button" id="paymentModalCancel" style="display: none;">Close and try later</button>
  </div>
</div>

<!-- Invoice Modal -->
<!-- Removed per user request -->

<!-- Payment Success Modal -->
<div id="successModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 10001; align-items: center; justify-content: center;">
  <div style="background: white; padding: 50px; border-radius: 20px; text-align: center; max-width: 500px; width: 90%;">
    <div style="margin-bottom: 30px;">
      <i class="fas fa-check-circle" style="font-size: 4rem; color: #00c896;"></i>
    </div>
    <h2 style="margin-bottom: 15px; font-size: 1.5rem; color: #333;">Payment Successful!</h2>
    <p style="color: #666; margin-bottom: 30px;">
      Thank you! Your payment of <strong>TZS {{ number_format($order->advance_payment, 0) }}</strong> has been successfully received.
    </p>
    <div style="background: #f0f8ff; padding: 20px; border-radius: 10px; margin-bottom: 30px; text-align: left;">
      <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
        <span style="color: #666;">Order Number:</span>
        <span style="font-weight: 600;">{{ $order->order_number }}</span>
      </div>
      <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
        <span style="color: #666;">Amount Paid:</span>
        <span style="font-weight: 600; color: #00c896;">TZS {{ number_format($order->advance_payment, 0) }}</span>
      </div>
      <div style="display: flex; justify-content: space-between;">
        <span style="color: #666;">Remaining Balance:</span>
        <span style="font-weight: 600;">TZS {{ number_format($order->remaining_balance, 0) }}</span>
      </div>
    </div>
    <button onclick="closeSuccessModal()" class="btn-primary" style="padding: 15px 40px;">
      <i class="fas fa-check" style="margin-right: 8px;"></i> Continue to thank you page
    </button>
  </div>
</div>

<script>
(function () {
  const cfg = document.getElementById('payment-page-data');
  if (!cfg) return;

  const INITIATE_URL = cfg.dataset.initiateUrl;
  const CHECK_URL = cfg.dataset.checkUrl;
  const THANK_URL = cfg.dataset.thankUrl;
  const THANK_FALLBACK = @json(route('thank.you'));
  const CSRF = cfg.dataset.csrf;
  const MOBILE_WAIT_SEC = 60;
  const POLL_MS = 1000;
  const MAX_POLL_MS = 2 * 60 * 60 * 1000;

  let sessionAwaiting = cfg.dataset.awaitingMobile === '1';

  let pollTimer = null;
  let countdownTimer = null;
  let pollStartedAt = 0;

  function getModal() { return document.getElementById('paymentModal'); }
  function getEl(id) { return document.getElementById(id); }

  function showModal() {
    const m = getModal();
    m.style.display = 'flex';
  }

  function hideModal() {
    const m = getModal();
    m.style.display = 'none';
  }

  function stopTimers() {
    if (pollTimer) clearInterval(pollTimer);
    pollTimer = null;
    if (countdownTimer) clearInterval(countdownTimer);
    countdownTimer = null;
  }

  function setConnectingPhase() {
    getEl('paymentModalTitle').textContent = 'Connecting…';
    getEl('paymentModalSubtitle').textContent = 'Reaching the payment gateway securely.';
    getEl('paymentCountdownWrap').style.display = 'none';
    getEl('paymentModalSpinner').style.display = 'inline-block';
    getEl('paymentModalPhone').style.display = 'none';
    getEl('progressBar').style.width = '35%';
    getEl('progressText').textContent = '';
    getEl('paymentModalCancel').style.display = 'none';
  }

  function setWaitingPhase() {
    getEl('paymentModalTitle').textContent = 'Waiting for confirmation…';
    getEl('paymentModalSubtitle').textContent = 'Complete the payment on your phone when you receive the prompt. This page updates automatically.';
    getEl('paymentCountdownWrap').style.display = 'block';
    getEl('paymentModalSpinner').style.display = 'none';
    getEl('paymentModalPhone').style.display = 'inline-block';
    getEl('paymentModalCancel').style.display = 'inline';
  }

  function formatMmSs(sec) {
    const s = Math.max(0, Math.floor(sec));
    const m = Math.floor(s / 60);
    const r = s % 60;
    return m + ':' + String(r).padStart(2, '0');
  }

  function resetPayButton() {
    const button = getEl('payNowButton');
    const buttonText = getEl('payButtonText');
    if (button) {
      button.disabled = false;
      button.style.opacity = '1';
      button.style.cursor = 'pointer';
    }
    if (buttonText) {
      buttonText.textContent = 'Pay TZS {{ number_format($order->advance_payment, 0) }} now';
    }
  }

  async function postInitiate(paymentMethod) {
    const fd = new FormData();
    fd.append('_token', CSRF);
    fd.append('payment_method', paymentMethod);
    const res = await fetch(INITIATE_URL, {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: fd,
      credentials: 'same-origin',
    });
    const data = await res.json().catch(function () { return {}; });
    if (!res.ok || data.ok === false) {
      const msg = data.message || (data.errors && JSON.stringify(data.errors)) || 'Payment could not be started.';
      throw new Error(typeof msg === 'string' ? msg : 'Payment could not be started.');
    }
    return data;
  }

  async function checkOnce() {
    const res = await fetch(CHECK_URL, {
      headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
      credentials: 'same-origin',
    });
    return res.json();
  }

  function goThankYou() {
    stopTimers();
    window.location.href = THANK_URL || THANK_FALLBACK;
  }

  function beginMobilePollingAndCountdown() {
    sessionAwaiting = true;
    stopTimers();
    setWaitingPhase();
    pollStartedAt = Date.now();

    let left = MOBILE_WAIT_SEC;
    const cdEl = getEl('paymentCountdown');
    const bar = getEl('progressBar');
    cdEl.textContent = formatMmSs(left);
    bar.style.width = '100%';

    countdownTimer = setInterval(function () {
      left -= 1;
      cdEl.textContent = formatMmSs(left);
      bar.style.width = Math.max(0, (left / MOBILE_WAIT_SEC) * 100) + '%';
      if (left <= 0) {
        if (countdownTimer) clearInterval(countdownTimer);
        countdownTimer = null;
        cdEl.textContent = '0:00';
        bar.style.width = '0%';
        if (pollTimer) clearInterval(pollTimer);
        pollTimer = null;
        hideModal();
        alert('We could not confirm payment within 1 minute. If you paid, refresh this page or contact support.');
        resetPayButton();
      }
    }, 1000);

    async function tick() {
      if (Date.now() - pollStartedAt > MAX_POLL_MS) {
        stopTimers();
        hideModal();
        alert('We could not confirm payment within the maximum wait time. If you paid, refresh this page or contact support.');
        resetPayButton();
        return;
      }
      try {
        const data = await checkOnce();
        if (data.status === 'completed') {
          goThankYou();
          return;
        }
        if (data.status === 'failed') {
          stopTimers();
          hideModal();
          alert('Payment was declined or failed. You can try again.');
          resetPayButton();
        }
      } catch (e) {
        /* ignore transient network errors; next tick retries */
      }
    }

    tick();
    pollTimer = setInterval(tick, POLL_MS);
  }

  window.initiatePayment = async function () {
    const form = getEl('paymentForm');
    const button = getEl('payNowButton');
    const buttonText = getEl('payButtonText');
    const methodInput = form.querySelector('input[name="payment_method"]:checked');
    if (!form || !button || !buttonText || !methodInput) return;

    const method = methodInput.value;

    button.disabled = true;
    button.style.opacity = '0.85';
    button.style.cursor = 'wait';
    buttonText.textContent = method === 'card' ? 'Opening secure checkout…' : 'Starting mobile payment…';

    showModal();
    setConnectingPhase();

    try {
      if (method === 'card') {
        const data = await postInitiate('card');
        if (data.redirect_url) {
          window.location.href = data.redirect_url;
          return;
        }
        throw new Error('No checkout URL returned.');
      }

      await postInitiate('mobile');
      beginMobilePollingAndCountdown();
    } catch (err) {
      hideModal();
      resetPayButton();
      alert(err.message || 'Something went wrong.');
    }
  };

  getEl('paymentModalCancel').addEventListener('click', function () {
    stopTimers();
    hideModal();
    if (sessionAwaiting) {
      const b = getEl('payNowButton');
      const t = getEl('payButtonText');
      if (b) b.disabled = true;
      if (t) t.textContent = 'Payment pending — refresh this page after paying on your phone';
    } else {
      resetPayButton();
    }
  });

  document.addEventListener('DOMContentLoaded', function () {
    if (cfg.dataset.awaitingMobile === '1') {
      showModal();
      beginMobilePollingAndCountdown();
    }
  });
})();

function closeSuccessModal() {
  const cfg = document.getElementById('payment-page-data');
  const fallback = @json(route('thank.you'));
  document.getElementById('successModal').style.display = 'none';
  window.location.href = (cfg && cfg.dataset.thankUrl) ? cfg.dataset.thankUrl : fallback;
}
</script>

<style>
.pay-method-label:has(input:checked) {
  border-color: var(--accent);
  background: #f0f8ff;
}
</style>
@endsection
