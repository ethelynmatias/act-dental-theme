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
          <i class="fas fa-award"></i> Dental Practice Coaching &amp; Consulting
        </div>
        <h1>Unleash Your Potential with <span class="accent">Better Practice,<br>Better Life</span></h1>
        <p>Are you a dentist seeking to elevate your practice, boost profitability, and enhance your work-life balance? ACT Dental coaches help you build the practice — and the life — you've always envisioned.</p>
        <div class="v4-hero-cta">
          <a href="#" class="btn-accent"><i class="fas fa-rocket"></i> Get Started Today</a>
          <a href="#" class="btn-outline-dark">Learn About Coaching</a>
        </div>
        <div class="v4-hero-proof">
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Personalized Coaching</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Proven Systems</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Dentists in All 50 States</div>
        </div>
      </div>

      <div class="v4-hero-img-col">
        <div class="v4-hero-img"><i class="fas fa-chart-line"></i></div>
        <div class="v4-hero-overlay">
          <div class="icon"><i class="fas fa-star"></i></div>
          <div>
            <strong>Trusted by Dentists Nationwide</strong>
            <span>Hundreds of 5-star coaching results</span>
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
        <div class="icon"><i class="fas fa-bullseye"></i></div>
        <div>
          <h4>Clarify Your Vision</h4>
          <p>Build a strategic roadmap so your practice reflects what truly matters to you</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-dollar-sign"></i></div>
        <div>
          <h4>Maximize Profitability</h4>
          <p>Reduce write-offs, optimize reimbursements, and grow your financial margin</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div>
          <h4>Build Your Dream Team</h4>
          <p>Hire, train, and retain top talent with best-practice people management systems</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-balance-scale"></i></div>
        <div>
          <h4>Work-Life Balance</h4>
          <p>Work smarter, not harder — and build a life that energizes rather than depletes you</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== COACHING PROGRAMS ===== --}}
<section class="v4-services">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">Our Programs</div>
      <div class="v4-divider"></div>
      <h2>Pick the Perfect Coaching Program.<br>Transformative Results, Every Time.</h2>
      <p>From community membership to one-on-one coaching — ACT Dental has a program designed to meet you exactly where you are and take you to where you want to be.</p>
    </div>
    <div class="v4-service-grid">
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-users"></i></div>
        <h3>Best Practices Association</h3>
        <p>Join a community of driven dentists committed to best practices, continuous learning, and lasting success. Events, podcast, and resources included.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
        <h3>TTT Group Coaching</h3>
        <p>Small-group coaching with like-minded dentists. Shared accountability, real strategies, and measurable results in a collaborative environment.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-user-tie"></i></div>
        <h3>Pro Coaching</h3>
        <p>One-on-one personalized coaching with a dedicated ACT Dental expert committed to your specific goals, challenges, and vision.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-calculator"></i></div>
        <h3>GAPs Calculator</h3>
        <p>Identify the gaps between your current performance and your practice's full potential with our powerful proprietary diagnostic tool.</p>
        <a href="#" class="link">Try It Free <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-podcast"></i></div>
        <h3>Best Practices Podcast</h3>
        <p>Weekly insights from Kirk Behrendt, top ACT coaches, and dental industry leaders to keep your thinking sharp and your practice growing.</p>
        <a href="#" class="link">Listen Now <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-calendar-alt"></i></div>
        <h3>Events &amp; Study Clubs</h3>
        <p>Live and virtual events where you connect with peers, learn from experts, and leave every session re-energized and ready to lead.</p>
        <a href="#" class="link">View Events <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

{{-- ===== CHALLENGES SHOWCASE ===== --}}
<section class="v4-showcase">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">The Challenges We Solve</div>
      <div class="v4-divider"></div>
      <h2>Coaching Designed Around the Real Challenges Dentists Face</h2>
      <p>ACT Dental coaching addresses the most common — and most costly — obstacles standing between you and the practice you deserve.</p>
    </div>
    <div class="v4-showcase-scroll">
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--1">
          <i class="fas fa-heart-broken"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #1</div>
          <div class="v4-showcase-card__title">Burnout</div>
          <p class="v4-showcase-card__desc">54.9% of dentists experience burnout symptoms. ACT coaching restores your passion and energy.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--2">
          <i class="fas fa-file-invoice-dollar"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #2</div>
          <div class="v4-showcase-card__title">PPO Reimbursements</div>
          <p class="v4-showcase-card__desc">82.4% of dentists participate in PPOs. We help you optimize revenue within the system.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--3">
          <i class="fas fa-user-friends"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #3</div>
          <div class="v4-showcase-card__title">Hiring &amp; Retention</div>
          <p class="v4-showcase-card__desc">67% of practice owners struggle to find and keep qualified team members. We fix that.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--4">
          <i class="fas fa-building"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #4</div>
          <div class="v4-showcase-card__title">DSO Competition</div>
          <p class="v4-showcase-card__desc">Differentiate your independent practice and thrive in the face of growing corporate competition.</p>
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
        <h2>Every Great Practice Deserves a Great Coach</h2>
        <p class="v4-about-desc">ACT Dental is uniquely positioned to address the challenges faced by dentists today. Our expert coaches possess the experience, knowledge, and tools to provide tailored solutions that transform your practice and enhance your personal and professional life. At ACT Dental, we believe every successful practice should operate under best practices — the question is, who's teaching yours?</p>
        <div class="v4-feature-list">
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Personalized coaching tailored to your practice's unique goals and challenges</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Proven systems for team building, leadership development, and operational efficiency</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Financial strategies to reduce write-offs, boost collections, and grow your margin</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Work-life balance frameworks so you love going to work — and leaving — again</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>A community of like-minded practice owners across all 50 states</p>
          </div>
        </div>
        <a href="#" class="btn-accent">Meet Our Coaches</a>
      </div>
      <div class="v4-about-img-col"><i class="fas fa-user-tie"></i></div>
    </div>
  </div>
