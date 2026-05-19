@extends('layouts.v1-layout', ['title' => 'Continuing Education'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Membership Benefits</div>
    <h1>Enhance Your Dental Practice Management Skills with Educational Resources.</h1>
    <p>Hundreds of CE courses annually — in-person and online — for dentists, hygienists, dental assistants, and front office team members. Topics span everything your practice needs to grow.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/join" class="cp-btn cp-btn-primary cp-btn-lg">Access Education</a>
      <a href="/v1/exchange-2026" class="cp-btn cp-btn-outline-white cp-btn-lg">See The Exchange 2026</a>
    </div>
  </div>
</section>

{{-- CE STATS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">100s</div>
        <div class="cp-stat-card__label">Of CE courses offered annually</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">17</div>
        <div class="cp-stat-card__label">CE credits available at The Exchange annual conference</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">4</div>
        <div class="cp-stat-card__label">Team roles covered — dentists, hygienists, assistants, front office</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">3</div>
        <div class="cp-stat-card__label">Affinity groups with specialized learning tracks</div>
      </div>
    </div>
  </div>
</section>

{{-- CURRICULUM --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">What You'll Learn</div>
      <h2>A Curriculum Built for Private Practice Owners.</h2>
      <p>Smile Source provides an extensive continuing education curriculum available in-person and online — covering both the clinical and business sides of running a successful independent practice.</p>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-briefcase"></i></div>
        <h3>Practice Management</h3>
        <p>Scheduling, billing, overhead control, KPIs, and the systems that let you run your practice like a business without losing the joy of dentistry.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-bullhorn"></i></div>
        <h3>Marketing &amp; Patient Growth</h3>
        <p>Digital marketing, patient acquisition, case acceptance, and retention strategies that grow your schedule — taught by dentists who've done it themselves.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-procedures"></i></div>
        <h3>New Procedures</h3>
        <p>Expand your clinical offerings with courses on implants, sedation, orthodontics, cosmetics, and the latest evidence-based techniques from leading clinician educators.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-cube"></i></div>
        <h3>3D Technology &amp; Digital Dentistry</h3>
        <p>CBCT imaging, CAD/CAM workflows, digital impressions, 3D printing — hands-on education on the technology reshaping modern dental practices.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-smile"></i></div>
        <h3>Patient Experience</h3>
        <p>Customer service, communication skills, and creating an office culture that turns new patients into lifelong advocates for your practice.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-users-cog"></i></div>
        <h3>Team Development</h3>
        <p>Leadership, hiring, onboarding, retention, and team culture — education for your front office, hygiene team, and assistants, not just the dentist.</p>
      </div>
    </div>
  </div>
</section>

{{-- THE EXCHANGE --}}
<section class="cp-event">
  <div class="container">
    <div class="cp-event-inner">
      <div class="cp-event-content">
        <div class="cp-eyebrow">Annual Conference</div>
        <h2>Earn Up to 17 CE Credits at The Exchange 2026</h2>
        <div class="cp-event-meta">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p>The Exchange is Smile Source's flagship annual event — where members come for CE, discover new products and procedures, access exclusive vendor deals, and connect with peers from across the country. Courses are designed for the whole team.</p>
        <ul class="cp-hero-checks" style="margin-bottom:24px;">
          <li><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li><i class="fas fa-check-circle"></i> Cutting-edge clinical &amp; business courses</li>
          <li><i class="fas fa-check-circle"></i> Exclusive vendor pricing &amp; product launches</li>
        </ul>
        <a href="/v1/exchange-2026" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
      </div>
      <div class="cp-event-badge">
        <div class="cp-event-badge-inner">
          <div class="cp-event-year">2026</div>
          <div class="cp-event-name">The Exchange</div>
          <div class="cp-event-divider"></div>
          <div class="cp-event-dates">Sept 9–12</div>
          <div class="cp-event-city">San Antonio, TX</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>Invest in your team. Invest in your future.</h2>
    <p>Smile Source members access incredible savings on education from top names in the industry — for themselves and their entire team.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
