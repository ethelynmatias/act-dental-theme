@extends('layouts.layout', ['title' => 'Home'])

@push('styles')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/v4.css') }}">
@endpush

@section('content')
@php $vp = '/'.request()->segment(1); @endphp

{{-- ===== HERO ===== --}}
<section class="v4-hero">
  <div class="container">
    <div class="v4-hero-inner">

      <div data-animate="fade-right">
        <div class="v4-hero-chip">
          <i class="fas fa-network-wired"></i> Largest Private Dental Practice Network
        </div>
        <h1>We Help Independent Dentists <span class="accent">Thrive Together</span></h1>
        <p>Smile Source connects you to the right people, products, and services to boost profitability and accelerate your growth — without sacrificing the ownership you've worked so hard to build.</p>
        <div class="v4-hero-cta">
          <a href="{{ $vp }}/lets-talk" class="btn-accent"><i class="fas fa-comments"></i> Let's Talk</a>
          <a href="{{ $vp }}/why-smile-source/about-us" class="btn-outline-dark">Why Smile Source</a>
        </div>
        <div class="v4-hero-proof">
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Reduce Your Overhead</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Connect With Top Dentists</div>
          <div class="v4-proof-item"><i class="fas fa-check-circle"></i> Accelerate Your Growth</div>
        </div>
      </div>

      <div class="v4-hero-img-col" data-animate="fade-left">
        <div class="v4-hero-img"><img src="{{ asset('images/v4/hero-home.gif') }}" alt="Smile Source Network"></div>
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
    <div class="v4-trust-inner" data-stagger>
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
    <div class="v4-service-grid" data-stagger>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-tag"></i></div>
        <h3>Savings</h3>
        <p>Save up to 40% on dental supplies, 30% on lab work, and 45% with manufacturers. Over 90 vetted vendors — negotiated rates on technology, supplies, labs, and services active from day one.</p>
        <a href="{{ $vp }}/membership/savings" class="link">Explore Savings <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-chart-line"></i></div>
        <h3>Practice Growth</h3>
        <p>Recruiting, benefits, payroll, patient financing, and strategic consulting — one Smile Source member grew from $500K to nearly $2 million annually using these same proven systems.</p>
        <a href="{{ $vp }}/membership/practice-growth" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-bullhorn"></i></div>
        <h3>Marketing</h3>
        <p>Geodemographic targeting, consumer travel pattern analysis, digital presence optimization, high-intent Google Ads, and SMS campaigns — marketing built specifically for private dental practices.</p>
        <a href="{{ $vp }}/membership/marketing" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-handshake"></i></div>
        <h3>Networking</h3>
        <p>Local group leaders organize in-person meetings in cities across America. Online forums, virtual fireside chats, and the ability to crowdsource 1,100+ highly qualified peers online 24/7 — community over competition.</p>
        <a href="{{ $vp }}/membership/networking" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Education</h3>
        <p>Hundreds of CE courses annually — in-person and online — for dentists, hygienists, dental assistants, and front office staff. Practice management, case planning, new procedures, 3D technology, and more.</p>
        <a href="{{ $vp }}/membership/education" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v4-service-card">
        <div class="icon"><i class="fas fa-user-check"></i></div>
        <h3>Member Success Specialist</h3>
        <p>Your dedicated Member Success Specialist connects you with top consultants and vendors, helps you activate every benefit, and ensures you see real results from your membership from day one.</p>
        <a href="{{ $vp }}/lets-talk" class="link">Learn More <i class="fas fa-arrow-right"></i></a>
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
    <div class="v4-showcase-scroll" data-stagger>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--1">
          <i class="fas fa-coins"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #1</div>
          <div class="v4-showcase-card__title">Rising Overhead</div>
          <p class="v4-showcase-card__desc">Save up to 40% on dental supplies, 30% on lab work, and 45% with manufacturers — vetted and negotiated for you.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--2">
          <i class="fas fa-users"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #2</div>
          <div class="v4-showcase-card__title">Team Retention</div>
          <p class="v4-showcase-card__desc">Group health insurance, recruiting, benefits, and payroll support — saving your team thousands annually on coverage alone.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--3">
          <i class="fas fa-shield-alt"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #3</div>
          <div class="v4-showcase-card__title">Practice Consolidation</div>
          <p class="v4-showcase-card__desc">86% of the dental market is still independent. Stay strong with 1,100+ peers, DSO-level services, and zero sacrifice of ownership.</p>
        </div>
      </div>
      <div class="v4-showcase-card">
        <div class="v4-showcase-card__thumb v4-showcase-card__thumb--4">
          <i class="fas fa-bullseye"></i>
        </div>
        <div class="v4-showcase-card__body">
          <div class="v4-showcase-card__label">Challenge #4</div>
          <div class="v4-showcase-card__title">Corporate Competition</div>
          <p class="v4-showcase-card__desc">Geodemographic targeting, digital presence optimization, and high-intent patient campaigns — the same marketing power that large groups use, built for independent practices.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== DARK ABOUT ===== --}}
