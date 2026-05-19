@extends('layouts.v1-layout', ['title' => 'Blog'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Resources &amp; Education</div>
    <h1>Practice-Building Resources and Education.</h1>
    <p>Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
  </div>
</section>

{{-- BLOG GRID --}}
<section class="cp-blog" style="padding-top:80px;">
  <div class="container">
    <div class="cp-blog-grid cp-blog-grid--lg">

      <a href="#" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Technology</div>
          <h4>Restoring Wellness Through Financial Empathy</h4>
          <div class="cp-blog-date">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</div>
        </div>
      </a>

      <a href="#" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Practice Management</div>
          <h4>Curve's Practice Management Platform Streamlines Workflows</h4>
          <div class="cp-blog-date">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Education</div>
          <h4>Ergonomics: Protecting Your Greatest Asset — Yourself</h4>
          <div class="cp-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</div>
        </div>
      </a>

      <a href="#" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Education</div>
          <h4>Dental Care for Patients with Autism and Dental Anxiety</h4>
          <div class="cp-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Technology</div>
          <h4>Why Smile Source and Private Practices Are Partnering with BOLA AI</h4>
          <div class="cp-blog-date">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Marketing</div>
          <h4>Elevating the Standard of Care During Oral Cancer Awareness Month</h4>
          <div class="cp-blog-date">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band" style="margin-top:80px;">
  <div class="container">
    <h2>Get more insights in your inbox.</h2>
    <p>Join Smile Source and access the full library of practice-building resources, webinars, and CE courses.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
