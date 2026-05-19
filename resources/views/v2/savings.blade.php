@extends('layouts.layout', ['title' => 'Supercharge Your Savings'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Membership Benefits</span>
    <h1>Maximize Savings on Dental Technology, Equipment, Labs, and Services.</h1>
    <p>With over $1 billion in combined purchasing power, Smile Source has vetted and negotiated rates with the industry's largest vendors — savings that go straight to your bottom line.</p>
    <div class="sr-page-hero-actions">
      <a href="/v2/join" class="sr-btn sr-btn-primary">Start Saving Today</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Talk to an Expert</a>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-grid-4">
      <div class="sr-stat-card"><div class="sr-stat-card__num">40%</div><div class="sr-stat-card__label">Average savings on dental supplies</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">30%</div><div class="sr-stat-card__label">Average savings on lab work</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">45%</div><div class="sr-stat-card__label">Savings with dental manufacturers</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">$6M+</div><div class="sr-stat-card__label">In member rebates earned annually</div></div>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-grid-2">
      <div>
        <span class="sr-eyebrow">How It Works</span>
        <h2>Vetted, Negotiated, and Ready for You.</h2>
        <p>Smile Source does the hard work so you don't have to. Our team has spent years building relationships with the industry's top vendors, negotiating group rates that no solo practice could achieve alone.</p>
        <p>Your dedicated Member Success Specialist will help you connect with the right vendors and ensure you're getting maximum value from day one.</p>
        <ul class="sr-check-list">
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> 75+ vetted vendor relationships</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Proactive rebate tracking so you never miss out</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Vendors actively help you maximize purchases and profits</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Savings across supplies, labs, technology, and services</li>
        </ul>
      </div>
      <div class="sr-grid-2" style="gap:16px;">
        <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-flask"></i></div><h3>Dental Supplies</h3><p>Save up to 40% on everyday consumables from top-tier suppliers — vetted to ensure quality you can trust.</p></div>
        <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-microscope"></i></div><h3>Lab Work</h3><p>Up to 30% off dental laboratory services including crowns, veneers, implants, and more.</p></div>
        <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-cogs"></i></div><h3>Equipment &amp; Technology</h3><p>Deep discounts on imaging, 3D printing, CAD/CAM, and other advanced dental technology systems.</p></div>
        <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-tags"></i></div><h3>Manufacturer Rebates</h3><p>Up to 45% savings directly with manufacturers — plus exclusive rebate programs that reward your loyalty.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>Start saving on day one.</h2>
    <p>Members access all negotiated vendor rates immediately upon joining — no waiting, no approval process.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
