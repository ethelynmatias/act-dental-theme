@extends('layouts.v1-layout', ['title' => 'Networking'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Membership Benefits</div>
    <h1>Expert Dentist Network: Redefining Success in Private Dental Practices.</h1>
    <p>Local meetings, online forums, virtual fireside chats, and a national conference — Smile Source gives you a professional family to lean on 24/7.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/join" class="cp-btn cp-btn-primary cp-btn-lg">Join the Network</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

{{-- COMMUNITY STATS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">1,100+</div>
        <div class="cp-stat-card__label">Member dentists in the network</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">650</div>
        <div class="cp-stat-card__label">Member locations nationwide</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">100s</div>
        <div class="cp-stat-card__label">Of events hosted locally &amp; nationally each year</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">24/7</div>
        <div class="cp-stat-card__label">Online forum access to peer advice</div>
      </div>
    </div>
  </div>
</section>

{{-- NETWORKING OPPORTUNITIES --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">How We Connect</div>
      <h2>Multiple Ways to Engage — In-Person and Online.</h2>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-map-marker-alt"></i></div>
        <h3>Local Member Meetings</h3>
        <p>Local group leaders hold in-person member meetings in cities across America — a chance to get advice, take CE courses, and connect with like-minded dentists in your area.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-comments"></i></div>
        <h3>Online Forums</h3>
        <p>Crowdsource the knowledge of hundreds of highly qualified peers online 24/7. Ask questions, share experiences, and find solutions from dentists who've been in your shoes.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-fire"></i></div>
        <h3>Virtual Fireside Chats</h3>
        <p>Regular virtual conversations featuring top dentists and industry experts — intimate, engaging, and focused on the real challenges of private practice ownership.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-laptop"></i></div>
        <h3>Webinars &amp; Online Events</h3>
        <p>Frequent online educational and networking sessions designed for busy dentists who want to grow without leaving the office.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-star"></i></div>
        <h3>The Exchange Annual Conference</h3>
        <p>The ultimate hub for inspiration, connection, and innovation. Earn up to 17 CE credits, access exclusive vendor deals, and network with 1,100+ peers in San Antonio.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-user-friends"></i></div>
        <h3>Mentorship Program</h3>
        <p>Connect with experienced practice owners who have navigated the same challenges. Mentorship helps you avoid common pitfalls and make informed decisions faster.</p>
      </div>
    </div>
  </div>
</section>

{{-- COMMUNITY OVER COMPETITION --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-2">
      <div>
        <div class="cp-eyebrow">Community Over Competition</div>
        <h2>When Dentists Help Dentists, Everyone Wins.</h2>
        <p>Smile Source networking events encourage collaboration, shared insights, and open discussion of common challenges. This is not a trade association — it's a community of people who genuinely root for each other.</p>
        <p>By connecting with other practice owners on similar journeys, members share experiences, learn from each other's successes and challenges, and find inspiration to overcome obstacles. Mentorship plays a crucial role — experienced members provide guidance that helps newer owners avoid costly mistakes and make informed decisions faster.</p>
        <a href="/v1/exchange-2026" class="cp-btn cp-btn-primary" style="margin-top:8px;">See Our Upcoming Events</a>
      </div>
      <div class="cp-testimonials-grid" style="grid-template-columns:1fr;">
        <div class="cp-testimonial-card">
          <div class="cp-stars">★★★★★</div>
          <blockquote>"I would have never thought about my dental practice as the business it is today. It's exciting to be connected with other colleagues struggling and succeeding in similar ways. To know I have a professional family to lean on is priceless."</blockquote>
          <div class="cp-testimonial-author">
            <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="cp-avatar-img">
            <div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>Stop practicing dentistry alone.</h2>
    <p>Join the nation's largest private practice dental network and find your professional family.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/exchange-2026" class="cp-btn cp-btn-outline-white cp-btn-lg">See The Exchange 2026</a>
    </div>
  </div>
</section>

@endsection
