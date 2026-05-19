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
          <i class="fas fa-network-wired"></i> Largest Private Dental Practice Network
        </div>
        <h1>We Help Independent Dentists <span class="accent">Thrive Together</span></h1>
        <p>Smile Source connects you to the right people, products, and services to boost profitability and accelerate your growth — without sacrificing the ownership you've worked so hard to build.</p>
        <div class="v4-hero-cta">
          <a href="#" class="btn-accent"><i class="fas fa-comments"></i> Let's Talk</a>
          <a href="#" class="btn-outline-dark">Why Smile Source</a>
        </div>
        <div class="v4-hero-proof">
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Reduce Your Overhead</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Connect With Top Dentists</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Accelerate Your Growth</div>
        </div>
      </div>

      <div class="v4-hero-img-col">
        <div class="v4-hero-img"><i class="fas fa-tooth"></i></div>
        <div class="v4-hero-overlay">
          <div class="icon"><i class="fas fa-users"></i></div>
          <div>
            <strong>1,100+ Member Dentists</strong>
            <span>Thriving together since 2006</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== FEATURE STRIP ===== --}}
<section class="v4-trust-strip">
  <div class="container">
    <div class="v4-trust-inner">
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-tag"></i></div>
        <div>
          <h4>Savings</h4>
          <p>Discounts and rebates that reduce your overhead with every purchase</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-rocket"></i></div>
        <div>
          <h4>Practice Growth</h4>
          <p>Technology, staffing, and proven solutions for unstoppable growth</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-bullhorn"></i></div>
        <div>
          <h4>Marketing</h4>
          <p>Expert strategies and brand specialists to attract and retain patients</p>
        </div>
      </div>
      <div class="v4-trust-item">
        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
        <div>
          <h4>Education</h4>
          <p>Industry-leading CE and resources for your entire dental team</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== MEMBERSHIP BENEFITS GRID ===== --}}
<section class="v4-services">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">Membership Benefits</div>
      <div class="v4-divider"></div>
      <h2>Everything Your Practice Needs.<br>One Membership. Real Results.</h2>
      <p>You'll enjoy access to a dedicated Member Success Specialist to help you optimize these benefits and more — all included in your Smile Source membership.</p>
    </div>
    <div class="v4-service-grid">
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-tag"></i></div>
        <h3>Savings</h3>
        <p>Supercharge your savings with discounts and rebates across dental technology, supplies, labs, and services — vetted and negotiated for you.</p>
        <a href="#" class="link">Explore Savings <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-chart-line"></i></div>
        <h3>Practice Growth</h3>
        <p>Position your practice for unstoppable growth with technology, staffing solutions, and proven strategies used by 1,100+ members.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-bullhorn"></i></div>
        <h3>Marketing</h3>
        <p>Get access to expert-driven marketing strategies and brand specialists to help you attract and retain more patients.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-handshake"></i></div>
        <h3>Networking</h3>
        <p>Connect with knowledgeable, friendly colleagues committed to strengthening and promoting independent dentistry. Community over competition.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Education</h3>
        <p>Access industry-leading continuing education and incredible resources for your entire team — clinical and business growth combined.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-user-check"></i></div>
        <h3>Member Success Specialist</h3>
        <p>A dedicated specialist assigned to your practice to help you maximize every benefit and get the most out of your membership.</p>
        <a href="#" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

{{-- ===== CHALLENGES SHOWCASE ===== --}}
<section class="v4-showcase">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">We Understand Your Challenges</div>
      <div class="v4-divider"></div>
      <h2>Owning a Private Practice Is Hard. We Make It Easier.</h2>
      <p>We understand the pressures you're facing. Smile Source was built specifically to address the real challenges independent dentists deal with every day.</p>
    </div>
    <div class="v4-showcase-scroll">
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--1">
          <i class="fas fa-arrow-up"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #1</div>
          <div class="v4-showcase-card__title">Rising Overhead</div>
          <p class="v4-showcase-card__desc">Our $1B+ purchasing power delivers discounts that directly counter rising supply and lab costs.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--2">
          <i class="fas fa-user-slash"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #2</div>
          <div class="v4-showcase-card__title">Team Retention</div>
          <p class="v4-showcase-card__desc">Staffing solutions and best practices help you attract, train, and keep your best people.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--3">
          <i class="fas fa-compress-arrows-alt"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #3</div>
          <div class="v4-showcase-card__title">Practice Consolidation</div>
          <p class="v4-showcase-card__desc">Stay independent while accessing the same scale benefits that make large groups powerful.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--4">
          <i class="fas fa-building"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #4</div>
          <div class="v4-showcase-card__title">Corporate Competition</div>
          <p class="v4-showcase-card__desc">Proven marketing and differentiation strategies help you compete and win in any market.</p>
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
        <div class="v4-overline">About Smile Source</div>
        <div class="v4-divider"></div>
        <h2>We Are Dentists Helping Dentists</h2>
        <p class="v4-about-desc">Since 2006, Smile Source has grown its network to 1,100+ dentists helping dentists. With over a billion dollars of purchasing power, Smile Source delivers deep discounts to members that increase profitability. We believe you deserve benefits like a DSO without sacrificing ownership. Helping private practice dentists make more money with less stress is our crowning achievement.</p>
        <div class="v4-feature-list">
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Founded in 2006 — nearly two decades of consistent growth and proven results</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>1,100+ independent member dentists thriving across the country</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Over $1 billion in collective purchasing power for unmatched vendor discounts</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Dedicated Member Success Specialist assigned to every member practice</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>DSO-level benefits with zero sacrifice of ownership or independence</p>
          </div>
        </div>
        <a href="#" class="btn-accent">Learn More About Us</a>
      </div>
      <div class="v4-about-img-col"><i class="fas fa-handshake"></i></div>
    </div>
  </div>
