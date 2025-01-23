<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h2>Edit Ticket</h2>

        <form action="{{ route('tickets.update', $ticket->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="origin" class="mb-2">Origin</label>
                <input type="text" name="origin" class="form-control" value="{{ $ticket->origin }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="destination" class="mb-2">Destination</label>
                <input type="text" name="destination" class="form-control" value="{{ $ticket->destination }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="class" class="mb-2">Class</label>
                <input type="text" name="class" class="form-control" value="{{ $ticket->class }}" required>
            </div>
            <div class="form-group">
                <label for="price" class="mb-2">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $ticket->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update Ticket</button>
        </form>
    </div>
</body>
</html>
