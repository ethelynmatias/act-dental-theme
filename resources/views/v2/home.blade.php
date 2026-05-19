@extends('layouts.layout')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v2.css') }}">
@endpush

@section('content')

{{-- ================================================================
     HERO — bg-black, centered (sr-one-col-01 bg-black text-white)
     ================================================================ --}}
<section class="v2-hero">
  <div class="sr-container">
    <div class="v2-hero__inner">

      <span class="v2-hero__lead">Phoenix's Premier Family Dental Practice</span>

      <h1>Stunning Smiles,<br><em>Effortlessly.</em></h1>

      <p class="v2-hero__sub">
        Comprehensive dental care for your whole family — delivered with warmth,
        precision, and technology that makes every visit comfortable.
      </p>

      <div class="v2-hero__cta">
        <a href="#" class="sr-btn sr-btn-primary">Book Now — It's Easy</a>
        <a href="#" class="sr-btn sr-btn-outline-white">See Our Services</a>
      </div>

    </div>

    {{-- Product visual / hero image block --}}
    <div class="v2-hero__visual">
      <div class="v2-media-img v2-media-img--dark">
        <i class="fas fa-tooth"></i>
      </div>
    </div>

  </div>
</section>

{{-- ================================================================
     FEATURE BADGES — 3-col, still on black
     (150+ Modules | Drag and Drop Builder | Google CoreWeb Vitals)
     ================================================================ --}}
<section class="v2-badges">
  <div class="sr-container">
    <div class="v2-badges__grid">

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-calendar-check"></i></div>
        <div>
          <h4>Same-Day Appointments</h4>
          <p>We keep slots open daily — no week-long waits when you need care.</p>
        </div>
      </div>

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-mobile-alt"></i></div>
        <div>
          <h4>Online Booking & Patient Portal</h4>
          <p>Schedule, message your team, and manage care from your phone 24/7.</p>
        </div>
      </div>

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-star"></i></div>
        <div>
          <h4>Optimized for Patient Experience</h4>
          <p>4.9-star rated across 1,200+ Google reviews from real patients.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     TRUST BAR — logo scroll strip (srco-logos-01 bg-black text-white)
     ================================================================ --}}
<section class="v2-trust">
  <div class="sr-container">
    <p class="v2-trust__label">Trusted by patients insured by more than 7 major carriers.</p>
    <div class="v2-trust__logos">
      <div class="v2-trust__pill">Delta Dental</div>
      <div class="v2-trust__pill">Cigna</div>
      <div class="v2-trust__pill">Aetna</div>
      <div class="v2-trust__pill">MetLife</div>
      <div class="v2-trust__pill">Humana</div>
      <div class="v2-trust__pill">United Healthcare</div>
      <div class="v2-trust__pill">Guardian</div>
    </div>
  </div>
</section>

{{-- ================================================================
     MEET THE PRACTICE — two-col, white bg (sr-two-col-01 bg-white)
     ================================================================ --}}
<section class="v2-meet">
  <div class="sr-container">
    <div class="v2-two-col">

      <div class="v2-media-col">
        <div class="v2-media-img v2-media-img--blue">
          <i class="fas fa-user-md"></i>
        </div>
      </div>

      <div class="v2-text-col">
        <span class="v2-section-tag">About ACT Dental</span>
        <h2 class="v2-section-title">Meet ACT Dental — Your Family's Smile Partner.</h2>
        <p class="v2-section-body">
          Go from anxious to confident in minutes. Our practice was built around the patient experience —
          from our gentle approach and advanced technology to our transparent pricing and flexible scheduling.
          We help Phoenix families smile better, faster.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Board-certified dentists with 20+ years combined experience</li>
          <li><i class="fas fa-check-circle"></i> CEREC same-day crowns, 3D imaging & digital impressions</li>
          <li><i class="fas fa-check-circle"></i> Early morning, evening & Saturday hours</li>
          <li><i class="fas fa-check-circle"></i> Sedation dentistry for anxious patients</li>
          <li><i class="fas fa-check-circle"></i> Most major insurance accepted + flexible financing</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Meet Our Team</a>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     GENERAL DENTISTRY — two-col reversed, light bg
     ================================================================ --}}
