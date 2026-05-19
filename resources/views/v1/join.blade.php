@extends('layouts.v1-layout', ['title' => 'Join Smile Source'])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Join Smile Source</div>
    <h1>Become a Member. Start Thriving.</h1>
    <p>Join 1,100+ independent dentists who have found their competitive edge through the Smile Source network. More thrive, less strive.</p>
  </div>
</section>

{{-- BENEFITS SUMMARY --}}
<section class="cp-content-section cp-content-section--alt">
  <div class="container">
    <div class="cp-section-head">
      <div class="cp-eyebrow">What's Included</div>
      <h2>Everything You Get as a Smile Source Member.</h2>
    </div>
    <div class="cp-content-grid-4">
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">40%</div>
        <div class="cp-stat-card__label">Off dental supplies from elite vendor partners</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">$6M+</div>
        <div class="cp-stat-card__label">In member rebates earned annually across the network</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">17</div>
        <div class="cp-stat-card__label">CE credits available at The Exchange annual conference</div>
      </div>
      <div class="cp-stat-card">
        <div class="cp-stat-card__num">100%</div>
        <div class="cp-stat-card__label">Ownership retained — we are not a DSO, never will be</div>
      </div>
    </div>
  </div>
</section>

{{-- JOIN FORM --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-content-grid-2" style="gap:80px;">
      <div>
        <div class="cp-eyebrow">Start Your Application</div>
        <h2 style="margin-bottom:8px;">Tell us about your practice.</h2>
        <p style="margin-bottom:28px;">A Member Success Specialist will reach out within one business day to walk you through the process.</p>
        <form class="cp-contact-form" style="box-shadow:none;border:none;padding:0;" action="#" method="POST">
          @csrf
          <div class="cp-form-row">
            <div class="cp-form-group">
              <label for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" placeholder="Jane" required>
            </div>
            <div class="cp-form-group">
              <label for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" placeholder="Smith, DDS" required>
            </div>
          </div>
          <div class="cp-form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="jane@mypractice.com" required>
          </div>
          <div class="cp-form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000" required>
          </div>
          <div class="cp-form-group">
            <label for="practice">Practice Name</label>
            <input type="text" id="practice" name="practice" placeholder="Smith Family Dentistry" required>
          </div>
          <div class="cp-form-row">
            <div class="cp-form-group">
              <label for="city">City</label>
              <input type="text" id="city" name="city" placeholder="Austin">
            </div>
            <div class="cp-form-group">
              <label for="state">State</label>
              <input type="text" id="state" name="state" placeholder="TX">
            </div>
          </div>
          <div class="cp-form-group">
            <label for="annual_revenue">Annual Practice Revenue</label>
            <select id="annual_revenue" name="annual_revenue">
              <option value="">Select range...</option>
              <option>Under $500K</option>
              <option>$500K – $1M</option>
              <option>$1M – $1.9M</option>
              <option>$2M – $3M</option>
              <option>$3M+</option>
            </select>
          </div>
          <div class="cp-form-group">
            <label for="interest">What interests you most?</label>
            <select id="interest" name="interest">
              <option value="">Select one...</option>
              <option>Savings &amp; Vendor Pricing</option>
              <option>Practice Growth Support</option>
              <option>Peer Networking</option>
              <option>Continuing Education</option>
              <option>Marketing Support</option>
              <option>All of the above</option>
            </select>
          </div>
          <div class="cp-form-group">
            <label for="message">Anything else you'd like us to know?</label>
            <textarea id="message" name="message" placeholder="Tell us your biggest practice challenge right now..."></textarea>
          </div>
          <button type="submit" class="cp-btn cp-btn-primary cp-btn-lg" style="width:100%;justify-content:center;">Submit Application</button>
          <p style="font-size:12px;color:var(--cp-text-light);text-align:center;margin-top:12px;">No commitment required. A member of our team will follow up personally.</p>
        </form>
      </div>

      <div>
        <div class="cp-eyebrow">Member Benefits</div>
        <h2 style="margin-bottom:20px;">What You'll Access From Day One.</h2>
        <div class="cp-check-list" style="gap:14px;">
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Up to 40% off dental supplies, 30% off lab work</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Up to 45% savings with dental manufacturers</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> $6M+ in member rebates earned annually</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Dedicated Member Success Specialist</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Group health insurance &amp; employee benefits</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Staff recruiting &amp; payroll support</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> In-house dental plan design</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Patient financing solutions</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Marketing &amp; digital presence support</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Strategic practice consulting</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Hundreds of CE courses annually</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Access to The Exchange annual conference</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> Local &amp; national peer networking events</div>
          <div class="cp-check-item"><i class="fas fa-check-circle"></i> 100% ownership — always</div>
        </div>

        <div class="cp-testimonial-card" style="margin-top:32px;">
          <div class="cp-stars">★★★★★</div>
          <blockquote>"Since joining, gross revenues grew 25% and net income grew over 50%. I've cut my clinical days from 5 to 3 — and my practice has never been healthier."</blockquote>
          <div class="cp-testimonial-author">
            <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Smile Source Member" class="cp-avatar-img">
            <div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- LOGOS --}}
<section class="cp-logos" style="border-top:1px solid var(--cp-border);">
  <div class="container">
    <p class="cp-logos-label">75+ Elite Vendor Partners — Vetted &amp; Negotiated for Members</p>
    <div class="cp-logos-row">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/ClearCorrect_Logo_2023_Left_Align_white.png?width=150&height=60" alt="ClearCorrect">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/DENTSPLYSIRONA_white.png?width=150&height=44" alt="DENTSPLY SIRONA">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Envista%20Logo_white.png?width=150&height=50" alt="Envista">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Henry%20Schein%20Dental%20logo%20white-01%20copy.png?width=150&height=28" alt="Henry Schein">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/microdental_logoWhite@4x.png?width=150&height=22" alt="microdental">
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>You'll be freakin' thrilled you joined Smile Source.</h2>
    <p>Not seeing results? Let's talk. We'll make it right.</p>
    <div class="cp-cta-row">
      <a href="/v1/lets-talk" class="cp-btn cp-btn-white cp-btn-lg">Let's Talk First</a>
    </div>
  </div>
</section>

@endsection
