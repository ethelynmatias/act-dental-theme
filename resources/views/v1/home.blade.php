@extends('layouts.v1-layout', ['title' => 'Home'])

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush

@section('content')
@php $vp = '/'.request()->segment(1); @endphp

{{-- ===== HERO ===== --}}
<section class="cp-hero">

  {{-- Background decorative layer --}}
  <div class="cp-hero-bg" aria-hidden="true">
    <div class="cp-hero-orb cp-hero-orb--1"></div>
    <div class="cp-hero-orb cp-hero-orb--2"></div>
    <div class="cp-hero-orb cp-hero-orb--3"></div>
    <div class="cp-hero-dots"></div>
  </div>

  <div class="container">
    <div class="cp-hero-inner">

      <div class="cp-hero-content" data-animate="fade-right">
        <div class="cp-hero-eyebrow">#1 Network for Independent Dentists</div>
        <h1>
          We Help Independent Dentists
          <span class="cp-hero-highlight-line"><span class="cp-hero-highlight cp-typewriter" id="cpTypewriter"></span><span class="cp-cursor">|</span></span>
        </h1>
        <p>Save time, money, and headaches. Smile Source connects you to the right people, products, and services to boost profitability and accelerate your growth.</p>
        <ul class="cp-hero-checks">
          <li><i class="fas fa-check-circle"></i> Reduce overhead — up to 40% off supplies &amp; 30% off lab</li>
          <li><i class="fas fa-check-circle"></i> Keep 100% ownership — not a DSO, never will be</li>
          <li><i class="fas fa-check-circle"></i> Accelerate growth with mentorship, marketing &amp; CE</li>
        </ul>
        <div class="cp-hero-cta">
          <a href="/v1/join" class="cp-btn cp-btn-primary cp-btn-lg">Join Now</a>
          <a href="/v1/lets-talk" class="cp-btn cp-btn-outline cp-btn-lg">Let's Talk</a>
        </div>
      </div>

      <div class="cp-hero-graphic" data-animate="fade-left">
        <div class="cp-hero-card cp-hero-card--main">
          <div class="cp-hero-card-icon"><i class="fas fa-tooth"></i></div>
          <div class="cp-hero-card-stat">
            <span class="big">1,100+</span>
            <span class="label">Member Dentists</span>
          </div>
        </div>
        <div class="cp-hero-card cp-hero-card--sm cp-hero-card--top">
          <div class="cp-hero-card-icon sm"><i class="fas fa-dollar-sign"></i></div>
          <div>
            <strong>$1 Billion+</strong>
            <span>Purchasing Power</span>
          </div>
        </div>
        <div class="cp-hero-card cp-hero-card--sm cp-hero-card--bottom">
          <div class="cp-hero-card-icon sm"><i class="fas fa-calendar-alt"></i></div>
          <div>
            <strong>Since 2006</strong>
            <span>Trusted Network</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== 4-FEATURE STRIP ===== --}}
<section class="cp-features">
  <div class="cp-features-bg" aria-hidden="true">
    <i class="fas fa-piggy-bank  cp-feat-icon" style="top:10%;left:3%;font-size:56px;animation-delay:0s;"></i>
    <i class="fas fa-chart-line  cp-feat-icon" style="top:65%;left:8%;font-size:44px;animation-delay:1.4s;"></i>
    <i class="fas fa-users       cp-feat-icon" style="top:15%;right:5%;font-size:60px;animation-delay:0.7s;"></i>
    <i class="fas fa-graduation-cap cp-feat-icon" style="top:70%;right:4%;font-size:48px;animation-delay:2s;"></i>
    <i class="fas fa-dollar-sign cp-feat-icon" style="top:45%;left:22%;font-size:36px;animation-delay:1s;"></i>
    <i class="fas fa-handshake   cp-feat-icon" style="top:30%;right:22%;font-size:40px;animation-delay:1.8s;"></i>
    <i class="fas fa-tooth       cp-feat-icon" style="top:80%;left:45%;font-size:32px;animation-delay:0.4s;"></i>
    <i class="fas fa-star        cp-feat-icon" style="top:8%;left:55%;font-size:28px;animation-delay:2.4s;"></i>
  </div>
  <div class="container">
    <div class="cp-features-grid" data-stagger>

      <div class="cp-feature-card">
        <div class="cp-feature-icon"><i class="fas fa-piggy-bank"></i></div>
        <h3>Supercharge Your Savings</h3>
        <p>Up to 40% off supplies, 30% off lab, and $6M+ in member rebates annually.</p>
      </div>

      <div class="cp-feature-card">
        <div class="cp-feature-icon"><i class="fas fa-chart-line"></i></div>
        <h3>Practice Growth</h3>
        <p>DSO-level support — recruiting, consulting, technology — while keeping 100% ownership.</p>
      </div>

      <div class="cp-feature-card">
        <div class="cp-feature-icon"><i class="fas fa-users"></i></div>
        <h3>Powerful Networking</h3>
        <p>In-person meetings, webinars, and a national conference connecting you with peers on the same journey.</p>
      </div>

      <div class="cp-feature-card">
        <div class="cp-feature-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Continuing Education</h3>
        <p>Hundreds of in-person and online courses for your whole team. Earn up to 17 CE credits at The Exchange.</p>
      </div>

    </div>
  </div>