<section class="v2-meet" style="background:var(--off-white);">
  <div class="sr-container">
    <div class="v2-two-col v2-two-col--reversed">

      <div class="v2-text-col">
        <span class="v2-section-tag">General & Preventive</span>
        <h2 class="v2-section-title">A Healthy Foundation for Every Smile.</h2>
        <p class="v2-section-body">
          Regular exams and professional cleanings are the most powerful investment you can make
          in your long-term health. Our thorough approach catches small issues before they become expensive ones.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Comprehensive exams with digital X-rays</li>
          <li><i class="fas fa-check-circle"></i> Professional cleanings & periodontal care</li>
          <li><i class="fas fa-check-circle"></i> Sealants, fluoride treatment & cavity prevention</li>
          <li><i class="fas fa-check-circle"></i> Nightguards, mouthguards & TMJ treatment</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Explore Preventive Care</a>
      </div>

      <div class="v2-media-col">
        <div class="v2-media-img v2-media-img--light">
          <i class="fas fa-teeth"></i>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     COSMETIC — two-col, white bg
     ================================================================ --}}
<section class="v2-meet">
  <div class="sr-container">
    <div class="v2-two-col">

      <div class="v2-media-col">
        <div class="v2-media-img v2-media-img--blue" style="background:linear-gradient(135deg,#ede9fe,#ddd6fe); color:#7c3aed;">
          <i class="fas fa-smile"></i>
        </div>
      </div>

      <div class="v2-text-col">
        <span class="v2-section-tag">Cosmetic Dentistry</span>
        <h2 class="v2-section-title">Your Dream Smile is Closer Than You Think.</h2>
        <p class="v2-section-body">
          Whether you want a subtle refresh or a complete transformation, our cosmetic services
          are designed around your vision. We make the process feel exciting, not intimidating.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Professional whitening — in-office & take-home</li>
          <li><i class="fas fa-check-circle"></i> Porcelain veneers & composite bonding</li>
          <li><i class="fas fa-check-circle"></i> Invisalign clear aligner therapy</li>
          <li><i class="fas fa-check-circle"></i> Full smile makeovers with digital preview</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Explore Cosmetic Care</a>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     SERVICES MODULE GRID — 3-col cards, light gray bg
     ================================================================ --}}
<section class="v2-modules">
  <div class="sr-container">
    <div class="v2-modules__header">
      <span class="v2-section-tag">150+ Services & Treatments</span>
      <h2 class="v2-section-title">Infinite Possibilities for Your Smile.</h2>
      <p class="v2-section-body" style="margin:0;">
        From routine cleanings to full mouth reconstructions, our practice covers every
        aspect of your oral health with the same exceptional standard of care.
      </p>
    </div>

    <div class="v2-modules__grid">

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-teeth"></i></div>
        <h3>General Dentistry</h3>
        <p>Preventive cleanings, fillings, and comprehensive exams that keep your smile healthy for life.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-smile"></i></div>
        <h3>Cosmetic Dentistry</h3>
        <p>Veneers, bonding, whitening, and smile makeovers that transform your confidence.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-tooth"></i></div>
        <h3>Dental Implants</h3>
        <p>Permanent tooth replacement that looks, feels, and functions just like natural teeth.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-magic"></i></div>
        <h3>Invisalign</h3>
        <p>Custom clear aligners with monthly check-ins and a digital preview of your result.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-child"></i></div>
        <h3>Children's Dentistry</h3>
        <p>Gentle, fear-free visits that give kids a lifelong positive view of dental care.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-heartbeat"></i></div>
        <h3>Emergency Care</h3>
        <p>Same-day slots for toothaches, broken teeth, and lost restorations — we're here.</p>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     PERSONAS — "Complete Design Control" / "Created for Everyone"
     4-col grid, white bg
     ================================================================ --}}
