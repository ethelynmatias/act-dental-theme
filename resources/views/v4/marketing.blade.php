@extends('layouts.layout', ['title' => 'Marketing Support'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Membership Benefits</div>
    <h1>Effective Marketing Strategies for Your Dental Practice's Success.</h1>
    <p>Geodemographic targeting, digital presence optimization, and high-intent patient campaigns — the same marketing power that large groups use, built for independent practices.</p>
    <div class="v4-page-hero-actions">
      <a href="/v4/join" class="btn-accent btn-cta">Get Marketing Support</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Talk to Us</a>
    </div>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-head">
      <div class="v4-overline">What We Offer</div>
      <h2>Data-Driven Marketing That Actually Works.</h2>
      <p>Smile Source studies where people live, work, and travel near your practice — then helps you deploy the right messages to the right people at the right time.</p>
    </div>
    <div class="v4-sub-grid-3">
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-map-marked-alt"></i></div><h3>Geodemographic Targeting</h3><p>We analyze consumer travel patterns and credit demographic data near your practice to identify your highest-value patient segments.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-search"></i></div><h3>SEO &amp; Digital Presence</h3><p>We identify opportunities in your website, SEO, and social media strategy and help you implement best practices to win more new patients from organic search.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-store"></i></div><h3>Google Business Profile</h3><p>For most practices, optimizing your GBP is the highest-ROI marketing effort available — placing you at the top of "near me" searches.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-ad"></i></div><h3>Google Ads</h3><p>Well-executed paid search delivers immediate visibility. Each ad is paired to a dedicated landing page to convert search intent into scheduled appointments.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-video"></i></div><h3>Authentic Video Marketing</h3><p>A 30-second introduction filmed in your office connects with patients far more effectively than expensive produced commercials.</p></div>
      <div class="v4-sub-card"><div class="v4-sub-card__icon"><i class="fas fa-share-alt"></i></div><h3>Social Media Strategy</h3><p>Consistent, on-brand social presence that builds community trust and keeps your practice top of mind for patients ready to schedule.</p></div>
    </div>
  </div>
</section>

<section class="v4-sub-section v4-sub-section--alt">
  <div class="container">
    <div class="v4-sub-grid-2">
      <div>
        <div class="v4-overline">Our Approach</div>
        <h2>The Same Marketing Power as the Largest Dental Groups.</h2>
        <p>Corporate dental groups invest heavily in sophisticated data and marketing teams. As a Smile Source member, you access that same firepower — through vetted marketing partners who understand dental and are accountable to your results.</p>
        <ul class="v4-sub-check">
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Consumer demographic analysis</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Travel pattern &amp; proximity mapping</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Website audit &amp; SEO gap analysis</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> Paid search setup and optimization</li>
          <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> High-intent patient campaign management</li>
        </ul>
        <a href="/v4/join" class="btn-accent btn-cta" style="margin-top:24px;display:inline-flex;">Join to Access Marketing Support</a>
      </div>
      <div>
        <img src="{{ asset('images/v1/challenges.png') }}" alt="Marketing Strategy" style="width:100%;border-radius:16px;box-shadow:0 12px 48px rgba(26,43,74,.14);">
      </div>
    </div>
  </div>
</section>

<section class="v4-sub-cta">
  <div class="container">
    <h2>Stop guessing. Start growing.</h2>
    <p>Smile Source marketing support is included in your membership — no retainer, no agency markup.</p>
    <div class="v4-sub-cta-row">
      <a href="/v4/join" class="btn-accent btn-cta">Join Now</a>
      <a href="/v4/lets-talk" class="btn-outline-light btn-cta">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
