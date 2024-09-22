<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/itinerary', function () {
    return view('pages.itinerary');
});
Route::get('/reservation', function () {
    return view('pages.reservation');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/adventure', function () {
    return view('pages.adventure');
});
Route::get('/safari', function () {
    return view('pages.safari');
});
Route::get('/snorkeling', function () {
    return view('pages.snorkeling');
});
Route::get('/camping-site', function () {
    return view('pages.camping-site');
});
Route::get('/snorkeling', function () {
    return view('pages.snorkeling');
});
Route::get('/snorkeling', function () {
    return view('pages.snorkeling');
});
