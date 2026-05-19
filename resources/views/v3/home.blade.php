@extends('layouts.layout')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v3.css') }}">
@endpush

@push('scripts')
<script>
  /* Tab switching */
  document.querySelectorAll('.pwr-tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const group = btn.closest('.pwr-sec-tabs');
      group.querySelectorAll('.pwr-tab-btn').forEach(b => b.classList.remove('is-active'));
      group.querySelectorAll('.pwr-tab-panel').forEach(p => p.classList.remove('is-active'));
      btn.classList.add('is-active');
      group.querySelector('#' + btn.dataset.tab).classList.add('is-active');
    });
  });

  /* Accordion */
  document.querySelectorAll('.pwr-accordion-trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const item = trigger.closest('.pwr-accordion-item');
      const isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.pwr-accordion-item').forEach(i => i.classList.remove('is-open'));
      if (!isOpen) item.classList.add('is-open');
    });
  });

  /* Generate particle stars */
  (function() {
    const wrap = document.querySelector('.pwr-hero__particles');
    if (!wrap) return;
    for (let i = 0; i < 80; i++) {
      const s = document.createElement('span');
      s.className = 'pwr-hero__star';
      s.style.cssText = [
        'left:'   + (Math.random() * 100) + '%',
        'top:'    + (Math.random() * 100) + '%',
        '--dur:'  + (3 + Math.random() * 5) + 's',
        '--delay:' + (Math.random() * 6) + 's',
        'width:'  + (Math.random() < .3 ? 3 : 2) + 'px',
        'height:' + (Math.random() < .3 ? 3 : 2) + 'px',
        'opacity: ' + (Math.random() * .6 + .1)
      ].join(';');
      wrap.appendChild(s);
    }
  })();
</script>
@endpush

@section('content')
<div class="pwr-page">

{{-- ===== HERO ===== --}}
<section class="pwr-hero">
  <div class="pwr-hero__particles" aria-hidden="true"></div>

  <div class="pwr-hero__inner">
    <div class="pwr-hero__eyebrow">
      <span class="dot"></span>
      Dental Practice Coaching &amp; Consulting
    </div>

    <h1>
      ACT Dental Ignites<br>
      <span class="pwr-gradient-text">Your Full Potential</span>
    </h1>

    <p class="pwr-hero__desc">
      Elevate your practice, boost profitability, and enhance your work-life balance.
      We help dentists across the country create a better practice and a better life
      through proven coaching and best-practice systems.
    </p>

    <div class="pwr-hero__cta">
      <a href="#" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
        Get Started Today
      </a>
      <a href="#" class="pwr-btn pwr-btn--outline-white">
        <i class="fas fa-play-circle"></i>&ensp;Learn About Coaching
      </a>
    </div>
  </div>
</section>

{{-- ===== VERTICAL CTA STRIP ===== --}}
<section class="pwr-sec-cta">
  <div class="pwr-container">
    <div class="pwr-sec-cta__inner">

      <div class="pwr-sec-cta__text">
        <h2 class="pwr-sec-cta__title">
          Design the Best Practice — and the Best Life — for You
        </h2>
        <p class="pwr-sec-cta__desc">
          Coaching programs available now. Get your free practice assessment and a
          personalized coaching roadmap — all tailored to your specific goals and challenges.
        </p>
      </div>

      <div class="pwr-sec-cta__actions">
        <a href="#" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
          Start With a Practice Coach
        </a>
        <a href="tel:+18008518186" class="pwr-btn pwr-btn--outline-white pwr-btn--long">
          <i class="fas fa-phone"></i>&ensp;800-851-8186
        </a>
      </div>

    </div>
  </div>
</section>

