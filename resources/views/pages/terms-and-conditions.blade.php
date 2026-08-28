@extends('layouts.app')

@section('title', 'Terms and Conditions | JezdanTech')

@section('meta_tags')
  <meta name="description" content="The terms governing your use of JezdanTech's website and software, web, and IT development services in Tanzania and internationally.">
  <meta name="keywords" content="JezdanTech terms and conditions, service agreement, Tanzania ICT terms, software contract">
  <meta property="og:title" content="Terms and Conditions | JezdanTech">
  <meta property="og:description" content="The terms governing your use of JezdanTech's website and software, web, and IT development services.">
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
  .legal-content a.inline-link { color: #0C4580; font-weight: 800; text-decoration: none; border-bottom: 1px solid rgba(12,69,128,0.3); }
  .legal-content a.inline-link:hover { border-color: #0C4580; }
  .legal-contact {
    background: linear-gradient(135deg, #E0EBF5, #F5F8FD);
    border: 1px solid #E0EBF5; border-radius: 16px; padding: 26px 28px; margin-top: 8px;
  }
  .legal-contact p { margin: 0 0 6px; }
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
    <span class="legal-badge"><i class="fas fa-file-contract"></i> Our Agreement With You</span>
    <h1>Terms and Conditions</h1>
    <p>The terms governing your use of the JezdanTech website and our software, web, mobile, and IT development services.</p>
    <div class="legal-meta"><i class="far fa-calendar-alt"></i> Last updated: 27 August 2026</div>
  </div>
</section>

<section class="legal-wrap">
  <div class="container legal-layout">

    <aside class="legal-toc">
      <h4>Contents</h4>
      <nav>
        <a href="#s1"><i class="fas fa-angle-right"></i> Introduction</a>
        <a href="#s2"><i class="fas fa-angle-right"></i> Definitions</a>
        <a href="#s3"><i class="fas fa-angle-right"></i> Our Services</a>
        <a href="#s4"><i class="fas fa-angle-right"></i> Account Registration</a>
        <a href="#s5"><i class="fas fa-angle-right"></i> Client Responsibilities</a>
        <a href="#s6"><i class="fas fa-angle-right"></i> Fees & Payments</a>
        <a href="#s7"><i class="fas fa-angle-right"></i> Intellectual Property</a>
        <a href="#s8"><i class="fas fa-angle-right"></i> Delivery & Acceptance</a>
        <a href="#s9"><i class="fas fa-angle-right"></i> Confidentiality</a>
        <a href="#s10"><i class="fas fa-angle-right"></i> Warranties</a>
        <a href="#s11"><i class="fas fa-angle-right"></i> Liability</a>
        <a href="#s12"><i class="fas fa-angle-right"></i> Indemnification</a>
        <a href="#s13"><i class="fas fa-angle-right"></i> Termination</a>
        <a href="#s14"><i class="fas fa-angle-right"></i> Data Protection</a>
        <a href="#s15"><i class="fas fa-angle-right"></i> Force Majeure</a>
        <a href="#s16"><i class="fas fa-angle-right"></i> Governing Law</a>
        <a href="#s17"><i class="fas fa-angle-right"></i> Changes</a>
        <a href="#s18"><i class="fas fa-angle-right"></i> Contact Us</a>
      </nav>
    </aside>

    <div class="legal-content">
      <section id="s1">
        <h2><span class="num">1.</span> Introduction and Acceptance</h2>
        <p>These Terms and Conditions ("Terms") govern the relationship between JezdanTech ("JezdanTech," "we," "us," or "our"), a software and information technology development agency operating from the United Republic of Tanzania, and any individual or organization ("Client," "you," or "your") that accesses jezdantech.com (the "Site"), creates an account, requests a quotation, or engages JezdanTech for software development, web development, mobile application development, UI/UX design, consulting, or related services (collectively, the "Services").</p>
        <p>By accessing the Site, creating an account, or signing a proposal, statement of work, or service agreement with JezdanTech, you agree to be bound by these Terms. If you do not agree, please do not use the Site or engage our Services.</p>
      </section>

      <section id="s2">
        <h2><span class="num">2.</span> Definitions</h2>
        <ul>
          <li><strong>"Agreement"</strong> means these Terms together with any signed proposal, statement of work ("SOW"), quotation, or service contract entered into between JezdanTech and the Client.</li>
          <li><strong>"Deliverables"</strong> means the software, code, designs, documents, or other work product produced by JezdanTech under an Agreement.</li>
          <li><strong>"Account"</strong> means a registered profile on the Site or any client portal used to manage projects, invoices, or communications.</li>
        </ul>
      </section>

      <section id="s3">
        <h2><span class="num">3.</span> Our Services</h2>
        <p>JezdanTech provides custom software development, web and mobile application development, enterprise systems (including ERP, HR, and management platforms), UI/UX design, and related technical consulting services. The specific scope, timeline, and deliverables for any engagement will be set out in a separate proposal, quotation, or SOW, which forms part of the Agreement once accepted in writing (including by email).</p>
      </section>

      <section id="s4">
        <h2><span class="num">4.</span> Account Registration</h2>
        <p>Where the Site or a client portal requires an Account, you agree to:</p>
        <ul>
          <li>Provide accurate, current, and complete information during registration;</li>
          <li>Maintain the security of your login credentials and notify us promptly of any unauthorized use;</li>
          <li>Accept responsibility for all activity that occurs under your Account.</li>
        </ul>
        <p>We may suspend or terminate an Account that we reasonably believe has been compromised, misused, or used in violation of these Terms.</p>
      </section>

      <section id="s5">
        <h2><span class="num">5.</span> Client Responsibilities</h2>
        <p>To enable us to deliver the Services effectively, the Client agrees to:</p>
        <ul>
          <li>Provide timely feedback, approvals, content, credentials, and access reasonably required for the project;</li>
          <li>Designate a point of contact with authority to make decisions on the Client's behalf;</li>
          <li>Ensure that any materials, data, or third-party content supplied to JezdanTech do not infringe the rights of any third party;</li>
          <li>Comply with applicable law, including data protection obligations relating to any personal data the Client provides to us or asks us to process.</li>
        </ul>
        <p>Delays caused by the Client's failure to meet these responsibilities may extend project timelines and are not attributable to JezdanTech.</p>
      </section>

      <section id="s6">
        <h2><span class="num">6.</span> Fees, Payments, and Billing</h2>
        <ul>
          <li><strong>Quotations.</strong> Fees for Services are set out in the applicable proposal or SOW and are quoted in Tanzanian Shillings (TZS) or another currency agreed in writing for international clients.</li>
          <li><strong>Payment Terms.</strong> Unless otherwise agreed, projects require a deposit before work begins, with the balance payable according to milestones set out in the SOW or upon completion.</li>
          <li><strong>Accepted Payment Methods.</strong> We accept payment via bank transfer, mobile money (including M-Pesa, Tigo Pesa, and Airtel Money) for local clients, and international payment methods (such as card payment or wire transfer) for clients outside Tanzania, as made available on the Site or invoice.</li>
          <li><strong>Late Payments.</strong> Invoices not paid by the due date may accrue late fees as specified in the SOW, and JezdanTech reserves the right to pause work or withhold Deliverables until outstanding amounts are settled.</li>
          <li><strong>Taxes.</strong> Fees are exclusive of applicable taxes (including VAT) unless stated otherwise; the Client is responsible for any taxes arising from the engagement other than JezdanTech's own income tax.</li>
          <li><strong>Refunds.</strong> Refunds, where applicable, are handled on a case-by-case basis as set out in the relevant SOW; deposits are generally non-refundable once work has commenced.</li>
        </ul>
      </section>

      <section id="s7">
        <h2><span class="num">7.</span> Intellectual Property Rights</h2>
        <ul>
          <li><strong>Pre-Existing IP.</strong> JezdanTech retains ownership of any pre-existing tools, frameworks, libraries, templates, or proprietary methodologies used in delivering the Services ("Background IP").</li>
          <li><strong>Client Deliverables.</strong> Unless otherwise agreed in writing, ownership of the final, paid-for Deliverables created specifically for the Client transfers to the Client upon full payment of all applicable fees. Until full payment is received, all rights remain with JezdanTech.</li>
          <li><strong>License to Background IP.</strong> To the extent any Background IP is incorporated into the Deliverables, JezdanTech grants the Client a non-exclusive, perpetual license to use it solely as part of the Deliverables.</li>
          <li><strong>Portfolio Use.</strong> JezdanTech may reference completed projects (including screenshots and general descriptions) in its portfolio and marketing materials, unless the Client requests confidentiality in writing.</li>
        </ul>
      </section>

      <section id="s8">
        <h2><span class="num">8.</span> Project Delivery, Revisions, and Acceptance</h2>
        <ul>
          <li>Deliverables will be provided according to the milestones and timelines set out in the SOW.</li>
          <li>The Client will have a reasonable review period (as specified in the SOW, or 7 business days by default) to request revisions consistent with the original agreed scope.</li>
          <li>Changes outside the original scope will be treated as a change request and may involve additional fees and timeline adjustments, to be agreed in writing before work proceeds.</li>
          <li>If the Client does not respond within the review period, Deliverables will be deemed accepted.</li>
        </ul>
      </section>

      <section id="s9">
        <h2><span class="num">9.</span> Confidentiality</h2>
        <p>Both parties agree to keep confidential any non-public business, technical, or financial information disclosed during the engagement, and to use it solely for the purpose of the Agreement. This obligation survives termination of the Agreement and does not apply to information that is publicly available, independently developed, or required to be disclosed by law.</p>
      </section>

      <section id="s10">
        <h2><span class="num">10.</span> Warranties and Disclaimers</h2>
        <p>JezdanTech will perform the Services with reasonable skill and care, consistent with generally accepted industry standards. Except as expressly stated in an Agreement, the Services and Deliverables are provided "as is," and JezdanTech disclaims all other warranties, whether express or implied, including implied warranties of merchantability or fitness for a particular purpose, to the maximum extent permitted by applicable law.</p>
      </section>

      <section id="s11">
        <h2><span class="num">11.</span> Limitation of Liability</h2>
        <p>To the maximum extent permitted by law, JezdanTech's total liability arising out of or relating to an Agreement shall not exceed the total fees paid by the Client for the Services giving rise to the claim in the six (6) months preceding the event. JezdanTech shall not be liable for indirect, incidental, special, or consequential damages, including loss of profits, data, or business opportunity, even if advised of the possibility of such damages.</p>
      </section>

      <section id="s12">
        <h2><span class="num">12.</span> Indemnification</h2>
        <p>The Client agrees to indemnify and hold JezdanTech harmless from claims, damages, or expenses arising from the Client's breach of these Terms, misuse of the Deliverables, or infringement of third-party rights through materials the Client supplied.</p>
      </section>

      <section id="s13">
        <h2><span class="num">13.</span> Termination</h2>
        <p>Either party may terminate an Agreement for convenience with written notice as specified in the SOW (or 14 days by default), or immediately for material breach that remains uncured after 7 days' written notice. Upon termination, the Client shall pay for all Services rendered and expenses incurred up to the effective date of termination, and JezdanTech will deliver any completed, paid-for work product.</p>
      </section>

      <section id="s14">
        <h2><span class="num">14.</span> Data Protection</h2>
        <p>Any personal data collected through the Site or in the course of an engagement is handled in accordance with our <a class="inline-link" href="{{ route('privacy') }}">Privacy Policy</a> and applicable data protection law, including Tanzania's Personal Data Protection Act No. 11 of 2022. Where JezdanTech processes personal data on the Client's behalf as part of a project, the parties may enter into a separate data processing agreement setting out each party's obligations.</p>
      </section>

      <section id="s15">
        <h2><span class="num">15.</span> Force Majeure</h2>
        <p>Neither party shall be liable for delay or failure to perform obligations due to events beyond its reasonable control, including natural disasters, power or internet outages, government action, or other similar events, provided the affected party gives prompt notice and makes reasonable efforts to mitigate the impact.</p>
      </section>

      <section id="s16">
        <h2><span class="num">16.</span> Governing Law and Dispute Resolution</h2>
        <p>These Terms and any Agreement are governed by the laws of the United Republic of Tanzania, without regard to conflict-of-law principles. For international clients, the parties may agree in the SOW to alternative dispute resolution mechanisms (such as arbitration or mediation) to address cross-border considerations. The parties will first attempt to resolve any dispute through good-faith negotiation before pursuing formal proceedings before the competent courts of Tanzania.</p>
      </section>

      <section id="s17">
        <h2><span class="num">17.</span> Changes to These Terms</h2>
        <p>We may update these Terms from time to time to reflect changes in our Services, legal requirements, or business practices. Material changes will be posted on the Site with an updated "Last updated" date, and continued use of the Site or Services after such changes constitutes acceptance of the revised Terms. Terms governing an active, signed SOW will not change retroactively without the Client's written consent.</p>
      </section>

      <section id="s18">
        <h2><span class="num">18.</span> Contact Us</h2>
        <p>If you have questions about these Terms, please contact us at:</p>
        <div class="legal-contact">
          <p><strong>JezdanTech</strong></p>
          <p>Email: [insert contact email]</p>
          <p>Address: [insert business address], United Republic of Tanzania</p>
          <p>Phone: [insert phone number]</p>
        </div>
        <a href="{{ route('contact') }}" class="legal-back">Get in touch <i class="fas fa-arrow-right"></i></a>
      </section>
    </div>

  </div>
</section>

<script>
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
