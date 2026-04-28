@extends('layouts.app')

@section('title', 'Payment | Jezdan Technology')

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
        Step 3 of 3
      </div>
      <h1 class="hero-title">
        Complete Your <span>Advance Payment</span>
      </h1>
      <p class="hero-subtitle">
        Order #{{ $order->order_number }} - 30% advance payment required to begin work.
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
<section class="services" style="padding: 80px 0;">
  <div class="container">
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

    @if($order->payment_status === 'pending')
    <div style="background: #fff3cd; border: 1px solid #ffc107; color: #856404; padding: 15px 20px; border-radius: 8px; margin-bottom: 30px; display: flex; align-items: center;">
      <i class="fas fa-clock" style="margin-right: 15px; font-size: 1.2rem;"></i>
      <div>
        <strong>Payment Pending</strong> - Reference: {{ $order->payment_reference }}<br>
        <small>Please check your phone for the USSD prompt to complete payment.</small>
      </div>
    </div>
    @endif

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
      
      <!-- Order Summary -->
      <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h2 style="margin-bottom: 25px; font-size: 1.5rem;">Order Summary</h2>
        
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
        
        <div style="margin-bottom: 20px;">
          <div style="color: #666; font-size: 0.9rem;">Order Number</div>
          <div style="font-weight: 700; font-size: 1.1rem;">{{ $order->order_number }}</div>
        </div>

        <div style="margin-bottom: 20px;">
          <div style="color: #666; font-size: 0.9rem;">Service</div>
          <div style="font-weight: 600;">{{ $serviceName }}</div>
        </div>

        <div style="margin-bottom: 20px;">
          <div style="color: #666; font-size: 0.9rem;">Package</div>
          <div style="font-weight: 600;">{{ $packageName }}</div>
        </div>

        <div style="margin-bottom: 20px;">
          <div style="color: #666; font-size: 0.9rem;">Selected Features</div>
          <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 8px;">
            @if($order->selected_features)
            @foreach($order->selected_features as $feature)
            <span style="background: var(--accent); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">
              {{ ucfirst(str_replace('_', ' ', $feature)) }}
            </span>
            @endforeach
            @else
            <span style="color: #999; font-style: italic;">No features selected</span>
            @endif
          </div>
        </div>

        <hr style="border: none; border-top: 1px solid #e0e0e0; margin: 25px 0;">

        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
          <span>Total Price</span>
          <span style="font-weight: 600;">TZS {{ number_format($order->total_price, 0) }}</span>
        </div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
          <span>Advance Payment (30%)</span>
          <span style="font-weight: 700; color: var(--accent); font-size: 1.2rem;">TZS {{ number_format($order->advance_payment, 0) }}</span>
        </div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
          <span>Remaining Balance</span>
          <span style="font-weight: 600;">TZS {{ number_format($order->remaining_balance, 0) }}</span>
        </div>
      </div>

      <!-- Payment Methods -->
      <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h2 style="margin-bottom: 25px; font-size: 1.5rem;">Payment Method</h2>
        
        <form action="{{ route('payment.initiate', ['order' => $order->id]) }}" method="POST">
          @csrf

          <div style="margin-bottom: 30px;">
            <label style="display: block; margin-bottom: 15px; font-weight: 600;">Select Payment Method</label>
            
            <div style="display: flex; flex-direction: column; gap: 15px;">
              <label style="display: flex; align-items: center; padding: 20px; border: 2px solid #e0e0e0; border-radius: 12px; cursor: pointer;">
                <input type="radio" name="payment_method" value="mobile" checked style="margin-right: 15px;">
                <div style="display: flex; align-items: center; flex: 1;">
                  <i class="fas fa-mobile-alt" style="font-size: 1.5rem; margin-right: 15px; color: #4CAF50;"></i>
                  <div>
                    <div style="font-weight: 600;">Mobile Payment</div>
                    <div style="font-size: 0.85rem; color: #666;">Pay via M-Pesa, TigoPesa, Airtel Money</div>
                  </div>
                </div>
              </label>

              <label style="display: flex; align-items: center; padding: 20px; border: 2px solid #e0e0e0; border-radius: 12px; cursor: pointer;">
                <input type="radio" name="payment_method" value="card" style="margin-right: 15px;">
                <div style="display: flex; align-items: center; flex: 1;">
                  <i class="fas fa-credit-card" style="font-size: 1.5rem; margin-right: 15px; color: #9C27B0;"></i>
                  <div>
                    <div style="font-weight: 600;">Card Payment</div>
                    <div style="font-size: 0.85rem; color: #666;">Pay via Visa, Mastercard, or debit card</div>
                  </div>
                </div>
              </label>
            </div>
          </div>

          <!-- Payment Instructions -->
          <div style="background: #f5f5f5; padding: 20px; border-radius: 8px; margin-bottom: 25px;">
            <h4 style="margin-bottom: 15px;">Payment Instructions</h4>
            <ul style="margin: 0; padding-left: 20px; color: #666; font-size: 0.9rem;">
              <li style="margin-bottom: 8px;">Mobile payment: Secure checkout via Snippe payment gateway (M-Pesa, TigoPesa, Airtel Money)</li>
              <li style="margin-bottom: 8px;">Card payment: Secure checkout via Visa, Mastercard, or debit card</li>
              <li>Advance payment amount: <strong>TZS {{ number_format($order->advance_payment, 0) }}</strong></li>
            </ul>
          </div>

          <button type="button" onclick="initiatePayment()" class="btn-primary" style="width: 100%; padding: 15px; font-size: 1.1rem; border-radius: 50px; border: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; cursor: pointer; transition: transform 0.2s;">
            <i class="fas fa-lock"></i> Pay TZS {{ number_format($order->advance_payment, 0) }} Now
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Payment Modal -->
<div id="paymentModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; align-items: center; justify-content: center;">
  <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; max-width: 400px; width: 90%;">
    <div style="margin-bottom: 30px;">
      <i class="fas fa-spinner fa-spin" style="font-size: 3rem; color: var(--accent);"></i>
    </div>
    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Initiating Payment</h3>
    <p style="color: #666; margin-bottom: 25px;">Please wait while we set up your secure payment...</p>
    
    <div style="background: #f0f0f0; border-radius: 10px; height: 10px; overflow: hidden; margin-bottom: 15px;">
      <div id="progressBar" style="background: linear-gradient(135deg, var(--accent), var(--accent-bright)); height: 100%; width: 0%; transition: width 0.3s;"></div>
    </div>
    
    <div id="progressText" style="font-size: 0.9rem; color: #666;">0%</div>
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
      <i class="fas fa-home" style="margin-right: 8px;"></i> Return to Home
    </button>
  </div>
