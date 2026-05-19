<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $metaDesc ?? 'ACT Dental — Exceptional care for your entire family. General, cosmetic, and orthodontic dentistry.' }}">
  <title>{{ $title ?? 'Smile Source' }} | Smile Source</title>

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
  </script>

  @stack('scripts')
</body>
</html>
