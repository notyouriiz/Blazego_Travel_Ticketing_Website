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
    <header>
      <div class="section__container">
        <div class="header__content">
          <h1>Welcome Admin!</h1>
          <p>
            Embark on a journey of a lifetime and explore the world's most
            breathtaking destinations with our expert travel advice. From exotic
            beaches to cultural wonders, we've got you covered with our
            comprehensive travel guides and insider tips.
          </p>
        </div>
      </div>
    </header>

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
