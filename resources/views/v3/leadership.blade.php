@extends('layouts.layout', ['title' => 'Leadership'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Why Smile Source</span>
    <h1>Meet the Leaders Driving Smile Source Membership Success.</h1>
    <p>Our executive team and advisory board bring decades of dental industry experience — all united by a single mission: protect and grow independent dentistry.</p>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-head"><span class="pwr-sub-eyebrow">Executive Leadership</span><h2 class="pwr-sub-title">The Team Behind Your Success</h2></div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-person"><div class="pwr-sub-person__avatar"><i class="fas fa-user-tie"></i></div><div class="pwr-sub-person__name">Dr. Barrett Straub</div><div class="pwr-sub-person__role">Chief Executive Officer</div><p class="pwr-sub-person__bio">A former private practice owner with nearly 20 years of experience in fee-for-service dentistry and oral sedation.</p></div>
      <div class="pwr-sub-person"><div class="pwr-sub-person__avatar"><i class="fas fa-chart-bar"></i></div><div class="pwr-sub-person__name">Brian Chesnut</div><div class="pwr-sub-person__role">COO &amp; CFO</div><p class="pwr-sub-person__bio">With nearly 15 years in finance, accounting, and business leadership, Brian oversees operational and financial strategy.</p></div>
      <div class="pwr-sub-person"><div class="pwr-sub-person__avatar"><i class="fas fa-bullhorn"></i></div><div class="pwr-sub-person__name">Linda Novitt</div><div class="pwr-sub-person__role">Chief Marketing Officer</div><p class="pwr-sub-person__bio">Senior marketing executive with deep experience leading go-to-market strategy across complex, multi-product portfolios.</p></div>
      <div class="pwr-sub-person"><div class="pwr-sub-person__avatar"><i class="fas fa-handshake"></i></div><div class="pwr-sub-person__name">Tom Rimmer</div><div class="pwr-sub-person__role">VP of Sales</div><p class="pwr-sub-person__bio">25 years of leadership and revenue growth in the dental and orthodontic industries.</p></div>
      <div class="pwr-sub-person"><div class="pwr-sub-person__avatar"><i class="fas fa-users"></i></div><div class="pwr-sub-person__name">Ryan Steck</div><div class="pwr-sub-person__role">VP of Member Services</div><p class="pwr-sub-person__bio">A 23-year veteran of the dental industry, holding various roles at Henry Schein since 2002.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-head"><span class="pwr-sub-eyebrow">Advisory Board</span><h2 class="pwr-sub-title">Guided by Exceptional Dentists</h2><p class="pwr-sub-desc">Clinicians, educators, and practice growth experts committed to elevating independent dentistry.</p></div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card" style="text-align:center;"><div class="pwr-sub-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Jeff Osborne</h3><p>Leading Smile Source into a new era for independent dentistry.</p></div>
      <div class="pwr-sub-card" style="text-align:center;"><div class="pwr-sub-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Gary Radz</h3><p>Nationally recognized cosmetic dentist and CE speaker.</p></div>
      <div class="pwr-sub-card" style="text-align:center;"><div class="pwr-sub-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Mike Maroon</h3><p>Private practice leader and advocate for independent dentist networks.</p></div>
      <div class="pwr-sub-card" style="text-align:center;"><div class="pwr-sub-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Timothy Bizga</h3><p>Expert in practice management and dental team development.</p></div>
      <div class="pwr-sub-card" style="text-align:center;"><div class="pwr-sub-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Mark Donald</h3><p>Experienced practitioner focused on practice profitability and growth.</p></div>
      <div class="pwr-sub-card" style="text-align:center;"><div class="pwr-sub-card__icon" style="margin:0 auto 12px;"><i class="fas fa-tooth"></i></div><h3>Dr. Bernee Dunson</h3><p>Champion of diversity and inclusion in independent dentistry.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container">
    <h2>Ready to join a network that has your back?</h2>
    <p>Connect with our team and discover how Smile Source can help your practice thrive.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--white pwr-btn--large">Let's Talk</a>
      <a href="/v3/join" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Join Now</a>
    </div>
  </div>
</section>
@endsection
