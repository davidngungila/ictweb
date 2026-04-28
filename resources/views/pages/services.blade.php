@extends('layouts.app')

@section('title', 'ICT Services in Tanzania | Web, Apps, Network & IT Solutions')

@section('meta_tags')
  <meta name="description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta name="keywords" content="ICT services Tanzania, web development Tanzania, IT solutions Dar es Salaam, technology services Tanzania">
  <meta property="og:title" content="ICT Services in Tanzania">
  <meta property="og:description" content="Explore our comprehensive ICT services in Tanzania including web development, mobile apps, network installation, cybersecurity and IT support.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
  <!-- Google tag (gtag.js) -->
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
        What We Offer
      </div>
      <h1 class="hero-title">
        Comprehensive <span>ICT Services</span><br/>
        Built for East Africa
      </h1>
      <p class="hero-subtitle">
        We combine world-class technology with deep local market knowledge to deliver solutions that truly work for Tanzanian businesses.
      </p>
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
      <div class="service-card" id="web-development">
        <div class="service-icon"><i class="fas fa-code"></i></div>
        <h3>Web Development</h3>
        <p>Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS, product management, and integrated mobile money payments.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 400,000</span>
        <a href="{{ route('services.web-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="mobile-apps">
        <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
        <h3>Mobile App Development</h3>
        <p>Cross-platform Android & iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 3,000,000</span>
        <a href="{{ route('services.mobile-app-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="networking">
        <div class="service-icon"><i class="fas fa-network-wired"></i></div>
        <h3>Network Installation</h3>
        <p>Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, VLANs, guest Wi-Fi, security configuration, and performance optimisation.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.network-installation') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="cybersecurity">
        <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
        <h3>Cybersecurity</h3>
        <p>Protect your business with comprehensive vulnerability assessments, 24/7 monitoring, penetration testing, firewall configuration, and TCRA & GDPR compliance support.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.cybersecurity') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="it-support">
        <div class="service-icon"><i class="fas fa-screwdriver-wrench"></i></div>
        <h3>IT Support</h3>
        <p>Reliable ongoing IT support from remote troubleshooting to on-site 24/7 enterprise service. Monthly retainer plans with guaranteed SLAs, dedicated account managers, and SMS ticket updates.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 150,000/mo</span>
        <a href="{{ route('services.it-support') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="consultancy">
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
        <a href="{{ route('contact') }}" class="service-link">Get Custom Quote <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- EXTRA ADD-ON SERVICES -->
<section class="extra-addons">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:700px;margin:0 auto 50px;">
      <div class="section-label"><i class="fas fa-rocket"></i> Extra Add-On Services</div>
      <h2 style="font-size:2.2rem;margin-bottom:15px;">Supercharge Your Project</h2>
      <p style="color:var(--text-light);">Enhance any package with these additional features tailored to your business needs.</p>
    </div>

    <!-- Marketing & Growth -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">🚀 Marketing & Growth</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Travel Blog + 5 Posts</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">High-quality content to boost SEO and attract visitors</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Advanced SEO Package</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Deep keyword optimization, technical SEO, and ranking strategy</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 300,000 – 600,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Social Media Auto-Posting</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Automatically publish content to Facebook, Instagram, and more</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Email Marketing Setup</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Campaign setup, templates, and automation</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Analytics & Tracking Setup (Advanced)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Google Analytics, Facebook Pixel, and conversion tracking</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 100,000</div>
        </div>
      </div>
    </div>

    <!-- Automation & AI -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">🤖 Automation & AI</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Google Services Automation</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Automate reports, invoices, dashboards, and workflows (Sheets, Docs, Slides, Drive)</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 100,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">AI Chatbot Integration</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Automated customer support and smart replies (Website + WhatsApp)</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 250,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Bulk SMS System Setup</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Send SMS campaigns directly from your system (Admin Panel)</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Extra SMS Credits (100 Pack)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Additional SMS bundles for campaigns and notifications</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 50,000</div>
        </div>
      </div>
    </div>

    <!-- Payments & Integrations -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">💳 Payments & Integrations</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Online Payment Integration</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Integrate M-Pesa, Airtel Money, cards, and APIs like Snippe</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">API Integration (Any System)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Connect your system with external services (SMS, CRM, payments)</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000 – 400,000</div>
        </div>
      </div>
    </div>

    <!-- Systems & Features -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">🖥️ Systems & Features</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Admin Dashboard System</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Manage users, reports, payments, and operations (Custom CMS)</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 300,000 – 700,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Booking & Reservation System</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Online booking with calendar and notifications</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 250,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">E-commerce Store Setup</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Sell products/services with cart and checkout</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 350,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Custom Tour Map & Itinerary Builder</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Interactive travel/tour planning system</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 250,000</div>
        </div>
      </div>
    </div>

    <!-- Communication & Support -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">💬 Communication & Support</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">WhatsApp Business API Integration</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Automated messaging and customer engagement</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 200,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Live Chat Support System</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Real-time website chat support</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 180,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Push Notifications (Web + Mobile)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Instant alerts for offers and updates</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 120,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Emergency 24/7 Support</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Priority technical support anytime</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 100,000/month</div>
        </div>
      </div>
    </div>

    <!-- Localization & Branding -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">🌍 Localization & Branding</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Multi-Language (DE / FR / IT)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Reach international customers</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 300,000 per language</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Logo Design + Brand Kit</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Professional branding package</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Domain + Professional Email Setup</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Custom business emails (e.g. info@yourdomain.com)</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 80,000</div>
        </div>
      </div>
    </div>

    <!-- Security & Performance -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">⚙️ Security, Performance & Infrastructure</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Website Speed Optimization</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Improve performance and loading speed</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 120,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Security Hardening & Firewall Setup</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Protect against hacking and vulnerabilities</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Cloud Backup & Disaster Recovery</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Automatic backups and restore solutions</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000/month</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Monthly Performance Report</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Detailed insights on system performance</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 80,000/month</div>
        </div>
      </div>
    </div>

    <!-- System Auditing -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">🔍 System Auditing (Premium)</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">System Audit & Performance Review</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Full inspection: security, performance, code, APIs. Includes vulnerability check, payment & API audit, SEO review</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 200,000 – 500,000</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Monthly System Monitoring & Audit</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Continuous monitoring, alerts, and optimization</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 150,000/month</div>
        </div>
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Penetration Testing (Advanced Security)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Simulated real-world attacks to test system security</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 400,000+</div>
        </div>
      </div>
    </div>

    <!-- Mobile & Advanced -->
    <div style="margin-bottom: 40px;">
      <h3 style="color: var(--accent); margin-bottom: 20px; font-size: 1.3rem;">📱 Mobile & Advanced</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="addon-card" style="display: block; padding: 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: white;">
          <div style="font-weight: 600; font-size: 1.1rem; margin-bottom: 8px;">Mobile App (Android – Basic)</div>
          <div style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Convert your system into a mobile app</div>
          <div style="color: var(--accent); font-weight: 700;">TZS 800,000+</div>
        </div>
      </div>
    </div>

    <div style="text-align: center; margin-top: 50px;">
      <a href="{{ route('package.selection') }}" class="btn-primary" style="padding: 15px 40px; font-size: 1.1rem; border-radius: 50px; border: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; cursor: pointer; transition: transform 0.2s; text-decoration: none; display: inline-block;">
        <i class="fas fa-arrow-right"></i> Select Add-Ons & Get Started
      </a>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to <span>Get Started</span>?</h2>
    <p>Get a free consultation and detailed quote within 24 hours. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-envelope"></i> Send Us a Message</a>
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
