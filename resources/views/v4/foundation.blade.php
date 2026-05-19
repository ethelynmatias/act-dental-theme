@extends('layouts.layout', ['title' => 'Smile Source Foundation'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Why Smile Source</div>
    <h1>The Smile Source Foundation.</h1>
    <p>Funded by generous contributions from Smile Source members and vendor partners, the Foundation embodies the spirit of community and compassion within the dental profession.</p>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-grid-2">
      <div>
        <div class="v4-overline">Our Mission</div>
        <h2>Giving Back to the Communities We Serve.</h2>
        <p>The Foundation channels the generosity of our member dentists and vendor partners into meaningful community impact. Member dentists regularly volunteer at Interfaith Dental Clinics and participate in Donated Dental Services.</p>
        <p>Through the Foundation, Smile Source amplifies individual generosity into a coordinated, national movement of community care.</p>
      </div>
      <div class="v4-sub-grid-2" style="gap:16px;">
        <div class="v4-sub-stat"><div class="v4-sub-stat__num"><i class="fas fa-hands-helping" style="font-size:2rem;"></i></div><div class="v4-sub-stat__label" style="margin-top:8px;">Community Clinics Supported</div></div>
        <div class="v4-sub-stat"><div class="v4-sub-stat__num"><i class="fas fa-tooth" style="font-size:2rem;"></i></div><div class="v4-sub-stat__label" style="margin-top:8px;">Free Dental Services Provided</div></div>
        <div class="v4-sub-stat"><div class="v4-sub-stat__num"><i class="fas fa-heart" style="font-size:2rem;"></i></div><div class="v4-sub-stat__label" style="margin-top:8px;">Donated Dental Services Participants</div></div>
        <div class="v4-sub-stat"><div class="v4-sub-stat__num"><i class="fas fa-users" style="font-size:2rem;"></i></div><div class="v4-sub-stat__label" style="margin-top:8px;">Member &amp; Vendor Donors</div></div>
      </div>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--alt">
  <div class="container">
    <div class="v4-sub-head"><div class="v4-overline">Programs &amp; Initiatives</div><h2>How the Foundation Makes an Impact</h2></div>
    <div class="v4-sub-grid-3">
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-clinic-medical"></i></div><h3>Community Clinic Support</h3><p>Member dentists volunteer at Interfaith Dental Clinics, providing oral care to underserved populations in their local areas.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-gift"></i></div><h3>Donated Dental Services</h3><p>Smile Source members provide comprehensive care to individuals with disabilities or who are elderly and medically fragile.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>Dental Education Grants</h3><p>The Foundation supports the next generation through scholarships, CE grants, and resources for early-career practitioners.</p></div>
    </div>
  </div>
</section>

<section class="v4-sub-cta">
  <div class="container" style="text-align:center;max-width:680px;margin:0 auto;">
    <h2>In the true spirit of community over competition.</h2>
    <p>When we combine our resources and passion, we can transform not just our practices — but our communities.</p>
    <div class="v4-sub-cta-row"><a href="/v4/lets-talk" class="btn-accent btn-cta">Get Involved</a></div>
  </div>
</section>
@endsection
