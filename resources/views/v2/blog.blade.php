@extends('layouts.layout', ['title' => 'Blog'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Resources &amp; Education</span>
    <h1>Practice-Building Resources and Education.</h1>
    <p>Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
  </div>
</section>

<section class="sr-section" style="padding-top:80px;">
  <div class="sr-container">
    <div class="sr-grid-3">

      <a href="#" class="sr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy" class="sr-blog-img">
        <div class="sr-blog-body">
          <div class="sr-blog-cat">Dental Technology</div>
          <h4>Restoring Wellness Through Financial Empathy</h4>
          <div class="sr-blog-date">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</div>
        </div>
      </a>

      <a href="#" class="sr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform" class="sr-blog-img">
        <div class="sr-blog-body">
          <div class="sr-blog-cat">Practice Management</div>
          <h4>Curve's Practice Management Platform Streamlines Workflows</h4>
          <div class="sr-blog-date">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="sr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics" class="sr-blog-img">
        <div class="sr-blog-body">
          <div class="sr-blog-cat">Dental Education</div>
          <h4>Ergonomics: Protecting Your Greatest Asset — Yourself</h4>
          <div class="sr-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</div>
        </div>
      </a>

      <a href="#" class="sr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety" class="sr-blog-img">
        <div class="sr-blog-body">
          <div class="sr-blog-cat">Dental Education</div>
          <h4>Dental Care for Patients with Autism and Dental Anxiety</h4>
          <div class="sr-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="sr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI" class="sr-blog-img">
        <div class="sr-blog-body">
          <div class="sr-blog-cat">Dental Technology</div>
          <h4>Why Smile Source and Private Practices Are Partnering with BOLA AI</h4>
          <div class="sr-blog-date">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="sr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month" class="sr-blog-img">
        <div class="sr-blog-body">
          <div class="sr-blog-cat">Dental Marketing</div>
          <h4>Elevating the Standard of Care During Oral Cancer Awareness Month</h4>
          <div class="sr-blog-date">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="sr-cta-band" style="margin-top:80px;">
  <div class="sr-container">
    <h2>Get more insights in your inbox.</h2>
    <p>Join Smile Source and access the full library of practice-building resources, webinars, and CE courses.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
