<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
          rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <title>BlazeGo</title>
      </head>
<body>
    <nav>
        <div class="nav__logo"><a href="{{ route('home') }}">BlazeGo</a></div>
        <ul class="nav__links">
            <li class="link"><a href="{{ route('admin') }}">Home</a></li>
            <li class="link"><a href="{{ url('/bookings') }}">Booking</a> </li>
            <li class="link"><a href="{{ url('/tickets') }}">Ticket</a></li>
            <li class="link"><a href="{{ url('/user') }}">User</a></li>
            <li class="link"><a href="{{ route('logout') }}">Log Out</a></li>

            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo" />
        </ul>

    </nav>
    <div class="section__container mt-5 mb-5">
        <div class="container">
            <h2 class="mt-5 mb-5">User List</h2>
            <a href="{{ route('user.create') }}" class="btn btn-success mb-3">Add User</a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="section__container">
          <h4>BlazeGo</h4>
          <div class="social__icons">
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-twitter-fill"></i></span>
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-linkedin-fill"></i></span>
          </div>
          <p>
            Travel makes one modest. You see what a tiny place you occupy in the
            world.
          </p>
        </div>
      </footer>

</body>
</html>
