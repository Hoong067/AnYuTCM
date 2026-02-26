<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    if (Cache::get('mobile_view_enabled', false)) {
        return view('homepagemobileView');
    }
    return view('homePage');
})->name('home');

Route::get('/outlets', function () {
    return view('outletPage');
})->name('outlets');

Route::get('/services', function () {
    return view('servicesPage');
})->name('services');

Route::get('/physicians', function () {
    return view('ourphysiciansPage');
})->name('physicians');

Route::get('/about', function () {
    return view('aboutPage');
})->name('about');

// Mobile pages
Route::get('/mobile/bookings', fn() => view('bookingpagemobileView'))->name('mobile.bookings');
Route::get('/mobile/services', fn() => view('servicespagemobileView'))->name('mobile.services');
Route::get('/mobile/profile', fn() => view('profilepagemobileView'))->name('mobile.profile');

// Admin
Route::get('/admin/login', function () {
    return view('admin.adminloginPage');
})->name('admin.login');

Route::get('/admin/dashboard', function () {
    return view('admin.adminPage');
})->name('admin.dashboard');

Route::post('/admin/toggle-mobile-view', function () {
    $enabled = request()->boolean('enabled');
    Cache::forever('mobile_view_enabled', $enabled);
    return response()->json(['success' => true, 'enabled' => $enabled]);
})->name('admin.toggle-mobile-view');
