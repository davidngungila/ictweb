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
@endphp

<style>
  .blog-hero { 
    min-height: 55vh; 
    display: flex;
    align-items: center;
    background: var(--navy);
    position: relative;
    overflow: hidden;
  }
  .blog-hero-content {
    position: relative;
    z-index: 2;
    width: 100%;
  }
  .featured-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    box-shadow: 0 30px 60px rgba(0,0,0,0.12);
    margin-top: -100px;
    position: relative;
    z-index: 10;
  }
  @media (max-width: 991px) {
    .featured-card { grid-template-columns: 1fr; margin-top: -50px; }
    .featured-img { height: 300px !important; }
  }
  .featured-img {
    height: 500px;
    width: 100%;
    object-fit: cover;
  }
  .featured-body {
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .category-pill {
    display: inline-block;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 20px;
  }
  .blog-card-modern {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    height: 100%;
  }
  .blog-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-color: var(--accent);
  }
  .blog-card-img-wrap {
    position: relative;
    height: 240px;
    overflow: hidden;
  }
  .blog-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
  }
  .blog-card-modern:hover .blog-card-img-wrap img {
    transform: scale(1.1);
  }
  .blog-content-modern {
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }
  .blog-title-modern {
    font-family: var(--font-display);
    font-size: 1.4rem;
    font-weight: 800;
    color: var(--navy);
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s;
  }
  .blog-card-modern:hover .blog-title-modern {
    color: var(--accent);
  }
  .blog-meta-modern {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 0.85rem;
    color: #718096;
    margin-top: auto;
    padding-top: 20px;
    border-top: 1px solid #f1f5f9;
  }
  .search-container-advanced {
    background: white;
    padding: 10px;
    border-radius: 50px;
    display: flex;
    align-items: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    max-width: 600px;
    margin: 40px auto 0;
    border: 1px solid #e2e8f0;
  }
  .search-container-advanced input {
    border: none;
    padding: 10px 20px;
    flex: 1;
    font-size: 1rem;
    outline: none;
    background: transparent;
  }
  .search-container-advanced i {
    color: var(--accent);
    margin-left: 20px;
  }
  .newsletter-section-modern {
    background: var(--navy);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
    border-radius: 40px;
    margin: 80px 0;
  }
</style>

<section class="blog-hero">
  <div class="hero-bg-img" style="opacity: 0.1; background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1600&q=80');"></div>
  <div class="hero-grid-overlay"></div>
  <div class="container blog-hero-content">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;">
      <div class="hero-badge" style="margin: 0 auto 20px;"><span class="dot"></span> The Lab</div>
      <h1 class="hero-title">Knowledge & <span>Digital Strategy</span></h1>
      <p class="hero-subtitle">
        Expert insights on software engineering, cloud architecture, and cybersecurity tailored for the East African digital landscape.
      </p>
      
      <div class="search-container-advanced">
        <i class="fas fa-search"></i>
        <input type="text" id="blog-filter-advanced" placeholder="Search articles, guides, and playbooks...">
      </div>
    </div>
  </div>
</section>

