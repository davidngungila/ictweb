@extends('layouts.app')

@section('title', 'Payment Confirmation | Jezdan Technology')

@section('content')
<!-- HERO -->
<section class="hero" style="min-height: 40vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Success
      </div>
      <h1 class="hero-title">
        Payment <span>Successful!</span>
      </h1>
      <p class="hero-subtitle">
        Thank you for your payment. Your order has been confirmed and we will begin work shortly.
      </p>
    </div>
  </div>
</section>

<!-- CONFIRMATION SECTION -->
<section class="services" style="padding: 80px 0;">
  <div class="container" style="max-width: 800px;">
    <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
      
      <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #00c896, #00a67e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
        <i class="fas fa-check" style="font-size: 3rem; color: white;"></i>
      </div>

      <h2 style="margin-bottom: 15px; font-size: 2rem;">Payment Completed Successfully</h2>
      <p style="color: #666; margin-bottom: 30px; font-size: 1.1rem;">
        Your advance payment of <strong>TZS {{ number_format($order->advance_payment, 0) }}</strong> has been received.
      </p>

      <div style="background: #f5f5f5; padding: 25px; border-radius: 8px; margin-bottom: 30px; text-align: left;">
        <h3 style="margin-bottom: 20px;">Order Details</h3>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-bottom: 15px;">
          <div>
            <div style="color: #666; font-size: 0.9rem;">Order Number</div>
            <div style="font-weight: 700;">{{ $order->order_number }}</div>
          </div>
          <div>
            <div style="color: #666; font-size: 0.9rem;">Payment Date</div>
            <div style="font-weight: 600;">{{ now()->format('M d, Y - H:i') }}</div>
          </div>
        </div>

        @if($order->service)
        <div style="margin-bottom: 15px;">
          <div style="color: #666; font-size: 0.9rem;">Service</div>
          <div style="font-weight: 600;">{{ $order->service->name }}</div>
        </div>
        @endif

        @if($order->package)
        <div style="margin-bottom: 15px;">
          <div style="color: #666; font-size: 0.9rem;">Package</div>
          <div style="font-weight: 600;">{{ $order->package->name }}</div>
        </div>
        @endif

        <div style="margin-bottom: 15px;">
          <div style="color: #666; font-size: 0.9rem;">Amount Paid</div>
          <div style="font-weight: 700; color: var(--accent); font-size: 1.2rem;">TZS {{ number_format($order->advance_payment, 0) }}</div>
        </div>

        <div style="margin-bottom: 15px;">
          <div style="color: #666; font-size: 0.9rem;">Remaining Balance</div>
          <div style="font-weight: 600;">TZS {{ number_format($order->remaining_balance, 0) }}</div>
        </div>
      </div>

      <div style="background: #fff3cd; padding: 20px; border-radius: 8px; margin-bottom: 30px; border-left: 4px solid #ffc107;">
        <h4 style="margin-bottom: 10px; color: #856404;">What's Next?</h4>
        <ul style="text-align: left; margin: 0; padding-left: 20px; color: #856404;">
          <li style="margin-bottom: 8px;">Our team will contact you within 24 hours to discuss your project details</li>
          <li style="margin-bottom: 8px;">You will receive a detailed project timeline via email</li>
          <li style="margin-bottom: 8px;">Work will begin after we receive all necessary information</li>
          <li>Remaining balance payment will be requested upon project completion</li>
        </ul>
      </div>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="{{ route('payment.receipt', ['order' => $order->id]) }}" class="btn-primary" style="padding: 12px 30px; border-radius: 50px; text-decoration: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; display: inline-block;">
          <i class="fas fa-download"></i> Download Receipt
        </a>
        <a href="{{ route('home') }}" class="btn-primary" style="padding: 12px 30px; border-radius: 50px; text-decoration: none; background: #6c757d; color: white; display: inline-block;">
          <i class="fas fa-home"></i> Return to Home
        </a>
        <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I've%20just%20made%20a%20payment%20for%20order%20{{ $order->order_number }}" target="_blank" style="padding: 12px 30px; border-radius: 50px; text-decoration: none; background: #25D366; color: white; display: inline-block;">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