{{-- ===== PROGRAMS STRIP ===== --}}
<section class="pwr-sec-clients">
  <div class="pwr-container">
    <p class="pwr-sec-clients__label">Coaching programs and resources for every stage of your practice</p>
    <div class="pwr-sec-clients__grid">
      <div class="pwr-sec-clients__item">Best Practices Association</div>
      <div class="pwr-sec-clients__item">TTT Group Coaching</div>
      <div class="pwr-sec-clients__item">Pro Coaching</div>
      <div class="pwr-sec-clients__item">GAPs Calculator</div>
      <div class="pwr-sec-clients__item">Study Clubs</div>
      <div class="pwr-sec-clients__item">Podcast</div>
      <div class="pwr-sec-clients__item">Magazine</div>
      <div class="pwr-sec-clients__item">Events</div>
    </div>
  </div>
</section>

{{-- ===== CHALLENGES TABS ===== --}}
<section class="pwr-sec-tabs">
  <div class="pwr-container">

    <div class="pwr-sec-tabs__intro">
      <span class="pwr-sec-tabs__eyebrow">The Challenges We Solve</span>
      <h2 class="pwr-sec-tabs__title">The Top Challenges Facing Dentists Today</h2>
      <p class="pwr-sec-tabs__desc">
        ACT Dental coaching is designed around the real problems dentists face every day.
        Here's how we address the most common — and most costly — challenges in the profession.
      </p>
    </div>

    <div class="pwr-tabs-nav">
      <button class="pwr-tab-btn is-active" data-tab="tab-burnout">Burnout</button>
      <button class="pwr-tab-btn" data-tab="tab-ppo">PPO &amp; Revenue</button>
      <button class="pwr-tab-btn" data-tab="tab-team">Team Building</button>
      <button class="pwr-tab-btn" data-tab="tab-growth">DSO &amp; Growth</button>
    </div>

    {{-- Burnout --}}
    <div class="pwr-tab-panel is-active" id="tab-burnout">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-heart"></i></div>
          <h3>Clarify Your Vision</h3>
          <p>Define what success and fulfillment look like for you — then build a practice that delivers it every day.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-balance-scale"></i></div>
          <h3>Work-Life Balance Systems</h3>
          <p>Implement structures that protect your time, reduce stress, and make your schedule work for you — not against you.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-spa"></i></div>
          <h3>Sustainable Self-Care Strategies</h3>
          <p>Our coaches work with you to prioritize wellness and avoid the burnout cycle that plagues 54.9% of dentists.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- PPO & Revenue --}}
    <div class="pwr-tab-panel" id="tab-ppo">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-chart-line"></i></div>
          <h3>Optimize Reimbursements</h3>
          <p>Navigate PPO complexities, reduce write-offs, and maximize collections — even in a crowded insurance landscape.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-dollar-sign"></i></div>
          <h3>Maximize Daily Production</h3>
          <p>Schedule optimization, case acceptance, and treatment planning strategies that grow revenue per day worked.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-calculator"></i></div>
          <h3>GAPs Financial Analysis</h3>
          <p>Use our proprietary GAPs Calculator to identify financial gaps and build a clear roadmap to your revenue goals.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Team Building --}}
    <div class="pwr-tab-panel" id="tab-team">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-user-plus"></i></div>
          <h3>Hiring Best Practices</h3>
          <p>Find the right people for the right seats with proven hiring systems that attract top-quality candidates.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-users"></i></div>
          <h3>Team Culture &amp; Retention</h3>
          <p>Build the kind of culture where talented team members stay, grow, and perform at their very best.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-chalkboard-teacher"></i></div>
          <h3>Leadership Development</h3>
          <p>Become the confident, decisive leader your team needs — with coaching built around your personal leadership style.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- DSO & Growth --}}
    <div class="pwr-tab-panel" id="tab-growth">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Compete With DSOs</h3>
          <p>Differentiate your independent practice and win against corporate competition by playing to your unique strengths.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-rocket"></i></div>
          <h3>Proven Growth Systems</h3>
          <p>Tried-and-tested strategies for patient acquisition, referral growth, and expanding services that stick.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-bullseye"></i></div>
          <h3>Strategic Planning</h3>
          <p>Quarterly priorities, 90-day sprints, and annual planning frameworks that keep your team aligned and moving forward.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- ===== COACHING PROGRAMS SHOWCASE ===== --}}
