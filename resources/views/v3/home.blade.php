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

{{-- ================================================================
     1. HERO — pwr-hero--full-height pwr--dark
     Full viewport, dark bg, centered, particle stars, gradient glow
     ================================================================ --}}
<section class="pwr-hero">
  <div class="pwr-hero__particles" aria-hidden="true"></div>

  <div class="pwr-hero__inner">
    <div class="pwr-hero__eyebrow">
      <span class="dot"></span>
      Phoenix's #1 Rated Dental Practice
    </div>

    <h1>
      ACT Dental Ignites<br>
      <span class="pwr-gradient-text">Your Confidence</span>
    </h1>

    <p class="pwr-hero__desc">
      Launch a powerful smile quickly and affordably — no stress required.
      Comprehensive dental care for your whole family, delivered with
      warmth, precision, and technology that gets results.
    </p>

    <div class="pwr-hero__cta">
      <a href="#" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
        Book Appointment Now
      </a>
      <a href="#" class="pwr-btn pwr-btn--outline-white">
        <i class="fas fa-play-circle"></i>&ensp;See Our Services
      </a>
    </div>
  </div>
</section>

{{-- ================================================================
     2. VERTICAL CTA — pwr-sec-cta--vertical pwr--dark
     Dark bg, text left + CTA buttons right, padding 95px
     ================================================================ --}}
<section class="pwr-sec-cta">
  <div class="pwr-container">
    <div class="pwr-sec-cta__inner">

      <div class="pwr-sec-cta__text">
        <h2 class="pwr-sec-cta__title">
          Design the Best Smile for Your Family
        </h2>
        <p class="pwr-sec-cta__desc">
          New patient specials available now. Get your comprehensive exam, X-rays, and
          a personalised treatment plan — all at one practice, no referrals needed.
        </p>
      </div>

      <div class="pwr-sec-cta__actions">
        <a href="#" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
          Book Appointment
        </a>
        <a href="tel:+15550123456" class="pwr-btn pwr-btn--outline-white pwr-btn--long">
          <i class="fas fa-phone"></i>&ensp;(555) 012-3456
        </a>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     3. CLIENT LOGOS — pwr-sec-clients pwr--dark
     Dark bg, insurance logos strip
     ================================================================ --}}
<section class="pwr-sec-clients">
  <div class="pwr-container">
    <p class="pwr-sec-clients__label">We accept most major insurance plans</p>
    <div class="pwr-sec-clients__grid">
      <div class="pwr-sec-clients__item">Delta Dental</div>
      <div class="pwr-sec-clients__item">Cigna</div>
      <div class="pwr-sec-clients__item">Aetna</div>
      <div class="pwr-sec-clients__item">MetLife</div>
      <div class="pwr-sec-clients__item">Humana</div>
      <div class="pwr-sec-clients__item">United Healthcare</div>
      <div class="pwr-sec-clients__item">Guardian</div>
      <div class="pwr-sec-clients__item">BlueCross BlueShield</div>
    </div>
  </div>
</section>

