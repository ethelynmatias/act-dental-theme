@extends('layouts.layout', ['title' => 'Home'])

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v2.css') }}">
@endpush

@section('content')

{{-- ===== HERO ===== --}}
<section class="v2-hero">
  <div class="sr-container">
    <div class="v2-hero__inner">

      <span class="v2-hero__lead">Largest Private Dental Practice Network</span>

      <h1>We Help Independent<br><em>Dentists Thrive Together.</em></h1>

      <p class="v2-hero__sub">
        Smile Source connects you to the right people, products, and services
        to boost profitability and accelerate your growth — without sacrificing ownership.
      </p>

      <div class="v2-hero__cta">
        <a href="#" class="sr-btn sr-btn-primary">Let's Talk</a>
        <a href="#" class="sr-btn sr-btn-outline-white">Why Smile Source</a>
      </div>

    </div>

    <div class="v2-hero__visual">
      <img src="{{ asset('images/v2/hero-home.gif') }}" alt="Smile Source Network" class="v2-hero-img">
    </div>

  </div>
</section>

{{-- ===== FEATURE BADGES ===== --}}
<section class="v2-badges">
  <div class="sr-container">
    <div class="v2-badges__grid">

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-arrow-down"></i></div>
        <div>
          <h4>Reduce Your Overhead</h4>
          <p>Over $1 billion in purchasing power delivers deep discounts that directly increase your profitability.</p>
        </div>
      </div>

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-users"></i></div>
        <div>
          <h4>Connect With Top Dentists</h4>
          <p>Join 1,100+ independent dentists helping each other grow in the true spirit of community over competition.</p>
        </div>
      </div>

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-chart-line"></i></div>
        <div>
          <h4>Accelerate Your Practice Growth</h4>
          <p>Access proven marketing, technology, staffing, and education solutions under one membership.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== VENDOR LOGOS STRIP ===== --}}
<section class="v2-trust">
  <div class="sr-container">
    <p class="v2-trust__label">Save on supplies and services with top-tier vetted vendors.</p>
    <div class="v2-trust__logos">
      <div class="v2-trust__pill">ClearCorrect</div>
      <div class="v2-trust__pill">Dentsply Sirona</div>
      <div class="v2-trust__pill">Envista</div>
      <div class="v2-trust__pill">Henry Schein Dental</div>
      <div class="v2-trust__pill">MicroDental</div>
      <div class="v2-trust__pill">NDX</div>
    </div>
  </div>
</section>

{{-- ===== ABOUT SMILE SOURCE ===== --}}
<section class="v2-meet">
  <div class="sr-container">
    <div class="v2-two-col">

      <div class="v2-media-col">
        <img src="{{ asset('images/v2/hero-home.gif') }}" alt="About Smile Source" class="v2-about-img">
      </div>

      <div class="v2-text-col">
        <span class="v2-section-tag">About Smile Source</span>
        <h2 class="v2-section-title">Helping Private Practice Dentists Make More Money With Less Stress.</h2>
        <p class="v2-section-body">
          Since 2006, Smile Source has grown its network to 1,100+ dentists helping dentists across 650 member locations. Smile Source is not a DSO — you keep 100% ownership and complete autonomy while accessing DSO-level support: group purchasing, staff recruiting, in-house dental plans, patient financing, dental practice marketing, and strategic practice consulting.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Founded in 2006 — nearly two decades of proven results</li>
          <li><i class="fas fa-check-circle"></i> 1,100+ independent member dentists across 650 locations</li>
          <li><i class="fas fa-check-circle"></i> Over $1 billion in collective purchasing power</li>
          <li><i class="fas fa-check-circle"></i> Dedicated Member Success Specialist for every member</li>
          <li><i class="fas fa-check-circle"></i> 86% of the dental market is still independent — and thriving</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Learn More About Us</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== CHALLENGES ===== --}}
