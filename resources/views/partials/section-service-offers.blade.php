{{--
  Shared "What We Offer" section with wave cards.
  Expected: $label, $labelIcon, $title (safe HTML), $sub, $offers (icon/title/desc/link).
--}}
@include('partials.wave-sprite')
<section class="services svc-offers" style="background: var(--off-white);">
  <div class="container">
    <div class="section-header">
      <div class="section-label"><i class="fas {{ $labelIcon ?? 'fa-layer-group' }}"></i> {{ $label }}</div>
      <h2 class="section-title">{!! $title !!}</h2>
      <p class="section-sub">{{ $sub }}</p>
    </div>
    <div class="osc osc-grid">
      @foreach($offers as $offer)
        @include('partials.osc-card', [
          'icon'  => $offer['icon'],
          'title' => $offer['title'],
          'desc'  => $offer['desc'],
          'link'  => $offer['link'] ?? null,
          'image' => $offer['image'] ?? null,
        ])
      @endforeach
    </div>
  </div>
</section>
