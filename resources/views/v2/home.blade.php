@extends('layouts.layout')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v2.css') }}">
@endpush

@section('content')

{{-- ===== HERO ===== --}}
<section class="v2-hero">
  <div class="sr-container">
    <div class="v2-hero__inner">

      <span class="v2-hero__lead">Dental Practice Coaching &amp; Consulting</span>

      <h1>Better Practice,<br><em>Better Life.</em></h1>

      <p class="v2-hero__sub">
        Are you a dentist seeking to elevate your practice, boost profitability,
        and enhance your work-life balance? ACT Dental coaches help you build
        the practice — and the life — you've always wanted.
      </p>

      <div class="v2-hero__cta">
        <a href="#" class="sr-btn sr-btn-primary">Get Started Today</a>
        <a href="#" class="sr-btn sr-btn-outline-white">Learn About Coaching</a>
      </div>

    </div>

    <div class="v2-hero__visual">
      <div class="v2-media-img v2-media-img--dark">
        <i class="fas fa-chart-line"></i>
      </div>
    </div>

  </div>
</section>

{{-- ===== FEATURE BADGES ===== --}}
<section class="v2-badges">
  <div class="sr-container">
    <div class="v2-badges__grid">

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-bullseye"></i></div>
        <div>
          <h4>Clarify Your Vision</h4>
          <p>Define a clear roadmap for your practice with strategic goals and proven systems.</p>
        </div>
      </div>

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-users"></i></div>
        <div>
          <h4>Build Your Dream Team</h4>
          <p>Hire, train, and retain top talent with best-practice team management strategies.</p>
        </div>
      </div>

      <div class="v2-badge-item">
        <div class="v2-badge-item__icon"><i class="fas fa-dollar-sign"></i></div>
        <div>
          <h4>Maximize Profitability</h4>
          <p>Reduce write-offs, optimize reimbursements, and grow your financial margin.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== TRUST BAR ===== --}}
<section class="v2-trust">
  <div class="sr-container">
    <p class="v2-trust__label">Trusted by dentists across all 50 states and counting.</p>
    <div class="v2-trust__logos">
      <div class="v2-trust__pill">Best Practices Association</div>
      <div class="v2-trust__pill">TTT Group Coaching</div>
      <div class="v2-trust__pill">Pro Coaching</div>
      <div class="v2-trust__pill">GAPs Calculator</div>
      <div class="v2-trust__pill">Study Clubs</div>
      <div class="v2-trust__pill">Podcast</div>
      <div class="v2-trust__pill">Magazine</div>
    </div>
  </div>
</section>

{{-- ===== ABOUT ACT DENTAL ===== --}}
<section class="v2-meet">
  <div class="sr-container">
    <div class="v2-two-col">

      <div class="v2-media-col">
        <div class="v2-media-img v2-media-img--blue">
          <i class="fas fa-user-tie"></i>
        </div>
      </div>

      <div class="v2-text-col">
        <span class="v2-section-tag">About ACT Dental</span>
        <h2 class="v2-section-title">Why Every Great Practice Needs a Coach.</h2>
        <p class="v2-section-body">
          ACT Dental is uniquely positioned to address the challenges faced by dentists today.
          Our expert coaches possess the experience, knowledge, and tools to provide tailored
          solutions that transform your dental practice and enhance your personal and professional life.
          At ACT Dental, we believe every successful practice should operate under best practices —
          the question is, who's teaching yours?
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Personalized coaching tailored to your practice's unique needs</li>
          <li><i class="fas fa-check-circle"></i> Proven systems for team building, leadership, and operations</li>
          <li><i class="fas fa-check-circle"></i> Financial strategies to reduce write-offs and boost profitability</li>
          <li><i class="fas fa-check-circle"></i> Work-life balance frameworks so you love going to work again</li>
          <li><i class="fas fa-check-circle"></i> Community of like-minded practice owners across the country</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Meet Our Coaches</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== CHALLENGE #1: BURNOUT ===== --}}
