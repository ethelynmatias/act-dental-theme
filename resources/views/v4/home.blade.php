@extends('layouts.layout')

@push('styles')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/v4.css') }}">
@endpush

@section('content')

{{-- ===== HERO ===== --}}
<section class="v4-hero">
  <div class="container">
    <div class="v4-hero-inner">

      <div>
        <div class="v4-hero-chip">
          <i class="fas fa-award"></i> Phoenix's Most Trusted Dental Practice
        </div>
        <h1>A Scalable Smile Built on <span class="accent">Trust &amp; Expertise</span></h1>
        <p>Clean, consistent dental care that builds confidence fast — and makes your family look and feel their best from the very first visit. No surprises, no pressure, just exceptional results.</p>
        <div class="v4-hero-cta">
          <a href="#" class="btn-accent"><i class="fas fa-calendar-check"></i> Book Appointment</a>
          <a href="#" class="btn-outline-dark">View Our Services</a>
        </div>
        <div class="v4-hero-proof">
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Same-Day Availability</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Most Insurance Accepted</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> No Surprise Billing</div>
        </div>
      </div>

      <div class="v4-hero-img-col">
        <div class="v4-hero-img"><i class="fas fa-tooth"></i></div>
        <div class="v4-hero-overlay">
          <div class="icon"><i class="fas fa-star"></i></div>
          <div>
            <strong>4.9 / 5.0 Rating</strong>
            <span>Based on 1,200+ reviews</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== TRUST / FEATURE STRIP ===== --}}
<section class="v4-trust-strip">
  <div class="container">
    <div class="v4-trust-inner">
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
        <div>
          <h4>Great Speed &amp; Results</h4>
          <p>Same-day appointments &amp; CEREC crowns in a single visit</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-sync-alt"></i></div>
        <div>
          <h4>Regular Care Updates</h4>
          <p>Annual technology upgrades and continuing education</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-book-open"></i></div>
        <div>
          <h4>Rich Services, Outstanding Support</h4>
          <p>50+ dental services backed by a caring team</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-shield-alt"></i></div>
        <div>
          <h4>No Surprises, Ever</h4>
          <p>Transparent pricing reviewed before any treatment begins</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== SERVICES — "Pick the Perfect Treatment" ===== --}}
<section class="v4-services">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">Our Services</div>
      <div class="v4-divider"></div>
      <h2>Pick the Perfect Treatment.<br>Beautiful Results, Every Time.</h2>
      <p>Browse our complete library of dental services — each one designed for lasting results and your total comfort.</p>
    </div>
    <div class="v4-service-grid">
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-teeth"></i></div>
        <h3>General Dentistry</h3>
        <p>Comprehensive exams, cleanings, fillings, and preventive care to maintain your best smile year after year.</p>
        <a href="#" class="link">View Service <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-smile"></i></div>
        <h3>Cosmetic Dentistry</h3>
        <p>Veneers, bonding, whitening, and smile makeovers that transform your appearance and your confidence.</p>
        <a href="#" class="link">View Service <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-tooth"></i></div>
        <h3>Dental Implants</h3>
        <p>Permanent tooth replacement that looks, feels, and functions just like the real thing — for life.</p>
        <a href="#" class="link">View Service <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-magic"></i></div>
        <h3>Invisalign</h3>
        <p>Custom clear aligner treatment with monthly check-ins and a digital preview of your finished smile.</p>
        <a href="#" class="link">View Service <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-child"></i></div>
        <h3>Pediatric Dentistry</h3>
        <p>Gentle, fun, fear-free dental visits that give kids a lifelong positive relationship with oral health.</p>
        <a href="#" class="link">View Service <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-heartbeat"></i></div>
        <h3>Emergency Dental Care</h3>
        <p>Same-day emergency slots for toothaches, broken teeth, and lost restorations — we're here when you need us.</p>
        <a href="#" class="link">View Service <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

{{-- ===== TREATMENT SHOWCASE — act3-style card gallery ===== --}}
<section class="v4-showcase">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">Treatment Experience</div>
      <div class="v4-divider"></div>
      <h2>Ready-Made Care Plans to Help You Start Right Away</h2>
      <p>Each treatment follows a clear, proven process — so you always know what to expect from your first visit to your final result.</p>
    </div>
    <div class="v4-showcase-scroll">
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--1">
          <i class="fas fa-teeth-open"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Preventive</div>
          <div class="v4-showcase-card__title">Cleaning &amp; Exam</div>
          <p class="v4-showcase-card__desc">Annual exam, full-mouth X-rays, and professional polish — all in one visit.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--2">
          <i class="fas fa-smile-beam"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Cosmetic</div>
          <div class="v4-showcase-card__title">Smile Makeover</div>
          <p class="v4-showcase-card__desc">Veneers, whitening, and bonding combined for a complete smile transformation.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--3">
          <i class="fas fa-tooth"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Restorative</div>
          <div class="v4-showcase-card__title">CEREC Same-Day Crown</div>
          <p class="v4-showcase-card__desc">Digital scan, milled crown, and permanent placement — all in a single appointment.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--4">
          <i class="fas fa-magic"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Orthodontics</div>
          <div class="v4-showcase-card__title">Invisalign Journey</div>
          <p class="v4-showcase-card__desc">3D digital smile preview, custom aligners, and monthly progress check-ins.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== DARK ABOUT ===== --}}
