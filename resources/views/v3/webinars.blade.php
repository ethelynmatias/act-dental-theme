@extends('layouts.layout', ['title' => 'Webinars & Live Events'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Events</span>
    <h1>Live and Virtual Events Hosted by Smile Source Members and CE Courses.</h1>
    <p>Online webinars, forum conversations, regional meetings, and local study clubs — frequent opportunities for Smile Source members to share, learn, and grow together.</p>
    <div class="pwr-page-hero-actions">
      <a href="/v3/exchange-2026" class="pwr-btn pwr-btn--primary pwr-btn--large">The Exchange 2026</a>
      <a href="/v3/join" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Join to Access Events</a>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-head">
      <span class="pwr-sub-eyebrow">Ways to Connect &amp; Learn</span>
      <h2 class="pwr-sub-title">Events Designed for Busy Independent Dentists.</h2>
      <p class="pwr-sub-desc">Whether you prefer in-person connection or online convenience, Smile Source delivers multiple touchpoints each month for members to engage, collaborate, and grow.</p>
    </div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-laptop"></i></div><h3>Online Webinars</h3><p>Frequent live webinars covering practice management, clinical education, marketing strategies, and technology updates — available on-demand after airing for members.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-map-marker-alt"></i></div><h3>Local Member Meetings</h3><p>Local group leaders hold in-person meetings in cities across America each month. Intimate, practical sessions that bring your city's Smile Source community together.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-city"></i></div><h3>Regional Meetings</h3><p>Larger regional gatherings that bring together members from across a geographic area for CE courses, vendor presentations, and collaborative networking.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-fire"></i></div><h3>Virtual Fireside Chats</h3><p>Intimate virtual conversations with leading dentists and industry experts — candid discussions on the real challenges and breakthroughs of private practice ownership.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-book-open"></i></div><h3>Study Clubs</h3><p>The Smile Source Study Club format brings small groups of dentists together around focused clinical or business topics — deep dives that generate real, implementable takeaways.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-star"></i></div><h3>The Exchange 2026</h3><p>The annual flagship event — San Antonio, TX, September 9–12. Earn up to 17 CE credits, access exclusive vendor deals, and connect with 1,100+ independent dentists.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--dark">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2" style="align-items:center;">
      <div>
        <span class="pwr-sub-eyebrow">Flagship Annual Event</span>
        <h2 class="pwr-sub-title">The Exchange 2026 — Registrations Now Open</h2>
        <div style="display:flex;gap:24px;flex-wrap:wrap;margin:16px 0;font-size:15px;opacity:.85;">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p class="pwr-sub-desc">Where private practice dentists ignite their passion, sparking unparalleled growth and learning. CE courses for your whole team, exclusive vendor deals, and networking with the nation's top independent dentists.</p>
        <ul class="pwr-sub-check" style="margin:16px 0;">
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Up to 17 CE credits</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Exclusive vendor pricing on the floor</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Network with 1,100+ independent dentists</li>
        </ul>
        <a href="/v3/exchange-2026" class="pwr-btn pwr-btn--primary pwr-btn--large">Register Now</a>
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
    <h2>Access all events with your membership.</h2>
    <p>Members enjoy incredible savings on education from top names in the industry — and access to every Smile Source event, local and national.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/join" class="pwr-btn pwr-btn--white pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
