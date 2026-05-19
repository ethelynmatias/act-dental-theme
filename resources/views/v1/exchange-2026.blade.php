@extends('layouts.v1-layout', ['title' => 'The Exchange 2026'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Annual Conference</div>
    <h1>The Exchange 2026 — San Antonio, TX.</h1>
    <p>September 9–12, 2026 &nbsp;·&nbsp; The ultimate hub for inspiration, connection, and innovation for independent dentists.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/lets-talk" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
      <a href="/v1/membership/education" class="cp-btn cp-btn-outline-white cp-btn-lg">Learn About CE</a>
    </div>
  </div>
</section>

{{-- EVENT HIGHLIGHTS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">17</div>
        <div class="cp-stat-card__label">CE credits available for you and your team</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">4</div>
        <div class="cp-stat-card__label">Days of education, networking &amp; innovation</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">1,100+</div>
        <div class="cp-stat-card__label">Independent dentists attending</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">75+</div>
        <div class="cp-stat-card__label">Elite vendor partners with exclusive deals</div>
      </div>
    </div>
  </div>
</section>

{{-- WHAT TO EXPECT --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">What to Expect</div>
      <h2>An Experience That Reignites Your Passion for Private Practice.</h2>
      <p>The Smile Source Exchange is where private practice dentists ignite their passion, sparking unparalleled growth and learning in a vibrant atmosphere.</p>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>World-Class CE</h3>
        <p>Cutting-edge courses designed for dentists, hygienists, dental assistants, and front office staff. Earn up to 17 CE credits across clinical, technology, and business tracks.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-tags"></i></div>
        <h3>Exclusive Vendor Deals</h3>
        <p>Access The Exchange floor with 75+ elite vendors offering exclusive conference pricing and product demonstrations you won't find anywhere else.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-users"></i></div>
        <h3>Peer Networking</h3>
        <p>Connect with 1,100+ independent dentists from across the country — practitioners who understand your journey and are invested in your success.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-lightbulb"></i></div>
        <h3>Innovation Showcase</h3>
        <p>Discover the latest dental technology, digital workflows, and practice management tools — curated and vetted by Smile Source for independent practices.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-handshake"></i></div>
        <h3>Strategic Meetings</h3>
        <p>Scheduled one-on-ones with vendor partners and Smile Source success specialists to maximize your ROI from every aspect of your membership.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-map-marker-alt"></i></div>
        <h3>San Antonio, TX</h3>
        <p>Experience the energy of The River Walk and the warmth of Texas hospitality — a destination that adds to the magic of The Exchange every year.</p>
      </div>
    </div>
  </div>
</section>

{{-- EVENT DETAILS --}}
<section class="cp-event">
  <div class="container">
    <div class="cp-event-inner">
      <div class="cp-event-content">
        <div class="cp-eyebrow">Event Details</div>
        <h2>Join Us at The Exchange 2026</h2>
        <div class="cp-event-meta">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p>Registrations are now open. Space is limited — secure your spot today and take advantage of early-registration pricing. Bring your entire team and maximize your CE credits.</p>
        <ul class="cp-hero-checks" style="margin-bottom:24px;">
          <li><i class="fas fa-check-circle"></i> Members-only early-bird pricing available</li>
          <li><i class="fas fa-check-circle"></i> Team registrations welcome</li>
          <li><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li><i class="fas fa-check-circle"></i> Access exclusive vendor deals on the floor</li>
        </ul>
        <a href="/v1/lets-talk" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
      </div>
      <div class="cp-event-badge">
        <div class="cp-event-badge-inner">
          <div class="cp-event-year">2026</div>
          <div class="cp-event-name">The Exchange</div>
          <div class="cp-event-divider"></div>
          <div class="cp-event-dates">Sept 9–12</div>
          <div class="cp-event-city">San Antonio, TX</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>Don't miss the experience of a lifetime.</h2>
    <p>Join 1,100+ independent dentists at the premier event for private practice owners in 2026.</p>
    <div class="cp-cta-row">
      <a href="/v1/lets-talk" class="cp-btn cp-btn-white cp-btn-lg">Register Now</a>
      <a href="/v1/join" class="cp-btn cp-btn-outline-white cp-btn-lg">Join Smile Source</a>
    </div>
  </div>
</section>

@endsection
