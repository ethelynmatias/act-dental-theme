@extends('layouts.layout', ['title' => "Let's Talk"])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v4.css') }}">@endpush
@section('content')

<section class="v4-page-hero">
  <div class="container">
    <div class="v4-overline">Contact Us</div>
    <h1>Let's Talk About Your Practice.</h1>
    <p>Have questions about membership? Want to see if Smile Source is the right fit for your practice? We'd love to connect — no pressure, just a real conversation.</p>
  </div>
</section>

<section class="v4-sub-section">
  <div class="container">
    <div class="v4-sub-grid-2" style="gap:80px;align-items:start;">

      <div>
        <div class="v4-overline">Send Us a Message</div>
        <h2 style="margin-bottom:28px;">We'll get back to you within one business day.</h2>
        <form action="#" method="POST">
          @csrf
          <div class="v4-form-row">
            <div class="v4-form-group">
              <label for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" placeholder="Jane" required>
            </div>
            <div class="v4-form-group">
              <label for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" placeholder="Smith" required>
            </div>
          </div>
          <div class="v4-form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="jane@mypractice.com" required>
          </div>
          <div class="v4-form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000">
          </div>
          <div class="v4-form-group">
            <label for="practice">Practice Name</label>
            <input type="text" id="practice" name="practice" placeholder="Smith Family Dentistry">
          </div>
          <div class="v4-form-group">
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
          <div class="v4-form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell us a bit about your practice and what you're looking for..."></textarea>
          </div>
          <button type="submit" class="btn-accent btn-cta" style="width:100%;justify-content:center;">Send Message</button>
        </form>
      </div>

      <div>
        <div class="v4-overline">Other Ways to Reach Us</div>
        <h2 style="margin-bottom:28px;">We're here to help.</h2>
        <ul class="v4-sub-check" style="gap:20px;">
          <li class="v4-sub-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-envelope" style="font-size:18px;min-width:20px;margin-top:3px;"></i>
            <div><strong style="display:block;margin-bottom:4px;">Email</strong><span>info@smilesource.com</span></div>
          </li>
          <li class="v4-sub-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-clock" style="font-size:18px;min-width:20px;margin-top:3px;"></i>
            <div><strong style="display:block;margin-bottom:4px;">Response Time</strong><span>We respond to all inquiries within one business day</span></div>
          </li>
        </ul>
        <div style="margin-top:40px;">
          <div class="v4-overline" style="margin-bottom:16px;">What Happens Next?</div>
          <ul class="v4-sub-check">
            <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> A Member Success Specialist will reach out personally</li>
            <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> We'll learn about your practice and your goals</li>
            <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> We'll walk you through membership benefits tailored to you</li>
            <li class="v4-sub-check-item"><i class="fas fa-check-circle"></i> No pressure — just a genuine conversation</li>
          </ul>
        </div>
        <div class="v4-sub-testimonial" style="margin-top:40px;">
          <div class="v4-sub-stars">★★★★★</div>
          <blockquote>"I now enjoy dentistry so much more. Smile Source has given me the support, confidence, and desire to be my best."</blockquote>
          <div class="v4-sub-testimonial-author">
            <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="v4-avatar-img">
            <div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="v4-sub-cta">
  <div class="container">
    <h2>Ready to see if Smile Source is right for you?</h2>
    <p>Join 1,100+ independent dentists — or reach out and we'll answer every question you have.</p>
    <div class="v4-sub-cta-row">
      <a href="/v4/join" class="btn-accent btn-cta">Join Now</a>
    </div>
  </div>
</section>
@endsection
