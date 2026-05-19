@extends('layouts.layout', ['title' => 'About Us'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Why Smile Source</div>
    <h1>Retain 100% Ownership and Autonomy of Your Private Dental Practice.</h1>
    <p>Since 2006, Smile Source has grown to 1,100+ dentists across 650 member locations — all independently owned, all fiercely thriving.</p>
    <div class="v4-page-hero-actions">
      <a href="/v4/join" class="btn-accent btn-cta">Join Now</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Let's Talk</a>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--alt">
  <div class="container">
    <div class="v4-sub-grid-4">
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">1,100+</div><div class="v4-sub-stat__label">Member dentists nationwide</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">$1B+</div><div class="v4-sub-stat__label">Combined purchasing power</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">650</div><div class="v4-sub-stat__label">Member locations</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">20+</div><div class="v4-sub-stat__label">Years serving independent dentists</div></div>
    </div>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-grid-2">
      <div>
        <div class="v4-overline">Our Story</div>
        <h2>Helping Private Practice Dentists Make More Money with Less Stress.</h2>
        <p>Since 2006, we've grown our network to 1,100+ dentists across 650 member locations. With over a billion dollars of combined purchasing power, Smile Source delivers deep discounts and rebates that go straight to your bottom line.</p>
        <p>Smile Source is not a DSO. You get all the support that a DSO offers — while you maintain 100% ownership and complete autonomy.</p>
        <a href="/v4/join" class="btn-accent btn-cta" style="margin-top:8px;">Become a Member</a>
      </div>
      <div><img src="{{ asset('images/v1/hero-home.gif') }}" alt="Smile Source Network" style="width:100%;border-radius:var(--radius-lg);display:block;box-shadow:var(--shadow);"></div>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--alt">
  <div class="container">
    <div class="v4-sub-head"><div class="v4-overline">Independence Matters</div><h2>All the Power of a DSO. None of the Trade-offs.</h2><p>86% of the dental market is still independent. Smile Source keeps it that way.</p></div>
    <div class="v4-sub-grid-3">
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-building"></i></div><h3>100% Ownership</h3><p>You keep full ownership and control. Smile Source is a support network, not an acquiring group.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-handshake"></i></div><h3>Complete Autonomy</h3><p>Make your own clinical and business decisions. No mandates, no corporate override.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-piggy-bank"></i></div><h3>DSO-Level Savings</h3><p>Up to 40% off supplies, 30% off labs, $6M+ in member rebates annually.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-users"></i></div><h3>1,100+ Peer Network</h3><p>Connect with fellow independent owners in local meetings, forums, and national events.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-chart-line"></i></div><h3>Growth Support</h3><p>Recruiting, benefits, payroll, patient financing, marketing, and consulting — one membership.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>World-Class Education</h3><p>Hundreds of CE courses annually for you and your entire team.</p></div>
    </div>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-head"><div class="v4-overline">Member Stories</div><h2>Community Over Competition.</h2></div>
    <div class="v4-sub-grid-2">
      <div class="v4-sub-testimonial"><div class="v4-sub-stars">★★★★★</div><blockquote>"I would have never thought about my dental practice as the business it is today. To know I have a professional family to lean on is priceless."</blockquote><div class="v4-sub-testimonial-author"><img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg" class="v4-avatar-img"><div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div></div></div>
      <div class="v4-sub-testimonial"><div class="v4-sub-stars">★★★★★</div><blockquote>"Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists in the industry."</blockquote><div class="v4-sub-testimonial-author"><img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="v4-avatar-img"><div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div></div></div>
    </div>
  </div>
</section>

<section class="v4-sub-cta">
  <div class="container">
    <h2>More thrive, less strive.</h2>
    <p>Join 1,100+ independent dentists who've found their competitive edge through Smile Source.</p>
    <div class="v4-sub-cta-row">
      <a href="/v4/join" class="btn-accent btn-cta">Join Now</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
