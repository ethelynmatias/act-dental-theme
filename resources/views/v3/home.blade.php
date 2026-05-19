@extends('layouts.layout', ['title' => 'Home'])

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v3.css') }}">
@endpush

@push('scripts')
<script>
  document.querySelectorAll('.pwr-tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const group = btn.closest('.pwr-sec-tabs');
      group.querySelectorAll('.pwr-tab-btn').forEach(b => b.classList.remove('is-active'));
      group.querySelectorAll('.pwr-tab-panel').forEach(p => p.classList.remove('is-active'));
      btn.classList.add('is-active');
      group.querySelector('#' + btn.dataset.tab).classList.add('is-active');
    });
  });

  document.querySelectorAll('.pwr-accordion-trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const item = trigger.closest('.pwr-accordion-item');
      const isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.pwr-accordion-item').forEach(i => i.classList.remove('is-open'));
      if (!isOpen) item.classList.add('is-open');
    });
  });

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
@php $vp = '/'.request()->segment(1); @endphp
<div class="pwr-page">

{{-- ===== HERO ===== --}}
<section class="pwr-hero">
  <div class="pwr-hero__particles" aria-hidden="true"></div>
  <div class="pwr-hero__inner" data-animate="fade-up">
    <div class="pwr-hero__eyebrow">
      <span class="dot"></span>
      Largest Private Dental Practice Network
    </div>
    <h1>
      Independent Dentists<br>
      <span class="pwr-gradient-text">Thriving Together</span>
    </h1>
    <p class="pwr-hero__desc">
      Smile Source connects you to the right people, products, and services
      to boost profitability and accelerate your growth — without sacrificing
      the ownership you worked so hard to build.
    </p>
    <div class="pwr-hero__cta">
      <a href="{{ $vp }}/lets-talk" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
        Let's Talk
      </a>
      <a href="{{ $vp }}/why-smile-source/about-us" class="pwr-btn pwr-btn--outline-white pwr-btn--large pwr-btn--long">
        <i class="fas fa-play-circle"></i>&ensp;Why Smile Source
      </a>
    </div>
  </div>
</section>

{{-- ===== CTA STRIP ===== --}}
<section class="pwr-sec-cta">
  <div class="pwr-container">
    <div class="pwr-sec-cta__inner" data-animate="fade-up">
      <div class="pwr-sec-cta__text">
        <h2 class="pwr-sec-cta__title">
          Benefits Like a DSO — Without Sacrificing Ownership
        </h2>
        <p class="pwr-sec-cta__desc">
          Join 1,100+ independent dentists already thriving with Smile Source.
          Over $1 billion in collective purchasing power, vetted vendors, and a
          dedicated Member Success Specialist — all in one membership.
        </p>
      </div>
      <div class="pwr-sec-cta__actions">
        <a href="{{ $vp }}/join" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
          Become a Member
        </a>
        <a href="{{ $vp }}/join" class="pwr-btn pwr-btn--outline-white pwr-btn--large pwr-btn--long">
          <i class="fas fa-arrow-right"></i>&ensp;Join Now
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ===== ELITE VENDORS STRIP ===== --}}
<section class="pwr-sec-clients">
  <div class="pwr-container">
    <p class="pwr-sec-clients__label">Save on supplies and services with our top-tier vetted vendor network</p>
    <div class="pwr-sec-clients__grid" data-stagger>
      <div class="pwr-sec-clients__item">ClearCorrect</div>
      <div class="pwr-sec-clients__item">Dentsply Sirona</div>
      <div class="pwr-sec-clients__item">Envista</div>
      <div class="pwr-sec-clients__item">Henry Schein Dental</div>
      <div class="pwr-sec-clients__item">MicroDental</div>
      <div class="pwr-sec-clients__item">NDX</div>
    </div>
  </div>
</section>