<section class="v2-meet" style="background:var(--off-white);">
  <div class="sr-container">
    <div class="v2-two-col v2-two-col--reversed">

      <div class="v2-text-col">
        <span class="v2-section-tag">Challenge #1 — Burnout</span>
        <h2 class="v2-section-title">54.9% of Dentists Experience Burnout. Let's Change That.</h2>
        <p class="v2-section-body">
          A study in the Journal of the American Dental Association found that over half of dentists
          experience burnout symptoms. ACT Dental coaches help you clarify your vision, set strategic goals,
          and implement systems that restore your passion and energy for dentistry.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Develop stress management and self-care strategies</li>
          <li><i class="fas fa-check-circle"></i> Set goals that align with what matters most to you</li>
          <li><i class="fas fa-check-circle"></i> Build efficient systems that reduce daily friction</li>
          <li><i class="fas fa-check-circle"></i> Achieve a more fulfilling, balanced career</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Discover How Coaching Helps</a>
      </div>

      <div class="v2-media-col">
        <div class="v2-media-img v2-media-img--light">
          <i class="fas fa-heart"></i>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CHALLENGE #2: PPOS & PROFITABILITY ===== --}}
<section class="v2-meet">
  <div class="sr-container">
    <div class="v2-two-col">

      <div class="v2-media-col">
        <div class="v2-media-img v2-media-img--blue" style="background:linear-gradient(135deg,#ede9fe,#ddd6fe); color:#7c3aed;">
          <i class="fas fa-chart-bar"></i>
        </div>
      </div>

      <div class="v2-text-col">
        <span class="v2-section-tag">Challenge #2 — PPO Reimbursements</span>
        <h2 class="v2-section-title">82.4% of Dentists Are in PPOs. We Help You Thrive Anyway.</h2>
        <p class="v2-section-body">
          ACT Dental coaches analyze your practice performance, identify opportunities for improvement,
          and provide tailored solutions to increase efficiency and maximize profitability — even within
          the complex world of insurance reimbursement.
        </p>
        <ul class="v2-list">
          <li><i class="fas fa-check-circle"></i> Navigate PPO complexity with expert guidance</li>
          <li><i class="fas fa-check-circle"></i> Reduce write-offs and increase collections</li>
          <li><i class="fas fa-check-circle"></i> Explore alternative income streams and fee-for-service strategies</li>
          <li><i class="fas fa-check-circle"></i> Optimize scheduling to maximize production per day</li>
        </ul>
        <a href="#" class="sr-btn sr-btn-primary">Meet Our Expert Coaches</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== COACHING PROGRAMS GRID ===== --}}
<section class="v2-modules">
  <div class="sr-container">
    <div class="v2-modules__header">
      <span class="v2-section-tag">Our Coaching Programs</span>
      <h2 class="v2-section-title">Find the Right Program for Your Practice.</h2>
      <p class="v2-section-body" style="margin:0;">
        Whether you're looking for a community, group coaching, or one-on-one guidance,
        ACT Dental has a program designed to meet you exactly where you are.
      </p>
    </div>

    <div class="v2-modules__grid">

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-users"></i></div>
        <h3>Best Practices Association</h3>
        <p>Join a community of driven dentists committed to best practices, continuous learning, and lasting success.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-chalkboard-teacher"></i></div>
        <h3>TTT Group Coaching</h3>
        <p>Small-group coaching with like-minded dentists. Shared accountability, real strategies, and measurable results.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-user-tie"></i></div>
        <h3>Pro Coaching</h3>
        <p>One-on-one personalized coaching with an expert ACT Dental coach dedicated to your specific goals and practice.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-calculator"></i></div>
        <h3>GAPs Calculator</h3>
        <p>Identify the gaps between where your practice is and where it should be with our powerful diagnostic tool.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-podcast"></i></div>
        <h3>Best Practices Podcast</h3>
        <p>Weekly insights from top dental coaches and industry leaders to keep your thinking sharp and current.</p>
      </div>

      <div class="v2-module-card">
        <div class="v2-module-card__icon"><i class="fas fa-calendar-alt"></i></div>
        <h3>Events &amp; Study Clubs</h3>
        <p>Live events and study club meetings where you connect, learn, and grow alongside your peers.</p>
      </div>

    </div>
  </div>
</section>

