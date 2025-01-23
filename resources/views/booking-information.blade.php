<!-- booking-information.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>Booking Information</title>
</head>
<body>
    <div class="ticket-info" style="width: 500px">
    <h2>Booking Information</h2><br>

    @if($bookings->isEmpty())
        <p>No booking information available.</p>
        <a href="{{ route('booking.form') }}">Booking</a>
    @else
        <p>Booking Details:</p>
            @foreach($bookings as $booking)
            <p>Origin: {{ $booking->origin }}</p>
            <p>Destination: {{ $booking->destination }}</p>
            <p>Departure Date: {{ $booking->departure_date }}</p>
            <p>Passenger Count: {{ $booking->passenger_count}}</p>
            <p>Flight Class: {{ $booking->flight_class }}</p>
            <p>Total Harga: {{ $booking->total_harga }}</p>
            <hr>
            @endforeach
        <a href="{{ route('booking.form') }}">Make Another Booking</a>
        <a href="{{ route('home') }}">Back to Home</a>
    @endif
    </div>

</body>
</html>
