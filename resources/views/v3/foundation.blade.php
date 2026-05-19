@extends('layouts.layout', ['title' => 'Smile Source Foundation'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Why Smile Source</span>
    <h1>The Smile Source Foundation.</h1>
    <p>Funded by generous contributions from Smile Source members and vendor partners, the Foundation embodies the spirit of community and compassion within the dental profession.</p>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2">
      <div>
        <span class="pwr-sub-eyebrow">Our Mission</span>
        <h2 class="pwr-sub-title">Giving Back to the Communities We Serve.</h2>
        <p class="pwr-sub-desc">The Foundation channels the generosity of our member dentists and vendor partners into meaningful community impact. Member dentists regularly volunteer at Interfaith Dental Clinics and participate in Donated Dental Services.</p>
        <p class="pwr-sub-desc">Through the Foundation, Smile Source amplifies what individual dentists are already doing — turning acts of personal generosity into a coordinated, national movement.</p>
      </div>
      <div class="pwr-sub-grid-2" style="gap:16px;">
        <div class="pwr-sub-stat"><div class="pwr-sub-stat__num"><i class="fas fa-hands-helping" style="font-size:2rem;"></i></div><div class="pwr-sub-stat__label" style="margin-top:8px;">Community Clinics Supported</div></div>
        <div class="pwr-sub-stat"><div class="pwr-sub-stat__num"><i class="fas fa-tooth" style="font-size:2rem;"></i></div><div class="pwr-sub-stat__label" style="margin-top:8px;">Free Dental Services Provided</div></div>
        <div class="pwr-sub-stat"><div class="pwr-sub-stat__num"><i class="fas fa-heart" style="font-size:2rem;"></i></div><div class="pwr-sub-stat__label" style="margin-top:8px;">Donated Dental Services Participants</div></div>
        <div class="pwr-sub-stat"><div class="pwr-sub-stat__num"><i class="fas fa-users" style="font-size:2rem;"></i></div><div class="pwr-sub-stat__label" style="margin-top:8px;">Member &amp; Vendor Donors</div></div>
      </div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-head"><span class="pwr-sub-eyebrow">Programs &amp; Initiatives</span><h2 class="pwr-sub-title">How the Foundation Makes an Impact</h2></div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-clinic-medical"></i></div><h3>Community Clinic Support</h3><p>Member dentists volunteer at Interfaith Dental Clinics, providing oral care to underserved populations in their local areas.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-gift"></i></div><h3>Donated Dental Services</h3><p>Smile Source members provide comprehensive care to individuals with disabilities or who are elderly and medically fragile.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>Dental Education Grants</h3><p>The Foundation supports the next generation through scholarships, CE grants, and resources for early-career practitioners.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container" style="text-align:center;max-width:680px;margin:0 auto;">
    <h2>In the true spirit of community over competition.</h2>
    <p>When we combine our resources and passion, we can transform not just our practices — but our communities.</p>
    <div class="pwr-sub-cta-row"><a href="/v3/lets-talk" class="pwr-btn pwr-btn--primary pwr-btn--large">Get Involved</a></div>
  </div>
</section>
@endsection
