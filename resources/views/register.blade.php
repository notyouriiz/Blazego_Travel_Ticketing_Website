<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Register</title>
</head>
<body>
    <h1>Sign Up To BLAZEGO </h1>
    <div class="form-container">

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class ="input-box">
                <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            </div>
            <div class ="input-box">
                <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            </div>
            <div class ="input-box">
                <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            </div>
            <div class ="input-box">
                <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            </div>
            <div class ="input-box">
                <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <div class="input-box">
                <button class="btn" type="submit"><a href="{{ route('login') }}">Register</button>
            </div>
        </form>
        <div class="regi-link">
            <p>Already Registered? <a href="{{ route('login') }}">Login</a></p>
        </div>

    </div>

</body>
</html>
