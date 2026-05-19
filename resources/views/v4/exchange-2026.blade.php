@extends('layouts.layout', ['title' => 'The Exchange 2026'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Annual Conference</div>
    <h1>The Exchange 2026 — San Antonio, TX.</h1>
    <p>September 9–12, 2026 &nbsp;·&nbsp; The ultimate hub for inspiration, connection, and innovation for independent dentists.</p>
    <div class="v4-page-hero-actions">
      <a href="/v4/lets-talk" class="btn-accent btn-cta">Register Now</a>
      <a href="/v4/education" class="btn-outline-light btn-cta">Learn About CE</a>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--alt">
  <div class="container">
    <div class="v4-sub-grid-4">
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">17</div><div class="v4-sub-stat__label">CE credits available for you and your team</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">4</div><div class="v4-sub-stat__label">Days of education, networking &amp; innovation</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">1,100+</div><div class="v4-sub-stat__label">Independent dentists attending</div></div>
      <div class="v4-sub-stat"><div class="v4-sub-stat__num">75+</div><div class="v4-sub-stat__label">Elite vendor partners with exclusive deals</div></div>
    </div>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-head">
      <div class="v4-overline">What to Expect</div>
      <h2>An Experience That Reignites Your Passion for Private Practice.</h2>
      <p>The Smile Source Exchange is where private practice dentists ignite their passion, sparking unparalleled growth and learning in a vibrant atmosphere.</p>
    </div>
    <div class="v4-sub-grid-3">
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>World-Class CE</h3><p>Cutting-edge courses designed for dentists, hygienists, dental assistants, and front office staff. Earn up to 17 CE credits across clinical, technology, and business tracks.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-tags"></i></div><h3>Exclusive Vendor Deals</h3><p>Access The Exchange floor with 75+ elite vendors offering exclusive conference pricing and product demonstrations you won't find anywhere else.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-users"></i></div><h3>Peer Networking</h3><p>Connect with 1,100+ independent dentists from across the country — practitioners who understand your journey and are invested in your success.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-lightbulb"></i></div><h3>Innovation Showcase</h3><p>Discover the latest dental technology, digital workflows, and practice management tools — curated and vetted by Smile Source for independent practices.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-handshake"></i></div><h3>Strategic Meetings</h3><p>Scheduled one-on-ones with vendor partners and Smile Source success specialists to maximize your ROI from every aspect of your membership.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-map-marker-alt"></i></div><h3>San Antonio, TX</h3><p>Experience the energy of The River Walk and the warmth of Texas hospitality — a destination that adds to the magic of The Exchange every year.</p></div>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--dark">
  <div class="container">
    <div class="v4-sub-grid-2" style="align-items:center;">
      <div>
        <div class="v4-overline">Event Details</div>
        <h2>Join Us at The Exchange 2026</h2>
        <div style="display:flex;gap:24px;flex-wrap:wrap;margin:16px 0;font-size:15px;opacity:.8;">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p>Registrations are now open. Space is limited — secure your spot today and take advantage of early-registration pricing. Bring your entire team and maximize your CE credits.</p>
        <ul class="v4-sub-check" style="margin:16px 0;">
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Members-only early-bird pricing available</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Team registrations welcome</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Access exclusive vendor deals on the floor</li>
        </ul>
        <a href="/v4/lets-talk" class="btn-accent btn-cta">Register Now</a>
      </div>
      <div style="text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.1);border:2px solid rgba(255,255,255,.2);border-radius:20px;padding:40px 48px;">
          <div style="font-size:52px;font-weight:800;letter-spacing:-2px;">2026</div>
          <div style="font-size:22px;font-weight:700;margin:8px 0 4px;">The Exchange</div>
          <div style="width:40px;height:2px;background:rgba(255,255,255,.4);margin:12px auto;"></div>
          <div style="font-size:18px;font-weight:600;">Sept 9–12</div>
          <div style="font-size:14px;opacity:.7;margin-top:4px;">San Antonio, TX</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="v4-sub-cta">
  <div class="container">
    <h2>Don't miss the experience of a lifetime.</h2>
    <p>Join 1,100+ independent dentists at the premier event for private practice owners in 2026.</p>
    <div class="v4-sub-cta-row">
      <a href="/v4/lets-talk" class="btn-accent btn-cta">Register Now</a>
      <a href="/v4/join" class="btn-outline-light btn-cta">Join Smile Source</a>
    </div>
  </div>
</section>
@endsection
