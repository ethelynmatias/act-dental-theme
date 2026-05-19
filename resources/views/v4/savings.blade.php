@extends('layouts.layout', ['title' => 'Supercharge Your Savings'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Membership Benefits</div>
    <h1>Maximize Savings on Dental Technology, Equipment, Labs, and Services.</h1>
    <p>With over $1 billion in combined purchasing power, Smile Source has vetted and negotiated rates with the industry's largest vendors.</p>
    <div class="v4-page-hero-actions">
      <a href="/v4/join" class="btn-accent btn-cta">Start Saving Today</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Talk to an Expert</a>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--alt">
  <div class="container">
    <div class="v4-sub-grid-4">
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">40%</div><div class="v4-sub-stat__label">Average savings on dental supplies</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">30%</div><div class="v4-sub-stat__label">Average savings on lab work</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">45%</div><div class="v4-sub-stat__label">Savings with dental manufacturers</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">$6M+</div><div class="v4-sub-stat__label">In member rebates earned annually</div></div>
    </div>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-grid-2">
      <div>
        <div class="v4-overline">How It Works</div>
        <h2>Vetted, Negotiated, and Ready for You.</h2>
        <p>Smile Source does the hard work so you don't have to. Our team has spent years building relationships with the industry's top vendors, negotiating group rates no solo practice could achieve alone.</p>
        <ul class="v4-sub-check">
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> 75+ vetted vendor relationships</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Proactive rebate tracking so you never miss out</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Vendors actively help you maximize purchases and profits</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Savings across supplies, labs, technology, and services</li>
        </ul>
      </div>
      <div class="v4-sub-grid-2" style="gap:16px;">
        <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-flask"></i></div><h3>Dental Supplies</h3><p>Save up to 40% on everyday consumables from top-tier suppliers.</p></div>
        <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-microscope"></i></div><h3>Lab Work</h3><p>Up to 30% off lab services including crowns, veneers, implants, and more.</p></div>
        <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-cogs"></i></div><h3>Equipment &amp; Tech</h3><p>Deep discounts on imaging, 3D printing, CAD/CAM, and advanced systems.</p></div>
        <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-tags"></i></div><h3>Manufacturer Rebates</h3><p>Up to 45% savings directly with manufacturers plus exclusive rebate programs.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="v4-sub-cta">
  <div class="container">
    <h2>Start saving on day one.</h2>
    <p>Members access all negotiated vendor rates immediately upon joining — no waiting, no approval process.</p>
    <div class="v4-sub-cta-row">
      <a href="/v4/join" class="btn-accent btn-cta">Join Now</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
