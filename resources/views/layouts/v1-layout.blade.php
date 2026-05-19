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

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Shared Global CSS -->
  <link rel="stylesheet" href="{{ asset('css/shared.css') }}">

  <!-- V1 Nav CSS -->
  <link rel="stylesheet" href="{{ asset('css/v1-nav.css') }}">

  <!-- Template-specific CSS -->
  @stack('styles')
</head>
<body class="{{ $bodyClass ?? '' }}">

  <!-- ======= NAVIGATION ======= -->
  @include('components.v1-nav')

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

  <!-- V1 Nav JS -->
  <script>
    // Hamburger toggle
    const ham = document.getElementById('v1NavHam');
    const mobileNav = document.getElementById('v1MobileNav');
    if (ham && mobileNav) {
      ham.addEventListener('click', () => {
        ham.classList.toggle('open');
        mobileNav.classList.toggle('open');
      });
    }

    // Mobile sub-menu accordions
    document.querySelectorAll('.v1-mobile-toggle').forEach(btn => {
      btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-target');
        const sub = document.getElementById(targetId);
        if (!sub) return;
        const isOpen = sub.classList.contains('open');
        // Close all
        document.querySelectorAll('.v1-mobile-sub').forEach(el => el.classList.remove('open'));
        document.querySelectorAll('.v1-mobile-toggle').forEach(el => el.classList.remove('active'));
        // Toggle current
        if (!isOpen) {
          sub.classList.add('open');
          btn.classList.add('active');
        }
      });
    });

    // Sticky shadow on scroll
    const nav = document.querySelector('.site-nav');
    if (nav) {
      window.addEventListener('scroll', () => {
        nav.style.boxShadow = window.scrollY > 10
          ? '0 4px 24px rgba(0,0,0,.1)'
          : 'none';
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
      animateEls.forEach(el => el.classList.add('is-visible'));
    }
  </script>

  @stack('scripts')
</body>
</html>