<section class="pwr-sec-image-boxes">
  <div class="pwr-container">

    <div class="pwr-sec-image-boxes__intro">
      <span class="pwr-sec-image-boxes__eyebrow">Our Coaching Programs</span>
      <h2 class="pwr-sec-image-boxes__title">A Coaching Program for Every Stage of Your Journey</h2>
      <p class="pwr-sec-image-boxes__desc">
        From community membership to one-on-one coaching, ACT Dental meets you where you are
        and takes your practice — and your life — to the next level.
      </p>
    </div>

    <div class="pwr-image-boxes-grid">

      <div class="pwr-image-box pwr-image-box--tall">
        <div class="pwr-image-box__img pwr-img--indigo"><i class="fas fa-users"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--hot">POPULAR</span>
          <h3>Best Practices Association</h3>
          <p>A community of dentists committed to best practices, accountability, and continuous improvement. Events, podcast, and resources included.</p>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--purple"><i class="fas fa-chalkboard-teacher"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--trending">TRENDING</span>
          <h3>TTT Group Coaching</h3>
          <p>Small-group coaching with like-minded dentists. Real accountability, shared wins, and strategies that work.</p>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--dark"><i class="fas fa-user-tie"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--hot">PREMIUM</span>
          <h3>Pro Coaching</h3>
          <p>One-on-one coaching with a dedicated ACT Dental expert. The most personalized, intensive path to transformation.</p>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--navy"><i class="fas fa-calculator"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--new">TOOL</span>
          <h3>GAPs Calculator</h3>
          <p>Diagnose the gaps between your current performance and your practice's full potential with this powerful tool.</p>
        </div>
      </div>

      <div class="pwr-image-box pwr-image-box--tall">
        <div class="pwr-image-box__img pwr-img--purple"><i class="fas fa-podcast"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--hot">FREE</span>
          <h3>Best Practices Podcast</h3>
          <p>Weekly episodes with Kirk Behrendt, top coaches, and dental industry leaders sharing actionable insights to help you grow.</p>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--dark"><i class="fas fa-calendar-alt"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--trending">LIVE</span>
          <h3>Events &amp; Study Clubs</h3>
          <p>In-person and virtual events where you connect with your community, learn from the best, and leave re-energized.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="pwr-sec-testimonials">
  <div class="pwr-container">

    <div class="pwr-sec-testimonials__intro">
      <span class="pwr-sec-testimonials__eyebrow">Dentist Testimonials</span>
      <h2 class="pwr-sec-testimonials__title">What Dentists Are Saying About ACT Dental</h2>
    </div>

    <div class="pwr-testimonials-masonry">

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "ACT Dental has helped me change my practice which changed my life! The focus really
          is 'Better Practice Better Life.' If you are dreaming about a practice you want to
          drive to everyday, ACT will help you get there. Coaching with ACT will be the best
          decision you can make for your dental practice and in turn for your life!"
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">AH</div>
          <div>
            <strong>Dr. Alice Hale</strong>
            <span>Aiken, SC</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "ACT helped me transform my practice from a dysfunctional, PPO practice to a
          high-performing Fee-For-Service Practice! They gave me the tools to inspire my
          team and lead with practical strategies. We have the right people in the right
          seats and I love this company with all my heart."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">KD</div>
          <div>
            <strong>Dr. Kristen A. Donohue</strong>
            <span>Burke, VA</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "This coaching company has the most refreshing and relevant philosophy. We've been
          a client for just over a year. Our office culture is healthier than ever and our
          practice profitability is hitting new records. We're all working better and
          smarter, NOT harder."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">ES</div>
          <div>
            <strong>Dr. Emily Stancato</strong>
            <span>Union Grove, WI</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "Our practice revenues have grown three-fold since I started working with ACT.
          My team is now more aligned than ever, and this has given me greater peace of mind.
          The systems ACT helped me develop allow me to introduce new concepts and implement
          them more easily. Highly recommend!"
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">SC</div>
          <div>
            <strong>Dr. Sapna Chandra</strong>
            <span>Fairfax, CA</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "Their coaching program changed my life. I now have a practice that supports a
          balanced lifestyle with my family as the focus, an amazing team that I love working
          with, and a productive office that supports my short and long-term goals. So
          grateful for Kirk and the rest of ACT Dental."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">KG</div>
          <div>
            <strong>Dr. Kevin Groth</strong>
            <span>Bingham Farms, MI</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CTA ONLY ===== --}}
