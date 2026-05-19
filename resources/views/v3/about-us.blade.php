@extends('layouts.layout', ['title' => 'About Us'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-page-hero pwr-eyebrow-tag">Why Smile Source</span>
    <h1>Retain 100% Ownership and Autonomy of Your Private Dental Practice.</h1>
    <p>Since 2006, Smile Source has grown to 1,100+ dentists across 650 member locations — all independently owned, all fiercely thriving.</p>
    <div class="pwr-page-hero-actions">
      <a href="/v3/join" class="pwr-btn pwr-btn--primary pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-grid-4">
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">1,100+</div><div class="pwr-sub-stat__label">Member dentists nationwide</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">$1B+</div><div class="pwr-sub-stat__label">Combined purchasing power</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">650</div><div class="pwr-sub-stat__label">Member locations</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">20+</div><div class="pwr-sub-stat__label">Years serving independent dentists</div></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2">
      <div>
        <span class="pwr-sub-eyebrow">Our Story</span>
        <h2 class="pwr-sub-title">Helping Private Practice Dentists Make More Money with Less Stress.</h2>
        <p class="pwr-sub-desc">Since 2006, we've grown our network to 1,100+ dentists across 650 member locations. With over a billion dollars of combined purchasing power, Smile Source delivers deep discounts and rebates that go straight to your bottom line.</p>
        <p class="pwr-sub-desc">Smile Source is not a DSO. You get all the support that a DSO offers — while you maintain 100% ownership and complete autonomy.</p>
        <a href="/v3/join" class="pwr-btn pwr-btn--primary pwr-btn--large" style="margin-top:16px;">Become a Member</a>
      </div>
      <div><img src="{{ asset('images/v1/hero-home.gif') }}" alt="Smile Source Network" style="width:100%;border-radius:12px;display:block;box-shadow:var(--shadow-card-lt);"></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-head">
      <span class="pwr-sub-eyebrow">Independence Matters</span>
      <h2 class="pwr-sub-title">All the Power of a DSO. None of the Trade-offs.</h2>
      <p class="pwr-sub-desc">86% of the dental market is still independent. Smile Source keeps it that way.</p>
    </div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-building"></i></div><h3>100% Ownership</h3><p>You keep full ownership and control. Smile Source is a support network, not an acquiring group.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-handshake"></i></div><h3>Complete Autonomy</h3><p>Make your own clinical and business decisions. No mandates, no corporate override.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-piggy-bank"></i></div><h3>DSO-Level Savings</h3><p>Up to 40% off supplies, 30% off labs, $6M+ in member rebates annually.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-users"></i></div><h3>1,100+ Peer Network</h3><p>Connect with fellow independent owners in local meetings, forums, and national events.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-chart-line"></i></div><h3>Growth Support</h3><p>Recruiting, benefits, payroll, patient financing, marketing, and consulting — one membership.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>World-Class Education</h3><p>Hundreds of CE courses annually for you and your entire team.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-head"><span class="pwr-sub-eyebrow">Member Stories</span><h2 class="pwr-sub-title">Community Over Competition.</h2></div>
    <div class="pwr-sub-grid-2">
      <div class="pwr-sub-testimonial"><div class="pwr-sub-stars">★★★★★</div><blockquote>"I would have never thought about my dental practice as the business it is today. To know I have a professional family to lean on is priceless."</blockquote><div class="pwr-sub-testimonial-author"><img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg" class="pwr-testimonial-card__avatar-img"><div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div></div></div>
      <div class="pwr-sub-testimonial"><div class="pwr-sub-stars">★★★★★</div><blockquote>"Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists in the industry."</blockquote><div class="pwr-sub-testimonial-author"><img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="pwr-testimonial-card__avatar-img"><div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div></div></div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container">
    <h2>More thrive, less strive.</h2>
    <p>Join 1,100+ independent dentists who've found their competitive edge through Smile Source.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/join" class="pwr-btn pwr-btn--white pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
