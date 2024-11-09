<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itineraries = Itinerary::paginate(5);
        return view('itineraries.index', compact('itineraries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tour_name' => 'required|string',
            'year' => 'required|string',
            'month' => 'required|string',
            'members' => 'nullable|string',
            'days' => 'nullable|integer',
            'start_from' => 'nullable|string',
            'venues' => 'nullable|string',
        ]);

        Itinerary::create($request->all());
        return redirect()->route('itineraries.index')->with('success', 'Itinerary created successfully.');
    }

    public function update(Request $request, $id)
    {
        $itinerary = Itinerary::findOrFail($id);
        $request->validate([
            'tour_name' => 'required|string',
            'year' => 'required|string',
            'month' => 'required|string',
            'members' => 'nullable|string',
            'days' => 'nullable|integer',
            'start_from' => 'nullable|string',
            'venues' => 'nullable|string',
        ]);

        $itinerary->update($request->all());
        return redirect()->route('itineraries.index')->with('success', 'Itinerary updated successfully.');
    }

    public function destroy($id)
    {
        $itinerary = Itinerary::findOrFail($id);
        $itinerary->delete();
        return redirect()->route('itineraries.index')->with('success', 'Itinerary deleted successfully.');
    }
}
