@extends('layouts.app')

@section('title', 'ICT Company in Tanzania | Web, Apps, Network & IT Support')

@section('meta_tags')
  <meta name="description" content="Leading ICT company in Tanzania offering web development, mobile apps, network installation, cybersecurity and IT support services.">
  <meta name="keywords" content="ICT Tanzania, web development Tanzania, IT services Dar es Salaam, software company Tanzania">
  <meta property="og:title" content="ICT Company in Tanzania">
  <meta property="og:description" content="Professional ICT services including web, apps, networks and IT support.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
@endsection

@section('content')

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left">
      <div class="hero-badge">
        <span class="dot"></span>
        Tanzania's #1 ICT Solutions Provider
      </div>
      <h1 class="hero-title">
        Powering <span>Digital Growth</span><br/>
        Across East Africa
      </h1>
      <p class="hero-subtitle">
        From safari tour websites and mobile apps to enterprise cybersecurity and network infrastructure — Jezdan Technology delivers cutting-edge ICT solutions tailored for Tanzanian businesses from Moshi, Kilimanjaro.
      </p>
      <div class="hero-actions">
        <a href="#packages" class="btn-primary"><i class="fas fa-rocket"></i> Explore Packages</a>
        <a href="{{ route('package.selection') }}" class="btn-outline"><i class="fas fa-phone"></i> Free Consultation</a>
      </div>
      <div class="hero-stats">
        <div>
          <span class="hero-stat-num">500+</span>
          <span class="hero-stat-label">Projects Delivered</span>
        </div>
        <div style="width:1px;background:rgba(255,255,255,0.15);"></div>
        <div>
          <span class="hero-stat-num">98%</span>
          <span class="hero-stat-label">Client Satisfaction</span>
        </div>
        <div style="width:1px;background:rgba(255,255,255,0.15);"></div>
        <div>
          <span class="hero-stat-num">7+</span>
          <span class="hero-stat-label">Years Experience</span>
        </div>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=700&q=80" alt="Tech Solutions Tanzania" />
        <div class="hero-img-badge">
          <div class="hero-img-badge-title">Uptime Guarantee</div>
          <div class="hero-img-badge-val">99.9% SLA</div>
        </div>
      </div>
      <div class="hero-float-card">
        <div class="hero-float-icon"><i class="fas fa-shield-halved"></i></div>
        <div class="hero-float-text">
          <strong>Certified &amp; Secure</strong>
          TCRA Compliant Systems
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust-strip">
  <div class="trust-strip-inner">
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-mobile-alt"></i> Online Payment Integrated</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fab fa-whatsapp"></i> WhatsApp Business Support</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-globe-africa"></i> Serving All Tanzania</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-headset"></i> 24/7 Technical Support</div>
    <div class="trust-divider"></div>
  </div>
