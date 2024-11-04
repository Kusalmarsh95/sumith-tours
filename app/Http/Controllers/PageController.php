<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Itinerary;
use App\Models\Review;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $reviews = Review::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.home', compact('reviews'));
    }
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('pages.gallery', compact('galleries'));
    }

    public function reviews()
    {
        $reviews = Review::all();
        return view('pages.review', compact('reviews'));
    }
    public function itinerary()
    {
        $itineraries = Itinerary::all();
        return view('pages.itinerary', compact('itineraries'));
    }
}
