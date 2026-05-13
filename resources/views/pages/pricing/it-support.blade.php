@extends('pages.pricing')

@section('pricing_content')
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Remote Support</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small teams, weekday coverage</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">150K</span>
          <span class="pricing-period">– 300K/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Remote support only</li>
          <li><i class="fas fa-check"></i> 9am–5pm, Mon–Fri</li>
          <li><i class="fas fa-check"></i> 2-hour response time</li>
          <li><i class="fas fa-check"></i> SMS ticket system</li>
          <li><i class="fas fa-check"></i> Up to 5 devices supported</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(5, 1) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Remote + On-site</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">300K</span>
          <span class="pricing-period">– 600K/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Remote + on-site support</li>
          <li><i class="fas fa-check"></i> 8am–6pm, Mon–Sat</li>
          <li><i class="fas fa-check"></i> 1-hour response time</li>
          <li><i class="fas fa-check"></i> Monthly analytics reports</li>
          <li><i class="fas fa-check"></i> Unlimited devices</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(5, 2) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">24/7 Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Hotels, NGOs, large offices</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">600K</span>
          <span class="pricing-period">– 1.2M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 24/7 on-site availability</li>
          <li><i class="fas fa-check"></i> 30-minute response time</li>
          <li><i class="fas fa-check"></i> 99.9% SLA uptime</li>
          <li><i class="fas fa-check"></i> Dedicated account manager</li>
          <li><i class="fas fa-check"></i> Priority escalation path</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(5, 3) }}" class="btn-package">Get Started</a>
      </div>
@endsection
