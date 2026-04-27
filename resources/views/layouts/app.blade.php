<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jezdan Technology - Professional ICT Solutions in Tanzania. Web development, mobile apps, network installation, cybersecurity, IT support, and more.">
  <meta name="keywords" content="ICT Tanzania, Web Development, Mobile Apps, Network Installation, Cybersecurity, IT Support, Moshi, Kilimanjaro">
  <title>@yield('title', 'Jezdan Technology | ICT Solutions & Digital Services – Tanzania')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-N2F56W4HPN');
  </script>
  
  <!-- Google Search Console Verification -->
  <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE_HERE">
  
  @yield('meta_tags')
  <meta name="author" content="Jezdan Technology">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#0b1f3a">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="@yield('og_url', url()->current())">
<meta property="og:title" content="@yield('og_title', 'Jezdan Technology | ICT Solutions & Digital Services – Tanzania')">
<meta property="og:description" content="@yield('og_description', 'Jezdan Technology is a leading ICT company in Moshi, Kilimanjaro, Tanzania. We provide web development, mobile apps, network installation, cybersecurity, IT support, cloud services, and system development solutions for businesses across Tanzania.')">
<meta property="og:image" content="@yield('og_image', asset('jezdan-logo.png'))">
<meta property="og:site_name" content="Jezdan Technology">
<meta property="og:locale" content="en_TZ">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="@yield('twitter_url', url()->current())">
<meta property="twitter:title" content="@yield('twitter_title', 'Jezdan Technology | ICT Solutions & Digital Services – Tanzania')">
<meta property="twitter:description" content="@yield('twitter_description', 'Jezdan Technology is a leading ICT company in Moshi, Kilimanjaro, Tanzania. We provide web development, mobile apps, network installation, cybersecurity, IT support, cloud services, and system development solutions for businesses across Tanzania.')">
<meta property="twitter:image" content="@yield('twitter_image', asset('jezdan-logo.png'))">

<!-- Canonical URL -->
<link rel="canonical" href="@yield('canonical', url()->current())">

