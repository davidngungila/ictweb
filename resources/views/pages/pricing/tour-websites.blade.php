@extends('pages.pricing')

@section('pricing_content')
      <!-- STARTER -->
      <div class="pricing-card">
        <div class="pricing-tier">Starter</div>
        <div class="pricing-name">Tour Starter</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Best for solo guides & new startups</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">400K</span>
          <span class="pricing-period">– 700K</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 1–5 Pages (Home, About, Tours, Contact)</li>
          <li><i class="fas fa-check"></i> Basic tour listing with descriptions & pricing</li>
          <li><i class="fas fa-check"></i> Photo gallery (up to 20 photos)</li>
          <li><i class="fas fa-check"></i> WhatsApp & phone call-to-action booking</li>
          <li><i class="fas fa-check"></i> 50 SMS credits included</li>
          <li><i class="fas fa-check"></i> Basic Google Analytics</li>
          <li><i class="fas fa-check"></i> Free domain + hosting (1 year)</li>
          <li><i class="fas fa-check"></i> Delivered in 4–7 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 1, 'tour') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- BUSINESS -->
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Business</div>
        <div class="pricing-name">Tour Business</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing safari operators</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">800K</span>
          <span class="pricing-period">– 1.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> 8–15 Pages with blog & testimonials</li>
          <li><i class="fas fa-check"></i> Calendar-based booking engine</li>
          <li><i class="fas fa-check"></i> M-Pesa, TigoPesa & AzamPesa payments</li>
          <li><i class="fas fa-check"></i> Safari package management panel</li>
          <li><i class="fas fa-check"></i> Video embedding (safari footage)</li>
          <li><i class="fas fa-check"></i> 200 SMS credits included</li>
          <li><i class="fas fa-check"></i> Advanced Analytics & conversion funnels</li>
          <li><i class="fas fa-check"></i> Delivered in 7–12 days</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 2, 'tour') }}" class="btn-package">Get Started</a>
      </div>
      
      <!-- ENTERPRISE -->
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Tour Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Kilimanjaro specialists & large operators</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1.8M</span>
          <span class="pricing-period">– 3.5M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Unlimited pages — fully custom</li>
          <li><i class="fas fa-check"></i> Full tour management admin panel</li>
          <li><i class="fas fa-check"></i> Multi-currency & multi-language (EN/DE/FR)</li>
          <li><i class="fas fa-check"></i> Customer CRM with trip history</li>
          <li><i class="fas fa-check"></i> Auto-generated invoices, itineraries & vouchers</li>
          <li><i class="fas fa-check"></i> Email marketing newsletter system</li>
          <li><i class="fas fa-check"></i> 500 SMS credits + bulk SMS campaigns</li>
          <li><i class="fas fa-check"></i> 6 months priority support</li>
        </ul>
        <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 3, 'tour') }}" class="btn-package">Get Started</a>
      </div>
@endsection
