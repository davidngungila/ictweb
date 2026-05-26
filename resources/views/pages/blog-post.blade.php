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
@php
  $allPosts = config('site_content.blog_posts', []);
  $relatedPosts = collect($allPosts)
    ->filter(fn($p) => $p['slug'] !== $post['slug'] && $p['category'] === $post['category'])
    ->take(3);
  
  if ($relatedPosts->isEmpty()) {
    $relatedPosts = collect($allPosts)
      ->filter(fn($p) => $p['slug'] !== $post['slug'])
      ->take(3);
  }
@endphp

<style>
  .post-hero {
    min-height: 50vh;
    padding-top: 120px;
    padding-bottom: 60px;
    background: var(--navy);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    text-align: center;
  }
  .post-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .post-main-grid {
    display: grid;
    grid-template-columns: 1fr 750px 1fr;
    gap: 40px;
    margin-top: -80px;
    position: relative;
    z-index: 10;
  }
  @media (max-width: 1150px) {
    .post-main-grid { grid-template-columns: 1fr; max-width: 800px; }
    .post-sidebar-left, .post-sidebar-right { display: none; }
  }
  .post-content-wrap {
    background: white;
    border-radius: 30px;
    padding: 60px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.08);
  }
  @media (max-width: 768px) {
    .post-content-wrap { padding: 30px; border-radius: 20px; }
  }
  .post-meta-top {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
    color: rgba(255,255,255,0.7);
    font-size: 0.95rem;
  }
  .post-category-tag {
    background: var(--accent);
    color: white;
    padding: 6px 18px;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 1px;
  }
  .post-prose p {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #334155;
    margin-bottom: 1.8rem;
  }
  .post-prose h2 {
    font-family: var(--font-display);
    font-size: 2rem;
    font-weight: 800;
    color: var(--navy);
    margin: 2.5rem 0 1.2rem;
  }
  .sidebar-sticky {
    position: sticky;
    top: 100px;
  }
  .share-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8fafc;
    color: #64748b;
    text-decoration: none;
    margin-bottom: 12px;
    transition: all 0.3s;
    border: 1px solid #e2e8f0;
  }
  .share-btn:hover {
    background: var(--accent);
    color: white;
    border-color: var(--accent);
    transform: translateY(-3px);
  }
  .related-card-mini {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 20px;
    border: 1px solid #eef2f7;
    transition: all 0.3s;
  }
  .related-card-mini:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
  }
  .author-box {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 25px;
    background: #f8fafc;
    border-radius: 20px;
    margin-top: 50px;
  }
  .author-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--navy);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gold);
    font-size: 1.5rem;
  }
</style>

<section class="post-hero">
  <div class="hero-bg-img" style="opacity: 0.15; background-image: url('{{ $post['image'] }}'); filter: blur(10px); transform: scale(1.1);"></div>
  <div class="hero-grid-overlay"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div class="post-meta-top">
      <span class="post-category-tag">{{ $post['category'] }}</span>
      <span style="width: 4px; height: 4px; background: rgba(255,255,255,0.3); border-radius: 50%;"></span>
      <span><i class="far fa-calendar-alt" style="margin-right: 8px;"></i> {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}</span>
    </div>
    <h1 class="hero-title" style="margin-bottom: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">{{ $post['title'] }}</h1>
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px; color: white;">
      <div style="display: flex; align-items: center; gap: 8px;">
        <i class="far fa-clock"></i>
        <span>{{ $post['reading_minutes'] }} min read</span>
      </div>
      <div style="display: flex; align-items: center; gap: 8px;">
        <i class="far fa-eye"></i>
        <span>2.4k views</span>
      </div>
    </div>
  </div>
</section>