</section>

{{-- ===== METRICS ===== --}}
<section class="v4-metrics">
  <div class="container">
    <div class="v4-metrics-inner">
      <div class="v4-metric">
        <span class="num">2006</span>
        <span class="lbl">Founded</span>
      </div>
      <div class="v4-metric">
        <span class="num">1,100+</span>
        <span class="lbl">Member Dentists</span>
      </div>
      <div class="v4-metric">
        <span class="num">$1B+</span>
        <span class="lbl">Purchasing Power</span>
      </div>
      <div class="v4-metric">
        <span class="num">5</span>
        <span class="lbl">Core Benefit Areas</span>
      </div>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="v4-testimonials">
  <div class="container">
    <div class="v4-testimonials-header">
      <div class="v4-overline">Member Stories</div>
      <div class="v4-divider"></div>
      <h2>Inspiring Practices Thriving with Smile Source</h2>
      <p>Real members, real results — here's what independent dentists say about being part of the network.</p>
    </div>
    <div class="v4-testimonial-grid">
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"I would have never thought about my dental practice as the business it is today. It's exciting to be connected with other colleagues struggling and succeeding in similar ways. To know I have a professional family to lean on or be leaned on is priceless."</blockquote>
        <div class="author">
          <div class="avatar">JH</div>
          <div>
            <strong>Jeff Henneberg, DDS</strong>
            <span>Smile Source Spokane</span>
          </div>
        </div>
      </div>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"I now enjoy dentistry so much more. I have more appreciation for the team, the patients, and the colleagues I have. Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists and humans in the industry."</blockquote>
        <div class="author">
          <div class="avatar">KB</div>
          <div>
            <strong>Dr. Kyle Benton</strong>
            <span>Benton Family Dentistry</span>
          </div>
        </div>
      </div>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"When you join Smile Source, you'll find colleagues who care and are willing to share their experience so your practice grows faster. Community over competition is real here — not just a tagline."</blockquote>
        <div class="author">
          <div class="avatar">SS</div>
          <div>
            <strong>Smile Source Member</strong>
            <span>Independent Practice Owner</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== MEMBER NETWORK GALLERY ===== --}}
<section class="v4-gallery">
  <div class="container">
    <div class="v4-section-intro">
      <div class="v4-overline">The Network</div>
      <div class="v4-divider"></div>
      <h2>1,100+ Independent Practices Thriving Together</h2>
      <p>From solo practitioners to multi-provider practices — the Smile Source network spans the country and every type of independent dental practice.</p>
    </div>
    <div class="v4-gallery-grid">
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--1"><i class="fas fa-tag"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Savings Program</div>
          <div class="v4-gallery-card__sub">Discounts · Rebates · Vetted vendors</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--2"><i class="fas fa-chart-line"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Practice Growth</div>
          <div class="v4-gallery-card__sub">Technology · Staffing · Strategy</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--3"><i class="fas fa-bullhorn"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Marketing Support</div>
          <div class="v4-gallery-card__sub">Brand specialists · Patient growth</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--4"><i class="fas fa-users"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Peer Networking</div>
          <div class="v4-gallery-card__sub">1,100+ colleagues · Community</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--5"><i class="fas fa-graduation-cap"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Education &amp; CE</div>
          <div class="v4-gallery-card__sub">Clinical &amp; business · Whole team</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--6"><i class="fas fa-calendar-alt"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">The Exchange 2026</div>
          <div class="v4-gallery-card__sub">San Antonio · Sept 9–12, 2026</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--7"><i class="fas fa-user-check"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Member Success Specialist</div>
          <div class="v4-gallery-card__sub">Dedicated support · Personalized</div>
        </div>
      </div>
      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img v4-gallery-card__img--8"><i class="fas fa-shield-alt"></i></div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__name">Your Independence</div>
          <div class="v4-gallery-card__sub">DSO benefits · Zero sacrifice</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== ELITE VENDORS STRIP ===== --}}
<section class="v4-insurance">
  <div class="container">
    <div class="v4-insurance-inner">
      <div class="v4-insurance-label">Elite Vendors</div>
      <div class="v4-insurance-logos">
        <div class="v4-insurance-pill">ClearCorrect</div>
        <div class="v4-insurance-pill">Dentsply Sirona</div>
        <div class="v4-insurance-pill">Envista</div>
        <div class="v4-insurance-pill">Henry Schein Dental</div>
        <div class="v4-insurance-pill">MicroDental</div>
        <div class="v4-insurance-pill">NDX</div>
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
        <h2>Ready to Thrive as an Independent Dentist?</h2>
        <p>Join 1,100+ independent dentists already thriving with Smile Source. Let's talk about what membership looks like for your practice.</p>
      </div>
      <div class="v4-cta-buttons">
        <a href="#" class="btn-accent btn-lg"><i class="fas fa-comments"></i> Let's Talk</a>
        <a href="#" class="btn-outline-light">
          <i class="fas fa-arrow-right"></i> Join Now
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
