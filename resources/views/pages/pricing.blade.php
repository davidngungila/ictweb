@extends('layouts.app')

@section('title', 'ICT Service Packages & Pricing in Tanzania')

@section('meta_tags')
  <meta name="description" content="Explore our affordable ICT service packages in Tanzania including web development, apps, networks and IT support solutions.">
  <meta name="keywords" content="ICT pricing Tanzania, website cost Tanzania, IT service packages Tanzania">
  <meta property="og:title" content="ICT Service Packages & Pricing in Tanzania">
  <meta property="og:description" content="Explore our affordable ICT service packages in Tanzania including web development, apps, networks and IT support solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-N2F56W4HPN');
  </script>
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 60vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 800px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Pricing
      </div>
      <h1 class="hero-title">
        Transparent <span>Pricing Packages</span>
      </h1>
      <p class="hero-subtitle">
        All packages include a free domain + hosting for the first year (worth TZS 150,000), SSL certificate, and 1 month of free support.
      </p>
    </div>
  </div>
</section>

@if(session('success'))
<div class="container" style="padding-top: 20px;">
  <div style="background:#d4edda;border:1px solid #c3e6cb;color:#155724;padding:14px 18px;border-radius:12px;font-weight:600;">
    <i class="fas fa-check-circle" style="margin-right:8px;"></i>{{ session('success') }}
  </div>
</div>
@endif
@if(session('error'))
<div class="container" style="padding-top: 20px;">
  <div style="background:#f8d7da;border:1px solid #f5c6cb;color:#721c24;padding:14px 18px;border-radius:12px;font-weight:600;">
    <i class="fas fa-exclamation-circle" style="margin-right:8px;"></i>{{ session('error') }}
  </div>
</div>
@endif

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Transparent <span>Pricing Packages</span></h2>
      <p class="section-sub">All packages include a free domain + hosting for the first year (worth TZS 150,000), SSL certificate, and 1 month of free support.</p>
    </div>
    <div class="packages-tabs">
      <a href="{{ route('pricing.tour-websites') }}" class="tab-btn {{ request()->routeIs('pricing.tour-websites') ? 'active' : '' }}" style="text-decoration: none; display: inline-block;">🌍 Tour Websites</a>
      <a href="{{ route('pricing.web-development') }}" class="tab-btn {{ request()->routeIs('pricing.web-development') ? 'active' : '' }}" style="text-decoration: none; display: inline-block;">💻 Web Development</a>
      <a href="{{ route('pricing.mobile-apps') }}" class="tab-btn {{ request()->routeIs('pricing.mobile-apps') ? 'active' : '' }}" style="text-decoration: none; display: inline-block;">📱 Mobile Apps</a>
      <a href="{{ route('pricing.networking') }}" class="tab-btn {{ request()->routeIs('pricing.networking') ? 'active' : '' }}" style="text-decoration: none; display: inline-block;">🔌 Networking</a>
      <a href="{{ route('pricing.cybersecurity') }}" class="tab-btn {{ request()->routeIs('pricing.cybersecurity') ? 'active' : '' }}" style="text-decoration: none; display: inline-block;">🔒 Cybersecurity</a>
      <a href="{{ route('pricing.it-support') }}" class="tab-btn {{ request()->routeIs('pricing.it-support') ? 'active' : '' }}" style="text-decoration: none; display: inline-block;">🛠️ IT Support</a>
    </div>

    <!-- TOUR WEBSITES -->
    <div class="tab-panel active" id="tab-tour">
      <div class="pricing-grid">
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
            <li><i class="fas fa-check"></i> Advanced Analytics &amp; conversion funnels</li>
            <li><i class="fas fa-check"></i> Delivered in 7–12 days</li>
          </ul>
          <a href="{{ \App\Support\PackagePricing::wizardUrl(1, 2, 'tour') }}" class="btn-package">Get Started</a>
        </div>
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
      </div>
    </div>

    <!-- WEB DEVELOPMENT -->
    <div class="tab-panel" id="tab-web">
      <div class="pricing-grid">
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
          <a href="{{ route('package.selection.step1', ['service_id' => 1, 'package_id' => 1]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 1, 'package_id' => 2]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 1, 'package_id' => 3]) }}" class="btn-package">Get Started</a>
        </div>
      </div>
    </div>

    <!-- MOBILE APPS -->
    <div class="tab-panel" id="tab-app">
      <div class="pricing-grid">
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
          <a href="{{ route('package.selection.step1', ['service_id' => 2, 'package_id' => 1]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 2, 'package_id' => 2]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 2, 'package_id' => 3]) }}" class="btn-package">Get Started</a>
        </div>
      </div>
    </div>

    <!-- NETWORKING -->
    <div class="tab-panel" id="tab-network">
      <div class="pricing-grid">
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
          <a href="{{ route('package.selection.step1', ['service_id' => 3, 'package_id' => 1]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 3, 'package_id' => 2]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 3, 'package_id' => 3]) }}" class="btn-package">Get Started</a>
        </div>
      </div>
    </div>

    <!-- CYBERSECURITY -->
    <div class="tab-panel" id="tab-cyber">
      <div class="pricing-grid">
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
          <a href="{{ route('package.selection.step1', ['service_id' => 4, 'package_id' => 1]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 4, 'package_id' => 2]) }}" class="btn-package">Get Started</a>
        </div>
        <div class="pricing-card">
          <div class="pricing-tier">Enterprise</div>
          <div class="pricing-name">SOC &amp; Compliance</div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 4, 'package_id' => 3]) }}" class="btn-package">Request Quote</a>
        </div>
      </div>
    </div>

    <!-- IT SUPPORT -->
    <div class="tab-panel" id="tab-itsupport">
      <div class="pricing-grid">
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
          <a href="{{ route('package.selection.step1', ['service_id' => 5, 'package_id' => 1]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 5, 'package_id' => 2]) }}" class="btn-package">Get Started</a>
        </div>
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
          <a href="{{ route('package.selection.step1', ['service_id' => 5, 'package_id' => 3]) }}" class="btn-package">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING CAPTURE FORM -->