</div>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-layer-group"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>ICT Services</span><br/>Built for East Africa</h2>
      <p class="section-sub">We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-code"></i></div>
        <h3>Web Development</h3>
        <p>Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS, product management, and integrated mobile money payments.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 400,000</span>
        <a href="{{ route('services.web-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
        <h3>Mobile App Development</h3>
        <p>Cross-platform Android & iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 3,000,000</span>
        <a href="{{ route('services.mobile-app-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-network-wired"></i></div>
        <h3>Network Installation</h3>
        <p>Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, VLANs, guest Wi-Fi, security configuration, and performance optimisation.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.network-installation') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
        <h3>Cybersecurity</h3>
        <p>Protect your business with comprehensive vulnerability assessments, 24/7 monitoring, penetration testing, firewall configuration, and TCRA & GDPR compliance support.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.cybersecurity') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-screwdriver-wrench"></i></div>
        <h3>IT Support</h3>
        <p>Reliable ongoing IT support from remote troubleshooting to on-site 24/7 enterprise service. Monthly retainer plans with guaranteed SLAs, dedicated account managers, and SMS ticket updates.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 150,000/mo</span>
        <a href="{{ route('services.it-support') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
        <h3>ICT Consultancy</h3>
        <p>Strategic digital transformation guidance. We audit your existing infrastructure, build technology roadmaps, manage vendors, and provide ongoing CTO-on-demand advisory services.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 500,000</span>
        <a href="{{ route('services.ict-consultancy') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-camera"></i></div>
        <h3>CCTV &amp; Security Systems</h3>
        <p>Complete CCTV installation integrated with your network infrastructure. Ideal for hotels, offices, lodges, and residential properties. Remote monitoring and cloud storage included.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 2,000,000</span>
        <a href="{{ route('package.selection') }}" class="service-link">Get Custom Quote <i class="fas fa-arrow-right"></i></a>
      </div>
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
      <button class="tab-btn active" onclick="switchTab('tour')">🌍 Tour Websites</button>
      <button class="tab-btn" onclick="switchTab('web')">💻 Web Development</button>
      <button class="tab-btn" onclick="switchTab('app')">📱 Mobile Apps</button>
      <button class="tab-btn" onclick="switchTab('network')">🔌 Networking</button>
      <button class="tab-btn" onclick="switchTab('cyber')">🔒 Cybersecurity</button>
      <button class="tab-btn" onclick="switchTab('itsupport')">🛠️ IT Support</button>
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

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Simple <span>4-Step Process</span></h2>
      <p class="section-sub">From first call to going live — we make every step smooth, transparent, and efficient.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Free Consultation</h4>
        <p>We discuss your goals, requirements, and budget. No hidden costs — full transparency from the start.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Custom Proposal</h4>
        <p>You receive a detailed proposal with clear scope, timeline, pricing, and all deliverables.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Our team builds your solution with regular updates, testing, and feedback rounds along the way.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Launch &amp; Support</h4>
        <p>We deploy, train your team, and provide 1 month of free post-launch support and monitoring.</p>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="stats-grid">
    <div class="stat-item">
      <span class="stat-num">500<span>+</span></span>
      <div class="stat-label">Projects Completed</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:90%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">200<span>+</span></span>
      <div class="stat-label">Active Clients</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:75%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">98<span>%</span></span>
      <div class="stat-label">Client Satisfaction Rate</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:98%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">24<span>/7</span></span>
      <div class="stat-label">Support Availability</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:100%"></div></div>
    </div>
  </div>
</div>

<!-- WHY US -->
<section class="why-us" id="why-us">
  <div class="container">
    <div class="why-grid">
      <div class="why-img-stack">
        <div class="why-img-main">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="TechNova Africa Team" />
        </div>
        <div class="why-img-sec">
          <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=500&q=80" alt="Working on digital solutions" />
        </div>
        <div class="why-img-badge2">
          <div class="why-img-badge2-num">7+</div>
          <div class="why-img-badge2-label">Years of Excellence</div>
        </div>
      </div>
      <div>
        <div class="section-label"><i class="fas fa-star"></i> Why TechNova Africa</div>
        <h2 class="section-title">Tanzania's Most Trusted <span>ICT Partner</span></h2>
        <p style="color:var(--text-mid);line-height:1.75;margin-bottom:8px;">
          Based in Arusha — the gateway to Kilimanjaro and Tanzania's safari capital — we understand your market better than anyone. We've helped tour operators, hotels, NGOs, and businesses across Tanzania go digital and grow faster.
        </p>
        <div class="why-points">
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h5>Deep Local Market Knowledge</h5>
              <p>We know the Tanzanian business landscape — from M-Pesa integrations to Swahili content and TCRA compliance requirements.</p>
            </div>
          </div>
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-bolt"></i></div>
            <div>
              <h5>Fast Delivery, No Shortcuts</h5>
              <p>Most projects delivered in days — not months. We use modern frameworks and agile workflows to move fast without sacrificing quality.</p>
            </div>
          </div>
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-phone-volume"></i></div>
            <div>
              <h5>Real Support in Real Time</h5>
              <p>Call, WhatsApp, or SMS us — we actually answer. Our local team speaks Swahili and English and responds fast.</p>
            </div>
          </div>
          <div class="why-point">
            <div class="why-point-icon"><i class="fas fa-coins"></i></div>
            <div>
              <h5>Transparent, Competitive Pricing</h5>
              <p>No surprise fees. Our packages are clearly priced in TZS with everything spelled out upfront. We work within Tanzanian budgets.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TECHNOLOGIES -->