{{-- ===== MEMBERSHIP BENEFITS TABS ===== --}}
<section class="pwr-sec-tabs">
  <div class="pwr-container">
    <div class="pwr-sec-tabs__intro" data-animate="fade-up">
      <span class="pwr-sec-tabs__eyebrow">Membership Benefits</span>
      <h2 class="pwr-sec-tabs__title">Everything Your Practice Needs to Thrive</h2>
      <p class="pwr-sec-tabs__desc">
        From savings and marketing to networking and education, Smile Source gives
        independent dentists the complete toolkit to compete and win.
      </p>
    </div>

    <div class="pwr-tabs-nav">
      <button class="pwr-tab-btn is-active" data-tab="tab-savings">Savings</button>
      <button class="pwr-tab-btn" data-tab="tab-growth">Practice Growth</button>
      <button class="pwr-tab-btn" data-tab="tab-marketing">Marketing</button>
      <button class="pwr-tab-btn" data-tab="tab-community">Networking &amp; Education</button>
    </div>

    {{-- Savings --}}
    <div class="pwr-tab-panel is-active" id="tab-savings">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-tag"></i></div>
          <h3>Vendor Discounts &amp; Rebates</h3>
          <p>Save up to 40% on dental supplies, 30% on laboratory work, and 45% with manufacturers. Vetted and negotiated rates with the industry's largest vendors — active from day one of membership.</p>
          <a href="{{ $vp }}/membership/savings" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-dollar-sign"></i></div>
          <h3>Over $1 Billion Purchasing Power</h3>
          <p>No solo practice can negotiate what 1,100+ members across 650 locations can. Our collective buying power delivers savings on technology, supplies, labs, and services that directly move your bottom line.</p>
          <a href="{{ $vp }}/membership/savings" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Over 90 Vetted Vendors</h3>
          <p>Every vendor in the Smile Source network has been carefully evaluated — only the best make the cut. Members also save thousands on medical coverage for their teams every year.</p>
          <a href="{{ $vp }}/membership/savings" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Practice Growth --}}
    <div class="pwr-tab-panel" id="tab-growth">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-laptop-medical"></i></div>
          <h3>Technology Solutions</h3>
          <p>Access the latest practice management, imaging, and clinical technology at member pricing — including 3D imaging, digital workflows, and implementation support from experts who know private practice.</p>
          <a href="{{ $vp }}/membership/practice-growth" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-user-nurse"></i></div>
          <h3>Staffing &amp; HR Solutions</h3>
          <p>Group health insurance, recruiting, benefits, and payroll support help you attract, train, and retain your best team members — saving thousands annually on coverage alone.</p>
          <a href="{{ $vp }}/membership/practice-growth" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-chart-line"></i></div>
          <h3>Strategic Practice Consulting</h3>
          <p>One Smile Source member grew their practice from $500K to nearly $2 million annually. Member Success Specialists connect you with top consultants and proven systems used by 1,100+ practices.</p>
          <a href="{{ $vp }}/membership/practice-growth" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Marketing --}}
    <div class="pwr-tab-panel" id="tab-marketing">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-bullhorn"></i></div>
          <h3>Geodemographic Targeting</h3>
          <p>Smile Source studies where people live, work, and travel — then helps you target marketing using demographics, income data, and consumer spending patterns around your practice.</p>
          <a href="{{ $vp }}/membership/marketing" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-paint-brush"></i></div>
          <h3>Brand &amp; Digital Presence</h3>
          <p>Identify opportunities in your website, SEO, and social media strategy. Expert brand specialists help you define your identity, win more new patients, and stand out from corporate dentistry.</p>
          <a href="{{ $vp }}/membership/marketing" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-users"></i></div>
          <h3>High-Intent Patient Campaigns</h3>
          <p>Emergency and pain-driven Google Ads, SMS campaigns for existing patients, and targeted digital audiences that convert — practical marketing that generates real new-patient appointments.</p>
          <a href="{{ $vp }}/membership/marketing" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Community & Education --}}
    <div class="pwr-tab-panel" id="tab-community">
      <div class="pwr-tabs-grid">
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-handshake"></i></div>
          <h3>Peer Networking</h3>
          <p>Local group leaders organize in-person meetings in cities across America. Online forums, virtual fireside chats, and the ability to crowdsource the knowledge of hundreds of highly qualified peers online 24/7.</p>
          <a href="{{ $vp }}/membership/networking" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-graduation-cap"></i></div>
          <h3>Continuing Education</h3>
          <p>Hundreds of CE courses annually — in-person and online — for dentists, hygienists, dental assistants, and front office staff. Topics include practice management, case planning, new procedures, and 3D technology.</p>
          <a href="{{ $vp }}/membership/education" class="pwr-service-card__link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="pwr-service-card">
          <div class="pwr-service-card__icon"><i class="fas fa-calendar-alt"></i></div>
          <h3>The Exchange 2026</h3>
          <p>San Antonio, TX — September 9–12, 2026. Where private practice dentists ignite their passion, learn about new products and procedures, get vendor deals, and connect with 1,100+ peers.</p>
          <a href="{{ $vp }}/exchange-2026" class="pwr-service-card__link">Register Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- ===== RESOURCES & EDUCATION ===== --}}
