<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //     return view('welcome');
    return to_route('filament.admin.pages.dashboard');
});


Route::get('/pages', function() {
    return view('pages.index');
});
