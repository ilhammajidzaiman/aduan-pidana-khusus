<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     //     return view('welcome');
//     return to_route('filament.admin.pages.dashboard');
// });


Route::get('/pages', function() {
    return view('pages.index');
})->name('dashboard');

Route::get('/pages/report', function() {
    return view('pages.report');
})->name('report');

Route::get('/pages/support', function() {
    return view('pages.support');
})->name('support');

Route::get('/pages/profile', function() {
    return view('pages.profile');
})->name('profile');
