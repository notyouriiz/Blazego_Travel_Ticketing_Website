<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HargaTiket;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
     protected $fillable = [
         'origin',
         'destination',
         'departure_date',
         'passenger_count',
         'flight_class',
         'total_harga'
     ];

     public function calculateTotalHarga()
    {
        $hargaTiket = HargaTiket::where('origin', $this->origin)
            ->where('destination', $this->destination)
            ->where('class', $this->flight_class)
            ->first();

        if ($hargaTiket) {
            $this->total_harga = $this->passenger_count * $hargaTiket->price;
            $this->save();
        }

    }


    // public static function showBookingInformation($id)
    // {
    //     return self::findOrFail($id);
    // }

    public function showBookingInformation()
    {
        $latestBooking = Booking::latest()->first();
        return view('booking-information', compact('latestBooking'));
    }

}

