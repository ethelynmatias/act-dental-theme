@extends('layouts.layout', ['title' => 'Networking'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Membership Benefits</span>
    <h1>Expert Dentist Network: Redefining Success in Private Dental Practices.</h1>
    <p>Local meetings, online forums, virtual fireside chats, and a national conference — Smile Source gives you a professional family to lean on 24/7.</p>
    <div class="sr-page-hero-actions">
      <a href="/v2/join" class="sr-btn sr-btn-primary">Join the Network</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-grid-4">
      <div class="sr-stat-card"><div class="sr-stat-card__num">1,100+</div><div class="sr-stat-card__label">Member dentists in the network</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">650</div><div class="sr-stat-card__label">Member locations nationwide</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">100s</div><div class="sr-stat-card__label">Of events hosted locally &amp; nationally each year</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">24/7</div><div class="sr-stat-card__label">Online forum access to peer advice</div></div>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-section-head">
      <span class="sr-eyebrow">How We Connect</span>
      <h2>Multiple Ways to Engage — In-Person and Online.</h2>
    </div>
    <div class="sr-grid-3">
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-map-marker-alt"></i></div><h3>Local Member Meetings</h3><p>Local group leaders hold in-person member meetings in cities across America — a chance to get advice, take CE courses, and connect with like-minded dentists in your area.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-comments"></i></div><h3>Online Forums</h3><p>Crowdsource the knowledge of hundreds of highly qualified peers online 24/7. Ask questions, share experiences, and find solutions from dentists who've been in your shoes.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-fire"></i></div><h3>Virtual Fireside Chats</h3><p>Regular virtual conversations featuring top dentists and industry experts — intimate, engaging, and focused on the real challenges of private practice ownership.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-laptop"></i></div><h3>Webinars &amp; Online Events</h3><p>Frequent online educational and networking sessions designed for busy dentists who want to grow without leaving the office.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-star"></i></div><h3>The Exchange Annual Conference</h3><p>The ultimate hub for inspiration, connection, and innovation. Earn up to 17 CE credits, access exclusive vendor deals, and network with 1,100+ peers in San Antonio.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-user-friends"></i></div><h3>Mentorship Program</h3><p>Connect with experienced practice owners who have navigated the same challenges. Mentorship helps you avoid common pitfalls and make informed decisions faster.</p></div>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-grid-2">
      <div>
        <span class="sr-eyebrow">Community Over Competition</span>
        <h2>When Dentists Help Dentists, Everyone Wins.</h2>
        <p>Smile Source networking events encourage collaboration, shared insights, and open discussion of common challenges. This is not a trade association — it's a community of people who genuinely root for each other.</p>
        <p>By connecting with other practice owners on similar journeys, members share experiences, learn from each other's successes and challenges, and find inspiration to overcome obstacles.</p>
        <a href="/v2/exchange-2026" class="sr-btn sr-btn-primary" style="margin-top:24px;">See Our Upcoming Events</a>
      </div>
      <div class="sr-review-card" style="height:fit-content;">
        <div class="sr-stars">★★★★★</div>
        <blockquote>"I would have never thought about my dental practice as the business it is today. It's exciting to be connected with other colleagues struggling and succeeding in similar ways. To know I have a professional family to lean on is priceless."</blockquote>
        <div class="sr-review-author">
          <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="v2-review-avatar-img">
          <div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>Stop practicing dentistry alone.</h2>
    <p>Join the nation's largest private practice dental network and find your professional family.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
      <a href="/v2/exchange-2026" class="sr-btn sr-btn-outline-white">See The Exchange 2026</a>
    </div>
  </div>
</section>
@endsection
