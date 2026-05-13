@extends('pages.pricing')

@section('pricing_content')
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">App Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Android + iOS informational apps</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 6M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Flutter / React Native (Android + iOS)</li>
          <li><i class="fas fa-check"></i> Information, gallery, maps, contact</li>
          <li><i class="fas fa-check"></i> SMS push notifications</li>
          <li><i class="fas fa-check"></i> App Store & Google Play submission</li>
          <li><i class="fas fa-check"></i> Analytics dashboard</li>
          <li><i class="fas fa-check"></i> Delivered in 4–6 weeks</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(2, 1) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">App Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Full-featured booking & payments</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">6M</span>
          <span class="pricing-period">– 12M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> All Basic features included</li>
          <li><i class="fas fa-check"></i> User accounts & profiles</li>
          <li><i class="fas fa-check"></i> Booking & reservation system</li>
          <li><i class="fas fa-check"></i> Mobile money payment integration</li>
          <li><i class="fas fa-check"></i> Push notifications</li>
          <li><i class="fas fa-check"></i> Delivered in 6–10 weeks</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(2, 2) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">App Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Custom multi-role platforms</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">12M</span>
          <span class="pricing-period">– 25M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Multi-role: admin, driver, customer</li>
          <li><i class="fas fa-check"></i> Real-time GPS tracking</li>
          <li><i class="fas fa-check"></i> API integrations (3rd party)</li>
          <li><i class="fas fa-check"></i> Custom backend & dashboard</li>
          <li><i class="fas fa-check"></i> Full white-label branding</li>
          <li><i class="fas fa-check"></i> Delivered in 10–14 weeks</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(2, 3) }}" class="btn-package">Get Started</a>
      </div>
@endsection
