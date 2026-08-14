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
  /* ═══════════ BLOG INDEX — editorial, clean, advanced ═══════════ */
  .blog-top {
    background: #fff;
    border-bottom: 1px solid var(--line);
    padding: 74px 0 54px;
  }
  .blog-top-inner { max-width: 1180px; margin: 0 auto; padding: 0 24px; }
  .blog-eyebrow {
    display: inline-flex; align-items: center; gap: 10px;
    color: var(--accent); font-size: 0.76rem; font-weight: 800;
    letter-spacing: 2.4px; text-transform: uppercase;
    margin-bottom: 16px;
  }
  .blog-eyebrow::before {
    content: ''; width: 26px; height: 2px;
    background: linear-gradient(90deg, var(--accent), var(--sky-bright));
  }
  .blog-top h1 {
    font-family: var(--font-display);
    font-size: clamp(2.1rem, 4.6vw, 3.4rem);
    font-weight: 900; letter-spacing: -1.2px;
    color: var(--navy); line-height: 1.08;
    margin-bottom: 14px;
  }
  .blog-top h1 span {
    background: linear-gradient(90deg, var(--accent), var(--sky-bright));
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }
  .blog-top p.lede { max-width: 640px; color: var(--ink-muted); font-size: 1.08rem; line-height: 1.7; }

  .blog-tools { display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; margin-top: 36px; }
  .blog-search {
    display: flex; align-items: center; gap: 12px;
    border: 1px solid var(--line); border-radius: 60px;
    padding: 0 22px; min-width: 300px; flex: 1; max-width: 460px;
    background: #fff; transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }
  .blog-search:focus-within { border-color: var(--accent); box-shadow: 0 0 0 4px rgba(26,111,196,0.08); }
  .blog-search i { color: #94a3b8; }
  .blog-search input { flex: 1; border: none; padding: 14px 0; font-size: 0.95rem; outline: none; color: var(--navy); background: transparent; }
  .blog-search input::placeholder { color: #a8b6c7; }
  .blog-filters { display: flex; gap: 8px; flex-wrap: wrap; }
  .blog-filter-btn {
    border: 1px solid var(--line); background: #fff; color: var(--ink-muted);
    padding: 8px 18px; border-radius: 50px;
    font-size: 0.8rem; font-weight: 700;
    cursor: pointer; transition: all 0.25s ease;
  }
  .blog-filter-btn:hover { border-color: var(--accent); color: var(--accent); transform: translateY(-1px); }
  .blog-filter-btn.active { background: var(--navy); border-color: var(--navy); color: #fff; box-shadow: 0 8px 18px rgba(6,43,77,0.22); }

  .blog-body { background: var(--off-white); padding: 64px 0 110px; }
  .blog-body-inner { max-width: 1180px; margin: 0 auto; padding: 0 24px; }

  /* Featured editorial split */
  .featured-split {
    display: grid; grid-template-columns: 1.1fr 1fr;
    background: #fff; border-radius: 24px; overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 20px 55px rgba(6,43,77,0.1);
    margin-bottom: 60px;
    transition: box-shadow 0.4s ease, transform 0.4s cubic-bezier(.22,.61,.36,1);
  }
  .featured-split:hover { transform: translateY(-6px); box-shadow: 0 32px 75px rgba(6,43,77,0.16); }
  @media (max-width: 920px) { .featured-split { grid-template-columns: 1fr; } }
  .featured-media { position: relative; overflow: hidden; min-height: 340px; }
  .featured-media img { width: 100%; height: 100%; min-height: 340px; object-fit: cover; display: block; transition: transform 0.9s cubic-bezier(.22,.61,.36,1); }
  .featured-split:hover .featured-media img { transform: scale(1.06); }
  .featured-media::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(6,43,77,0) 45%, rgba(6,43,77,0.45) 100%); }
  .featured-cat {
    position: absolute; top: 22px; left: 22px; z-index: 2;
    color: #fff; padding: 6px 16px; border-radius: 50px;
    font-size: 0.7rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;
    box-shadow: 0 8px 22px rgba(0,0,0,0.25);
  }
  .featured-body { padding: 48px; display: flex; flex-direction: column; justify-content: center; }
  .featured-flag {
    display: inline-flex; align-items: center; gap: 8px; align-self: flex-start;
    background: rgba(26,111,196,0.09); color: var(--accent);
    padding: 6px 16px; border-radius: 50px;
    font-size: 0.7rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.4px; margin-bottom: 20px;
  }
  .featured-flag i { animation: flagPing 2s ease-in-out infinite; }
  @keyframes flagPing { 0%,100% { transform: scale(1); } 50% { transform: scale(1.25); } }
  .featured-body h2 {
    font-family: var(--font-display);
    font-size: clamp(1.7rem, 2.8vw, 2.3rem); font-weight: 900; letter-spacing: -0.6px;
    color: var(--navy); line-height: 1.18; margin-bottom: 16px;
  }
  .featured-body > p { color: var(--ink-muted); font-size: 1.02rem; line-height: 1.7; margin-bottom: 26px; }
  .featured-meta { display: flex; gap: 24px; flex-wrap: wrap; margin-bottom: 28px; }
  .featured-meta span { display: inline-flex; align-items: center; gap: 9px; font-size: 0.87rem; font-weight: 600; color: #718096; }
  .featured-meta i { color: var(--accent); }
  .featured-body .btn-primary { align-self: flex-start; padding: 14px 30px; border-radius: 50px; }

  /* Section heading for grid */
  .grid-head {
    display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap;
    margin-bottom: 34px;
  }
  .grid-head h2 { font-family: var(--font-display); font-size: 1.7rem; font-weight: 900; color: var(--navy); }
  .grid-head h2 span { color: var(--accent); }
  .grid-count { font-size: 0.85rem; font-weight: 700; color: #718096; }

  .blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  @media (max-width: 992px) { .blog-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .blog-grid { grid-template-columns: 1fr; } }
  .blog-grid .reveal { height: 100%; transition-delay: var(--d, 0s); }

  .blog-card {
    position: relative; height: 100%;
    background: #fff; border-radius: 20px; overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: 0 10px 30px rgba(6,43,77,0.05);
    transition: transform 0.45s cubic-bezier(.22,.61,.36,1), box-shadow 0.45s ease, border-color 0.45s ease;
  }
  .blog-card:hover { transform: translateY(-10px); box-shadow: 0 26px 60px rgba(6,43,77,0.15); border-color: rgba(26,111,196,0.3); }
  .blog-card a { text-decoration: none; display: flex; flex-direction: column; height: 100%; }
  .blog-card-media { position: relative; height: 200px; overflow: hidden; }
  .blog-card-media img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.7s cubic-bezier(.22,.61,.36,1); }
  .blog-card:hover .blog-card-media img { transform: scale(1.1); }
  .blog-card-media::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(6,43,77,0) 55%, rgba(6,43,77,0.4) 100%); opacity: 0.85; transition: opacity 0.4s ease; }
  .blog-card:hover .blog-card-media::after { opacity: 1; }
  .blog-card-cat {
    position: absolute; top: 16px; left: 16px; z-index: 2;
    background: rgba(255,255,255,0.94);
    padding: 5px 14px; border-radius: 50px;
    font-size: 0.67rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
  }
  .blog-card-num {
    position: absolute; top: 16px; right: 16px; z-index: 2;
    font-family: var(--font-mono); font-weight: 900; font-size: 0.85rem; letter-spacing: 1.5px;
    color: #fff; background: rgba(6,43,77,0.5); border: 1px solid rgba(255,255,255,0.3);
    backdrop-filter: blur(5px); padding: 4px 11px; border-radius: 30px;
  }
  .blog-card-body { padding: 26px 26px 28px; flex: 1; display: flex; flex-direction: column; }
  .blog-card-body h3 {
    font-family: var(--font-display);
    font-size: 1.24rem; font-weight: 800; letter-spacing: -0.3px;
    color: var(--navy); line-height: 1.28; margin-bottom: 12px;
    transition: color 0.3s ease;
  }
  .blog-card:hover .blog-card-body h3 { color: var(--accent); }
  .blog-card-body p { color: var(--ink-muted); font-size: 0.9rem; line-height: 1.65; margin-bottom: 20px; flex: 1; }
  .blog-card-meta { display: flex; gap: 16px; align-items: center; padding-top: 16px; border-top: 1px solid #f1f5f9; font-size: 0.8rem; font-weight: 600; color: #718096; }
  .blog-card-meta i { color: var(--accent); margin-right: 6px; }
  .blog-card-link {
    margin-top: 16px; display: inline-flex; align-items: center; gap: 8px;
    color: var(--primary); font-weight: 800; font-size: 0.9rem; position: relative; width: fit-content;
  }
  .blog-card-link::after { content: ''; position: absolute; left: 0; bottom: -3px; height: 2px; width: 0; background: var(--primary); transition: width 0.35s ease; }
  .blog-card-link i { transition: transform 0.35s ease; }
  .blog-card:hover .blog-card-link::after { width: 100%; }
  .blog-card:hover .blog-card-link i { transform: translateX(6px); }

  .empty-state { grid-column: 1/-1; text-align: center; padding: 80px 0; }
  .empty-state i { font-size: 3rem; color: #cbd5e1; margin-bottom: 18px; display: block; }
  .empty-state h3 { color: var(--navy); margin-bottom: 8px; }
  .empty-state p { color: #718096; }

  .blog-pager { display: flex; gap: 10px; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 60px; }
  .blog-pager a {
    min-width: 46px; height: 46px; padding: 0 18px;
    display: inline-flex; align-items: center; justify-content: center; gap: 8px;
    background: #fff; border: 1px solid var(--line); border-radius: 14px;
    color: var(--primary); font-weight: 700; font-size: 0.9rem; text-decoration: none;
    transition: all 0.3s ease;
  }
  .blog-pager a:hover { transform: translateY(-3px); box-shadow: 0 12px 25px rgba(6,43,77,0.12); border-color: var(--primary); }
  .blog-pager a.active { background: var(--primary); color: #fff; box-shadow: 0 10px 25px rgba(12,69,128,0.3); }

  .blog-newsletter {
    position: relative; overflow: hidden;
    background: linear-gradient(120deg, #062B4D, #0C4580 60%, #0F5FA8);
    background-size: 200% auto;
    border-radius: 28px; padding: 76px 40px; margin: 80px 0 0;
    animation: blogNewsShift 8s linear infinite;
  }
  @keyframes blogNewsShift { to { background-position: 200% center; } }
  .blog-newsletter::before {
    content: ''; position: absolute; width: 300px; height: 300px; border-radius: 50%;
    top: -110px; right: -70px;
    background: radial-gradient(circle, rgba(245,181,60,0.3), transparent 70%);
    animation: blogNewsPulse 5s ease-in-out infinite;
  }
  .blog-newsletter::after {
    content: ''; position: absolute; width: 240px; height: 240px; border-radius: 50%;
    bottom: -90px; left: -60px;
    background: radial-gradient(circle, rgba(111,177,232,0.4), transparent 70%);
    animation: blogNewsPulse 5s ease-in-out infinite reverse;
  }
  @keyframes blogNewsPulse { 0%,100% { transform: scale(1); opacity: 0.7; } 50% { transform: scale(1.15); opacity: 1; } }
  .blog-newsletter-inner { position: relative; z-index: 2; text-align: center; max-width: 660px; margin: 0 auto; }
  .blog-newsletter h2 { font-family: var(--font-display); font-size: clamp(1.7rem, 3vw, 2.3rem); font-weight: 900; color: #fff; margin-bottom: 14px; }
  .blog-newsletter h2 span { color: var(--sky-bright); }
  .blog-newsletter p { color: rgba(255,255,255,0.75); font-size: 1.02rem; line-height: 1.7; margin-bottom: 32px; }
  .blog-newsletter-form {
    display: flex; gap: 10px; flex-wrap: wrap;
    background: rgba(255,255,255,0.09); border: 1px solid rgba(255,255,255,0.18);
    padding: 8px; border-radius: 60px; max-width: 540px; margin: 0 auto;
    backdrop-filter: blur(8px);
  }
  .blog-newsletter-form input { flex: 1; min-width: 230px; background: transparent; border: none; padding: 14px 24px; color: #fff; outline: none; font-size: 1rem; }
  .blog-newsletter-form input::placeholder { color: rgba(255,255,255,0.5); }
  .blog-newsletter-form .btn-primary { border: none; border-radius: 50px; padding: 14px 32px; }
</style>

<!-- TOP BAND -->
<header class="blog-top">
  <div class="blog-top-inner">
    <div class="blog-eyebrow">The Jezdan Lab</div>
    <h1>Ideas &amp; Insights, <span>Built for East Africa</span></h1>
    <p class="lede">Practical playbooks on software, infrastructure, and strategy — written by the engineers who ship them.</p>

    <div class="blog-tools">
      <div class="blog-search">
        <i class="fas fa-search"></i>
        <input type="text" id="blog-search-input" placeholder="Search articles...">
      </div>
      <div class="blog-filters">
        <button class="blog-filter-btn active" data-filter="all">All</button>
        @foreach($cats as $cat)
          <button class="blog-filter-btn" data-filter="{{ strtolower($cat) }}">{{ $cat }}</button>
        @endforeach
      </div>
    </div>
  </div>
</header>

<main class="blog-body">
  <div class="blog-body-inner">

    @if($featuredPost && $page == 1)
    <article class="featured-split reveal">
      <div class="featured-media">
        <img src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}">
        <span class="featured-cat" style="background: {{ $featuredPost['category_color'] }};">{{ $featuredPost['category'] }}</span>
      </div>
      <div class="featured-body">
        <span class="featured-flag"><i class="fas fa-star"></i> Featured</span>
        <h2>{{ $featuredPost['title'] }}</h2>
        <p>{{ $featuredPost['excerpt'] }}</p>
        <div class="featured-meta">
          <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($featuredPost['date'])->format('F j, Y') }}</span>
          <span><i class="far fa-clock"></i> {{ $featuredPost['reading_minutes'] }} min read</span>
        </div>
        <a href="{{ route('blog.show', $featuredPost['slug']) }}" class="btn-primary">
          Read Full Story <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
        </a>
      </div>
    </article>
    @endif

    <div class="grid-head">
      <h2>Latest <span>Insights</span></h2>
      <span class="grid-count"><i class="far fa-newspaper"></i> {{ $displayPosts->count() }} articles this page</span>
    </div>

    <div class="blog-grid" id="blog-grid">
      @forelse($displayPosts as $post)
      <div class="reveal" style="--d:{{ ($loop->index % 3) * 80 }}ms;">
        <article class="blog-card" data-title="{{ strtolower($post['title']) }}" data-category="{{ strtolower($post['category']) }}">
          <a href="{{ route('blog.show', $post['slug']) }}">
            <div class="blog-card-media">
              <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
              <span class="blog-card-cat" style="color: {{ $post['category_color'] }};">{{ $post['category'] }}</span>
              <span class="blog-card-num">0{{ $loop->index + 1 }}</span>
            </div>
            <div class="blog-card-body">
              <h3>{{ $post['title'] }}</h3>
              <p>{{ \Illuminate\Support\Str::limit($post['excerpt'], 120) }}</p>
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
      <div class="empty-state">
        <i class="fas fa-search"></i>
        <h3>No articles match your search</h3>
        <p>Try a different keyword or reset your category filter.</p>
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

    <div class="blog-newsletter">
      <div class="blog-newsletter-inner">
        <h2>Stay Ahead of the <span>Tech Curve</span></h2>
        <p>Join 2,000+ technology leaders receiving our bi-weekly digest on digital transformation and engineering excellence in Africa.</p>
        <form class="blog-newsletter-form" onsubmit="return false;">
          <input type="email" placeholder="Enter your business email" required>
          <button type="submit" class="btn-primary"><i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Subscribe Now</button>
        </form>
      </div>
    </div>

  </div>
</main>

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
