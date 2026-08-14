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
  /* ═══════════ BLOG POST — editorial article, clean, advanced ═══════════ */
  .post-hero {
    position: relative; overflow: hidden;
    padding: 90px 0 70px;
    background: #fff; border-bottom: 1px solid var(--line);
  }
  .post-hero-inner { max-width: 880px; margin: 0 auto; padding: 0 24px; text-align: center; }
  .post-eyebrow {
    display: inline-flex; align-items: center; gap: 10px;
    color: var(--accent); font-size: 0.76rem; font-weight: 800;
    letter-spacing: 2.4px; text-transform: uppercase; margin-bottom: 18px;
  }
  .post-eyebrow::before,
  .post-eyebrow::after {
    content: ''; width: 24px; height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent));
  }
  .post-eyebrow::after { background: linear-gradient(90deg, var(--accent), transparent); }
  .post-title {
    font-family: var(--font-display);
    font-size: clamp(1.9rem, 4.4vw, 3rem);
    font-weight: 900; letter-spacing: -1px; line-height: 1.12;
    color: var(--navy); margin-bottom: 22px;
  }
  .post-meta {
    display: flex; justify-content: center; align-items: center; gap: 14px; flex-wrap: wrap;
    color: #718096; font-size: 0.88rem; font-weight: 600;
  }
  .post-meta .sep { width: 4px; height: 4px; border-radius: 50%; background: #cbd5e1; }
  .post-meta i { color: var(--accent); margin-right: 6px; }
  .post-cat-pill {
    background: rgba(26,111,196,0.1); color: var(--accent);
    padding: 5px 15px; border-radius: 50px;
    font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;
  }

  .post-progress {
    position: fixed; top: 0; left: 0; height: 3px; width: 0; z-index: 9999;
    background: linear-gradient(90deg, var(--accent), var(--sky-bright));
  }

  .post-body { background: var(--off-white); padding: 70px 0 100px; }
  .post-hero-img {
    position: relative; max-width: 1080px; margin: 0 auto 70px; padding: 0 24px;
  }
  .post-hero-img img {
    width: 100%; max-height: 520px; object-fit: cover;
    border-radius: 24px; display: block;
    box-shadow: 0 24px 60px rgba(6,43,77,0.18);
  }
  .post-hero-img .float-cat {
    position: absolute; bottom: -20px; left: 40px;
    background: #fff; border: 1px solid var(--line);
    padding: 10px 22px; border-radius: 60px;
    display: inline-flex; align-items: center; gap: 10px;
    box-shadow: 0 14px 34px rgba(6,43,77,0.14);
    font-weight: 800; font-size: 0.85rem; color: var(--navy);
  }
  .post-hero-img .float-cat i { color: var(--accent); }

  .post-layout { max-width: 1080px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 72px 1fr; gap: 48px; align-items: start; }
  @media (max-width: 920px) { .post-layout { grid-template-columns: 1fr; } }

  .post-share {
    position: sticky; top: 110px;
    display: flex; flex-direction: column; align-items: center; gap: 10px;
  }
  @media (max-width: 920px) {
    .post-share { position: static; flex-direction: row; justify-content: center; margin-bottom: 10px; }
  }
  .post-share-label { font-size: 0.66rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #94a3b8; margin-bottom: 4px; }
  .share-btn {
    width: 46px; height: 46px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: #fff; color: #64748b;
    border: 1px solid var(--line); text-decoration: none;
    transition: all 0.3s ease;
  }
  .share-btn:hover {
    background: var(--accent); color: #fff; border-color: var(--accent);
    transform: translateY(-3px); box-shadow: 0 10px 22px rgba(26,111,196,0.28);
  }

  .post-content-wrap {
    background: #fff; border-radius: 26px;
    border: 1px solid var(--line);
    padding: 56px 60px;
    box-shadow: 0 20px 55px rgba(6,43,77,0.07);
  }
  @media (max-width: 768px) { .post-content-wrap { padding: 34px 24px; border-radius: 18px; } }

  .post-excerpt {
    margin-bottom: 44px; padding: 28px 34px;
    background: #f0f7ff; border-radius: 18px; border-left: 5px solid var(--accent);
  }
  .post-excerpt p { margin: 0; color: #334155; font-size: 1.08rem; line-height: 1.75; font-style: italic; }

  .post-prose p {
    font-size: 1.09rem; line-height: 1.85; color: #334155; margin-bottom: 1.7rem;
  }
  .post-prose p:first-of-type::first-letter {
    font-family: var(--font-display); font-weight: 900; color: var(--accent);
    font-size: 3.3rem; line-height: 1; float: left;
    padding: 4px 12px 0 0;
  }
  .post-prose h2 {
    font-family: var(--font-display);
    font-size: 1.7rem; font-weight: 900; color: var(--navy);
    margin: 2.6rem 0 1.1rem; letter-spacing: -0.4px;
  }
  .post-prose h2 span { color: var(--accent); }
  .post-prose ul { margin: 0 0 1.7rem; padding-left: 0; list-style: none; }
  .post-prose ul li {
    position: relative; padding-left: 28px; margin-bottom: 12px;
    font-size: 1.05rem; line-height: 1.7; color: #334155;
  }
  .post-prose ul li::before {
    content: '\f00c'; font-family: 'Font Awesome 5 Free'; font-weight: 900;
    position: absolute; left: 0; top: 2px;
    color: var(--accent); font-size: 0.9rem;
  }
  .post-divider { display: flex; align-items: center; gap: 16px; margin: 48px 0; color: var(--accent); }
  .post-divider::before, .post-divider::after { content: ''; flex: 1; height: 1px; background: #eef2f7; }

  .author-box {
    display: flex; align-items: center; gap: 18px;
    padding: 26px 30px; background: #f8fafc;
    border: 1px solid #eef2f7; border-radius: 20px; margin-top: 40px;
  }
  .author-img {
    width: 62px; height: 62px; border-radius: 50%; flex-shrink: 0;
    background: linear-gradient(135deg, var(--navy), var(--primary));
    display: flex; align-items: center; justify-content: center;
    color: var(--gold); font-size: 1.4rem;
    box-shadow: 0 10px 24px rgba(6,43,77,0.25);
  }
  .author-box .author-name { font-weight: 800; color: var(--navy); font-size: 1.05rem; }
  .author-box .author-role { font-size: 0.88rem; color: #718096; }

  .post-footer-nav {
    margin-top: 48px; padding-top: 36px; border-top: 1px solid #f1f5f9;
    display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap;
  }
  .back-link {
    color: var(--navy); text-decoration: none; font-weight: 700;
    display: inline-flex; align-items: center; gap: 10px;
    transition: color 0.3s ease, gap 0.3s ease;
  }
  .back-link:hover { color: var(--accent); gap: 6px; }
  .back-link i { font-size: 0.9rem; }

  /* Related posts */
  .related-section { max-width: 1180px; margin: 0 auto; padding: 0 24px; }
  .related-head { text-align: center; margin-bottom: 44px; }
  .related-head .label {
    color: var(--accent); font-size: 0.76rem; font-weight: 800;
    letter-spacing: 2.4px; text-transform: uppercase; margin-bottom: 10px;
  }
  .related-head h2 { font-family: var(--font-display); font-size: 2rem; font-weight: 900; color: var(--navy); }
  .related-head h2 span { color: var(--accent); }
  .related-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  @media (max-width: 992px) { .related-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .related-grid { grid-template-columns: 1fr; } }
  .related-grid .reveal { height: 100%; transition-delay: var(--d, 0s); }

  .related-card {
    background: #fff; border-radius: 20px; overflow: hidden; height: 100%;
    border: 1px solid var(--line); box-shadow: 0 10px 30px rgba(6,43,77,0.05);
    transition: transform 0.45s cubic-bezier(.22,.61,.36,1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .related-card:hover { transform: translateY(-10px); box-shadow: 0 26px 60px rgba(6,43,77,0.15); border-color: rgba(26,111,196,0.3); }
  .related-card a { text-decoration: none; display: flex; flex-direction: column; height: 100%; }
  .related-media { position: relative; height: 180px; overflow: hidden; }
  .related-media img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.7s cubic-bezier(.22,.61,.36,1); }
  .related-card:hover .related-media img { transform: scale(1.1); }
  .related-media::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(6,43,77,0) 60%, rgba(6,43,77,0.4) 100%); }
  .related-body { padding: 22px 24px 24px; flex: 1; display: flex; flex-direction: column; }
  .related-body .rel-cat { font-size: 0.66rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 8px; }
  .related-body h3 {
    font-family: var(--font-display); font-size: 1.05rem; font-weight: 800; line-height: 1.35;
    color: var(--navy); margin-bottom: 12px; flex: 1;
    transition: color 0.3s ease;
  }
  .related-card:hover .related-body h3 { color: var(--accent); }
  .related-body .rel-meta { display: flex; gap: 14px; font-size: 0.78rem; font-weight: 600; color: #718096; }
  .related-body .rel-meta i { color: var(--accent); margin-right: 5px; }

  .post-cta {
    position: relative; overflow: hidden;
    max-width: 1180px; margin: 90px auto 0; padding: 0 24px;
  }
  .post-cta-inner {
    position: relative; overflow: hidden;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto; border-radius: 28px; padding: 70px 40px;
    text-align: center; color: #fff;
    animation: postCtaShift 8s linear infinite;
  }
  @keyframes postCtaShift { to { background-position: 200% center; } }
  .post-cta-inner::before {
    content: ''; position: absolute; width: 300px; height: 300px; border-radius: 50%;
    top: -110px; right: -60px;
    background: radial-gradient(circle, rgba(245,181,60,0.3), transparent 70%);
    animation: postCtaPulse 5s ease-in-out infinite;
  }
  .post-cta-inner::after {
    content: ''; position: absolute; width: 240px; height: 240px; border-radius: 50%;
    bottom: -100px; left: -60px;
    background: radial-gradient(circle, rgba(111,177,232,0.4), transparent 70%);
    animation: postCtaPulse 5s ease-in-out infinite reverse;
  }
  @keyframes postCtaPulse { 0%,100% { transform: scale(1); opacity: 0.7; } 50% { transform: scale(1.15); opacity: 1; } }
  .post-cta-inner > * { position: relative; z-index: 2; }
  .post-cta-inner h2 { font-family: var(--font-display); font-size: clamp(1.7rem, 3vw, 2.4rem); font-weight: 900; margin-bottom: 14px; }
  .post-cta-inner h2 span { color: var(--sky-bright); }
  .post-cta-inner p { max-width: 620px; margin: 0 auto 32px; color: rgba(255,255,255,0.78); font-size: 1.05rem; line-height: 1.7; }
  .post-cta-actions { display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; }
  .post-cta-actions .btn-white {
    background: #fff; color: var(--navy);
    padding: 15px 34px; border-radius: 50px;
    font-weight: 800; text-decoration: none;
    display: inline-flex; align-items: center; gap: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .post-cta-actions .btn-white:hover { transform: translateY(-3px); box-shadow: 0 16px 34px rgba(0,0,0,0.28); }
  .post-cta-actions .btn-ghost {
    border: 1.5px solid rgba(255,255,255,0.5); color: #fff;
    padding: 15px 34px; border-radius: 50px;
    font-weight: 800; text-decoration: none;
    display: inline-flex; align-items: center; gap: 10px;
    transition: all 0.3s ease;
  }
  .post-cta-actions .btn-ghost:hover { background: rgba(255,255,255,0.12); border-color: #fff; transform: translateY(-3px); }
</style>

<!-- READING PROGRESS -->
<div class="post-progress" id="postProgress"></div>

<!-- HERO -->
<header class="post-hero">
  <div class="post-hero-inner">
    <div class="post-eyebrow">The Jezdan Lab</div>
    <h1 class="post-title">{{ $post['title'] }}</h1>
    <div class="post-meta">
      <span class="post-cat-pill" style="background: {{ $post['category_color'] }}1a;">{{ $post['category'] }}</span>
      <span class="sep"></span>
      <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}</span>
      <span class="sep"></span>
      <span><i class="far fa-clock"></i> {{ $post['reading_minutes'] }} min read</span>
    </div>
  </div>
</header>

<main class="post-body">
  <div class="post-hero-img reveal">
    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
    <span class="float-cat"><i class="fas fa-folder-open"></i> {{ $post['category'] }}</span>
  </div>

  <div class="post-layout">
    <!-- Share rail -->
    <aside class="post-share">
      <span class="post-share-label">Share</span>
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="share-btn"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post['title']) }}" target="_blank" rel="noopener" class="share-btn"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="share-btn"><i class="fab fa-linkedin-in"></i></a>
      <button class="share-btn" onclick="copyPostLink()"><i class="fas fa-link"></i></button>
    </aside>

    <!-- Article -->
    <article class="post-content">
      <div class="post-content-wrap">
        <div class="post-excerpt">
          <p>"{{ $post['excerpt'] }}"</p>
        </div>

        <div class="post-prose">
          @foreach($post['paragraphs'] as $index => $paragraph)
            @if($index == 2)
              <h2>The <span>Strategy</span></h2>
              <ul>
                @foreach($post['paragraphs'] as $key => $p)
                  @if($key >= 0)
                    <li>{{ $p }}</li>
                  @endif
                @endforeach
              </ul>
              @break
            @endif
            <p>{{ $paragraph }}</p>
          @endforeach
        </div>

        <div class="post-divider"><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i></div>

        <div class="author-box">
          <div class="author-img"><i class="fas fa-user-tie"></i></div>
          <div>
            <div class="author-name">Engineering Lab Team</div>
            <div class="author-role">Software Architecture & Cloud Specialists at Jezdan Technology</div>
          </div>
        </div>

        <div class="post-footer-nav">
          <a href="{{ route('blog') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to all Insights
          </a>
          <a href="{{ route('contact') }}" class="btn-primary" style="padding: 13px 28px; border-radius: 50px;">Talk to an expert</a>
        </div>
      </div>
    </article>
  </div>

  <!-- Related posts -->
  @if($relatedPosts->isNotEmpty())
  <section class="related-section" style="margin-top: 90px;">
    <div class="related-head reveal">
      <div class="label">Keep Reading</div>
      <h2>Related <span>Insights</span></h2>
    </div>
    <div class="related-grid">
      @foreach($relatedPosts as $rp)
      <div class="reveal" style="--d:{{ $loop->index * 80 }}ms;">
        <article class="related-card">
          <a href="{{ route('blog.show', $rp['slug']) }}">
            <div class="related-media">
              <img src="{{ $rp['image'] }}" alt="{{ $rp['title'] }}">
            </div>
            <div class="related-body">
              <span class="rel-cat" style="color: {{ $rp['category_color'] }};">{{ $rp['category'] }}</span>
              <h3>{{ $rp['title'] }}</h3>
              <div class="rel-meta">
                <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($rp['date'])->format('M j, Y') }}</span>
                <span><i class="far fa-clock"></i> {{ $rp['reading_minutes'] }}m</span>
              </div>
            </div>
          </a>
        </article>
      </div>
      @endforeach
    </div>
  </section>
  @endif

  <!-- CTA -->
  <div class="post-cta">
    <div class="post-cta-inner">
      <h2>Enjoyed this <span>insight</span>?</h2>
      <p>Join 2,000+ technology leaders receiving our bi-weekly digest — and get in touch when you're ready to build.</p>
      <div class="post-cta-actions">
        <a href="{{ route('request.quote') }}" class="btn-white"><i class="fas fa-rocket"></i> Start a Project</a>
        <a href="{{ route('blog') }}" class="btn-ghost"><i class="fas fa-newspaper"></i> Browse All Articles</a>
      </div>
    </div>
  </div>
</main>

@section('additional_scripts')
<script>
  var progressBar = document.getElementById('postProgress');
  window.addEventListener('scroll', function() {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    var docHeight = document.documentElement.scrollHeight - window.innerHeight;
    var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    if (progressBar) progressBar.style.width = pct + '%';
  }, { passive: true });

  function copyPostLink() {
    var url = window.location.href;
    if (navigator.clipboard) {
      navigator.clipboard.writeText(url).then(function() { toastLink('Link copied!'); });
    } else {
      var ta = document.createElement('textarea');
      ta.value = url;
      document.body.appendChild(ta);
      ta.select();
      document.execCommand('copy');
      document.body.removeChild(ta);
      toastLink('Link copied!');
    }
  }
  function toastLink(msg) {
    var t = document.createElement('div');
    t.textContent = msg;
    t.style.cssText = 'position:fixed;bottom:24px;left:50%;transform:translateX(-50%);background:var(--navy);color:#fff;padding:12px 26px;border-radius:50px;font-size:0.9rem;font-weight:700;z-index:99999;box-shadow:0 14px 30px rgba(6,43,77,0.3);';
    document.body.appendChild(t);
    setTimeout(function() { t.remove(); }, 2200);
  }
</script>
@endsection
@endsection
