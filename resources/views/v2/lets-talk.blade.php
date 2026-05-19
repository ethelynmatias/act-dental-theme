@extends('layouts.layout', ['title' => "Let's Talk"])
@push('styles')<link rel="stylesheet" href="{{ asset('css/v2.css') }}">@endpush
@section('content')

<section class="sr-page-hero">
  <div class="sr-container">
    <span class="sr-eyebrow">Contact Us</span>
    <h1>Let's Talk About Your Practice.</h1>
    <p>Have questions about membership? Want to see if Smile Source is the right fit for your practice? We'd love to connect — no pressure, just a real conversation.</p>
  </div>
</section>

<section class="sr-section">
  <div class="sr-container">
    <div class="sr-grid-2" style="gap:80px;align-items:start;">

      <div>
        <span class="sr-eyebrow">Send Us a Message</span>
        <h2 style="margin-bottom:28px;">We'll get back to you within one business day.</h2>
        <form action="#" method="POST">
          @csrf
          <div class="sr-form-row">
            <div class="sr-form-group">
              <label for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" placeholder="Jane" required>
            </div>
            <div class="sr-form-group">
              <label for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" placeholder="Smith" required>
            </div>
          </div>
          <div class="sr-form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="jane@mypractice.com" required>
          </div>
          <div class="sr-form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000">
          </div>
          <div class="sr-form-group">
            <label for="practice">Practice Name</label>
            <input type="text" id="practice" name="practice" placeholder="Smith Family Dentistry">
          </div>
          <div class="sr-form-group">
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
          <div class="sr-form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell us a bit about your practice and what you're looking for..."></textarea>
          </div>
          <button type="submit" class="sr-btn sr-btn-primary" style="width:100%;justify-content:center;">Send Message</button>
        </form>
      </div>

      <div>
        <span class="sr-eyebrow">Other Ways to Reach Us</span>
        <h2 style="margin-bottom:28px;">We're here to help.</h2>
        <ul class="sr-check-list" style="gap:20px;">
          <li class="sr-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-envelope" style="color:var(--sr-primary);margin-top:3px;font-size:18px;min-width:20px;"></i>
            <div><strong style="display:block;margin-bottom:4px;">Email</strong><span>info@smilesource.com</span></div>
          </li>
          <li class="sr-check-item" style="align-items:flex-start;gap:14px;">
            <i class="fas fa-clock" style="color:var(--sr-primary);margin-top:3px;font-size:18px;min-width:20px;"></i>
            <div><strong style="display:block;margin-bottom:4px;">Response Time</strong><span>We respond to all inquiries within one business day</span></div>
          </li>
        </ul>
        <div style="margin-top:40px;">
          <span class="sr-eyebrow" style="margin-bottom:16px;display:block;">What Happens Next?</span>
          <ul class="sr-check-list">
            <li class="sr-check-item"><i class="fas fa-check-circle"></i> A Member Success Specialist will reach out personally</li>
            <li class="sr-check-item"><i class="fas fa-check-circle"></i> We'll learn about your practice and your goals</li>
            <li class="sr-check-item"><i class="fas fa-check-circle"></i> We'll walk you through membership benefits tailored to you</li>
            <li class="sr-check-item"><i class="fas fa-check-circle"></i> No pressure — just a genuine conversation</li>
          </ul>
        </div>
        <div class="sr-review-card" style="margin-top:40px;">
          <div class="sr-stars">★★★★★</div>
          <blockquote>"I now enjoy dentistry so much more. Smile Source has given me the support, confidence, and desire to be my best."</blockquote>
          <div class="sr-review-author">
            <img src="{{ asset('images/v1/dentist-2.png') }}" alt="Dr. Kyle Benton" class="v2-review-avatar-img">
            <div><strong>Dr. Kyle Benton</strong><span>Benton Family Dentistry</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="sr-cta-band">
  <div class="sr-container">
    <h2>Ready to see if Smile Source is right for you?</h2>
    <p>Join 1,100+ independent dentists — or reach out and we'll answer every question you have.</p>
    <div class="sr-cta-actions">
      <a href="/v2/join" class="sr-btn sr-btn-white">Join Now</a>
    </div>
  </div>
</section>
@endsection