</section>

{{-- Typewriter script --}}
<script>
(function(){
  const el = document.getElementById('cpTypewriter');
  const cursor = document.querySelector('.cp-cursor');
  if (!el) return;
  const phrases = ['Thrive Together.', 'Grow Together.', 'Succeed Together.'];
  let pi = 0, ci = 0, deleting = false;
  const typeSpeed = 80, deleteSpeed = 45, pauseEnd = 1800, pauseStart = 400;
  function tick() {
    const phrase = phrases[pi];
    if (!deleting) {
      el.textContent = phrase.slice(0, ++ci);
      if (ci === phrase.length) { deleting = true; setTimeout(tick, pauseEnd); return; }
    } else {
      el.textContent = phrase.slice(0, --ci);
      if (ci === 0) { deleting = false; pi = (pi + 1) % phrases.length; setTimeout(tick, pauseStart); return; }
    }
    setTimeout(tick, deleting ? deleteSpeed : typeSpeed);
  }
  tick();
})();
</script>

{{-- ===== TRUSTED BY (vendor logo carousel) ===== --}}
<section class="cp-logos" data-animate="fade-up">
  <div class="container">
    <p class="cp-logos-label">Save on supplies and services with top-tier vendors to cover all facets of your business</p>
    <p class="cp-logos-sub">Smile Source has vetted and negotiated rates with the industry's largest vendors to save on dental technology, supplies, labs, and services.</p>
    <div class="cp-logos-carousel">
      <button class="cp-logos-btn cp-logos-btn--prev" id="logosPrev" aria-label="Previous">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="cp-logos-track-wrap">
        <div class="cp-logos-track" id="logosTrack">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/ClearCorrect_Logo_2023_Left_Align_white.png?width=150&height=60" alt="ClearCorrect">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/DENTSPLYSIRONA_white.png?width=150&height=44" alt="DENTSPLY SIRONA">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Envista%20Logo_white.png?width=150&height=50" alt="Envista">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Henry%20Schein%20Dental%20logo%20white-01%20copy.png?width=150&height=28" alt="Henry Schein">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/microdental_logoWhite@4x.png?width=150&height=22" alt="microdental">
        </div>
      </div>
      <button class="cp-logos-btn cp-logos-btn--next" id="logosNext" aria-label="Next">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>
<script>
(function(){
  const track = document.getElementById('logosTrack');
  const prev  = document.getElementById('logosPrev');
  const next  = document.getElementById('logosNext');
  if (!track || !prev || !next) return;
  const step = 220;
  const delay = 2500;   // pause between each batch scroll (ms)
  let autoTimer = null;
  let paused = false;

  // Duplicate logos for seamless infinite loop
  track.innerHTML += track.innerHTML;

  function scrollNext() {
    if (track.scrollLeft >= track.scrollWidth / 2) {
      track.scrollLeft = 0;
    }
    track.scrollBy({ left: step, behavior: 'smooth' });
  }

  function startAuto() {
    if (autoTimer) clearInterval(autoTimer);
    autoTimer = setInterval(() => {
      if (!paused) scrollNext();
    }, delay);
  }

  function stopAuto() {
    clearInterval(autoTimer);
    autoTimer = null;
  }

  prev.addEventListener('click', () => {
    stopAuto();
    track.scrollBy({ left: -step, behavior: 'smooth' });
    setTimeout(startAuto, 3000);
  });
  next.addEventListener('click', () => {
    stopAuto();
    scrollNext();
    setTimeout(startAuto, 3000);
  });

  track.addEventListener('mouseenter', () => { paused = true; });
  track.addEventListener('mouseleave', () => { paused = false; });

  startAuto();
})();
</script>