{{-- ================================================================
     4. TABS SECTION — pwr-sec-tabs pwr--light
     Light (#f4f6fa) bg, tab buttons across top, 3-col service cards
     ================================================================ --}}
<section class="pwr-sec-tabs">
  <div class="pwr-container">

    <div class="pwr-sec-tabs__intro">
      <span class="pwr-sec-tabs__eyebrow">Our Services</span>
      <h2 class="pwr-sec-tabs__title">Popular Treatments</h2>
      <p class="pwr-sec-tabs__desc">
        Everything your smile needs, beautifully organised. Each service is delivered
        to the same exceptional standard with the same patient-first care.
      </p>
    </div>

    {{-- Tab navigation --}}
    <div class="pwr-tabs-nav">
      <button class="pwr-tab-btn is-active" data-tab="tab-preventive">Preventive</button>
      <button class="pwr-tab-btn" data-tab="tab-cosmetic">Cosmetic</button>
      <button class="pwr-tab-btn" data-tab="tab-restorative">Restorative</button>
      <button class="pwr-tab-btn" data-tab="tab-specialty">Specialty</button>
    </div>

    {{-- Preventive --}}
    <div class="pwr-tab-panel is-active" id="tab-preventive">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-teeth"></i></div>
          <h3>Comprehensive Exams</h3>
          <p>Full mouth evaluation with digital X-rays and oral cancer screening to catch issues early.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-brush"></i></div>
          <h3>Professional Cleanings</h3>
          <p>Hygiene appointments that remove tartar, polish enamel, and prevent gum disease before it starts.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-child"></i></div>
          <h3>Children's Dentistry</h3>
          <p>Fun, fear-free visits that build healthy habits and give kids a positive dental experience for life.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Cosmetic --}}
    <div class="pwr-tab-panel" id="tab-cosmetic">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-smile"></i></div>
          <h3>Porcelain Veneers</h3>
          <p>Ultra-thin shells that correct colour, shape, and size for a permanent smile transformation.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-star"></i></div>
          <h3>Teeth Whitening</h3>
          <p>Professional in-office or take-home whitening that goes beyond anything from a pharmacy shelf.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-magic"></i></div>
          <h3>Invisalign</h3>
          <p>Custom clear aligner therapy with a digital preview of your finished smile before you even start.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Restorative --}}
    <div class="pwr-tab-panel" id="tab-restorative">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-tooth"></i></div>
          <h3>Same-Day CEREC Crowns</h3>
          <p>One appointment from prep to permanent crown — CEREC mills your restoration in under an hour.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-fill-drip"></i></div>
          <h3>Tooth-Coloured Fillings</h3>
          <p>Composite resin fillings that match your natural tooth shade — strong, durable, invisible.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-teeth-open"></i></div>
          <h3>Dental Bridges</h3>
          <p>Fixed prosthetics that replace one or more missing teeth and restore your bite and smile.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Specialty --}}
    <div class="pwr-tab-panel" id="tab-specialty">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-user-md"></i></div>
          <h3>Dental Implants</h3>
          <p>Permanent replacement teeth that look, feel, and function like your natural teeth — for life.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-heartbeat"></i></div>
          <h3>Emergency Dental Care</h3>
          <p>Same-day appointments for toothaches, chipped teeth, lost restorations, and dental trauma.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-moon"></i></div>
          <h3>Sleep Apnea Treatment</h3>
          <p>Custom oral appliances that keep your airway open so you and your partner can sleep soundly.</p>
          <a href="#" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- ================================================================
     5. IMAGE BOXES — pwr-sec-image-boxes pwr--dark
     Dark bg, masonry grid of service/feature showcase cards
     ================================================================ --}}
<section class="pwr-sec-image-boxes">
  <div class="pwr-container">

    <div class="pwr-sec-image-boxes__intro">
      <span class="pwr-sec-image-boxes__eyebrow">Recently Added Treatments</span>
      <h2 class="pwr-sec-image-boxes__title">Home Pages for Every Smile Goal</h2>
      <p class="pwr-sec-image-boxes__desc">
        Explore our full treatment library — from HOT new procedures to TRENDING
        cosmetic upgrades. Every treatment is available under one roof.
      </p>
    </div>

    <div class="pwr-image-boxes-grid">

      {{-- Tall card --}}
      <div class="pwr-image-box pwr-image-box--tall">
        <div class="pwr-image-box__img pwr-img--indigo"><i class="fas fa-tooth"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--hot">HOT</span>
          <h3>Dental Implants</h3>
          <p>Single, multiple, or full-arch implants that restore your smile permanently. 3D-planned for precision.</p>
        </div>
      </div>

      {{-- Regular card --}}
      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--purple"><i class="fas fa-smile"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--trending">TRENDING</span>
          <h3>Smile Makeover</h3>
          <p>Combine veneers, whitening, and Invisalign into a personalised transformation plan.</p>
        </div>
      </div>

      {{-- Regular card --}}
      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--dark"><i class="fas fa-magic"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--hot">HOT</span>
          <h3>Invisalign</h3>
          <p>Clear, removable aligners with digital smile preview. Eat what you want, smile how you want.</p>
        </div>
      </div>

      {{-- Regular card --}}
      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--navy"><i class="fas fa-teeth"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--new">NEW</span>
          <h3>CEREC Same-Day Crowns</h3>
          <p>Walk in with a broken tooth, walk out with a permanent crown — all in one appointment.</p>
        </div>
      </div>

      {{-- Tall card --}}
      <div class="pwr-image-box pwr-image-box--tall">
        <div class="pwr-image-box__img pwr-img--purple"><i class="fas fa-heartbeat"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--hot">HOT</span>
          <h3>Emergency Care</h3>
          <p>Same-day emergency slots held daily. Call before noon for same-day treatment — no waiting, no referrals.</p>
        </div>
      </div>

      {{-- Regular card --}}
      <div class="pwr-image-box">
        <div class="pwr-image-box__img pwr-img--dark"><i class="fas fa-child"></i></div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__badge badge--trending">TRENDING</span>
          <h3>Children's Dentistry</h3>
          <p>Fun, fear-free visits for kids of all ages. We make the dentist something to look forward to.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     6. TESTIMONIALS — pwr-sec-testimonials pwr-js-masonry pwr--dark
     Dark bg, masonry-style testimonial cards
     ================================================================ --}}
