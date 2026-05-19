@extends('layouts.layout', ['title' => 'The Exchange 2026'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Annual Conference</span>
    <h1>The Exchange 2026 — San Antonio, TX.</h1>
    <p>September 9–12, 2026 &nbsp;·&nbsp; The ultimate hub for inspiration, connection, and innovation for independent dentists.</p>
    <div class="pwr-page-hero-actions">
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--primary pwr-btn--large">Register Now</a>
      <a href="/v3/education" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Learn About CE</a>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-grid-4">
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">17</div><div class="pwr-sub-stat__label">CE credits available for you and your team</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">4</div><div class="pwr-sub-stat__label">Days of education, networking &amp; innovation</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">1,100+</div><div class="pwr-sub-stat__label">Independent dentists attending</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">75+</div><div class="pwr-sub-stat__label">Elite vendor partners with exclusive deals</div></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-head">
      <span class="pwr-sub-eyebrow">What to Expect</span>
      <h2 class="pwr-sub-title">An Experience That Reignites Your Passion for Private Practice.</h2>
      <p class="pwr-sub-desc">The Smile Source Exchange is where private practice dentists ignite their passion, sparking unparalleled growth and learning in a vibrant atmosphere.</p>
    </div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>World-Class CE</h3><p>Cutting-edge courses designed for dentists, hygienists, dental assistants, and front office staff. Earn up to 17 CE credits across clinical, technology, and business tracks.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-tags"></i></div><h3>Exclusive Vendor Deals</h3><p>Access The Exchange floor with 75+ elite vendors offering exclusive conference pricing and product demonstrations you won't find anywhere else.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-users"></i></div><h3>Peer Networking</h3><p>Connect with 1,100+ independent dentists from across the country — practitioners who understand your journey and are invested in your success.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-lightbulb"></i></div><h3>Innovation Showcase</h3><p>Discover the latest dental technology, digital workflows, and practice management tools — curated and vetted by Smile Source for independent practices.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-handshake"></i></div><h3>Strategic Meetings</h3><p>Scheduled one-on-ones with vendor partners and Smile Source success specialists to maximize your ROI from every aspect of your membership.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-map-marker-alt"></i></div><h3>San Antonio, TX</h3><p>Experience the energy of The River Walk and the warmth of Texas hospitality — a destination that adds to the magic of The Exchange every year.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--dark">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2" style="align-items:center;">
      <div>
        <span class="pwr-sub-eyebrow">Event Details</span>
        <h2 class="pwr-sub-title">Join Us at The Exchange 2026</h2>
        <div style="display:flex;gap:24px;flex-wrap:wrap;margin:16px 0;font-size:15px;opacity:.85;">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p class="pwr-sub-desc">Registrations are now open. Space is limited — secure your spot today and take advantage of early-registration pricing. Bring your entire team and maximize your CE credits.</p>
        <ul class="pwr-sub-check" style="margin:16px 0;">
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Members-only early-bird pricing available</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Team registrations welcome</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Access exclusive vendor deals on the floor</li>
        </ul>
        <a href="/v3/lets-talk" class="pwr-btn pwr-btn--primary pwr-btn--large">Register Now</a>
      </div>
      <div class="pwr-sub-event-badge" style="text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.1);border:2px solid rgba(255,255,255,.2);border-radius:20px;padding:40px 48px;">
          <div style="font-size:52px;font-weight:800;letter-spacing:-2px;">2026</div>
          <div style="font-size:22px;font-weight:700;margin:8px 0 4px;">The Exchange</div>
          <div style="width:40px;height:2px;background:currentColor;margin:12px auto;opacity:.4;"></div>
          <div style="font-size:18px;font-weight:600;">Sept 9–12</div>
          <div style="font-size:14px;opacity:.7;margin-top:4px;">San Antonio, TX</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container">
    <h2>Don't miss the experience of a lifetime.</h2>
    <p>Join 1,100+ independent dentists at the premier event for private practice owners in 2026.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--white pwr-btn--large">Register Now</a>
      <a href="/v3/join" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Join Smile Source</a>
    </div>
  </div>
</section>
@endsection
