@extends('pages.pricing')

@section('pricing_content')
      <!-- BASIC -->
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Basic Protection</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">One-off security setup</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">300K</span>
          <span class="pricing-period">– 600K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full vulnerability scan</li>
          <li><i class="fas fa-check"></i> Malware detection & removal</li>
          <li><i class="fas fa-check"></i> Firewall configuration</li>
          <li><i class="fas fa-check"></i> SMS threat alerts setup</li>
          <li><i class="fas fa-check"></i> Security report delivered</li>
          <li><i class="fas fa-check"></i> Completed in 2–5 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(4, 1) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- STANDARD -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Recommended</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Monthly Retainer</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Ongoing business protection</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">600K</span>
          <span class="pricing-period">– 1.2M/mo</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 24/7 security monitoring</li>
          <li><i class="fas fa-check"></i> Weekly vulnerability scans</li>
          <li><i class="fas fa-check"></i> Incident response team</li>
          <li><i class="fas fa-check"></i> Email security protection</li>
          <li><i class="fas fa-check"></i> Analytics security dashboard</li>
          <li><i class="fas fa-check"></i> Monthly security reports</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(4, 2) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">SOC & Compliance</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Full compliance package</p>
        <div class="pricing-price">
          <span class="pricing-currency">Custom</span>
          <span class="pricing-amount">Pricing</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full Security Operations Center</li>
          <li><i class="fas fa-check"></i> Penetration testing</li>
          <li><i class="fas fa-check"></i> ISO 27001, TCRA & GDPR compliance</li>
          <li><i class="fas fa-check"></i> Custom security reporting</li>
          <li><i class="fas fa-check"></i> Dedicated security analyst</li>
          <li><i class="fas fa-check"></i> Ongoing retainer</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(4, 3) }}" class="btn-package">Request Quote</a>
      </div>
@endsection
