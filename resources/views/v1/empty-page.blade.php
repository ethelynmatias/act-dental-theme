@extends('layouts.v1-layout', ['title' => $pageTitle ?? 'Page'])

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
@endpush

@section('content')
<section style="padding: 120px 0 80px; text-align: center;">
  <div class="container">
    <h1 style="font-size: 2.5rem; margin-bottom: 16px;">{{ $pageTitle ?? 'Coming Soon' }}</h1>
    <p style="color: var(--text-mid); font-size: 1.1rem;">This page is under construction. Check back soon.</p>
    <a href="/v1/home" class="btn btn-primary" style="margin-top: 32px; display: inline-block;">Back to Home</a>
  </div>
</section>
@endsection
