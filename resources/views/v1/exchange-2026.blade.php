@extends('layouts.v1-layout', ['title' => 'The Exchange 2026'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- ===== HERO ===== --}}
<section class="cp-ex-hero">
  <div class="cp-ex-hero__overlay"></div>
  <div class="container cp-ex-hero__inner">
    <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/SSEX26-Logo-Rev.png?width=720&name=SSEX26-Logo-Rev.png"
         alt="The Exchange 2026" class="cp-ex-hero__logo">
    <h3 class="cp-ex-hero__date">September 9–12 &nbsp;|&nbsp; San Antonio, TX</h3>
    <p class="cp-ex-hero__sub">The ultimate hub for inspiration, connection, and innovation for independent dentists.</p>
    <div class="cp-cta-row" style="margin-top:32px;">
      <a href="/v1/lets-talk" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
      <a href="/v1/membership/education" class="cp-btn cp-btn-outline-white cp-btn-lg">Learn About CE</a>
    </div>
  </div>
</section>

{{-- ===== STATS ===== --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">40+</div>
        <div class="cp-stat-card__label">CE courses to choose from</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">4</div>
        <div class="cp-stat-card__label">Days of education, networking &amp; innovation</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">1,100+</div>
        <div class="cp-stat-card__label">Independent dentists attending</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">75+</div>
        <div class="cp-stat-card__label">Elite vendor partners with exclusive deals</div>
      </div>
    </div>
  </div>
</section>

{{-- ===== FEATURE CARDS ===== --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-section-head" data-animate="fade-up">
      <div class="cp-eyebrow">All-Inclusive Experience</div>
      <h2>Everything You Need in One Place.</h2>
    </div>
    <div class="cp-ex-features" data-stagger>

      <div class="cp-ex-feature-card">
        <div class="cp-ex-feature-card__icon"><i class="fas fa-graduation-cap"></i></div>
        <h4>Over 40 CE Courses to Choose From</h4>
        <p>Earn up to 17 credits from cutting-edge courses designed for you and your entire team.</p>
      </div>

      <div class="cp-ex-feature-card">
        <div class="cp-ex-feature-card__icon"><i class="fas fa-tags"></i></div>
        <h4>Unbeatable Deals from Top Dental Vendors</h4>
        <p>Planning a big purchase? Vendor partners bring their best tech, tools, and exclusive pricing — only at The Exchange.</p>
      </div>

      <div class="cp-ex-feature-card">
        <div class="cp-ex-feature-card__icon"><i class="fas fa-chart-line"></i></div>
        <h4>Serious Practice Growth Content</h4>
        <p>From clinical innovation to business strategy, you'll leave with actionable insights to fuel your next level.</p>
      </div>

      <div class="cp-ex-feature-card">
        <div class="cp-ex-feature-card__icon"><i class="fas fa-star"></i></div>
        <h4>Celebrate with the Best in Dentistry</h4>
        <p>The Friday Night Festival and special events bring the community together in a way no other conference can.</p>
      </div>

    </div>
  </div>
</section>

{{-- ===== MAIN EVENT IMAGE ===== --}}
<section class="cp-ex-photo-band">
  <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/The%20Exchange/2026%20Exchange/1.png"
       alt="The Exchange 2026" class="cp-ex-photo-band__img">
</section>

{{-- ===== SPEAKERS ===== --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head" data-animate="fade-up">
      <div class="cp-eyebrow">Featured Speakers</div>
      <h2>More Speakers Added Daily</h2>
    </div>
    <div class="cp-ex-speakers" data-stagger>

      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Alex.png?width=1200&length=1200&name=Alex.png" alt="Alex">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Bill%20Robbins.png?width=1200&length=1200&name=Bill%20Robbins.png" alt="Bill Robbins">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Cassie%20Tallon.png?width=1200&length=1200&name=Cassie%20Tallon.png" alt="Cassie Tallon">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Dana%20Watson.png?width=1200&length=1200&name=Dana%20Watson.png" alt="Dana Watson">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/David%20Amberg.png?width=1200&length=1200&name=David%20Amberg.png" alt="David Amberg">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Julie%20Varney.png?width=1200&length=1200&name=Julie%20Varney.png" alt="Julie Varney">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Karla%20Soto.png?width=1200&length=1200&name=Karla%20Soto.png" alt="Karla Soto">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Katrina.png?width=1200&length=1200&name=Katrina.png" alt="Katrina">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Melissa.png?width=1200&length=1200&name=Melissa.png" alt="Melissa">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Minal.png?width=1200&length=1200&name=Minal.png" alt="Minal">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Sebastian.png?width=1200&length=1200&name=Sebastian.png" alt="Sebastian">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Tramain.png?width=1200&length=1200&name=Tramain.png" alt="Tramain">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Troy.png?width=1200&length=1200&name=Troy.png" alt="Troy">
      </div>
      <div class="cp-ex-speaker">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/The%20Exchange/2026%20Exchange/Speaker%20Cards/Wills.png?width=1200&length=1200&name=Wills.png" alt="Wills">
      </div>

    </div>
  </div>
</section>

{{-- ===== SCHEDULE ===== --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-section-head" data-animate="fade-up">
      <div class="cp-eyebrow">What's Happening</div>
      <h2>Schedule of Events</h2>
    </div>
    <div class="cp-ex-schedule" data-stagger>

      <div class="cp-ex-schedule-day">
        <div class="cp-ex-schedule-day__label">Thursday, Sept. 10</div>
        <ul>
          <li><i class="fas fa-check-circle"></i> Registration</li>
          <li><i class="fas fa-check-circle"></i> Breakfast</li>
          <li><i class="fas fa-check-circle"></i> General Session</li>
          <li><i class="fas fa-check-circle"></i> Lunch + Exhibit Hall</li>
          <li><i class="fas fa-check-circle"></i> Affinity Groups</li>
          <li><i class="fas fa-check-circle"></i> CE Sessions</li>
          <li><i class="fas fa-check-circle"></i> Exhibit Hall + Reception</li>
        </ul>
      </div>

      <div class="cp-ex-schedule-day">
        <div class="cp-ex-schedule-day__label">Friday, Sept. 11</div>
        <ul>
          <li><i class="fas fa-check-circle"></i> Breakfast</li>
          <li><i class="fas fa-check-circle"></i> CE Sessions</li>
          <li><i class="fas fa-check-circle"></i> Lunch + Exhibit Hall</li>
          <li><i class="fas fa-check-circle"></i> General Session</li>
          <li><i class="fas fa-check-circle"></i> Exhibit Hall + Reception</li>
          <li><i class="fas fa-check-circle"></i> Friday Night Festival 🎉</li>
        </ul>
      </div>

      <div class="cp-ex-schedule-day">
        <div class="cp-ex-schedule-day__label">Saturday, Sept. 12</div>
        <ul>
          <li><i class="fas fa-check-circle"></i> Breakfast</li>
          <li><i class="fas fa-check-circle"></i> CE Sessions</li>
          <li><i class="fas fa-check-circle"></i> Closing Lunch</li>
          <li><i class="fas fa-check-circle"></i> Farewell &amp; See You Next Year</li>
        </ul>
      </div>

    </div>
  </div>
</section>

{{-- ===== NOT JUST A CONFERENCE ===== --}}
<section class="cp-ex-not-just">
  <div class="container">
    <div class="cp-ex-not-just__grid">
      <div class="cp-ex-not-just__img" data-animate="fade-right">
        <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/chub_backup/Kirk_Celebrate_Exchange2023.jpg"
             alt="Celebrating at The Exchange">
      </div>
      <div class="cp-ex-not-just__content" data-animate="fade-left">
        <div class="cp-eyebrow">The Exchange Experience</div>
        <h2>This Isn't Just a Conference</h2>
        <p>The Exchange is where you remember why you chose private practice — and leave with the tools and relationships to make it thrive. 1,100+ independent dentists. Four days. One community.</p>
        <ul class="cp-hero-checks" style="margin-bottom:28px;">
          <li><i class="fas fa-check-circle"></i> Connect with peers who genuinely understand your journey</li>
          <li><i class="fas fa-check-circle"></i> Leave with actionable insights you can use Monday morning</li>
          <li><i class="fas fa-check-circle"></i> Access exclusive vendor deals you won't find anywhere else</li>
          <li><i class="fas fa-check-circle"></i> Celebrate and recharge alongside the best in dentistry</li>
        </ul>
        <a href="/v1/lets-talk" class="cp-btn cp-btn-primary cp-btn-lg">Register Now</a>
      </div>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head" data-animate="fade-up">
      <div class="cp-eyebrow">From Past Attendees</div>
      <h2>Hear From the People Who've Been There</h2>
    </div>
    <div class="cp-testimonials-grid" data-stagger>

      <div class="cp-testimonial-card">
        <div class="cp-testimonial-stars">★★★★★</div>
        <blockquote>"If you want to join hands with other dentists and teams that are trying to remain fiercely independent, this is the place to make that happen."</blockquote>
        <div class="cp-testimonial-author">
          <strong>Grant Smith</strong>
          <span>Prairie Village Dentist</span>
        </div>
      </div>

      <div class="cp-testimonial-card">
        <div class="cp-testimonial-stars">★★★★★</div>
        <blockquote>"The Exchange is your home for collaborating with like-minded private practices."</blockquote>
        <div class="cp-testimonial-author">
          <strong>Seth Huiras</strong>
          <span>Montgomery Family Dental</span>
        </div>
      </div>

      <div class="cp-testimonial-card">
        <div class="cp-testimonial-stars">★★★★★</div>
        <blockquote>"The Smile Source Exchange is where private practice dentists ignite their passion, sparking unparalleled growth and learning in a vibrant atmosphere."</blockquote>
        <div class="cp-testimonial-author">
          <strong>Lisa Stylos</strong>
          <span>Smiles By Stylos</span>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== VENUE ===== --}}
<section class="cp-ex-venue">
  <div class="cp-ex-venue__img-col">
    <img src="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/The%20Exchange/2026%20Exchange/lobby-entrance-from-riverwalk.jpg"
         alt="Venue — San Antonio River Walk" class="cp-ex-venue__img">
  </div>
  <div class="cp-ex-venue__info-col">
    <div class="cp-ex-venue__info">
      <div class="cp-eyebrow" style="color:var(--cp-primary);">The Venue</div>
      <h2>San Antonio, Texas</h2>
      <p>Experience the energy of the famous River Walk and the warmth of Texas hospitality — a destination that adds to the magic of The Exchange every year.</p>
      <div class="cp-ex-venue__details">
        <div class="cp-ex-venue__detail-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <strong>Location</strong>
            <span>San Antonio, TX</span>
          </div>
        </div>
        <div class="cp-ex-venue__detail-item">
          <i class="fas fa-calendar-alt"></i>
          <div>
            <strong>Dates</strong>
            <span>September 9–12, 2026</span>
          </div>
        </div>
        <div class="cp-ex-venue__detail-item">
          <i class="fas fa-graduation-cap"></i>
          <div>
            <strong>CE Credits</strong>
            <span>Earn up to 17 CE credits</span>
          </div>
        </div>
        <div class="cp-ex-venue__detail-item">
          <i class="fas fa-users"></i>
          <div>
            <strong>Attendees</strong>
            <span>1,100+ independent dentists</span>
          </div>
        </div>
      </div>
      <a href="/v1/lets-talk" class="cp-btn cp-btn-primary cp-btn-lg" style="margin-top:8px;">Register Now</a>
    </div>
  </div>
</section>

{{-- ===== VENDOR LOGOS ===== --}}
<section class="cp-logos" data-animate="fade-up">
  <div class="container">
    <p class="cp-logos-label">Elite Vendor Partners at The Exchange 2026</p>
    <div class="cp-logos-row cp-logos-row--dark">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/ClearCorrect_Logo_2023_Left_Align_white.png?width=150&height=60" alt="ClearCorrect">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/DENTSPLYSIRONA_white.png?width=150&height=44" alt="DENTSPLY SIRONA">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Envista%20Logo_white.png?width=150&height=50" alt="Envista">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Henry%20Schein%20Dental%20logo%20white-01%20copy.png?width=150&height=28" alt="Henry Schein">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/microdental_logoWhite@4x.png?width=150&height=22" alt="microdental">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Section%20179%20Marketplace/Burkhart.png?width=480&name=Burkhart.png" alt="Burkhart">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/chub_backup/brasseler_officiallogo.png?width=480&name=brasseler_officiallogo.png" alt="Brasseler">
    </div>
  </div>
</section>

{{-- ===== CTA ===== --}}
<section class="cp-cta-band" data-animate="zoom-in">
  <div class="container">
    <h2>Don't miss the experience of a lifetime.</h2>
    <p>Join 1,100+ independent dentists at the premier event for private practice owners in 2026.</p>
    <div class="cp-cta-row">
      <a href="/v1/lets-talk" class="cp-btn cp-btn-white cp-btn-lg">Register Now</a>
      <a href="/v1/join" class="cp-btn cp-btn-outline-white cp-btn-lg">Join Smile Source</a>
    </div>
  </div>
</section>

@endsection
