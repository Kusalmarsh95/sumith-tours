<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(10);
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->all());

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $request->validate([
            'customer_name' => 'string|max:255',
            'review' => 'string',
            'rating' => 'integer|min:1|max:5',
        ]);

        $review->customer_name = $request->customer_name;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        return redirect()->back()->with('success', 'Review updated successfully!');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully!');
    }
}