</section>

{{-- ===== METRICS ===== --}}
<section class="v4-metrics">
  <div class="container">
    <div class="v4-metrics-inner">
      <div class="v4-metric">
        <span class="num">54.9%</span>
        <span class="lbl">of Dentists Experience Burnout</span>
      </div>
      <div class="v4-metric">
        <span class="num">82.4%</span>
        <span class="lbl">Participate in PPO Plans</span>
      </div>
      <div class="v4-metric">
        <span class="num">67%</span>
        <span class="lbl">Report Hiring Challenges</span>
      </div>
      <div class="v4-metric">
        <span class="num">3×</span>
        <span class="lbl">Average Revenue Growth for Clients</span>
      </div>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="v4-testimonials">
  <div class="container">
    <div class="v4-testimonials-header">
      <div class="v4-overline">Dentist Testimonials</div>
      <div class="v4-divider"></div>
      <h2>Inspiring Practices Made with ACT Dental Coaching</h2>
      <p>Real dentists, real results — here are a few of the stories that inspire us every day.</p>
    </div>
    <div class="v4-testimonial-grid">
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"ACT Dental has helped me change my practice which changed my life! The focus really is 'Better Practice Better Life.' If you are dreaming about a practice you want to drive to everyday, ACT will help you get there."</blockquote>
        <div class="author">
          <div class="avatar">AH</div>
          <div>
            <strong>Dr. Alice Hale</strong>
            <span>Aiken, SC</span>
          </div>
        </div>
      </div>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"Our practice revenues have grown three-fold since I started working with ACT. My team is now more aligned than ever, and this has given me greater peace of mind. Highly recommend!"</blockquote>
        <div class="author">
          <div class="avatar">SC</div>
          <div>
            <strong>Dr. Sapna Chandra</strong>
            <span>Fairfax, CA</span>
          </div>
        </div>
      </div>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"Their coaching program changed my life. I now have a practice that supports a balanced lifestyle with my family as the focus and an amazing team that I love working with."</blockquote>
        <div class="author">
          <div class="avatar">KG</div>
          <div>
            <strong>Dr. Kevin Groth</strong>
            <span>Bingham Farms, MI</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== DENTIST RESULTS GALLERY ===== --}}
<section class="v4-gallery">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">Success Stories</div>
      <div class="v4-divider"></div>
      <h2>Inspiring Practices Transformed by ACT Dental</h2>
      <p>From burned-out solo practitioners to thriving multi-provider practices — here are the journeys of dentists who said yes to coaching.</p>
    </div>
    <div class="v4-gallery-grid">
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--1"><i class="fas fa-heart"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Alice Hale — Aiken, SC</div>
          <div class="v4-gallery-card__sub">Burnout recovery · Renewed passion</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--2"><i class="fas fa-chart-line"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Sapna Chandra — Fairfax, CA</div>
          <div class="v4-gallery-card__sub">3× revenue growth · Team alignment</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--3"><i class="fas fa-balance-scale"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Kevin Groth — Bingham Farms, MI</div>
          <div class="v4-gallery-card__sub">Work-life balance · Family-first culture</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--4"><i class="fas fa-star"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Kristen Donohue — Burke, VA</div>
          <div class="v4-gallery-card__sub">PPO → Fee-for-service transformation</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--5"><i class="fas fa-trophy"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Emily Stancato — Union Grove, WI</div>
          <div class="v4-gallery-card__sub">Record profitability · Healthier culture</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--6"><i class="fas fa-users"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. James Maxwell — St. Louis, MO</div>
          <div class="v4-gallery-card__sub">TTT Study Club · Community growth</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--7"><i class="fas fa-lightbulb"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Denise Halliburton — Ellicott City, MD</div>
          <div class="v4-gallery-card__sub">90-day transformation · Solo practice</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--8"><i class="fas fa-rocket"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Dr. Brandon James — Overland Park, KS</div>
          <div class="v4-gallery-card__sub">BPA · #1 coaching firm endorsement</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== RESOURCES STRIP ===== --}}
<section class="v4-insurance">
  <div class="container">
    <div class="v4-insurance-inner">
      <div class="v4-insurance-label">Resources</div>
      <div class="v4-insurance-logos">
        <div class="v4-insurance-pill">GAPs Calculator</div>
        <div class="v4-insurance-pill">Podcast</div>
        <div class="v4-insurance-pill">Magazine</div>
        <div class="v4-insurance-pill">Blog</div>
        <div class="v4-insurance-pill">Events</div>
        <div class="v4-insurance-pill">Study Clubs</div>
        <div class="v4-insurance-pill">Downloads</div>
        <div class="v4-insurance-pill">Partnerships</div>
      </div>
    </div>
  </div>
</section>

{{-- ===== CTA ===== --}}
<section class="v4-cta">
  <div class="container">
    <div class="v4-cta-inner">
      <div>
        <h2>Ready to Create a Better Practice and a Better Life?</h2>
        <p>Schedule your free practice discovery call today. No pressure — just an honest conversation about your goals.</p>
      </div>
      <div class="v4-cta-buttons">
        <a href="#" class="btn-accent btn-lg"><i class="fas fa-rocket"></i> Get Started Today</a>
        <a href="tel:+18008518186" class="btn-outline-light">
          <i class="fas fa-phone"></i> 800-851-8186
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