<section style="background: var(--off-white); padding-bottom: 100px;">
  <div class="post-container">
    <div class="post-main-grid">
      <!-- Left Sidebar: Sharing -->
      <aside class="post-sidebar-left">
        <div class="sidebar-sticky" style="display: flex; flex-direction: column; align-items: center;">
          <span style="font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: #94a3b8; margin-bottom: 15px; letter-spacing: 1px;">Share</span>
          <a href="#" class="share-btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="share-btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="share-btn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="share-btn"><i class="fas fa-link"></i></a>
        </div>
      </aside>

      <!-- Center: Main Content -->
      <main class="post-content">
        <div class="post-content-wrap">
          <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" style="width: 100%; border-radius: 20px; margin-bottom: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
          
          <div style="margin-bottom: 40px; padding: 30px; background: #f0f7ff; border-radius: 20px; border-left: 5px solid var(--accent);">
            <h4 style="color: var(--navy); margin-bottom: 10px; font-weight: 800;">At a glance</h4>
            <p style="margin: 0; color: #475569; font-size: 1.05rem; line-height: 1.7; font-style: italic;">"{{ $post['excerpt'] }}"</p>
          </div>

          <div class="post-prose">
            @foreach($post['paragraphs'] as $index => $paragraph)
              @if($index == 2)
                <h2>The <span>Strategy</span></h2>
              @endif
              <p>{{ $paragraph }}</p>
            @endforeach
          </div>

          <div class="author-box">
            <div class="author-img">
              <i class="fas fa-user-tie"></i>
            </div>
            <div>
              <div style="font-weight: 800; color: var(--navy); font-size: 1.1rem;">Engineering Lab Team</div>
              <div style="font-size: 0.9rem; color: #718096;">Software Architecture & Cloud Specialists at Jezdan</div>
            </div>
          </div>

          <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
            <a href="{{ route('blog') }}" style="color: var(--navy); text-decoration: none; font-weight: 700; display: flex; align-items: center; gap: 10px; transition: color 0.3s;" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='var(--navy)'">
              <i class="fas fa-arrow-left"></i> Back to Insights
            </a>
            <div style="display: flex; gap: 10px;">
              <a href="{{ route('contact') }}" class="btn-primary" style="padding: 12px 25px; border-radius: 50px;">Consult with us</a>
            </div>
          </div>
        </div>
      </main>

      <!-- Right Sidebar: Related -->
      <aside class="post-sidebar-right">
        <div class="sidebar-sticky">
          <h4 style="font-family: var(--font-display); font-size: 1.1rem; font-weight: 800; color: var(--navy); margin-bottom: 25px;">Related <span>Articles</span></h4>
          @foreach($relatedPosts as $rp)
            <a href="{{ route('blog.show', $rp['slug']) }}" style="text-decoration: none;">
              <article class="related-card-mini">
                <img src="{{ $rp['image'] }}" alt="{{ $rp['title'] }}" style="width: 100%; height: 120px; object-fit: cover;">
                <div style="padding: 15px;">
                  <span style="font-size: 0.65rem; font-weight: 800; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 5px;">{{ $rp['category'] }}</span>
                  <h5 style="font-size: 0.95rem; font-weight: 700; color: var(--navy); line-height: 1.4; margin: 0;">{{ \Illuminate\Support\Str::limit($rp['title'], 50) }}</h5>
                </div>
              </article>
            </a>
          @endforeach

          <div style="margin-top: 40px; background: var(--navy); padding: 30px; border-radius: 20px; color: white;">
            <h4 style="font-size: 1.2rem; margin-bottom: 15px; font-weight: 800;">Need a Tech Partner?</h4>
            <p style="font-size: 0.85rem; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">We help Tanzanian organizations build scalable digital infrastructure.</p>
            <a href="{{ route('request.quote') }}" class="btn-primary" style="width: 100%; text-align: center; background: white; color: var(--navy); padding: 12px; font-size: 0.85rem; border: none;">Get a Quote</a>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- NEWSLETTER BANNER -->
<section style="background: white; padding: 80px 0;">
  <div class="container">
    <div style="background: linear-gradient(135deg, var(--accent), var(--accent-bright)); padding: 60px; border-radius: 40px; text-align: center; color: white; position: relative; overflow: hidden;">
      <div style="position: absolute; top: -20px; right: -20px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
      <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 15px;">Enjoyed this <span>insight</span>?</h2>
      <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">Join our newsletter to receive the latest tech strategy playbooks directly in your inbox.</p>
      <form style="display: flex; gap: 10px; max-width: 500px; margin: 0 auto; flex-wrap: wrap;">
        <input type="email" placeholder="Your business email" style="flex: 1; min-width: 250px; padding: 15px 25px; border-radius: 50px; border: none; outline: none;">
        <button type="submit" class="btn-primary" style="background: var(--navy); color: white; border: none; padding: 15px 30px;">Subscribe</button>
      </form>
    </div>
  </div>
</section>
@endsection
