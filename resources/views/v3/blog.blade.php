@extends('layouts.layout', ['title' => 'Blog'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Resources &amp; Education</span>
    <h1>Practice-Building Resources and Education.</h1>
    <p>Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
  </div>
</section>

<section class="pwr-sub-section" style="padding-top:80px;">
  <div class="pwr-container">
    <div class="pwr-sub-grid-3">

      <a href="#" class="pwr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy" class="pwr-blog-img">
        <div class="pwr-blog-body">
          <div class="pwr-blog-cat">Dental Technology</div>
          <h4>Restoring Wellness Through Financial Empathy</h4>
          <div class="pwr-blog-date">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</div>
        </div>
      </a>

      <a href="#" class="pwr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform" class="pwr-blog-img">
        <div class="pwr-blog-body">
          <div class="pwr-blog-cat">Practice Management</div>
          <h4>Curve's Practice Management Platform Streamlines Workflows</h4>
          <div class="pwr-blog-date">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="pwr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics" class="pwr-blog-img">
        <div class="pwr-blog-body">
          <div class="pwr-blog-cat">Dental Education</div>
          <h4>Ergonomics: Protecting Your Greatest Asset — Yourself</h4>
          <div class="pwr-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</div>
        </div>
      </a>

      <a href="#" class="pwr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety" class="pwr-blog-img">
        <div class="pwr-blog-body">
          <div class="pwr-blog-cat">Dental Education</div>
          <h4>Dental Care for Patients with Autism and Dental Anxiety</h4>
          <div class="pwr-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="pwr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI" class="pwr-blog-img">
        <div class="pwr-blog-body">
          <div class="pwr-blog-cat">Dental Technology</div>
          <h4>Why Smile Source and Private Practices Are Partnering with BOLA AI</h4>
          <div class="pwr-blog-date">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="#" class="pwr-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month" class="pwr-blog-img">
        <div class="pwr-blog-body">
          <div class="pwr-blog-cat">Dental Marketing</div>
          <h4>Elevating the Standard of Care During Oral Cancer Awareness Month</h4>
          <div class="pwr-blog-date">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="pwr-sub-cta" style="margin-top:80px;">
  <div class="pwr-container">
    <h2>Get more insights in your inbox.</h2>
    <p>Join Smile Source and access the full library of practice-building resources, webinars, and CE courses.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/join" class="pwr-btn pwr-btn--white pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
