@extends('layouts.app')

@section('title', $project['title'].' | Portfolio | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($project['excerpt']), 155) }}">
  <meta property="og:title" content="{{ $project['title'] }}">
  <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($project['excerpt']), 200) }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ $project['image'] }}">
@endsection

@section('content')
@php
  $allProjects = config('site_content.portfolio_projects', []);
  $currentIndex = collect($allProjects)->search(fn($p) => $p['slug'] === $project['slug']);
  $nextProject = $allProjects[($currentIndex + 1) % max(count($allProjects), 1)] ?? null;
  $prevProject = $allProjects[($currentIndex - 1 + count($allProjects)) % max(count($allProjects), 1)] ?? null;
  $related = collect($allProjects)
      ->filter(fn($p) => $p['slug'] !== $project['slug']
          && (($p['categoryLabel'] ?? null) === ($project['categoryLabel'] ?? null) || ($p['tag'] ?? null) === ($project['tag'] ?? null)))
      ->values();
  if ($related->count() < 3) {
      $related = collect($allProjects)->filter(fn($p) => $p['slug'] !== $project['slug'])->values();
  }
  $related = $related->take(3);
@endphp

<style>
  .project-detail-hero {
    min-height: 50vh;
    padding-top: 120px;
    padding-bottom: 60px;
    background: var(--navy);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
  }
  .project-meta-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 30px;
    margin-top: 40px;
    padding: 25px 0;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }
  .meta-item-label {
    color: var(--accent-bright);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
  }
  .meta-item-value {
    color: white;
    font-weight: 600;
    font-size: 1rem;
  }
  .project-content-area {
    padding: 80px 0;
    background: white;
  }
  .content-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 60px;
  }
  @media (max-width: 991px) {
    .content-grid { grid-template-columns: 1fr; }
  }
  .project-card-box {
    background: var(--off-white);
    border-radius: 20px;
    padding: 35px;
    margin-bottom: 30px;
    border: 1px solid var(--light-gray);
  }
  .tech-badge {
    display: inline-block;
    background: white;
    color: var(--navy);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    margin: 4px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  }
  .case-image-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    margin-bottom: 50px;
    box-shadow: var(--shadow-hover);
  }
  .case-image-wrapper img {
    width: 100%;
    display: block;
  }
  .section-subtitle-small {
    color: var(--accent);
    font-weight: 700;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
    display: block;
  }
  .project-nav {
    display: flex;
    justify-content: space-between;
    padding: 40px 0;
    border-top: 1px solid var(--light-gray);
    margin-top: 60px;
  }
  .nav-project-link {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    max-width: 45%;
  }
  .nav-label {
    font-size: 0.8rem;
    color: var(--text-light);
    margin-bottom: 5px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .nav-title {
    font-family: var(--font-display);
    font-size: 1.1rem;
    color: var(--navy);
    font-weight: 700;
    transition: color 0.3s;
  }
  .nav-project-link:hover .nav-title {
    color: var(--accent);
  }
  .related-section {
    margin-top: 70px;
    padding-top: 60px;
    border-top: 1px solid var(--light-gray);
  }
  .related-head { margin-bottom: 36px; }
  .related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 26px;
  }
  .related-card {
    display: block;
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    text-decoration: none;
    border: 1px solid var(--light-gray);
    box-shadow: 0 8px 24px rgba(11,31,58,0.06);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
  }
  .related-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 44px rgba(11,31,58,0.14);
  }
  .related-media {
    position: relative;
    height: 180px;
    overflow: hidden;
  }
  .related-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
  }
  .related-card:hover .related-media img { transform: scale(1.07); }
  .related-chip {
    position: absolute;
    top: 12px; left: 12px;
    background: rgba(11, 31, 58, 0.6);
    color: #fff;
    font-size: 0.66rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 5px 10px;
    border-radius: 999px;
  }
  .related-body { padding: 22px; }
  .related-body h3 {
    font-family: var(--font-display);
    font-size: 1.1rem;
    font-weight: 800;
    color: var(--navy);
    line-height: 1.35;
    margin: 0 0 14px;
  }
  .related-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--accent);
    transition: gap 0.3s ease;
  }
  .related-card:hover .related-link { gap: 12px; }
  @media (max-width: 768px) {
    .related-grid { grid-template-columns: 1fr; }
  }
  @media (prefers-reduced-motion: reduce) {
    .related-card, .related-media img, .related-link { transition: none !important; transform: none !important; }
  }
