@extends('layouts.app')

@section('title', $post['title'].' | Jezdan Technology Blog')

@section('meta_tags')
  <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post['excerpt']), 155) }}">
  <meta property="og:title" content="{{ $post['title'] }}">
  <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post['excerpt']), 200) }}">
  <meta property="og:type" content="article">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ $post['image'] }}">
@endsection

@section('content')
<style>
  .article-shell { max-width: 820px; margin: 0 auto; }
  .article-hero-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 18px;
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.15);
  }
  .article-prose p {
    font-size: 1.05rem;
    line-height: 1.85;
    color: #334155;
    margin-bottom: 1.25rem;
  }
</style>

<section class="hero" style="min-height: 32vh;">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left article-shell" style="text-align: center;">
      <div class="hero-badge" style="justify-content: center;">
        <span class="dot"></span> {{ $post['category'] }}
      </div>
      <h1 class="hero-title" style="font-size: clamp(1.9rem, 4vw, 2.6rem);">{{ $post['title'] }}</h1>
      <p class="hero-subtitle">
        {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}
        · {{ $post['reading_minutes'] }} min read
      </p>
    </div>
  </div>
</section>

<section class="services" style="padding: 40px 0 90px; background: var(--off-white);">
  <div class="container">
    <div class="article-shell">
      <img class="article-hero-img" src="{{ $post['image'] }}" alt="{{ $post['title'] }}">

      <div style="margin: 36px 0 28px; padding: 18px 20px; border-left: 4px solid var(--accent); background: #fff; border-radius: 12px; box-shadow: 0 8px 30px rgba(15,23,42,0.06);">
        <strong style="color: var(--navy);">Executive summary</strong>
        <p style="margin: 10px 0 0; color: #475569; line-height: 1.7;">{{ $post['excerpt'] }}</p>
      </div>

      <div class="article-prose">
        @foreach($post['paragraphs'] as $paragraph)
          <p>{{ $paragraph }}</p>
        @endforeach
      </div>

      <div style="display:flex; flex-wrap:wrap; gap:12px; margin-top: 36px;">
        <a href="{{ route('blog') }}" class="btn-outline" style="text-decoration:none; padding:12px 22px; border-radius:999px;">
          <i class="fas fa-arrow-left" style="margin-right:8px;"></i> Back to blog
        </a>
        <a href="{{ route('contact') }}" class="btn-primary" style="text-decoration:none; padding:12px 22px; border-radius:999px;">
          <i class="fas fa-comments" style="margin-right:8px;"></i> Talk to our team
        </a>
        <a href="{{ route('package.selection.step1') }}" style="text-decoration:none; padding:12px 22px; border-radius:999px; background:#0f172a; color:#fff; font-weight:700;">
          Book a service package
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
