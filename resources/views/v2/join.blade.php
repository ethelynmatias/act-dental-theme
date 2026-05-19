@extends('layouts.layout', ['title' => 'Join Smile Source'])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Join Smile Source</span>
    <h1>Become a Member. Start Thriving.</h1>
    <p>Join 1,100+ independent dentists who have found their competitive edge through the Smile Source network. More thrive, less strive.</p>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <div class="sr-section-head"><span class="sr-eyebrow">What's Included</span><h2>Everything You Get as a Smile Source Member.</h2></div>
    <div class="sr-grid-4">
      <div class="sr-stat-card"><div class="sr-stat-card__num">40%</div><div class="sr-stat-card__label">Off dental supplies from elite vendor partners</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">$6M+</div><div class="sr-stat-card__label">In member rebates earned annually across the network</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">17</div><div class="sr-stat-card__label">CE credits available at The Exchange annual conference</div></div>
      <div class="sr-stat-card"><div class="sr-stat-card__num">100%</div><div class="sr-stat-card__label">Ownership retained — we are not a DSO, never will be</div></div>
    </div>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-grid-2" style="gap:80px;align-items:start;">

      <div>
        <span class="sr-eyebrow">Start Your Application</span>
        <h2 style="margin-bottom:8px;">Tell us about your practice.</h2>
        <p style="margin-bottom:28px;">A Member Success Specialist will reach out within one business day to walk you through the process.</p>
        <form action="#" method="POST">
          @csrf
          <div class="sr-form-row">
            <div class="sr-form-group">
              <label for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" placeholder="Jane" required>
            </div>
            <div class="sr-form-group">
              <label for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" placeholder="Smith, DDS" required>
            </div>
          </div>
          <div class="sr-form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="jane@mypractice.com" required>
          </div>
          <div class="sr-form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000" required>
          </div>
          <div class="sr-form-group">
            <label for="practice">Practice Name</label>
            <input type="text" id="practice" name="practice" placeholder="Smith Family Dentistry" required>
          </div>
          <div class="sr-form-row">
            <div class="sr-form-group">
              <label for="city">City</label>
              <input type="text" id="city" name="city" placeholder="Austin">
            </div>
            <div class="sr-form-group">
              <label for="state">State</label>
              <input type="text" id="state" name="state" placeholder="TX">
            </div>
          </div>
          <div class="sr-form-group">
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
          <div class="sr-form-group">
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
          <div class="sr-form-group">
            <label for="message">Anything else you'd like us to know?</label>
            <textarea id="message" name="message" placeholder="Tell us your biggest practice challenge right now..."></textarea>
          </div>
          <button type="submit" class="sr-btn sr-btn-primary" style="width:100%;justify-content:center;">Submit Application</button>
          <p style="font-size:12px;text-align:center;margin-top:12px;opacity:.6;">No commitment required. A member of our team will follow up personally.</p>
        </form>
      </div>

      <div>
        <span class="sr-eyebrow">Member Benefits</span>
        <h2 style="margin-bottom:20px;">What You'll Access From Day One.</h2>
        <ul class="sr-check-list" style="gap:14px;">
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Up to 40% off dental supplies, 30% off lab work</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Up to 45% savings with dental manufacturers</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> $6M+ in member rebates earned annually</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Dedicated Member Success Specialist</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Group health insurance &amp; employee benefits</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Staff recruiting &amp; payroll support</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> In-house dental plan design</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Patient financing solutions</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Marketing &amp; digital presence support</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Strategic practice consulting</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Hundreds of CE courses annually</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Access to The Exchange annual conference</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> Local &amp; national peer networking events</li>
          <li class="sr-check-item"><i class="fas fa-check-circle"></i> 100% ownership — always</li>
        </ul>
        <div class="sr-review-card" style="margin-top:32px;">
          <div class="sr-stars">★★★★★</div>
          <blockquote>"Since joining, gross revenues grew 25% and net income grew over 50%. I've cut my clinical days from 5 to 3 — and my practice has never been healthier."</blockquote>
          <div class="sr-review-author">
            <img src="{{ asset('images/v1/dentist-1.png') }}" alt="Jeff Henneberg, DDS" class="v2-review-avatar-img">
            <div><strong>Jeff Henneberg, DDS</strong><span>Smile Source Spokane</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="sr-section sr-section--alt">
  <div class="sr-container">
    <p style="text-align:center;font-size:14px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;opacity:.6;margin-bottom:32px;">75+ Elite Vendor Partners — Vetted &amp; Negotiated for Members</p>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:32px;filter:grayscale(1);opacity:.6;">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/ClearCorrect_Logo_2023_Left_Align_white.png?width=150&height=60" alt="ClearCorrect" style="height:40px;width:auto;">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/DENTSPLYSIRONA_white.png?width=150&height=44" alt="DENTSPLY SIRONA" style="height:32px;width:auto;">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Envista%20Logo_white.png?width=150&height=50" alt="Envista" style="height:36px;width:auto;">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/Henry%20Schein%20Dental%20logo%20white-01%20copy.png?width=150&height=28" alt="Henry Schein" style="height:24px;width:auto;">
      <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Vendors/Elite%20Vendors/Logos/microdental_logoWhite@4x.png?width=150&height=22" alt="microdental" style="height:20px;width:auto;">
    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>You'll be freakin' thrilled you joined Smile Source.</h2>
    <p>Not seeing results? Let's talk. We'll make it right.</p>
    <div class="sr-cta-actions">
      <a href="/v2/lets-talk" class="sr-btn sr-btn-white">Let's Talk First</a>
    </div>
  </div>
</section>
@endsection
