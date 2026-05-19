@php
  $seg = request()->segment(1);
  $vp  = in_array($seg, ['v1','v2','v3','v4']) ? '/'.$seg : '/v2';
@endphp

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand col -->
      <div class="footer-brand">
        <a href="{{ $vp }}/home">
          <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Branding/Logos%20(2024)/SS_full_rev.png"
               alt="Smile Source" style="height:36px; width:auto; margin-bottom:16px; display:block;">
        </a>
        <p>Smile Source connects independent dentists to the right people, products, and services to boost profitability and accelerate growth. Community over competition.</p>
        <div class="footer-social">
          <a href="https://www.facebook.com/smilesource" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/smilesource" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@smilesource" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="https://www.linkedin.com/company/smile-source" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Why Smile Source -->
      <div class="footer-col">
        <h4>Why Smile Source</h4>
        <ul>
          <li><a href="{{ $vp }}/why-smile-source/about-us">About Us</a></li>
          <li><a href="{{ $vp }}/why-smile-source/leadership">Leadership</a></li>
          <li><a href="{{ $vp }}/why-smile-source/foundation">Foundation</a></li>
          <li><a href="{{ $vp }}/lets-talk">Member Success</a></li>
        </ul>
      </div>

      <!-- Membership -->
      <div class="footer-col">
        <h4>Membership Benefits</h4>
        <ul>
          <li><a href="{{ $vp }}/membership/savings">Savings</a></li>
          <li><a href="{{ $vp }}/membership/practice-growth">Practice Growth</a></li>
          <li><a href="{{ $vp }}/membership/marketing">Marketing</a></li>
          <li><a href="{{ $vp }}/membership/networking">Networking</a></li>
          <li><a href="{{ $vp }}/membership/education">Education</a></li>
        </ul>
      </div>

      <!-- Events & Resources -->
      <div class="footer-col">
        <h4>Events &amp; Resources</h4>
        <ul>
          <li><a href="{{ $vp }}/exchange-2026">The Exchange 2026</a></li>
          <li><a href="{{ $vp }}/webinars">Webinars &amp; Live Events</a></li>
          <li><a href="{{ $vp }}/blog">Blog</a></li>
          <li><a href="{{ $vp }}/lets-talk">Contact Us</a></li>
        </ul>
        <a href="{{ $vp }}/join" class="btn btn-primary btn-sm" style="margin-top:20px;">Join Now</a>
      </div>

    </div><!-- /footer-grid -->
  </div>

  <div class="footer-bottom">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px;">
      <span>&copy; {{ date('Y') }} Smile Source, LP. All rights reserved.</span>
      <div class="footer-bottom-links">
        <a href="https://www.smilesource.com/terms" target="_blank" rel="noopener">Terms</a>
        <a href="https://www.smilesource.com/privacy" target="_blank" rel="noopener">Privacy</a>
        <a href="{{ $vp }}/home">Sitemap</a>
      </div>
    </div>
  </div>
</footer>