{{-- ===== ABOUT / STORY ===== --}}
<section class="cp-about">
  <div class="container">
    <div class="cp-about-inner">

      <div class="cp-about-graphic" data-animate="fade-right">
        <div class="cp-about-badge">
          <div class="cp-about-badge-num">20+</div>
          <div class="cp-about-badge-label">Years Serving Dentists</div>
        </div>
        <div class="cp-stat-list">
          <div class="cp-stat-row">
            <span class="cp-stat-num">1,100+</span>
            <span class="cp-stat-lbl">Member dentists nationwide</span>
          </div>
          <div class="cp-stat-row">
            <span class="cp-stat-num">$1B+</span>
            <span class="cp-stat-lbl">Combined purchasing power</span>
          </div>
          <div class="cp-stat-row">
            <span class="cp-stat-num">2006</span>
            <span class="cp-stat-lbl">Founded — still independent</span>
          </div>
        </div>
      </div>

      <div class="cp-about-content" data-animate="fade-left">
        <div class="cp-eyebrow">Our Story</div>
        <h2>Helping Private Practice Dentists Make More Money with Less Stress.</h2>
        <p>Since 2006, we've grown our network to 1,100+ dentists across 650 member locations. With over a billion dollars of purchasing power, Smile Source delivers deep discounts and rebates that increase profitability — without sacrificing your independence.</p>
        <p>Smile Source is not a DSO. You get all the support that a DSO offers — group purchasing, staff recruiting, in-house dental plans, patient financing, dental practice marketing, and strategic practice consulting — while you maintain 100% ownership and complete autonomy.</p>
        <div class="cp-check-list">
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Rising overhead — up to 40% off supplies, 30% off lab, $6M+ in member rebates annually</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Team retention — group health insurance, recruiting, benefits &amp; payroll support</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Corporate competition — 86% of the dental market is still independent</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> One member grew gross revenues 25% &amp; net income 50% — in less than a year</div>
        </div>
        <a href="/v1/why-smile-source/our-story" class="cp-btn cp-btn-primary">Learn Our Story</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="cp-testimonials">
  <div class="container">
    <div class="cp-section-head" data-animate="fade-up">
      <div class="cp-eyebrow">What Members Are Saying</div>
      <h2>Community Over Competition.</h2>
      <p>When you join Smile Source, you'll find colleagues who care and are willing to share their experience so your practice grows faster.</p>
    </div>
    <div class="cp-testimonials-grid" data-stagger>

      <div class="cp-testimonial-card">
        <div class="cp-stars">★★★★★</div>
        <blockquote>"I would have never thought about my dental practice as the business it is today. It's exciting to be connected with other colleagues struggling and succeeding in similar ways. To know I have a professional family to lean on or be leaned on is priceless."</blockquote>
        <div class="cp-testimonial-author">
          <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="cp-avatar-img">
          <div>
            <strong>Jeff Henneberg, DDS</strong>
            <span>Smile Source Spokane</span>
          </div>
        </div>
      </div>

      <div class="cp-testimonial-card">
        <div class="cp-stars">★★★★★</div>
        <blockquote>"I now enjoy dentistry so much more. I have more appreciation for the team, the patients, and the colleagues I have. Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists and humans in the industry."</blockquote>
        <div class="cp-testimonial-author">
          <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="cp-avatar-img">
          <div>
            <strong>Dr. Kyle Benton</strong>
            <span>Benton Family Dentistry</span>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

{{-- ===== GUARANTEE ===== --}}
<section class="cp-guarantee" data-animate="zoom-in">
  <div class="container">
    <div class="cp-guarantee-inner">
      <div class="cp-guarantee-icon"><i class="fas fa-handshake"></i></div>
      <div class="cp-guarantee-content">
        <div class="cp-eyebrow">Our Promise</div>
        <h2>You'll be freakin' thrilled you joined Smile Source.</h2>
        <p>Not seeing results? Let's talk. Your dedicated Member Success Specialist will connect you with top consultants and vendors, help you navigate every benefit, and ensure you're getting full value from your membership — or we'll make it right.</p>
        <p class="cp-guarantee-story">"Since joining, one member's production soared by $800,000 — allowing them to welcome a full-time associate and an additional hygienist."</p>
        <div class="cp-guarantee-badges">
          <div class="cp-g-badge"><i class="fas fa-shield-alt"></i> Member Success Specialist</div>
          <div class="cp-g-badge"><i class="fas fa-headset"></i> Dedicated Support</div>
          <div class="cp-g-badge"><i class="fas fa-sync-alt"></i> Continuous Value</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== EVENT ===== --}}
