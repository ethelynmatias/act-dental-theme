@extends('layouts.v1-layout', ['title' => 'Supercharge Your Savings'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Membership Benefits</div>
    <h1>Maximize Savings on Dental Technology, Equipment, Labs, and Services.</h1>
    <p>With over $1 billion in combined purchasing power, Smile Source has vetted and negotiated rates with the industry's largest vendors — savings that go straight to your bottom line.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/join" class="cp-btn cp-btn-primary cp-btn-lg">Start Saving Today</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Talk to an Expert</a>
    </div>
  </div>
</section>

{{-- SAVINGS STATS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">40%</div>
        <div class="cp-stat-card__label">Average savings on dental supplies</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">30%</div>
        <div class="cp-stat-card__label">Average savings on lab work</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">45%</div>
        <div class="cp-stat-card__label">Savings with dental manufacturers</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">$6M+</div>
        <div class="cp-stat-card__label">In member rebates earned annually</div>
      </div>
    </div>
  </div>
</section>

{{-- HOW IT WORKS --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-content-grid-2">
      <div>
        <div class="cp-eyebrow">How It Works</div>
        <h2>Vetted, Negotiated, and Ready for You.</h2>
        <p>Smile Source does the hard work so you don't have to. Our team has spent years building relationships with the industry's top vendors, negotiating group rates that no solo practice could achieve alone.</p>
        <p>When you join Smile Source, you instantly access these pre-negotiated rates across dental supplies, laboratory services, technology, equipment, and more. Your dedicated Member Success Specialist will help you connect with the right vendors and ensure you're getting maximum value from day one.</p>
        <div class="cp-check-list">
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> 75+ vetted vendor relationships</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Proactive rebate tracking so you never miss out</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Vendors actively help you maximize purchases and profits</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Savings across supplies, labs, technology, and services</div>
        </div>
      </div>
      <div>
        <div class="cp-content-grid-2" style="gap:16px;">
          <div class="cp-icon-card">
            <div class="cp-icon-card__icon"><i class="fas fa-flask"></i></div>
            <h3>Dental Supplies</h3>
            <p>Save up to 40% on everyday consumables from top-tier suppliers — vetted to ensure quality you can trust.</p>
          </div>
          <div class="cp-icon-card">
            <div class="cp-icon-card__icon"><i class="fas fa-microscope"></i></div>
            <h3>Lab Work</h3>
            <p>Up to 30% off dental laboratory services including crowns, veneers, implants, and more at leading labs.</p>
          </div>
          <div class="cp-icon-card">
            <div class="cp-icon-card__icon"><i class="fas fa-cogs"></i></div>
            <h3>Equipment &amp; Technology</h3>
            <p>Deep discounts on imaging, 3D printing, CAD/CAM, and other advanced dental technology systems.</p>
          </div>
          <div class="cp-icon-card">
            <div class="cp-icon-card__icon"><i class="fas fa-tags"></i></div>
            <h3>Manufacturer Rebates</h3>
            <p>Up to 45% savings directly with manufacturers — plus exclusive rebate programs that reward your loyalty.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- VENDOR LOGOS --}}
<section class="cp-logos" style="border-top:1px solid var(--cp-border);border-bottom:1px solid var(--cp-border);">
  <div class="container">
    <p class="cp-logos-label">Our Elite Vendor Partners</p>
    <div class="cp-logos-row">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/ClearCorrect_Logo_2023_Left_Align_white.png?width=150&height=60" alt="ClearCorrect">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/DENTSPLYSIRONA_white.png?width=150&height=44" alt="DENTSPLY SIRONA">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Envista%20Logo_white.png?width=150&height=50" alt="Envista">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Henry%20Schein%20Dental%20logo%20white-01%20copy.png?width=150&height=28" alt="Henry Schein">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/microdental_logoWhite@4x.png?width=150&height=22" alt="microdental">
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>Start saving on day one.</h2>
    <p>Members access all negotiated vendor rates immediately upon joining — no waiting, no approval process.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
