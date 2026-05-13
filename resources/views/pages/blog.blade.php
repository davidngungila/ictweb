@extends('layouts.app')

@section('title', 'Blog & Insights | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Practical guides on web, mobile, networks, cybersecurity, and digital transformation for Tanzanian teams.">
  <meta property="og:title" content="Blog & Insights | Jezdan Technology">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('jezdan-logo.png') }}">
@endsection

@section('content')
<style>
  .blog-hero { min-height: 42vh; }
  .blog-toolbar {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
  }
  .blog-search {
    flex: 1;
    min-width: 240px;
    position: relative;
  }
  .blog-search input {
    width: 100%;
    padding: 12px 16px 12px 40px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    font-size: 0.95rem;
  }
  .blog-search i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
  }
  .blog-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 14px 40px rgba(15, 23, 42, 0.08);
    display: flex;
    flex-direction: column;
    height: 100%;
    border: 1px solid #eef2f7;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .blog-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12);
  }
  .blog-card-body { padding: 22px; flex: 1; display: flex; flex-direction: column; }
  .blog-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    color: #64748b;
    font-size: 0.82rem;
    margin-top: auto;
    padding-top: 14px;
  }
  .blog-pager {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
  }
  .blog-pager a, .blog-pager span {
    min-width: 42px;
    text-align: center;
    padding: 10px 14px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
  }
  .blog-pager a {
    background: #fff;
    border: 1px solid #e2e8f0;
    color: var(--navy);
  }
  .blog-pager a:hover { border-color: var(--accent); color: var(--accent); }
  .blog-pager span.disabled { opacity: 0.45; cursor: not-allowed; }
  .blog-pager .active {
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: #fff;
    border: none;
  }
</style>

<section class="hero blog-hero">
  <div class="hero-bg-img"></div>
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-content">
    <div class="hero-left" style="max-width: 820px;">
      <div class="hero-badge"><span class="dot"></span> Insights Lab</div>
      <h1 class="hero-title">Jezdan <span>Technology Blog</span></h1>
      <p class="hero-subtitle">
        Actionable playbooks for growing Tanzanian brands—covering web, mobile apps, secure networks, and cloud economics.
      </p>
    </div>
  </div>
</section>

<section class="services" style="background: var(--off-white); padding: 70px 0 90px;">
  <div class="container">
    <div class="blog-toolbar">
      <div class="blog-search">
        <i class="fas fa-search"></i>
        <input type="search" id="blog-filter" placeholder="Filter articles by title, topic, or keyword..." autocomplete="off">
      </div>
      <div style="font-size: 0.9rem; color: #64748b;">
        Showing <strong>{{ $posts->count() }}</strong> of <strong>{{ $total }}</strong> articles
        @if($lastPage > 1)
          <span style="margin-left: 8px;">· Page {{ $page }} / {{ $lastPage }}</span>
        @endif
      </div>
    </div>

    <div class="services-grid" id="blog-grid">
      @forelse($posts as $post)
      <article class="blog-card" data-title="{{ strtolower($post['title']) }}" data-category="{{ strtolower($post['category']) }}" data-excerpt="{{ strtolower($post['excerpt']) }}">
        <a href="{{ route('blog.show', $post['slug']) }}" style="text-decoration: none; color: inherit;">
          <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div class="blog-card-body">
            <span style="display: inline-block; background: rgba(26,111,196,0.1); color: {{ $post['category_color'] }}; padding: 4px 12px; border-radius: 999px; font-size: 0.75rem; font-weight: 700;">
              {{ $post['category'] }}
            </span>
            <h2 style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 800; color: var(--navy); margin: 14px 0 10px; line-height: 1.35;">
              {{ $post['title'] }}
            </h2>
            <p style="color: var(--text-mid); font-size: 0.92rem; line-height: 1.65; flex: 1;">{{ $post['excerpt'] }}</p>
            <div class="blog-meta">
              <span><i class="far fa-calendar" style="margin-right: 6px;"></i>{{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}</span>
              <span><i class="far fa-clock" style="margin-right: 6px;"></i>{{ $post['reading_minutes'] }} min read</span>
              <span style="margin-left: auto; color: var(--accent); font-weight: 700;">View article <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></span>
            </div>
          </div>
        </a>
      </article>
      @empty
      <p style="grid-column: 1/-1; text-align: center; color: #64748b;">No articles found.</p>
      @endforelse
    </div>

    @if($lastPage > 1)
    <nav class="blog-pager" aria-label="Blog pagination">
      @if($page > 1)
        <a href="{{ route('blog', ['page' => $page - 1]) }}"><i class="fas fa-chevron-left"></i></a>
      @else
        <span class="disabled"><i class="fas fa-chevron-left"></i></span>
      @endif

      @for($i = 1; $i <= $lastPage; $i++)
        @if($i === $page)
          <span class="active">{{ $i }}</span>
        @else
          <a href="{{ route('blog', ['page' => $i]) }}">{{ $i }}</a>
        @endif
      @endfor

      @if($page < $lastPage)
        <a href="{{ route('blog', ['page' => $page + 1]) }}"><i class="fas fa-chevron-right"></i></a>
      @else
        <span class="disabled"><i class="fas fa-chevron-right"></i></span>
      @endif
    </nav>
    @endif

    <div style="margin-top: 56px; text-align: center;">
      <p style="color: #64748b; margin-bottom: 16px;">Need help applying these ideas to your roadmap?</p>
      <a href="{{ route('package.selection.step1') }}" class="btn-primary" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none; padding:14px 28px; border-radius:999px;">
        <i class="fas fa-rocket"></i> Start a package quote
      </a>
    </div>
  </div>
</section>

<section class="tour-packages" style="background: linear-gradient(135deg, var(--accent) 0%, var(--accent-bright) 100%); padding: 72px 0;">
  <div class="container">
    <div style="text-align: center; max-width: 640px; margin: 0 auto;">
      <h2 style="font-family: var(--font-display); font-size: 2rem; font-weight: 800; color: #fff; margin-bottom: 12px;">Subscribe for quarterly briefings</h2>
      <p style="color: rgba(255,255,255,0.92); margin-bottom: 22px;">We respect your inbox—only high-signal updates on launches, security advisories, and special offers.</p>
      <div style="display:flex; gap:10px; flex-wrap:wrap; justify-content:center;">
        <input type="email" id="blog_newsletter_email" placeholder="Work email" style="flex:1; min-width:220px; padding:14px 18px; border-radius:999px; border:none; font-size:1rem;">
        <button type="button" style="background: var(--navy); color:#fff; border:none; padding:14px 26px; border-radius:999px; font-weight:700; cursor:pointer;" onclick="alert('Thanks! Connect this button to your newsletter provider (Mailchimp, SendGrid, etc.).');">
          Notify Me
        </button>
      </div>
    </div>
  </div>
</section>

<script>
  (function () {
    var input = document.getElementById('blog-filter');
    if (!input) return;
    input.addEventListener('input', function () {
      var q = this.value.trim().toLowerCase();
      document.querySelectorAll('#blog-grid .blog-card').forEach(function (card) {
        var hay = (card.getAttribute('data-title') || '') + ' ' + (card.getAttribute('data-category') || '') + ' ' + (card.getAttribute('data-excerpt') || '');
        card.style.display = !q || hay.indexOf(q) !== -1 ? '' : 'none';
      });
    });
  })();
</script>
@endsection
