@extends('layouts.app')

@section('title', 'Blog & Insights | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Practical guides on web, mobile, networks, cybersecurity, and digital transformation for Tanzanian teams.">
  <meta property="og:title" content="Blog & Insights | Jezdan Technology">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('logo.png') }}">
@endsection

@section('content')
@php
  $featuredPost = $posts->first();
  $remainingPosts = $posts->skip(1);
  $displayPosts = ($page == 1 && $featuredPost) ? $remainingPosts : $posts;
  $cats = collect(config('site_content.blog_posts', []))->pluck('category')->unique()->values();
@endphp

<style>
  /* ════════════════════════════════════════════════════════════
     BLOG REDESIGN — centered animated hero + 3-per-row cards
  ════════════════════════════════════════════════════════════ */
  .blog-hero {
    min-height: 62vh;
    display: flex; align-items: center; justify-content: center; text-align: center;
    background: linear-gradient(135deg, #062B4D 0%, #0C4580 55%, #0F5FA8 100%);
    position: relative; overflow: hidden;
  }
  .blog-hero::before,
  .blog-hero::after {
    content: '';
    position: absolute; border-radius: 50%;
    filter: blur(65px); opacity: 0.45; pointer-events: none;
    animation: blogBlob 12s ease-in-out infinite;
  }
  .blog-hero::before {
    width: 420px; height: 420px; top: -140px; right: -80px;
    background: radial-gradient(circle, rgba(111, 177, 232, 0.55), transparent 70%);
  }
  .blog-hero::after {
    width: 360px; height: 360px; bottom: -120px; left: -70px;
    background: radial-gradient(circle, rgba(12, 69, 128, 0.7), transparent 70%);
    animation-delay: -6s;
  }
  @keyframes blogBlob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50%      { transform: translate(32px, 22px) scale(1.08); }
  }
  .blog-hero-content { position: relative; z-index: 2; width: 100%; max-width: 1240px; margin: 0 auto; padding: 110px 5% 130px; }
  .blog-hero-title {
    font-family: var(--font-display);
    background: linear-gradient(90deg, #fff, #9CC9EE, #fff);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: blogShine 5s linear infinite;
  }
  @keyframes blogShine { to { background-position: 200% center; } }

  .blog-search {
    background: #fff;
    padding: 8px 10px 8px 26px;
    border-radius: 60px;
    display: flex; align-items: center;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.18);
    max-width: 620px; margin: 36px auto 0;
  }
  .blog-search i { color: var(--accent); }
  .blog-search input {
    border: none; padding: 12px 18px; flex: 1;
    font-size: 1rem; outline: none; background: transparent; color: var(--navy);
  }
  .blog-search input::placeholder { color: #94a3b8; }

  .blog-filters {
    display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;
    margin-top: 22px;
  }
  .blog-filter-btn {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.85);
    padding: 8px 20px; border-radius: 50px;
    font-size: 0.82rem; font-weight: 700;
    cursor: pointer; letter-spacing: 0.4px;
    backdrop-filter: blur(6px);
    transition: all 0.3s ease;
  }
  .blog-filter-btn:hover { background: rgba(255, 255, 255, 0.22); transform: translateY(-2px); }
  .blog-filter-btn.active { background: #fff; color: var(--accent); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2); }

  .blog-section { background: var(--off-white); padding-bottom: 110px; }

  .blog-featured {
    background: #fff;
    border-radius: 26px;
    overflow: hidden;
    display: grid;
    grid-template-columns: 1.15fr 1fr;
    box-shadow: 0 30px 70px rgba(6, 43, 77, 0.14);
    margin-top: -70px;
    position: relative; z-index: 10;
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease;
  }
  .blog-featured:hover { transform: translateY(-8px); box-shadow: 0 40px 90px rgba(6, 43, 77, 0.2); }
  @media (max-width: 991px) { .blog-featured { grid-template-columns: 1fr; margin-top: -50px; } }
  .blog-featured-media { position: relative; overflow: hidden; min-height: 320px; }
  .blog-featured-media img {
    width: 100%; height: 100%; min-height: 320px; object-fit: cover; display: block;
    transition: transform 0.8s cubic-bezier(.22, .61, .36, 1);
  }
  .blog-featured:hover .blog-featured-media img { transform: scale(1.07); }
  .blog-featured-media::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(6,43,77,0) 35%, rgba(6,43,77,0.5) 100%);
  }
  .blog-featured-cat {
    position: absolute; top: 20px; left: 20px; z-index: 2;
    color: #fff; padding: 6px 16px; border-radius: 50px;
    font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
  }
  .blog-featured-body { padding: 46px; display: flex; flex-direction: column; justify-content: center; }
  .blog-featured-pill {
    align-self: flex-start;
    background: rgba(26, 111, 196, 0.1);
    color: var(--accent);
    padding: 6px 16px; border-radius: 50px;
    font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.4px;
    margin-bottom: 20px;
  }
  .blog-featured-body h2 {
    font-family: var(--font-display);
    font-size: clamp(1.7rem, 2.8vw, 2.4rem); font-weight: 900;
    color: var(--navy); line-height: 1.2; margin-bottom: 18px;
  }
  .blog-featured-body p { color: var(--text-mid); font-size: 1.05rem; line-height: 1.7; margin-bottom: 26px; }
  .blog-featured-meta {
    display: flex; gap: 24px; flex-wrap: wrap; margin-bottom: 30px;
  }
  .blog-featured-meta span {
    display: inline-flex; align-items: center; gap: 9px;
    font-size: 0.88rem; font-weight: 600; color: #718096;
  }
  .blog-featured-meta i { color: var(--accent); }
  .blog-featured-body .btn-primary { align-self: flex-start; padding: 15px 34px; border-radius: 50px; }

  .blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
  @media (max-width: 992px) { .blog-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .blog-grid { grid-template-columns: 1fr; } }
  .blog-grid .reveal { height: 100%; transition-delay: var(--d, 0s); }

  .blog-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
    height: 100%;
    transition: transform 0.45s cubic-bezier(.22, .61, .36, 1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .blog-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 26px 60px rgba(6, 43, 77, 0.16);
    border-color: rgba(12, 69, 128, 0.25);
  }
  .blog-card a { text-decoration: none; display: flex; flex-direction: column; height: 100%; }
  .blog-card-media { position: relative; height: 210px; overflow: hidden; }
  .blog-card-media img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.7s cubic-bezier(.22, .61, .36, 1);
  }
  .blog-card:hover .blog-card-media img { transform: scale(1.12); }
  .blog-card-media::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(6,43,77,0) 55%, rgba(6,43,77,0.45) 100%);
    opacity: 0.85; transition: opacity 0.4s ease;
  }
  .blog-card:hover .blog-card-media::after { opacity: 1; }
  .blog-card-cat {
    position: absolute; top: 16px; left: 16px; z-index: 2;
    background: rgba(255, 255, 255, 0.92);
    padding: 5px 14px; border-radius: 50px;
    font-size: 0.68rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.6px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.14);
  }
  .blog-card-body { padding: 26px 26px 28px; flex: 1; display: flex; flex-direction: column; }
  .blog-card-body h3 {
    font-family: var(--font-display);
    font-size: 1.28rem; font-weight: 800; color: var(--navy);
    line-height: 1.3; margin-bottom: 14px;
    transition: color 0.3s ease;
  }
  .blog-card:hover .blog-card-body h3 { color: var(--accent); }
  .blog-card-body p { color: var(--ink-muted); font-size: 0.92rem; line-height: 1.65; margin-bottom: 22px; flex: 1; }
  .blog-card-meta {
    display: flex; gap: 18px; align-items: center;
    padding-top: 18px; border-top: 1px solid #f1f5f9;
    font-size: 0.82rem; font-weight: 600; color: #718096;
  }
  .blog-card-meta i { color: var(--accent); margin-right: 6px; }
  .blog-card-link {
    margin-top: 18px;
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--primary); font-weight: 800; font-size: 0.9rem;
    position: relative; width: fit-content;
  }
  .blog-card-link::after {
    content: ''; position: absolute; left: 0; bottom: -3px; height: 2px; width: 0;
    background: var(--primary); transition: width 0.35s ease;
  }
  .blog-card-link i { transition: transform 0.35s ease; }
  .blog-card:hover .blog-card-link::after { width: 100%; }
  .blog-card:hover .blog-card-link i { transform: translateX(6px); }

  .blog-pager {
    display: flex; gap: 10px; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 70px;
  }
  .blog-pager a {
    min-width: 46px; height: 46px; padding: 0 18px;
    display: inline-flex; align-items: center; justify-content: center; gap: 8px;
    background: #fff; border: 1px solid var(--line); border-radius: 14px;
    color: var(--primary); font-weight: 700; font-size: 0.9rem; text-decoration: none;
    transition: all 0.3s ease;
  }
  .blog-pager a:hover { transform: translateY(-3px); box-shadow: 0 12px 25px rgba(6, 43, 77, 0.12); border-color: var(--primary); }
  .blog-pager a.active { background: var(--primary); color: #fff; box-shadow: 0 10px 25px rgba(12, 69, 128, 0.3); }

  .blog-newsletter {
    position: relative; overflow: hidden;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    border-radius: 32px; padding: 80px 40px; margin: 90px 0 0;
    animation: blogNewsShift 8s linear infinite;
  }
  @keyframes blogNewsShift { to { background-position: 200% center; } }
  .blog-newsletter::before {
    content: ''; position: absolute; width: 320px; height: 320px; border-radius: 50%;
    top: -100px; right: -70px;
    background: radial-gradient(circle, rgba(245, 181, 60, 0.3), transparent 70%);
    animation: blogNewsPulse 5s ease-in-out infinite;
  }
  .blog-newsletter::after {
    content: ''; position: absolute; width: 260px; height: 260px; border-radius: 50%;
    bottom: -90px; left: -60px;
    background: radial-gradient(circle, rgba(111, 177, 232, 0.4), transparent 70%);
    animation: blogNewsPulse 5s ease-in-out infinite reverse;
  }
  @keyframes blogNewsPulse {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50%      { transform: scale(1.15); opacity: 1; }
  }
  .blog-newsletter-inner { position: relative; z-index: 2; text-align: center; max-width: 700px; margin: 0 auto; }
  .blog-newsletter-icon {
    width: 74px; height: 74px; margin: 0 auto 28px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 22px;
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 1.9rem;
    transform: rotate(-6deg);
    animation: blogIconFloat 4s ease-in-out infinite;
  }
  @keyframes blogIconFloat { 0%, 100% { transform: rotate(-6deg) translateY(0); } 50% { transform: rotate(-6deg) translateY(-8px); } }
  .blog-newsletter h2 { font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 900; color: #fff; margin-bottom: 18px; }
  .blog-newsletter h2 span { color: var(--sky-bright); }
  .blog-newsletter p { color: rgba(255, 255, 255, 0.75); font-size: 1.05rem; line-height: 1.75; margin-bottom: 36px; }
  .blog-newsletter-form {
    display: flex; gap: 12px; flex-wrap: wrap;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.18);
    padding: 8px; border-radius: 60px; max-width: 560px; margin: 0 auto;
    backdrop-filter: blur(8px);
  }
  .blog-newsletter-form input {
    flex: 1; min-width: 240px;
    background: transparent; border: none; padding: 14px 24px;
    color: #fff; outline: none; font-size: 1rem;
  }
  .blog-newsletter-form input::placeholder { color: rgba(255, 255, 255, 0.5); }
  .blog-newsletter-form .btn-primary { border: none; border-radius: 50px; padding: 14px 34px; }
</style>

<!-- BLOG HERO -->
<section class="blog-hero">
  <div class="blog-hero-content">
    <div style="max-width: 820px; margin: 0 auto;">
      <div class="hero-badge" style="margin: 0 auto 22px;"><span class="dot"></span> The Lab</div>
      <h1 class="hero-title blog-hero-title">Knowledge &amp; <span>Digital Strategy</span></h1>
      <p class="hero-subtitle" style="max-width: 680px; margin: 0 auto;">
        Expert insights on software engineering, cloud architecture, and cybersecurity tailored for the East African digital landscape.
      </p>

      <div class="blog-search">
        <i class="fas fa-search"></i>
        <input type="text" id="blog-search-input" placeholder="Search articles, guides, and playbooks...">
      </div>

      <div class="blog-filters">
        <button class="blog-filter-btn active" data-filter="all">All</button>
        @foreach($cats as $cat)
          <button class="blog-filter-btn" data-filter="{{ strtolower($cat) }}">{{ $cat }}</button>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="blog-section">
  <div class="container">

    @if($featuredPost && $page == 1)
    <article class="blog-featured reveal">
      <div class="blog-featured-media">
        <img src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}">
        <span class="blog-featured-cat" style="background: {{ $featuredPost['category_color'] }};">{{ $featuredPost['category'] }}</span>
      </div>
      <div class="blog-featured-body">
        <span class="blog-featured-pill">Featured Article</span>
        <h2>{{ $featuredPost['title'] }}</h2>
        <p>{{ $featuredPost['excerpt'] }}</p>
        <div class="blog-featured-meta">
          <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($featuredPost['date'])->format('F j, Y') }}</span>
          <span><i class="far fa-clock"></i> {{ $featuredPost['reading_minutes'] }} min read</span>
        </div>
        <a href="{{ route('blog.show', $featuredPost['slug']) }}" class="btn-primary">
          Read Full Story <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
        </a>
      </div>
    </article>
    @endif

    <div class="section-header" style="margin: 90px 0 50px;">
      <div class="section-label"><i class="fas fa-newspaper"></i> Recent Updates</div>
      <h2 class="section-title">Latest <span>Insights</span></h2>
    </div>

    <div class="blog-grid" id="blog-grid">
      @forelse($displayPosts as $post)
      <div class="reveal" style="--d:{{ ($loop->index % 3) * 90 }}ms;">
        <article class="blog-card" data-title="{{ strtolower($post['title']) }}" data-category="{{ strtolower($post['category']) }}">
          <a href="{{ route('blog.show', $post['slug']) }}">
            <div class="blog-card-media">
              <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
              <span class="blog-card-cat" style="color: {{ $post['category_color'] }};">{{ $post['category'] }}</span>
            </div>
            <div class="blog-card-body">
              <h3>{{ $post['title'] }}</h3>
              <p>{{ \Illuminate\Support\Str::limit($post['excerpt'], 130) }}</p>
              <div class="blog-card-meta">
                <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}</span>
                <span><i class="far fa-clock"></i> {{ $post['reading_minutes'] }}m read</span>
              </div>
              <span class="blog-card-link">Read More <i class="fas fa-arrow-right"></i></span>
            </div>
          </a>
        </article>
      </div>
      @empty
      <div style="grid-column: 1/-1; text-align: center; padding: 90px 0;">
        <i class="fas fa-search" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 20px; display: block;"></i>
        <h3 style="color: var(--navy);">No articles found matching your criteria</h3>
        <p style="color: #718096;">Try adjusting your search terms or browse all categories.</p>
      </div>
      @endforelse
    </div>

    @if($lastPage > 1)
    <div class="blog-pager">
      @if($page > 1)
        <a href="{{ route('blog', ['page' => $page - 1]) }}"><i class="fas fa-arrow-left"></i> Previous</a>
      @endif

      @for($i = 1; $i <= $lastPage; $i++)
        <a href="{{ route('blog', ['page' => $i]) }}" class="{{ $i === $page ? 'active' : '' }}">{{ $i }}</a>
      @endfor

      @if($page < $lastPage)
        <a href="{{ route('blog', ['page' => $page + 1]) }}">Next <i class="fas fa-arrow-right"></i></a>
      @endif
    </div>
    @endif

    <!-- NEWSLETTER -->
    <div class="blog-newsletter">
      <div class="blog-newsletter-inner">
        <div class="blog-newsletter-icon"><i class="fas fa-paper-plane"></i></div>
        <h2>Stay Ahead of the <span>Tech Curve</span></h2>
        <p>Join 2,000+ technology leaders receiving our bi-weekly digest on digital transformation and engineering excellence in Africa.</p>
        <form class="blog-newsletter-form" onsubmit="return false;">
          <input type="email" placeholder="Enter your business email" required>
          <button type="submit" class="btn-primary"><i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Subscribe Now</button>
        </form>
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('blog-search-input');
    const filterBtns = document.querySelectorAll('.blog-filter-btn');
    const cards = document.querySelectorAll('.blog-card');

    function applyFilters() {
      const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
      const activeFilter = document.querySelector('.blog-filter-btn.active').getAttribute('data-filter');

      cards.forEach(function(card) {
        const title = card.getAttribute('data-title');
        const category = card.getAttribute('data-category');
        const wrap = card.closest('.reveal');

        const matchesQuery = title.includes(query) || category.includes(query);
        const matchesFilter = activeFilter === 'all' || category === activeFilter;

        if (matchesQuery && matchesFilter) {
          wrap.style.display = '';
          wrap.classList.add('in-view');
        } else {
          wrap.style.display = 'none';
        }
      });
    }

    if (searchInput) searchInput.addEventListener('input', applyFilters);

    filterBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        filterBtns.forEach(function(b) { b.classList.remove('active'); });
        this.classList.add('active');
        applyFilters();
      });
    });
  });
</script>
@endsection
