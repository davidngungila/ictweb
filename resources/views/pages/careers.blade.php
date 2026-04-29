@extends('layouts.app')

@section('title', 'Careers - Jezdan Technology')

@section('content')
<!-- HERO -->
<section class="hero" style="background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%); padding: 120px 0 80px;">
  <div class="container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;">
      <h1 style="font-family: var(--font-display); font-size: 3rem; font-weight: 700; color: white; margin-bottom: 20px;">
        Join Our <span style="color: var(--accent-bright);">Team</span>
      </h1>
      <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); line-height: 1.8;">
        Build your career with Tanzania's leading ICT company. We're looking for talented individuals who are passionate about technology and innovation.
      </p>
    </div>
  </div>
</section>

<!-- WHY JOIN US -->
<section class="services" style="background: var(--off-white); padding: 80px 0;">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 60px;">
      <div class="section-label"><i class="fas fa-users"></i> Why Join Us</div>
      <h2 class="section-title">Build Your Future with <span>Jezdan Technology</span></h2>
      <p class="section-sub">We offer a dynamic work environment, competitive benefits, and opportunities for growth in Tanzania's thriving tech sector.</p>
    </div>
    
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-rocket"></i></div>
        <h3>Career Growth</h3>
        <p>Continuous learning opportunities, mentorship programs, and clear career progression paths for all team members.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-laptop-house"></i></div>
        <h3>Flexible Work</h3>
        <p>Hybrid work options, flexible hours, and a supportive work-life balance that respects your personal time.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Training & Development</h3>
        <p>Regular training sessions, certifications support, and access to the latest technologies and tools.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-hand-holding-dollar"></i></div>
        <h3>Competitive Pay</h3>
        <p>Industry-competitive salaries, performance bonuses, and comprehensive benefits package.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-project-diagram"></i></div>
        <h3>Exciting Projects</h3>
        <p>Work on diverse projects for clients across Tanzania and East Africa, from startups to enterprises.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-heart"></i></div>
        <h3>Great Culture</h3>
        <p>A collaborative, inclusive team environment where your ideas are valued and innovation is encouraged.</p>
      </div>
    </div>
  </div>
</section>