<section class="pwr-sec-cta-only">
  <div class="pwr-container">
    <div class="pwr-sec-cta-only__inner">
      <h2 class="pwr-sec-cta-only__title">
        Ready to Design Your Best Practice?
      </h2>
      <p class="pwr-sec-cta-only__desc">
        Schedule a free practice discovery call and find out which ACT Dental coaching program
        is the right fit for you. No pressure — just an honest conversation about your goals.
      </p>
      <div class="pwr-sec-cta-only__cta">
        <a href="#" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
          Get Started Today
        </a>
        <a href="#" class="pwr-btn pwr-btn--outline-primary pwr-btn--long">
          Browse Programs
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ===== FAQ ACCORDION ===== --}}
<section class="pwr-sec-accordion">
  <div class="pwr-container">

    <div class="pwr-sec-accordion__intro">
      <span class="pwr-sec-accordion__eyebrow">Common Questions</span>
      <h2 class="pwr-sec-accordion__title">Frequently Asked Questions</h2>
    </div>

    <div class="pwr-accordion">

      <div class="pwr-accordion-item is-open">
        <button class="pwr-accordion-trigger">
          What is ACT Dental coaching?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          ACT Dental is a dental practice coaching and consulting company based in Milwaukee, WI.
          We help dentists create more profitable, efficient, and fulfilling practices through
          personalized coaching programs, proven systems, and a community of like-minded dental professionals.
          Our tagline says it all: Better Practice, Better Life.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          What coaching programs do you offer?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          We offer three main coaching programs: the Best Practices Association (community membership),
          TTT Group Coaching (small-group accountability), and Pro Coaching (one-on-one personalized coaching).
          We also provide the GAPs Calculator, events, study clubs, a podcast, and a magazine.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How is ACT Dental different from other coaching companies?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          ACT Dental coaching is uniquely tailored to each practice — no cookie-cutter programs.
          Our coaches genuinely care about you as a person, not just your production numbers.
          We focus equally on your professional growth and personal wellbeing, because we believe
          a better practice and a better life go hand in hand.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How do I know which program is right for me?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Start with a free practice discovery call with one of our coaches. We'll listen to
          where you are, what your goals are, and what challenges you're facing — then recommend
          the program that's the best fit. There's no pressure and no obligation.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          What results can I expect from ACT Dental coaching?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Results vary by practice, but our clients commonly experience significant revenue growth,
          reduced burnout, stronger teams, better work-life balance, and renewed passion for dentistry.
          Dr. Sapna Chandra saw her revenues grow three-fold. Dr. Emily Stancato hit record profitability.
          Dr. Kevin Groth built a practice that supports a fully balanced lifestyle. Your results depend
          on your commitment, but the coaching framework is proven.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How do I get started?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Call us at 800-851-8186, email info@actdental.com, or click "Get Started Today" on this page
          to schedule your free discovery call. We're located at 220 E. Buffalo Street, Suite 320,
          Milwaukee, WI 53202 but we work with dentists across all 50 states.
        </div>
      </div>

    </div>
  </div>
</section>

</div>{{-- /pwr-page --}}
@endsection
