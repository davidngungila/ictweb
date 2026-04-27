@extends('layouts.app')

@section('title', 'ICT Service Packages & Pricing in Tanzania')

@section('meta_tags')
  <meta name="description" content="Explore our affordable ICT service packages in Tanzania including web development, apps, networks and IT support solutions.">
  <meta name="keywords" content="ICT pricing Tanzania, website cost Tanzania, IT service packages Tanzania">
  <meta property="og:title" content="ICT Service Packages & Pricing in Tanzania">
  <meta property="og:description" content="Explore our affordable ICT service packages in Tanzania including web development, apps, networks and IT support solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Request Quote</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
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
          <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Need a <span>Custom Quote</span>?</h2>
    <p>Not sure which package is right for you? Get a free consultation and detailed quote within 24 hours.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255700000000?text=Hello%20TechNova%20Africa!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('package.selection') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>
@endsection

@section('meta_tags')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-N2F56W4HPN');
    </script>
@endsection

@section('additional_scripts')
<!-- No JavaScript needed for navigation links -->
@endsection