<section class="v4-about-dark">
  <div class="container">
    <div class="v4-about-inner">
      <div data-animate="fade-right">
        <div class="v4-overline">About Smile Source</div>
        <div class="v4-divider"></div>
        <h2>We Are Dentists Helping Dentists</h2>
        <p class="v4-about-desc">Since 2006, Smile Source has grown its network to 1,100+ dentists helping dentists across 650 member locations. Smile Source is not a DSO — you keep 100% ownership and complete autonomy. We offer DSO-level support: group purchasing, staff recruiting, in-house dental plans, patient financing, dental practice marketing, and strategic practice consulting. 86% of the dental market is still independent — and thriving.</p>
        <div class="v4-feature-list">
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Founded in 2006 — nearly two decades of proven, consistent results</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>1,100+ independent member dentists thriving across 650 locations</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Over $1 billion in collective purchasing power — up to 45% off with manufacturers</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Dedicated Member Success Specialist connects you with top consultants and vendors</p>
          </div>
          <div class="v4-feature-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <p>Not a DSO — 100% ownership, complete autonomy, full independence</p>
          </div>
        </div>
        <a href="{{ $vp }}/why-smile-source/about-us" class="btn-accent">Learn More About Us</a>
      </div>
      <div class="v4-about-img-col" data-animate="fade-left"><img src="{{ asset('images/v4/dentist-1.png') }}" alt="Dentists Helping Dentists"></div>
    </div>
  </div>
</section>

{{-- ===== METRICS ===== --}}
<section class="v4-metrics">
  <div class="container">
    <div class="v4-metrics-inner" data-stagger>
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
    <div class="v4-testimonial-grid" data-stagger>
      <div class="v4-testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"I would have never thought about my dental practice as the business it is today. It's exciting to be connected with other colleagues struggling and succeeding in similar ways. To know I have a professional family to lean on or be leaned on is priceless."</blockquote>
        <div class="author">
          <img src="{{ asset('images/v4/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="v4-avatar-img">
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
          <img src="{{ asset('images/v4/dentist-2.png') }}" alt="Dr. Kyle Benton" class="v4-avatar-img">
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
      <div class="v4-overline">Resources &amp; Education</div>
      <div class="v4-divider"></div>
      <h2>Practice-Building Resources and Education</h2>
      <p>Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
    </div>
    <div class="v4-gallery-grid" data-stagger>

      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy">
        </div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__cat">Dental Technology</div>
          <div class="v4-gallery-card__name">Restoring Wellness Through Financial Empathy</div>
          <div class="v4-gallery-card__sub">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</div>
        </div>
      </div>

      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform">
        </div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__cat">Practice Management</div>
          <div class="v4-gallery-card__name">Curve's Practice Management Platform Streamlines Workflows</div>
          <div class="v4-gallery-card__sub">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </div>

      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics">
        </div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__cat">Dental Education</div>
          <div class="v4-gallery-card__name">Ergonomics: Protecting Your Greatest Asset — Yourself</div>
          <div class="v4-gallery-card__sub">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</div>
        </div>
      </div>

      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety">
        </div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__cat">Dental Education</div>
          <div class="v4-gallery-card__name">Dental Care for Patients with Autism and Dental Anxiety</div>
          <div class="v4-gallery-card__sub">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </div>

      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI">
        </div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__cat">Dental Technology</div>
          <div class="v4-gallery-card__name">Why Smile Source and Private Practices Are Partnering with BOLA AI</div>
          <div class="v4-gallery-card__sub">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </div>

      <div class="v4-gallery-card">
        <div class="v4-gallery-card__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month">
        </div>
        <div class="v4-gallery-card__body">
          <div class="v4-gallery-card__cat">Dental Marketing</div>
          <div class="v4-gallery-card__name">Elevating the Standard of Care During Oral Cancer Awareness Month</div>
          <div class="v4-gallery-card__sub">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </div>

    </div>
    <div class="v4-gallery-footer">
      <a href="{{ $vp }}/blog" class="btn-outline-light">View All Articles</a>
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
    <div class="v4-cta-card" data-animate="zoom-in">
      <div class="v4-cta-inner">
        <div>
          <h2>Ready to Thrive as an Independent Dentist?</h2>
          <p>Join 1,100+ independent dentists already thriving with Smile Source. Let's talk about what membership looks like for your practice.</p>
        </div>
        <div class="v4-cta-buttons">
          <a href="{{ $vp }}/lets-talk" class="btn-accent btn-cta"><i class="fas fa-comments"></i> Let's Talk</a>
          <a href="{{ $vp }}/join" class="btn-outline-light btn-cta">
            <i class="fas fa-arrow-right"></i> Join Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
