@extends('layouts.app')

@section('title', 'Contact Us | ICT Company in Tanzania')

@section('meta_tags')
  <meta name="description" content="Contact our ICT company in Tanzania for web development, mobile apps, network installation and IT support services.">
  <meta name="keywords" content="contact ICT company Tanzania, IT services Dar es Salaam contact, Jezdan Technology contact">
  <meta property="og:title" content="Contact Us | ICT Company in Tanzania">
  <meta property="og:description" content="Contact our ICT company in Tanzania for web development, mobile apps, network installation and IT support services.">
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
        Get In Touch
      </div>
      <h1 class="hero-title">
        Let's Build Something <span>Great Together</span>
      </h1>
      <p class="hero-subtitle">
        Whether you're starting from scratch or upgrading your existing systems, our team in Moshi, Kilimanjaro is ready to help. Reach out today for a free, no-obligation consultation.
      </p>
      <div class="hero-actions">
        <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'd%20like%20a%20free%20consultation." class="btn-primary" target="_blank">
          <i class="fab fa-whatsapp"></i> WhatsApp Us Now
        </a>
        <a href="tel:+255685847002" class="btn-outline">
          <i class="fas fa-phone"></i> Call Us
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info">
        <div class="section-label"><i class="fas fa-envelope"></i> Contact Information</div>
        <h3>Get In <span style="color:var(--accent);">Touch</span></h3>
        <p>We're here to help with all your ICT needs. Reach out through any of these channels and we'll respond within 2 hours.</p>
        
        <div class="contact-details">
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <div class="contact-detail-label">Location</div>
              <div class="contact-detail-val">Moshi, Kilimanjaro, Tanzania</div>
              <a href="https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania" target="_blank" style="color:var(--accent);font-size:0.85rem;text-decoration:none;">
                <i class="fas fa-external-link-alt"></i> View on Map
              </a>
            </div>
          </div>
          
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
            <div>
              <div class="contact-detail-label">Phone Numbers</div>
              <div class="contact-detail-val">
                <a href="tel:+255685847002" style="color:var(--navy);text-decoration:none;">+255 685 847 002</a>
              </div>
              <div class="contact-detail-val">
                <a href="tel:+255622239304" style="color:var(--navy);text-decoration:none;">+255 622 239 304</a>
              </div>
              <div style="margin-top:8px;">
                <a href="https://wa.me/255685847002" target="_blank" class="btn-whatsapp" style="padding:6px 14px;font-size:0.8rem;">
                  <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://wa.me/255622239304" target="_blank" class="btn-whatsapp" style="padding:6px 14px;font-size:0.8rem;">
                  <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
              </div>
            </div>
          </div>
          
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <div class="contact-detail-label">Email</div>
              <div class="contact-detail-val">
                <a href="mailto:jezdantechnology@gmail.com" style="color:var(--navy);text-decoration:none;">jezdantechnology@gmail.com</a>
              </div>
            </div>
          </div>
          
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="fas fa-clock"></i></div>
            <div>
              <div class="contact-detail-label">Working Hours</div>
              <div class="contact-detail-val">Mon–Sat: 8am–7pm | Sun: 9am–2pm</div>
              <div style="color:var(--success);font-size:0.8rem;margin-top:4px;">
                <i class="fas fa-circle" style="font-size:6px;"></i> Available Now
              </div>
            </div>
          </div>
        </div>
        
        <!-- Social Media Quick Links -->
        <div style="margin-top:32px;">
          <div style="font-weight:700;color:var(--navy);margin-bottom:12px;">Follow Us</div>
          <div style="display:flex;gap:10px;">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
            <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
      
      <div class="contact-form">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
          <h4>Send Us a Message</h4>
          <div style="display:flex;align-items:center;gap:6px;color:var(--success);font-size:0.85rem;">
            <span style="width:8px;height:8px;background:var(--success);border-radius:50%;animation:pulse 2s infinite;"></span>
            We Reply Within 2 Hours
          </div>
        </div>
        
        <form onsubmit="submitForm(event)">
          <div class="form-row">
            <div class="form-group">
              <label>Full Name *</label>
              <input type="text" class="form-control" placeholder="Your full name" required id="fullName" oninput="validateField(this)" />
            </div>
            <div class="form-group">
              <label>Phone / WhatsApp *</label>
              <input type="tel" class="form-control" placeholder="+255 7XX XXX XXX" required id="phone" oninput="validateField(this)" />
            </div>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="your@email.com" id="email" oninput="validateField(this)" />
          </div>
          <div class="form-group">
            <label>Service Interested In *</label>
            <select class="form-control" required id="service" onchange="validateField(this)">
              <option value="">-- Select a Service --</option>
              <option value="web">Web Development</option>
              <option value="mobile">Mobile App Development</option>
              <option value="network">Network Installation</option>
              <option value="cybersecurity">Cybersecurity</option>
              <option value="it-support">IT Support</option>
              <option value="consultancy">ICT Consultancy</option>
              <option value="system">System Development</option>
              <option value="cloud">Cloud Services</option>
              <option value="multiple">Multiple Services</option>
            </select>
          </div>
          <div class="form-group">
            <label>Budget Range (TZS)</label>
            <select class="form-control" id="budget">
              <option value="">-- Select Budget Range --</option>
              <option value="under-500k">Under 500,000</option>
              <option value="500k-1.5m">500,000 – 1,500,000</option>
              <option value="1.5m-5m">1,500,000 – 5,000,000</option>
              <option value="5m-15m">5,000,000 – 15,000,000</option>
              <option value="15m+">15,000,000+</option>
              <option value="not-sure">Not sure yet</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tell Us About Your Project</label>
            <textarea class="form-control" placeholder="Describe your project, goals, and any specific requirements..." id="message" rows="4"></textarea>
          </div>
          <button type="submit" class="btn-submit" id="submitBtn">
            <i class="fas fa-paper-plane"></i> Send Message — We Reply Within 2 Hours
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- QUICK ACTION CARDS -->
<section style="background:var(--off-white);padding:80px 5%;">
  <div class="container">
    <div class="section-header" style="text-align:center;">
      <div class="section-label" style="display:inline-flex;"><i class="fas fa-bolt"></i> Quick Actions</div>
      <h2 class="section-title">Connect <span>Instantly</span></h2>
      <p class="section-sub">Choose your preferred way to reach us</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;margin-top:48px;">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'd%20like%20a%20free%20consultation." target="_blank" style="background:white;border-radius:var(--radius);padding:32px;text-decoration:none;box-shadow:var(--shadow);transition:all 0.3s;display:block;">
        <div style="width:64px;height:64px;background:#25d366;border-radius:16px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
          <i class="fab fa-whatsapp" style="font-size:28px;color:white;"></i>
        </div>
        <h3 style="font-family:var(--font-display);font-size:1.25rem;font-weight:700;color:var(--navy);margin-bottom:8px;">WhatsApp Chat</h3>
        <p style="color:var(--text-mid);font-size:0.92rem;line-height:1.6;">Get instant responses on WhatsApp. We reply within minutes.</p>
      </a>
      
      <a href="tel:+255685847002" style="background:white;border-radius:var(--radius);padding:32px;text-decoration:none;box-shadow:var(--shadow);transition:all 0.3s;display:block;">
        <div style="width:64px;height:64px;background:linear-gradient(135deg,var(--accent),var(--accent-bright));border-radius:16px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
          <i class="fas fa-phone" style="font-size:28px;color:white;"></i>
        </div>
        <h3 style="font-family:var(--font-display);font-size:1.25rem;font-weight:700;color:var(--navy);margin-bottom:8px;">Call Us</h3>
        <p style="color:var(--text-mid);font-size:0.92rem;line-height:1.6;">Speak directly with our team. Available 8am–7pm.</p>
      </a>
      
      <a href="mailto:jezdantechnology@gmail.com" style="background:white;border-radius:var(--radius);padding:32px;text-decoration:none;box-shadow:var(--shadow);transition:all 0.3s;display:block;">
        <div style="width:64px;height:64px;background:linear-gradient(135deg,var(--navy),var(--navy-light));border-radius:16px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
          <i class="fas fa-envelope" style="font-size:28px;color:var(--accent-bright);"></i>
        </div>
        <h3 style="font-family:var(--font-display);font-size:1.25rem;font-weight:700;color:var(--navy);margin-bottom:8px;">Email Us</h3>
        <p style="color:var(--text-mid);font-size:0.92rem;line-height:1.6;">Send detailed inquiries. We respond within 2 hours.</p>
      </a>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="cta-inner">
    <h2>Ready to Start Your <span>Project</span>?</h2>
    <p>Contact us today for a free consultation. No commitment required.</p>
    <div class="cta-actions">
      <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I'm%20interested%20in%20your%20services." class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="tel:+255685847002" class="btn-primary"><i class="fas fa-phone"></i> Call Us Now</a>
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

@section('additional_styles')
<style>
  .contact-detail-val a:hover {
    color: var(--accent) !important;
  }
  .quick-action-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-hover);
  }
</style>
@endsection

@section('additional_scripts')
<script>
  // Form validation
  function validateField(field) {
    field.style.borderColor = field.value.trim() ? 'var(--success)' : 'var(--light-gray)';
  }
  
  // Form submit with validation
  function submitForm(event) {
    event.preventDefault();
    
    const fullName = document.getElementById('fullName').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const service = document.getElementById('service').value;
    
    if (!fullName || !phone || !service) {
      alert('Please fill in all required fields.');
      return;
    }
    
    const btn = document.getElementById('submitBtn');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.style.background = 'linear-gradient(135deg, var(--navy), var(--navy-light))';
    
    // Simulate form submission
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-check"></i> Message Sent! We\'ll reply within 2 hours.';
      btn.style.background = 'linear-gradient(135deg, #00c896, #00a67e)';
      
      // Reset form
      document.querySelector('form').reset();
      
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message — We Reply Within 2 Hours';
        btn.style.background = '';
      }, 4000);
    }, 1500);
  }
</script>
@endsection