<section class="v2-personas">
  <div class="sr-container">

    <div class="v2-personas__header">
      <span class="v2-section-tag">Complete Care Control</span>
      <h2 class="v2-section-title">Created for Every Patient.</h2>
      <p class="v2-section-body" style="margin:0;">
        No matter where you're starting from, we have a clear path to the smile you deserve.
      </p>
    </div>

    <div class="v2-personas__tabs">

      <div class="v2-persona">
        <span class="v2-persona__type">Families</span>
        <h3>Everyone Under One Roof</h3>
        <p>Kids, teens, adults, and seniors — coordinate appointments so your whole family comes in together.</p>
        <p class="v2-persona__quote">"We bring all four kids here. The staff knows each one by name." — The Martinez Family</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Anxious Patients</span>
        <h3>Nervous? You're Safe Here.</h3>
        <p>Sedation options, noise-canceling headphones, and a team trained in anxiety-free dental techniques.</p>
        <p class="v2-persona__quote">"I hadn't been to the dentist in 12 years. ACT Dental changed that." — David K.</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">New Patients</span>
        <h3>A Fresh Start Begins Here</h3>
        <p>New patient specials, easy online paperwork, and time to understand your goals before recommending anything.</p>
        <p class="v2-persona__quote">"The first visit felt like meeting friends who happened to be great dentists." — Priya S.</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Smile Seekers</span>
        <h3>Ready for Your Glow-Up?</h3>
        <p>Invisalign, veneers, or whitening — we design the smile of your dreams with a digital preview first.</p>
        <p class="v2-persona__quote">"I always hated my smile in photos. After veneers, I can't stop smiling." — Jessica T.</p>
      </div>

    </div>

  </div>
</section>

{{-- ================================================================
     TESTIMONIALS — 3-col reviews, light gray bg
     ================================================================ --}}
<section class="v2-reviews">
  <div class="sr-container">

    <div class="v2-reviews__header">
      <span class="v2-section-tag">Patient Reviews</span>
      <h2 class="v2-section-title">Trusted by More Than 12,000 Patients.</h2>
      <p class="v2-section-body" style="margin:0;">127 five-star Google reviews and counting. Here's what our community says.</p>
    </div>

    <div class="v2-reviews__grid">

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>A Necessary Practice</h4>
        <blockquote>"ACT Dental is in a league of its own. The technology is cutting-edge, the staff is brilliant, and my family has never felt so well cared for. We won't go anywhere else."</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">CK</div>
          <div>
            <strong>Caleb K.</strong>
            <span>Patient for 6 years</span>
          </div>
        </div>
      </div>

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>ACT Dental Makes It Simple</h4>
        <blockquote>"Booking is effortless, reminders come automatically, and the team always picks up right where we left off. I've recommended ACT Dental to everyone I know."</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">JB</div>
          <div>
            <strong>Josh B.</strong>
            <span>Invisalign Patient</span>
          </div>
        </div>
      </div>

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>Incredibly Supportive Team</h4>
        <blockquote>"I needed emergency care on a Saturday and ACT Dental got me in within the hour. The dentist was calm and thorough — I was feeling better before I even left the chair."</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">MH</div>
          <div>
            <strong>Maria H.</strong>
            <span>Emergency Patient</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     GUARANTEE STRIP — white bg, 3 guarantees
     ================================================================ --}}
<section class="v2-guarantee">
  <div class="sr-container">
    <div class="v2-guarantee__inner">

      <div class="v2-guarantee-item">
        <i class="fas fa-undo-alt"></i>
        <div>
          <h4>100% Satisfaction Promise</h4>
          <p>If you're not completely happy with your visit, we'll make it right — no questions asked.</p>
        </div>
      </div>

      <div class="v2-guarantee-item">
        <i class="fas fa-headset"></i>
        <div>
          <h4>Unlimited Support</h4>
          <p>Call or message our team any time. We're available beyond office hours for urgent questions.</p>
        </div>
      </div>

      <div class="v2-guarantee-item">
        <i class="fas fa-sync-alt"></i>
        <div>
          <h4>Lifetime Preventive Updates</h4>
          <p>Annual check-ups and cleanings keep your smile current with the latest preventive standards.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ================================================================
     CTA — bg-black, centered (sr-one-col-01 bg-black)
     ================================================================ --}}
<section class="v2-cta">
  <div class="sr-container">
    <div class="v2-cta__inner">
      <h2>Start Building a Healthier Smile Today.</h2>
      <p>New patients receive a complimentary comprehensive exam and X-rays. No insurance required.</p>
      <div class="v2-cta__row">
        <a href="#" class="sr-btn sr-btn-primary">Book Your Free Exam</a>
        <a href="tel:+15550123456" class="sr-btn sr-btn-outline-white">
          <i class="fas fa-phone"></i>&nbsp; (555) 012-3456
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
