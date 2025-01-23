<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Form</title>
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>

    <div class="booking-form">
        <h2>Booking Form</h2>
        <form action="{{ route('booking.process') }}" method="POST">
            @csrf
        <label for="origin">From:</label>
        <select name="origin" id="origin" required>
        <option value="australia">Australia</option>
        <option value="Belgia">Belgia</option>
        <option value="canada">Canada</option>
        <option value="denmark">Denmark</option>
        <option value="indonesia">Indonesia</option>
        <option value="france">France</option>
        <option value="germany">Germany</option>
      </select><br><br>

      <label for="destination">To:</label>
      <select name="destination" id="destination" required>
        <option value="indonesia">Indonesia</option>
        <option value="Belgia">Belgia</option>
        <option value="canada">Canada</option>
        <option value="denmark">Denmark</option>
        <option value="estonia">Estonia</option>
        <option value="france">France</option>
        <option value="germany">Germany</option>
      </select><br><br>

      <label for="departure_date">Departure Date:</label>
      <input type="date" id="departure_date" name="departure_date" required><br><br>


      <label for="passenger-count">Passenger Count:</label>
      <input type="number" id="passenger_count" name="passenger_count" min="1" max="100" required><br><br>

      <label for="flight_class">Flight Class:</label>
      <select name="flight_class" id="flight_class" required>
        <option value="economy">Economy</option>
        <option value="business">Business</option>
      </select><br><br>
      <input type="submit" value="Book Now">
    </form>
    <a href="{{ route('booking.information') }}">Ticket</a>
    <a href="{{ route('home') }}">Back to Home</a>
  </div>
</body>
</html>
