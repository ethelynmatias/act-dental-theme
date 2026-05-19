@extends('layouts.v1-layout', ['title' => 'About Us'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Why Smile Source</div>
    <h1>Retain 100% Ownership and Autonomy of Your Private Dental Practice.</h1>
    <p>Since 2006, Smile Source has grown to 1,100+ dentists across 650 member locations — all independently owned, all fiercely thriving.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/join" class="cp-btn cp-btn-primary cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

{{-- STATS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">1,100+</div>
        <div class="cp-stat-card__label">Member dentists nationwide</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">$1B+</div>
        <div class="cp-stat-card__label">Combined purchasing power</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">650</div>
        <div class="cp-stat-card__label">Member locations</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">20+</div>
        <div class="cp-stat-card__label">Years serving independent dentists</div>
      </div>
    </div>
  </div>
</section>

{{-- STORY --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-content-grid-2">
      <div>
        <div class="cp-eyebrow">Our Story</div>
        <h2>Helping Private Practice Dentists Make More Money with Less Stress.</h2>
        <p>Smile Source was founded in 2006 with a single mission: empower independent dentists to compete on equal footing with corporate dental groups — without giving up what makes them special.</p>
        <p>Today, with over a billion dollars of combined purchasing power, Smile Source delivers deep discounts and rebates that go straight to your bottom line. Our 1,100+ member network gives every independent practice the leverage of a large organization while preserving the autonomy that made you want to own your own practice in the first place.</p>
        <p>Smile Source is not a DSO. We offer DSO-level support — group purchasing, staff recruiting, in-house dental plans, patient financing, marketing, and strategic consulting — while you maintain 100% ownership and complete autonomy.</p>
        <a href="/v1/join" class="cp-btn cp-btn-primary">Become a Member</a>
      </div>
      <div>
        <img src="{{ asset('images/v1/hero-home.gif') }}" alt="Smile Source Network" style="width:100%;border-radius:16px;box-shadow:0 12px 48px rgba(26,43,74,.14);">
      </div>
    </div>
  </div>
</section>

{{-- NOT A DSO --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Independence Matters</div>
      <h2>All the Power of a DSO. None of the Trade-offs.</h2>
      <p>86% of the dental market is still independent. Smile Source keeps it that way — by giving you the resources to stay strong without surrendering what you built.</p>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-building"></i></div>
        <h3>100% Ownership</h3>
        <p>You keep full ownership and control of your practice. Smile Source is a support network, not an acquiring group.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-handshake"></i></div>
        <h3>Complete Autonomy</h3>
        <p>Make your own clinical and business decisions. No mandates, no corporate override, no production quotas.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-piggy-bank"></i></div>
        <h3>DSO-Level Savings</h3>
        <p>Access the same group purchasing power large DSOs use — up to 40% off supplies, 30% off labs, $6M+ in member rebates annually.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-users"></i></div>
        <h3>1,100+ Peer Network</h3>
        <p>Connect with fellow independent practice owners in local meetings, online forums, and national events.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-chart-line"></i></div>
        <h3>Growth Support</h3>
        <p>Recruiting, benefits, payroll, patient financing, marketing, and strategic consulting — all under one membership.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>World-Class Education</h3>
        <p>Hundreds of CE courses annually — in-person and online — for you and your entire team.</p>
      </div>
    </div>
  </div>
</section>

{{-- TESTIMONIALS --}}
<section class="cp-testimonials">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Member Stories</div>
      <h2>Community Over Competition.</h2>
    </div>
    <div class="cp-testimonials-grid">
      <div class="cp-testimonial-card">
        <div class="cp-stars">★★★★★</div>
        <blockquote>"I would have never thought about my dental practice as the business it is today. To know I have a professional family to lean on is priceless."</blockquote>
        <div class="cp-testimonial-author">
          <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="cp-avatar-img">
          <div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div>
        </div>
      </div>
      <div class="cp-testimonial-card">
        <div class="cp-stars">★★★★★</div>
        <blockquote>"Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists and humans in the industry."</blockquote>
        <div class="cp-testimonial-author">
          <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="cp-avatar-img">
          <div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>More thrive, less strive.</h2>
    <p>Join 1,100+ independent dentists who've found their competitive edge through the Smile Source network.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
