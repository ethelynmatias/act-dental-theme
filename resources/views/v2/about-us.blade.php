@extends('layouts.layout', ['title' => 'About Us'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Why Smile Source</span>
    <h1>Retain 100% Ownership and Autonomy of Your Private Dental Practice.</h1>
    <p>Since 2006, Smile Source has grown to 1,100+ dentists across 650 member locations — all independently owned, all fiercely thriving.</p>
    <div class="sr-page-hero-actions">
      <a href="/v2/join" class="sr-btn sr-btn-primary">Join Now</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-grid-4">
      <div class="sr-stat-card"><div class="sr-stat-card__num">1,100+</div><div class="sr-stat-card__label">Member dentists nationwide</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">$1B+</div><div class="sr-stat-card__label">Combined purchasing power</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">650</div><div class="sr-stat-card__label">Member locations</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">20+</div><div class="sr-stat-card__label">Years serving independent dentists</div></div>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-grid-2">
      <div>
        <span class="sr-eyebrow">Our Story</span>
        <h2>Helping Private Practice Dentists Make More Money with Less Stress.</h2>
        <p>Since 2006, we've grown our network to 1,100+ dentists across 650 member locations. With over a billion dollars of combined purchasing power, Smile Source delivers deep discounts and rebates that go straight to your bottom line.</p>
        <p>Smile Source is not a DSO. You get all the support that a DSO offers — group purchasing, staff recruiting, in-house dental plans, patient financing, marketing, and strategic consulting — while you maintain 100% ownership and complete autonomy.</p>
        <a href="/v2/join" class="sr-btn sr-btn-primary">Become a Member</a>
      </div>
      <div><img src="{{ asset('images/v1/hero-home.gif') }}" alt="Smile Source Network" style="width:100%;display:block;box-shadow:var(--shadow);"></div>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-section-head">
      <span class="sr-eyebrow">Independence Matters</span>
      <h2>All the Power of a DSO. None of the Trade-offs.</h2>
      <p>86% of the dental market is still independent. Smile Source keeps it that way.</p>
    </div>
    <div class="sr-grid-3">
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-building"></i></div><h3>100% Ownership</h3><p>You keep full ownership and control of your practice. Smile Source is a support network, not an acquiring group.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-handshake"></i></div><h3>Complete Autonomy</h3><p>Make your own clinical and business decisions. No mandates, no corporate override, no production quotas.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-piggy-bank"></i></div><h3>DSO-Level Savings</h3><p>Up to 40% off supplies, 30% off labs, $6M+ in member rebates annually.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-users"></i></div><h3>1,100+ Peer Network</h3><p>Connect with fellow independent practice owners in local meetings, online forums, and national events.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-chart-line"></i></div><h3>Growth Support</h3><p>Recruiting, benefits, payroll, patient financing, marketing, and strategic consulting — all under one membership.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>World-Class Education</h3><p>Hundreds of CE courses annually — in-person and online — for you and your entire team.</p></div>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-section-head"><span class="sr-eyebrow">Member Stories</span><h2>Community Over Competition.</h2></div>
    <div class="sr-grid-2">
      <div class="sr-review-card"><div class="sr-stars">★★★★★</div><blockquote>"I would have never thought about my dental practice as the business it is today. To know I have a professional family to lean on is priceless."</blockquote><div class="sr-review-author"><img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="v2-review-avatar-img"><div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div></div></div>
      <div class="sr-review-card"><div class="sr-stars">★★★★★</div><blockquote>"Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists and humans in the industry."</blockquote><div class="sr-review-author"><img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="v2-review-avatar-img"><div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div></div></div>
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>More thrive, less strive.</h2>
    <p>Join 1,100+ independent dentists who've found their competitive edge through the Smile Source network.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
