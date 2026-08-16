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
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('favicon_io/favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon_io/android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon_io/android-chrome-512x512.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#062B4D">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="@yield('og_url', url()->current())">
  <meta property="og:title" content="@yield('og_title', 'Jezdan Technology | ICT Solutions & Digital Services – Tanzania')">
  <meta property="og:description" content="@yield('og_description', 'Jezdan Technology is a leading ICT company in Moshi, Kilimanjaro, Tanzania. We provide web development, mobile apps, network installation, cybersecurity, IT support, cloud services, and system development solutions for businesses across Tanzania.')">
  <meta property="og:image" content="@yield('og_image', asset('logo.png'))">
  <meta property="og:site_name" content="Jezdan Technology">
  <meta property="og:locale" content="en_TZ">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="@yield('twitter_url', url()->current())">
  <meta property="twitter:title" content="@yield('twitter_title', 'Jezdan Technology | ICT Solutions & Digital Services – Tanzania')">
  <meta property="twitter:description" content="@yield('twitter_description', 'Jezdan Technology is a leading ICT company in Moshi, Kilimanjaro, Tanzania. We provide web development, mobile apps, network installation, cybersecurity, IT support, cloud services, and system development solutions for businesses across Tanzania.')">
  <meta property="twitter:image" content="@yield('twitter_image', asset('logo.png'))">

  <!-- Canonical URL -->
  <link rel="canonical" href="@yield('canonical', url()->current())">

  <style>
    /* ════════════════════════════════════════════════════════════
       JEZDAN TECHNOLOGY — DESIGN SYSTEM
       Font: Nunito · Palette: Primary #0C4580 · Hover #093967
       Dark #062B4D · Light #E0EBF5 · BG #FFFFFF · Text #062B4D
    ════════════════════════════════════════════════════════════ */

    :root {
      --primary: #0C4580;
      --primary-hover: #093967;
      --dark: #062B4D;
      --light: #E0EBF5;
      --white: #FFFFFF;
      --text: #062B4D;

      /* Derived tones */
      --primary-soft: rgba(12, 69, 128, 0.08);
      --primary-softer: rgba(12, 69, 128, 0.05);
      --primary-ring: rgba(12, 69, 128, 0.28);
      --sky: #3D8FD4;
      --sky-bright: #6FB1E8;
      --ink-muted: #4A5E78;
      --ink-faint: #6E829C;
      --off-white: #F5F8FD;
      --line: #E0EBF5;
      --success: #1FA97A;
      --gold: #F5B53C; /* reserved for star ratings only */
      --whatsapp: #25D366;

      /* Fonts */
      --font-body: 'Nunito', 'Segoe UI', system-ui, -apple-system, sans-serif;
      --font-display: 'Nunito', 'Segoe UI', system-ui, sans-serif;
      --font-mono: 'Nunito', ui-monospace, monospace;

      /* Legacy aliases — keep inline styles on older pages working */
      --navy: #062B4D;
      --navy-mid: #0A3A66;
      --navy-light: #0C4580;
      --accent: #0C4580;
      --accent-bright: #3D8FD4;
      --text-dark: #062B4D;
      --text-mid: #4A5E78;
      --text-light: #6E829C;
      --light-gray: #E0EBF5;

      /* Shadows */
      --shadow-sm: 0 2px 12px rgba(6, 43, 77, 0.06);
      --shadow: 0 10px 40px rgba(6, 43, 77, 0.09);
      --shadow-hover: 0 22px 55px rgba(6, 43, 77, 0.16);
      --shadow-primary: 0 10px 30px rgba(12, 69, 128, 0.28);

      /* Radius */
      --radius: 20px;
      --radius-sm: 12px;

      --grad-primary: linear-gradient(135deg, #0C4580 0%, #093967 100%);
      --grad-dark: linear-gradient(135deg, #062B4D 0%, #0A3A66 55%, #093967 100%);
      --grad-soft: linear-gradient(135deg, #E0EBF5 0%, #F5F8FD 100%);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-body);
      background: var(--white);
      color: var(--text);
      overflow-x: hidden;
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    ::selection { background: var(--primary); color: #fff; }

    ::-webkit-scrollbar { width: 9px; height: 9px; }
    ::-webkit-scrollbar-track { background: var(--off-white); }
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(180deg, #0C4580, #093967);
      border-radius: 8px;
      border: 2px solid var(--off-white);
    }

    img { max-width: 100%; }
    a { color: var(--primary); }

    /* ═══ TOP HEADER ═══ */
    .top-header {
      background: linear-gradient(135deg, #0B0E13 0%, #141922 100%);
      color: #fff;
      padding: 9px 4%;
      font-size: 0.8rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1002;
      position: relative;
      border-bottom: 1px solid rgba(255,255,255,0.06);
    }
    .top-header-info { display: flex; gap: 26px; align-items: center; flex-wrap: wrap; }
    .top-header-info a, .top-header-info span {
      color: rgba(255,255,255,0.78);
      text-decoration: none;
      display: inline-flex; align-items: center; gap: 8px;
      transition: color 0.2s;
      font-weight: 600;
    }
    .top-header-info a:hover { color: var(--sky-bright); }
    .top-header-info i { color: var(--sky-bright); font-size: 0.8rem; }
    .top-header-social { display: flex; gap: 14px; }
    .top-header-social a {
      width: 28px; height: 28px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      background: rgba(255,255,255,0.08);
      color: rgba(255,255,255,0.75);
      font-size: 0.72rem;
      transition: all 0.25s;
    }
    .top-header-social a:hover { background: var(--primary); color: #fff; transform: translateY(-1px); }

    /* ═══ NAVIGATION ═══ */
    nav {
      position: sticky; top: 0; left: 0; right: 0; z-index: 1001;
      width: 100%;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 4%;
      height: 76px;
      box-shadow: 0 1px 0 rgba(6,43,77,0.06), 0 6px 28px rgba(6,43,77,0.05);
    }
    .nav-logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
    .nav-logo-img { display: block; height: 42px; width: auto; max-width: min(200px, 52vw); object-fit: contain; }
    @media (max-width: 480px) { .nav-logo-img { height: 34px; } }
    .nav-logo-text {
      font-family: var(--font-display);
      color: var(--dark);
      font-size: clamp(1rem, 2.4vw, 1.22rem);
      font-weight: 800;
      letter-spacing: -0.4px;
      line-height: 1.15;
      white-space: nowrap;
    }
    .nav-logo-text span { color: var(--primary); }
    .nav-brand {
      font-size: clamp(1.3rem, 3.1vw, 1.7rem);
      font-weight: 900;
      letter-spacing: 2.2px;
      text-transform: uppercase;
    }
    .nav-brand span { letter-spacing: 2.2px; }
    @media (max-width: 480px) { .nav-brand { font-size: 1.05rem; letter-spacing: 1.4px; } .nav-brand span { letter-spacing: 1.4px; } }
    .nav-links { display: flex; gap: 4px; list-style: none; align-items: center; }
    .nav-links > li { position: relative; }
    .nav-links a {
      color: var(--ink-muted);
      text-decoration: none;
      font-size: 0.96rem;
      font-weight: 700;
      padding: 10px 15px;
      border-radius: 10px;
      display: flex; align-items: center; gap: 6px;
      transition: color 0.2s, background 0.2s;
    }
    .nav-links > li > a:hover { color: var(--primary); background: var(--primary-soft); }
    .nav-links a.active {
      color: var(--primary);
      background: var(--primary-soft);
    }
    .nav-links a .caret { font-size: 0.6rem; color: var(--ink-faint); transition: transform 0.2s; }
    .nav-links > li:hover > a .caret { transform: rotate(180deg); }

    /* ═══ MEGA MENU ═══ */
    .nav-links > li.dropdown.mega { position: static; }
    .mega-menu {
      position: absolute; top: 100%; left: 0; right: 0;
      margin: 0 auto;
      width: min(960px, 94vw);
      background: #fff;
      border-radius: 22px;
      border: 1px solid var(--line);
      box-shadow: 0 32px 90px rgba(6,43,77,0.2);
      padding: 28px;
      display: grid;
      grid-template-columns: 1.6fr 1fr;
      gap: 28px;
      opacity: 0; visibility: hidden;
      transform: translateY(16px);
      transition: all 0.28s ease;
      z-index: 60;
    }
    .nav-links > li.dropdown.mega:hover .mega-menu,
    .nav-links > li.dropdown.mega:focus-within .mega-menu {
      opacity: 1; visibility: visible; transform: translateY(0);
    }
    .mega-links {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6px;
      align-content: start;
    }
    .mega-link {
      display: flex; gap: 13px; align-items: flex-start;
      padding: 11px 12px;
      border-radius: 12px;
      color: var(--ink-muted);
      text-decoration: none;
      transition: background 0.2s;
    }
    .mega-link:hover { background: var(--primary-soft); }
    .mega-link i {
      width: 40px; height: 40px; flex-shrink: 0;
      border-radius: 11px;
      background: var(--primary-soft);
      color: var(--primary);
      display: flex; align-items: center; justify-content: center;
      font-size: 15px;
      transition: all 0.22s;
    }
    .mega-link:hover i { background: var(--grad-primary); color: #fff; box-shadow: var(--shadow-primary); }
    .mega-link strong { display: block; color: var(--dark); font-size: 0.92rem; font-weight: 800; line-height: 1.3; }
    .mega-link small { font-size: 0.77rem; color: var(--ink-faint); font-weight: 600; line-height: 1.5; display: block; margin-top: 3px; }
    .mega-feature {
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      min-height: 270px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }
    .mega-feature img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
    .mega-feature::after {
      content: ''; position: absolute; inset: 0;
      background: linear-gradient(200deg, rgba(6,43,77,0.1) 0%, rgba(6,43,77,0.9) 100%);
    }
    .mega-feature-body { position: relative; z-index: 1; padding: 24px; }
    .mega-feature-body h4 { color: #fff; font-weight: 900; font-size: 1.2rem; margin-bottom: 6px; letter-spacing: -0.3px; }
    .mega-feature-body p { color: rgba(255,255,255,0.82); font-size: 0.84rem; line-height: 1.6; margin-bottom: 14px; }
    .mega-feature-link {
      display: inline-flex; align-items: center; gap: 8px;
      background: #fff; color: var(--primary);
      padding: 10px 20px; border-radius: 50px;
      font-weight: 800; font-size: 0.84rem; text-decoration: none;
      transition: all 0.22s;
    }
    .mega-feature-link:hover { gap: 13px; box-shadow: 0 12px 30px rgba(6,43,77,0.35); }
    .mega-footer {
      grid-column: 1 / -1;
      border-top: 1px solid var(--line);
      padding-top: 16px;
      margin-top: 2px;
      display: flex; align-items: center; justify-content: space-between;
      gap: 16px; flex-wrap: wrap;
    }
    .mega-footer p { font-size: 0.85rem; color: var(--ink-faint); font-weight: 700; }
    .mega-footer p i { color: var(--primary); margin-right: 6px; }
    .mega-footer a {
      font-size: 0.88rem; font-weight: 800; color: var(--primary);
      text-decoration: none; display: inline-flex; align-items: center; gap: 7px;
      transition: gap 0.2s;
    }
    .mega-footer a:hover { gap: 12px; }
    .mega-footer a i { background: var(--primary-soft); border-radius: 50%; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.7rem; }

    .nav-cta {
      background: var(--grad-primary) !important;
      color: #fff !important;
      padding: 11px 24px !important;
      border-radius: 50px !important;
      font-weight: 800 !important;
      font-size: 0.92rem !important;
      box-shadow: var(--shadow-primary);
      transition: transform 0.2s, box-shadow 0.2s !important;
      margin-left: 6px;
    }
    .nav-cta:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 34px rgba(12,69,128,0.4) !important;
      background: var(--grad-primary) !important;
    }
    .hamburger {
      display: none;
      background: none; border: none;
      color: var(--dark); font-size: 1.4rem; cursor: pointer;
      width: 44px; height: 44px; border-radius: 10px;
      transition: background 0.2s;
    }
    .hamburger:hover { background: var(--primary-soft); }

    /* ═══ HERO ═══ */
    .hero {
      min-height: 100vh;
      background: var(--grad-dark);
      position: relative;
      display: flex; align-items: center;
      overflow: hidden;
    }
    .hero-bg-img {
      position: absolute; inset: 0;
      background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1600&q=80');
      background-size: cover;
      background-position: center;
      opacity: 0.1;
      mix-blend-mode: luminosity;
    }
    .hero-grid-overlay {
      position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(111,177,232,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(111,177,232,0.07) 1px, transparent 1px);
      background-size: 56px 56px;
      mask-image: radial-gradient(ellipse at 30% 40%, #000 20%, transparent 75%);
      -webkit-mask-image: radial-gradient(ellipse at 30% 40%, #000 20%, transparent 75%);
    }
    .hero-glow {
      position: absolute;
      width: 640px; height: 640px; border-radius: 50%;
      background: radial-gradient(circle, rgba(61,143,212,0.28) 0%, transparent 70%);
      top: -140px; right: -120px;
      pointer-events: none;
      filter: blur(10px);
    }
    .hero-glow-2 {
      position: absolute;
      width: 460px; height: 460px; border-radius: 50%;
      background: radial-gradient(circle, rgba(12,69,128,0.55) 0%, transparent 72%);
      bottom: -80px; left: -60px;
      pointer-events: none;
    }
    .hero-content {
      position: relative; z-index: 2;
      width: 92%; max-width: 1240px; margin: 0 auto;
      display: grid; grid-template-columns: 1.08fr 0.92fr;
      gap: 64px; align-items: center;
      padding: 90px 0;
    }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 10px;
      background: rgba(111,177,232,0.12);
      border: 1px solid rgba(111,177,232,0.32);
      color: var(--sky-bright);
      padding: 7px 18px; border-radius: 50px;
      font-size: 0.78rem; font-weight: 800;
      letter-spacing: 1.4px; text-transform: uppercase;
      margin-bottom: 26px;
      backdrop-filter: blur(6px);
      animation: fadeInUp 0.6s ease both;
    }
    .hero-badge .dot {
      width: 7px; height: 7px; border-radius: 50%;
      background: var(--success);
      box-shadow: 0 0 0 0 rgba(31,169,122,0.6);
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(31,169,122,0.55); }
      70% { box-shadow: 0 0 0 10px rgba(31,169,122,0); }
      100% { box-shadow: 0 0 0 0 rgba(31,169,122,0); }
    }
    .hero-title {
      font-family: var(--font-display);
      font-size: clamp(2.5rem, 5.2vw, 3.9rem);
      font-weight: 900;
      color: #fff;
      line-height: 1.08;
      letter-spacing: -1px;
      margin-bottom: 24px;
      animation: fadeInUp 0.7s 0.1s ease both;
    }
    .hero-title span {
      background: linear-gradient(120deg, #9CC9EE 0%, #E0EBF5 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero-subtitle {
      font-size: 1.08rem; color: rgba(255,255,255,0.72);
      max-width: 540px; margin-bottom: 38px;
      line-height: 1.75;
      animation: fadeInUp 0.7s 0.2s ease both;
    }
    .hero-actions {
      display: flex; gap: 16px; flex-wrap: wrap;
      animation: fadeInUp 0.7s 0.3s ease both;
    }
    .btn-primary {
      display: inline-flex; align-items: center; gap: 10px;
      background: var(--grad-primary);
      color: #fff; padding: 15px 30px;
      border-radius: 50px; font-weight: 800; font-size: 0.95rem;
      text-decoration: none; cursor: pointer; border: none;
      box-shadow: var(--shadow-primary);
      transition: all 0.25s;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 16px 38px rgba(12,69,128,0.42);
      background: linear-gradient(135deg, #0F4F92, #0A3D70);
    }
    .btn-outline {
      display: inline-flex; align-items: center; gap: 10px;
      background: rgba(255,255,255,0.06);
      color: #fff; padding: 15px 30px;
      border-radius: 50px; font-weight: 700; font-size: 0.95rem;
      text-decoration: none; cursor: pointer;
      border: 1.5px solid rgba(255,255,255,0.35);
      backdrop-filter: blur(6px);
      transition: all 0.25s;
    }
    .btn-outline:hover { border-color: #fff; background: rgba(255,255,255,0.12); transform: translateY(-2px); }
    .hero-stats {
      display: flex; gap: 34px; margin-top: 52px;
      animation: fadeInUp 0.7s 0.4s ease both;
    }
    .hero-stat-num {
      font-family: var(--font-display);
      font-size: 2.05rem; font-weight: 900;
      color: var(--sky-bright); display: block; line-height: 1.1;
      letter-spacing: -0.5px;
    }
    .hero-stat-label {
      font-size: 0.78rem; color: rgba(255,255,255,0.55);
      text-transform: uppercase; letter-spacing: 0.8px; font-weight: 700;
    }
    .hero-right { position: relative; animation: fadeInUp 0.7s 0.2s ease both; }
    .hero-img-card {
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 30px 80px rgba(0,0,0,0.45);
      position: relative;
      border: 1px solid rgba(111,177,232,0.25);
    }
    .hero-img-card img { width: 100%; display: block; height: 460px; object-fit: cover; }
    .hero-img-card::after {
      content: ''; position: absolute; inset: 0;
      background: linear-gradient(200deg, transparent 55%, rgba(6,43,77,0.55));
    }
    .hero-img-badge {
      position: absolute; bottom: 18px; left: 18px; z-index: 2;
      background: rgba(6,43,77,0.72);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(111,177,232,0.35);
      border-radius: 14px; padding: 12px 18px;
      color: #fff;
    }
    .hero-img-badge-title { font-size: 0.72rem; color: var(--sky-bright); font-weight: 800; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 3px; }
    .hero-img-badge-val { font-family: var(--font-display); font-size: 1.35rem; font-weight: 900; color: #fff; }
    .hero-float-card {
      position: absolute; top: 22px; right: -22px; z-index: 3;
      background: rgba(255,255,255,0.94);
      backdrop-filter: blur(12px);
      border-radius: 16px; padding: 14px 20px;
      box-shadow: 0 16px 44px rgba(6,43,77,0.28);
      display: flex; align-items: center; gap: 14px;
      border: 1px solid rgba(255,255,255,0.6);
      animation: float 3.5s ease-in-out infinite;
    }
    @keyframes float {
      0%,100% { transform: translateY(0); }
      50% { transform: translateY(-9px); }
    }
    .hero-float-icon {
      width: 42px; height: 42px; border-radius: 12px;
      background: var(--grad-primary);
      display: flex; align-items: center; justify-content: center;
      color: var(--sky-bright); font-size: 17px;
      box-shadow: var(--shadow-primary);
    }
    .hero-float-text { font-size: 0.76rem; color: var(--ink-muted); font-weight: 700; }
    .hero-float-text strong { display: block; color: var(--dark); font-size: 0.9rem; font-weight: 900; }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(26px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ═══ SECTION COMMON ═══ */
    section { padding: 105px 4%; }
    .section-label {
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--primary-soft);
      border: 1px solid var(--primary-ring);
      color: var(--primary);
      padding: 6px 16px; border-radius: 50px;
      font-size: 0.75rem; font-weight: 800;
      letter-spacing: 1.2px; text-transform: uppercase;
      margin-bottom: 18px;
    }
    .section-title {
      font-family: var(--font-display);
      font-size: clamp(1.9rem, 3.6vw, 2.9rem);
      font-weight: 900; color: var(--dark);
      line-height: 1.14; margin-bottom: 16px;
      letter-spacing: -0.8px;
    }
    .section-title span { color: var(--primary); }
    .section-sub {
      font-size: 1.05rem; color: var(--ink-muted);
      max-width: 580px; line-height: 1.75;
    }
    .section-header { margin-bottom: 60px; }
    .container { max-width: 1240px; margin: 0 auto; }

    /* ═══ TRUST STRIP ═══ */
    .trust-strip {
      background: var(--white);
      padding: 22px 4%;
      border-bottom: 1px solid var(--line);
      box-shadow: var(--shadow-sm);
      position: relative; z-index: 5;
    }
    .trust-strip-inner {
      max-width: 1240px; margin: 0 auto;
      display: flex; align-items: center; justify-content: space-between;
      gap: 20px; flex-wrap: wrap;
    }
    .trust-item {
      display: flex; align-items: center; gap: 11px;
      color: var(--ink-muted); font-size: 0.88rem; font-weight: 700;
    }
    .trust-item i {
      width: 34px; height: 34px; border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      background: var(--primary-soft);
      color: var(--primary); font-size: 0.95rem;
    }
    .trust-divider { width: 1px; height: 26px; background: var(--line); }

    /* ═══ SERVICES ═══ */
    .services { background: var(--off-white); }
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 26px;
    }
    .service-card {
      background: #fff;
      border-radius: var(--radius);
      padding: 26px 28px 30px;
      box-shadow: var(--shadow-sm);
      transition: all 0.3s ease;
      position: relative; overflow: hidden;
      border: 1px solid var(--line);
      display: flex; flex-direction: column;
    }
    .service-card::before {
      content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
      background: var(--grad-primary);
      transform: scaleX(0); transform-origin: left;
      transition: transform 0.35s ease;
    }
    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow-hover);
      border-color: rgba(12,69,128,0.2);
    }
    .service-card:hover::before { transform: scaleX(1); }
    .service-card > img {
      width: 100%; height: 190px; object-fit: cover;
      border-radius: 12px; margin-bottom: 22px;
      transition: transform 0.4s ease;
    }
    .service-card:hover > img { transform: scale(1.02); }
    .service-icon {
      width: 62px; height: 62px; border-radius: 16px;
      background: var(--grad-primary);
      display: flex; align-items: center; justify-content: center;
      color: var(--sky-bright); font-size: 24px;
      margin-bottom: 22px;
      box-shadow: var(--shadow-primary);
      transition: transform 0.3s;
    }
    .service-card:hover .service-icon { transform: scale(1.07) rotate(-4deg); }
    .service-card h3 {
      font-family: var(--font-display);
      font-size: 1.28rem; font-weight: 800;
      color: var(--dark); margin-bottom: 12px;
      letter-spacing: -0.3px;
    }
    .service-card p { font-size: 0.92rem; color: var(--ink-muted); line-height: 1.7; margin-bottom: 20px; flex-grow: 1; }
    .service-price {
      display: inline-flex; align-items: center; gap: 6px;
      align-self: flex-start;
      background: var(--off-white);
      border: 1px solid var(--line);
      border-radius: 50px; padding: 5px 14px;
      font-family: var(--font-mono); font-size: 0.78rem;
      font-weight: 800; color: var(--primary);
    }
    .service-price i { color: var(--primary); font-size: 0.7rem; }
    .service-link {
      display: flex; align-items: center; gap: 7px;
      color: var(--primary); font-weight: 800; font-size: 0.9rem;
      text-decoration: none; margin-top: 16px;
      transition: gap 0.25s;
    }
    .service-card:hover .service-link { gap: 12px; }

    /* ═══ PRICING ═══ */
    .tour-packages { background: #fff; }
    .packages-tabs {
      display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 48px;
    }
    .tab-btn {
      padding: 11px 24px; border-radius: 50px;
      border: 1.5px solid var(--line);
      background: #fff; cursor: pointer;
      font-family: var(--font-body); font-size: 0.88rem; font-weight: 800;
      color: var(--ink-muted); transition: all 0.22s;
    }
    .tab-btn.active, .tab-btn:hover {
      background: var(--grad-primary);
      border-color: var(--primary);
      color: #fff;
      box-shadow: var(--shadow-primary);
    }
    .tab-panel { display: none; }
    .tab-panel.active { display: block; animation: fadeInUp 0.5s ease both; }
    .pricing-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
      gap: 28px;
    }
    .pricing-card {
      border-radius: var(--radius); padding: 38px 32px;
      border: 1.5px solid var(--line);
      background: #fff; transition: all 0.3s; position: relative;
      display: flex; flex-direction: column;
    }
    .pricing-card.featured {
      background: var(--grad-dark);
      border-color: var(--dark);
      color: #fff;
      transform: scale(1.03);
      box-shadow: 0 24px 60px rgba(6,43,77,0.35);
      overflow: hidden;
    }
    .pricing-card.featured::after {
      content: '';
      position: absolute; width: 300px; height: 300px; border-radius: 50%;
      background: radial-gradient(circle, rgba(61,143,212,0.35), transparent 70%);
      top: -120px; right: -120px;
    }
    .pricing-card.featured > * { position: relative; z-index: 1; }
    .pricing-badge {
      position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
      background: var(--grad-primary);
      color: #fff;
      padding: 5px 20px; border-radius: 50px;
      font-size: 0.74rem; font-weight: 800; text-transform: uppercase;
      letter-spacing: 0.7px; white-space: nowrap;
      box-shadow: var(--shadow-primary);
      z-index: 2;
    }
    .pricing-card:hover:not(.featured) { border-color: var(--primary); box-shadow: var(--shadow-hover); transform: translateY(-6px); }
    .pricing-tier {
      font-size: 0.76rem; font-weight: 800; text-transform: uppercase;
      letter-spacing: 1.4px; color: var(--primary); margin-bottom: 8px;
    }
    .pricing-card.featured .pricing-tier { color: var(--sky-bright); }
    .pricing-name {
      font-family: var(--font-display);
      font-size: 1.5rem; font-weight: 900; color: var(--dark); margin-bottom: 8px;
      letter-spacing: -0.4px;
    }
    .pricing-card.featured .pricing-name { color: #fff; }
    .pricing-price { margin: 22px 0; display: flex; align-items: baseline; gap: 4px; }
    .pricing-currency { font-size: 0.9rem; color: var(--ink-faint); font-weight: 700; }
    .pricing-amount {
      font-family: var(--font-display);
      font-size: 2.1rem; font-weight: 900; color: var(--primary);
      line-height: 1; letter-spacing: -0.5px;
    }
    .pricing-card.featured .pricing-amount,
    .pricing-card.featured .pricing-currency { color: #fff; }
    .pricing-period { font-size: 0.8rem; color: var(--ink-faint); font-weight: 700; }
    .pricing-divider { height: 1px; background: var(--line); margin: 22px 0; }
    .pricing-card.featured .pricing-divider { background: rgba(255,255,255,0.14); }
    .pricing-features { list-style: none; display: flex; flex-direction: column; gap: 11px; margin-bottom: 30px; flex-grow: 1; }
    .pricing-features li {
      display: flex; align-items: flex-start; gap: 11px;
      font-size: 0.9rem; color: var(--ink-muted); line-height: 1.5; font-weight: 600;
    }
    .pricing-card.featured .pricing-features li { color: rgba(255,255,255,0.82); }
    .pricing-features li i {
      color: var(--success); flex-shrink: 0; margin-top: 4px; font-size: 0.85rem;
    }
    .pricing-card.featured .pricing-features li i { color: var(--success); }
    .btn-package {
      display: block; width: 100%; text-align: center;
      padding: 14px; border-radius: 50px;
      font-weight: 800; font-size: 0.92rem; text-decoration: none;
      transition: all 0.25s; border: 1.5px solid var(--primary);
      background: transparent; color: var(--primary); cursor: pointer;
    }
    .btn-package:hover { background: var(--grad-primary); border-color: var(--primary); color: #fff; box-shadow: var(--shadow-primary); }
    .pricing-card.featured .btn-package {
      background: #fff; border-color: #fff; color: var(--primary);
    }
    .pricing-card.featured .btn-package:hover { background: var(--sky-bright); border-color: var(--sky-bright); color: var(--dark); box-shadow: none; }

    /* ═══ PROCESS ═══ */
    .process { background: var(--grad-dark); position: relative; overflow: hidden; }
    .process::before {
      content: ''; position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(111,177,232,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(111,177,232,0.05) 1px, transparent 1px);
      background-size: 48px 48px;
    }
    .process > * { position: relative; z-index: 1; }
    .process .section-title { color: #fff; }
    .process .section-sub { color: rgba(255,255,255,0.6); }
    .process .section-label { background: rgba(111,177,232,0.14); border-color: rgba(111,177,232,0.3); color: var(--sky-bright); }
    .process-steps {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 0; position: relative;
      margin-top: 60px;
    }
    .process-steps::before {
      content: '';
      position: absolute; top: 42px; left: 12%; right: 12%; height: 2px;
      background: linear-gradient(90deg, transparent, rgba(111,177,232,0.4) 20%, rgba(111,177,232,0.4) 80%, transparent);
    }
    .process-step { text-align: center; padding: 0 18px; position: relative; }
    .step-num {
      width: 84px; height: 84px; border-radius: 50%;
      background: var(--grad-primary);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 24px;
      font-family: var(--font-mono); font-size: 1.4rem; font-weight: 900; color: #fff;
      box-shadow: 0 0 0 6px rgba(61,143,212,0.18), 0 12px 30px rgba(12,69,128,0.45);
      position: relative; z-index: 1;
      transition: transform 0.3s;
    }
    .process-step:hover .step-num { transform: scale(1.08); }
    .process-step h4 {
      font-family: var(--font-display);
      font-size: 1.15rem; font-weight: 800; color: #fff; margin-bottom: 10px;
    }
    .process-step p { font-size: 0.9rem; color: rgba(255,255,255,0.58); line-height: 1.7; }

    /* ═══ WHY US ═══ */
    .why-us { background: var(--off-white); }
    .why-grid {
      display: grid; grid-template-columns: 1fr 1.05fr;
      gap: 80px; align-items: center;
    }
    .why-img-stack { position: relative; height: 520px; }
    .why-img-main {
      position: absolute; top: 0; left: 0;
      width: 70%; border-radius: var(--radius); overflow: hidden;
      box-shadow: var(--shadow-hover);
      border: 4px solid #fff;
    }
    .why-img-main img { width: 100%; height: 350px; object-fit: cover; display: block; }
    .why-img-sec {
      position: absolute; bottom: 0; right: 0;
      width: 62%; border-radius: var(--radius); overflow: hidden;
      box-shadow: var(--shadow-hover);
      border: 4px solid #fff;
    }
    .why-img-sec img { width: 100%; height: 230px; object-fit: cover; display: block; }
    .why-img-badge2 {
      position: absolute; top: 48%; left: 52%; transform: translate(-50%, -50%);
      background: var(--grad-primary);
      border-radius: 18px; padding: 20px 24px; text-align: center;
      color: #fff; box-shadow: 0 16px 44px rgba(12,69,128,0.4);
      z-index: 2;
      border: 1px solid rgba(255,255,255,0.2);
    }
    .why-img-badge2-num { font-family: var(--font-display); font-size: 2rem; font-weight: 900; color: #fff; }
    .why-img-badge2-label { font-size: 0.78rem; color: rgba(255,255,255,0.78); font-weight: 700; }
    .why-points { display: flex; flex-direction: column; gap: 18px; margin-top: 34px; }
    .why-point {
      display: flex; gap: 16px; align-items: flex-start;
      background: #fff; border-radius: 16px;
      padding: 20px 22px; box-shadow: var(--shadow-sm);
      border: 1px solid var(--line);
      border-left: 3px solid var(--primary);
      transition: all 0.25s;
    }
    .why-point:hover { transform: translateX(6px); box-shadow: var(--shadow); border-left-color: var(--sky); }
    .why-point-icon {
      width: 46px; height: 46px; border-radius: 12px; flex-shrink: 0;
      background: var(--grad-primary);
      display: flex; align-items: center; justify-content: center;
      color: var(--sky-bright); font-size: 18px;
      box-shadow: var(--shadow-primary);
    }
    .why-point h5 { font-weight: 800; color: var(--dark); margin-bottom: 4px; font-size: 1.02rem; }
    .why-point p { font-size: 0.88rem; color: var(--ink-muted); line-height: 1.65; }

    /* ═══ TECHNOLOGIES ═══ */
    .tech-strip { background: #fff; padding: 64px 4%; }
    .tech-strip-inner { max-width: 1240px; margin: 0 auto; }
    .tech-logos {
      display: flex; gap: 14px; align-items: center;
      flex-wrap: wrap; justify-content: center; margin-top: 36px;
    }
    .tech-logo-item {
      background: var(--off-white); border: 1px solid var(--line);
      border-radius: 12px; padding: 12px 22px;
      font-family: var(--font-mono); font-size: 0.8rem; font-weight: 800;
      color: var(--ink-muted); transition: all 0.22s;
    }
    .tech-logo-item:hover {
      background: var(--grad-primary); color: #fff; border-color: var(--primary);
      transform: translateY(-3px);
      box-shadow: var(--shadow-primary);
    }

    /* ═══ TESTIMONIALS ═══ */
    .testimonials { background: #fff; position: relative; overflow: hidden; }
    .testimonials .section-title { color: var(--navy); }
    .testimonials .section-sub { color: var(--text-mid); }
    .testimonials .section-label { background: var(--off-white); border-color: var(--line); color: var(--primary); }
    .testimonials-slider { padding: 6px 6px 40px; }
    .testimonials-slider .swiper-slide { height: auto; }
    .testimonial-card {
      background: #fff; border: 1px solid var(--line);
      border-radius: var(--radius); padding: 32px; height: 100%;
      box-shadow: 0 8px 24px rgba(6, 43, 77, 0.06);
      transition: all 0.3s;
    }
    .testimonial-card:hover { transform: translateY(-6px); box-shadow: 0 20px 44px rgba(6, 43, 77, 0.12); border-color: rgba(12, 69, 128, 0.35); }
    .testimonial-stars { color: var(--gold); margin-bottom: 16px; font-size: 0.9rem; letter-spacing: 2px; }
    .testimonial-text { color: var(--ink-muted); font-size: 0.95rem; line-height: 1.75; margin-bottom: 26px; font-weight: 500; }
    .testimonial-author { display: flex; align-items: center; gap: 14px; }
    .testimonial-avatar {
      width: 48px; height: 48px; border-radius: 50%;
      object-fit: cover; border: 2px solid var(--primary);
      box-shadow: 0 0 0 3px rgba(12, 69, 128, 0.12);
    }
    .testimonial-name { font-weight: 800; color: var(--dark); font-size: 0.92rem; }
    .testimonial-role { font-size: 0.78rem; color: var(--ink-muted); font-weight: 600; }
    .testimonials-nav { display: flex; justify-content: center; gap: 12px; margin-top: 8px; }
    .testimonials-btn {
      width: 46px; height: 46px; border-radius: 50%;
      border: 1px solid var(--line); background: #fff; color: var(--primary);
      font-size: 0.95rem; cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      box-shadow: var(--shadow-sm); transition: all 0.25s;
    }
    .testimonials-btn:hover {
      background: var(--grad-primary); color: #fff;
      border-color: var(--primary); transform: scale(1.08);
      box-shadow: 0 12px 26px rgba(12, 69, 128, 0.3);
    }
    .testimonials .swiper-pagination-bullet { background: #cbd5e1; opacity: 1; transition: all 0.25s; }
    .testimonials .swiper-pagination-bullet-active { background: var(--primary); width: 26px; border-radius: 4px; }
    .testimonials .swiper-pagination-bullets { bottom: 0; }

    /* ═══ ADD-ONS ═══ */
    .addons { background: var(--off-white); }
    .addons-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 22px;
    }
    .addon-card {
      background: #fff; border-radius: 16px;
      padding: 26px; box-shadow: var(--shadow-sm);
      display: flex; gap: 16px; align-items: flex-start;
      border: 1px solid var(--line); transition: all 0.25s;
    }
    .addon-card:hover { border-color: var(--primary); box-shadow: var(--shadow-hover); transform: translateY(-4px); }
    .addon-icon {
      width: 46px; height: 46px; border-radius: 12px; flex-shrink: 0;
      background: var(--grad-primary);
      display: flex; align-items: center; justify-content: center;
      color: var(--sky-bright); font-size: 17px;
    }
    .addon-card h5 { font-size: 0.92rem; font-weight: 800; color: var(--dark); margin-bottom: 4px; }
    .addon-card .addon-price { font-family: var(--font-mono); font-size: 0.8rem; color: var(--primary); font-weight: 800; }

    /* ═══ STATS ═══ */
    .stats { background: #fff; padding: 85px 4%; }
    .stats-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
      gap: 44px; max-width: 1050px; margin: 0 auto;
      text-align: center;
    }
    .stat-num {
      font-family: var(--font-display);
      font-size: 3.1rem; font-weight: 900; color: var(--dark);
      display: block; line-height: 1;
      letter-spacing: -1px;
    }
    .stat-num span { color: var(--primary); }
    .stat-label { color: var(--ink-muted); font-size: 0.92rem; margin-top: 10px; font-weight: 700; }
    .stat-bar {
      height: 5px; border-radius: 4px;
      background: var(--line); margin-top: 14px;
      overflow: hidden;
    }
    .stat-bar-fill {
      height: 100%; border-radius: 4px;
      background: var(--grad-primary);
      animation: barFill 1.6s ease both;
    }
    @keyframes barFill { from { width: 0; } }

    /* ═══ CTA BANNER ═══ */
    .cta-banner {
      background: var(--grad-dark);
      padding: 85px 4%; text-align: center; position: relative; overflow: hidden;
    }
    .cta-banner::before {
      content: ''; position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(111,177,232,0.06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(111,177,232,0.06) 1px, transparent 1px);
      background-size: 42px 42px;
    }
    .cta-banner::after {
      content: ''; position: absolute;
      width: 520px; height: 520px; border-radius: 50%;
      background: radial-gradient(circle, rgba(61,143,212,0.25), transparent 70%);
      bottom: -200px; left: 50%; transform: translateX(-50%);
    }
    .cta-inner { position: relative; z-index: 1; max-width: 720px; margin: 0 auto; }
    .cta-banner h2 {
      font-family: var(--font-display);
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 900; color: #fff; margin-bottom: 18px;
      letter-spacing: -0.8px;
    }
    .cta-banner h2 span {
      background: linear-gradient(120deg, #9CC9EE, #E0EBF5);
      -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;
    }
    .cta-banner p { color: rgba(255,255,255,0.72); font-size: 1.06rem; margin-bottom: 36px; line-height: 1.7; }
    .cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
    .btn-whatsapp {
      display: inline-flex; align-items: center; gap: 10px;
      background: var(--whatsapp); color: #fff;
      padding: 15px 30px; border-radius: 50px;
      font-weight: 800; font-size: 0.95rem; text-decoration: none;
      transition: all 0.25s; box-shadow: 0 10px 30px rgba(37,211,102,0.35);
    }
    .btn-whatsapp:hover { background: #1ebe57; transform: translateY(-2px); box-shadow: 0 16px 40px rgba(37,211,102,0.45); }

    /* ═══ CONTACT ═══ */
    .contact { background: var(--off-white); }
    .contact-grid {
      display: grid; grid-template-columns: 1fr 1.3fr;
      gap: 60px; align-items: start;
    }
    .contact-info h3 {
      font-family: var(--font-display);
      font-size: 1.8rem; font-weight: 900; color: var(--dark); margin-bottom: 16px;
      letter-spacing: -0.5px;
    }
    .contact-info > p { color: var(--ink-muted); line-height: 1.75; margin-bottom: 32px; }
    .contact-details { display: flex; flex-direction: column; gap: 16px; }
    .contact-detail {
      display: flex; align-items: center; gap: 16px;
      background: #fff; padding: 18px 22px; border-radius: 16px;
      box-shadow: var(--shadow-sm);
      border: 1px solid var(--line);
      transition: all 0.25s;
    }
    .contact-detail:hover { transform: translateX(5px); border-color: var(--primary-ring); }
    .contact-detail-icon {
      width: 48px; height: 48px; border-radius: 12px; flex-shrink: 0;
      background: var(--grad-primary);
      display: flex; align-items: center; justify-content: center;
      color: var(--sky-bright); font-size: 18px;
      box-shadow: var(--shadow-primary);
    }
    .contact-detail-label { font-size: 0.74rem; color: var(--ink-faint); text-transform: uppercase; letter-spacing: 0.6px; font-weight: 800; }
    .contact-detail-val { font-weight: 800; color: var(--dark); font-size: 0.96rem; }
    .contact-form {
      background: #fff; border-radius: var(--radius);
      padding: 42px; box-shadow: var(--shadow);
      border: 1px solid var(--line);
    }
    .contact-form h4 {
      font-family: var(--font-display);
      font-size: 1.45rem; font-weight: 900; color: var(--dark); margin-bottom: 26px;
      letter-spacing: -0.4px;
    }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
    .form-group { margin-bottom: 18px; }
    .form-group label {
      display: block; font-size: 0.82rem; font-weight: 800;
      color: var(--ink-muted); margin-bottom: 7px;
    }
    .form-control {
      width: 100%; padding: 13px 17px;
      border: 1.5px solid var(--line);
      border-radius: var(--radius-sm);
      font-family: var(--font-body); font-size: 0.94rem; color: var(--text);
      background: var(--off-white); outline: none;
      transition: all 0.22s;
    }
    .form-control::placeholder { color: var(--ink-faint); }
    .form-control:focus { border-color: var(--primary); background: #fff; box-shadow: 0 0 0 4px var(--primary-soft); }
    select.form-control { cursor: pointer; }
    textarea.form-control { resize: vertical; min-height: 120px; }
    .btn-submit {
      width: 100%; padding: 15px;
      background: var(--grad-primary);
      color: #fff; border: none; border-radius: 50px;
      font-family: var(--font-body); font-size: 1rem; font-weight: 800;
      cursor: pointer; transition: all 0.25s;
      box-shadow: var(--shadow-primary);
    }
    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 16px 38px rgba(12,69,128,0.42); }

    /* ═══ FOOTER ═══ */
    footer {
      position: relative; overflow: hidden;
      background: linear-gradient(180deg, #062B4D 0%, #041C33 55%, #031322 100%);
      padding: 0;
    }
    footer::after {
      content: ''; position: absolute; inset: 0; pointer-events: none;
      background:
        radial-gradient(760px 420px at 12% 4%, rgba(8,120,181,0.16), transparent 60%),
        radial-gradient(760px 420px at 90% 8%, rgba(255,210,31,0.05), transparent 60%);
    }
    .footer-wave { position: absolute; top: 0; left: 0; right: 0; height: 120px; z-index: 1; }
    .footer-wave svg { width: 100%; height: 100%; display: block; }
    .footer-inner {
      position: relative; z-index: 2;
      max-width: 1440px; margin: 0 auto;
      padding: 205px 4% 36px;
    }
    .footer-top {
      display: grid; grid-template-columns: 2fr 1.1fr 1fr 1.2fr;
      gap: 48px;
    }
    .footer-brand p {
      color: rgba(255,255,255,0.58); font-size: 0.9rem; line-height: 1.85;
      max-width: 340px; margin: 20px 0 28px;
    }
    .footer-social { display: flex; gap: 12px; }
    .social-link {
      width: 42px; height: 42px; border-radius: 50%;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px);
      display: flex; align-items: center; justify-content: center;
      color: rgba(255,255,255,0.72); text-decoration: none; font-size: 0.9rem;
      transition: all 0.25s ease;
    }
    .social-link:hover {
      background: #FFD21F; border-color: #FFD21F; color: #062B4D;
      transform: translateY(-4px);
      box-shadow: 0 12px 26px -8px rgba(255,210,31,0.5);
    }
    .footer-col h5 {
      position: relative;
      color: #fff; font-weight: 800; font-size: 0.92rem;
      text-transform: uppercase; letter-spacing: 1.2px;
      padding-bottom: 18px;
    }
    .footer-col h5::after {
      content: ''; position: absolute; left: 0; bottom: 0;
      width: 56px; height: 14px;
      background-image:
        radial-gradient(circle, #FFD21F 3px, transparent 3.7px),
        radial-gradient(circle, #FFD21F 3px, transparent 3.7px),
        linear-gradient(90deg, #FFD21F, rgba(255,210,31,0.12));
      background-repeat: no-repeat, no-repeat, no-repeat;
      background-size: 6px 6px, 6px 6px, 100% 3px;
      background-position: 0 11px, 18px 11px, 0 0;
    }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 13px; }
    .footer-col ul a {
      display: inline-block;
      color: rgba(255,255,255,0.6); text-decoration: none; font-size: 0.9rem;
      transition: color 0.22s ease, transform 0.22s ease;
      font-weight: 600;
    }
    .footer-col ul a:hover { color: #FFD21F; transform: translateX(5px); }
    .footer-bottom {
      margin-top: 54px;
      padding: 22px 28px;
      border-top: 1px solid rgba(255,255,255,0.09);
      background: rgba(255,255,255,0.03);
      backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
      border-radius: 16px;
      display: flex; align-items: center; justify-content: space-between;
      gap: 16px; flex-wrap: wrap;
    }
    .footer-bottom p { color: rgba(255,255,255,0.42); font-size: 0.84rem; }
    .footer-bottom a { color: #8FCCEC; text-decoration: none; transition: color 0.2s ease; }
    .footer-bottom a:hover { color: #FFD21F; }

    footer .nav-logo-img { height: 46px; max-width: min(220px, 70vw); }
    footer .nav-logo-text { color: rgba(255,255,255,0.95); }
    footer .nav-logo-text span { color: #8FCCEC; }

    footer a:focus-visible { outline: 3px solid #FFD21F; outline-offset: 2px; border-radius: 8px; }

    /* ═══ FLOATING ACTION BUTTONS ═══ */
    .wa-float {
      position: fixed; bottom: 26px; right: 26px; z-index: 999;
      width: 58px; height: 58px; border-radius: 50%;
      background: linear-gradient(135deg, #25D366, #1DA851); color: #fff;
      display: flex; align-items: center; justify-content: center;
      font-size: 27px; text-decoration: none;
      box-shadow: 0 12px 32px rgba(37,211,102,0.45);
      animation: waFloat 2.8s ease-in-out infinite;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .wa-float:hover { transform: translateY(-4px) scale(1.06); box-shadow: 0 16px 40px rgba(37,211,102,0.6); }
    @keyframes waFloat {
      0%,100% { box-shadow: 0 12px 32px rgba(37,211,102,0.4); }
      50% { box-shadow: 0 16px 44px rgba(37,211,102,0.75); }
    }

    /* ═══ BACK TO TOP ═══ */
    #back-top {
      position: fixed; bottom: 98px; right: 26px; z-index: 999;
      width: 50px; height: 50px; border-radius: 50%;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.18);
      backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
      color: #fff;
      display: flex; align-items: center; justify-content: center;
      text-decoration: none; font-size: 1rem;
      box-shadow: 0 12px 30px rgba(4,28,51,0.5);
      transition: all 0.25s ease;
      opacity: 0; pointer-events: none;
    }
    #back-top.visible { opacity: 1; pointer-events: auto; }
    #back-top:hover {
      transform: translateY(-4px);
      background: #FFD21F; border-color: #FFD21F; color: #062B4D;
      box-shadow: 0 16px 38px rgba(255,210,31,0.4);
    }

    /* ═══ REVEAL ON SCROLL ═══ */
    .reveal { opacity: 0; transform: translateY(32px); transition: opacity 0.7s ease, transform 0.7s ease; }
    .reveal.in-view { opacity: 1; transform: translateY(0); }

    /* ═══ MOBILE ═══ */
    @media (max-width: 1000px) {
      .hero-content { grid-template-columns: 1fr; gap: 44px; padding: 70px 0; }
      .hero-right { max-width: 520px; margin: 0 auto; width: 100%; }
      .hero-float-card { right: 8px; }
      .why-grid { grid-template-columns: 1fr; gap: 60px; }
      .why-img-stack { height: 320px; max-width: 520px; margin: 0 auto; }
      .contact-grid { grid-template-columns: 1fr; }
      .footer-top { grid-template-columns: 1fr 1fr; }
      .footer-inner { padding: 196px 5% 32px; }
      .process-steps::before { display: none; }
    }
    @media (max-width: 1200px) {
      .d-none-mobile { display: none !important; }
      .top-header { justify-content: center; gap: 12px; }
      .top-header-social { display: none; }
      .nav-links { display: none; }
      .nav-links.open {
        display: flex; flex-direction: column;
        position: fixed; top: 76px; left: 0; right: 0;
        width: 100%;
        background: #fff;
        padding: 20px 5% 28px;
        gap: 4px;
        max-height: calc(100vh - 76px);
        overflow-y: auto;
        box-shadow: 0 20px 50px rgba(6,43,77,0.14);
        border-bottom: 1px solid var(--line);
        align-items: stretch;
      }
      .nav-links.open > li { width: 100%; }
      .nav-links.open > li.dropdown.mega { position: relative; }
      .nav-links.open a { padding: 13px 16px; border-radius: 10px; }
      .nav-cta { justify-content: center; margin: 8px 0 0; }
      .mega-menu {
        position: static; opacity: 1; visibility: visible; transform: none;
        width: 100%;
        grid-template-columns: 1fr;
        box-shadow: none; border: none; background: var(--off-white);
        margin: 4px 0; border-radius: 14px; padding: 12px;
        display: none;
      }
      .nav-links > li.dropdown.mega.open .mega-menu { display: grid; }
      .mega-links { grid-template-columns: 1fr; }
      .mega-feature { min-height: 180px; }
      .mega-footer { flex-direction: column; align-items: flex-start; }
      .hamburger { display: flex; align-items: center; justify-content: center; }
      .form-row { grid-template-columns: 1fr; }
    }
    @media (max-width: 600px) {
      section { padding: 74px 5%; }
      .hero-title { font-size: clamp(2.1rem, 9vw, 2.9rem); }
      .hero-img-card img { height: 340px; }
      .hero-stats { gap: 22px; flex-wrap: wrap; }
      .footer-top { grid-template-columns: 1fr; }
      .footer-inner { padding: 200px 6% 30px; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .trust-divider { display: none; }
      .pricing-card.featured { transform: scale(1); }
      .cta-actions { flex-direction: column; align-items: stretch; }
      .cta-actions a { justify-content: center; }
    }

    /* ════════════════════════════════════════════════════════════
       JEZDAN GROUP — PREMIUM HERO SLIDER (Swiper)
    ════════════════════════════════════════════════════════════ */
    .jezdan-hero {
      position: relative;
      min-height: 100vh;
      overflow: hidden;
    }
    .jezdan-hero-slider, .jezdan-hero-slider .swiper-wrapper { width: 100%; height: 100%; }
    .jezdan-hero .swiper-slide {
      position: relative;
      display: flex; align-items: center; justify-content: center;
      width: 100% !important;
      height: 100%;
      overflow: hidden;
    }
    .jezdan-hero .hero-image {
      position: absolute; inset: 0;
      background-size: cover; background-position: center;
      z-index: 0;
      will-change: transform;
    }
    .jezdan-hero .hero-overlay {
      position: absolute; inset: 0; z-index: 1;
      background:
        linear-gradient(100deg, rgba(6, 8, 12, 0.94) 0%, rgba(10, 13, 18, 0.82) 45%, rgba(12, 16, 22, 0.35) 100%),
        linear-gradient(180deg, rgba(8, 10, 14, 0.35) 0%, rgba(8, 10, 14, 0.05) 45%, rgba(8, 10, 14, 0.62) 100%);
    }
    .jezdan-hero .container {
      position: relative; z-index: 3;
      display: flex; align-items: center;
      width: 100%;
      max-width: 100%;
      padding: 110px 5% 130px;
    }
    .jezdan-hero .row { display: flex; flex-wrap: wrap; width: 100%; }
    .jezdan-hero .col-xl-8, .jezdan-hero .col-lg-9 { flex: 0 0 100%; max-width: 100%; }
    @media (min-width: 992px) { .jezdan-hero .col-lg-9 { flex: 0 0 78%; max-width: 78%; } }
    @media (min-width: 1200px) { .jezdan-hero .col-xl-8 { flex: 0 0 66.6667%; max-width: 66.6667%; } }

    .jezdan-hero .hero-content {
      display: block;
      width: 100%;
      padding: 0;
      position: relative; z-index: 3;
    }
    .jezdan-hero .slide-tag {
      display: inline-flex; align-items: center; gap: 10px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.28);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      color: #fff;
      padding: 8px 20px; border-radius: 50px;
      font-size: 0.76rem; font-weight: 800;
      letter-spacing: 2.4px; text-transform: uppercase;
      margin-bottom: 26px;
    }
    .jezdan-hero .slide-tag::before {
      content: "";
      width: 8px; height: 8px; border-radius: 50%;
      background: var(--gold);
      box-shadow: 0 0 0 4px rgba(245, 181, 60, 0.18);
    }
    .jezdan-hero .slide-title {
      font-family: var(--font-display);
      color: #fff;
      font-size: clamp(2.5rem, 5.6vw, 4.5rem);
      font-weight: 900;
      line-height: 1.04;
      letter-spacing: -1.2px;
      margin-bottom: 24px;
      text-shadow: 0 4px 30px rgba(0, 0, 0, 0.35);
    }
    .jezdan-hero .slide-title span { color: var(--sky-bright); }
    .jezdan-hero .slide-desc {
      color: rgba(255, 255, 255, 0.86);
      font-size: clamp(1rem, 1.35vw, 1.18rem);
      font-weight: 500;
      line-height: 1.75;
      max-width: 640px;
      margin-bottom: 30px;
    }
    .jezdan-hero .slide-chips {
      display: flex; flex-wrap: wrap; gap: 10px;
      margin-bottom: 34px;
      max-width: 620px;
    }
    .jezdan-hero .slide-chip {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.18);
      color: rgba(255, 255, 255, 0.92);
      padding: 7px 15px; border-radius: 50px;
      font-size: 0.82rem; font-weight: 700;
      backdrop-filter: blur(4px);
    }
    .jezdan-hero .slide-chip i { color: var(--sky-bright); font-size: 0.72rem; }
    .jezdan-hero .slide-actions { display: flex; flex-wrap: wrap; gap: 14px; }
    .jezdan-hero .slide-actions .btn-outline {
      background: rgba(255, 255, 255, 0.07);
      border-color: rgba(255, 255, 255, 0.45);
    }

    .jezdan-hero .swiper-pagination {
      bottom: 34px; left: 5%; right: auto; width: auto;
      display: flex; gap: 8px; z-index: 5;
    }
    .jezdan-hero .swiper-pagination-bullet {
      width: 30px; height: 4px; border-radius: 3px;
      background: rgba(255, 255, 255, 0.35);
      opacity: 1; margin: 0 !important;
      transition: all 0.3s ease;
    }
    .jezdan-hero .swiper-pagination-bullet-active { width: 52px; background: #fff; }

    .jezdan-hero .swiper-button-prev,
    .jezdan-hero .swiper-button-next {
      width: 54px; height: 54px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.28);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      color: #fff;
      transition: all 0.25s ease;
    }
    .jezdan-hero .swiper-button-prev:hover,
    .jezdan-hero .swiper-button-next:hover { background: rgba(255, 255, 255, 0.2); transform: scale(1.06); }
    .jezdan-hero .swiper-button-prev::after,
    .jezdan-hero .swiper-button-next::after { font-size: 1.15rem; font-weight: 900; }
    .jezdan-hero .swiper-button-prev { left: 26px; }
    .jezdan-hero .swiper-button-next { right: 26px; }

    @keyframes jezdanKenburns {
      from { transform: scale(1.08); }
      to   { transform: scale(1); }
    }
    .jezdan-hero .swiper-slide-active .hero-image { animation: jezdanKenburns 8s ease-out both; }

    @keyframes jezdanFadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .jezdan-hero .swiper-slide-active .slide-tag    { animation: jezdanFadeUp 0.6s 0.1s ease both; }
    .jezdan-hero .swiper-slide-active .slide-title  { animation: jezdanFadeUp 0.7s 0.25s ease both; }
    .jezdan-hero .swiper-slide-active .slide-chips  { animation: jezdanFadeUp 0.7s 0.4s ease both; }
    .jezdan-hero .swiper-slide-active .slide-desc   { animation: jezdanFadeUp 0.7s 0.4s ease both; }
    .jezdan-hero .swiper-slide-active .slide-actions{ animation: jezdanFadeUp 0.7s 0.55s ease both; }

    @media (max-width: 991px) {
      .jezdan-hero { min-height: 620px; }
      .jezdan-hero .swiper-button-prev { left: 14px; }
      .jezdan-hero .swiper-button-next { right: 14px; }
      .jezdan-hero .slide-title { font-size: clamp(2.2rem, 7.5vw, 3.2rem); }
    }
    @media (max-width: 600px) {
      .jezdan-hero { min-height: 92vh; }
      .jezdan-hero .container { padding: 100px 6% 120px; }
      .jezdan-hero .swiper-button-prev, .jezdan-hero .swiper-button-next { display: none; }
      .jezdan-hero .slide-actions .btn-primary,
      .jezdan-hero .slide-actions .btn-outline { padding: 13px 22px; font-size: 0.88rem; }
      .jezdan-hero .swiper-pagination { left: 6%; }
    }
    @media (max-height: 760px) and (min-width: 601px) {
      .jezdan-hero .container { padding: 80px 5% 90px; }
      .jezdan-hero .slide-tag { margin-bottom: 16px; }
      .jezdan-hero .slide-title { margin-bottom: 14px; }
      .jezdan-hero .slide-desc { margin-bottom: 16px; line-height: 1.6; }
      .jezdan-hero .slide-chips { margin-bottom: 16px; gap: 8px; }
      .jezdan-hero .slide-chip { padding: 6px 12px; font-size: 0.78rem; }
      .jezdan-hero .swiper-pagination { bottom: 18px; }
    }

    /* ════════════════════════════════════════════════════════════
       WAVE CARD COMPONENT (shared — services pages)
       Blue #0878B5 · Dark #006FAE · Light #D9F0FA · Yellow #FFD21F
    ════════════════════════════════════════════════════════════ */
    .osc {
      --os-blue: #0878B5;
      --os-blue-dark: #006FAE;
      --os-blue-light: #D9F0FA;
      --os-yellow: #FFD21F;
      --os-text: #333333;
      --os-border: #1685C0;
      --osc-media-h: 240px;
    }
    .osc-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
      margin-top: 54px;
    }
    @media (max-width: 992px) { .osc-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 620px) { .osc-grid { grid-template-columns: 1fr; } }

    .osc-card {
      position: relative;
      display: flex;
      flex-direction: column;
      height: 100%;
      background: #fff;
      border: 1px solid rgba(22, 133, 192, 0.25);
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 14px 34px rgba(0, 111, 174, 0.10);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .osc-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 26px 54px rgba(0, 111, 174, 0.18);
    }

    .osc-media {
      position: relative;
      z-index: 2;
      height: var(--osc-media-h);
      display: flex;
      align-items: center;
      justify-content: center;
      background:
        radial-gradient(circle at 78% 20%, rgba(255, 255, 255, 0.16), transparent 42%),
        radial-gradient(circle at 16% 82%, rgba(255, 255, 255, 0.10), transparent 38%),
        linear-gradient(150deg, #0B7FBF 0%, var(--os-blue) 42%, var(--os-blue-dark) 100%);
    }
    .osc-media::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(255, 255, 255, 0.22) 1.4px, transparent 1.4px);
      background-size: 22px 22px;
      opacity: 0.18;
    }
    .osc-media-ring {
      position: absolute;
      width: 190px; height: 190px;
      border-radius: 50%;
      border: 2px dashed rgba(255, 255, 255, 0.3);
    }
    .osc-media-chip {
      position: relative;
      z-index: 3;
      width: 104px; height: 104px;
      border-radius: 26px;
      background: #fff;
      color: var(--os-blue);
      display: flex; align-items: center; justify-content: center;
      font-size: 2.7rem;
      box-shadow: 0 18px 40px rgba(0, 45, 80, 0.35), 0 0 0 10px rgba(255, 255, 255, 0.14);
      transition: transform 0.3s ease;
    }
    .osc-card:hover .osc-media-chip { transform: translateY(-6px) scale(1.05) rotate(-4deg); }
    .osc-media-img {
      position: absolute; inset: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      z-index: 1;
      transform: scale(1.01);
      transition: transform 0.55s ease;
    }
    .osc-card:hover .osc-media-img { transform: scale(1.08); }
    .osc-media-shade {
      position: absolute; inset: 0;
      z-index: 2;
      background: linear-gradient(180deg, rgba(4,28,51,0.05) 30%, rgba(4,28,51,0.45) 100%);
    }
    .osc-media:has(.osc-media-img)::before { opacity: 0; }

    .osc-waves {
      position: absolute;
      left: 0; right: 0;
      bottom: -34px;
      height: 70px;
      z-index: 4;
      pointer-events: none;
    }
    .osc-wave {
      position: absolute;
      left: 0; top: 0;
      width: 100%; height: 100%;
      display: block;
    }

    .osc-body {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      flex: 1;
      background: #fff;
      padding: 48px 30px 30px;
    }
    .osc-title {
      font-family: var(--font-display);
      color: var(--os-blue);
      font-size: 1.32rem;
      font-weight: 800;
      letter-spacing: -0.3px;
      margin: 0 0 12px;
    }
    .osc-text {
      color: var(--os-text);
      font-size: 0.94rem;
      line-height: 1.7;
      margin: 0 0 22px;
      flex: 1;
    }
    .osc-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: var(--os-blue);
      font-weight: 800;
      font-size: 0.92rem;
      text-decoration: none;
      transition: gap 0.25s ease, color 0.25s ease;
    }
    .osc-link:hover { gap: 13px; }
    .osc-link i { font-size: 0.8rem; }
    .osc-link:focus-visible { outline: 3px solid var(--os-yellow); outline-offset: 2px; }

    @media (max-width: 620px) {
      .osc { --osc-media-h: 210px; }
      .osc-media-chip { width: 92px; height: 92px; font-size: 2.3rem; border-radius: 22px; }
      .osc-media-ring { width: 158px; height: 158px; }
      .osc-body { padding: 44px 24px 26px; }
    }
    @media (prefers-reduced-motion: reduce) {
      .osc-card,
      .osc-card:hover,
      .osc-media-chip,
      .osc-link { transition: none !important; transform: none !important; }
    }
  </style>
  @yield('additional_styles')
</head>
<body>

<!-- TOP HEADER -->
<div class="top-header">
  <div class="top-header-info">
    <a href="tel:+255685847002"><i class="fas fa-phone"></i> +255 685 847 002</a>
    <a href="mailto:info@jezdantech.com"><i class="fas fa-envelope"></i> info@jezdantech.com</a>
    <span class="d-none-mobile"><i class="fas fa-map-marker-alt"></i> Moshi, Kilimanjaro, Tanzania</span>
  </div>
  <div class="top-header-social">
    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://wa.me/255685847002" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
  </div>
</div>

<!-- NAV -->
<nav>
  <a href="{{ route('home') }}" class="nav-logo" title="Jezdan Group">
    <span class="nav-logo-text nav-brand">Jezdan <span>Group</span></span>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
    <li class="dropdown mega">
      <a href="{{ route('services') }}" class="{{ request()->routeIs('services', 'services.*') ? 'active' : '' }}">
        Services <i class="fas fa-chevron-down caret"></i>
      </a>
      <div class="mega-menu">
        <div class="mega-links">
          <a href="{{ route('services.web-development') }}" class="mega-link">
            <i class="fas fa-code"></i>
            <span><strong>Web Development</strong><small>Websites, e-commerce & CMS</small></span>
          </a>
          <a href="{{ route('services.mobile-app-development') }}" class="mega-link">
            <i class="fas fa-mobile-screen-button"></i>
            <span><strong>Mobile App Development</strong><small>Android & iOS apps</small></span>
          </a>
          <a href="{{ route('services.system-development') }}" class="mega-link">
            <i class="fas fa-cubes"></i>
            <span><strong>System Development</strong><small>Custom software & portals</small></span>
          </a>
          <a href="{{ route('services.network-installation') }}" class="mega-link">
            <i class="fas fa-network-wired"></i>
            <span><strong>Network Installation</strong><small>Office, hotel & campus Wi-Fi</small></span>
          </a>
          <a href="{{ route('services.cybersecurity') }}" class="mega-link">
            <i class="fas fa-shield-halved"></i>
            <span><strong>Cybersecurity</strong><small>Audits, monitoring & firewalls</small></span>
          </a>
          <a href="{{ route('services.it-support') }}" class="mega-link">
            <i class="fas fa-headset"></i>
            <span><strong>IT Support</strong><small>Remote & on-site retainer plans</small></span>
          </a>
          <a href="{{ route('services.ict-consultancy') }}" class="mega-link">
            <i class="fas fa-lightbulb"></i>
            <span><strong>ICT Consultancy</strong><small>Strategy & digital roadmaps</small></span>
          </a>
          <a href="{{ route('services.cloud-services') }}" class="mega-link">
            <i class="fas fa-cloud"></i>
            <span><strong>Cloud Services</strong><small>Hosting, email & backup</small></span>
          </a>
        </div>
        <div class="mega-feature">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg" alt="Jezdan Technology Services">
          <div class="mega-feature-body">
            <h4>Complete ICT Solutions</h4>
            <p>From safari websites to enterprise networks — one team, every service your business needs.</p>
            <a href="{{ route('services') }}" class="mega-feature-link">View All Services <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="mega-footer">
          <p><i class="fas fa-headset"></i> Free consultation & detailed quote within 24 hours</p>
          <a href="{{ route('request.quote') }}">Get a Custom Quote <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </li>
    <li class="dropdown mega">
      <a href="{{ route('solutions') }}" class="{{ request()->routeIs('solutions') ? 'active' : '' }}">
        Solutions <i class="fas fa-chevron-down caret"></i>
      </a>
      <div class="mega-menu">
        <div class="mega-links">
          <a href="{{ route('solutions') }}" class="mega-link">
            <i class="fas fa-earth-africa"></i>
            <span><strong>Safari & Tour Operator</strong><small>Booking engines & M-Pesa payments</small></span>
          </a>
          <a href="{{ route('services.web-development') }}" class="mega-link">
            <i class="fas fa-cart-shopping"></i>
            <span><strong>E-Commerce & Online Stores</strong><small>Mobile money checkout & orders</small></span>
          </a>
          <a href="{{ route('services.system-development') }}" class="mega-link">
            <i class="fas fa-diagram-project"></i>
            <span><strong>Business Automation</strong><small>CRM, inventory & HR systems</small></span>
          </a>
          <a href="{{ route('services.network-installation') }}" class="mega-link">
            <i class="fas fa-video"></i>
            <span><strong>Network & CCTV Security</strong><small>Office networks & surveillance</small></span>
          </a>
          <a href="{{ route('services.mobile-app-development') }}" class="mega-link">
            <i class="fas fa-truck-fast"></i>
            <span><strong>Delivery & Booking Apps</strong><small>Apps with real-time tracking</small></span>
          </a>
          <a href="{{ route('services.cloud-services') }}" class="mega-link">
            <i class="fas fa-cloud-arrow-up"></i>
            <span><strong>Cloud & Data Protection</strong><small>Hosting, email & backups</small></span>
          </a>
        </div>
        <div class="mega-feature">
          <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Jezdan Technology Solutions">
          <div class="mega-feature-body">
            <h4>Solutions Built for Tanzania</h4>
            <p>Tailored digital solutions with local payments, Swahili support and TCRA compliance.</p>
            <a href="{{ route('request.quote') }}" class="mega-feature-link">Request a Solution <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="mega-footer">
          <p><i class="fas fa-shield-halved"></i> Secure, scalable & fully supported solutions</p>
          <a href="{{ route('request.quote') }}">Start Your Project <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </li>
    <li><a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'active' : '' }}">Team</a></li>
    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
    <li><a href="{{ route('request.quote') }}" class="nav-cta"><i class="fas fa-paper-plane"></i> Get a Quote</a></li>
  </ul>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <i class="fas fa-bars"></i>
  </button>
</nav>

@yield('content')

<!-- FOOTER -->
<footer>
  <div class="footer-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" focusable="false">
      <path d="M0,46 C220,88 460,10 720,28 C980,46 1240,88 1440,46 L1440,0 L0,0 Z" fill="#0E4C80" fill-opacity="0.9"/>
      <path d="M0,84 C280,116 540,38 820,62 C1100,84 1280,108 1440,84 L1440,0 L0,0 Z" fill="#0A3A66"/>
      <path d="M0,120 C300,102 620,124 900,112 C1180,100 1320,122 1440,116 L1440,0 L0,0 Z" fill="#062B4D"/>
    </svg>
  </div>
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <a href="{{ route('home') }}" class="nav-logo" style="margin-bottom:4px;" title="Jezdan Group">
          <span class="nav-logo-text nav-brand">Jezdan <span>Group</span></span>
        </a>
        <p>Jezdan Technology is a leading ICT company based in Moshi, Kilimanjaro, Tanzania. We deliver world-class digital services with a deep understanding of Tanzania's unique business landscape.</p>
        <div class="footer-social">
          <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-link" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
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
          <li><a href="{{ route('team') }}">Our Team</a></li>
          <li><a href="{{ route('home') }}#testimonials">Client Reviews</a></li>
          <li><a href="{{ route('pricing') }}">Pricing</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="{{ route('portfolio') }}">Our Portfolio</a></li>
          <li><a href="{{ route('careers') }}">Careers</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Contact</h5>
        <ul>
          <li><a href="tel:+255685847002"><i class="fas fa-phone" style="width:16px;"></i> +255 685 847 002</a></li>
          <li><a href="tel:+255622239304"><i class="fas fa-phone" style="width:16px;"></i> +255 622 239 304</a></li>
          <li><a href="mailto:info@jezdantech.com"><i class="fas fa-envelope" style="width:16px;"></i> info@jezdantech.com</a></li>
          <li><a href="https://maps.google.com/?q=Moshi,Kilimanjaro,Tanzania" target="_blank"><i class="fas fa-map-marker-alt" style="width:16px;"></i> Moshi, Kilimanjaro, Tanzania</a></li>
          <li><a href="https://wa.me/255685847002" target="_blank"><i class="fab fa-whatsapp" style="width:16px;color:var(--whatsapp);"></i> WhatsApp Us</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© {{ date('Y') }} Jezdan Group. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
      <p style="color:rgba(255,255,255,0.3);">Built with care in Moshi, Kilimanjaro, Tanzania</p>
    </div>
  </div>
</footer>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!" class="wa-float" target="_blank" title="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- BACK TO TOP -->
<a href="#home" id="back-top" title="Back to top"><i class="fas fa-chevron-up"></i></a>

<script>
  // Hamburger menu (mobile)
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
      if (window.innerWidth <= 1200) {
        document.getElementById('navLinks').classList.remove('open');
        document.getElementById('hamburger').innerHTML = '<i class="fas fa-bars"></i>';
      }
    });
  });

  // Mobile dropdown toggle (no link click navigation)
  document.querySelectorAll('#navLinks li.dropdown > a').forEach(link => {
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 1200) {
        e.preventDefault();
        link.closest('li.dropdown').classList.toggle('open');
      }
    });
  });

  // Tab switcher
  function switchTab(id) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    const clicked = document.querySelector('[data-tab="' + id + '"]');
    if (clicked) clicked.classList.add('active');
    const panel = document.getElementById('tab-' + id);
    if (panel) panel.classList.add('active');
  }

  // Back to top visibility
  window.addEventListener('scroll', function() {
    const btn = document.getElementById('back-top');
    btn.classList.toggle('visible', window.scrollY > 400);
  });

  // Reveal-on-scroll
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    const revObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          revObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(el => revObserver.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('in-view'));
  }

  // Smooth active nav link on scroll
  const sections = document.querySelectorAll('section[id], div[id]');
  const navLinks = document.querySelectorAll('.nav-links a');
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
        ? 'var(--primary)'
        : '';
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@yield('additional_scripts')
</body>
</html>
