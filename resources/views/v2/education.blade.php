@extends('layouts.layout', ['title' => 'Continuing Education'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Membership Benefits</span>
    <h1>Enhance Your Dental Practice Management Skills with Educational Resources.</h1>
    <p>Hundreds of CE courses annually — in-person and online — for dentists, hygienists, dental assistants, and front office team members. Topics span everything your practice needs to grow.</p>
    <div class="sr-page-hero-actions">
      <a href="/v2/join" class="sr-btn sr-btn-primary">Access Education</a>
      <a href="/v2/exchange-2026" class="sr-btn sr-btn-outline-white">See The Exchange 2026</a>
    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-grid-4">
      <div class="sr-stat-card"><div class="sr-stat-card__num">100s</div><div class="sr-stat-card__label">Of CE courses offered annually</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">17</div><div class="sr-stat-card__label">CE credits available at The Exchange annual conference</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">4</div><div class="sr-stat-card__label">Team roles covered — dentists, hygienists, assistants, front office</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">3</div><div class="sr-stat-card__label">Affinity groups with specialized learning tracks</div></div>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-section-head">
      <span class="sr-eyebrow">What You'll Learn</span>
      <h2>A Curriculum Built for Private Practice Owners.</h2>
      <p>Smile Source provides an extensive continuing education curriculum available in-person and online — covering both the clinical and business sides of running a successful independent practice.</p>
    </div>
    <div class="sr-grid-3">
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-briefcase"></i></div><h3>Practice Management</h3><p>Scheduling, billing, overhead control, KPIs, and the systems that let you run your practice like a business without losing the joy of dentistry.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-bullhorn"></i></div><h3>Marketing &amp; Patient Growth</h3><p>Digital marketing, patient acquisition, case acceptance, and retention strategies that grow your schedule — taught by dentists who've done it themselves.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-procedures"></i></div><h3>New Procedures</h3><p>Expand your clinical offerings with courses on implants, sedation, orthodontics, cosmetics, and the latest evidence-based techniques from leading clinician educators.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-cube"></i></div><h3>3D Technology &amp; Digital Dentistry</h3><p>CBCT imaging, CAD/CAM workflows, digital impressions, 3D printing — hands-on education on the technology reshaping modern dental practices.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-smile"></i></div><h3>Patient Experience</h3><p>Customer service, communication skills, and creating an office culture that turns new patients into lifelong advocates for your practice.</p></div>
      <div class="sr-card"><div class="sr-card__icon"><i class="fas fa-users-cog"></i></div><h3>Team Development</h3><p>Leadership, hiring, onboarding, retention, and team culture — education for your front office, hygiene team, and assistants, not just the dentist.</p></div>
    </div>
  </div>
</section>

<section class="sr-event-box">
  <div class="sr-container">
    <div class="sr-grid-2" style="align-items:center;">
      <div>
        <span class="sr-eyebrow">Annual Conference</span>
        <h2>Earn Up to 17 CE Credits at The Exchange 2026</h2>
        <div style="display:flex;gap:24px;flex-wrap:wrap;margin:16px 0;font-size:15px;opacity:.85;">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p>The Exchange is Smile Source's flagship annual event — where members come for CE, discover new products and procedures, access exclusive vendor deals, and connect with peers from across the country.</p>
        <ul class="sr-check-list" style="margin:16px 0;">
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Cutting-edge clinical &amp; business courses</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Exclusive vendor pricing &amp; product launches</li>
        </ul>
        <a href="/v2/exchange-2026" class="sr-btn sr-btn-primary">Register Now</a>
      </div>
      <div style="text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.12);border:2px solid rgba(255,255,255,.3);border-radius:20px;padding:40px 48px;backdrop-filter:blur(8px);">
          <div style="font-size:52px;font-weight:800;letter-spacing:-2px;">2026</div>
          <div style="font-size:22px;font-weight:700;margin:8px 0 4px;">The Exchange</div>
          <div style="width:40px;height:2px;background:#fff;margin:12px auto;"></div>
          <div style="font-size:18px;font-weight:600;">Sept 9–12</div>
          <div style="font-size:14px;opacity:.8;margin-top:4px;">San Antonio, TX</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>Invest in your team. Invest in your future.</h2>
    <p>Smile Source members access incredible savings on education from top names in the industry — for themselves and their entire team.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
      <a href="/v2/lets-talk" class="sr-btn sr-btn-outline-white">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