</style>

<!-- PROJECT HERO -->
<section class="project-detail-hero">
  <div class="hero-bg-img" style="opacity: 0.15; background-image: url('{{ $project['image'] }}'); filter: blur(5px);"></div>
  <div class="hero-grid-overlay"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <a href="{{ route('portfolio') }}" style="color: rgba(255,255,255,0.6); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 30px; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">
      <i class="fas fa-arrow-left"></i> Back to Portfolio
    </a>
    <div class="hero-badge"><span class="dot"></span> Case Study</div>
    <h1 class="hero-title" style="margin-bottom: 20px; max-width: 900px;">{{ $project['title'] }}</h1>
    <p class="hero-subtitle" style="max-width: 700px; opacity: 0.9;">{{ $project['excerpt'] }}</p>
    
    <div class="project-meta-grid">
      <div class="meta-item">
        <div class="meta-item-label">Industry</div>
        <div class="meta-item-value">{{ $project['tag'] }}</div>
      </div>
      <div class="meta-item">
        <div class="meta-item-label">Client Location</div>
        <div class="meta-item-value">{{ $project['clientLocation'] ?? 'Tanzania / Regional' }}</div>
      </div>
      <div class="meta-item">
        <div class="meta-item-label">Duration</div>
        <div class="meta-item-value">{{ $project['duration'] ?? 'Ongoing' }}</div>
      </div>
      <div class="meta-item">
        <div class="meta-item-label">Status</div>
        <div class="meta-item-value">Successfully Delivered</div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="project-content-area">
  <div class="container">
    <div class="content-grid">
      <div class="content-left">
        <div class="case-image-wrapper">
          <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
        </div>

        <div class="project-narrative">
          <span class="section-subtitle-small">The Challenge</span>
          <h2 class="section-title" style="font-size: 2rem; margin-bottom: 25px;">Strategic <span>Context</span></h2>
          @foreach($project['paragraphs'] ?? [] as $index => $paragraph)
            @if($index == 0)
              <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-dark); margin-bottom: 30px; font-weight: 500;">{{ $paragraph }}</p>
            @endif
          @endforeach

          <span class="section-subtitle-small">The Solution</span>
          <h2 class="section-title" style="font-size: 2rem; margin-bottom: 25px;">Our <span>Approach</span></h2>
          @foreach($project['paragraphs'] ?? [] as $index => $paragraph)
            @if($index > 0)
              <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-mid); margin-bottom: 25px;">{{ $paragraph }}</p>
            @endif
          @endforeach

          <div style="margin-top: 50px; padding: 40px; background: var(--navy); border-radius: 24px; color: white;">
            <span class="section-subtitle-small" style="color: var(--gold);">Key Results</span>
            <h3 style="font-family: var(--font-display); font-size: 1.8rem; margin-bottom: 20px;">Measurable <span>Impact</span></h3>
            <p style="color: rgba(255,255,255,0.8); line-height: 1.7; font-size: 1.05rem;">
              {{ $project['impactSummary'] ?? 'The implementation delivered measurable improvements in operational efficiency, reliability, and growth for the client.' }}
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
              @foreach($project['impact'] ?? [] as $metric)
              <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 15px;">
                <div style="color: var(--gold); font-size: 1.5rem; font-weight: 800; margin-bottom: 5px;">{{ $metric['value'] }}</div>
                <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; opacity: 0.7;">{{ $metric['label'] }}</div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="content-right">
        <div class="project-card-box">
          <h4 style="font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 20px; color: var(--navy);">Technology Stack</h4>
          <div style="display: flex; flex-wrap: wrap; margin: -4px;">
            @foreach($project['stack'] ?? [] as $tech)
              <span class="tech-badge">{{ $tech }}</span>
            @endforeach
          </div>
        </div>

        <div class="project-card-box">
          <h4 style="font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 20px; color: var(--navy);">Project Highlights</h4>
          <ul style="list-style: none; padding: 0;">
            @foreach($project['highlights'] ?? [] as $highlight)
              <li style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; font-size: 0.95rem; color: var(--text-mid);">
                <i class="fas fa-check-circle" style="color: var(--success); margin-top: 3px;"></i>
                {{ $highlight }}
              </li>
            @endforeach
          </ul>
        </div>

        <div class="project-card-box" style="background: linear-gradient(135deg, var(--accent), var(--accent-bright)); border: none; color: white;">
          <h4 style="font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 15px;">Need a similar solution?</h4>
          <p style="font-size: 0.9rem; opacity: 0.9; margin-bottom: 25px; line-height: 1.6;">Let's discuss how we can help your organization achieve similar digital excellence.</p>
          <a href="{{ route('contact') }}" class="btn-primary" style="background: white; color: var(--accent); border: none; width: 100%; justify-content: center; box-shadow: none;">
            Get Started <i class="fas fa-arrow-right"></i>
          </a>
          <a href="https://wa.me/255685847002" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 8px; color: white; text-decoration: none; margin-top: 20px; font-weight: 600; font-size: 0.9rem;">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>
      </div>
    </div>

    <!-- PROJECT NAVIGATION -->
    <div class="project-nav">
      @if($prevProject)
        <a href="{{ route('portfolio.show', $prevProject['slug']) }}" class="nav-project-link">
          <span class="nav-label"><i class="fas fa-chevron-left"></i> Previous Project</span>
          <span class="nav-title">{{ $prevProject['title'] }}</span>
        </a>
      @endif
      
      @if($nextProject)
        <a href="{{ route('portfolio.show', $nextProject['slug']) }}" class="nav-project-link" style="text-align: right; align-items: flex-end;">
          <span class="nav-label">Next Project <i class="fas fa-chevron-right"></i></span>
          <span class="nav-title">{{ $nextProject['title'] }}</span>
        </a>
      @endif
    </div>

    @if($related->isNotEmpty())
    <div class="related-section">
      <div class="related-head">
        <span class="section-subtitle-small">Continue Exploring</span>
        <h2 class="section-title" style="font-size: 2rem;">Related <span>Projects</span></h2>
      </div>
      <div class="related-grid">
        @foreach($related as $rel)
        <a href="{{ route('portfolio.show', $rel['slug']) }}" class="related-card">
          <div class="related-media">
            <img src="{{ $rel['image'] }}" alt="{{ $rel['title'] }}" loading="lazy" />
            <span class="related-chip">{{ $rel['tag'] }}</span>
          </div>
          <div class="related-body">
            <h3>{{ $rel['title'] }}</h3>
            <span class="related-link">View Case Study <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
        @endforeach
      </div>
    </div>
    @endif
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner" style="padding: 100px 5%; background: var(--off-white);">
  <div class="cta-inner" style="max-width: 900px; margin: 0 auto; text-align: center;">
    <h2 style="font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: var(--navy); margin-bottom: 24px;">Start Your Own <span>Success Story</span></h2>
    <p style="color: var(--text-mid); font-size: 1.1rem; line-height: 1.8; margin-bottom: 40px;">
      Whether you need cloud migration, custom software, or a complete digital overhaul, our team in Tanzania is ready to deliver world-class results.
    </p>
    <div class="cta-actions" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
      <a href="{{ route('contact') }}" class="btn-primary">
        Contact Our Experts
      </a>
      <a href="{{ route('portfolio') }}" class="btn-outline" style="color: var(--navy); border-color: var(--navy);">
        View All Projects
      </a>
    </div>
  </div>
</div>
@endsection
