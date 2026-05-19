@extends('layouts.v1-layout', ['title' => 'Webinars & Live Events'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Events</div>
    <h1>Live and Virtual Events Hosted by Smile Source Members and CE Courses.</h1>
    <p>Online webinars, forum conversations, regional meetings, and local study clubs — frequent opportunities for Smile Source members to share, learn, and grow together.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/exchange-2026" class="cp-btn cp-btn-primary cp-btn-lg">The Exchange 2026</a>
      <a href="/v1/join" class="cp-btn cp-btn-outline-white cp-btn-lg">Join to Access Events</a>
    </div>
  </div>
</section>

{{-- EVENT TYPES --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Ways to Connect &amp; Learn</div>
      <h2>Events Designed for Busy Independent Dentists.</h2>
      <p>Whether you prefer in-person connection or online convenience, Smile Source delivers multiple touchpoints each month for members to engage, collaborate, and grow.</p>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-laptop"></i></div>
        <h3>Online Webinars</h3>
        <p>Frequent live webinars covering practice management, clinical education, marketing strategies, and technology updates — available on-demand after airing for members.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-map-marker-alt"></i></div>
        <h3>Local Member Meetings</h3>
        <p>Local group leaders hold in-person meetings in cities across America each month. These are intimate, practical sessions that bring your city's Smile Source community together.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-city"></i></div>
        <h3>Regional Meetings</h3>
        <p>Larger regional gatherings that bring together members from across a geographic area for CE courses, vendor presentations, and collaborative networking.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-fire"></i></div>
        <h3>Virtual Fireside Chats</h3>
        <p>Intimate virtual conversations with leading dentists and industry experts — candid discussions on the real challenges and breakthroughs of private practice ownership.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-book-open"></i></div>
        <h3>Study Clubs</h3>
        <p>The Smile Source Study Club format brings small groups of dentists together around focused clinical or business topics — deep dives that generate real, implementable takeaways.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-star"></i></div>
        <h3>The Exchange 2026</h3>
        <p>The annual flagship event — San Antonio, TX, September 9–12. Earn up to 17 CE credits, access exclusive vendor deals, and connect with 1,100+ independent dentists.</p>
      </div>
    </div>
  </div>
</section>

{{-- EXCHANGE PROMO --}}
<section class="cp-event">
  <div class="container">
    <div class="cp-event-inner">
      <div class="cp-event-content">
        <div class="cp-eyebrow">Flagship Annual Event</div>
        <h2>The Exchange 2026 — Registrations Now Open</h2>
        <div class="cp-event-meta">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p>Where private practice dentists ignite their passion, sparking unparalleled growth and learning. Featuring CE courses for your whole team, exclusive vendor deals, and networking with the nation's top independent dentists.</p>
        <ul class="cp-hero-checks" style="margin-bottom:24px;">
          <li><i class="fas fa-check-circle"></i> Up to 17 CE credits</li>
          <li><i class="fas fa-check-circle"></i> Exclusive vendor pricing on the floor</li>
          <li><i class="fas fa-check-circle"></i> Network with 1,100+ independent dentists</li>
        </ul>
        <a href="/v1/exchange-2026" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
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
    <h2>Access all events with your membership.</h2>
    <p>Members enjoy incredible savings on education from top names in the industry — and access to every Smile Source event, local and national.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