<!-- OPEN POSITIONS -->
<section class="services" style="background: white; padding: 80px 0;">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 60px;">
      <div class="section-label"><i class="fas fa-briefcase"></i> Open Positions</div>
      <h2 class="section-title">Current <span>Job Openings</span></h2>
      <p class="section-sub">Explore our available positions and find the perfect role to advance your career in technology.</p>
    </div>
    
    <div style="max-width: 900px; margin: 0 auto;">
      <!-- Job 1 -->
      <div class="service-card" style="margin-bottom: 20px; padding: 30px; display: flex; flex-direction: column; gap: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px;">
          <div>
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Senior Web Developer</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              <span style="background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Full-time</span>
              <span style="background: rgba(16,185,129,0.1); color: #10b981; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Remote/Hybrid</span>
              <span style="background: rgba(245,158,11,0.1); color: #f59e0b; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Moshi/Dar es Salaam</span>
            </div>
          </div>
          <button style="background: var(--accent); color: white; border: none; padding: 12px 30px; border-radius: 50px; font-size: 0.95rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
            Apply Now
          </button>
        </div>
        <p style="color: var(--text-mid); line-height: 1.7; margin-bottom: 15px;">
          We're looking for an experienced Web Developer to join our team. You'll be responsible for building and maintaining modern web applications using Laravel, React, and other cutting-edge technologies.
        </p>
        <div style="border-top: 1px solid #e0e0e0; padding-top: 15px;">
          <h4 style="font-size: 0.95rem; font-weight: 600; color: var(--navy); margin-bottom: 10px;">Requirements:</h4>
          <ul style="color: var(--text-mid); line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>3+ years of experience in web development</li>
            <li>Strong knowledge of PHP, Laravel, JavaScript, React</li>
            <li>Experience with MySQL and database design</li>
            <li>Understanding of responsive design and UI/UX principles</li>
            <li>Good communication and teamwork skills</li>
          </ul>
        </div>
      </div>

      <!-- Job 2 -->
      <div class="service-card" style="margin-bottom: 20px; padding: 30px; display: flex; flex-direction: column; gap: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px;">
          <div>
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Mobile App Developer</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              <span style="background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Full-time</span>
              <span style="background: rgba(16,185,129,0.1); color: #10b981; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Remote/Hybrid</span>
              <span style="background: rgba(245,158,11,0.1); color: #f59e0b; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Dar es Salaam</span>
            </div>
          </div>
          <button style="background: var(--accent); color: white; border: none; padding: 12px 30px; border-radius: 50px; font-size: 0.95rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
            Apply Now
          </button>
        </div>
        <p style="color: var(--text-mid); line-height: 1.7; margin-bottom: 15px;">
          Join our mobile development team to create amazing cross-platform applications using Flutter and React Native. You'll work on projects for clients across various industries.
        </p>
        <div style="border-top: 1px solid #e0e0e0; padding-top: 15px;">
          <h4 style="font-size: 0.95rem; font-weight: 600; color: var(--navy); margin-bottom: 10px;">Requirements:</h4>
          <ul style="color: var(--text-mid); line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>2+ years of mobile app development experience</li>
            <li>Proficiency in Flutter or React Native</li>
            <li>Knowledge of Dart, JavaScript, or TypeScript</li>
            <li>Experience with REST APIs and third-party integrations</li>
            <li>Portfolio of published mobile applications</li>
          </ul>
        </div>
      </div>

      <!-- Job 3 -->
      <div class="service-card" style="margin-bottom: 20px; padding: 30px; display: flex; flex-direction: column; gap: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px;">
          <div>
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">Network Engineer</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              <span style="background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Full-time</span>
              <span style="background: rgba(220,38,38,0.1); color: #dc2626; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">On-site</span>
              <span style="background: rgba(245,158,11,0.1); color: #f59e0b; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Moshi</span>
            </div>
          </div>
          <button style="background: var(--accent); color: white; border: none; padding: 12px 30px; border-radius: 50px; font-size: 0.95rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
            Apply Now
          </button>
        </div>
        <p style="color: var(--text-mid); line-height: 1.7; margin-bottom: 15px;">
          We're seeking a skilled Network Engineer to design, implement, and maintain network infrastructure for our clients. You'll work on projects ranging from small offices to large hotel installations.
        </p>
        <div style="border-top: 1px solid #e0e0e0; padding-top: 15px;">
          <h4 style="font-size: 0.95rem; font-weight: 600; color: var(--navy); margin-bottom: 10px;">Requirements:</h4>
          <ul style="color: var(--text-mid); line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>2+ years of network engineering experience</li>
            <li>CCNA or equivalent certification preferred</li>
            <li>Experience with routers, switches, and wireless networks</li>
            <li>Knowledge of VLANs, VPNs, and network security</li>
            <li>Willingness to travel to client sites</li>
          </ul>
        </div>
      </div>

      <!-- Job 4 -->
      <div class="service-card" style="margin-bottom: 20px; padding: 30px; display: flex; flex-direction: column; gap: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px;">
          <div>
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 8px;">IT Support Specialist</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              <span style="background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Full-time</span>
              <span style="background: rgba(16,185,129,0.1); color: #10b981; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Hybrid</span>
              <span style="background: rgba(245,158,11,0.1); color: #f59e0b; padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">Moshi</span>
            </div>
          </div>
          <button style="background: var(--accent); color: white; border: none; padding: 12px 30px; border-radius: 50px; font-size: 0.95rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
            Apply Now
          </button>
        </div>
        <p style="color: var(--text-mid); line-height: 1.7; margin-bottom: 15px;">
          Join our IT support team to provide exceptional technical assistance to our clients. You'll handle troubleshooting, maintenance, and system administration tasks.
        </p>
        <div style="border-top: 1px solid #e0e0e0; padding-top: 15px;">
          <h4 style="font-size: 0.95rem; font-weight: 600; color: var(--navy); margin-bottom: 10px;">Requirements:</h4>
          <ul style="color: var(--text-mid); line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>1+ years of IT support experience</li>
            <li>Knowledge of Windows, Linux, and macOS</li>
            <li>Experience with office networks and printers</li>
            <li>Strong problem-solving skills</li>
            <li>Excellent customer service abilities</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APPLICATION PROCESS -->
