@extends('layouts.app')

@section('title', 'Careers at Jezdan Technology | Join Our Team in Tanzania')

@section('meta_tags')
  <meta name="description" content="Build your career with Tanzania's leading ICT company. Explore open positions in web development, mobile apps, networking, cybersecurity, and IT support.">
  <meta name="keywords" content="ICT careers Tanzania, tech jobs Tanzania, developer jobs Moshi, IT jobs Dar es Salaam">
  <meta property="og:title" content="Careers at Jezdan Technology">
  <meta property="og:description" content="Join Tanzania's leading ICT company. Explore open positions and build your future in technology.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  .career-hero-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #fff, #9CC9EE, #fff);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: careerShine 5s linear infinite;
  }
  @keyframes careerShine { to { background-position: 200% center; } }

  /* â”€â”€â”€ Why Join Us â”€â”€â”€ */
  .career-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
  @media (max-width: 992px) { .career-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .career-grid { grid-template-columns: 1fr; } }
  .career-reveal { height: 100%; transition-delay: var(--d, 0s); }

  .career-card {
    position: relative; height: 100%;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
    padding: 38px 30px;
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .career-card::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, var(--primary), var(--sky-bright));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.45s ease;
  }
  .career-card:hover { transform: translateY(-10px); box-shadow: 0 24px 55px rgba(6, 43, 77, 0.12); border-color: rgba(12, 69, 128, 0.2); }
  .career-card:hover::before { transform: scaleX(1); }
  .career-card-icon {
    width: 60px; height: 60px; border-radius: 16px;
    background: rgba(12, 69, 128, 0.08);
    color: var(--primary); font-size: 1.4rem;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 22px;
    transition: transform 0.4s cubic-bezier(.34, 1.56, .64, 1), background 0.4s ease, color 0.4s ease;
  }
  .career-card:hover .career-card-icon { transform: rotate(-8deg) scale(1.1); background: var(--primary); color: #fff; }
  .career-card h3 { font-family: var(--font-display); font-size: 1.25rem; font-weight: 900; color: var(--dark); margin-bottom: 12px; }
  .career-card p { font-size: 0.92rem; color: var(--ink-muted); line-height: 1.7; }

  /* â”€â”€â”€ Job Listings â”€â”€â”€ */
  .jobs-wrap { max-width: 900px; margin: 0 auto; }

  .job-card {
    background: #fff;
    border-radius: 20px;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
    padding: 32px 34px;
    margin-bottom: 22px;
    transition: transform 0.4s cubic-bezier(.22, .61, .36, 1), box-shadow 0.4s ease, border-color 0.4s ease;
  }
  .job-card:hover { transform: translateY(-6px); box-shadow: 0 22px 50px rgba(6, 43, 77, 0.12); border-color: rgba(12, 69, 128, 0.25); }
  .job-card-top { display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 16px; }
  .job-card-title { display: flex; align-items: center; gap: 14px; }
  .job-card-icon {
    width: 50px; height: 50px; border-radius: 14px;
    background: linear-gradient(135deg, var(--primary), #0F5FA8);
    color: #fff; font-size: 1.15rem;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .job-card h3 { font-family: var(--font-display); font-size: 1.3rem; font-weight: 900; color: var(--dark); margin-bottom: 10px; }
  .job-badges { display: flex; gap: 10px; flex-wrap: wrap; }
  .job-badge {
    padding: 5px 14px; border-radius: 50px;
    font-size: 0.78rem; font-weight: 700;
  }
  .job-badge.type { background: rgba(26, 111, 196, 0.1); color: var(--accent); }
  .job-badge.mode { background: rgba(16, 185, 129, 0.1); color: #10b981; }
  .job-badge.location { background: rgba(245, 158, 11, 0.1); color: #f59e0b; }
  .job-badge.salary { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }

  .job-card-desc { color: var(--ink-muted); line-height: 1.7; margin: 20px 0 0; }
  .job-card-foot {
    display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px;
    margin-top: 24px; padding-top: 20px; border-top: 1px solid #f1f5f9;
  }
  .job-apply {
    display: inline-flex; align-items: center; gap: 9px;
    background: var(--primary); color: #fff;
    padding: 12px 30px; border-radius: 50px;
    font-size: 0.92rem; font-weight: 700; text-decoration: none;
    box-shadow: 0 10px 24px rgba(12, 69, 128, 0.28);
    transition: all 0.3s ease;
  }
  .job-apply:hover { transform: translateY(-3px); background: #0F5FA8; box-shadow: 0 16px 32px rgba(12, 69, 128, 0.36); }
  .job-reqs-btn {
    background: none; border: none;
    color: var(--primary); font-weight: 700; font-size: 0.88rem;
    cursor: pointer; display: inline-flex; align-items: center; gap: 8px;
    padding: 8px 4px;
    transition: color 0.3s ease;
  }
  .job-reqs-btn i { transition: transform 0.35s ease; }
  .job-reqs-btn.open i { transform: rotate(180deg); }
  .job-reqs-btn:hover { color: #0F5FA8; }
  .job-reqs {
    max-height: 0; overflow: hidden;
    transition: max-height 0.45s cubic-bezier(.22, .61, .36, 1), margin 0.45s ease, padding 0.45s ease;
    margin: 0;
  }
  .job-reqs.open { max-height: 600px; margin-top: 22px; padding-top: 22px; border-top: 1px dashed #e2e8f0; }
  .job-reqs h4 { font-size: 0.95rem; font-weight: 800; color: var(--navy); margin-bottom: 12px; display: flex; align-items: center; gap: 10px; }
  .job-reqs h4 i { color: var(--accent); }
  .job-reqs ul { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px 24px; }
  @media (max-width: 640px) { .job-reqs ul { grid-template-columns: 1fr; } }
  .job-reqs ul li {
    display: flex; align-items: flex-start; gap: 10px;
    color: var(--ink-muted); font-size: 0.9rem; line-height: 1.6;
  }
  .job-reqs ul li i { color: #10b981; font-size: 0.75rem; margin-top: 5px; flex-shrink: 0; }

  /* â”€â”€â”€ Perks â”€â”€â”€ */
  .perks {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #062B4D 0%, #0C4580 55%, #0F5FA8 100%);
    padding: 100px 0;
  }
  .perks::before {
    content: ''; position: absolute; width: 420px; height: 420px; border-radius: 50%;
    top: -150px; right: -100px;
    background: radial-gradient(circle, rgba(111, 177, 232, 0.4), transparent 70%);
    animation: perksBlob 12s ease-in-out infinite;
  }
  .perks::after {
    content: ''; position: absolute; width: 340px; height: 340px; border-radius: 50%;
    bottom: -130px; left: -80px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.22), transparent 70%);
    animation: perksBlob 12s ease-in-out infinite reverse;
  }
  @keyframes perksBlob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50%      { transform: translate(30px, 22px) scale(1.08); }
  }
  .perks .container { position: relative; z-index: 2; }
  .perks-head { text-align: center; margin-bottom: 60px; }
  .perks-head .section-title { color: #fff; }
  .perks-head .section-title span { color: var(--sky-bright); }
  .perks-head .section-sub { color: rgba(255, 255, 255, 0.7); }
  .perks-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  @media (max-width: 992px) { .perks-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .perks-grid { grid-template-columns: 1fr; } }
  .perk-item {
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 18px;
    padding: 30px 26px;
    display: flex; gap: 18px; align-items: flex-start;
    backdrop-filter: blur(8px);
    transition: transform 0.4s ease, background 0.4s ease, border-color 0.4s ease;
  }
  .perk-item:hover { transform: translateY(-7px); background: rgba(255, 255, 255, 0.12); border-color: rgba(255, 255, 255, 0.35); }
  .perk-icon {
    width: 48px; height: 48px; border-radius: 14px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--sky-bright), var(--primary));
    color: #fff; font-size: 1.1rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 10px 22px rgba(0, 0, 0, 0.25);
  }
  .perk-item h4 { color: #fff; font-family: var(--font-display); font-size: 1.05rem; font-weight: 800; margin-bottom: 8px; }
  .perk-item p { color: rgba(255, 255, 255, 0.68); font-size: 0.85rem; line-height: 1.6; }

  /* â”€â”€â”€ Hire us / CTA â”€â”€â”€ */
  .hire-strip {
    position: relative; overflow: hidden;
    display: flex; align-items: center; justify-content: space-between; gap: 28px; flex-wrap: wrap;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    border-radius: 22px; padding: 42px 46px;
    color: #fff;
    animation: hireShift 8s linear infinite;
  }
  @keyframes hireShift { to { background-position: 200% center; } }
  .hire-strip::before {
    content: ''; position: absolute; width: 260px; height: 260px; border-radius: 50%;
    top: -100px; right: -60px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.26), transparent 70%);
    animation: hirePulse 5s ease-in-out infinite;
  }
  @keyframes hirePulse {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50%      { transform: scale(1.15); opacity: 1; }
  }
  .hire-strip h3 { font-family: var(--font-display); font-size: 1.55rem; font-weight: 900; margin-bottom: 8px; position: relative; z-index: 2; }
  .hire-strip p { color: rgba(255, 255, 255, 0.8); font-size: 0.98rem; max-width: 540px; line-height: 1.65; position: relative; z-index: 2; }
  .hire-strip .hire-actions { display: flex; gap: 14px; flex-wrap: wrap; position: relative; z-index: 2; }
  .hire-strip .btn-primary { background: #fff; color: var(--primary); box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2); }
  .hire-strip .btn-primary:hover { background: var(--sky-bright); color: #062B4D; }
  .hire-strip .btn-outline { border-color: rgba(255, 255, 255, 0.55); color: #fff; }
  .hire-strip .btn-outline:hover { background: rgba(255, 255, 255, 0.12); }
</style>

<!-- HERO -->
<section class="hero" id="home" style="min-height: 62vh; text-align: center;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay" style="mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%); -webkit-mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%);"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <div style="max-width: 840px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Careers at Jezdan
      </div>
      <h1 class="hero-title career-hero-title">
        Join Our <span>Team</span>, Build the <span>Future</span>
      </h1>
      <p class="hero-subtitle" style="max-width: 720px; margin: 0 auto;">
        Build your career with Tanzania's leading ICT company. We're looking for talented individuals passionate about technology, innovation, and making a real impact.
      </p>
      <div class="hero-actions" style="margin-top: 36px;">
        <a href="#open-positions" class="btn-primary"><i class="fas fa-briefcase"></i> View Open Positions</a>
        <a href="{{ route('contact') }}" class="btn-outline"><i class="fas fa-envelope"></i> Get in Touch</a>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust-strip">
  <div class="trust-strip-inner">
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-mobile-alt"></i> Growing Tech Team</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-globe-africa"></i> Projects Across East Africa</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-graduation-cap"></i> Continuous Learning</div>
    <div class="trust-divider"></div>
    <div class="trust-item"><i class="fas fa-handshake"></i> Equal Opportunity Employer</div>
    <div class="trust-divider"></div>
  </div>
</div>

<!-- WHY JOIN US -->
<section class="services" style="background: var(--off-white); padding: 100px 0;">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 56px;">
      <div class="section-label"><i class="fas fa-users"></i> Why Join Us</div>
      <h2 class="section-title">Build Your Future with <span>Jezdan Technology</span></h2>
      <p class="section-sub">We offer a dynamic work environment, competitive benefits, and real opportunities for growth in Tanzania's thriving tech sector.</p>
    </div>

    <div class="career-grid">
      <div class="reveal career-reveal" style="--d:0s;">
        <div class="career-card">
          <div class="career-card-icon"><i class="fas fa-rocket"></i></div>
          <h3>Career Growth</h3>
          <p>Continuous learning opportunities, mentorship programs, and clear career progression paths for every team member.</p>
        </div>
      </div>
      <div class="reveal career-reveal" style="--d:90ms;">
        <div class="career-card">
          <div class="career-card-icon"><i class="fas fa-laptop-house"></i></div>
          <h3>Flexible Work</h3>
          <p>Hybrid work options, flexible hours, and a supportive work-life balance that respects your personal time.</p>
        </div>
      </div>
      <div class="reveal career-reveal" style="--d:180ms;">
        <div class="career-card">
          <div class="career-card-icon"><i class="fas fa-graduation-cap"></i></div>
          <h3>Training &amp; Development</h3>
          <p>Regular training sessions, certification support, and access to the latest technologies and industry tools.</p>
        </div>
      </div>
      <div class="reveal career-reveal" style="--d:0s;">
        <div class="career-card">
          <div class="career-card-icon"><i class="fas fa-hand-holding-dollar"></i></div>
          <h3>Competitive Pay</h3>
          <p>Industry-competitive salaries, performance bonuses, and a comprehensive benefits package.</p>
        </div>
      </div>
      <div class="reveal career-reveal" style="--d:90ms;">
        <div class="career-card">
          <div class="career-card-icon"><i class="fas fa-project-diagram"></i></div>
          <h3>Exciting Projects</h3>
          <p>Work on diverse projects for clients across Tanzania and East Africa â€” from startups to large enterprises.</p>
        </div>
      </div>
      <div class="reveal career-reveal" style="--d:180ms;">
        <div class="career-card">
          <div class="career-card-icon"><i class="fas fa-heart"></i></div>
          <h3>Great Culture</h3>
          <p>A collaborative, inclusive team where your ideas are valued and innovation is encouraged every day.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OPEN POSITIONS -->
<section class="services" id="open-positions" style="background: white; padding: 100px 0;">
  <div class="container">
    <div class="jobs-wrap">

      @php
        $jobs = [
          [
            'title' => 'Senior Web Developer',
            'icon' => 'fa-code',
            'type' => 'Full-time',
            'mode' => 'Remote/Hybrid',
            'location' => 'Moshi / Dar es Salaam',
            'salary' => 'TZS 1.8M â€“ 3.5M',
            'desc' => "We're looking for an experienced Web Developer to join our team. You'll build and maintain modern web applications using Laravel, React, and other cutting-edge technologies for clients across Tanzania and East Africa.",
            'reqs' => [
              '3+ years of experience in web development',
              'Strong knowledge of PHP, Laravel, JavaScript, React',
              'Experience with MySQL and database design',
              'Understanding of responsive design and UI/UX principles',
              'Experience with Git and agile workflows',
              'Good communication and teamwork skills',
            ],
          ],
          [
            'title' => 'Mobile App Developer',
            'icon' => 'fa-mobile-screen-button',
            'type' => 'Full-time',
            'mode' => 'Remote/Hybrid',
            'location' => 'Dar es Salaam',
            'salary' => 'TZS 1.5M â€“ 2.8M',
            'desc' => 'Join our mobile development team to create amazing cross-platform applications using Flutter and React Native. You\'ll work on projects for clients across various industries.',
            'reqs' => [
              '2+ years of mobile app development experience',
              'Proficiency in Flutter or React Native',
              'Knowledge of Dart, JavaScript, or TypeScript',
              'Experience with REST APIs and third-party integrations',
              'Understanding of mobile payments (M-Pesa, TigoPesa)',
              'Portfolio of published mobile applications',
            ],
          ],
          [
            'title' => 'Network Engineer',
            'icon' => 'fa-network-wired',
            'type' => 'Full-time',
            'mode' => 'On-site',
            'location' => 'Moshi',
            'salary' => 'TZS 1.2M â€“ 2.4M',
            'desc' => "We're seeking a skilled Network Engineer to design, implement, and maintain network infrastructure for our clients â€” from small offices to large hotel and lodge installations.",
            'reqs' => [
              '2+ years of network engineering experience',
              'CCNA or equivalent certification preferred',
              'Experience with routers, switches, and wireless networks',
              'Knowledge of VLANs, VPNs, and network security',
              'Familiarity with MikroTik and Ubiquiti equipment',
              'Willingness to travel to client sites',
            ],
          ],
          [
            'title' => 'Cybersecurity Analyst',
            'icon' => 'fa-shield-halved',
            'type' => 'Full-time',
            'mode' => 'Hybrid',
            'location' => 'Moshi / Remote',
            'salary' => 'TZS 1.4M â€“ 2.6M',
            'desc' => 'Protect our clients\' systems and data by conducting security audits, implementing firewalls and monitoring tools, and responding to security incidents.',
            'reqs' => [
              '2+ years of cybersecurity experience',
              'Knowledge of firewalls, SIEM, and vulnerability scanning',
              'Experience with penetration testing tools',
              'Understanding of TCRA and GDPR compliance',
              'Security certifications are a strong plus',
            ],
          ],
          [
            'title' => 'IT Support Specialist',
            'icon' => 'fa-headset',
            'type' => 'Full-time',
            'mode' => 'Hybrid',
            'location' => 'Moshi',
            'salary' => 'TZS 800K â€“ 1.4M',
            'desc' => 'Join our IT support team to provide exceptional technical assistance to our clients. You\'ll handle troubleshooting, maintenance, and system administration tasks.',
            'reqs' => [
              '1+ years of IT support experience',
              'Knowledge of Windows, Linux, and macOS',
              'Experience with office networks and printers',
              'Experience with business email and cloud tools',
              'Strong problem-solving skills',
              'Excellent customer service abilities',
            ],
          ],
          [
            'title' => 'Junior Web Developer (Internship)',
            'icon' => 'fa-graduation-cap',
            'type' => 'Internship',
            'mode' => 'On-site',
            'location' => 'Moshi',
            'salary' => 'Stipend Provided',
            'desc' => 'A 6-month paid internship for recent graduates passionate about web development. Work alongside senior engineers on real client projects and graduate with a solid portfolio.',
            'reqs' => [
              'Degree or diploma in IT, CS, or related field',
              'Basic knowledge of HTML, CSS, and JavaScript',
              'Familiarity with PHP or a modern framework',
              'Eagerness to learn and work in a team',
              'Portfolio or personal projects is a plus',
            ],
          ],
        ];
      @endphp

      @foreach($jobs as $index => $job)
      <div class="job-card reveal" style="--d:{{ ($index % 2) * 80 }}ms;">
        <div class="job-card-top">
          <div style="display:flex; gap: 18px; align-items:flex-start; flex-wrap: wrap;">
            <div class="job-card-icon"><i class="fas {{ $job['icon'] }}"></i></div>
            <div>
              <h3>{{ $job['title'] }}</h3>
              <div class="job-badges">
                <span class="job-badge type">{{ $job['type'] }}</span>
                <span class="job-badge mode">{{ $job['mode'] }}</span>
                <span class="job-badge location"><i class="fas fa-map-marker-alt"></i> {{ $job['location'] }}</span>
                <span class="job-badge salary"><i class="fas fa-coins"></i> {{ $job['salary'] }}</span>
              </div>
            </div>
          </div>
          <button class="job-reqs-btn" onclick="toggleReqs(this)"><i class="fas fa-chevron-down"></i> Requirements</button>
        </div>
        <p class="job-card-desc">{{ $job['desc'] }}</p>
        <div class="job-reqs" id="job-reqs-{{ $index }}">
          <h4><i class="fas fa-list-check"></i> Key Requirements</h4>
          <ul>
            @foreach($job['reqs'] as $req)
              <li><i class="fas fa-check"></i> {{ $req }}</li>
            @endforeach
          </ul>
        </div>
        <div class="job-card-foot">
          <span style="font-size: 0.85rem; color: var(--ink-muted);"><i class="fas fa-paper-plane"></i> Send CV + cover letter to <strong>careers@jezdantech.com</strong></span>
          <a href="mailto:careers@jezdantech.com?subject=Application%3A%20{{ urlencode($job['title']) }}" class="job-apply">Apply Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats" style="background: var(--off-white);">
  <div class="stats-grid">
    <div class="stat-item">
      <span class="stat-num">15<span>+</span></span>
      <div class="stat-label">Team Members</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:80%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">500<span>+</span></span>
      <div class="stat-label">Projects Delivered</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:90%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">7<span>+</span></span>
      <div class="stat-label">Years of Excellence</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:75%"></div></div>
    </div>
    <div class="stat-item">
      <span class="stat-num">98<span>%</span></span>
      <div class="stat-label">Employee Retention</div>
      <div class="stat-bar"><div class="stat-bar-fill" style="width:98%"></div></div>
    </div>
  </div>
</div>

<!-- PERKS -->
<section class="perks">
  <div class="container">
    <div class="perks-head reveal">
      <div class="section-label"><i class="fas fa-gift"></i> Perks &amp; Benefits</div>
      <h2 class="section-title">We Take Care of <span>Our People</span></h2>
      <p class="section-sub">Beyond the work, here's what being part of the Jezdan family includes.</p>
    </div>
    <div class="perks-grid">
      <div class="perk-item reveal" style="--d:0s;">
        <div class="perk-icon"><i class="fas fa-heart-pulse"></i></div>
        <div>
          <h4>Health &amp; Wellness</h4>
          <p>Medical cover and wellness programs that keep you healthy and focused.</p>
        </div>
      </div>
      <div class="perk-item reveal" style="--d:80ms;">
        <div class="perk-icon"><i class="fas fa-book"></i></div>
        <div>
          <h4>Certification Sponsorship</h4>
          <p>We fund professional certifications and courses to grow your skills.</p>
        </div>
      </div>
      <div class="perk-item reveal" style="--d:160ms;">
        <div class="perk-icon"><i class="fas fa-umbrella-beach"></i></div>
        <div>
          <h4>Paid Leave</h4>
          <p>Generous annual leave plus public holidays, so you can truly recharge.</p>
        </div>
      </div>
      <div class="perk-item reveal" style="--d:0s;">
        <div class="perk-icon"><i class="fas fa-wifi"></i></div>
        <div>
          <h4>Work Equipment</h4>
          <p>Modern laptop and tools provided â€” plus a remote-friendly setup stipend.</p>
        </div>
      </div>
      <div class="perk-item reveal" style="--d:80ms;">
        <div class="perk-icon"><i class="fas fa-champagne-glasses"></i></div>
        <div>
          <h4>Team Events</h4>
          <p>Regular team retreats, hack days, and socials that make work fun.</p>
        </div>
      </div>
      <div class="perk-item reveal" style="--d:160ms;">
        <div class="perk-icon"><i class="fas fa-ranking-star"></i></div>
        <div>
          <h4>Performance Bonuses</h4>
          <p>Quarterly and annual bonuses tied to your impact and growth.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APPLICATION PROCESS -->
<section class="process">
  <div class="container">
    <div class="section-header" style="text-align:center;max-width:600px;margin:0 auto 0;">
      <div class="section-label"><i class="fas fa-clipboard-list"></i> Application Process</div>
      <h2 class="section-title" style="color:white;">How to <span>Apply</span></h2>
      <p class="section-sub">Our application process is simple and transparent. Follow these steps to join our team.</p>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <h4>Submit Application</h4>
        <p>Send your CV and cover letter to careers@jezdantech.com.</p>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <h4>Initial Screening</h4>
        <p>Our HR team reviews your application within 5 business days.</p>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <h4>Interviews</h4>
        <p>Technical and cultural-fit interviews with the team.</p>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <h4>Welcome Aboard</h4>
        <p>Receive your offer and join the Jezdan Technology family.</p>
      </div>
    </div>
  </div>
</section>

<!-- HIRE / CTA -->
<section class="services" style="background: var(--off-white); padding: 100px 0;">
  <div class="container">
    <div class="hire-strip reveal">
      <div style="position: relative; z-index: 2;">
        <h3>Don't See a Role That Fits?</h3>
        <p>We're always on the lookout for exceptional talent. Send us a speculative application and we'll keep you in mind for future openings.</p>
      </div>
      <div class="hire-actions">
        <a href="mailto:careers@jezdantech.com?subject=Speculative%20Application" class="btn-primary"><i class="fas fa-paper-plane"></i> Send Your CV</a>
        <a href="{{ route('contact') }}" class="btn-outline"><i class="fas fa-envelope"></i> Contact Us</a>
      </div>
    </div>
  </div>
</section>

@section('additional_scripts')
<script>
  // Expandable requirements
  function toggleReqs(btn) {
    const card = btn.closest('.job-card');
    const reqs = card.querySelector('.job-reqs');
    btn.classList.toggle('open');
    reqs.classList.toggle('open');
  }
</script>
@endsection
@endsection
