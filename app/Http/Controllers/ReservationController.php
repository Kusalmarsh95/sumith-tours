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
        $reservations = Reservation::paginate(10);
        return view('reservations.index', compact('reservations'));
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

        Mail::to(['tourssumith@gmail.com', 'weerasinghebandara88@gmail.com'])->send(new ReservationMail($reservation));

        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'number' => 'required|max:20',
            'email' => 'required|email|max:100',
            'date' => 'required|date',
            'category' => 'required|string|max:50',
            'country' => 'required|string|max:100',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->back()->with('success', 'Reservation updated successfully!');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->back()->with('success', 'Reservation deleted successfully!');
    }
}
