<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $metaDesc ?? 'ACT Dental — Exceptional care for your entire family. General, cosmetic, and orthodontic dentistry.' }}">
  <title>Smile Source{{ isset($title) ? ' | ' . $title : '' }}</title>

  <!-- Favicon -->
  <link rel="icon" href="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Branding/Logos%20(2024)/Smile%20Source%202024%20Favicon.png">
  <link rel="shortcut icon" href="https://23372339.fs1.hubspotusercontent-na1.net/hubfs/23372339/Branding/Logos%20(2024)/Smile%20Source%202024%20Favicon.png">

  <!-- Shared Global CSS -->
  <link rel="stylesheet" href="{{ asset('css/shared.css') }}">

  <!-- Template-specific CSS -->
  @stack('styles')

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="{{ $bodyClass ?? '' }}">

  <!-- ======= NAVIGATION ======= -->
  @include('components.nav')

  <!-- ======= PAGE CONTENT ======= -->
  <main>
    @yield('content')
  </main>

  <!-- ======= FOOTER ======= -->
  @include('components.footer')

  <!-- Scroll-to-top button -->
  <button class="scroll-top-btn" id="scrollTopBtn" aria-label="Scroll to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Shared JS -->
  <script>
    // Mobile nav toggle
    const ham = document.getElementById('navHam');
    const mobileNav = document.getElementById('mobileNav');
    if (ham && mobileNav) {
      ham.addEventListener('click', () => {
        ham.classList.toggle('open');
        mobileNav.classList.toggle('open');
      });
    }

    // Mobile sub-menu toggles
    document.querySelectorAll('.mobile-toggle').forEach(btn => {
      btn.addEventListener('click', () => {
        const sub = btn.nextElementSibling;
        if (sub) sub.classList.toggle('open');
      });
    });

    // Sticky nav shadow on scroll
    const nav = document.querySelector('.site-nav');
    if (nav) {
      window.addEventListener('scroll', () => {
        nav.style.boxShadow = window.scrollY > 10
          ? '0 4px 24px rgba(0,0,0,.12)'
          : '0 2px 12px rgba(0,0,0,.06)';
      });
    }

    // Scroll-to-top button
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    if (scrollTopBtn) {
      window.addEventListener('scroll', () => {
        scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
      });
      scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }

    // Scroll reveal animations (IntersectionObserver)
    const animateEls = document.querySelectorAll('[data-animate], [data-stagger]');
    if (animateEls.length && 'IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      animateEls.forEach(el => observer.observe(el));
    } else {
      // Fallback: show all immediately
      animateEls.forEach(el => el.classList.add('is-visible'));
    }
  </script>

  @stack('scripts')
</body>
</html>
