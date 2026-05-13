@extends('pages.pricing')

@section('pricing_content')
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Home / Small Office</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Single router / access point</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">300K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Site survey & coverage planning</li>
          <li><i class="fas fa-check"></i> Single router / AP installation</li>
          <li><i class="fas fa-check"></i> Basic security configuration</li>
          <li><i class="fas fa-check"></i> Performance testing report</li>
          <li><i class="fas fa-check"></i> Network credentials documentation</li>
          <li><i class="fas fa-check"></i> Delivered in 1–3 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(3, 1) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Best Value</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Small Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Multi-AP with security</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">700K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi access-point deployment</li>
          <li><i class="fas fa-check"></i> Separate guest Wi-Fi network</li>
          <li><i class="fas fa-check"></i> Firewall & access control</li>
          <li><i class="fas fa-check"></i> Bandwidth management</li>
          <li><i class="fas fa-check"></i> SMS maintenance alerts</li>
          <li><i class="fas fa-check"></i> Delivered in 3–5 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(3, 2) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Hotel / Lodge / Office</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Multi-location enterprise grade</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.5M</span>
          <span class="pricing-period">– 4M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-location deployment</li>
          <li><i class="fas fa-check"></i> VLANs & enterprise security</li>
          <li><i class="fas fa-check"></i> 24/7 network monitoring</li>
          <li><i class="fas fa-check"></i> SLA up to 99.9% uptime</li>
          <li><i class="fas fa-check"></i> Optional CCTV integration</li>
          <li><i class="fas fa-check"></i> Delivered in 5–10 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(3, 3) }}" class="btn-package">Get Started</a>
      </div>
@endsection
