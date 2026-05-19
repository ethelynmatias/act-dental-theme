<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $metaDesc ?? 'ACT Dental — Exceptional care for your entire family. General, cosmetic, and orthodontic dentistry.' }}">
  <title>{{ $title ?? 'Smile Source' }} | Smile Source</title>

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
  </script>

  @stack('scripts')
</body>
</html>
