<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $reviews = Review::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.home', compact('reviews'));
    }
}
