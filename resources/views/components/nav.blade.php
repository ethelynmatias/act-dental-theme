@php
  $seg = request()->segment(1);
  $vp  = in_array($seg, ['v2','v3','v4']) ? '/'.$seg : '/v2';
@endphp
<nav class="site-nav">

  <!-- Announcement bar -->
  <div class="v1-announce">
    <a href="{{ $vp }}/exchange-2026" class="v1-announce-msg">
      Join Us at The Exchange 2026 &nbsp;|&nbsp; San Antonio, TX &nbsp;·&nbsp; September 9–12, 2026
      <span class="announce-arrow">→</span>
    </a>
  </div>

  <!-- Main nav -->
  <div class="nav-main">
    <div class="container">
      <div class="nav-inner">

        <!-- Logo -->
        <a href="{{ $vp }}/home" class="nav-logo">
          @if($seg === 'v2')
            <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Branding/Logos%20(2024)/SS_full_rev.png"
                 alt="Smile Source" height="38" style="height:38px; width:auto; display:block;">
          @else
            <img src="https://23372339.fs1.hubspotusercontent-na1.net/hub/23372339/hubfs/Branding/Logos%20(2024)/Smile%20Source%202024%20Logo.png"
                 alt="Smile Source" height="38" style="height:38px; width:auto; display:block;">
          @endif
        </a>

        <!-- Desktop Menu -->
        <ul class="nav-menu">

          <li class="nav-item">
            <span class="nav-link">
              Why Smile Source <i class="fas fa-chevron-down arrow"></i>
            </span>
            <ul class="nav-dropdown">
              <li><a href="{{ $vp }}/why-smile-source/about-us">About Us</a></li>
              <li><a href="{{ $vp }}/why-smile-source/leadership">Leadership</a></li>
              <li><a href="{{ $vp }}/why-smile-source/foundation">Foundation</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <span class="nav-link">
              Membership Benefits <i class="fas fa-chevron-down arrow"></i>
            </span>
            <ul class="nav-dropdown">
              <li><a href="{{ $vp }}/membership/savings">Savings</a></li>
              <li><a href="{{ $vp }}/membership/practice-growth">Practice Growth</a></li>
              <li><a href="{{ $vp }}/membership/marketing">Marketing</a></li>
              <li><a href="{{ $vp }}/membership/networking">Networking</a></li>
              <li><a href="{{ $vp }}/membership/education">Education</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <span class="nav-link">
              Events <i class="fas fa-chevron-down arrow"></i>
            </span>
            <ul class="nav-dropdown">
              <li><a href="{{ $vp }}/exchange-2026">The Exchange 2026</a></li>
              <li><a href="{{ $vp }}/webinars">Webinars &amp; Live Events</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ $vp }}/blog" class="nav-link">Blog</a>
          </li>

        </ul>

        <!-- Desktop CTA -->
        <div class="nav-cta">
          <a href="https://members.smilesource.com/login" class="btn btn-outline btn-sm">Member Login</a>
          <a href="{{ $vp }}/lets-talk" class="btn btn-primary btn-sm">Let's Talk</a>
        </div>

        <!-- Hamburger -->
        <button class="nav-hamburger" id="navHam" aria-label="Toggle menu">
          <span></span>
          <span></span>
          <span></span>
        </button>

      </div><!-- /nav-inner -->
    </div><!-- /container -->

    <!-- Mobile Menu -->
    <ul class="nav-mobile" id="mobileNav">
      <li>
        <span class="mobile-toggle" style="cursor:pointer; display:flex; justify-content:space-between; align-items:center; padding:12px 0; font-size:15px; font-weight:500; border-bottom:1px solid var(--border);">
          Why Smile Source <i class="fas fa-chevron-down" style="font-size:12px;"></i>
        </span>
        <ul class="sub-links">
          <li><a href="{{ $vp }}/why-smile-source/about-us">About Us</a></li>
          <li><a href="{{ $vp }}/why-smile-source/leadership">Leadership</a></li>
          <li><a href="{{ $vp }}/why-smile-source/foundation">Foundation</a></li>
        </ul>
      </li>
      <li>
        <span class="mobile-toggle" style="cursor:pointer; display:flex; justify-content:space-between; align-items:center; padding:12px 0; font-size:15px; font-weight:500; border-bottom:1px solid var(--border);">
          Membership Benefits <i class="fas fa-chevron-down" style="font-size:12px;"></i>
        </span>
        <ul class="sub-links">
          <li><a href="{{ $vp }}/membership/savings">Savings</a></li>
          <li><a href="{{ $vp }}/membership/practice-growth">Practice Growth</a></li>
          <li><a href="{{ $vp }}/membership/marketing">Marketing</a></li>
          <li><a href="{{ $vp }}/membership/networking">Networking</a></li>
          <li><a href="{{ $vp }}/membership/education">Education</a></li>
        </ul>
      </li>
      <li>
        <span class="mobile-toggle" style="cursor:pointer; display:flex; justify-content:space-between; align-items:center; padding:12px 0; font-size:15px; font-weight:500; border-bottom:1px solid var(--border);">
          Events <i class="fas fa-chevron-down" style="font-size:12px;"></i>
        </span>
        <ul class="sub-links">
          <li><a href="{{ $vp }}/exchange-2026">The Exchange 2026</a></li>
          <li><a href="{{ $vp }}/webinars">Webinars &amp; Live Events</a></li>
        </ul>
      </li>
      <li><a href="{{ $vp }}/blog" style="display:block; padding:12px 0; font-size:15px; font-weight:500; border-bottom:1px solid var(--border);">Blog</a></li>
      <li style="padding-top:16px; display:flex; gap:10px; flex-wrap:wrap;">
        <a href="https://members.smilesource.com/login" class="btn btn-outline btn-sm" style="flex:1; justify-content:center;">Member Login</a>
        <a href="{{ $vp }}/lets-talk" class="btn btn-primary btn-sm" style="flex:1; justify-content:center;">Let's Talk</a>
      </li>
    </ul>

  </div><!-- /nav-main -->
</nav>
