<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/adventure', function () {
    return view('pages.adventure');
});
Route::get('/about', function () {
    return view('pages.about');
});
