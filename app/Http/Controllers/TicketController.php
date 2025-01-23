<?php

namespace App\Http\Controllers;

use App\Models\Booking; // Sesuaikan dengan nama model Anda
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function showTicketInformation()
    {
        $latestBooking = Booking::latest()->first(); // Ambil entri terakhir dari tabel Booking

        if ($latestBooking) {
            return view('ticket-information', ['latestBooking' => $latestBooking]);
        } else {
            return view('ticket-information', ['latestBooking' => null]);
        }
    }
}