@yield('meta_tags')
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
  :root {
    --navy: #0b1f3a;
    --navy-mid: #122952;
    --navy-light: #1a3a6e;
    --accent: #1a6fc4;
    --accent-bright: #2b8eff;
    --gold: #f5a623;
    --white: #ffffff;
    --off-white: #f7f9fc;
    --light-gray: #e8edf5;
    --text-dark: #0b1f3a;
    --text-mid: #3d5170;
    --text-light: #6b80a3;
    --success: #00c896;
    --font-display: 'Playfair Display', Georgia, serif;
    --font-body: 'DM Sans', sans-serif;
    --font-mono: 'Space Mono', monospace;
    --shadow: 0 4px 30px rgba(11,31,58,0.10);
    --shadow-hover: 0 12px 48px rgba(11,31,58,0.18);
    --radius: 16px;
    --radius-sm: 8px;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    font-family: var(--font-body);
    background: var(--white);
    color: var(--text-dark);
    overflow-x: hidden;
    line-height: 1.6;
  }

  /* ── SCROLLBAR ── */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--light-gray); }
  ::-webkit-scrollbar-thumb { background: var(--navy-light); border-radius: 3px; }

  /* ── NAV ── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: rgba(11,31,58,0.97);
    backdrop-filter: blur(12px);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 5%;
    height: 70px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.3);
  }
  .nav-logo {
    display: flex; align-items: center; gap: 10px;
    text-decoration: none;
  }
  .nav-logo-icon {
    width: 40px; height: 40px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px; color: white;
    font-weight: 700;
  }
  .nav-logo-text {
    font-family: var(--font-display);
    color: var(--white);
    font-size: 1.3rem;
    font-weight: 700;
    letter-spacing: -0.5px;
  }
  .nav-logo-text span { color: var(--gold); }
  .nav-links {
    display: flex; gap: 28px; list-style: none;
  }
  .nav-links a {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    letter-spacing: 0.3px;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--gold); }
  .nav-links a.active { 
    color: var(--gold); 
    font-weight: 600;
    background: rgba(255,255,255,0.1);
    padding: 8px 16px;
    border-radius: 20px;
  }
  .nav-cta {
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white !important;
    padding: 8px 20px;
    border-radius: 50px;
    font-weight: 600 !important;
    transition: transform 0.2s, box-shadow 0.2s !important;
  }
  .nav-cta:hover { transform: translateY(-1px); box-shadow: 0 4px 16px rgba(43,142,255,0.4) !important; }
  .hamburger {
    display: none;
    background: none; border: none;
    color: white; font-size: 1.4rem; cursor: pointer;
  }

  /* ── HERO ── */
  .hero {
    min-height: 100vh;
    background: var(--navy);
    position: relative;
    display: flex; align-items: center;
    overflow: hidden;
    padding-top: 70px;
  }
  .hero-bg-img {
    position: absolute; inset: 0;
    background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1600&q=80');
    background-size: cover;
    background-position: center;
    opacity: 0.07;
  }
  .hero-grid-overlay {
    position: absolute; inset: 0;
    background-image:
      linear-gradient(rgba(43,142,255,0.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(43,142,255,0.06) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  .hero-glow {
    position: absolute;
    width: 600px; height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(43,142,255,0.15) 0%, transparent 70%);
    top: -100px; right: -100px;
    pointer-events: none;
  }
  .hero-glow-2 {
    position: absolute;
    width: 400px; height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(245,166,35,0.08) 0%, transparent 70%);
    bottom: 50px; left: 50px;
    pointer-events: none;
  }
  .hero-content {
    position: relative; z-index: 2;
    width: 90%; max-width: 1200px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 60px; align-items: center;
    padding: 80px 0;
  }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(43,142,255,0.15);
    border: 1px solid rgba(43,142,255,0.3);
    color: var(--accent-bright);
    padding: 6px 16px; border-radius: 50px;
    font-size: 0.78rem; font-weight: 600;
    letter-spacing: 1px; text-transform: uppercase;
    margin-bottom: 24px;
    animation: fadeInUp 0.6s ease both;
  }
  .hero-badge .dot {
    width: 6px; height: 6px; border-radius: 50%;
    background: var(--success);
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%,100% { opacity:1; transform: scale(1); }
    50% { opacity:0.5; transform: scale(1.4); }
  }
  .hero-title {
    font-family: var(--font-display);
    font-size: clamp(2.4rem, 5vw, 3.8rem);
    font-weight: 900;
    color: var(--white);
    line-height: 1.1;
    margin-bottom: 24px;
    animation: fadeInUp 0.7s 0.1s ease both;
  }
  .hero-title span { color: var(--gold); }
  .hero-subtitle {
    font-size: 1.1rem; color: rgba(255,255,255,0.7);
    max-width: 520px; margin-bottom: 40px;
    line-height: 1.75;
    animation: fadeInUp 0.7s 0.2s ease both;
  }
  .hero-actions {
    display: flex; gap: 16px; flex-wrap: wrap;
    animation: fadeInUp 0.7s 0.3s ease both;
  }
  .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white; padding: 14px 28px;
    border-radius: 50px; font-weight: 600; font-size: 0.95rem;
    text-decoration: none; cursor: pointer; border: none;
    transition: all 0.25s; box-shadow: 0 4px 20px rgba(43,142,255,0.35);
  }
  .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(43,142,255,0.5); }
  .btn-outline {
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent;
    color: white; padding: 14px 28px;
    border-radius: 50px; font-weight: 600; font-size: 0.95rem;
    text-decoration: none; cursor: pointer;
    border: 1.5px solid rgba(255,255,255,0.3);
    transition: all 0.25s;
  }
  .btn-outline:hover { border-color: white; background: rgba(255,255,255,0.08); }
  .hero-stats {
    display: flex; gap: 32px; margin-top: 48px;
    animation: fadeInUp 0.7s 0.4s ease both;
  }
  .hero-stat-num {
    font-family: var(--font-display);
    font-size: 2rem; font-weight: 900; color: var(--gold);
    display: block;
  }
  .hero-stat-label {
    font-size: 0.8rem; color: rgba(255,255,255,0.5);
    text-transform: uppercase; letter-spacing: 0.5px;
  }
  .hero-right {
    animation: fadeInUp 0.7s 0.2s ease both;
    position: relative;
  }
  .hero-img-card {
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 24px 64px rgba(0,0,0,0.5);
    position: relative;
  }
  .hero-img-card img {
    width: 100%; display: block;
    height: 420px; object-fit: cover;
  }
  .hero-img-badge {
    position: absolute; bottom: 20px; left: 20px;
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(43,142,255,0.3);
    border-radius: 12px; padding: 14px 18px;
    color: white;
  }
  .hero-img-badge-title {
    font-size: 0.78rem; color: var(--accent-bright);
    font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;
    margin-bottom: 4px;
  }
  .hero-img-badge-val {
    font-family: var(--font-display);
    font-size: 1.4rem; font-weight: 700; color: white;
  }
  .hero-float-card {
    position: absolute; top: 20px; right: -20px;
    background: white;
    border-radius: 12px; padding: 14px 18px;
    box-shadow: var(--shadow-hover);
    display: flex; align-items: center; gap: 12px;
    animation: float 3s ease-in-out infinite;
  }
  @keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
  }
  .hero-float-icon {
    width: 40px; height: 40px; border-radius: 10px;
    background: linear-gradient(135deg, var(--navy), var(--navy-light));
    display: flex; align-items: center; justify-content: center;
    color: var(--accent-bright); font-size: 18px;
  }
  .hero-float-text { font-size: 0.8rem; color: var(--text-mid); font-weight: 600; }
  .hero-float-text strong { display: block; color: var(--text-dark); font-size: 0.92rem; }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(24px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* ── SECTION COMMON ── */
  section { padding: 100px 5%; }
  .section-label {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(26,111,196,0.1);
    border: 1px solid rgba(26,111,196,0.2);
    color: var(--accent);
    padding: 5px 14px; border-radius: 50px;
    font-size: 0.75rem; font-weight: 700;
    letter-spacing: 1.2px; text-transform: uppercase;
    margin-bottom: 16px;
  }
  .section-title {
    font-family: var(--font-display);
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 900; color: var(--navy);
    line-height: 1.2; margin-bottom: 16px;
  }
  .section-title span { color: var(--accent); }
  .section-sub {
    font-size: 1.05rem; color: var(--text-mid);
    max-width: 560px; line-height: 1.75;
  }
  .section-header { margin-bottom: 60px; }
  .container { max-width: 1200px; margin: 0 auto; }

  /* ── TRUST STRIP ── */
  .trust-strip {
    background: var(--navy);
    padding: 28px 5%;
  }
  .trust-strip-inner {
    max-width: 1200px; margin: 0 auto;
    display: flex; align-items: center; justify-content: space-between;
    gap: 24px; flex-wrap: wrap;
  }
  .trust-item {
    display: flex; align-items: center; gap: 10px;
    color: rgba(255,255,255,0.7); font-size: 0.88rem; font-weight: 500;
  }
  .trust-item i { color: var(--gold); font-size: 1.1rem; }
  .trust-divider { width: 1px; height: 24px; background: rgba(255,255,255,0.15); }

  /* ── SERVICES ── */
  .services { background: var(--off-white); }
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 28px;
  }
  .service-card {
    background: white;
    border-radius: var(--radius);
    padding: 36px 30px;
    box-shadow: var(--shadow);
    transition: all 0.3s;
    position: relative; overflow: hidden;
    border: 1px solid transparent;
    cursor: pointer;
  }
  .service-card::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, var(--accent), var(--accent-bright));
    transform: scaleX(0); transform-origin: left;
    transition: transform 0.3s;
  }
  .service-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); border-color: rgba(26,111,196,0.15); }
  .service-card:hover::before { transform: scaleX(1); }
  .service-icon {
    width: 64px; height: 64px; border-radius: 16px;
    background: linear-gradient(135deg, var(--navy), var(--navy-light));
    display: flex; align-items: center; justify-content: center;
    color: var(--accent-bright); font-size: 26px;
    margin-bottom: 24px;
    transition: transform 0.3s;
  }
  .service-card:hover .service-icon { transform: scale(1.08) rotate(-4deg); }
  .service-card h3 {
    font-family: var(--font-display);
    font-size: 1.25rem; font-weight: 700;
    color: var(--navy); margin-bottom: 12px;
  }
  .service-card p { font-size: 0.92rem; color: var(--text-mid); line-height: 1.7; margin-bottom: 20px; }
  .service-price {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--off-white);
    border: 1px solid var(--light-gray);
    border-radius: 50px; padding: 5px 14px;
    font-family: var(--font-mono); font-size: 0.8rem;
    font-weight: 700; color: var(--navy);
  }
  .service-price i { color: var(--accent); font-size: 0.7rem; }
  .service-link {
    display: flex; align-items: center; gap: 6px;
    color: var(--accent); font-weight: 600; font-size: 0.88rem;
    text-decoration: none; margin-top: 16px;
    transition: gap 0.2s;
  }
  .service-card:hover .service-link { gap: 10px; }

  /* ── TOUR PACKAGES ── */
  .tour-packages { background: white; }
  .packages-tabs {
    display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 48px;
  }
  .tab-btn {
    padding: 10px 22px; border-radius: 50px;
    border: 1.5px solid var(--light-gray);
    background: white; cursor: pointer;
    font-family: var(--font-body); font-size: 0.88rem; font-weight: 600;
    color: var(--text-mid); transition: all 0.2s;
  }
  .tab-btn.active, .tab-btn:hover {
    background: var(--navy); border-color: var(--navy);
    color: white;
  }
  .tab-panel { display: none; }
  .tab-panel.active { display: block; }
  .pricing-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 28px;
  }
  .pricing-card {
    border-radius: var(--radius); padding: 36px 30px;
    border: 1.5px solid var(--light-gray);
    background: white; transition: all 0.3s; position: relative;
  }
  .pricing-card.featured {
    background: var(--navy); border-color: var(--navy);
    color: white;
    transform: scale(1.03);
    box-shadow: 0 20px 60px rgba(11,31,58,0.3);
  }
  .pricing-badge {
    position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
    background: var(--gold); color: var(--navy);
    padding: 4px 18px; border-radius: 50px;
    font-size: 0.75rem; font-weight: 800; text-transform: uppercase;
    letter-spacing: 0.5px; white-space: nowrap;
  }
  .pricing-card:hover:not(.featured) { border-color: var(--accent); box-shadow: var(--shadow-hover); }
  .pricing-tier {
    font-size: 0.78rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 1px; color: var(--accent); margin-bottom: 8px;
  }
  .pricing-card.featured .pricing-tier { color: var(--gold); }
  .pricing-name {
    font-family: var(--font-display);
    font-size: 1.5rem; font-weight: 900; color: var(--navy); margin-bottom: 8px;
  }
  .pricing-card.featured .pricing-name { color: white; }
  .pricing-price {
    margin: 20px 0;
    display: flex; align-items: baseline; gap: 4px;
  }
  .pricing-currency { font-size: 0.9rem; color: var(--text-light); font-weight: 600; }
  .pricing-amount {
    font-family: var(--font-display);
    font-size: 2.2rem; font-weight: 900; color: var(--navy);
    line-height: 1;
  }
  .pricing-card.featured .pricing-amount,
  .pricing-card.featured .pricing-currency { color: white; }
  .pricing-period { font-size: 0.8rem; color: var(--text-light); }
  .pricing-divider { height: 1px; background: var(--light-gray); margin: 20px 0; }
  .pricing-card.featured .pricing-divider { background: rgba(255,255,255,0.15); }
  .pricing-features { list-style: none; display: flex; flex-direction: column; gap: 10px; margin-bottom: 28px; }
  .pricing-features li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 0.88rem; color: var(--text-mid); line-height: 1.5;
  }
  .pricing-card.featured .pricing-features li { color: rgba(255,255,255,0.8); }
  .pricing-features li i { color: var(--success); flex-shrink: 0; margin-top: 3px; }
  .btn-package {
    display: block; width: 100%; text-align: center;
    padding: 13px; border-radius: 50px;
    font-weight: 700; font-size: 0.92rem; text-decoration: none;
    transition: all 0.25s; border: 1.5px solid var(--navy);
    background: transparent; color: var(--navy); cursor: pointer;
  }
  .btn-package:hover { background: var(--navy); color: white; }
  .pricing-card.featured .btn-package {
    background: var(--gold); border-color: var(--gold); color: var(--navy);
  }
  .pricing-card.featured .btn-package:hover { background: #e8950f; border-color: #e8950f; }

  /* ── PROCESS ── */
  .process { background: var(--navy); }
  .process .section-title { color: white; }
  .process .section-sub { color: rgba(255,255,255,0.6); }
  .process .section-label { background: rgba(43,142,255,0.15); color: var(--accent-bright); }
  .process-steps {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0; position: relative;
    margin-top: 60px;
  }
  .process-steps::before {
    content: '';
    position: absolute; top: 40px; left: 10%; right: 10%; height: 1px;
    background: linear-gradient(90deg, transparent, rgba(43,142,255,0.4), transparent);
  }
  .process-step { text-align: center; padding: 0 20px; position: relative; }
  .step-num {
    width: 80px; height: 80px; border-radius: 50%;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 24px;
    font-family: var(--font-mono); font-size: 1.4rem; font-weight: 700; color: white;
    box-shadow: 0 8px 24px rgba(43,142,255,0.4);
    position: relative; z-index: 1;
  }
  .process-step h4 {
    font-family: var(--font-display);
    font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 10px;
  }
  .process-step p { font-size: 0.88rem; color: rgba(255,255,255,0.55); line-height: 1.65; }

  /* ── ABOUT / WHY US ── */
  .why-us { background: var(--off-white); }
  .why-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: center;
  }
  .why-img-stack { position: relative; height: 500px; }
  .why-img-main {
    position: absolute; top: 0; left: 0;
    width: 70%; border-radius: var(--radius); overflow: hidden;
    box-shadow: var(--shadow-hover);
  }
  .why-img-main img { width: 100%; height: 340px; object-fit: cover; display: block; }
  .why-img-sec {
    position: absolute; bottom: 0; right: 0;
    width: 60%; border-radius: var(--radius); overflow: hidden;
    box-shadow: var(--shadow-hover);
    border: 4px solid white;
  }
  .why-img-sec img { width: 100%; height: 220px; object-fit: cover; display: block; }
  .why-img-badge2 {
    position: absolute; top: 50%; left: 55%; transform: translate(-50%, -50%);
    background: var(--navy);
    border-radius: 14px; padding: 16px 20px; text-align: center;
    color: white; box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    z-index: 2;
  }
  .why-img-badge2-num {
    font-family: var(--font-display); font-size: 2rem; font-weight: 900; color: var(--gold);
  }
  .why-img-badge2-label { font-size: 0.78rem; color: rgba(255,255,255,0.7); }
  .why-points { display: flex; flex-direction: column; gap: 24px; margin-top: 32px; }
  .why-point {
    display: flex; gap: 16px; align-items: flex-start;
    background: white; border-radius: var(--radius-sm);
    padding: 20px; box-shadow: var(--shadow); border-left: 3px solid var(--accent);
  }
  .why-point-icon {
    width: 44px; height: 44px; border-radius: 10px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--navy), var(--navy-light));
    display: flex; align-items: center; justify-content: center;
    color: var(--accent-bright); font-size: 18px;
  }
  .why-point h5 { font-weight: 700; color: var(--navy); margin-bottom: 4px; }
  .why-point p { font-size: 0.88rem; color: var(--text-mid); line-height: 1.6; }

  /* ── TECHNOLOGIES ── */
  .tech-strip { background: white; padding: 60px 5%; }
  .tech-strip-inner { max-width: 1200px; margin: 0 auto; }
  .tech-logos {
    display: flex; gap: 32px; align-items: center;
    flex-wrap: wrap; justify-content: center; margin-top: 32px;
  }
  .tech-logo-item {
    background: var(--off-white); border: 1px solid var(--light-gray);
    border-radius: 10px; padding: 12px 24px;
    font-family: var(--font-mono); font-size: 0.8rem; font-weight: 700;
    color: var(--text-mid); transition: all 0.2s;
  }
  .tech-logo-item:hover { background: var(--navy); color: white; border-color: var(--navy); }

  /* ── TESTIMONIALS ── */
  .testimonials { background: var(--navy); }
  .testimonials .section-title { color: white; }
  .testimonials .section-sub { color: rgba(255,255,255,0.6); }
  .testimonials .section-label { background: rgba(43,142,255,0.15); color: var(--accent-bright); }
  .testimonials-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 28px;
  }
  .testimonial-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: var(--radius); padding: 32px;
    transition: all 0.3s;
  }
  .testimonial-card:hover { background: rgba(255,255,255,0.09); transform: translateY(-4px); }
  .testimonial-stars { color: var(--gold); margin-bottom: 16px; font-size: 0.9rem; }
  .testimonial-text { color: rgba(255,255,255,0.8); font-size: 0.95rem; line-height: 1.75; margin-bottom: 24px; font-style: italic; }
  .testimonial-author { display: flex; align-items: center; gap: 12px; }
  .testimonial-avatar {
    width: 44px; height: 44px; border-radius: 50%;
    object-fit: cover; border: 2px solid var(--accent-bright);
  }
  .testimonial-name { font-weight: 700; color: white; font-size: 0.9rem; }
  .testimonial-role { font-size: 0.78rem; color: rgba(255,255,255,0.5); }

  /* ── EXTRAS / ADD-ONS ── */
  .addons { background: var(--off-white); }
  .addons-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
  }
  .addon-card {
    background: white; border-radius: var(--radius-sm);
    padding: 24px; box-shadow: var(--shadow);
    display: flex; gap: 14px; align-items: flex-start;
    border: 1px solid transparent; transition: all 0.25s;
  }
  .addon-card:hover { border-color: var(--accent); box-shadow: var(--shadow-hover); }
  .addon-icon {
    width: 42px; height: 42px; border-radius: 10px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--navy), var(--navy-light));
    display: flex; align-items: center; justify-content: center;
    color: var(--accent-bright); font-size: 16px;
  }
  .addon-card h5 { font-size: 0.9rem; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
  .addon-card .addon-price {
    font-family: var(--font-mono); font-size: 0.78rem;
    color: var(--accent); font-weight: 700;
  }

  /* ── STATS ── */
  .stats { background: white; padding: 80px 5%; }
  .stats-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 40px; max-width: 1000px; margin: 0 auto;
    text-align: center;
  }
  .stat-item { }
  .stat-num {
    font-family: var(--font-display);
    font-size: 3rem; font-weight: 900; color: var(--navy);
    display: block; line-height: 1;
  }
  .stat-num span { color: var(--accent); }
  .stat-label { color: var(--text-mid); font-size: 0.9rem; margin-top: 8px; }
  .stat-bar {
    height: 4px; border-radius: 2px;
    background: var(--light-gray); margin-top: 12px;
    overflow: hidden;
  }
  .stat-bar-fill {
    height: 100%; border-radius: 2px;
    background: linear-gradient(90deg, var(--accent), var(--accent-bright));
    animation: barFill 1.5s ease both;
  }
  @keyframes barFill {
    from { width: 0; }
  }

  /* ── CTA BANNER ── */
  .cta-banner {
    background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
    padding: 80px 5%; text-align: center; position: relative; overflow: hidden;
  }
  .cta-banner::before {
    content: '';
    position: absolute; inset: 0;
    background-image:
      linear-gradient(rgba(43,142,255,0.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(43,142,255,0.05) 1px, transparent 1px);
    background-size: 40px 40px;
  }
  .cta-inner { position: relative; max-width: 700px; margin: 0 auto; }
  .cta-banner h2 {
    font-family: var(--font-display);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 900; color: white; margin-bottom: 16px;
  }
  .cta-banner h2 span { color: var(--gold); }
  .cta-banner p { color: rgba(255,255,255,0.7); font-size: 1.05rem; margin-bottom: 36px; line-height: 1.7; }
  .cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
  .btn-whatsapp {
    display: inline-flex; align-items: center; gap: 10px;
    background: #25d366; color: white;
    padding: 14px 28px; border-radius: 50px;
    font-weight: 700; font-size: 0.95rem; text-decoration: none;
    transition: all 0.25s; box-shadow: 0 4px 20px rgba(37,211,102,0.3);
  }
  .btn-whatsapp:hover { background: #1eb858; transform: translateY(-2px); box-shadow: 0 8px 30px rgba(37,211,102,0.4); }

  /* ── CONTACT ── */
  .contact { background: var(--off-white); }
  .contact-grid {
    display: grid; grid-template-columns: 1fr 1.3fr;
    gap: 60px; align-items: start;
  }
  .contact-info h3 {
    font-family: var(--font-display);
    font-size: 1.8rem; font-weight: 900; color: var(--navy); margin-bottom: 16px;
  }
  .contact-info p { color: var(--text-mid); line-height: 1.75; margin-bottom: 32px; }
  .contact-details { display: flex; flex-direction: column; gap: 16px; }
  .contact-detail {
    display: flex; align-items: center; gap: 14px;
    background: white; padding: 16px 20px; border-radius: var(--radius-sm);
    box-shadow: var(--shadow);
  }
  .contact-detail-icon {
    width: 44px; height: 44px; border-radius: 10px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--navy), var(--navy-light));
    display: flex; align-items: center; justify-content: center;
    color: var(--accent-bright); font-size: 17px;
  }
  .contact-detail-label { font-size: 0.75rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.5px; }
  .contact-detail-val { font-weight: 600; color: var(--navy); font-size: 0.95rem; }
  .contact-form {
    background: white; border-radius: var(--radius);
    padding: 40px; box-shadow: var(--shadow);
  }
  .contact-form h4 {
    font-family: var(--font-display);
    font-size: 1.4rem; font-weight: 800; color: var(--navy); margin-bottom: 24px;
  }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .form-group { margin-bottom: 16px; }
  .form-group label {
    display: block; font-size: 0.82rem; font-weight: 600;
    color: var(--text-mid); margin-bottom: 6px;
  }
  .form-control {
    width: 100%; padding: 12px 16px;
    border: 1.5px solid var(--light-gray);
    border-radius: var(--radius-sm);
    font-family: var(--font-body); font-size: 0.92rem; color: var(--text-dark);
    background: var(--off-white); outline: none;
    transition: border-color 0.2s;
  }
  .form-control:focus { border-color: var(--accent); background: white; }
  select.form-control { cursor: pointer; }
  textarea.form-control { resize: vertical; min-height: 110px; }
  .btn-submit {
    width: 100%; padding: 14px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white; border: none; border-radius: 50px;
    font-family: var(--font-body); font-size: 0.98rem; font-weight: 700;
    cursor: pointer; transition: all 0.25s;
    box-shadow: 0 4px 20px rgba(43,142,255,0.35);
  }
  .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(43,142,255,0.5); }

  /* ── FOOTER ── */
  footer {
    background: var(--navy);
    padding: 70px 5% 30px;
  }
  .footer-top {
    display: grid; grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 40px; margin-bottom: 48px;
  }
  .footer-brand p {
    color: rgba(255,255,255,0.55); font-size: 0.88rem; line-height: 1.75;
    max-width: 300px; margin: 16px 0 24px;
  }
  .footer-social { display: flex; gap: 10px; }
  .social-link {
    width: 36px; height: 36px; border-radius: 8px;
    background: rgba(255,255,255,0.08);
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.6); text-decoration: none; font-size: 0.85rem;
    transition: all 0.2s;
  }
  .social-link:hover { background: var(--accent); color: white; }
  .footer-col h5 {
    color: white; font-weight: 700; font-size: 0.88rem;
    text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 16px;
  }
  .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
  .footer-col ul a {
    color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.88rem;
    transition: color 0.2s;
  }
  .footer-col ul a:hover { color: var(--gold); }
  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 24px;
    display: flex; align-items: center; justify-content: space-between;
    gap: 16px; flex-wrap: wrap;
  }
  .footer-bottom p { color: rgba(255,255,255,0.4); font-size: 0.82rem; }
  .footer-bottom a { color: var(--gold); text-decoration: none; }

  /* ── WHATSAPP FLOAT ── */
  .wa-float {
    position: fixed; bottom: 28px; right: 28px; z-index: 999;
    width: 60px; height: 60px; border-radius: 50%;
    background: #25d366; color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 26px; text-decoration: none;
    box-shadow: 0 4px 20px rgba(37,211,102,0.5);
    animation: waFloat 2.5s ease-in-out infinite;
    transition: transform 0.2s;
  }
  .wa-float:hover { transform: scale(1.1); }
  @keyframes waFloat {
    0%,100% { box-shadow: 0 4px 20px rgba(37,211,102,0.5); }
    50% { box-shadow: 0 4px 40px rgba(37,211,102,0.8); }
  }

  /* ── BACK TO TOP ── */
  #back-top {
    position: fixed; bottom: 100px; right: 28px; z-index: 999;
    width: 44px; height: 44px; border-radius: 50%;
    background: var(--navy); color: white;
    display: flex; align-items: center; justify-content: center;
    text-decoration: none; font-size: 1rem;
    box-shadow: var(--shadow); transition: all 0.2s;
    opacity: 0; pointer-events: none;
  }
  #back-top.visible { opacity: 1; pointer-events: auto; }
  #back-top:hover { background: var(--accent); transform: translateY(-3px); }

  /* ── MOBILE ── */
  @media (max-width: 900px) {
    .nav-links { display: none; }
    .nav-links.open {
      display: flex; flex-direction: column;
      position: fixed; top: 70px; left: 0; right: 0;
      background: var(--navy); padding: 24px 5%;
      gap: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    .hamburger { display: block; }
    .hero-content { grid-template-columns: 1fr; gap: 40px; }
    .hero-right { display: none; }
    .hero-stats { gap: 20px; flex-wrap: wrap; }
    .why-grid { grid-template-columns: 1fr; }
    .why-img-stack { height: 300px; }
    .contact-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .form-row { grid-template-columns: 1fr; }
    .process-steps::before { display: none; }
  }
  @media (max-width: 600px) {
    section { padding: 70px 5%; }
    .footer-top { grid-template-columns: 1fr; }
    .trust-divider { display: none; }
    .pricing-card.featured { transform: scale(1); }
  }
</style>
@yield('additional_styles')
</head>
<body>

<!-- NAV -->
<nav>
  <a href="{{ route('home') }}" class="nav-logo">
    <img src="{{ asset('jezdan-logo.png') }}" alt="Jezdan Technology" style="height: 40px; width: auto; background: white; border-radius: 8px; padding: 5px;">
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
    <li><a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a></li>
    <li><a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
    <li><a href="{{ route('package.selection') }}" class="nav-cta">Get a Quote</a></li>
  </ul>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <i class="fas fa-bars"></i>
  </button>
</nav>

@yield('content')

<!-- FOOTER -->
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <a href="{{ route('home') }}" style="margin-bottom: 15px; display: inline-block;">
        <img src="{{ asset('jezdan-logo.png') }}" alt="Jezdan Technology" style="height: 50px; width: auto; background: white; border-radius: 8px; padding: 5px;">
      </a>
      <p>Jezdan Technology is a leading ICT company based in Moshi, Kilimanjaro, Tanzania. We deliver world-class digital services with a deep understanding of Tanzania's unique business landscape.</p>
      <div class="footer-social">
        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
        <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h5>Services</h5>
      <ul>
        <li><a href="{{ route('services.web-development') }}">Web Development</a></li>
        <li><a href="{{ route('services.mobile-app-development') }}">Mobile App Development</a></li>
        <li><a href="{{ route('services.network-installation') }}">Network Installation</a></li>
        <li><a href="{{ route('services.cybersecurity') }}">Cybersecurity</a></li>
        <li><a href="{{ route('services.it-support') }}">IT Support</a></li>
        <li><a href="{{ route('services.ict-consultancy') }}">ICT Consultancy</a></li>
        <li><a href="{{ route('services.system-development') }}">System Development</a></li>
        <li><a href="{{ route('services.cloud-services') }}">Cloud Services</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Company</h5>
      <ul>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('home') }}#testimonials">Client Reviews</a></li>
        <li><a href="{{ route('pricing') }}">Pricing</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
        <li><a href="{{ route('portfolio') }}">Our Portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Contact</h5>
      <ul>
        <li><a href="tel:+255685847002"><i class="fas fa-phone" style="width:14px;"></i> +255 685 847 002</a></li>
        <li><a href="tel:+255622239304"><i class="fas fa-phone" style="width:14px;"></i> +255 622 239 304</a></li>
        <li><a href="mailto:jezdantechnology@gmail.com"><i class="fas fa-envelope" style="width:14px;"></i> jezdantechnology@gmail.com</a></li>
        <li><a href="#"><i class="fas fa-map-marker-alt" style="width:14px;"></i> Moshi, Kilimanjaro, Tanzania</a></li>
        <li><a href="https://wa.me/255685847002" target="_blank"><i class="fab fa-whatsapp" style="width:14px;color:#25d366;"></i> WhatsApp Us</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 Jezdan Technology. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    <p style="color:rgba(255,255,255,0.3);">Built with ❤️ in Moshi, Kilimanjaro, Tanzania 🇹🇿</p>
  </div>