<section class="cp-event">
  <div class="container">
    <div class="cp-event-inner">
      <div class="cp-event-content" data-animate="fade-right">
        <div class="cp-eyebrow">Annual Conference</div>
        <h2>Join Us at The Exchange 2026</h2>
        <div class="cp-event-meta">
          <span><i class="fas fa-map-marker-alt"></i> San Antonio, TX</span>
          <span><i class="fas fa-calendar"></i> September 9–12, 2026</span>
        </div>
        <p>The Smile Source Exchange is where private practice dentists ignite their passion, sparking unparalleled growth and learning in a vibrant atmosphere. It's the ultimate hub for inspiration, connection, and innovation — featuring exclusive vendor deals, CE courses designed for your entire team, and networking with private practice leaders from across the country.</p>
        <ul class="cp-hero-checks" style="margin-bottom:24px;">
          <li><i class="fas fa-check-circle"></i> Earn up to 17 CE credits</li>
          <li><i class="fas fa-check-circle"></i> Exclusive vendor pricing &amp; deals</li>
          <li><i class="fas fa-check-circle"></i> Network with 1,100+ independent dentists</li>
        </ul>
        <a href="/v1/exchange-2026" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
      </div>
      <div class="cp-event-badge" data-animate="fade-left">
        <div class="cp-event-badge-inner">
          <div class="cp-event-year">2026</div>
          <div class="cp-event-name">The Exchange</div>
          <div class="cp-event-divider"></div>
          <div class="cp-event-dates">Sept 9–12</div>
          <div class="cp-event-city">San Antonio, TX</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== BLOG ===== --}}
<section class="cp-blog">
  <div class="container">
    <div class="cp-section-head" data-animate="fade-up">
      <div class="cp-eyebrow">Resources &amp; Education</div>
      <h2>Practice-Building Resources and Education</h2>
      <p>Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
    </div>
    <div class="cp-blog-grid" data-stagger>

      <a href="{{ $vp }}/blog" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Technology</div>
          <h4>Restoring Wellness Through Financial Empathy</h4>
          <div class="cp-blog-date">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</div>
        </div>
      </a>

      <a href="{{ $vp }}/blog" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Practice Management</div>
          <h4>Curve's Practice Management Platform Streamlines Workflows</h4>
          <div class="cp-blog-date">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="{{ $vp }}/blog" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Education</div>
          <h4>Ergonomics: Protecting Your Greatest Asset — Yourself</h4>
          <div class="cp-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</div>
        </div>
      </a>

      <a href="{{ $vp }}/blog" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Education</div>
          <h4>Dental Care for Patients with Autism and Dental Anxiety</h4>
          <div class="cp-blog-date">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="{{ $vp }}/blog" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Technology</div>
          <h4>Why Smile Source and Private Practices Are Partnering with BOLA AI</h4>
          <div class="cp-blog-date">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

      <a href="{{ $vp }}/blog" class="cp-blog-card">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month" class="cp-blog-img">
        <div class="cp-blog-body">
          <div class="cp-blog-cat">Dental Marketing</div>
          <h4>Elevating the Standard of Care During Oral Cancer Awareness Month</h4>
          <div class="cp-blog-date">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</div>
        </div>
      </a>

    </div>
    <div style="text-align:center; margin-top:40px;">
      <a href="/v1/resources/spear-digest" class="cp-btn cp-btn-outline">View All Articles</a>
    </div>
  </div>
</section>

{{-- ===== BOTTOM CTA ===== --}}
<section class="cp-cta-band" data-animate="zoom-in">
  <div class="container">
    <h2>More thrive, less strive.</h2>
    <p>Join 1,100+ independent dentists who've found their competitive edge through the Smile Source network.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-outline-white cp-btn-lg">Let's Talk</a>
    </div>
  </div>
</section>

@endsection
