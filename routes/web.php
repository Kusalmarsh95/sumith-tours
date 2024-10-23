<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
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

Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/all-reservations', [ReservationController::class, 'index'])->name('all-reservations');
Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');;
Route::post('/reviews', [ReviewController::class, 'store'])->name('review.store');;
