@extends('layouts.app')

@section('title', 'ICT Consultancy Services in Tanzania | Digital Transformation')

@section('meta_tags')
  <meta name="description" content="Expert ICT consultancy in Tanzania. We help businesses improve operations with technology, systems and digital transformation strategies.">
  <meta name="keywords" content="ICT consultancy Tanzania, IT consulting Dar es Salaam, digital transformation Tanzania">
  <meta property="og:title" content="ICT Consultancy Services in Tanzania">
  <meta property="og:description" content="Expert ICT consultancy in Tanzania. We help businesses improve operations with technology, systems and digital transformation strategies.">
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
        ICT Consultancy
      </div>
      <h1 class="hero-title">
        Transform Your Business <span>With Strategy</span>
      </h1>
      <p class="hero-subtitle">
        Strategic technology consulting that drives digital innovation, operational efficiency, and sustainable growth for Tanzanian businesses. Expert guidance for your digital transformation journey.
      </p>
    </div>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-lightbulb"></i> What We Offer</div>
      <h2 class="section-title">Comprehensive <span>ICT Consultancy</span> Solutions</h2>
      <p class="section-sub">We help Tanzanian businesses leverage technology for competitive advantage and sustainable growth.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-sitemap"></i></div>
        <h3>Digital Strategy</h3>
        <p>Comprehensive digital transformation roadmap with technology assessment, digital roadmap, and competitive analysis.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-pie"></i></div>
        <h3>Process Optimization</h3>
        <p>Business process analysis and optimization for maximum efficiency with workflow analysis, automation planning, and efficiency metrics.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cogs"></i></div>
        <h3>Technology Planning</h3>
        <p>Strategic technology infrastructure planning with infrastructure design, vendor evaluation, and budget optimization.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Training & Development</h3>
        <p>Staff training and capability development for technology adoption with technical training, skills development, and change management.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Performance Analytics</h3>
        <p>KPI development and business intelligence for data-driven decisions with dashboard design and ROI analysis.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Compliance & Risk</h3>
        <p>Regulatory compliance and risk management for business protection with compliance audits, risk assessment, and policy development.</p>
      </div>
    </div>
  </div>
</section>

<!-- TECHNOLOGIES -->
<div class="tech-strip">
  <div class="tech-strip-inner">
    <div style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-code-branch"></i> Technologies We Use</div>
      <h3 style="font-family:var(--font-display);color:var(--navy);font-size:1.6rem;font-weight:900;margin-top:8px;">Built with <span style="color:var(--accent);">Industry Tools</span></h3>
    </div>
    <div class="tech-logos">
      <div class="tech-logo-item">Tableau</div>
      <div class="tech-logo-item">Power BI</div>
      <div class="tech-logo-item">Jira</div>
      <div class="tech-logo-item">Confluence</div>
      <div class="tech-logo-item">Miro</div>
      <div class="tech-logo-item">Asana</div>
      <div class="tech-logo-item">ServiceNow</div>
      <div class="tech-logo-item">Salesforce</div>
    </div>
  </div>
</div>

<!-- PRICING PACKAGES -->
<section class="tour-packages" id="packages">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-boxes-stacked"></i> Pricing</div>
      <h2 class="section-title">Consultancy <span>Pricing Packages</span></h2>
      <p class="section-sub">Project-based and retainer options tailored to your needs.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <div class="pricing-tier">Basic</div>
        <div class="pricing-name">Consult Basic</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Small businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">1M</span>
          <span class="pricing-period">– 3M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Technology assessment</li>
          <li><i class="fas fa-check"></i> Basic digital roadmap</li>
          <li><i class="fas fa-check"></i> 2 consulting sessions</li>
          <li><i class="fas fa-check"></i> Written report</li>
          <li><i class="fas fa-check"></i> Delivered in 1–2 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <div class="pricing-tier">Standard</div>
        <div class="pricing-name">Consult Standard</div>
        <p style="font-size:0.85rem;color:rgba(255,255,255,0.55);margin-bottom:8px;">Growing businesses</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">3M</span>
          <span class="pricing-period">– 8M</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full digital strategy</li>
          <li><i class="fas fa-check"></i> Process optimization</li>
          <li><i class="fas fa-check"></i> 5 consulting sessions</li>
          <li><i class="fas fa-check"></i> Implementation roadmap</li>
          <li><i class="fas fa-check"></i> Delivered in 3–4 weeks</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
      <div class="pricing-card">
        <div class="pricing-tier">Enterprise</div>
        <div class="pricing-name">Consult Enterprise</div>
        <p style="font-size:0.85rem;color:var(--text-light);margin-bottom:8px;">Large organizations</p>
        <div class="pricing-price">
          <span class="pricing-currency">TZS</span>
          <span class="pricing-amount">8M</span>
          <span class="pricing-period">– 20M+</span>
        </div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Full transformation strategy</li>
          <li><i class="fas fa-check"></i> Dedicated consultant</li>
          <li><i class="fas fa-check"></i> Ongoing advisory (3 months)</li>
          <li><i class="fas fa-check"></i> Training for staff</li>
          <li><i class="fas fa-check"></i> Delivered in 1–2 months</li>
        </ul>
        <a href="{{ route('package.selection') }}" class="btn-package">Get Started</a>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-route"></i> How We Work</div>
      <h2 class="section-title" style="color:white;">Our Consulting <span>Process</span></h2>
      <p class="section-sub">From discovery to implementation — we ensure a structured approach for successful transformation.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Discovery</h4>
        <p>Understanding your business, challenges, and opportunities for tailored solutions.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Analysis</h4>
        <p>Comprehensive analysis of current systems and future requirements.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Strategy</h4>
        <p>Developing actionable strategies and implementation roadmaps for success.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Implementation</h4>
        <p>Guiding successful implementation and measuring business impact.</p>
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
    <h2>Transform Your Business <span>With Strategy</span></h2>
    <p>Get a free consultation and detailed proposal within 24 hours. Start your digital transformation journey today.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20ICT%20consultancy." class="btn-whatsapp" target="_blank">
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
