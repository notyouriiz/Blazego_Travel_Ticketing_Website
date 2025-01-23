<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add User</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h2>Add Ticket</h2>

        <form action="{{ route('tickets.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="origin" class="mb-2">Origin</label>
                <input type="text" name="origin" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="destination" class="mb-2">Destination</label>
                <input type="text" name="destination" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="class" class="mb-2">Class</label>
                <input type="text" name="class" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price" class="mb-2">Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mt-5">Add Ticket</button>
        </form>
    </div>
</body>
</html>
