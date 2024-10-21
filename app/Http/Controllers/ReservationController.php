<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }
    public function create()
    {
        return view('pages.reservation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'number' => 'required|max:20',
            'email' => 'required|email|max:100',
            'date' => 'required',
            'category' => 'required',
            'country' => 'required',
        ]);
        $reservation = Reservation::create($request->all());

        Mail::to('kusalmarsh95@gmail.com')->send(new ReservationMail($reservation));

        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}
