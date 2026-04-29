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
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Web Development" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>Web Development</h3>
        <p>Custom websites for all businesses — from simple starter sites to complex e-commerce platforms with full CMS, product management, and integrated mobile money payments.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 400,000</span>
        <a href="{{ route('services.web-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="mobile-apps">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" alt="Mobile App Development" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>Mobile App Development</h3>
        <p>Cross-platform Android & iOS apps built with Flutter and React Native. From informational apps to full-featured booking and payment platforms with real-time tracking.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 3,000,000</span>
        <a href="{{ route('services.mobile-app-development') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="networking">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" alt="Network Installation" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>Network Installation</h3>
        <p>Professional network infrastructure for offices, hotels, lodges, and camps. Includes site surveys, multi-AP setups, VLANs, guest Wi-Fi, security configuration, and performance optimisation.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.network-installation') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="cybersecurity">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" alt="Cybersecurity" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>Cybersecurity</h3>
        <p>Protect your business with comprehensive vulnerability assessments, 24/7 monitoring, penetration testing, firewall configuration, and TCRA & GDPR compliance support.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 300,000</span>
        <a href="{{ route('services.cybersecurity') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="it-support">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" alt="IT Support" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>IT Support</h3>
        <p>Reliable ongoing IT support from remote troubleshooting to on-site 24/7 enterprise service. Monthly retainer plans with guaranteed SLAs, dedicated account managers, and SMS ticket updates.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 150,000/mo</span>
        <a href="{{ route('services.it-support') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card" id="consultancy">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" alt="ICT Consultancy" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>ICT Consultancy</h3>
        <p>Strategic digital transformation guidance. We audit your existing infrastructure, build technology roadmaps, manage vendors, and provide ongoing CTO-on-demand advisory services.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 500,000</span>
        <a href="{{ route('services.ict-consultancy') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600079/male-electrician-works-switchboard-overalls-against-backdrop-emergency-lighting_xpsb7u.jpg" alt="CCTV & Security Systems" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 16px;" />
        <h3>CCTV &amp; Security Systems</h3>
        <p>Complete CCTV installation integrated with your network infrastructure. Ideal for hotels, offices, lodges, and residential properties. Remote monitoring and cloud storage included.</p>
        <span class="service-price"><i class="fas fa-tag"></i> From TZS 2,000,000</span>
        <a href="{{ route('package.selection') }}" class="service-link">Get Custom Quote <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- EXTRA ADD-ON SERVICES -->
