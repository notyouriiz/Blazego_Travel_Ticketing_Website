<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\BookingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route Bookings
Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [BookingsController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingsController::class, 'store'])->name('bookings.store');
Route::get('/bookings/{booking}/edit', [BookingsController::class, 'edit'])->name('bookings.edit');
Route::put('/bookings/{booking}', [BookingsController::class, 'update'])->name('bookings.update');
Route::delete('/bookings/{booking}', [BookingsController::class, 'destroy'])->name('bookings.destroy');

//Route Tiket
Route::get('/tickets', [TiketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TiketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TiketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/{ticket}/edit', [TiketController::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/{ticket}', [TiketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}', [TiketController::class, 'destroy'])->name('tickets.destroy');

//Route User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/', function () {
    return view('login');
});

Route::get('/register',
[RegisterController::class, 'showRegistrationForm']
)->name('register');

Route::post('/register',
[RegisterController::class, 'register']);

Route::get('/login',
[AuthController::class,
'showLoginForm'])->name('login');

Route::post('/login',
[AuthController::class, 'login']);

Route::get('/home',
[HomeController::class, 'index'])->name('home');

Route::get('/admin',
[AdminController::class, 'index'])->name('admin');

Route::get('/wisata',
[WisataController::class, 'index'])->name('wisata');

Route::get('/wisata-italy', function () {
    return view('wisata_italy');
})->name('wisata_italy');

Route::get('/wisata-indonesia', function () {
    return view('wisata_indonesia');
})->name('wisata_indonesia');

Route::get('/wisata-greece', function () {
    return view('wisata_greece');
})->name('wisata_greece');

Route::get('/usa', function () {
    return view('wisata_usa');
})->name('wisata_usa');

Route::get('/thailand', function () {
    return view('wisata_thailand');
})->name('wisata_thailand');

Route::get('/booking',
[BookingController::class, 'showBookingForm']
)->name('booking.form');

Route::post('/booking/process',
[BookingController::class, 'processBooking']
)->name('booking.process');


Route::get('/booking/information',
[BookingController::class, 'showBookingInformation']
)->name('booking.information');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');







//Route::get('/wisata-italy',
//[WisataController::class, 'wisataItaly'])->name('wisata_italy');





