<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === 'Admin123') {
        // Buat data user
        $user = new User();
        $user->username = $username;

        // Login user
        Auth::login($user);

        return redirect()->route('admin'); //  halaman admin.blade.php
    }


    // Find the user by username
    $user = User::where('username', $username)->first();

    // Check if a matching user was found
    if ($user) {
        // Now compare the password using Hash::check
        if (Hash::check($password, $user->password)) {
            // Password is correct, log in the user
            Auth::login($user);

            return redirect()->route('home'); // Redirect to the home page or any other route
        }
    }

    // No matching user found or incorrect password
    return redirect()->route('login')->with('error', 'Invalid username or password');
    }



}
