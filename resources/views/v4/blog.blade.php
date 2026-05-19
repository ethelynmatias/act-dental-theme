@extends('layouts.layout', ['title' => 'Blog'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Resources &amp; Education</div>
    <h1>Practice-Building Resources and Education.</h1>
    <p>Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
  </div>
</section>

<section class="v4-sub-section" style="padding-top:80px;">
  <div class="container">
    <div class="v4-sub-grid-3">

      <a href="#" class="v4-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy" class="v4-blog-img">
        <div class="v4-blog-body">
          <div class="v4-blog-cat">Dental Technology</div>
          <h4>Restoring Wellness Through Financial Empathy</h4>
          <div class="v4-blog-date">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</div>
        </div>
      </a>

      <a href="#" class="v4-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform" class="v4-blog-img">
        <div class="v4-blog-body">
          <div class="v4-blog-cat">Practice Management</div>
          <h4>Curve's Practice Management Platform Streamlines Workflows</h4>
          <div class="v4-blog-date">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="v4-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics" class="v4-blog-img">
        <div class="v4-blog-body">
          <div class="v4-blog-cat">Dental Education</div>
          <h4>Ergonomics: Protecting Your Greatest Asset — Yourself</h4>
          <div class="v4-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</div>
        </div>
      </a>

      <a href="#" class="v4-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety" class="v4-blog-img">
        <div class="v4-blog-body">
          <div class="v4-blog-cat">Dental Education</div>
          <h4>Dental Care for Patients with Autism and Dental Anxiety</h4>
          <div class="v4-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="v4-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI" class="v4-blog-img">
        <div class="v4-blog-body">
          <div class="v4-blog-cat">Dental Technology</div>
          <h4>Why Smile Source and Private Practices Are Partnering with BOLA AI</h4>
          <div class="v4-blog-date">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="v4-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month" class="v4-blog-img">
        <div class="v4-blog-body">
          <div class="v4-blog-cat">Dental Marketing</div>
          <h4>Elevating the Standard of Care During Oral Cancer Awareness Month</h4>
          <div class="v4-blog-date">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="v4-sub-cta" style="margin-top:80px;">
  <div class="container">
    <h2>Get more insights in your inbox.</h2>
    <p>Join Smile Source and access the full library of practice-building resources, webinars, and CE courses.</p>
    <div class="v4-sub-cta-row">
      <a href="/v4/join" class="btn-accent btn-cta">Join Now</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
