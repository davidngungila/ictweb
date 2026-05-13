{{-- Shared: package step 2 + payment page. Relies on .ict-plans-* CSS in parent view. --}}
@php
  $plans = \App\Support\PackagePricing::ictProjectPaymentPlansDetail();
@endphp
<div class="ict-plans-wrap">
  <h3 class="ict-plans-heading">
    <i class="fas fa-file-contract"></i> Preferred Payment Plans for ICT Projects &amp; Services
  </h3>
  <div class="ict-plans-grid">
    @foreach($plans as $plan)
      <article class="ict-plan-card" id="ict-plan-{{ $plan['id'] }}">
        <h4 class="ict-plan-title">{{ $plan['title'] }}</h4>
        <p class="ict-plan-tagline">{{ $plan['tagline'] }}</p>
        <p class="ict-plan-sub">Schedule</p>
        <ul class="ict-plan-list">
          @foreach($plan['schedule'] as $line)
            <li>{{ $line }}</li>
          @endforeach
        </ul>
        <p class="ict-plan-sub">Suitable for</p>
        <ul class="ict-plan-list ict-plan-suitable">
          @foreach($plan['suitable'] as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </article>
    @endforeach
  </div>
  <div class="ict-payment-legal-note" role="note">
    <i class="fas fa-info-circle" aria-hidden="true"></i>
    <p>{{ \App\Support\PackagePricing::paymentWorkLegalNote() }}</p>
  </div>
</div>
