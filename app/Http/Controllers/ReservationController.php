<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function create()
    {
        return view('pages.reservation');
    }

    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|email|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'category' => 'required',
            'country' => 'required',
        ]);

        // Send email to the owner
        Mail::raw("New Request:\n\nName: {$request->name}\nWhatsApp Number: {$request->number}\nEmail: {$request->email}\nCountry: {$request->country}\nDate: {$request->date}\nTour Category: {$request->category}", function ($message) {
            $message->to('kusalmarsh95@gmail.com')
                ->subject('New Tour Request');
        });

        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}
