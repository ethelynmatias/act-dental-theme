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
Route::get('/v1/why-smile-source/about-us',   fn() => view('v1.empty-page', ['pageTitle' => 'About Us']));
Route::get('/v1/why-smile-source/leadership', fn() => view('v1.empty-page', ['pageTitle' => 'Leadership']));
Route::get('/v1/why-smile-source/foundation', fn() => view('v1.empty-page', ['pageTitle' => 'Foundation']));

// V1 — Membership Benefits
Route::get('/v1/membership/savings',        fn() => view('v1.empty-page', ['pageTitle' => 'Supercharge Your Savings']));
Route::get('/v1/membership/practice-growth',fn() => view('v1.empty-page', ['pageTitle' => 'Practice Growth']));
Route::get('/v1/membership/marketing',      fn() => view('v1.empty-page', ['pageTitle' => 'Marketing Support']));
Route::get('/v1/membership/networking',     fn() => view('v1.empty-page', ['pageTitle' => 'Networking']));
Route::get('/v1/membership/education',      fn() => view('v1.empty-page', ['pageTitle' => 'Continuing Education']));

// V1 — Practice Growth
Route::get('/v1/practice-growth/technology',    fn() => view('v1.empty-page', ['pageTitle' => 'Technology Solutions']));
Route::get('/v1/practice-growth/staffing',      fn() => view('v1.empty-page', ['pageTitle' => 'Staffing Resources']));
Route::get('/v1/practice-growth/marketing',     fn() => view('v1.empty-page', ['pageTitle' => 'Marketing & Branding']));
Route::get('/v1/practice-growth/vendor-savings',fn() => view('v1.empty-page', ['pageTitle' => 'Vendor Savings']));

// V1 — Networking
Route::get('/v1/networking/community',    fn() => view('v1.empty-page', ['pageTitle' => 'Member Community']));
Route::get('/v1/networking/study-clubs',  fn() => view('v1.empty-page', ['pageTitle' => 'Study Clubs']));
Route::get('/v1/networking/exchange-2026',fn() => view('v1.empty-page', ['pageTitle' => 'The Exchange 2026']));
Route::get('/v1/networking/webinars',     fn() => view('v1.empty-page', ['pageTitle' => 'Webinars & Live Events']));

// V1 — Standalone pages
Route::get('/v1/exchange-2026', fn() => view('v1.empty-page', ['pageTitle' => 'The Exchange 2026']));
Route::get('/v1/webinars',      fn() => view('v1.empty-page', ['pageTitle' => 'Webinars & Live Events']));
Route::get('/v1/blog',          fn() => view('v1.empty-page', ['pageTitle' => 'Blog']));
Route::get('/v1/lets-talk',     fn() => view('v1.empty-page', ['pageTitle' => "Let's Talk"]));
Route::get('/v1/join',          fn() => view('v1.empty-page', ['pageTitle' => 'Join Smile Source']));

// Version 2 - Sprocket Rocket Style (sprocketrocket.co)
Route::get('/v2/home', function () {
    return view('v2.home');
})->name('v2.home');

// Version 3 - Power Theme Style (maka-agency.com/power-theme)
Route::get('/v3/home', function () {
    return view('v3.home');
})->name('v3.home');

// Version 4 - ACT3 / Neambo Style (demo.neambo.com/act3)
Route::get('/v4/home', function () {
    return view('v4.home');
})->name('v4.home');