<section class="pwr-sec-testimonials">
  <div class="pwr-container">

    <div class="pwr-sec-testimonials__intro">
      <span class="pwr-sec-testimonials__eyebrow">Patient Reviews</span>
      <h2 class="pwr-sec-testimonials__title">What Our Patients Are Saying</h2>
    </div>

    <div class="pwr-testimonials-masonry">

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "ACT Dental completely transformed my smile. I came in with chipped, stained teeth
          and the team delivered a result beyond anything I imagined. The entire process was
          pain-free and the communication was excellent throughout."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">AL</div>
          <div>
            <strong>Amanda L.</strong>
            <span>Smile Makeover Patient</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "I broke a tooth on a Friday evening. ACT Dental got me in Saturday morning,
          made a CEREC crown on the spot, and I was back at work by noon. Genuinely
          incredible service when I needed it most."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">TR</div>
          <div>
            <strong>Tom R.</strong>
            <span>Emergency &amp; CEREC Patient</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "My Invisalign results are better than I ever expected. The team checked in
          at every milestone, the digital preview was spot-on, and I finished two weeks
          ahead of schedule. I smile so much more now — total life changer."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">NC</div>
          <div>
            <strong>Nicole C.</strong>
            <span>Invisalign Graduate</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "I'd avoided the dentist for over a decade due to anxiety. ACT Dental's
          sedation option and incredibly patient team made my first visit genuinely
          comfortable. I've been back four times since and actually enjoy it now."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">DK</div>
          <div>
            <strong>David K.</strong>
            <span>Sedation Dentistry Patient</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "We bring all five of our kids to ACT Dental. The staff knows every child by
          name and the appointments are always on time. As a parent, having one trusted
          practice for the whole family is priceless."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">LP</div>
          <div>
            <strong>Laura P.</strong>
            <span>Family of 7 Patients</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     7. CTA ONLY — pwr-sec-cta--cta-only pwr--light
     Light bg, centered, single CTA, padding 65px
     ================================================================ --}}
<section class="pwr-sec-cta-only">
  <div class="pwr-container">
    <div class="pwr-sec-cta-only__inner">
      <h2 class="pwr-sec-cta-only__title">
        Ready to Design Your Best Smile?
      </h2>
      <p class="pwr-sec-cta-only__desc">
        New patients receive a complimentary comprehensive exam and X-rays.
        Browse our full service library or book directly online — no waiting.
      </p>
      <div class="pwr-sec-cta-only__cta">
        <a href="#" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
          Book Appointment
        </a>
        <a href="#" class="pwr-btn pwr-btn--outline-primary pwr-btn--long">
          Browse Services
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ================================================================
     8. FAQ ACCORDION — pwr-sec-accordion pwr--light
     Light (#f4f6fa) bg, bordered accordion items
     ================================================================ --}}
<section class="pwr-sec-accordion">
  <div class="pwr-container">

    <div class="pwr-sec-accordion__intro">
      <span class="pwr-sec-accordion__eyebrow">Support</span>
      <h2 class="pwr-sec-accordion__title">Frequently Asked Questions</h2>
    </div>

    <div class="pwr-accordion">

      <div class="pwr-accordion-item is-open">
        <button class="pwr-accordion-trigger">
          Do you accept my insurance?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          We accept most major dental insurance plans including Delta Dental, Cigna, Aetna, MetLife,
          Humana, United Healthcare, and Guardian. Our team will verify your benefits before your
          appointment and explain any out-of-pocket costs upfront.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How do I book a same-day appointment?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Call us before noon at (555) 012-3456 or use the online booking portal to request a same-day slot.
          We hold emergency appointment spaces daily. For after-hours dental emergencies, follow the
          instructions on our voicemail for the on-call dentist.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          What financing options are available?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          We offer CareCredit with 0% interest promotional periods, in-house monthly payment plans,
          and our own ACT Dental Savings Plan for patients without insurance. We'll always review
          all options with you before proceeding with any treatment.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How long does Invisalign treatment take?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Treatment time varies by case complexity, but most adults complete Invisalign in 12–18 months.
          Minor corrections can be finished in as little as 6 months. We'll show you a digital simulation
          of your result and a timeline estimate at your free consultation.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          What is a CEREC same-day crown?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          CEREC technology lets us design, mill, and fit your permanent porcelain crown in a single
          2–3 hour appointment — no temporaries, no second visit, no waiting weeks for a lab.
          The result is a natural-looking, durable crown crafted to fit your exact bite.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          Do you offer sedation for nervous patients?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Yes. We offer nitrous oxide (laughing gas), oral conscious sedation, and IV sedation for
          qualifying patients. Our team is trained in anxiety-free techniques and will work with
          you to find the level of comfort support that's right for your situation.
        </div>
      </div>

    </div>
  </div>
</section>

</div>{{-- /pwr-page --}}
@endsection
