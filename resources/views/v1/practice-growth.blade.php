@extends('layouts.v1-layout', ['title' => 'Practice Growth'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Membership Benefits</div>
    <h1>Grow Your Private Dental Practice. Achieve Success Through Our Network.</h1>
    <p>From early-stage owners to multi-provider practices generating millions — Smile Source has a path, a community, and a set of tools built specifically for where you are right now.</p>
    <div class="cp-page-hero-actions">
      <a href="/v1/join" class="cp-btn cp-btn-primary cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

{{-- SUCCESS STATS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Member Results</div>
      <h2>Real Growth. Real Numbers.</h2>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">25%</div>
        <div class="cp-stat-card__label">Average gross revenue growth reported by members</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">50%</div>
        <div class="cp-stat-card__label">Net income increase — one member cut clinical days from 5 to 3</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">$800K</div>
        <div class="cp-stat-card__label">Production increase that enabled one practice to add an associate &amp; hygienist</div>
      </div>
    </div>
  </div>
</section>

{{-- SERVICES --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-content-grid-2">
      <div>
        <div class="cp-eyebrow">Practice Support Services</div>
        <h2>Everything You Need to Scale — Without Giving Up Ownership.</h2>
        <p>Smile Source gives independent dentists access to the same business infrastructure that DSOs use to grow their groups — without requiring you to sell your practice or surrender autonomy.</p>
        <div class="cp-check-list">
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Staff recruiting, hiring, and onboarding support</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Group health insurance and employee benefits</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Payroll processing and HR guidance</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> In-house dental plan design and administration</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Patient financing solutions (iCreditWorks &amp; partners)</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Strategic practice consulting and mentorship</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Technology solutions and digital workflow optimization</div>
        </div>
      </div>
      <div>
        <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Practice Growth" style="width:100%;border-radius:16px;box-shadow:0 12px 48px rgba(26,43,74,.14);">
      </div>
    </div>
  </div>
</section>

{{-- AFFINITY GROUPS --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Affinity Groups</div>
      <h2>Find Your Peer Group. Accelerate Your Growth.</h2>
      <p>Smile Source's affinity groups are designed to meet you wherever you are in your practice journey — offering specialized peer communities, resources, and strategic conversations.</p>
    </div>
    <div class="cp-content-grid-3">
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-crown"></i></div>
        <h3>Dental CEO</h3>
        <p>For top-performing private practice owners ready for high-level strategic discussions and masterminds. Capital reinvestment, team leadership, multi-provider expansion — this is where the biggest conversations happen.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-chart-line"></i></div>
        <h3>Million Dollar Club</h3>
        <p>For practices generating $1M–$1.9M annually. Focused on optimizing profitability, retaining top talent, and building the systems that let you work fewer hours while earning more.</p>
      </div>
      <div class="cp-icon-card">
        <div class="cp-icon-card__icon"><i class="fas fa-seedling"></i></div>
        <h3>Smile Source Advanced</h3>
        <p>For early-stage owners generating under $1M annually. A supportive community with practical playbooks, peer mentorship, and direct access to tools that accelerate the first phase of your growth.</p>
      </div>
    </div>
  </div>
</section>

{{-- TESTIMONIALS --}}
<section class="cp-testimonials">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">Member Stories</div>
      <h2>Growth You Can Count On.</h2>
    </div>
    <div class="cp-testimonials-grid">
      <div class="cp-testimonial-card">
        <div class="cp-stars">★★★★★</div>
        <blockquote>"Since joining, gross revenues grew 25% and net income grew over 50%. I've cut my work week from 5 clinical days to 3 days — and my practice has never been healthier."</blockquote>
        <div class="cp-testimonial-author">
          <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Smile Source Member" class="cp-avatar-img">
          <div><strong>Smile Source Member</strong><span>Private Practice Owner</span></div>
        </div>
      </div>
      <div class="cp-testimonial-card">
        <div class="cp-stars">★★★★★</div>
        <blockquote>"Our production soared by $800,000, which allowed us to welcome a full-time associate and an additional hygienist. The network gave us the confidence and the roadmap to grow."</blockquote>
        <div class="cp-testimonial-author">
          <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Smile Source Member" class="cp-avatar-img">
          <div><strong>Smile Source Member</strong><span>Multi-Provider Practice</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>Your best years of practice are ahead.</h2>
    <p>Join 1,100+ independent dentists who are growing smarter, not harder, with Smile Source.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