</div>

<script>
// Invoice modal removed per user request

function closeSuccessModal() {
  const successModal = document.getElementById('successModal');
  successModal.style.display = 'none';
  window.location.href = '{{ url('/') }}';
}

function initiatePayment() {
  const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;
  
  // Show modal
  const modal = document.getElementById('paymentModal');
  modal.style.display = 'flex';
  
  // Animate progress bar from 0 to 100%
  let progress = 0;
  const progressBar = document.getElementById('progressBar');
  const progressText = document.getElementById('progressText');
  
  const interval = setInterval(() => {
    progress += 2; // Increment by 2 for smooth animation
    if (progress >= 100) {
      progress = 100;
      clearInterval(interval);
    }
    progressBar.style.width = progress + '%';
    progressText.textContent = Math.round(progress) + '%';
  }, 50); // Update every 50ms for smooth animation
  
  if (paymentMethod === 'mobile') {
    // Initiate mobile money payment (USSD push) - no redirect
    setTimeout(() => {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = '{{ route('payment.initiate', ['order' => $order->id]) }}';
      
      const csrfToken = document.createElement('input');
      csrfToken.type = 'hidden';
      csrfToken.name = '_token';
      csrfToken.value = '{{ csrf_token() }}';
      form.appendChild(csrfToken);
      
      const paymentMethodInput = document.createElement('input');
      paymentMethodInput.type = 'hidden';
      paymentMethodInput.name = 'payment_method';
      paymentMethodInput.value = 'mobile';
      form.appendChild(paymentMethodInput);
      
      document.body.appendChild(form);
      form.submit();
    }, 3000); // Wait 3 seconds for animation to complete
  } else if (paymentMethod === 'card') {
    // Initiate card payment - will redirect to secure checkout
    setTimeout(() => {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = '{{ route('payment.initiate', ['order' => $order->id]) }}';
      
      const csrfToken = document.createElement('input');
      csrfToken.type = 'hidden';
      csrfToken.name = '_token';
      csrfToken.value = '{{ csrf_token() }}';
      form.appendChild(csrfToken);
      
      const paymentMethodInput = document.createElement('input');
      paymentMethodInput.type = 'hidden';
      paymentMethodInput.name = 'payment_method';
      paymentMethodInput.value = 'card';
      form.appendChild(paymentMethodInput);
      
      document.body.appendChild(form);
      form.submit();
    }, 3000); // Wait 3 seconds for animation to complete
  }
}

// Check payment status every 10 seconds if pending
@if($order->payment_status === 'pending')
setInterval(() => {
  fetch('{{ route('payment.check.status', ['order' => $order->id]) }}')
    .then(response => response.json())
    .then(data => {
      if (data.status === 'completed') {
        // Show success modal instead of redirecting
        const paymentModal = document.getElementById('paymentModal');
        paymentModal.style.display = 'none';
        
        const successModal = document.getElementById('successModal');
        successModal.style.display = 'flex';
      }
    });
}, 10000);
@endif
</script>

<style>
input[type="radio"]:checked + div {
  border-color: var(--accent) !important;
  background: #f0f8ff;
}
</style>
@endsection
