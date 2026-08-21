{{--
  Shared service detail sections: "Why Choose Us" benefits + "What's Included" checklist.
  Expected: $whyTitle (safe HTML), $whySub, $benefits (icon/title/desc),
            $incTitle (safe HTML), $incSub, $included (flat list of strings)
--}}
<style>
  .svd-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
  @media (max-width: 800px) { .svd-grid { grid-template-columns: 1fr; } }
  .svd-card {
    display: flex; gap: 20px; align-items: flex-start;
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 18px;
    padding: 28px 26px;
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
  }
  .svd-card:hover { transform: translateY(-6px); box-shadow: 0 22px 48px rgba(6, 43, 77, 0.12); border-color: rgba(12, 69, 128, 0.25); }
  .svd-icon {
    width: 54px; height: 54px; border-radius: 14px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--primary), #0F5FA8);
    color: #fff; font-size: 1.2rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 10px 22px rgba(12, 69, 128, 0.28);
  }
  .svd-card h3 { font-family: var(--font-display); font-size: 1.08rem; font-weight: 900; color: var(--dark); margin-bottom: 8px; }
  .svd-card p { font-size: 0.9rem; color: var(--ink-muted); line-height: 1.7; margin: 0; }

  .svd-wrap {
    max-width: 920px; margin: 0 auto;
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 22px;
    padding: 46px 48px 42px;
    box-shadow: 0 10px 30px rgba(6, 43, 77, 0.06);
  }
  @media (max-width: 640px) { .svd-wrap { padding: 32px 22px; } }
  .svd-checklist { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 14px 30px; }
  @media (max-width: 640px) { .svd-checklist { grid-template-columns: 1fr; } }
  .svd-checklist li { display: flex; align-items: flex-start; gap: 11px; color: var(--ink-muted); font-size: 0.93rem; line-height: 1.6; }
  .svd-checklist li i { color: #10b981; font-size: 0.95rem; margin-top: 4px; flex-shrink: 0; }
</style>

<section class="services" style="background: var(--off-white); padding: 100px 0;">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas fa-award"></i> Why Choose Us</div>
      <h2 class="section-title">{!! $whyTitle !!}</h2>
      <p class="section-sub">{{ $whySub }}</p>
    </div>
    <div class="svd-grid">
      @foreach($benefits as $b)
        <div class="svd-card reveal">
          <div class="svd-icon"><i class="fas {{ $b['icon'] }}"></i></div>
          <div>
            <h3>{{ $b['title'] }}</h3>
            <p>{{ $b['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="services" style="background: #fff; padding: 90px 0;">
  <div class="container">
    <div class="svd-wrap reveal">
      <div class="section-header" style="margin-bottom: 34px;">
        <div class="section-label"><i class="fas fa-clipboard-check"></i> What's Included</div>
        <h2 class="section-title" style="font-size: clamp(1.5rem, 2.6vw, 2rem);">{!! $incTitle !!}</h2>
        <p class="section-sub">{{ $incSub }}</p>
      </div>
      <ul class="svd-checklist">
        @foreach($included as $item)
          <li><i class="fas fa-circle-check"></i> {{ $item }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