<section class="v2-meet" style="background:var(--off-white);">
  <div class="sr-container">
    <div class="v2-two-col v2-two-col--reversed">

      <div class="v2-text-col">
        <span class="v2-section-tag">We Understand Your Challenges</span>
        <h2 class="v2-section-title">Owning a Private Dental Practice Is Challenging.</h2>
        <p class="v2-section-body">
          Running a private dental practice can often feel overwhelming. By joining a supportive network of colleagues, you'll find others who truly understand your unique challenges — and have real, proven solutions. 86% of the dental market is still independent. You're not alone, and you don't have to figure it out alone.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Rising overhead — save up to 40% on supplies and 30% on lab work</li>
          <li><i class="fas fa-check-circle"></i> Dental team retention — recruiting, benefits &amp; payroll support included</li>
          <li><i class="fas fa-check-circle"></i> Practice consolidation — compete at scale without selling to a DSO</li>
          <li><i class="fas fa-check-circle"></i> Growing corporate competition — strength in 1,100+ independent peers</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">See How We Help</a>
      </div>

      <div class="v2-media-col">
        <img src="{{ asset('images/v2/challenges.png') }}" alt="Practice Challenges" class="v2-challenges-img">
      </div>

    </div>
  </div>
</section>

{{-- ===== SAVINGS BENEFIT ===== --}}
<section class="v2-meet">
  <div class="sr-container">
    <div class="v2-two-col">

      <div class="v2-media-col">
        <img src="{{ asset('images/v2/dentist-2.png') }}" alt="Member Savings" class="v2-savings-img">
      </div>

      <div class="v2-text-col">
        <span class="v2-section-tag">Membership Savings</span>
        <h2 class="v2-section-title">Supercharge Your Savings With Discounts That Move the Needle.</h2>
        <p class="v2-section-body">
          Smile Source has vetted and negotiated rates with the industry's largest vendors to save on dental technology, supplies, labs, and services. Our collective purchasing power means every member enjoys rates no solo practice could negotiate alone — immediately upon joining.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Save up to 40% on dental supplies and materials</li>
          <li><i class="fas fa-check-circle"></i> Save up to 30% on dental laboratory work on average</li>
          <li><i class="fas fa-check-circle"></i> Save up to 45% with dental manufacturers</li>
          <li><i class="fas fa-check-circle"></i> Over 90 vetted vendors — only the best make the cut</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Explore Member Savings</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== MEMBERSHIP BENEFITS GRID ===== --}}
<section class="v2-modules">
  <div class="sr-container">
    <div class="v2-modules__header">
      <span class="v2-section-tag">Membership Benefits</span>
      <h2 class="v2-section-title">Everything Your Practice Needs to Thrive.</h2>
      <p class="v2-section-body" style="margin:0;">
        You'll enjoy access to a dedicated Member Success Specialist to help you
        optimize these benefits and more — all included in your Smile Source membership.
      </p>
    </div>

    <div class="v2-modules__grid">

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-tag"></i></div>
        <h3>Savings</h3>
        <p>Save up to 40% on supplies, 30% on lab work, and 45% with manufacturers. Vetted and negotiated rates across dental technology, supplies, labs, and services — immediately upon joining.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-rocket"></i></div>
        <h3>Practice Growth</h3>
        <p>Recruiting, benefits, payroll, patient financing, and strategic practice consulting — DSO-level support services that help you scale while keeping 100% ownership.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-bullhorn"></i></div>
        <h3>Marketing</h3>
        <p>Geodemographic targeting, consumer travel pattern analysis, digital presence optimization, and expert-led marketing courses to attract and retain more patients in your market.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-users"></i></div>
        <h3>Networking</h3>
        <p>Local group leaders organize in-person meetings across America. Online forums, virtual fireside chats, and The Exchange annual meeting — crowdsource 1,100+ peers 24/7.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Education</h3>
        <p>Hundreds of CE courses annually — in-person and online — for dentists, hygienists, dental assistants, and front office staff, covering practice management, new procedures, 3D technology, and more.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-user-check"></i></div>
        <h3>Member Success Specialist</h3>
        <p>A dedicated specialist connects you with top consultants and vendors, helps you optimize every benefit, and ensures you get full value from your membership from day one.</p>
      </div>

    </div>
  </div>
</section>

