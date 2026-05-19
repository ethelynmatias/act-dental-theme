@extends('layouts.layout', ['title' => 'Smile Source Foundation'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Why Smile Source</span>
    <h1>The Smile Source Foundation.</h1>
    <p>Funded by generous contributions from Smile Source members and vendor partners, the Foundation embodies the spirit of community and compassion within the dental profession.</p>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-grid-2">
      <div>
        <span class="sr-eyebrow">Our Mission</span>
        <h2>Giving Back to the Communities We Serve.</h2>
        <p>The Smile Source Foundation channels the generosity of our member dentists and vendor partners into meaningful community impact.</p>
        <p>Member dentists regularly volunteer at Interfaith Dental Clinics and participate in Donated Dental Services, providing care to patients in extreme need.</p>
        <p>Through the Foundation, Smile Source amplifies what individual dentists are already doing — turning acts of personal generosity into a coordinated, national movement.</p>
      </div>
      <div class="sr-grid-2" style="gap:16px;">
        <div class="sr-stat-card"><div class="sr-stat-card__num"><i class="fas fa-hands-helping" style="font-size:2rem;"></i></div><div class="sr-stat-card__label" style="margin-top:8px;">Community Clinics Supported</div></div>
        <div class="sr-stat-card"><div class="sr-stat-card__num"><i class="fas fa-tooth" style="font-size:2rem;"></i></div><div class="sr-stat-card__label" style="margin-top:8px;">Free Dental Services Provided</div></div>
        <div class="sr-stat-card"><div class="sr-stat-card__num"><i class="fas fa-heart" style="font-size:2rem;"></i></div><div class="sr-stat-card__label" style="margin-top:8px;">Donated Dental Services Participants</div></div>
        <div class="sr-stat-card"><div class="sr-stat-card__num"><i class="fas fa-users" style="font-size:2rem;"></i></div><div class="sr-stat-card__label" style="margin-top:8px;">Member &amp; Vendor Donors</div></div>
      </div>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-section-head"><span class="sr-eyebrow">Programs &amp; Initiatives</span><h2>How the Foundation Makes an Impact</h2></div>
    <div class="sr-grid-3">
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-clinic-medical"></i></div><h3>Community Clinic Support</h3><p>Member dentists volunteer at Interfaith Dental Clinics, providing oral care to underserved populations in their local areas.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-gift"></i></div><h3>Donated Dental Services</h3><p>Smile Source members participate in Donated Dental Services to provide care to individuals with disabilities or who are elderly and medically fragile.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-graduation-cap"></i></div><h3>Dental Education Grants</h3><p>The Foundation supports the next generation of independent dentists through scholarships, CE grants, and resources.</p></div>
    </div>
  </div>
</section>

<section class="sr-section sr-section--dark" style="text-align:center;">
  <div class="sr-container" style="max-width:680px;">
    <span class="sr-eyebrow" style="color:#60a5fa;">Community Over Competition</span>
    <h2 style="color:#fff;margin-bottom:14px;">In the true spirit of community over competition.</h2>
    <p style="color:rgba(255,255,255,.72);margin-bottom:28px;">Smile Source exists because dentists are better together. The Foundation is proof that when we combine our resources and passion, we can transform our communities.</p>
    <a href="/v2/lets-talk" class="sr-btn sr-btn-primary">Get Involved</a>
  </div>
</section>
@endsection
