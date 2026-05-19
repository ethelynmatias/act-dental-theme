<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Version 1 - Clean Pro Style (clean.pro)
Route::get('/v1/home', function () {
    return view('v1.home');
})->name('v1.home');

// V1 — Why Smile Source
Route::get('/v1/why-smile-source/about-us',   fn() => view('v1.about-us'));
Route::get('/v1/why-smile-source/leadership', fn() => view('v1.leadership'));
Route::get('/v1/why-smile-source/foundation', fn() => view('v1.foundation'));

// V1 — Membership Benefits
Route::get('/v1/membership/savings',         fn() => view('v1.savings'));
Route::get('/v1/membership/practice-growth', fn() => view('v1.practice-growth'));
Route::get('/v1/membership/marketing',       fn() => view('v1.marketing'));
Route::get('/v1/membership/networking',      fn() => view('v1.networking'));
Route::get('/v1/membership/education',       fn() => view('v1.education'));

// V1 — Standalone pages
Route::get('/v1/exchange-2026', fn() => view('v1.exchange-2026'));
Route::get('/v1/webinars',      fn() => view('v1.webinars'));
Route::get('/v1/blog',          fn() => view('v1.blog'));
Route::get('/v1/lets-talk',     fn() => view('v1.lets-talk'));
Route::get('/v1/join',          fn() => view('v1.join'));

// ── V2 (Sprocket Rocket) ─────────────────────────────────────────
Route::get('/v2/home', fn() => view('v2.home'))->name('v2.home');
Route::get('/v2/why-smile-source/about-us',   fn() => view('v2.about-us'));
Route::get('/v2/why-smile-source/leadership', fn() => view('v2.leadership'));
Route::get('/v2/why-smile-source/foundation', fn() => view('v2.foundation'));
Route::get('/v2/membership/savings',          fn() => view('v2.savings'));
Route::get('/v2/membership/practice-growth',  fn() => view('v2.practice-growth'));
Route::get('/v2/membership/marketing',        fn() => view('v2.marketing'));
Route::get('/v2/membership/networking',       fn() => view('v2.networking'));
Route::get('/v2/membership/education',        fn() => view('v2.education'));
Route::get('/v2/exchange-2026',               fn() => view('v2.exchange-2026'));
Route::get('/v2/webinars',                    fn() => view('v2.webinars'));
Route::get('/v2/blog',                        fn() => view('v2.blog'));
Route::get('/v2/lets-talk',                   fn() => view('v2.lets-talk'));
Route::get('/v2/join',                        fn() => view('v2.join'));

// ── V3 (Power Theme) ─────────────────────────────────────────────
Route::get('/v3/home', fn() => view('v3.home'))->name('v3.home');
Route::get('/v3/why-smile-source/about-us',   fn() => view('v3.about-us'));
Route::get('/v3/why-smile-source/leadership', fn() => view('v3.leadership'));
Route::get('/v3/why-smile-source/foundation', fn() => view('v3.foundation'));
Route::get('/v3/membership/savings',          fn() => view('v3.savings'));
Route::get('/v3/membership/practice-growth',  fn() => view('v3.practice-growth'));
Route::get('/v3/membership/marketing',        fn() => view('v3.marketing'));
Route::get('/v3/membership/networking',       fn() => view('v3.networking'));
Route::get('/v3/membership/education',        fn() => view('v3.education'));
Route::get('/v3/exchange-2026',               fn() => view('v3.exchange-2026'));
Route::get('/v3/webinars',                    fn() => view('v3.webinars'));
Route::get('/v3/blog',                        fn() => view('v3.blog'));
Route::get('/v3/lets-talk',                   fn() => view('v3.lets-talk'));
Route::get('/v3/join',                        fn() => view('v3.join'));

// ── V4 (ACT3 / Neambo) ───────────────────────────────────────────
Route::get('/v4/home', fn() => view('v4.home'))->name('v4.home');
Route::get('/v4/why-smile-source/about-us',   fn() => view('v4.about-us'));
Route::get('/v4/why-smile-source/leadership', fn() => view('v4.leadership'));
Route::get('/v4/why-smile-source/foundation', fn() => view('v4.foundation'));
Route::get('/v4/membership/savings',          fn() => view('v4.savings'));
Route::get('/v4/membership/practice-growth',  fn() => view('v4.practice-growth'));
Route::get('/v4/membership/marketing',        fn() => view('v4.marketing'));
Route::get('/v4/membership/networking',       fn() => view('v4.networking'));
Route::get('/v4/membership/education',        fn() => view('v4.education'));
Route::get('/v4/exchange-2026',               fn() => view('v4.exchange-2026'));
Route::get('/v4/webinars',                    fn() => view('v4.webinars'));
Route::get('/v4/blog',                        fn() => view('v4.blog'));
Route::get('/v4/lets-talk',                   fn() => view('v4.lets-talk'));
Route::get('/v4/join',                        fn() => view('v4.join'));
