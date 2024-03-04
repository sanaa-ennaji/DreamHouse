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

Route::get('/home' , function (){
    return view('home');
});

Route::get('/register' , function (){
    return view('register');
});

Route::get('/houses' , function (){
    return view('houses');
});

Route::get('/login' , function (){
    return view('login');
});
Route::get('/anonces' , function (){
    return view('anonces');
});
// Route::get('/houses/{id}' , function (){
//     return view('/h');
// });


    Route::post('/OwnersRegister', [UserController::class, 'OwnerRegister']);
    Route::post('/createHouse', [HouseController::class, 'createHouse']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/anonces', [HouseController::class, 'display'])->name('houses.display');

    Route::get('/house/{id}', [HouseController::class, 'show'])->name('houses.show');
    Route::post('/Reserve', [ReservationController::class, 'create'])->name('reservations.create');

