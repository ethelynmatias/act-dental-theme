@extends('layouts.v1-layout')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush

@section('content')

{{-- ===== HERO ===== --}}
<section class="v1-hero">
  <div class="container">
    <div class="v1-hero-inner">

      <div class="v1-hero-content">
        <div class="v1-hero-badge">1,100+ Member Dentists &amp; Growing</div>
        <h1>We help independent dentists <span class="highlight">thrive together.</span></h1>
        <p>Smile Source connects you to the right people, products, and services to boost profitability and accelerate your growth.</p>

        <ul class="v1-hero-bullets">
          <li><i class="fas fa-check-circle"></i> Reduce your overhead</li>
          <li><i class="fas fa-check-circle"></i> Connect with top dentists</li>
          <li><i class="fas fa-check-circle"></i> Accelerate your practice growth</li>
        </ul>

        <div class="v1-hero-cta">
          <a href="/v1/lets-talk" class="btn btn-primary btn-lg">Let's Talk</a>
          <a href="/v1/membership/savings" class="btn btn-outline btn-lg">Explore Benefits</a>
        </div>
      </div>

      <div class="v1-hero-img">
        <div class="v1-hero-graphic">
          <div class="v1-hero-stat-card">
            <span class="number">1,100+</span>
            <span class="label">Member Dentists</span>
          </div>
          <div class="v1-hero-stat-card">
            <span class="number">$1B+</span>
            <span class="label">Purchasing Power</span>
          </div>
          <div class="v1-hero-stat-card">
            <span class="number">Since 2006</span>
            <span class="label">Trusted &amp; Growing</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CHALLENGES (coral bg) ===== --}}
<section class="v1-challenges">
  <div class="container">
    <div class="v1-challenges-inner">
      <div class="v1-challenges-text">
        <h2>Owning a private dental practice is challenging.</h2>
        <p>We understand the pressures you're facing, including rising overhead, staffing shortages, and the growing pressures of corporate dentistry.</p>
        <a href="/v1/lets-talk" class="btn v1-btn-white-outline btn-lg">Let's Talk</a>
      </div>
      <div class="v1-challenges-list">
        <div class="v1-challenge-item"><i class="fas fa-arrow-trend-up"></i> Rising overhead</div>
        <div class="v1-challenge-item"><i class="fas fa-users"></i> Dental team retention</div>
        <div class="v1-challenge-item"><i class="fas fa-building"></i> Practice consolidation</div>
        <div class="v1-challenge-item"><i class="fas fa-hospital"></i> Corporate competition</div>
        <div class="v1-challenge-item v1-challenge-more"><i class="fas fa-ellipsis"></i> And more...</div>
      </div>
    </div>
  </div>
</section>

{{-- ===== MISSION (navy bg) ===== --}}
<section class="v1-mission">
  <div class="container">
    <div class="v1-mission-inner">
      <div class="v1-mission-label">Our Crowning Achievement</div>
      <h2>Helping private practice dentists make more money with less stress.</h2>
      <p>Since 2006, we've grown our network to 1,100+ dentists helping dentists. With over a billion dollars of purchasing power, Smile Source delivers deep discounts to members that increase profitability.</p>
      <a href="/v1/join" class="btn v1-btn-coral btn-lg">Join Smile Source</a>
    </div>
  </div>
</section>

{{-- ===== BENEFITS ===== --}}
<section class="v1-benefits">
  <div class="container">
    <div class="text-center" style="margin-bottom:56px;">
      <div class="v1-section-label">Membership Benefits</div>
      <h2 class="v1-section-title">Everything you need to thrive.</h2>
      <p class="v1-section-sub" style="margin:0 auto;">You'll enjoy access to a dedicated Member Success Specialist to help you optimize these benefits and more.</p>
    </div>
    <div class="v1-benefits-grid">
      <div class="v1-benefit-card">
        <div class="v1-benefit-icon"><i class="fas fa-piggy-bank"></i></div>
        <h3>Supercharge Your Savings</h3>
        <p>Discounts and rebates that reduce your overhead with the industry's top vendors — vetted and negotiated just for Smile Source members.</p>
        <a href="/v1/membership/savings" class="v1-benefit-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v1-benefit-card">
        <div class="v1-benefit-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Practice Growth</h3>
        <p>Position your practice for unstoppable growth with technology, staffing, and proven solutions tailored to independent dentists.</p>
        <a href="/v1/membership/practice-growth" class="v1-benefit-link">Practice Growth <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v1-benefit-card">
        <div class="v1-benefit-icon"><i class="fas fa-bullhorn"></i></div>
        <h3>Marketing Support</h3>
        <p>Get access to expert-driven marketing strategies and brand specialists to help you attract and retain more patients.</p>
        <a href="/v1/membership/marketing" class="v1-benefit-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v1-benefit-card">
        <div class="v1-benefit-icon"><i class="fas fa-handshake"></i></div>
        <h3>Networking</h3>
        <p>Connect to knowledgeable, friendly colleagues committed to strengthening and promoting independent dentistry.</p>
        <a href="/v1/networking/community" class="v1-benefit-link">Networking <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v1-benefit-card">
        <div class="v1-benefit-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Continuing Education</h3>
        <p>Access industry-leading continuing education and incredible resources for your entire team — wherever you are.</p>
        <a href="/v1/membership/education" class="v1-benefit-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="v1-benefit-card v1-benefit-card--cta">
        <div class="v1-benefit-icon"><i class="fas fa-star"></i></div>
        <h3>Dedicated Member Success Specialist</h3>
        <p>You'll enjoy access to a dedicated specialist to help you navigate and optimize every benefit in your membership.</p>
        <a href="/v1/lets-talk" class="v1-benefit-link">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