<section class="v4-about-dark">
  <div class="container">
    <div class="v4-about-inner">
      <div>
        <div class="v4-overline">About ACT Dental</div>
        <div class="v4-divider"></div>
        <h2>Effortless, Exceptional Care at Every Step</h2>
        <p class="v4-about-desc">We designed ACT Dental around the patient experience — every touchpoint from booking to follow-up is effortless, warm, and respectful of your time. No dental factory. Just exceptional, personal care.</p>
        <div class="v4-feature-list">
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Board-certified dentists with 20+ years of combined experience in all major specialties</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>CEREC same-day crowns, 3D imaging, and digital workflow for faster, more accurate treatment</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Flexible scheduling including early mornings, evenings, and Saturday appointments</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Financing through CareCredit, in-house payment plans, and most major insurance accepted</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Sedation dentistry available for anxious patients and complex procedures</p>
          </div>
        </div>
        <a href="#" class="btn-accent">Meet Our Team</a>
      </div>
      <div class="v4-about-img-col"><i class="fas fa-user-md"></i></div>
    </div>
  </div>
</section>

{{-- ===== METRICS ===== --}}
<section class="v4-metrics">
  <div class="container">
    <div class="v4-metrics-inner">
      <div class="v4-metric">
        <span class="num">20+</span>
        <span class="lbl">Years of Practice</span>
      </div>
      <div class="v4-metric">
        <span class="num">12K+</span>
        <span class="lbl">Patients Served</span>
      </div>
      <div class="v4-metric">
        <span class="num">4.9★</span>
        <span class="lbl">Google Rating</span>
      </div>
      <div class="v4-metric">
        <span class="num">98%</span>
        <span class="lbl">Would Recommend</span>
      </div>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="v4-testimonials">
  <div class="container">
    <div class="v4-testimonials-header">
      <div class="v4-overline">Patient Reviews</div>
      <div class="v4-divider"></div>
      <h2>Inspiring Smiles Made with ACT Dental</h2>
      <p>Real patients, real results — here are a few of the stories that inspire us every day.</p>
    </div>
    <div class="v4-testimonial-grid">
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"I was terrified of dentists for 15 years. ACT Dental's team was so patient and kind — they completely changed my relationship with dental care. I even look forward to my cleanings now."</blockquote>
        <div class="author">
          <div class="avatar">RM</div>
          <div>
            <strong>Rachel M.</strong>
            <span>Patient for 4 years</span>
          </div>
        </div>
      </div>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"The CEREC same-day crown process was seamless. I came in with a broken molar at 9am and walked out with a permanent crown by noon. The fit is perfect and it looks totally natural."</blockquote>
        <div class="author">
          <div class="avatar">DO</div>
          <div>
            <strong>Daniel O.</strong>
            <span>CEREC Crown Patient</span>
          </div>
        </div>
      </div>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"Our whole family of five sees ACT Dental. They coordinate our appointments so we can all come in together, the kids love the team, and the care is consistently excellent across the board."</blockquote>
        <div class="author">
          <div class="avatar">LP</div>
          <div>
            <strong>Laura P.</strong>
            <span>Family of 5 Patients</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== PATIENT GALLERY — act3 "customer websites" style ===== --}}
<section class="v4-gallery">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">Success Stories</div>
      <div class="v4-divider"></div>
      <h2>Inspiring Smiles Transformed at ACT Dental</h2>
      <p>From routine cleanings to complete smile makeovers — here are real cases from real patients across Phoenix.</p>
    </div>
    <div class="v4-gallery-grid">
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--1"><i class="fas fa-smile"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Smile Makeover</div>
          <div class="v4-gallery-card__sub">Veneers · 6-month treatment</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--2"><i class="fas fa-tooth"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Full Implant Restoration</div>
          <div class="v4-gallery-card__sub">Implants · 4 teeth replaced</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--3"><i class="fas fa-magic"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Invisalign Transformation</div>
          <div class="v4-gallery-card__sub">Clear aligners · 14 months</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--4"><i class="fas fa-star"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Teeth Whitening</div>
          <div class="v4-gallery-card__sub">In-office Zoom · 1 session</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--5"><i class="fas fa-teeth-open"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Porcelain Veneers</div>
          <div class="v4-gallery-card__sub">Cosmetic · 8 veneers placed</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--6"><i class="fas fa-child"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Pediatric Care</div>
          <div class="v4-gallery-card__sub">Family plan · 3 kids enrolled</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--7"><i class="fas fa-heartbeat"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Emergency Repair</div>
          <div class="v4-gallery-card__sub">Same-day · Broken molar</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--8"><i class="fas fa-user-md"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Sedation Dentistry</div>
          <div class="v4-gallery-card__sub">Anxiety-free · Complex case</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== INSURANCE ===== --}}
<section class="v4-insurance">
  <div class="container">
    <div class="v4-insurance-inner">
      <div class="v4-insurance-label">We Accept</div>
      <div class="v4-insurance-logos">
        <div class="v4-insurance-pill">Delta Dental</div>
        <div class="v4-insurance-pill">Cigna</div>
        <div class="v4-insurance-pill">Aetna</div>
        <div class="v4-insurance-pill">MetLife</div>
        <div class="v4-insurance-pill">Humana</div>
        <div class="v4-insurance-pill">United Healthcare</div>
        <div class="v4-insurance-pill">Guardian</div>
        <div class="v4-insurance-pill">+ More</div>
      </div>
    </div>
  </div>
</section>

{{-- ===== CTA ===== --}}
<section class="v4-cta">
  <div class="container">
    <div class="v4-cta-inner">
      <div>
        <h2>Ready for a Smile You'll Love?</h2>
        <p>Browse our full service library, run a free consultation, or book directly online — no wait, no hassle.</p>
      </div>
      <div class="v4-cta-buttons">
        <a href="#" class="btn-accent btn-lg"><i class="fas fa-calendar-check"></i> Book Appointment</a>
        <a href="tel:+15550123456" class="btn-outline-light">
          <i class="fas fa-phone"></i> (555) 012-3456
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
