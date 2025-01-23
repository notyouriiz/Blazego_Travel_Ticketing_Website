<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function showBookingForm()
    {
        return view('booking');
    }

    public function processBooking(Request $request)
    {
        // Lakukan validasi data yang diterima dari form
        $validatedData = $request->validate([
            // 'id',
            'origin' => 'required',
            'destination' => 'required',
            'departure_date' => 'required|date', // Ganti departure-date menjadi departure_date
            'passenger_count' => 'required|integer|min:1|max:20',
            'flight_class' => 'required',
            'total_harga'=>'integer',
        ]);


        $booking = Booking::create($validatedData);

    // Hitung total harga dan simpan ke dalam database
        $booking->calculateTotalHarga();

        // Redirect ke halaman terkait atau tampilkan pesan berhasil
        return redirect()->route('booking.information')->with('success', 'Booking successful!');

    }
    public function showBookingInformation()
    {
        $bookings = Booking::all();
        return view('booking-information', compact('bookings'));
    }

}