{{-- ===== VENDOR LOGOS ===== --}}
<section class="v1-vendors">
  <div class="container">
    <div class="text-center" style="margin-bottom:40px;">
      <h3 class="v1-section-title" style="font-size:1.5rem;">Save on supplies and services with top-tier vendors</h3>
      <p class="v1-section-sub" style="margin:0 auto;">Smile Source has vetted and negotiated rates with the industry's largest vendors to save on dental technology, supplies, labs, and services.</p>
    </div>
    <div class="v1-vendor-logos">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/ClearCorrect_Logo_2023_Left_Align_white.png?width=150&height=60" alt="ClearCorrect">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/DENTSPLYSIRONA_white.png?width=150&height=44" alt="DENTSPLY SIRONA">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Envista%20Logo_white.png?width=150&height=50" alt="Envista">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Henry%20Schein%20Dental%20logo%20white-01%20copy.png?width=150&height=28" alt="Henry Schein Dental">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/microdental_logoWhite@4x.png?width=150&height=22" alt="microdental">
    </div>
  </div>
</section>

{{-- ===== EVENT (gray bg) ===== --}}
<section class="v1-event">
  <div class="container">
    <div class="v1-event-inner">
      <div class="v1-event-content">
        <div class="v1-section-label">Annual Conference</div>
        <h2 class="v1-section-title">Join Us at The Exchange 2026</h2>
        <p class="v1-event-location"><i class="fas fa-map-marker-alt"></i> San Antonio, TX &nbsp;|&nbsp; September 9–12, 2026</p>
        <p>The Smile Source Exchange is where private practice dentists ignite their passion, sparking unparalleled growth and learning in a vibrant atmosphere. It's the ultimate hub for inspiration, connection, and innovation, setting the stage for independent dentists to elevate their practices.</p>
        <a href="/v1/exchange-2026" class="btn btn-primary btn-lg" style="margin-top:24px;">Register Now</a>
      </div>
      <div class="v1-event-badge">
        <div class="v1-event-badge-inner">
          <span class="v1-event-year">2026</span>
          <span class="v1-event-name">The Exchange</span>
          <span class="v1-event-dates">Sept 9–12</span>
          <span class="v1-event-city">San Antonio, TX</span>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== BLOG ===== --}}
<section class="v1-blog">
  <div class="container">
    <div class="text-center" style="margin-bottom:48px;">
      <div class="v1-section-label">Resources &amp; Education</div>
      <h2 class="v1-section-title">Practice-Building Resources and Education</h2>
      <p class="v1-section-sub" style="margin:0 auto;">Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
    </div>
    <div class="v1-blog-grid">
      <a href="#" class="v1-blog-card">
        <div class="v1-blog-cat">Dental Technology</div>
        <h4>Restoring Wellness Through Financial Empathy</h4>
        <span class="v1-blog-date">Apr 24, 2026 &middot; 2 min read</span>
      </a>
      <a href="#" class="v1-blog-card">
        <div class="v1-blog-cat">Practice Management</div>
        <h4>Curve's Practice Management Platform Streamlines Workflows</h4>
        <span class="v1-blog-date">Apr 17, 2026</span>
      </a>
      <a href="#" class="v1-blog-card">
        <div class="v1-blog-cat">Dental Health</div>
        <h4>Ergonomics: Protecting Your Greatest Asset — Yourself</h4>
        <span class="v1-blog-date">Apr 6, 2026</span>
      </a>
      <a href="#" class="v1-blog-card">
        <div class="v1-blog-cat">Dental Education</div>
        <h4>Dental Care for Patients with Autism and Dental Anxiety</h4>
        <span class="v1-blog-date">Apr 6, 2026</span>
      </a>
      <a href="#" class="v1-blog-card">
        <div class="v1-blog-cat">Dental Technology</div>
        <h4>Why Smile Source and Private Practices Are Partnering with BOLA AI</h4>
        <span class="v1-blog-date">Mar 27, 2026</span>
      </a>
      <a href="#" class="v1-blog-card">
        <div class="v1-blog-cat">Dental Marketing</div>
        <h4>Elevating the Standard of Care During Oral Cancer Awareness Month</h4>
        <span class="v1-blog-date">Mar 18, 2026</span>
      </a>
    </div>
    <div class="text-center" style="margin-top:40px;">
      <a href="#" class="btn btn-outline">Subscribe to Our Blog</a>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIAL / COMMUNITY ===== --}}
<section class="v1-community">
  <div class="container">
    <div class="v1-community-inner">
      <div class="v1-community-headline">
        <h2>Community Over Competition.</h2>
        <p class="v1-community-sub">When you join Smile Source, you'll find colleagues who care and are willing to share their experience so your practice grows faster.</p>
        <a href="/v1/join" class="btn btn-primary btn-lg">Join Smile Source</a>
      </div>
      <div class="v1-community-quote">
        <blockquote>
          "We are dentists helping dentists, in the true spirit of community over competition."
        </blockquote>
        <div class="v1-quote-author">
          <div class="v1-quote-avatar">JH</div>
          <div>
            <strong>Jeff Henneberg, DDS</strong>
            <span>Smile Source Spokane &nbsp;·&nbsp; Benton Family Dentistry</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
