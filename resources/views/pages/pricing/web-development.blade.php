@extends('pages.pricing')

@section('pricing_content')
      <!-- STARTER -->
      <div class="pricing-card">
        <div class="pricing-tier">Starter</div>
        <div class="pricing-name">Web Starter</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Individuals & small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">400K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 1–5 pages, mobile-responsive</li>
          <li><i class="fas fa-check"></i> Contact form with spam protection</li>
          <li><i class="fas fa-check"></i> WhatsApp button integration</li>
          <li><i class="fas fa-check"></i> Social media links</li>
          <li><i class="fas fa-check"></i> Google Maps location</li>
          <li><i class="fas fa-check"></i> Free domain + hosting (1 year)</li>
          <li><i class="fas fa-check"></i> Delivered in 4–7 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 1) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- BUSINESS -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Business</div>
        <div class="pricing-name">Web Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing companies</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">800K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 8–15 pages with full CMS</li>
          <li><i class="fas fa-check"></i> Blog with SEO-rich content</li>
          <li><i class="fas fa-check"></i> Advanced analytics dashboard</li>
          <li><i class="fas fa-check"></i> Professional email accounts</li>
          <li><i class="fas fa-check"></i> SSL + full security setup</li>
          <li><i class="fas fa-check"></i> Delivered in 7–12 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 2) }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- E-COMMERCE -->
      <div class="pricing-card">
        <div class="pricing-tier">E-Commerce</div>
        <div class="pricing-name">Online Store</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Selling online in Tanzania</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.5M</span>
          <span class="pricing-period">– 2.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 10–20 pages with product catalogue</li>
          <li><i class="fas fa-check"></i> Shopping cart & checkout</li>
          <li><i class="fas fa-check"></i> M-Pesa, TigoPesa & AzamPesa</li>
          <li><i class="fas fa-check"></i> Order management dashboard</li>
          <li><i class="fas fa-check"></i> SMS order confirmations</li>
          <li><i class="fas fa-check"></i> Delivered in 10–15 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 3) }}" class="btn-package">Get Started</a>
      </div>
@endsection