{{-- ===== WHO WE SERVE ===== --}}
<section class="v2-personas">
  <div class="sr-container">

    <div class="v2-personas__header">
      <span class="v2-section-tag">Community Over Competition</span>
      <h2 class="v2-section-title">We Are Dentists Helping Dentists.</h2>
      <p class="v2-section-body" style="margin:0;">
        No matter where your practice is today, Smile Source has a clear path forward for you.
      </p>
    </div>

    <div class="v2-personas__tabs">

      <div class="v2-persona">
        <span class="v2-persona__type">Solo Practitioners</span>
        <h3>The Power of a Network, The Freedom of Independence</h3>
        <p>Run your practice your way — but with the buying power, resources, and community of 1,100+ peers behind you.</p>
        <p class="v2-persona__quote">"To know I have a professional family to lean on or be leaned on is priceless." — Jeff Henneberg, DDS</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Growth-Focused Owners</span>
        <h3>Scale Faster With Proven Tools</h3>
        <p>Access marketing, technology, and staffing solutions that accelerate growth without the guesswork or the DSO trade-offs.</p>
        <p class="v2-persona__quote">"Smile Source has given me the support, confidence, and desire to be my best." — Dr. Kyle Benton</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Overhead-Conscious Dentists</span>
        <h3>Make More. Spend Less.</h3>
        <p>Our vetted vendor discounts and negotiated rates deliver savings that go straight to your bottom line — immediately.</p>
        <p class="v2-persona__quote">"More thrive, less strive." — Smile Source</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Community Builders</span>
        <h3>Find Your Professional Family</h3>
        <p>Connect with like-minded colleagues who share knowledge freely, celebrate each other's wins, and are always in your corner.</p>
        <p class="v2-persona__quote">"I now enjoy dentistry so much more." — Dr. Kyle Benton, Benton Family Dentistry</p>
      </div>

    </div>

  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="v2-reviews">
  <div class="sr-container">

    <div class="v2-reviews__header">
      <span class="v2-section-tag">Member Stories</span>
      <h2 class="v2-section-title">Trusted by 1,100+ Independent Dentists.</h2>
      <p class="v2-section-body" style="margin:0;">Here's what Smile Source members say about being part of the network.</p>
    </div>

    <div class="v2-reviews__grid">

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>A Professional Family</h4>
        <blockquote>"I would have never thought about my dental practice as the business it is today. It's exciting to be connected with other colleagues struggling and succeeding in similar ways. To know I have a professional family to lean on or be leaned on is priceless."</blockquote>
        <div class="v2-review-author">
          <img src="{{ asset('images/v2/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="v2-review-avatar-img">
          <div>
            <strong>Jeff Henneberg, DDS</strong>
            <span>Smile Source Spokane</span>
          </div>
        </div>
      </div>

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>Enjoying Dentistry Again</h4>
        <blockquote>"I now enjoy dentistry so much more. I have more appreciation for the team, the patients, and the colleagues I have. Smile Source has given me the support, confidence, and desire to be my best by surrounding myself with the best dentists and humans in the industry."</blockquote>
        <div class="v2-review-author">
          <img src="{{ asset('images/v2/dentist-2.png') }}" alt="Dr. Kyle Benton" class="v2-review-avatar-img">
          <div>
            <strong>Dr. Kyle Benton</strong>
            <span>Benton Family Dentistry</span>
          </div>
        </div>
      </div>

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>The Right Community</h4>
        <blockquote>"When you join Smile Source, you'll find colleagues who care and are willing to share their experience so your practice grows faster. Community over competition — it's real here, not just a tagline."</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">SS</div>
          <div>
            <strong>Smile Source Member</strong>
            <span>Independent Practice Owner</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CORE PROMISES STRIP ===== --}}
<section class="v2-guarantee">
  <div class="sr-container">
    <div class="v2-guarantee__inner">

      <div class="v2-guarantee-item">
        <i class="fas fa-shield-alt"></i>
        <div>
          <h4>DSO Benefits, Zero Sacrifice</h4>
          <p>Enjoy group-level purchasing power and resources while keeping 100% ownership of your practice.</p>
        </div>
      </div>

      <div class="v2-guarantee-item">
        <i class="fas fa-user-friends"></i>
        <div>
          <h4>Dedicated Member Support</h4>
          <p>Every member gets a dedicated Member Success Specialist to help maximize the value of their membership.</p>
        </div>
      </div>

      <div class="v2-guarantee-item">
        <i class="fas fa-sync-alt"></i>
        <div>
          <h4>Always Growing Network</h4>
          <p>Since 2006 our network has grown every year — more vendors, more members, more opportunities for you.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CTA ===== --}}
<section class="v2-cta">
  <div class="sr-container">
    <div class="v2-cta__inner">
      <h2>Become a Smile Source Member Today.</h2>
      <p>Join 1,100+ independent dentists who are already thriving together. Let's talk about what membership looks like for your practice.</p>
      <div class="v2-cta__row">
        <a href="#" class="sr-btn sr-btn-primary">Let's Talk</a>
        <a href="#" class="sr-btn sr-btn-outline-white">
          <i class="fas fa-arrow-right"></i>&nbsp; Join Now
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