<section style="background: var(--off-white); padding-bottom: 100px;">
  <div class="container">
    @if($featuredPost && $page == 1)
    <article class="featured-card">
      <div class="featured-img-wrap">
        <img src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}" class="featured-img">
      </div>
      <div class="featured-body">
        <span class="category-pill" style="background: rgba(26,111,196,0.1); color: {{ $featuredPost['category_color'] }};">
          Featured Article
        </span>
        <h2 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 900; color: var(--navy); margin-bottom: 20px; line-height: 1.2;">
          {{ $featuredPost['title'] }}
        </h2>
        <p style="color: var(--text-mid); font-size: 1.1rem; line-height: 1.7; margin-bottom: 30px;">
          {{ $featuredPost['excerpt'] }}
        </p>
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 35px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <i class="far fa-calendar-alt" style="color: var(--accent);"></i>
            <span style="font-size: 0.9rem; font-weight: 600; color: #718096;">{{ \Carbon\Carbon::parse($featuredPost['date'])->format('F j, Y') }}</span>
          </div>
          <div style="display: flex; align-items: center; gap: 10px;">
            <i class="far fa-clock" style="color: var(--accent);"></i>
            <span style="font-size: 0.9rem; font-weight: 600; color: #718096;">{{ $featuredPost['reading_minutes'] }} min read</span>
          </div>
        </div>
        <a href="{{ route('blog.show', $featuredPost['slug']) }}" class="btn-primary" style="align-self: flex-start; padding: 16px 35px; border-radius: 50px;">
          Read Full Story <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
        </a>
      </div>
    </article>
    @endif

    <div class="section-header" style="margin: 100px 0 60px;">
      <div class="section-label">Recent Updates</div>
      <h2 class="section-title">Latest <span>Insights</span></h2>
    </div>

    <div class="services-grid" id="blog-grid-modern">
      @php $displayPosts = ($page == 1 && $featuredPost) ? $remainingPosts : $posts; @endphp
      @forelse($displayPosts as $post)
      <article class="blog-card-modern" data-title="{{ strtolower($post['title']) }}" data-category="{{ strtolower($post['category']) }}">
        <a href="{{ route('blog.show', $post['slug']) }}" style="text-decoration: none; display: flex; flex-direction: column; height: 100%;">
          <div class="blog-card-img-wrap">
            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
            <span style="position: absolute; top: 20px; left: 20px; background: white; color: {{ $post['category_color'] }}; padding: 5px 15px; border-radius: 50px; font-size: 0.7rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
              {{ $post['category'] }}
            </span>
          </div>
          <div class="blog-content-modern">
            <h3 class="blog-title-modern">{{ $post['title'] }}</h3>
            <p style="color: #718096; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px; flex: 1;">
              {{ \Illuminate\Support\Str::limit($post['excerpt'], 120) }}
            </p>
            <div class="blog-meta-modern">
              <span><i class="far fa-calendar-alt" style="margin-right: 8px; color: var(--accent);"></i> {{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}</span>
              <span><i class="far fa-clock" style="margin-right: 8px; color: var(--accent);"></i> {{ $post['reading_minutes'] }}m read</span>
            </div>
          </div>
        </a>
      </article>
      @empty
      <div style="grid-column: 1/-1; text-align: center; padding: 100px 0;">
        <i class="fas fa-search" style="font-size: 3rem; color: #e2e8f0; margin-bottom: 20px; display: block;"></i>
        <h3 style="color: var(--navy);">No articles found matching your criteria</h3>
        <p style="color: #718096;">Try adjusting your search terms or browse all categories.</p>
      </div>
      @endforelse
    </div>

    @if($lastPage > 1)
    <div class="blog-pager" style="margin-top: 80px;">
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

    <!-- Newsletter Section Modern -->
    <div class="newsletter-section-modern">
      <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(26,111,196,0.15) 0%, transparent 70%);"></div>
      <div style="position: absolute; bottom: -50px; left: -50px; width: 250px; height: 250px; background: radial-gradient(circle, rgba(26,111,196,0.1) 0%, transparent 70%);"></div>
      
      <div style="position: relative; z-index: 5; text-align: center; max-width: 700px; margin: 0 auto; padding: 0 30px;">
        <div style="width: 70px; height: 70px; background: var(--accent); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; transform: rotate(10deg);">
          <i class="fas fa-paper-plane" style="color: white; font-size: 1.8rem;"></i>
        </div>
        <h2 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 900; color: white; margin-bottom: 20px;">Stay Ahead of the <span>Tech Curve</span></h2>
        <p style="color: rgba(255,255,255,0.7); font-size: 1.1rem; line-height: 1.8; margin-bottom: 40px;">
          Join 2,000+ technology leaders receiving our bi-weekly digest on digital transformation and engineering excellence in Africa.
        </p>
        <form style="display: flex; gap: 15px; flex-wrap: wrap; background: rgba(255,255,255,0.05); padding: 10px; border-radius: 60px; border: 1px solid rgba(255,255,255,0.1);">
          <input type="email" placeholder="Enter your business email" style="flex: 1; min-width: 250px; background: transparent; border: none; padding: 15px 25px; color: white; outline: none; font-size: 1rem;">
          <button type="submit" class="btn-primary" style="border-radius: 50px; padding: 15px 40px; border: none;">Subscribe Now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const filterInput = document.getElementById('blog-filter-advanced');
    if (filterInput) {
      filterInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        const cards = document.querySelectorAll('.blog-card-modern');
        
        cards.forEach(card => {
          const title = card.getAttribute('data-title');
          const category = card.getAttribute('data-category');
          if (title.includes(query) || category.includes(query)) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    }
  });
</script>
@endsection
