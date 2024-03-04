<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/houses', function () {
    return view('houses');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/clientRegister', function () {
    return view('clientRegister');
});


Route::post('/OwnersRegister', [UserController::class, 'OwnerRegister']);
Route::post('/clientsRegister', [UserController::class, 'ClientRegister']);
Route::post('/createHouse', [HouseController::class, 'createHouse']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/anonces', [HouseController::class, 'displayhouses']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/house/{id}', [HouseController::class, 'show'])->name('houses.show');
Route::post('/Reserve', [ReservationController::class, 'create'])->name('reservations.create');

Route::middleware(['auth'])->group(function () {
    Route::get('/houses', [HouseController::class, 'userHouse'])->name('houses.index');
});


Route::get('/reservation', [HouseController::class, 'showReservationsForUserHouses'])->name('houses.reservations');

Route::middleware(['auth'])->group(function () {
    Route::delete('/houses/{id}', [HouseController::class, 'destroy'])->name('houses.destroy');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/clientReservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::put('/update/reservation/{id}', [ReservationController::class, 'updateStatus'])->name('reservations.updateStatus');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/updateHouse/{id}', [HouseController::class, 'edit'])->name('houses.edit');
    Route::put('/update/{id}', [HouseController::class, 'update'])->name('houses.update');
    
});