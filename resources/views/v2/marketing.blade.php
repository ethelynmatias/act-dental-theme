@extends('layouts.layout', ['title' => 'Marketing Support'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Membership Benefits</span>
    <h1>Effective Marketing Strategies for Your Dental Practice's Success.</h1>
    <p>Geodemographic targeting, digital presence optimization, and high-intent patient campaigns — the same marketing power that large groups use, built for independent practices.</p>
    <div class="sr-page-hero-actions">
      <a href="/v2/join" class="sr-btn sr-btn-primary">Get Marketing Support</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Talk to Us</a>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-section-head">
      <span class="sr-eyebrow">What We Offer</span>
      <h2>Data-Driven Marketing That Actually Works.</h2>
      <p>Smile Source studies where people live, work, and travel near your practice — then helps you deploy the right messages to the right people at the right time.</p>
    </div>
    <div class="sr-grid-3">
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-map-marked-alt"></i></div><h3>Geodemographic Targeting</h3><p>We analyze consumer travel patterns and credit demographic data near your practice to estimate revenue potential and identify your highest-value patient segments.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-search"></i></div><h3>SEO &amp; Digital Presence</h3><p>We identify opportunities in your website, SEO, and social media strategy and help you implement best practices to win more new patients from organic search.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-store"></i></div><h3>Google Business Profile</h3><p>Your GBP is your digital signage. For most practices, optimizing this free profile is the highest-ROI marketing effort available — placing you at the top of "near me" searches.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-ad"></i></div><h3>Google Ads</h3><p>Well-executed paid search delivers immediate visibility and phone calls. Each ad is paired to a dedicated landing page to convert search intent into scheduled appointments.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-video"></i></div><h3>Authentic Video Marketing</h3><p>A 30-second introduction filmed in your office is more effective than a $5,000 produced commercial. We help you create content that connects — without the production overhead.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-share-alt"></i></div><h3>Social Media Strategy</h3><p>Consistent, on-brand social presence that builds community trust and keeps your practice top of mind for patients who are ready to schedule.</p></div>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-grid-2">
      <div>
        <span class="sr-eyebrow">Our Approach</span>
        <h2>The Same Marketing Power as the Largest Dental Groups.</h2>
        <p>Corporate dental groups invest heavily in sophisticated data and marketing teams. As a Smile Source member, you access that same firepower — through vetted marketing partners who understand dental and are accountable to your results.</p>
        <p>We start by pulling consumer data from credit reporting agencies to analyze the demographics surrounding your practice. That data informs targeting decisions across every channel — so you're never guessing, always optimizing.</p>
        <ul class="sr-check-list">
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Consumer demographic analysis</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Travel pattern &amp; proximity mapping</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Website audit &amp; SEO gap analysis</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Paid search setup and optimization</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> High-intent patient campaign management</li>
        </ul>
        <a href="/v2/join" class="sr-btn sr-btn-primary" style="margin-top:24px;">Join to Access Marketing Support</a>
      </div>
      <div>
        <img src="{{ asset('images/v1/challenges.png') }}" alt="Marketing Strategy" style="width:100%;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,.12);">
      </div>
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>Stop guessing. Start growing.</h2>
    <p>Smile Source marketing support is included in your membership — no retainer, no agency markup.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
