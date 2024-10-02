<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


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
Route::get('/review', function () {
    return view('pages.review');
});


Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reviews', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
