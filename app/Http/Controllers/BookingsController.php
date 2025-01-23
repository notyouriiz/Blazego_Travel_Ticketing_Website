<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'departure_date' => 'required|date',
            'passenger_count' => 'required|integer|min:1',
            'flight_class' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        Booking::create([
            'origin' => $request->origin,
            'destination' => $request->destination,
            'departure_date' => $request->departure_date,
            'passenger_count' => $request->passenger_count,
            'flight_class' => $request->flight_class,
            'total_harga' => $request->total_harga,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'departure_date' => 'required|date',
            'passenger_count' => 'required|integer|min:1',
            'flight_class' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        $booking->update([
            'origin' => $request->origin,
            'destination' => $request->destination,
            'departure_date' => $request->departure_date,
            'passenger_count' => $request->passenger_count,
            'flight_class' => $request->flight_class,
            'total_harga' => $request->total_harga,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}

