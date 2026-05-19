@extends('layouts.v1-layout', ['title' => 'Smile Source Foundation'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Why Smile Source</div>
    <h1>The Smile Source Foundation.</h1>
    <p>Funded by generous contributions from Smile Source members and vendor partners, the Foundation embodies the spirit of community and compassion within the dental profession.</p>
  </div>
</section>

{{-- MISSION --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-content-grid-2">
      <div>
        <div class="cp-eyebrow">Our Mission</div>
        <h2>Giving Back to the Communities We Serve.</h2>
        <p>The Smile Source Foundation channels the generosity of our member dentists and vendor partners into meaningful community impact — ensuring that the communities that support our practices receive the care they deserve.</p>
        <p>Member dentists across the country regularly volunteer their time and skills at clinics like the Interfaith Dental Clinic, providing dental care to those in need. Many also participate in Donated Dental Services, delivering care to patients in extreme need who have nowhere else to turn.</p>
        <p>Through the Foundation, Smile Source amplifies what individual dentists are already doing — turning acts of personal generosity into a coordinated, national movement of community care.</p>
      </div>
      <div>
        <div class="cp-content-grid-2" style="gap:16px;">
          <div class="cp-stat-card">
            <div class="cp-stat-card__num"><i class="fas fa-hands-helping" style="font-size:2rem;"></i></div>
            <div class="cp-stat-card__label" style="margin-top:8px;">Community Clinics Supported</div>
          </div>
          <div class="cp-stat-card">
            <div class="cp-stat-card__num"><i class="fas fa-tooth" style="font-size:2rem;"></i></div>
            <div class="cp-stat-card__label" style="margin-top:8px;">Free Dental Services Provided</div>
          </div>
          <div class="cp-stat-card">
            <div class="cp-stat-card__num"><i class="fas fa-heart" style="font-size:2rem;"></i></div>
            <div class="cp-stat-card__label" style="margin-top:8px;">Donated Dental Services Participants</div>
          </div>
          <div class="cp-stat-card">
            <div class="cp-stat-card__num"><i class="fas fa-users" style="font-size:2rem;"></i></div>
            <div class="cp-stat-card__label" style="margin-top:8px;">Member & Vendor Donors</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- HOW WE GIVE BACK --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Programs &amp; Initiatives</div>
      <h2>How the Foundation Makes an Impact</h2>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-clinic-medical"></i></div>
        <h3>Community Clinic Support</h3>
        <p>Member dentists volunteer at Interfaith Dental Clinics and community health fairs, providing oral care to underserved populations in their local areas.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-gift"></i></div>
        <h3>Donated Dental Services</h3>
        <p>Smile Source members participate in Donated Dental Services to provide comprehensive care to individuals with disabilities or who are elderly and medically fragile.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Dental Education Grants</h3>
        <p>The Foundation supports the next generation of independent dentists through scholarships, CE grants, and resources that help early-career practitioners thrive.</p>
      </div>
    </div>
  </div>
</section>

{{-- VALUES --}}
<section class="cp-content-section cp-content-section--dark">
  <div class="container" style="text-align:center;max-width:720px;">
    <div class="cp-eyebrow">Community Over Competition</div>
    <h2 style="color:#fff;">In the true spirit of community over competition.</h2>
    <p style="color:rgba(255,255,255,.75);">Smile Source exists because dentists are better together. The Foundation is proof that when we combine our resources and passion, we can transform not just our practices — but our communities.</p>
    <a href="/v1/lets-talk" class="cp-btn cp-btn-primary cp-btn-lg" style="margin-top:8px;">Get Involved</a>
  </div>
</section>

@endsection
