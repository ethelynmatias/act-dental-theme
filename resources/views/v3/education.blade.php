@extends('layouts.layout', ['title' => 'Continuing Education'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Membership Benefits</span>
    <h1>Enhance Your Dental Practice Management Skills with Educational Resources.</h1>
    <p>Hundreds of CE courses annually — in-person and online — for dentists, hygienists, dental assistants, and front office team members. Topics span everything your practice needs to grow.</p>
    <div class="pwr-page-hero-actions">
      <a href="/v3/join" class="pwr-btn pwr-btn--primary pwr-btn--large">Access Education</a>
      <a href="/v3/exchange-2026" class="pwr-btn pwr-btn--outline-white pwr-btn--large">See The Exchange 2026</a>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-grid-4">
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">100s</div><div class="pwr-sub-stat__label">Of CE courses offered annually</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">17</div><div class="pwr-sub-stat__label">CE credits available at The Exchange annual conference</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">4</div><div class="pwr-sub-stat__label">Team roles covered — dentists, hygienists, assistants, front office</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">3</div><div class="pwr-sub-stat__label">Affinity groups with specialized learning tracks</div></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-head">
      <span class="pwr-sub-eyebrow">What You'll Learn</span>
      <h2 class="pwr-sub-title">A Curriculum Built for Private Practice Owners.</h2>
      <p class="pwr-sub-desc">Smile Source provides an extensive continuing education curriculum available in-person and online — covering both the clinical and business sides of running a successful independent practice.</p>
    </div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-briefcase"></i></div><h3>Practice Management</h3><p>Scheduling, billing, overhead control, KPIs, and the systems that let you run your practice like a business without losing the joy of dentistry.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-bullhorn"></i></div><h3>Marketing &amp; Patient Growth</h3><p>Digital marketing, patient acquisition, case acceptance, and retention strategies that grow your schedule — taught by dentists who've done it themselves.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-procedures"></i></div><h3>New Procedures</h3><p>Expand your clinical offerings with courses on implants, sedation, orthodontics, cosmetics, and the latest evidence-based techniques.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-cube"></i></div><h3>3D Technology &amp; Digital Dentistry</h3><p>CBCT imaging, CAD/CAM workflows, digital impressions, 3D printing — hands-on education on the technology reshaping modern dental practices.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-smile"></i></div><h3>Patient Experience</h3><p>Customer service, communication skills, and creating an office culture that turns new patients into lifelong advocates for your practice.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-users-cog"></i></div><h3>Team Development</h3><p>Leadership, hiring, onboarding, retention, and team culture — education for your front office, hygiene team, and assistants, not just the dentist.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--dark">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2" style="align-items:center;">
      <div>
        <span class="pwr-sub-eyebrow">Annual Conference</span>
        <h2 class="pwr-sub-title">Earn Up to 17 CE Credits at The Exchange 2026</h2>
        <div style="display:flex;gap:24px;flex-wrap:wrap;margin:16px 0;font-size:15px;opacity:.85;">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p class="pwr-sub-desc">The Exchange is Smile Source's flagship annual event — CE, new products, exclusive vendor deals, and peer connections from across the country. Courses designed for your whole team.</p>
        <ul class="pwr-sub-check" style="margin:16px 0;">
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Cutting-edge clinical &amp; business courses</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Exclusive vendor pricing &amp; product launches</li>
        </ul>
        <a href="/v3/exchange-2026" class="pwr-btn pwr-btn--primary pwr-btn--large">Register Now</a>
      </div>
      <div class="pwr-sub-event-badge">
        <div style="font-size:52px;font-weight:800;letter-spacing:-2px;">2026</div>
        <div style="font-size:22px;font-weight:700;margin:8px 0 4px;">The Exchange</div>
        <div style="width:40px;height:2px;background:currentColor;margin:12px auto;opacity:.4;"></div>
        <div style="font-size:18px;font-weight:600;">Sept 9–12</div>
        <div style="font-size:14px;opacity:.7;margin-top:4px;">San Antonio, TX</div>
      </div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container">
    <h2>Invest in your team. Invest in your future.</h2>
    <p>Smile Source members access incredible savings on education from top names in the industry — for themselves and their entire team.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/join" class="pwr-btn pwr-btn--white pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
