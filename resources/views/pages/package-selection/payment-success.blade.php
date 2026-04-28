@extends('layouts.app')

@section('title', 'Payment Successful - Package Selection')

@section('meta_tags')
  <meta name="description" content="Your payment has been successfully processed. Thank you for choosing Jezdan Technology.">
  <meta name="keywords" content="payment success, ICT services Tanzania, Jezdan Technology">
  <meta property="og:title" content="Payment Successful">
  <meta property="og:description" content="Your payment has been successfully processed. Thank you for choosing Jezdan Technology.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
@endsection

@section('content')
<style>
  .success-container {
    max-width: 700px;
    margin: 0 auto;
    text-align: center;
  }
  .success-icon {
    width: 120px;
    height: 120px;
    background: #00c896;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }
  .success-icon i {
    font-size: 60px;
    color: white;
  }
  .order-details {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    margin: 40px 0;
    text-align: left;
  }
  .order-detail-item {
    display: flex;
    justify-content: space-between;
    padding: 15px 0;
    border-bottom: 1px solid #f0f0f0;
  }
  .order-detail-item:last-child {
    border-bottom: none;
  }
  .order-detail-label {
    color: #666;
    font-weight: 500;
  }
  .order-detail-value {
    color: #333;
    font-weight: 600;
  }
  .next-steps {
    background: #f0f8ff;
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    border-left: 4px solid var(--accent);
  }
  .next-steps h3 {
    color: var(--accent);
    margin-bottom: 20px;
  }
  .next-steps ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .next-steps li {
    padding: 10px 0;
    color: #666;
  }
  .next-steps li i {
    color: #00c896;
    margin-right: 10px;
  }
</style>

<!-- HERO -->
<section class="hero" style="min-height: 40vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <h1 class="hero-title">
        Payment <span>Successful!</span>
      </h1>
      <p class="hero-subtitle">
        Thank you for choosing Jezdan Technology. Your order has been confirmed.
      </p>
    </div>
  </div>
</section>

<!-- SUCCESS CONTENT -->
<section class="services" style="padding: 60px 0;">
  <div class="container">
    <div class="success-container">
      <div class="success-icon">
        <i class="fas fa-check"></i>
      </div>
      
      <h2 style="font-size: 2rem; margin-bottom: 15px; color: #333;">Payment Received Successfully!</h2>
      <p style="color: #666; font-size: 1.1rem; margin-bottom: 40px;">
        We've received your 30% advance payment and your order is now being processed.
      </p>

      @if(isset($order))
      @php
        // Hardcoded services and packages
        $services = [
            1 => 'Web Development',
            2 => 'Mobile App Development',
            3 => 'Network Installation',
            4 => 'Cybersecurity',
            5 => 'IT Support',
            6 => 'ICT Consultancy',
        ];
        
        $packages = [
            1 => 'Starter Package',
            2 => 'Business Package',
            3 => 'Enterprise Package',
        ];
        
        $serviceName = $services[$order->service_id] ?? 'N/A';
        $packageName = $packages[$order->package_id] ?? 'N/A';
      @endphp
      <div class="order-details">
        <h3 style="margin-bottom: 25px; font-size: 1.5rem; color: var(--accent); border-bottom: 2px solid #f0f0f0; padding-bottom: 15px;">📋 Order Details</h3>
        
        <div class="order-detail-item">
          <span class="order-detail-label">Order Number</span>
          <span class="order-detail-value">{{ $order->order_number }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Client Name</span>
          <span class="order-detail-value">{{ $order->client_name }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Email</span>
          <span class="order-detail-value">{{ $order->client_email }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Phone</span>
          <span class="order-detail-value">{{ $order->client_phone }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Service</span>
          <span class="order-detail-value">{{ $serviceName }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Package</span>
          <span class="order-detail-value">{{ $packageName }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Total Price</span>
          <span class="order-detail-value">TZS {{ number_format($order->total_price, 0) }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Advance Payment (30%)</span>
          <span class="order-detail-value" style="color: #00c896;">TZS {{ number_format($order->advance_payment, 0) }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Remaining Balance</span>
          <span class="order-detail-value">TZS {{ number_format($order->remaining_balance, 0) }}</span>
        </div>
        <div class="order-detail-item">
          <span class="order-detail-label">Status</span>
          <span class="order-detail-value" style="color: #00c896;">{{ ucfirst($order->status) }}</span>
        </div>
      </div>

      <div class="next-steps">
        <h3>📅 What Happens Next?</h3>
        <ul>
          <li><i class="fas fa-check-circle"></i> You'll receive an email confirmation with your order details</li>
          <li><i class="fas fa-check-circle"></i> Our team will contact you within 24 hours to discuss your project</li>
          <li><i class="fas fa-check-circle"></i> We'll schedule a consultation to understand your requirements</li>
          <li><i class="fas fa-check-circle"></i> Project work begins after the consultation</li>
          <li><i class="fas fa-check-circle"></i> Remaining balance is due upon project completion</li>
        </ul>
      </div>

      <div style="display: flex; gap: 15px; margin-top: 30px;">
        <a href="{{ route('payment.receipt', $order->id) }}" class="btn-primary" style="flex: 1; padding: 15px; border-radius: 8px; border: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; text-decoration: none; font-weight: 600; text-align: center; transition: transform 0.2s;">
          <i class="fas fa-download"></i> Download Receipt
        </a>
        <a href="{{ url('/') }}" class="btn-secondary" style="flex: 1; padding: 15px; border-radius: 8px; border: 2px solid #e0e0e0; background: white; color: #666; text-decoration: none; font-weight: 600; text-align: center; transition: all 0.3s;">
          <i class="fas fa-home"></i> Back to Home
        </a>
      </div>
      @endif
    </div>
  </div>
</section>
@endsection
