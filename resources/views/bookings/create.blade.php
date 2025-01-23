<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add User</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <h2>Add Booking</h2>

        <form action="{{ route('bookings.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" name="origin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" name="departure_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="passenger_count">Passenger Count</label>
                <input type="number" name="passenger_count" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="flight_class">Flight Class</label>
                <input type="text" name="flight_class" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" name="total_harga" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Booking</button>
        </form>
    </div>
</body>
</html>
