@extends('layouts.layout', ['title' => 'Practice Growth'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v3.css') }}">@endpush
@section('content')

<section class="pwr-page-hero">
  <div class="pwr-container">
    <span class="pwr-eyebrow-tag">Membership Benefits</span>
    <h1>Grow Your Private Dental Practice. Achieve Success Through Our Network.</h1>
    <p>From early-stage owners to multi-provider practices generating millions — Smile Source has a path, a community, and a set of tools built specifically for where you are right now.</p>
    <div class="pwr-page-hero-actions">
      <a href="/v3/join" class="pwr-btn pwr-btn--primary pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-head"><span class="pwr-sub-eyebrow">Member Results</span><h2 class="pwr-sub-title">Real Growth. Real Numbers.</h2></div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">25%</div><div class="pwr-sub-stat__label">Average gross revenue growth reported by members</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">50%</div><div class="pwr-sub-stat__label">Net income increase — one member cut clinical days from 5 to 3</div></div>
      <div class="pwr-sub-stat"><div class="pwr-sub-stat__num">$800K</div><div class="pwr-sub-stat__label">Production increase that enabled one practice to add an associate &amp; hygienist</div></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-grid-2">
      <div>
        <span class="pwr-sub-eyebrow">Practice Support Services</span>
        <h2 class="pwr-sub-title">Everything You Need to Scale — Without Giving Up Ownership.</h2>
        <p class="pwr-sub-desc">Smile Source gives independent dentists access to the same business infrastructure that DSOs use — without requiring you to sell your practice or surrender autonomy.</p>
        <ul class="pwr-sub-check">
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Staff recruiting, hiring, and onboarding support</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Group health insurance and employee benefits</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Payroll processing and HR guidance</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> In-house dental plan design and administration</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Patient financing solutions (iCreditWorks &amp; partners)</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Strategic practice consulting and mentorship</li>
          <li class="pwr-sub-check-item"><i class="fas fa-check-circle"></i> Technology solutions and digital workflow optimization</li>
        </ul>
      </div>
      <div>
        <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Practice Growth" style="width:100%;border-radius:16px;box-shadow:0 12px 48px rgba(26,43,74,.14);">
      </div>
    </div>
  </div>
</section>

<section class="pwr-sub-section pwr-sub-section--alt">
  <div class="pwr-container">
    <div class="pwr-sub-head">
      <span class="pwr-sub-eyebrow">Affinity Groups</span>
      <h2 class="pwr-sub-title">Find Your Peer Group. Accelerate Your Growth.</h2>
      <p class="pwr-sub-desc">Smile Source's affinity groups are designed to meet you wherever you are in your practice journey — offering specialized peer communities, resources, and strategic conversations.</p>
    </div>
    <div class="pwr-sub-grid-3">
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-crown"></i></div><h3>Dental CEO</h3><p>For top-performing private practice owners ready for high-level strategic discussions. Capital reinvestment, team leadership, multi-provider expansion — this is where the biggest conversations happen.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-chart-line"></i></div><h3>Million Dollar Club</h3><p>For practices generating $1M–$1.9M annually. Focused on optimizing profitability, retaining top talent, and building the systems that let you work fewer hours while earning more.</p></div>
      <div class="pwr-sub-card"><div class="pwr-sub-card__icon"><i class="fas fa-seedling"></i></div><h3>Smile Source Advanced</h3><p>For early-stage owners generating under $1M annually. A supportive community with practical playbooks, peer mentorship, and direct access to tools that accelerate the first phase of your growth.</p></div>
    </div>
  </div>
</section>

<section class="pwr-sub-section">
  <div class="pwr-container">
    <div class="pwr-sub-head"><span class="pwr-sub-eyebrow">Member Stories</span><h2 class="pwr-sub-title">Growth You Can Count On.</h2></div>
    <div class="pwr-sub-grid-2">
      <div class="pwr-sub-testimonial">
        <div class="pwr-sub-stars">★★★★★</div>
        <blockquote>"Since joining, gross revenues grew 25% and net income grew over 50%. I've cut my work week from 5 clinical days to 3 days — and my practice has never been healthier."</blockquote>
        <div class="pwr-sub-testimonial-author">
          <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Smile Source Member" class="pwr-testimonial-card__avatar-img">
          <div><strong>Smile Source Member</strong><span>Private Practice Owner</span></div>
        </div>
      </div>
      <div class="pwr-sub-testimonial">
        <div class="pwr-sub-stars">★★★★★</div>
        <blockquote>"Our production soared by $800,000, which allowed us to welcome a full-time associate and an additional hygienist. The network gave us the confidence and the roadmap to grow."</blockquote>
        <div class="pwr-sub-testimonial-author">
          <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Smile Source Member" class="pwr-testimonial-card__avatar-img">
          <div><strong>Smile Source Member</strong><span>Multi-Provider Practice</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pwr-sub-cta">
  <div class="pwr-container">
    <h2>Your best years of practice are ahead.</h2>
    <p>Join 1,100+ independent dentists who are growing smarter, not harder, with Smile Source.</p>
    <div class="pwr-sub-cta-row">
      <a href="/v3/join" class="pwr-btn pwr-btn--white pwr-btn--large">Join Now</a>
      <a href="/v3/lets-talk" class="pwr-btn pwr-btn--outline-white pwr-btn--large">Let's Talk</a>
    </div>
  </div>
</section>
@endsection
