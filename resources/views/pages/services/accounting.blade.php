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
<section class="hero" id="home" style="min-height: 46vh;">
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
@php
  $serviceOffers = [
    ['icon' => 'fa-book', 'title' => 'Bookkeeping', 'desc' => 'Accurate day-to-day recording of income and expenses so your records are always complete, organized, and up to date.'],
    ['icon' => 'fa-file-invoice', 'title' => 'Financial Reporting', 'desc' => 'Clear monthly and annual financial statements — profit & loss, balance sheet, and cash flow — that show the true health of your business.'],
    ['icon' => 'fa-money-check-dollar', 'title' => 'Payroll Services', 'desc' => 'Reliable salary processing, statutory deductions, and payslips so your team is always paid correctly and on time.'],
    ['icon' => 'fa-file-shield', 'title' => 'Tax Support', 'desc' => 'Assistance with tax computation, filing, and compliance so you stay on the right side of regulation without the stress.'],
    ['icon' => 'fa-list-check', 'title' => 'Accounts Preparation', 'desc' => 'Professional preparation and review of your accounts, ready for management decisions, lenders, or statutory requirements.'],
    ['icon' => 'fa-chart-pie', 'title' => 'Financial Analysis', 'desc' => 'Insight into profitability, cash flow, and performance so you can identify opportunities and address risks early.'],
    ['icon' => 'fa-bullseye', 'title' => 'Budgeting & Planning', 'desc' => 'Practical budgets and forecasts that turn business goals into a clear financial plan you can actually manage.'],
    ['icon' => 'fa-chart-line', 'title' => 'Management Accounting', 'desc' => 'Regular, decision-ready management information that helps owners and managers run the business with confidence.'],
    ['icon' => 'fa-hand-holding-dollar', 'title' => 'Business Financial Advisory', 'desc' => 'Independent advice on financing, structuring, and financial strategy to support growth and long-term value creation.'],
    ['icon' => 'fa-gears', 'title' => 'Accounting System Setup', 'desc' => 'Selection and setup of accounting software and internal controls that fit the size and needs of your business.'],
  ];
@endphp
@include('partials.section-service-offers', [
  'label'     => 'What We Offer',
  'labelIcon' => 'fa-calculator',
  'title'     => 'Financial Services Built for <span>Real Businesses</span>',
  'sub'       => 'Practical, professional accounting services that give you confidence in your numbers.',
  'offers'    => $serviceOffers,
])

<!-- CTA -->
<section class="services" style="background: var(--white);">
  <div class="container" style="text-align: center; max-width: 760px;">
    <h2 class="section-title">Need Help With Your <span>Numbers?</span></h2>
    <p class="section-sub" style="margin-bottom: 30px;">Talk to our accounting team about how we can keep your records accurate and your decisions confident.</p>
    <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> Contact Us</a>
  </div>
</section>
@endsection