<section class="pwr-sec-image-boxes">
  <div class="pwr-container">

    <div class="pwr-sec-image-boxes__intro">
      <span class="pwr-sec-image-boxes__eyebrow">Resources &amp; Education</span>
      <h2 class="pwr-sec-image-boxes__title">Practice-Building Resources and Education</h2>
      <p class="pwr-sec-image-boxes__desc">Stay up-to-date on how independent dentists like you are tackling the challenges of private practice dentistry.</p>
    </div>

    <div class="pwr-image-boxes-grid" data-stagger>

      <div class="pwr-image-box pwr-image-box--tall">
        <div class="pwr-image-box__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_cherry.png" alt="Restoring Wellness Through Financial Empathy">
        </div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__cat">Dental Technology</span>
          <h3>Restoring Wellness Through Financial Empathy</h3>
          <p>How financial empathy in your practice can restore patient confidence and drive treatment acceptance.</p>
          <span class="pwr-image-box__date">Apr 24, 2026 &nbsp;·&nbsp; 2 min read</span>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_curve.png" alt="Curve's Practice Management Platform">
        </div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__cat">Practice Management</span>
          <h3>Curve's Practice Management Platform Streamlines Workflows</h3>
          <span class="pwr-image-box__date">Apr 17, 2026 &nbsp;·&nbsp; 3 min read</span>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_ergonomics.png" alt="Ergonomics">
        </div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__cat">Dental Education</span>
          <h3>Ergonomics: Protecting Your Greatest Asset — Yourself</h3>
          <span class="pwr-image-box__date">Apr 6, 2026 &nbsp;·&nbsp; 4 min read</span>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_anxiety.png" alt="Dental Care for Patients with Autism and Dental Anxiety">
        </div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__cat">Dental Education</span>
          <h3>Dental Care for Patients with Autism and Dental Anxiety</h3>
          <span class="pwr-image-box__date">Apr 6, 2026 &nbsp;·&nbsp; 3 min read</span>
        </div>
      </div>

      <div class="pwr-image-box pwr-image-box--tall">
        <div class="pwr-image-box__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_BolaAI.png" alt="BOLA AI">
        </div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__cat">Dental Technology</span>
          <h3>Why Smile Source and Private Practices Are Partnering with BOLA AI</h3>
          <p>AI-powered tools are reshaping what's possible for independent practices — here's why members are making the move.</p>
          <span class="pwr-image-box__date">Mar 27, 2026 &nbsp;·&nbsp; 3 min read</span>
        </div>
      </div>

      <div class="pwr-image-box">
        <div class="pwr-image-box__img">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Blog/ss_blog_oralcancer.png" alt="Oral Cancer Awareness Month">
        </div>
        <div class="pwr-image-box__body">
          <span class="pwr-image-box__cat">Dental Marketing</span>
          <h3>Elevating the Standard of Care During Oral Cancer Awareness Month</h3>
          <span class="pwr-image-box__date">Mar 18, 2026 &nbsp;·&nbsp; 3 min read</span>
        </div>
      </div>

    </div>

    <div style="text-align:center; margin-top:40px;">
      <a href="{{ $vp }}/blog" class="pwr-btn pwr-btn--outline-white pwr-btn--large pwr-btn--long">View All Articles</a>
    </div>

  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="pwr-sec-testimonials">
  <div class="pwr-container">
    <div class="pwr-sec-testimonials__intro">
      <span class="pwr-sec-testimonials__eyebrow">Member Stories</span>
      <h2 class="pwr-sec-testimonials__title">What Smile Source Members Are Saying</h2>
    </div>

    <div class="pwr-testimonials-masonry" data-stagger>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "I would have never thought about my dental practice as the business it is today.
          It's exciting to be connected with other colleagues struggling and succeeding in similar ways.
          To know I have a professional family to lean on or be leaned on is priceless."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <img src="{{ asset('images/v3/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="pwr-testimonial-card__avatar-img">
          <div>
            <strong>Jeff Henneberg, DDS</strong>
            <span>Smile Source Spokane</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "I now enjoy dentistry so much more. I have more appreciation for the team,
          the patients, and the colleagues I have. Smile Source has given me the support,
          confidence, and desire to be my best by surrounding myself with the best
          dentists and humans in the industry."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <img src="{{ asset('images/v3/dentist-2.png') }}" alt="Dr. Kyle Benton" class="pwr-testimonial-card__avatar-img">
          <div>
            <strong>Dr. Kyle Benton</strong>
            <span>Benton Family Dentistry</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "Smile Source connects you to the right people, products, and services to boost
          profitability and accelerate your growth. The community here is unlike anything
          else in dentistry — colleagues who genuinely want to see you succeed."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">SS</div>
          <div>
            <strong>Smile Source Member</strong>
            <span>Independent Practice Owner</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "The Smile Source Exchange is where private practice dentists ignite their passion,
          sparking unparalleled growth and learning in a vibrant atmosphere. It's the ultimate
          hub for inspiration, connection, and innovation for independent dentists."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">EX</div>
          <div>
            <strong>The Exchange 2026</strong>
            <span>San Antonio, TX · September 9–12</span>
          </div>
        </div>
      </div>

      <div class="pwr-testimonial-card">
        <div class="pwr-testimonial-card__stars">★★★★★</div>
        <blockquote>
          "When you join Smile Source, you'll find colleagues who care and are willing to
          share their experience so your practice grows faster. Community over competition
          is not just a slogan here — it's how every member operates every single day."
        </blockquote>
        <div class="pwr-testimonial-card__author">
          <div class="pwr-testimonial-card__avatar">SM</div>
          <div>
            <strong>Smile Source Network</strong>
            <span>1,100+ Member Practices</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CTA ONLY ===== --}}
<section class="pwr-sec-cta-only">
  <div class="pwr-container">
    <div class="pwr-sec-cta-only__inner" data-animate="zoom-in">
      <h2 class="pwr-sec-cta-only__title">
        Ready to Thrive as an Independent Dentist?
      </h2>
      <p class="pwr-sec-cta-only__desc">
        Join Smile Source and connect to the right people, products, and services to
        boost profitability and accelerate your growth — without giving up ownership.
      </p>
      <div class="pwr-sec-cta-only__cta">
        <a href="{{ $vp }}/lets-talk" class="pwr-btn pwr-btn--primary pwr-btn--large pwr-btn--long">
          Let's Talk
        </a>
        <a href="{{ $vp }}/why-smile-source/about-us" class="pwr-btn pwr-btn--outline-primary pwr-btn--large pwr-btn--long">
          Learn More
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

    <div class="pwr-accordion" data-stagger>

      <div class="pwr-accordion-item is-open">
        <button class="pwr-accordion-trigger">
          What is Smile Source?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Smile Source is the largest private dental practice network in the country. Founded in 2006,
          we connect independent dentists to the right people, products, and services to boost
          profitability and accelerate growth — all while preserving full practice ownership.
          We operate under the belief that dentists are stronger together: community over competition.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          What membership benefits does Smile Source offer?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Smile Source members enjoy five core benefit areas: Savings (discounts and rebates with top vendors),
          Practice Growth (technology, staffing, and proven strategies), Marketing (expert strategies and brand
          specialists), Networking (1,100+ peer colleagues), and Education (industry-leading CE for your whole team).
          Every member also gets a dedicated Member Success Specialist.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How does Smile Source differ from a DSO?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Unlike a DSO, Smile Source members retain 100% ownership and full control of their practices.
          You get the buying power, vendor discounts, marketing resources, and community of a large
          group — without giving up your independence, your brand, or your decision-making authority.
          Benefits like a DSO, without the sacrifice.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How many dentists are in the Smile Source network?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Since launching in 2006, Smile Source has grown to 1,100+ member dentists across the country.
          Our network has expanded every year, bringing more purchasing power, more vendor partnerships,
          and more opportunities for every member. More than a billion dollars in collective purchasing
          power flows through the network annually.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          What is The Exchange 2026?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          The Smile Source Exchange is our annual flagship event — the ultimate hub for inspiration,
          connection, and innovation for independent dentists. The Exchange 2026 takes place in
          San Antonio, TX from September 9–12, 2026. It's where private practice dentists ignite
          their passion and spark unparalleled growth in a vibrant, community-driven atmosphere.
        </div>
      </div>

      <div class="pwr-accordion-item">
        <button class="pwr-accordion-trigger">
          How do I become a Smile Source member?
          <span class="pwr-accordion-icon"><i class="fas fa-plus"></i></span>
        </button>
        <div class="pwr-accordion-body">
          Start by clicking "Let's Talk" or "Join Now" on this page. We'll set up a conversation
          to learn about your practice, your goals, and your challenges — then walk you through
          exactly what membership looks like and how it benefits your specific situation.
          There's no pressure, just an honest conversation about whether Smile Source is the right fit.
        </div>
      </div>

    </div>
  </div>
</section>

</div>{{-- /pwr-page --}}
@endsection