<div class="tech-strip">
  <div class="tech-strip-inner">
    <div style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-code-branch"></i> Technologies We Use</div>
      <h3 style="font-family:var(--font-display);color:var(--navy);font-size:1.6rem;font-weight:900;margin-top:8px;">Built with <span style="color:var(--accent);">Industry-Leading Tools</span></h3>
    </div>
    <div class="tech-logos">
      <div class="tech-logo-item">Flutter</div>
      <div class="tech-logo-item">React Native</div>
      <div class="tech-logo-item">WordPress</div>
      <div class="tech-logo-item">Laravel</div>
      <div class="tech-logo-item">Node.js</div>
      <div class="tech-logo-item">React.js</div>
      <div class="tech-logo-item">MySQL</div>
      <div class="tech-logo-item">Firebase</div>
      <div class="tech-logo-item">M-Pesa API</div>
      <div class="tech-logo-item">TigoPesa API</div>
      <div class="tech-logo-item">Google Analytics</div>
      <div class="tech-logo-item">AWS / Cloud</div>
      <div class="tech-logo-item">Cisco / Ubiquiti</div>
      <div class="tech-logo-item">Mikrotik</div>
    </div>
  </div>
</div>

<!-- ADD-ONS -->
<section class="addons">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-puzzle-piece"></i> Extras</div>
      <h2 class="section-title">Optional <span>Add-On Services</span></h2>
      <p class="section-sub">Supercharge any package with these additional features tailored to your business needs.</p>
    </div>
    <div class="addons-grid">
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-blog"></i></div>
        <div>
          <h5>Travel Blog + 5 Posts</h5>
          <div class="addon-price">TZS 150,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
        <div>
          <h5>Advanced SEO Package</h5>
          <div class="addon-price">TZS 300,000 – 600,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fab fa-whatsapp"></i></div>
        <div>
          <h5>WhatsApp Business API</h5>
          <div class="addon-price">TZS 200,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-share-nodes"></i></div>
        <div>
          <h5>Social Media Auto-Posting</h5>
          <div class="addon-price">TZS 150,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-headset"></i></div>
        <div>
          <h5>Emergency 24/7 Support</h5>
          <div class="addon-price">TZS 100,000/month</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-map-location-dot"></i></div>
        <div>
          <h5>Custom Tour Map & Itinerary Builder</h5>
          <div class="addon-price">TZS 250,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-comment-sms"></i></div>
        <div>
          <h5>Extra SMS Credits (100 pack)</h5>
          <div class="addon-price">TZS 50,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-message"></i></div>
        <div>
          <h5>Live Chat Support System</h5>
          <div class="addon-price">TZS 180,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-envelope-open-text"></i></div>
        <div>
          <h5>Email Marketing Setup</h5>
          <div class="addon-price">TZS 200,000</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-language"></i></div>
        <div>
          <h5>Multi-Language (DE/FR/IT)</h5>
          <div class="addon-price">TZS 300,000/language</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-cloud-arrow-up"></i></div>
        <div>
          <h5>Cloud Backup & Disaster Recovery</h5>
          <div class="addon-price">TZS 150,000/month</div>
        </div>
      </div>
      <div class="addon-card">
        <div class="addon-icon"><i class="fas fa-chart-line"></i></div>
        <div>
          <h5>Monthly Performance Report</h5>
          <div class="addon-price">TZS 80,000/month</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 60px;">
      <div class="section-label"><i class="fas fa-quote-left"></i> Testimonials</div>
      <h2 class="section-title">Trusted by <span>Tanzania's Best Businesses</span></h2>
      <p class="section-sub">Don't just take our word for it — hear from our clients across Arusha, Dar es Salaam, and beyond.</p>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"TechNova built our safari website in just 9 days. The M-Pesa booking integration works flawlessly and we've seen a 60% increase in direct bookings since launching. Exceptional team!"</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&q=80" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">James Makwaya</div>
            <div class="testimonial-role">CEO, Kilimanjaro Summit Tours, Arusha</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"Their cybersecurity audit revealed 3 critical vulnerabilities in our hotel network we didn't know about. They fixed everything in 2 days. I sleep much better now knowing we're protected."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&q=80" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Amina Rashidi</div>
            <div class="testimonial-role">Operations Manager, Serengeti Lodge Group</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"We needed a full mobile app for our delivery business. TechNova delivered a beautiful, fully functional Android and iOS app with real-time tracking and TigoPesa payments. World-class work!"</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">David Msangi</div>
            <div class="testimonial-role">Founder, SwiftDeliver Tanzania, Dar es Salaam</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"The network installation at our camp was professional and fast. No downtime, crystal-clear coverage in every tent, and the guest Wi-Fi works perfectly. Our guests love it!"</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?w=100&q=80" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Peter Nkosi</div>
            <div class="testimonial-role">General Manager, Tarangire Tented Camp</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"After switching to TechNova's IT Support plan, our office IT issues dropped by 80%. They respond within minutes, not hours. Best investment we've made for our NGO this year."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1548142813-c348350df52b?w=100&q=80" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Grace Mutua</div>
            <div class="testimonial-role">Director, WaterAid East Africa, Arusha</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testimonial-text">"Our ICT consultancy engagement with TechNova was transformational. They gave us a clear digital roadmap, helped select the right vendors, and saved us over TZS 5M in bad software decisions."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&q=80" class="testimonial-avatar" alt="Client" />
          <div>
            <div class="testimonial-name">Robert Kimani</div>
            <div class="testimonial-role">CFO, Precision Air Supplier, Nairobi</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to <span>Transform</span> Your Business?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required. We'll assess your needs and recommend the perfect package for your budget.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255700000000?text=Hello%20TechNova%20Africa!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('package.selection') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
    </div>
  </div>
