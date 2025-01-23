<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <h2>Edit Booking</h2>

        <form action="{{ route('bookings.update', $booking->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" name="origin" class="form-control" value="{{ $booking->origin }}" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" class="form-control" value="{{ $booking->destination }}" required>
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" name="departure_date" class="form-control" value="{{ $booking->departure_date }}" required>
            </div>
            <div class="form-group">
                <label for="passenger_count">Passenger Count</label>
                <input type="number" name="passenger_count" class="form-control" value="{{ $booking->passenger_count }}" required>
            </div>
            <div class="form-group">
                <label for="flight_class">Flight Class</label>
                <input type="text" name="flight_class" class="form-control" value="{{ $booking->flight_class }}" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" name="total_harga" class="form-control" value="{{ $booking->total_harga }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Booking</button>
        </form>
    </div>
</body>
</html>
