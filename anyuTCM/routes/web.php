<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

// Admin
Route::get('/admin/login', function () {
    return view('admin.adminloginPage');
})->name('admin.login');

Route::get('/admin/dashboard', function () {
    return view('admin.adminPage');
})->name('admin.dashboard');
