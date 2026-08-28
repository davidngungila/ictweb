@extends('layouts.app')

@section('title', 'Privacy Policy | JezdanTech')

@section('meta_tags')
  <meta name="description" content="How JezdanTech collects, uses, protects, and shares personal data. Compliant with Tanzania's Personal Data Protection Act 2022 and GDPR principles.">
  <meta name="keywords" content="JezdanTech privacy policy, data protection Tanzania, PDPA, GDPR, personal data">
  <meta property="og:title" content="Privacy Policy | JezdanTech">
  <meta property="og:description" content="How JezdanTech collects, uses, protects, and shares personal data in line with Tanzania's PDPA and GDPR.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<style>
  .legal-hero {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #062B4D 0%, #0A3A66 55%, #093967 100%);
    padding: 96px 0 78px;
  }
  .legal-hero::before {
    content: ''; position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(111,177,232,0.06) 1px, transparent 1px), linear-gradient(90deg, rgba(111,177,232,0.06) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: radial-gradient(ellipse at 30% 30%, #000 20%, transparent 78%);
    -webkit-mask-image: radial-gradient(ellipse at 30% 30%, #000 20%, transparent 78%);
  }
  .legal-hero::after {
    content: ''; position: absolute; width: 520px; height: 520px; border-radius: 50%;
    background: radial-gradient(circle, rgba(61,143,212,0.26), transparent 68%);
    top: -180px; right: -120px; pointer-events: none;
  }
  .legal-hero-inner { position: relative; z-index: 2; max-width: 920px; margin: 0 auto; text-align: center; }
  .legal-badge {
    display: inline-flex; align-items: center; gap: 9px;
    background: rgba(111,177,232,0.14); border: 1px solid rgba(111,177,232,0.32);
    color: #8FCCEC; font-weight: 800; font-size: .76rem; letter-spacing: 1.6px; text-transform: uppercase;
    padding: 8px 18px; border-radius: 50px; margin-bottom: 22px;
  }
  .legal-badge i { color: #FFD21F; }
  .legal-hero h1 {
    font-family: var(--font-display);
    font-size: clamp(2rem, 4.4vw, 3.1rem); font-weight: 900; letter-spacing: -1px;
    color: #fff; margin: 0 0 16px;
  }
  .legal-hero p { color: rgba(255,255,255,0.74); font-size: 1.02rem; line-height: 1.7; margin: 0; }
  .legal-meta {
    display: inline-flex; align-items: center; gap: 9px; margin-top: 26px;
    background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.14);
    border-radius: 50px; padding: 9px 18px; color: rgba(255,255,255,0.82);
    font-size: .82rem; font-weight: 700;
  }
  .legal-meta i { color: #FFD21F; }

  .legal-wrap { background: #F5F8FD; padding: 72px 0 96px; }
  .legal-layout { display: grid; grid-template-columns: 270px 1fr; gap: 48px; align-items: start; }
  .legal-toc {
    position: sticky; top: 96px;
    background: #fff; border: 1px solid #E0EBF5; border-radius: 18px;
    padding: 26px 24px; box-shadow: 0 10px 40px rgba(6,43,77,0.06);
  }
  .legal-toc h4 {
    font-family: var(--font-display); font-size: .78rem; font-weight: 800;
    text-transform: uppercase; letter-spacing: 1.4px; color: #6E829C; margin: 0 0 16px;
  }
  .legal-toc a {
    display: flex; align-items: center; gap: 10px;
    color: #4A5E78; text-decoration: none; font-weight: 700; font-size: .9rem;
    padding: 9px 12px; border-radius: 10px; transition: all .2s;
  }
  .legal-toc a i { color: #0C4580; font-size: .7rem; width: 12px; }
  .legal-toc a:hover { background: #E0EBF5; color: #0C4580; }
  .legal-toc a.active { background: #0C4580; color: #fff; }
  .legal-toc a.active i { color: #FFD21F; }

  .legal-content { background: #fff; border: 1px solid #E0EBF5; border-radius: 20px; padding: 48px 52px; box-shadow: 0 10px 40px rgba(6,43,77,0.06); }
  .legal-content h2 {
    font-family: var(--font-display); font-size: 1.42rem; font-weight: 900; letter-spacing: -.4px;
    color: #062B4D; margin: 0 0 14px; scroll-margin-top: 96px;
    padding-bottom: 12px; border-bottom: 2px solid #E0EBF5;
  }
  .legal-content h2 .num { color: #0C4580; margin-right: 8px; }
  .legal-content section { margin-bottom: 44px; }
  .legal-content section:last-child { margin-bottom: 0; }
  .legal-content p { color: #4A5E78; font-size: .97rem; line-height: 1.8; margin: 0 0 14px; }
  .legal-content ul { margin: 0 0 14px; padding-left: 4px; list-style: none; }
  .legal-content ul li { position: relative; padding-left: 28px; color: #4A5E78; font-size: .97rem; line-height: 1.8; margin-bottom: 8px; }
  .legal-content ul li::before {
    content: ''; position: absolute; left: 6px; top: 12px;
    width: 8px; height: 8px; border-radius: 2px; background: #0C4580; transform: rotate(45deg);
  }
  .legal-content strong { color: #062B4D; font-weight: 800; }
  .legal-table { width: 100%; border-collapse: collapse; margin: 0 0 14px; font-size: .92rem; }
  .legal-table th, .legal-table td { text-align: left; padding: 12px 16px; border: 1px solid #E0EBF5; }
  .legal-table th { background: #E0EBF5; color: #062B4D; font-weight: 800; }
  .legal-table td { color: #4A5E78; }
  .legal-contact {
    background: linear-gradient(135deg, #E0EBF5, #F5F8FD);
    border: 1px solid #E0EBF5; border-radius: 16px; padding: 26px 28px; margin-top: 8px;
  }
  .legal-contact p { margin: 0 0 6px; }
  .legal-contact a { color: #0C4580; font-weight: 800; text-decoration: none; }
  .legal-back { display: inline-flex; align-items: center; gap: 8px; margin-top: 18px; color: #0C4580; font-weight: 800; text-decoration: none; }
  .legal-back:hover { gap: 12px; }

  @media (max-width: 980px) {
    .legal-layout { grid-template-columns: 1fr; gap: 28px; }
    .legal-toc { position: static; }
    .legal-content { padding: 32px 26px; }
  }
  @media (prefers-reduced-motion: reduce) {
    .legal-toc a, .legal-back { transition: none !important; }
  }
</style>

<section class="legal-hero">
  <div class="container legal-hero-inner">
    <span class="legal-badge"><i class="fas fa-shield-alt"></i> Your Privacy Matters</span>
    <h1>Privacy Policy</h1>
    <p>How JezdanTech collects, uses, protects, and shares your personal data — in line with Tanzania's Personal Data Protection Act and GDPR principles.</p>
    <div class="legal-meta"><i class="far fa-calendar-alt"></i> Last updated: 27 August 2026</div>
  </div>
</section>

<section class="legal-wrap">
  <div class="container legal-layout">

    <aside class="legal-toc">
      <h4>Contents</h4>
      <nav>
        <a href="#s1"><i class="fas fa-angle-right"></i> Introduction</a>
        <a href="#s2"><i class="fas fa-angle-right"></i> Who We Are</a>
        <a href="#s3"><i class="fas fa-angle-right"></i> Data We Collect</a>
        <a href="#s4"><i class="fas fa-angle-right"></i> How We Collect</a>
        <a href="#s5"><i class="fas fa-angle-right"></i> Legal Basis</a>
        <a href="#s6"><i class="fas fa-angle-right"></i> How We Use Data</a>
        <a href="#s7"><i class="fas fa-angle-right"></i> How We Share</a>
        <a href="#s8"><i class="fas fa-angle-right"></i> International Transfers</a>
        <a href="#s9"><i class="fas fa-angle-right"></i> Data Retention</a>
        <a href="#s10"><i class="fas fa-angle-right"></i> Data Security</a>
        <a href="#s11"><i class="fas fa-angle-right"></i> Your Rights</a>
        <a href="#s12"><i class="fas fa-angle-right"></i> Cookies</a>
        <a href="#s13"><i class="fas fa-angle-right"></i> Children's Privacy</a>
        <a href="#s14"><i class="fas fa-angle-right"></i> Changes</a>
        <a href="#s15"><i class="fas fa-angle-right"></i> Contact Us</a>
      </nav>
    </aside>

    <div class="legal-content">
      <section id="s1">
        <h2><span class="num">1.</span> Introduction</h2>
        <p>JezdanTech ("JezdanTech," "we," "us," or "our") respects your privacy and is committed to protecting the personal data of everyone who visits jezdantech.com (the "Site") or engages our software and IT development services (the "Services"). This Privacy Policy explains what personal data we collect, why we collect it, how we use and protect it, and the rights available to you.</p>
        <p>This Policy is designed to comply with Tanzania's Personal Data Protection Act No. 11 of 2022 ("PDPA"), enforced by the Personal Data Protection Commission (PDPC), and, for clients and users located in the European Economic Area or United Kingdom, applies GDPR-consistent principles and rights.</p>
      </section>

      <section id="s2">
        <h2><span class="num">2.</span> Who We Are (Data Controller)</h2>
        <p>JezdanTech is the data controller responsible for your personal data. We are based in the United Republic of Tanzania and provide software development, web and mobile application development, and related IT consulting services to clients in Tanzania and internationally.</p>
        <div class="legal-contact">
          <p><strong>Email:</strong> [insert contact email]</p>
          <p><strong>Address:</strong> [insert business address], United Republic of Tanzania</p>
        </div>
      </section>

      <section id="s3">
        <h2><span class="num">3.</span> What Personal Data We Collect</h2>
        <p>Depending on how you interact with us, we may collect:</p>
        <ul>
          <li><strong>Account and contact data:</strong> name, email address, phone number, company name, job title, and login credentials.</li>
          <li><strong>Client and project data:</strong> billing details, project requirements, communications, files, and content you share with us to deliver a project.</li>
          <li><strong>Payment data:</strong> billing address and transaction details processed through our payment channels (including mobile money providers and card/wire payment processors). We do not store full card numbers or mobile money PINs ourselves; these are handled by our payment processors.</li>
          <li><strong>Technical data:</strong> IP address, browser type, device information, and usage data collected automatically via cookies and similar technologies (see Section 12).</li>
          <li><strong>Communications data:</strong> messages sent through contact forms, email, or the client portal.</li>
        </ul>
      </section>

      <section id="s4">
        <h2><span class="num">4.</span> How We Collect Your Data</h2>
        <p>We collect personal data when you:</p>
        <ul>
          <li>Fill out a contact or quotation form on the Site;</li>
          <li>Create an Account or use a client portal;</li>
          <li>Sign a proposal, SOW, or service agreement with us;</li>
          <li>Make a payment for our Services;</li>
          <li>Correspond with us by email, phone, or messaging platforms;</li>
          <li>Browse the Site (via cookies and analytics tools).</li>
        </ul>
      </section>

      <section id="s5">
        <h2><span class="num">5.</span> Legal Basis and Purpose of Processing</h2>
        <p>We process personal data on the following legal bases, consistent with the PDPA and, where applicable, GDPR:</p>
        <table class="legal-table">
          <thead><tr><th>Purpose</th><th>Legal Basis</th></tr></thead>
          <tbody>
            <tr><td>Delivering Services under a signed Agreement</td><td>Performance of a contract</td></tr>
            <tr><td>Responding to inquiries and quotation requests</td><td>Consent / legitimate interest</td></tr>
            <tr><td>Processing payments and invoicing</td><td>Performance of a contract / legal obligation</td></tr>
            <tr><td>Sending project updates and administrative notices</td><td>Performance of a contract</td></tr>
            <tr><td>Marketing communications (where opted in)</td><td>Consent</td></tr>
            <tr><td>Improving the Site and Services (analytics)</td><td>Legitimate interest / consent (cookies)</td></tr>
            <tr><td>Complying with tax, accounting, and regulatory obligations</td><td>Legal obligation</td></tr>
          </tbody>
        </table>
      </section>

      <section id="s6">
        <h2><span class="num">6.</span> How We Use Your Data</h2>
        <p>We use the personal data we collect to:</p>
        <ul>
          <li>Provide, manage, and deliver our Services and fulfill contractual obligations;</li>
          <li>Process payments and maintain accurate billing and accounting records;</li>
          <li>Communicate with you about your project, account, or inquiries;</li>
          <li>Improve the Site, our Services, and user experience;</li>
          <li>Comply with legal, tax, and regulatory requirements;</li>
          <li>With your consent, send occasional updates about our services (you may opt out at any time).</li>
        </ul>
      </section>

      <section id="s7">
        <h2><span class="num">7.</span> How We Share Your Data</h2>
        <p>We do not sell personal data. We may share personal data with:</p>
        <ul>
          <li><strong>Service providers</strong> who support our operations, such as hosting providers, payment processors (including mobile money operators and international payment gateways), and communication tools, under confidentiality obligations;</li>
          <li><strong>Subcontractors or collaborators</strong> engaged to help deliver a specific project, where necessary and under confidentiality terms;</li>
          <li><strong>Professional advisers</strong> such as accountants or lawyers, where necessary;</li>
          <li><strong>Regulators or authorities</strong>, including the PDPC, where required by law or to protect our legal rights.</li>
        </ul>
      </section>

      <section id="s8">
        <h2><span class="num">8.</span> International Data Transfers</h2>
        <p>As JezdanTech serves clients both within Tanzania and internationally, personal data may be transferred to and processed in countries outside Tanzania (for example, where a hosting provider or payment processor operates internationally). Where such transfers occur, we take steps consistent with the PDPA's cross-border transfer requirements and, where relevant, GDPR-consistent safeguards (such as contractual protections with service providers) to ensure your data remains protected.</p>
      </section>

      <section id="s9">
        <h2><span class="num">9.</span> Data Retention</h2>
        <p>We retain personal data only for as long as necessary to fulfill the purposes described in this Policy, including to satisfy legal, accounting, or reporting requirements. Project-related data is generally retained for the duration of the client relationship and for a reasonable period afterward for record-keeping, after which it is securely deleted or anonymized unless a longer retention period is required by law.</p>
      </section>

      <section id="s10">
        <h2><span class="num">10.</span> Data Security</h2>
        <p>We implement reasonable technical and organizational measures to protect personal data against unauthorized access, loss, misuse, or alteration, including access controls, encryption in transit where applicable, and restricted access to client project data. No method of transmission or storage is completely secure, and we cannot guarantee absolute security.</p>
      </section>

      <section id="s11">
        <h2><span class="num">11.</span> Your Rights</h2>
        <p>Subject to applicable law, you have the right to:</p>
        <ul>
          <li><strong>Access</strong> the personal data we hold about you;</li>
          <li><strong>Correct</strong> inaccurate or incomplete data;</li>
          <li><strong>Request deletion</strong> of your data, subject to legal or contractual retention requirements;</li>
          <li><strong>Object to or restrict</strong> certain processing, including direct marketing;</li>
          <li><strong>Withdraw consent</strong> at any time where processing is based on consent;</li>
          <li><strong>Data portability</strong>, where technically feasible, for EEA/UK-based individuals under GDPR;</li>
          <li><strong>Lodge a complaint</strong> with the Personal Data Protection Commission (PDPC) in Tanzania, or with your local data protection authority if you are located in the EEA or UK.</li>
        </ul>
        <p>To exercise these rights, contact us using the details in Section 2. We may need to verify your identity before responding.</p>
      </section>

      <section id="s12">
        <h2><span class="num">12.</span> Cookies and Tracking Technologies</h2>
        <p>The Site may use cookies and similar technologies to remember preferences, understand how visitors use the Site, and improve performance. You can control cookies through your browser settings; disabling cookies may affect some Site functionality. Where required by law, we will request your consent before placing non-essential cookies.</p>
      </section>

      <section id="s13">
        <h2><span class="num">13.</span> Children's Privacy</h2>
        <p>Our Services are directed at businesses and professionals. We do not knowingly collect personal data from children. If you believe a child has provided us with personal data, please contact us so we can delete it.</p>
      </section>

      <section id="s14">
        <h2><span class="num">14.</span> Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. Material changes will be posted on the Site with a revised "Last updated" date.</p>
      </section>

      <section id="s15">
        <h2><span class="num">15.</span> Contact Us</h2>
        <p>For questions, requests, or complaints about this Privacy Policy or how we handle your personal data, please contact:</p>
        <div class="legal-contact">
          <p><strong>JezdanTech</strong></p>
          <p>Email: [insert contact email]</p>
          <p>Address: [insert business address], United Republic of Tanzania</p>
          <p>Phone: [insert phone number]</p>
          <p>You may also lodge a complaint with the <strong>Personal Data Protection Commission (PDPC)</strong>, Dodoma, Tanzania, under the Ministry of Communications and Information Technology.</p>
        </div>
        <a href="{{ route('contact') }}" class="legal-back">Contact our team <i class="fas fa-arrow-right"></i></a>
      </section>
    </div>

  </div>
</section>

<script>
  // Highlight active TOC link on scroll
  (function () {
    const links = Array.from(document.querySelectorAll('.legal-toc a'));
    const sections = links.map(a => document.querySelector(a.getAttribute('href')));
    if (!('IntersectionObserver' in window) || !sections.length) return;
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          const id = '#' + e.target.id;
          links.forEach(l => l.classList.toggle('active', l.getAttribute('href') === id));
        }
      });
    }, { rootMargin: '-20% 0px -70% 0px', threshold: 0 });
    sections.forEach(s => s && obs.observe(s));
  })();
</script>
@endsection
