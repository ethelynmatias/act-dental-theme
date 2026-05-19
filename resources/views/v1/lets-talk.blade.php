@extends('layouts.v1-layout', ["title" => "Let's Talk"])
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush
@section('content')

{{-- HERO --}}
<section class="cp-page-hero">
  <div class="container">
    <div class="cp-eyebrow">Contact Us</div>
    <h1>Let's Talk About Your Practice.</h1>
    <p>Have questions about membership? Want to see if Smile Source is the right fit for your practice? We'd love to connect — no pressure, just a real conversation.</p>
  </div>
</section>

{{-- CONTACT SECTION --}}
<section class="cp-content-section">
  <div class="container">
    <div class="cp-content-grid-2" style="gap:80px;">

      {{-- FORM --}}
      <div>
        <div class="cp-eyebrow">Send Us a Message</div>
        <h2 style="margin-bottom:28px;">We'll get back to you within one business day.</h2>
        <form class="cp-contact-form" style="box-shadow:none;border:none;padding:0;" action="#" method="POST">
          @csrf
          <div class="cp-form-row">
            <div class="cp-form-group">
              <label for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" placeholder="Jane" required>
            </div>
            <div class="cp-form-group">
              <label for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" placeholder="Smith" required>
            </div>
          </div>
          <div class="cp-form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="jane@mypractice.com" required>
          </div>
          <div class="cp-form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000">
          </div>
          <div class="cp-form-group">
            <label for="practice">Practice Name</label>
            <input type="text" id="practice" name="practice" placeholder="Smith Family Dentistry">
          </div>
          <div class="cp-form-group">
            <label for="topic">What can we help you with?</label>
            <select id="topic" name="topic">
              <option value="">Select a topic...</option>
              <option>Membership &amp; Benefits</option>
              <option>Savings &amp; Vendor Pricing</option>
              <option>Practice Growth</option>
              <option>The Exchange 2026</option>
              <option>Continuing Education</option>
              <option>General Inquiry</option>
            </select>
          </div>
          <div class="cp-form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell us a bit about your practice and what you're looking for..."></textarea>
          </div>
          <button type="submit" class="cp-btn cp-btn-primary cp-btn-lg" style="width:100%;justify-content:center;">Send Message</button>
        </form>
      </div>

      {{-- CONTACT INFO --}}
      <div>
        <div class="cp-eyebrow">Other Ways to Reach Us</div>
        <h2 style="margin-bottom:28px;">We're here to help.</h2>

        <div class="cp-check-list" style="gap:20px;">
          <div class="cp-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-envelope" style="color:var(--cp-primary);margin-top:3px;font-size:18px;min-width:20px;"></i>
            <div>
              <strong style="display:block;color:var(--cp-navy);margin-bottom:4px;">Email</strong>
              <span style="color:var(--cp-text-mid);">info@smilesource.com</span>
            </div>
          </div>
          <div class="cp-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-phone" style="color:var(--cp-primary);margin-top:3px;font-size:18px;min-width:20px;"></i>
            <div>
              <strong style="display:block;color:var(--cp-navy);margin-bottom:4px;">Phone</strong>
              <span style="color:var(--cp-text-mid);">Contact us online to connect with a Member Success Specialist</span>
            </div>
          </div>
          <div class="cp-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-clock" style="color:var(--cp-primary);margin-top:3px;font-size:18px;min-width:20px;"></i>
            <div>
              <strong style="display:block;color:var(--cp-navy);margin-bottom:4px;">Response Time</strong>
              <span style="color:var(--cp-text-mid);">We respond to all inquiries within one business day</span>
            </div>
          </div>
        </div>

        <div style="margin-top:40px;">
          <div class="cp-eyebrow" style="margin-bottom:16px;">What Happens Next?</div>
          <div class="cp-check-list">
            <div class="cp-check-item"><i class="fas fa-check-circle"></i> A Member Success Specialist will reach out personally</div>
            <div class="cp-check-item"><i class="fas fa-check-circle"></i> We'll learn about your practice and your goals</div>
            <div class="cp-check-item"><i class="fas fa-check-circle"></i> We'll walk you through membership benefits tailored to you</div>
            <div class="cp-check-item"><i class="fas fa-check-circle"></i> No pressure — just a genuine conversation</div>
          </div>
        </div>

        <div class="cp-testimonial-card" style="margin-top:40px;">
          <div class="cp-stars">★★★★★</div>
          <blockquote>"I now enjoy dentistry so much more. Smile Source has given me the support, confidence, and desire to be my best."</blockquote>
          <div class="cp-testimonial-author">
            <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="cp-avatar-img">
            <div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- CTA --}}
<section class="cp-cta-band">
  <div class="container">
    <h2>Ready to see if Smile Source is right for you?</h2>
    <p>Join 1,100+ independent dentists — or reach out and we'll answer every question you have.</p>
    <div class="cp-cta-row">
      <a href="/v1/join" class="cp-btn cp-btn-white cp-btn-lg">Join Now</a>
    </div>
  </div>
</section>

@endsection