<section class="tour-packages" style="background: var(--off-white); padding: 80px 0;">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 60px;">
      <div class="section-label"><i class="fas fa-clipboard-list"></i> Application Process</div>
      <h2 class="section-title">How to <span>Apply</span></h2>
      <p class="section-sub">Our application process is simple and straightforward. Follow these steps to join our team.</p>
    </div>
    
    <div style="max-width: 900px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
      <div style="text-align: center; padding: 30px; background: white; border-radius: var(--radius); box-shadow: var(--shadow);">
        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 1.5rem; font-weight: 700;">1</div>
        <h3 style="font-family: var(--font-display); font-size: 1.1rem; font-weight: 700; color: var(--navy); margin-bottom: 10px;">Submit Application</h3>
        <p style="color: var(--text-mid); font-size: 0.9rem; line-height: 1.6;">Send your CV and cover letter to careers@jezdantech.com</p>
      </div>
      <div style="text-align: center; padding: 30px; background: white; border-radius: var(--radius); box-shadow: var(--shadow);">
        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 1.5rem; font-weight: 700;">2</div>
        <h3 style="font-family: var(--font-display); font-size: 1.1rem; font-weight: 700; color: var(--navy); margin-bottom: 10px;">Initial Screening</h3>
        <p style="color: var(--text-mid); font-size: 0.9rem; line-height: 1.6;">Our HR team reviews your application within 5 business days</p>
      </div>
      <div style="text-align: center; padding: 30px; background: white; border-radius: var(--radius); box-shadow: var(--shadow);">
        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 1.5rem; font-weight: 700;">3</div>
        <h3 style="font-family: var(--font-display); font-size: 1.1rem; font-weight: 700; color: var(--navy); margin-bottom: 10px;">Interview</h3>
        <p style="color: var(--text-mid); font-size: 0.9rem; line-height: 1.6;">Technical and cultural fit interviews with our team</p>
      </div>
      <div style="text-align: center; padding: 30px; background: white; border-radius: var(--radius); box-shadow: var(--shadow);">
        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--accent), var(--accent-bright)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 1.5rem; font-weight: 700;">4</div>
        <h3 style="font-family: var(--font-display); font-size: 1.1rem; font-weight: 700; color: var(--navy); margin-bottom: 10px;">Welcome Aboard</h3>
        <p style="color: var(--text-mid); font-size: 0.9rem; line-height: 1.6;">Receive offer and join the Jezdan Technology family</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="hero" style="background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%); padding: 80px 0;">
  <div class="container">
    <div style="text-align: center; max-width: 700px; margin: 0 auto;">
      <h2 style="font-family: var(--font-display); font-size: 2rem; font-weight: 700; color: white; margin-bottom: 20px;">Ready to Start Your Journey?</h2>
      <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px;">
        Send your application to careers@jezdantech.com and take the first step towards an exciting career in technology.
      </p>
      <a href="mailto:careers@jezdantech.com" style="display: inline-block; background: var(--accent-bright); color: white; padding: 15px 40px; border-radius: 50px; font-size: 1.1rem; font-weight: 600; text-decoration: none; transition: all 0.3s;">
        Apply Now <i class="fas fa-paper-plane" style="margin-left: 8px;"></i>
      </a>
    </div>
  </div>
</section>
@endsection
