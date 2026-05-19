@extends('layouts.layout', ['title' => 'Supercharge Your Savings'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Membership Benefits</span>
    <h1>Maximize Savings on Dental Technology, Equipment, Labs, and Services.</h1>
    <p>With over $1 billion in combined purchasing power, Smile Source has vetted and negotiated rates with the industry's largest vendors.</p>
    <div class="pwr-page-hero-actions">
      <a href="/v3/join" class="pwr-btn pwr-btn--primary pwr-btn--large">Start Saving Today</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Talk to an Expert</a>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-grid-4">
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">40%</div><div class="pwr-sub-stat__label">Average savings on dental supplies</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">30%</div><div class="pwr-sub-stat__label">Average savings on lab work</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">45%</div><div class="pwr-sub-stat__label">Savings with dental manufacturers</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">$6M+</div><div class="pwr-sub-stat__label">In member rebates earned annually</div></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2">
      <div>
        <span class="pwr-sub-eyebrow">How It Works</span>
        <h2 class="pwr-sub-title">Vetted, Negotiated, and Ready for You.</h2>
        <p class="pwr-sub-desc">Smile Source does the hard work so you don't have to. Our team has spent years building relationships with the industry's top vendors, negotiating group rates that no solo practice could achieve alone.</p>
        <ul class="pwr-sub-check">
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> 75+ vetted vendor relationships</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Proactive rebate tracking so you never miss out</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Vendors actively help you maximize purchases and profits</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Savings across supplies, labs, technology, and services</li>
        </ul>
      </div>
      <div class="pwr-sub-grid-2" style="gap:16px;">
        <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-flask"></i></div><h3>Dental Supplies</h3><p>Save up to 40% on everyday consumables from top-tier suppliers.</p></div>
        <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-microscope"></i></div><h3>Lab Work</h3><p>Up to 30% off lab services including crowns, veneers, implants, and more.</p></div>
        <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-cogs"></i></div><h3>Equipment &amp; Tech</h3><p>Deep discounts on imaging, 3D printing, CAD/CAM, and advanced systems.</p></div>
        <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-tags"></i></div><h3>Manufacturer Rebates</h3><p>Up to 45% savings directly with manufacturers plus exclusive rebate programs.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container">
    <h2>Start saving on day one.</h2>
    <p>Members access all negotiated vendor rates immediately upon joining — no waiting, no approval process.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/join" class="pwr-btn pwr-btn--white pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
