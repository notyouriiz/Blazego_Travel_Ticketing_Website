<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="curved-shape"></div>
        <div class="form-box Login">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class ="input-box">
                    <label for="username">Username </label>
                    <input type="text" name="username" id="username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class ="input-box">
                    <label for="password">Password </label>
                    <input type="password" name="password" id="password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="input-box">
                    <button class="btn" type="submit">Log In</button>
                </div>
                <div class="regi-link">
                    <p>Don't have an account ? <a href="{{ route('register') }}">Sign Up</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="info-content Login">
            <h2>WELCOME TO BLAZEGO </h2><br>
            <P>
                Start your journey with BLAZEGO
            </P>
        </div>
    </div>
</body>
</html>

