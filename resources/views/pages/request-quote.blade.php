@extends('layouts.app')

@section('title', 'Request a Quote | Jezdan Technology')

@section('meta_tags')
  <meta name="description" content="Request a custom quote for web development, mobile apps, networking, cybersecurity, and IT services in Tanzania. No online payment — our team will respond within 24 hours.">
  <meta property="og:title" content="Request a Quote - Jezdan Technology">
  <meta property="og:description" content="Tell us about your project and receive a tailored official quote from Jezdan Technology.">
@endsection

@section('content')
<style>
  .rq-hero {
    position: relative;
    min-height: 42vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: var(--navy);
  }
  .rq-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 70% 40%, rgba(43,142,255,0.25), transparent),
                radial-gradient(ellipse 50% 50% at 20% 80%, rgba(245,166,35,0.12), transparent);
  }
  .rq-hero-grid {
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
    background-size: 48px 48px;
    mask-image: linear-gradient(to bottom, black 40%, transparent);
  }
  .rq-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px 5% 60px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: center;
  }
  @media (max-width: 900px) {
    .rq-hero-inner { grid-template-columns: 1fr; }
  }
  .rq-hero h1 {
    font-family: var(--font-display);
    font-size: clamp(2rem, 4vw, 3rem);
    color: white;
    line-height: 1.15;
    margin-bottom: 16px;
  }
  .rq-hero h1 span { color: var(--gold); }
  .rq-hero p { color: rgba(255,255,255,0.82); font-size: 1.05rem; max-width: 520px; }
  .rq-trust {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 28px;
  }
  .rq-trust-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: rgba(255,255,255,0.9);
    font-size: 0.9rem;
  }
  .rq-trust-item i { color: var(--success); font-size: 1.1rem; }
  .rq-hero-card {
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: var(--radius);
    padding: 28px;
  }
  .rq-hero-card h3 { color: white; font-size: 1.1rem; margin-bottom: 16px; }
  .rq-steps { list-style: none; }
  .rq-steps li {
    display: flex;
    gap: 14px;
    margin-bottom: 16px;
    color: rgba(255,255,255,0.85);
    font-size: 0.95rem;
  }
  .rq-step-num {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.85rem;
    flex-shrink: 0;
  }

  .rq-main { padding: 56px 5% 80px; background: var(--off-white); }
  .rq-layout {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 340px;
    gap: 32px;
    align-items: start;
  }
  @media (max-width: 960px) {
    .rq-layout { grid-template-columns: 1fr; }
    .rq-sidebar { order: -1; }
  }

  .rq-form-card {
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
  }
  .rq-form-header {
    background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    color: white;
    padding: 24px 28px;
  }
  .rq-form-header h2 { font-size: 1.35rem; margin-bottom: 6px; }
  .rq-form-header p { opacity: 0.85; font-size: 0.92rem; }
  .rq-form-body { padding: 28px; }
  .rq-section {
    margin-bottom: 32px;
    padding-bottom: 28px;
    border-bottom: 1px solid var(--light-gray);
  }
  .rq-section:last-of-type { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
  .rq-section-title {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 18px;
  }
  .rq-section-title i {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: linear-gradient(135deg, rgba(26,111,196,0.12), rgba(43,142,255,0.08));
    color: var(--accent);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .rq-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  @media (max-width: 600px) { .rq-grid-2 { grid-template-columns: 1fr; } }
  .rq-field { margin-bottom: 16px; }
  .rq-field label {
    display: block;
    font-weight: 600;
    font-size: 0.88rem;
    color: var(--text-mid);
    margin-bottom: 6px;
  }
  .rq-field label .req { color: #dc2626; }
  .rq-field input,
  .rq-field select,
  .rq-field textarea {
    width: 100%;
    padding: 12px 14px;
    border: 1.5px solid var(--light-gray);
    border-radius: var(--radius-sm);
    font-family: var(--font-body);
    font-size: 0.95rem;
    transition: border-color 0.2s, box-shadow 0.2s;
  }
  .rq-field input:focus,
  .rq-field select:focus,
  .rq-field textarea:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(26,111,196,0.15);
  }
  .rq-field textarea { min-height: 120px; resize: vertical; }
  .rq-field .error { color: #dc2626; font-size: 0.82rem; margin-top: 4px; }

  .rq-service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
    gap: 10px;
  }
  .rq-service-opt {
    position: relative;
  }
  .rq-service-opt input { position: absolute; opacity: 0; pointer-events: none; }
  .rq-service-opt label {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    padding: 14px 10px;
    border: 2px solid var(--light-gray);
    border-radius: 12px;
    cursor: pointer;
    text-align: center;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--text-mid);
    transition: all 0.2s;
    margin: 0;
  }
  .rq-service-opt input:checked + label {
    border-color: var(--accent);
    background: rgba(26,111,196,0.06);
    color: var(--accent);
  }
  .rq-service-opt label i { font-size: 1.25rem; }

  .rq-package-row { display: none; margin-top: 16px; }
  .rq-package-row.visible { display: block; }
  .rq-package-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 12px;
  }
  .rq-pkg-opt input { position: absolute; opacity: 0; }
  .rq-pkg-opt label {
    display: block;
    padding: 14px;
    border: 2px solid var(--light-gray);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.2s;
    margin: 0;
  }
  .rq-pkg-opt input:checked + label {
    border-color: var(--accent);
    background: rgba(26,111,196,0.05);
  }
  .rq-pkg-opt .pkg-name { font-weight: 700; color: var(--navy); font-size: 0.9rem; }
  .rq-pkg-opt .pkg-badge {
    display: inline-block;
    margin-top: 8px;
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--accent);
    background: rgba(26,111,196,0.1);
    padding: 4px 10px;
    border-radius: 999px;
  }

  .rq-addon-groups { max-height: 320px; overflow-y: auto; padding-right: 4px; }
  .rq-addon-group { margin-bottom: 16px; }
  .rq-addon-group h4 { font-size: 0.85rem; color: var(--text-mid); margin-bottom: 8px; }
  .rq-addon-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 8px;
    margin-bottom: 6px;
    background: var(--off-white);
    cursor: pointer;
  }
  .rq-addon-item:hover { background: #eef3fa; }
  .rq-addon-item input { margin-top: 3px; accent-color: var(--accent); }

  .rq-privacy {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 0.88rem;
    color: var(--text-mid);
    margin-bottom: 20px;
  }
  .rq-privacy input { margin-top: 4px; accent-color: var(--accent); }
  .rq-submit {
    width: 100%;
    padding: 16px 24px;
    border: none;
    border-radius: 999px;
    background: linear-gradient(135deg, var(--accent), var(--accent-bright));
    color: white;
    font-size: 1.05rem;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .rq-submit:hover { transform: translateY(-2px); box-shadow: var(--shadow-hover); }
  .rq-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }

  .rq-sidebar-card {
    background: white;
    border-radius: var(--radius);
    padding: 24px;
    box-shadow: var(--shadow);
    margin-bottom: 20px;
  }
  .rq-sidebar-card h3 { font-size: 1rem; color: var(--navy); margin-bottom: 14px; }
  .rq-contact-line {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
    font-size: 0.9rem;
    color: var(--text-mid);
  }
  .rq-contact-line i {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: var(--off-white);
    color: var(--accent);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .rq-contact-line a { color: var(--accent); text-decoration: none; font-weight: 600; }
  .rq-note {
    background: linear-gradient(135deg, rgba(0,200,150,0.08), rgba(26,111,196,0.06));
    border-left: 4px solid var(--success);
    padding: 16px;
    border-radius: 0 10px 10px 0;
    font-size: 0.88rem;
    color: var(--text-mid);
    line-height: 1.6;
  }
  .rq-alert {
    padding: 14px 18px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-size: 0.92rem;
  }
  .rq-alert-error { background: #fef2f2; color: #991b1b; border: 1px solid #fecaca; }
</style>

<section class="rq-hero">
  <div class="rq-hero-grid"></div>
  <div class="rq-hero-inner">
    <div>
      <div class="hero-badge" style="margin-bottom: 16px;"><span class="dot"></span>Official Quote Request</div>
      <h1>Get Your <span>Custom Quote</span></h1>
      <p>Tell us about your project. Our team will review your requirements and send a tailored proposal — no online payment, no fixed pricing on this page.</p>
      <div class="rq-trust">
        <div class="rq-trust-item"><i class="fas fa-clock"></i> Response within 24 hours</div>
        <div class="rq-trust-item"><i class="fas fa-shield-halved"></i> Confidential & secure</div>
        <div class="rq-trust-item"><i class="fas fa-handshake"></i> Free consultation</div>
      </div>
    </div>
    <div class="rq-hero-card">
      <h3>How it works</h3>
      <ol class="rq-steps">
        <li><span class="rq-step-num">1</span><span>Fill in your contact details and project scope</span></li>
        <li><span class="rq-step-num">2</span><span>We review and prepare an official quote</span></li>
        <li><span class="rq-step-num">3</span><span>You receive proposal via email & WhatsApp</span></li>
        <li><span class="rq-step-num">4</span><span>Agree scope — payment arranged offline only</span></li>
      </ol>
    </div>
  </div>
</section>

<section class="rq-main">
  <div class="rq-layout">
    <div class="rq-form-card">
      <div class="rq-form-header">
        <h2>Project Quote Request Form</h2>
        <p>All fields marked with <span style="color: var(--gold);">*</span> are required.</p>
      </div>
      <div class="rq-form-body">
        @if($errors->any())
          <div class="rq-alert rq-alert-error">
            <strong>Please fix the following:</strong>
            <ul style="margin: 8px 0 0 18px;">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('request.quote.submit') }}" id="quoteForm" novalidate>
          @csrf
          <input type="hidden" name="vertical" id="verticalField" value="{{ old('vertical', $prefill['vertical'] ?? '') }}">

          <div class="rq-section">
            <div class="rq-section-title"><i class="fas fa-user"></i> Your details</div>
            <div class="rq-grid-2">
              <div class="rq-field">
                <label>Full name <span class="req">*</span></label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" required placeholder="John Mwangi">
                @error('full_name')<div class="error">{{ $message }}</div>@enderror
              </div>
              <div class="rq-field">
                <label>Company / organisation</label>
                <input type="text" name="company" value="{{ old('company') }}" placeholder="Optional">
              </div>
            </div>
            <div class="rq-grid-2">
              <div class="rq-field">
                <label>Email <span class="req">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="you@company.co.tz">
                @error('email')<div class="error">{{ $message }}</div>@enderror
              </div>
              <div class="rq-field">
                <label>Phone / WhatsApp <span class="req">*</span></label>
                <input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="+255 7XX XXX XXX">
                @error('phone')<div class="error">{{ $message }}</div>@enderror
              </div>
            </div>
          </div>

          <div class="rq-section">
            <div class="rq-section-title"><i class="fas fa-layer-group"></i> Service & package</div>
            <p style="font-size: 0.88rem; color: var(--text-light); margin-bottom: 14px;">Select the service closest to your needs. Package tiers help us understand scope — final pricing is provided in your official quote.</p>
            <div class="rq-service-grid" id="serviceGrid">
              @foreach($services as $svc)
                <div class="rq-service-opt">
                  <input type="radio" name="service_id" id="svc_{{ $svc['id'] }}" value="{{ $svc['id'] }}"
                    {{ (string) old('service_id', $prefill['service_id'] ?? '') === (string) $svc['id'] ? 'checked' : '' }}>
                  <label for="svc_{{ $svc['id'] }}">
                    <i class="fas {{ $svc['icon'] }}"></i>
                    {{ $svc['name'] }}
                  </label>
                </div>
              @endforeach
            </div>
            @error('service_id')<div class="error" style="margin-top:8px;">{{ $message }}</div>@enderror

            <div class="rq-package-row" id="packageRow">
              <label style="font-weight:600;font-size:0.88rem;color:var(--text-mid);display:block;margin-bottom:10px;">Preferred package tier (optional)</label>
              <div class="rq-package-cards" id="packageCards"></div>
              <input type="hidden" name="package_id" id="packageIdField" value="{{ old('package_id', $prefill['package_id'] ?? '') }}">
            </div>
          </div>

          <div class="rq-section">
            <div class="rq-section-title"><i class="fas fa-puzzle-piece"></i> Add-ons (optional)</div>
            <div class="rq-addon-groups">
              @foreach($addonCatalog as $group)
                <div class="rq-addon-group">
                  <h4>{{ $group['heading'] }}</h4>
                  @foreach($group['items'] as $item)
                    <label class="rq-addon-item">
                      <input type="checkbox" name="selected_addons[]" value="{{ $item['slug'] }}"
                        {{ in_array($item['slug'], old('selected_addons', $prefill['addons'] ?? [])) ? 'checked' : '' }}>
                      <span>
                        <strong style="display:block;color:var(--navy);font-size:0.88rem;">{{ $item['name'] }}</strong>
                        <span style="font-size:0.8rem;color:var(--text-light);">{{ $item['desc'] }}</span>
                      </span>
                    </label>
                  @endforeach
                </div>
              @endforeach
            </div>
          </div>

          <div class="rq-section">
            <div class="rq-section-title"><i class="fas fa-file-lines"></i> Your message</div>
            <div class="rq-field">
              <label>Describe your project <span class="req">*</span></label>
              <textarea name="project_description" required placeholder="Goals, features, target users, integrations, existing systems, deadlines…">{{ old('project_description') }}</textarea>
              @error('project_description')<div class="error">{{ $message }}</div>@enderror
            </div>
            <div class="rq-field">
              <label>How did you hear about us?</label>
              <select name="how_heard">
                <option value="">Optional</option>
                @foreach(['Google search', 'Social media', 'Referral', 'Existing client', 'Event / workshop', 'Other'] as $h)
                  <option value="{{ $h }}" {{ old('how_heard') === $h ? 'selected' : '' }}>{{ $h }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <label class="rq-privacy">
            <input type="checkbox" name="privacy" value="1" {{ old('privacy') ? 'checked' : '' }} required>
            <span>I agree that Jezdan Technology may contact me about this quote request and store my details securely. <span class="req">*</span></span>
          </label>
          @error('privacy')<div class="error" style="margin-bottom:12px;">{{ $message }}</div>@enderror

          <button type="submit" class="rq-submit" id="submitBtn">
            <i class="fas fa-paper-plane"></i> Submit Quote Request
          </button>
        </form>
      </div>
    </div>

    <aside class="rq-sidebar">
      <div class="rq-sidebar-card">
        <h3><i class="fas fa-headset" style="color:var(--accent);margin-right:8px;"></i> Prefer to talk?</h3>
        <div class="rq-contact-line">
          <i class="fab fa-whatsapp"></i>
          <div><a href="https://wa.me/255685847002" target="_blank" rel="noopener">+255 685 847 002</a><br><span style="font-size:0.8rem;">WhatsApp</span></div>
        </div>
        <div class="rq-contact-line">
          <i class="fas fa-envelope"></i>
          <div><a href="mailto:info@jezdantech.com">info@jezdantech.com</a></div>
        </div>
        <div class="rq-contact-line">
          <i class="fas fa-location-dot"></i>
          <div>Moshi, Kilimanjaro<br>Tanzania</div>
        </div>
      </div>
      <div class="rq-sidebar-card rq-note">
        <strong style="color:var(--navy);display:block;margin-bottom:8px;">No online payment</strong>
        This form does not process payments or show fixed prices. You will receive an official quote by email after our team reviews your request.
      </div>
    </aside>
  </div>
</section>

<script>
(function() {
  const packageMatrix = @json($packageMatrix);
  const tourOverlays = @json(\App\Support\PackagePricing::tourVerticalTierOverlays());
  const prefillPackageId = @json(old('package_id', $prefill['package_id'] ?? null));
  const prefillVertical = @json(old('vertical', $prefill['vertical'] ?? null));
  const packageRow = document.getElementById('packageRow');
  const packageCards = document.getElementById('packageCards');
  const packageIdField = document.getElementById('packageIdField');
  const verticalField = document.getElementById('verticalField');

  function renderPackages(serviceId) {
    const sid = String(serviceId);
    const tiers = packageMatrix[sid];
    packageCards.innerHTML = '';
    if (!tiers || serviceId === '0' || serviceId === 0) {
      packageRow.classList.remove('visible');
      packageIdField.value = '';
      return;
    }
    packageRow.classList.add('visible');
    const vertical = verticalField.value;
    Object.entries(tiers).forEach(([tierId, tier]) => {
      let name = tier.name;
      if (vertical === 'tour' && sid === '1' && tourOverlays[tierId]?.name) {
        name = tourOverlays[tierId].name;
      }
      const div = document.createElement('div');
      div.className = 'rq-pkg-opt';
      const checked = String(prefillPackageId) === String(tierId) ? 'checked' : '';
      div.innerHTML = `
        <input type="radio" name="package_radio" id="pkg_${tierId}" value="${tierId}" ${checked}>
        <label for="pkg_${tierId}">
          <div class="pkg-name">${name}</div>
          <span class="pkg-badge">Request Quote</span>
        </label>`;
      packageCards.appendChild(div);
      div.querySelector('input').addEventListener('change', function() {
        packageIdField.value = this.value;
      });
    });
    const selected = packageCards.querySelector('input:checked');
    if (selected) packageIdField.value = selected.value;
  }

  document.querySelectorAll('input[name="service_id"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
      if (this.value === '9') {
        verticalField.value = 'tour';
        document.getElementById('svc_1')?.click();
      } else if (this.value !== '1') {
        verticalField.value = '';
      }
      renderPackages(this.value === '9' ? '1' : this.value);
    });
  });

  const checkedSvc = document.querySelector('input[name="service_id"]:checked');
  if (checkedSvc) {
    const sid = checkedSvc.value === '9' ? '1' : checkedSvc.value;
    if (prefillVertical) verticalField.value = prefillVertical;
    renderPackages(sid);
  }

  document.getElementById('quoteForm').addEventListener('submit', function() {
    document.getElementById('submitBtn').disabled = true;
    document.getElementById('submitBtn').innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting…';
  });
})();
</script>
@endsection