{{-- ===== WHO WE SERVE ===== --}}
<section class="v2-personas">
  <div class="sr-container">

    <div class="v2-personas__header">
      <span class="v2-section-tag">Created for Every Dentist</span>
      <h2 class="v2-section-title">Wherever You Are, We Meet You There.</h2>
      <p class="v2-section-body" style="margin:0;">
        No matter where your practice is today, ACT Dental has a clear path to the practice and life you deserve.
      </p>
    </div>

    <div class="v2-personas__tabs">

      <div class="v2-persona">
        <span class="v2-persona__type">Burned-Out Dentists</span>
        <h3>Rediscover Your Passion</h3>
        <p>Restore your energy, set boundaries, and build systems that let you love dentistry again — without working more.</p>
        <p class="v2-persona__quote">"ACT helped me transform my practice from dysfunctional to high-performing." — Dr. Kristen Donohue</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Growth-Minded Owners</span>
        <h3>Scale Smarter, Not Harder</h3>
        <p>Implement proven systems, optimize your schedule, and build the team that takes your practice to the next level.</p>
        <p class="v2-persona__quote">"Our practice revenues have grown three-fold since I started with ACT." — Dr. Sapna Chandra</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">New Practice Owners</span>
        <h3>Start Strong From Day One</h3>
        <p>Get the roadmap, systems, and community that new owners need — before the costly mistakes happen.</p>
        <p class="v2-persona__quote">"Smartest practice decision I made in 22 years." — Dr. Christopher Altadonna</p>
      </div>

      <div class="v2-persona">
        <span class="v2-persona__type">Established Practices</span>
        <h3>Break Through Your Ceiling</h3>
        <p>Identify gaps, eliminate inefficiencies, and unlock the growth that's been right in front of you all along.</p>
        <p class="v2-persona__quote">"Our office culture is healthier than ever and profitability is hitting new records." — Dr. Emily Stancato</p>
      </div>

    </div>

  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="v2-reviews">
  <div class="sr-container">

    <div class="v2-reviews__header">
      <span class="v2-section-tag">Dentist Reviews</span>
      <h2 class="v2-section-title">What Dentists Are Saying About ACT Dental.</h2>
      <p class="v2-section-body" style="margin:0;">Real results from real dentists across the country who partnered with ACT Dental.</p>
    </div>

    <div class="v2-reviews__grid">

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>Changed My Practice and My Life</h4>
        <blockquote>"ACT Dental has helped me change my practice which changed my life! The focus really is 'Better Practice Better Life.' If you are dreaming about a practice you want to drive to everyday, ACT will help you get there."</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">AH</div>
          <div>
            <strong>Dr. Alice Hale</strong>
            <span>Aiken, SC</span>
          </div>
        </div>
      </div>

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>Revenues Grew Three-Fold</h4>
        <blockquote>"Our practice revenues have grown three-fold since I started working with ACT. My team is now more aligned than ever, and this has given me greater peace of mind. Highly recommend!"</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">SC</div>
          <div>
            <strong>Dr. Sapna Chandra</strong>
            <span>Fairfax, CA</span>
          </div>
        </div>
      </div>

      <div class="v2-review-card">
        <div class="v2-review-card__stars">★★★★★</div>
        <h4>Best Decision in 22 Years</h4>
        <blockquote>"I'm a new coaching client, now 3 months in. What an invigorating, cohesive experience for our entire team! We now have a clear vision and a path to achieve our goals. Smartest practice decision I made in 22 years."</blockquote>
        <div class="v2-review-author">
          <div class="v2-review-avatar">CA</div>
          <div>
            <strong>Dr. Christopher Altadonna</strong>
            <span>Stowe, VT</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== GUARANTEE STRIP ===== --}}
<section class="v2-guarantee">
  <div class="sr-container">
    <div class="v2-guarantee__inner">

      <div class="v2-guarantee-item">
        <i class="fas fa-hand-holding-heart"></i>
        <div>
          <h4>Personalized Coaching</h4>
          <p>Every coaching engagement is tailored to your specific practice, goals, and challenges — no cookie-cutter programs.</p>
        </div>
      </div>

      <div class="v2-guarantee-item">
        <i class="fas fa-headset"></i>
        <div>
          <h4>Ongoing Support</h4>
          <p>Your coach is with you through every challenge — not just scheduled calls, but real partnership when it matters most.</p>
        </div>
      </div>

      <div class="v2-guarantee-item">
        <i class="fas fa-sync-alt"></i>
        <div>
          <h4>Proven Systems</h4>
          <p>Tried-and-tested frameworks for team building, scheduling, finance, and leadership — implemented step by step.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CTA ===== --}}
<section class="v2-cta">
  <div class="sr-container">
    <div class="v2-cta__inner">
      <h2>Start Building a Better Practice Today.</h2>
      <p>Schedule a free practice discovery call and find out which ACT Dental program is the right fit for you.</p>
      <div class="v2-cta__row">
        <a href="#" class="sr-btn sr-btn-primary">Get Started Today</a>
        <a href="tel:+18008518186" class="sr-btn sr-btn-outline-white">
          <i class="fas fa-phone"></i>&nbsp; 800-851-8186
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
