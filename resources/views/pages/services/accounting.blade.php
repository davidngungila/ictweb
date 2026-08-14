@extends('layouts.app')

@section('title', 'Accounting & Financial Services | Jezdan Group Tanzania')

@section('meta_tags')
  <meta name="description" content="Professional accounting and financial services in Tanzania - bookkeeping, financial reporting, payroll, tax support, and financial advisory that help businesses make better decisions.">
  <meta name="keywords" content="accounting Tanzania, bookkeeping Tanzania, payroll services Tanzania, financial reporting Tanzania, tax support Tanzania">
  <meta property="og:title" content="Accounting & Financial Services | Jezdan Group">
  <meta property="og:description" content="Accurate numbers. Better decisions. Stronger businesses. Professional accounting services for growing companies.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home" style="min-height: 60vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 820px;">
      <div class="hero-badge">
        <span class="dot"></span>
        Accounting &amp; Financial Services
      </div>
      <h1 class="hero-title">
        Accurate Numbers. <span>Better Decisions.</span>
      </h1>
      <p class="hero-subtitle">
        We help businesses understand their numbers and make better decisions. From day-to-day bookkeeping to financial reporting and advisory, we keep your finances accurate, compliant, and clear.
      </p>
    </div>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="services" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-calculator"></i> What We Offer</div>
      <h2 class="section-title">Financial Services Built for <span>Real Businesses</span></h2>
      <p class="section-sub">Practical, professional accounting services that give you confidence in your numbers.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-book"></i></div>
        <h3>Bookkeeping</h3>
        <p>Accurate day-to-day recording of income and expenses so your records are always complete, organized, and up to date.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-file-invoice"></i></div>
        <h3>Financial Reporting</h3>
        <p>Clear monthly and annual financial statements — profit &amp; loss, balance sheet, and cash flow — that show the true health of your business.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-money-check-dollar"></i></div>
        <h3>Payroll Services</h3>
        <p>Reliable salary processing, statutory deductions, and payslips so your team is always paid correctly and on time.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-file-shield"></i></div>
        <h3>Tax Support</h3>
        <p>Assistance with tax computation, filing, and compliance so you stay on the right side of regulation without the stress.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-list-check"></i></div>
        <h3>Accounts Preparation</h3>
        <p>Professional preparation and review of your accounts, ready for management decisions, lenders, or statutory requirements.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-pie"></i></div>
        <h3>Financial Analysis</h3>
        <p>Insight into profitability, cash flow, and performance so you can identify opportunities and address risks early.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-bullseye"></i></div>
        <h3>Budgeting &amp; Planning</h3>
        <p>Practical budgets and forecasts that turn business goals into a clear financial plan you can actually manage.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Management Accounting</h3>
        <p>Regular, decision-ready management information that helps owners and managers run the business with confidence.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-hand-holding-dollar"></i></div>
        <h3>Business Financial Advisory</h3>
        <p>Independent advice on financing, structuring, and financial strategy to support growth and long-term value creation.</p>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-gears"></i></div>
        <h3>Accounting System Setup</h3>
        <p>Selection and setup of accounting software and internal controls that fit the size and needs of your business.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="services" style="background: var(--white);">
  <div class="container" style="text-align: center; max-width: 760px;">
    <h2 class="section-title">Need Help With Your <span>Numbers?</span></h2>
    <p class="section-sub" style="margin-bottom: 30px;">Talk to our accounting team about how we can keep your records accurate and your decisions confident.</p>
    <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> Contact Us</a>
  </div>
</section>
@endsection
