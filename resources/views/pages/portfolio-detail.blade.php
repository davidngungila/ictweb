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
<style>
  .case-wrap { max-width: 960px; margin: 0 auto; }
  .case-hero-img {
    width: 100%;
    border-radius: 20px;
    max-height: 460px;
    object-fit: cover;
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.15);
  }
  .chip-row { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 18px; }
  .chip {
    background: rgba(26,111,196,0.12);
    color: var(--accent);
    padding: 6px 14px;
    border-radius: 999px;
    font-size: 0.82rem;
    font-weight: 700;
  }
</style>

<section class="hero" style="min-height: 38vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left case-wrap">
      <div class="hero-badge"><span class="dot"></span> {{ $project['tag'] }}</div>
      <h1 class="hero-title">{{ $project['title'] }}</h1>
      <p class="hero-subtitle">{{ $project['excerpt'] }}</p>
      <div class="chip-row">
        @foreach($project['highlights'] ?? [] as $h)
          <span class="chip">{{ $h }}</span>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="services" style="background: var(--off-white); padding: 50px 0 90px;">
  <div class="container">
    <div class="case-wrap">
      <img class="case-hero-img" src="{{ $project['image'] }}" alt="{{ $project['title'] }}">

      <div style="margin-top: 36px; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
        <div style="background:#fff;border-radius:16px;padding:20px;border:1px solid #e9eef5;">
          <div style="font-size:0.8rem;color:#94a3b8;text-transform:uppercase;letter-spacing:0.08em;">Stack</div>
          <ul style="margin:12px 0 0;padding-left:18px;color:#334155;line-height:1.7;">
            @foreach($project['stack'] ?? [] as $tech)
              <li>{{ $tech }}</li>
            @endforeach
          </ul>
        </div>
        <div style="background:#fff;border-radius:16px;padding:20px;border:1px solid #e9eef5;">
          <div style="font-size:0.8rem;color:#94a3b8;text-transform:uppercase;letter-spacing:0.08em;">Outcomes</div>
          <p style="margin:12px 0 0;color:#475569;line-height:1.75;">
            Measurable reliability, clearer reporting for stakeholders, and faster launches backed by local support.
          </p>
        </div>
      </div>

      <div style="margin-top: 34px;">
        @foreach($project['paragraphs'] ?? [] as $paragraph)
          <p style="font-size:1.05rem;line-height:1.85;color:#334155;margin-bottom:1.25rem;">{{ $paragraph }}</p>
        @endforeach
      </div>

      <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:28px;">
        <a href="{{ route('portfolio') }}" class="btn-outline" style="text-decoration:none;padding:12px 22px;border-radius:999px;">
          <i class="fas fa-arrow-left" style="margin-right:8px;"></i> All projects
        </a>
        <a href="{{ route('package.selection.step1') }}" class="btn-primary" style="text-decoration:none;padding:12px 22px;border-radius:999px;">
          <i class="fas fa-layer-group" style="margin-right:8px;"></i> Start similar build
        </a>
        <a href="https://wa.me/255685847002?text=Hello%20Jezdan%20Technology!%20I%20liked%20the%20{{ urlencode($project['title']) }}%20case%20study." class="btn-whatsapp" target="_blank" rel="noopener" style="padding:12px 22px;border-radius:999px;text-decoration:none;">
          <i class="fab fa-whatsapp"></i> WhatsApp us
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
