{{--
  Wave service card.
  Expected: $icon (font-awesome class), $title, $desc, $link (optional ['url','label']), $image (optional URL).
--}}
@php $cardImage = $image ?? (config('site_content.service_card_images')[$title] ?? null); @endphp
<article class="osc-card">
  <div class="osc-media">
    <div class="osc-media-ring" aria-hidden="true"></div>
    @if($cardImage)
      <img class="osc-media-img" src="{{ $cardImage }}" alt="{{ $title }}" loading="lazy" />
      <span class="osc-media-shade" aria-hidden="true"></span>
    @else
      <span class="osc-media-chip"><i class="fas {{ $icon }}"></i></span>
    @endif
    <div class="osc-waves" aria-hidden="true">
      <svg class="osc-wave osc-wave-1"><use href="#osc-wave-1"/></svg>
      <svg class="osc-wave osc-wave-2"><use href="#osc-wave-2"/></svg>
      <svg class="osc-wave osc-wave-3"><use href="#osc-wave-3"/></svg>
    </div>
  </div>
  <div class="osc-body">
    <h3 class="osc-title">{{ $title }}</h3>
    <p class="osc-text">{{ $desc }}</p>
    @if(!empty($link))
      <a href="{{ $link['url'] }}" class="osc-link">{{ $link['label'] }} <i class="fas fa-arrow-right"></i></a>
    @endif
  </div>
</article>
