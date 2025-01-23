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
        <div class="nav__logo"><a>BlazeGo</a></div>
        <ul class="nav__links">
            <li class="link"><a href="{{ route('home') }}">Home</a></li>
            <li class="link"><a href="{{ route('booking.form') }}">Booking</a> </li>
            <li class="link"><a href="{{route('booking.information') }}">Ticket</a></li>
            <li class="link"><a href="{{ route('logout') }}">Log Out</a></li>

            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo" />
        </ul>

    </nav>
    <header>
      <div class="section__container">
        <div class="header__content">
          <h1>Travel</h1>
          <p>
          Effortlessly order tickets online through our user-friendly platform, 
          choosing preferred dates and times, checking seat availability, 
          and securing the best deals with flexible payment options. Enjoy instant confirmations 
          and easily manage your bookings via our accessible account portal.
          </p>
          <button>Read more</button>
        </div>
      </div>
    </header>

    <section class="journey__container">
      <div class="section__container">
        <h2 class="section__title">Start Your Journey</h2>
        <p class="section__subtitle">The most searched place</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="{{ asset('assets/indonesiaa.jpeg') }}" alt="country" />
            <div class="country__name">
                <a href="{{ route('wisata_indonesia') }}">
                <i class="ri-map-pin-2-fill"></i>
                <span>Indonesia</span>
              </a>
            </div>
          </div>
          <div class="country__card">
            <img src="{{ asset('assets/greece.jpg') }}" alt="country" />
            <div class="country__name">
              <a href="{{ route('wisata_greece') }}">
                <i class="ri-map-pin-2-fill"></i>
                <span>Greece</span>
              </a>
            </div>
          </div>
          <div class="country__card">
            <img src="{{ asset('assets/italy.jpg') }}" alt="country" />
            <div class="country__name">
                <a href="{{ route('wisata_italy') }}">
                <i class="ri-map-pin-2-fill"></i>
                <span>Italy</span>
              </a>
            </div>
          </div>
          <div class="country__card">
            <img src="{{ asset('assets/usa.jpg') }}" alt="country" />
            <div class="country__name">
                <a href="{{ route('wisata_usa') }}">
                <i class="ri-map-pin-2-fill"></i>
                <span>USA</span>
              </a>
            </div>
          </div>
          <div class="country__card">
            <img src="{{ asset('assets/thailand.jpg') }}" alt="country" />
            <div class="country__name">
                <a href="{{ route('wisata_thailand') }}">
                <i class="ri-map-pin-2-fill"></i>
                <span>Thailand</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="banner__container">
      <div class="section__container">
        <div class="banner__content">
          <h2>Discount 10-30% Off</h2>
          <p>
            Travel the world on a budget with our unbeatable discounted travel
            deals. Whether you're looking for a last-minute escape or planning
            ahead, we've got you covered with incredible discounts on flights,
            hotels, and packages. Don't wait, book now and experience the
            adventure of a lifetime without breaking the bank.
          </p>
          <button>See Tours</button>
        </div>
      </div>
    </section>

    <section class="display__container">
      <div class="section__container">
        <h2 class="section__title">Why Choose Us</h2>
        <p class="section__subtitle">
          The gladdest moment in human life, is a departure into unknown lands.
        </p>
        <div class="display__grid">
          <div class="display__card grid-1">
            <img src="assets/grid3.jpeg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-earth-line"></i>
            <h4>Passionate Travel</h4>
            <p>Fuel your passion for adventure and discover new horizons</p>
          </div>
          <div class="display__card">
            <img src="assets/grid2.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <img src="assets/grid1.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-road-map-line"></i>
            <h4>Beautiful Places</h4>
            <p>Uncover the world's most breathtakingly beautiful places</p>
          </div>
        </div>
      </div>
    </section>

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