<section class="extra-addons" style="background: var(--off-white); padding: 100px 0;">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:700px;margin:0 auto 60px;">
      <div class="section-label"><i class="fas fa-rocket"></i> Extra Add-On Services</div>
      <h2 style="font-size:2.5rem;margin-bottom:15px;">Supercharge Your <span>Project</span></h2>
      <p style="color:var(--text-mid);font-size:1.1rem;line-height:1.7;">Enhance any package with these additional features tailored to your business needs. Book any service directly or add to your package.</p>
    </div>

    <!-- Marketing & Growth -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">🚀</span>
        Marketing & Growth
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-blog"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Travel Blog + 5 Posts</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">High-quality content to boost SEO and attract visitors</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000</div>
            <button onclick="bookAddon('Travel Blog + 5 Posts', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f093fb, #f5576c); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-search"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Advanced SEO Package</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Deep keyword optimization, technical SEO, and ranking strategy</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 300,000 – 600,000</div>
            <button onclick="bookAddon('Advanced SEO Package', 300000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-share-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Social Media Auto-Posting</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Automatically publish content to Facebook, Instagram, and more</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000</div>
            <button onclick="bookAddon('Social Media Auto-Posting', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #fa709a, #fee140); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-envelope"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Email Marketing Setup</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Campaign setup, templates, and automation</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 200,000</div>
            <button onclick="bookAddon('Email Marketing Setup', 200000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #a8edea, #fed6e3); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #333; font-size: 1.5rem;">
              <i class="fas fa-chart-line"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Analytics & Tracking Setup</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Google Analytics, Facebook Pixel, and conversion tracking</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 100,000</div>
            <button onclick="bookAddon('Analytics & Tracking Setup', 100000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Automation & AI -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #667eea, #764ba2); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">🤖</span>
        Automation & AI
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fab fa-google"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Google Services Automation</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Automate reports, invoices, dashboards, and workflows (Sheets, Docs, Slides, Drive)</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 100,000</div>
            <button onclick="bookAddon('Google Services Automation', 100000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f093fb, #f5576c); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-robot"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">AI Chatbot Integration</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Automated customer support and smart replies (Website + WhatsApp)</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 250,000</div>
            <button onclick="bookAddon('AI Chatbot Integration', 250000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-sms"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Bulk SMS System Setup</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Send SMS campaigns directly from your system (Admin Panel)</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 200,000</div>
            <button onclick="bookAddon('Bulk SMS System Setup', 200000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #fa709a, #fee140); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-comment-dots"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Extra SMS Credits (100 Pack)</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Additional SMS bundles for campaigns and notifications</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 50,000</div>
            <button onclick="bookAddon('Extra SMS Credits (100 Pack)', 50000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Payments & Integrations -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #11998e, #38ef7d); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">💳</span>
        Payments & Integrations
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #11998e, #38ef7d); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-credit-card"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Online Payment Integration</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Integrate M-Pesa, Airtel Money, cards, and APIs like Snippe</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 200,000</div>
            <button onclick="bookAddon('Online Payment Integration', 200000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #fc4a1a, #f7b733); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-plug"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">API Integration (Any System)</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Connect your system with external services (SMS, CRM, payments)</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000 – 400,000</div>
            <button onclick="bookAddon('API Integration (Any System)', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Systems & Features -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #4facfe, #00f2fe); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">🖥️</span>
        Systems & Features
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-tachometer-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Admin Dashboard System</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Manage users, reports, payments, and operations (Custom CMS)</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 300,000 – 700,000</div>
            <button onclick="bookAddon('Admin Dashboard System', 300000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #fa709a, #fee140); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-calendar-check"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Booking & Reservation System</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Online booking with calendar and notifications</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 250,000</div>
            <button onclick="bookAddon('Booking & Reservation System', 250000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #a8edea, #fed6e3); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #333; font-size: 1.5rem;">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">E-commerce Store Setup</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Sell products/services with cart and checkout</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 350,000</div>
            <button onclick="bookAddon('E-commerce Store Setup', 350000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Custom Tour Map & Itinerary Builder</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Interactive travel/tour planning system</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 250,000</div>
            <button onclick="bookAddon('Custom Tour Map & Itinerary Builder', 250000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Communication & Support -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #fa709a, #fee140); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">💬</span>
        Communication & Support
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #25d366, #128c7e); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fab fa-whatsapp"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">WhatsApp Business API Integration</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Automated messaging and customer engagement</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 200,000</div>
            <button onclick="bookAddon('WhatsApp Business API Integration', 200000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-comments"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Live Chat Support System</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Real-time website chat support</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 180,000</div>
            <button onclick="bookAddon('Live Chat Support System', 180000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f093fb, #f5576c); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-bell"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Push Notifications (Web + Mobile)</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Instant alerts for offers and updates</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 120,000</div>
            <button onclick="bookAddon('Push Notifications (Web + Mobile)', 120000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-headset"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Emergency 24/7 Support</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Priority technical support anytime</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 100,000/month</div>
            <button onclick="bookAddon('Emergency 24/7 Support', 100000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Localization & Branding -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #a8edea, #fed6e3); color: #333; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">🌍</span>
        Localization & Branding
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #a8edea, #fed6e3); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #333; font-size: 1.5rem;">
              <i class="fas fa-language"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Multi-Language (DE / FR / IT)</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Reach international customers</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 300,000 per language</div>
            <button onclick="bookAddon('Multi-Language (DE / FR / IT)', 300000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-palette"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Logo Design + Brand Kit</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Professional branding package</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000</div>
            <button onclick="bookAddon('Logo Design + Brand Kit', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-envelope-open"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Domain + Professional Email Setup</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Custom business emails (e.g. info@yourdomain.com)</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 80,000</div>
            <button onclick="bookAddon('Domain + Professional Email Setup', 80000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Security & Performance -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #fc4a1a, #f7b733); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">⚙️</span>
        Security, Performance & Infrastructure
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #fc4a1a, #f7b733); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-tachometer-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Website Speed Optimization</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Improve performance and loading speed</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 120,000</div>
            <button onclick="bookAddon('Website Speed Optimization', 120000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #11998e, #38ef7d); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-shield-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Security Hardening & Firewall Setup</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Protect against hacking and vulnerabilities</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000</div>
            <button onclick="bookAddon('Security Hardening & Firewall Setup', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Cloud Backup & Disaster Recovery</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Automatic backups and restore solutions</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000/month</div>
            <button onclick="bookAddon('Cloud Backup & Disaster Recovery', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f093fb, #f5576c); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-chart-bar"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Monthly Performance Report</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Detailed insights on system performance</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 80,000/month</div>
            <button onclick="bookAddon('Monthly Performance Report', 80000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- System Auditing -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #e74c3c, #c0392b); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">🔍</span>
        System Auditing (Premium)
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #e74c3c, #c0392b); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-search-dollar"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">System Audit & Performance Review</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Full inspection: security, performance, code, APIs. Includes vulnerability check, payment & API audit, SEO review</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 200,000 – 500,000</div>
            <button onclick="bookAddon('System Audit & Performance Review', 200000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #9b59b6, #8e44ad); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-chart-line"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Monthly System Monitoring & Audit</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Continuous monitoring, alerts, and optimization</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 150,000/month</div>
            <button onclick="bookAddon('Monthly System Monitoring & Audit', 150000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #3498db, #2980b9); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-user-secret"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Penetration Testing (Advanced Security)</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Simulated real-world attacks to test system security</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 400,000+</div>
            <button onclick="bookAddon('Penetration Testing (Advanced Security)', 400000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile & Advanced -->
    <div style="margin-bottom: 50px;">
      <h3 style="color: var(--navy); margin-bottom: 25px; font-size: 1.5rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        <span style="background: linear-gradient(135deg, #4facfe, #00f2fe); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">📱</span>
        Mobile & Advanced
      </h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="addon-card" style="padding: 25px; border: 1px solid #e0e0e0; border-radius: 16px; background: white; transition: all 0.3s; box-shadow: var(--shadow);">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div style="font-weight: 700; font-size: 1.15rem; color: var(--navy);">Mobile App (Android – Basic)</div>
          </div>
          <div style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 15px;">Convert your system into a mobile app</div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div style="color: var(--accent); font-weight: 700; font-size: 1.2rem;">TZS 800,000+</div>
            <button onclick="bookAddon('Mobile App (Android – Basic)', 800000)" style="background: var(--navy); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <div style="text-align: center; margin-top: 60px;">
      <a href="{{ route('package.selection') }}" class="btn-primary" style="padding: 15px 40px; font-size: 1.1rem; border-radius: 50px; border: none; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); color: white; cursor: pointer; transition: transform 0.2s; text-decoration: none; display: inline-block;">
        <i class="fas fa-arrow-right"></i> Select Add-Ons & Get Started
      </a>
    </div>
  </div>
</section>

<script>
function bookAddon(serviceName, price) {
  // Store the selected addon in session storage
  sessionStorage.setItem('selectedAddon', JSON.stringify({
    name: serviceName,
    price: price
  }));
  
  // Redirect to package selection or create a booking flow
  window.location.href = '{{ route('package.selection') }}';
}
</script>

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