<section class="services" style="background: var(--off-white); padding: 70px 0;">
  <div class="container">
    <div style="max-width: 980px; margin: 0 auto; background: #fff; border-radius: 22px; padding: 36px 32px; box-shadow: 0 18px 48px rgba(15,23,42,0.08); border: 1px solid #edf0f7;">
      <div style="display:flex; flex-wrap:wrap; gap:16px; justify-content:space-between; align-items:flex-start; margin-bottom: 22px;">
        <div>
          <div class="section-label"><i class="fas fa-paper-plane"></i> Pricing Desk</div>
          <h2 class="section-title" style="margin-bottom:8px;">Capture Your <span>Package Brief</span></h2>
          <p class="section-sub" style="margin:0;">Tell us which pricing tab caught your eye—we reply within two hours with next steps or a calendar invite.</p>
        </div>
        <div style="font-size:0.88rem;color:#64748b;max-width:280px;line-height:1.6;">
          Prefer chat? <a href="https://wa.me/255685847002" target="_blank" rel="noopener" style="color:var(--accent);font-weight:700;">WhatsApp Jezdan Technology</a><br>
          Call <a href="tel:+255685847002" style="color:var(--accent);font-weight:700;">+255 685 847 002</a>
        </div>
      </div>

      @if ($errors->any())
      <div style="background:#fef2f2;border:1px solid #fecaca;color:#991b1b;padding:12px 16px;border-radius:12px;margin-bottom:18px;">
        {{ $errors->first() }}
      </div>
      @endif

      <form action="{{ route('contact.submit') }}" method="POST" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:16px;">
        @csrf
        <input type="hidden" name="redirect_to" value="pricing">
        <div>
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">First name *</label>
          <input type="text" name="first_name" value="{{ old('first_name') }}" required class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
        </div>
        <div>
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Last name *</label>
          <input type="text" name="last_name" value="{{ old('last_name') }}" required class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
        </div>
        <div>
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Email *</label>
          <input type="email" name="email" value="{{ old('email') }}" required class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
        </div>
        <div>
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Phone / WhatsApp</label>
          <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
        </div>
        <div>
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Company</label>
          <input type="text" name="company" value="{{ old('company') }}" class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
        </div>
        <div>
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Service focus *</label>
          <select name="service" required class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
            <option value="">Select one</option>
            <option value="Tour / Safari Website" @selected(old('service') === 'Tour / Safari Website')>Tour / Safari Website</option>
            <option value="Web Development" @selected(old('service') === 'Web Development')>Web Development</option>
            <option value="Mobile App Development" @selected(old('service') === 'Mobile App Development')>Mobile App Development</option>
            <option value="Network Installation" @selected(old('service') === 'Network Installation')>Network Installation</option>
            <option value="Cybersecurity" @selected(old('service') === 'Cybersecurity')>Cybersecurity</option>
            <option value="IT Support" @selected(old('service') === 'IT Support')>IT Support</option>
            <option value="ICT Consultancy" @selected(old('service') === 'ICT Consultancy')>ICT Consultancy</option>
          </select>
        </div>
        <div style="grid-column:1/-1;">
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Budget range</label>
          <select name="budget" class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;">
            <option value="">Optional</option>
            <option value="under-500k" @selected(old('budget') === 'under-500k')>Under 500,000 TZS</option>
            <option value="500k-1.5m" @selected(old('budget') === '500k-1.5m')>500,000 – 1,500,000 TZS</option>
            <option value="1.5m-5m" @selected(old('budget') === '1.5m-5m')>1,500,000 – 5,000,000 TZS</option>
            <option value="5m-15m" @selected(old('budget') === '5m-15m')>5,000,000 – 15,000,000 TZS</option>
            <option value="15m+" @selected(old('budget') === '15m+')>15,000,000+ TZS</option>
            <option value="not-sure" @selected(old('budget') === 'not-sure')>Not sure yet</option>
          </select>
        </div>
        <div style="grid-column:1/-1;">
          <label style="display:block;font-weight:700;margin-bottom:8px;color:#0f172a;">Project brief *</label>
          <textarea name="message" rows="4" required minlength="10" class="form-control" style="width:100%;padding:12px 14px;border-radius:12px;border:1px solid #e2e8f0;" placeholder="Share timelines, stakeholders, integrations (e.g., M‑Pesa), and links to inspiration.">{{ old('message') }}</textarea>
        </div>
        <div style="grid-column:1/-1;display:flex;gap:12px;align-items:flex-start;">
          <input type="checkbox" name="privacy" value="1" id="pricing_privacy" required @checked(old('privacy')) style="margin-top:4px;">
          <label for="pricing_privacy" style="font-size:0.92rem;color:#475569;line-height:1.6;">I agree to the privacy policy and consent to Jezdan Technology contacting me about this inquiry.</label>
        </div>
        <div style="grid-column:1/-1;">
          <button type="submit" class="btn-primary" style="border:none;border-radius:999px;padding:14px 32px;font-weight:700;cursor:pointer;">
            <i class="fas fa-paper-plane" style="margin-right:8px;"></i> Submit pricing brief
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need a <span>Custom Quote</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection

@section('additional_scripts')
<!-- No JavaScript needed for navigation links -->
@endsection