</div>





<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info">
        <div class="section-label"><i class="fas fa-envelope"></i> Get In Touch</div>
        <h3>Let's Build Something <span style="color:var(--accent);">Great Together</span></h3>
        <p>Whether you're starting from scratch or upgrading your existing systems, our team is ready to help. Reach out today for a free, no-obligation consultation.</p>
        <div class="contact-details">
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <div class="contact-detail-label">Location</div>
              <div class="contact-detail-val">Moshi, Kilimanjaro, Tanzania</div>
              <a href="https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania" target="_blank" style="font-size: 0.8rem; color: var(--accent); text-decoration: none;">View on Map</a>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
            <div>
              <div class="contact-detail-label">Phone Numbers</div>
              <div class="contact-detail-val">+255 685 847 002</div>
              <div class="contact-detail-val">+255 622 239 304</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fab fa-whatsapp"></i></div>
            <div>
              <div class="contact-detail-label">WhatsApp</div>
              <div class="contact-detail-val">+255 685 847 002</div>
              <div class="contact-detail-val">+255 622 239 304</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <div class="contact-detail-label">Email</div>
              <div class="contact-detail-val">jezdantechnology@gmail.com</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-clock"></i></div>
            <div>
              <div class="contact-detail-label">Working Hours</div>
              <div class="contact-detail-val">Mon–Sat: 8am–7pm | Sun: 9am–2pm</div>
              <div class="contact-detail-val" style="color: #28a745; font-size: 0.85rem; font-weight: 600;">Available Now</div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <h4>Send Us a Message</h4>
        <div class="form-row">
          <div class="form-group">
            <label>Full Name *</label>
            <input type="text" class="form-control" placeholder="Your full name" />
          </div>
          <div class="form-group">
            <label>Phone / WhatsApp *</label>
            <input type="tel" class="form-control" placeholder="+255 7XX XXX XXX" />
          </div>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" class="form-control" placeholder="your@email.com" />
        </div>
        <div class="form-group">
          <label>Service Interested In *</label>
          <select class="form-control">
            <option value="">-- Select a Service --</option>
            <option>Tour / Safari Website</option>
            <option>Web Development</option>
            <option>Mobile App Development</option>
            <option>Network Installation</option>
            <option>Cybersecurity</option>
            <option>IT Support</option>
            <option>ICT Consultancy</option>
            <option>CCTV Installation</option>
            <option>Multiple Services</option>
          </select>
        </div>
        <div class="form-group">
          <label>Budget Range (TZS)</label>
          <select class="form-control">
            <option value="">-- Select Budget Range --</option>
            <option>Under 500,000</option>
            <option>500,000 – 1,500,000</option>
            <option>1,500,000 – 5,000,000</option>
            <option>5,000,000 – 15,000,000</option>
            <option>15,000,000+</option>
            <option>Not sure yet</option>
          </select>
        </div>
        <div class="form-group">
          <label>Tell Us About Your Project</label>
          <textarea class="form-control" placeholder="Describe your project, goals, and any specific requirements..."></textarea>
        </div>
        <button class="btn-submit" onclick="submitForm()"><i class="fas fa-paper-plane"></i> Send Message — We Reply Within 2 Hours</button>
      </div>
    </div>
  </div>
</section>

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