</footer>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!" class="wa-float" target="_blank" title="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- BACK TO TOP -->
<a href="#home" id="back-top" title="Back to top"><i class="fas fa-chevron-up"></i></a>

<script>
  // Hamburger menu
  document.getElementById('hamburger').addEventListener('click', function() {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('open');
    this.innerHTML = nav.classList.contains('open')
      ? '<i class="fas fa-times"></i>'
      : '<i class="fas fa-bars"></i>';
  });

  // Close nav on link click (mobile)
  document.querySelectorAll('#navLinks a').forEach(a => {
    a.addEventListener('click', () => {
      document.getElementById('navLinks').classList.remove('open');
      document.getElementById('hamburger').innerHTML = '<i class="fas fa-bars"></i>';
    });
  });

  // Tab switcher
  function switchTab(id) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    event.target.classList.add('active');
    document.getElementById('tab-' + id).classList.add('active');
  }

  // Back to top visibility
  window.addEventListener('scroll', function() {
    const btn = document.getElementById('back-top');
    btn.classList.toggle('visible', window.scrollY > 400);
  });

  // Form submit (demo)
  function submitForm() {
    const btn = document.querySelector('.btn-submit');
    btn.innerHTML = '<i class="fas fa-check"></i> Message Sent! We\'ll reply within 2 hours.';
    btn.style.background = 'linear-gradient(135deg, #00c896, #00a67e)';
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message — We Reply Within 2 Hours';
      btn.style.background = '';
    }, 4000);
  }

  // Intersection Observer for count-up animation
  const statNums = document.querySelectorAll('.stat-num');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animation = 'fadeInUp 0.6s ease both';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  statNums.forEach(n => observer.observe(n));

  // Smooth active nav link on scroll
  const sections = document.querySelectorAll('section[id], div[id]');
  const navLinks = document.querySelectorAll('.nav-links a');
  
  // Set active link based on current route
  const currentPath = window.location.pathname;
  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });
  
  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(s => {
      if (window.scrollY >= s.offsetTop - 100) current = s.id;
    });
    navLinks.forEach(a => {
      a.style.color = a.getAttribute('href') === '#' + current
        ? 'var(--gold)'
        : '';
    });
  });
</script>
@yield('additional_scripts')
</body>
</html>
