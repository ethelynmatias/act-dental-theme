@extends('layouts.layout', ['title' => 'Leadership'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Why Smile Source</span>
    <h1>Meet the Leaders Driving Smile Source Membership Success.</h1>
    <p>Our executive team and advisory board bring decades of dental industry experience — all united by a single mission: protect and grow independent dentistry.</p>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-section-head"><span class="sr-eyebrow">Executive Leadership</span><h2>The Team Behind Your Success</h2></div>
    <div class="sr-grid-3">
      <div class="sr-person-card"><div class="sr-person-card__avatar"><i class="fas fa-user-tie"></i></div><div class="sr-person-card__name">Dr. Barrett Straub</div><div class="sr-person-card__role">Chief Executive Officer</div><p class="sr-person-card__bio">A former private practice owner with nearly 20 years of experience in fee-for-service dentistry and oral sedation.</p></div>
      <div class="sr-person-card"><div class="sr-person-card__avatar"><i class="fas fa-chart-bar"></i></div><div class="sr-person-card__name">Brian Chesnut</div><div class="sr-person-card__role">COO &amp; CFO</div><p class="sr-person-card__bio">With nearly 15 years of experience in finance, accounting, and business leadership, Brian oversees operational and financial strategy.</p></div>
      <div class="sr-person-card"><div class="sr-person-card__avatar"><i class="fas fa-bullhorn"></i></div><div class="sr-person-card__name">Linda Novitt</div><div class="sr-person-card__role">Chief Marketing Officer</div><p class="sr-person-card__bio">A senior marketing executive with deep experience leading go-to-market strategy across complex, multi-product portfolios.</p></div>
      <div class="sr-person-card"><div class="sr-person-card__avatar"><i class="fas fa-handshake"></i></div><div class="sr-person-card__name">Tom Rimmer</div><div class="sr-person-card__role">VP of Sales</div><p class="sr-person-card__bio">25 years of leadership and revenue growth in the dental and orthodontic industries with a proven track record managing large-scale sales organizations.</p></div>
      <div class="sr-person-card"><div class="sr-person-card__avatar"><i class="fas fa-users"></i></div><div class="sr-person-card__name">Ryan Steck</div><div class="sr-person-card__role">VP of Member Services</div><p class="sr-person-card__bio">A 23-year veteran of the dental industry, holding various sales and marketing roles at Henry Schein since 2002.</p></div>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-section-head"><span class="sr-eyebrow">Advisory Board</span><h2>Guided by Exceptional Dentists</h2><p>Clinicians, educators, and practice growth experts committed to elevating independent dentistry.</p></div>
    <div class="sr-grid-4" style="grid-template-columns:repeat(3,1fr);">
      <div class="sr-card" style="text-align:center;"><div class="sr-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Jeff Osborne</h3><p>Leading Smile Source into a new era for independent dentistry.</p></div>
      <div class="sr-card" style="text-align:center;"><div class="sr-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Gary Radz</h3><p>Nationally recognized cosmetic dentist and CE speaker.</p></div>
      <div class="sr-card" style="text-align:center;"><div class="sr-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Mike Maroon</h3><p>Private practice leader and advocate for independent dentist networks.</p></div>
      <div class="sr-card" style="text-align:center;"><div class="sr-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Timothy Bizga</h3><p>Expert in practice management and dental team development.</p></div>
      <div class="sr-card" style="text-align:center;"><div class="sr-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Mark Donald</h3><p>Experienced practitioner focused on practice profitability and growth.</p></div>
      <div class="sr-card" style="text-align:center;"><div class="sr-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Bernee Dunson</h3><p>Champion of diversity and inclusion in independent dentistry.</p></div>
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>Ready to join a network that has your back?</h2>
    <p>Connect with our team and discover how Smile Source can help your practice thrive.</p>
    <div class="sr-cta-actions">
      <a href="/v2/lets-talk" class="sr-btn sr-btn-white">Let's Talk</a>
      <a href="/v2/join" class="sr-btn sr-btn-outline-white">Join Now</a>
    </div>
  </div>
</section>
@endsection
