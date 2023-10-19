<?php

use App\Http\Controllers\controllerAuthGoogle;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;



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
    return view('principal');
});

// Authentication

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/login-google', [controllerAuthGoogle::class, 'index'])->name('login-google');

// Route::get('/google-callback', function () {
//     $user = Socialite::driver('google')->user();
//     dd($user);
//     // $user->token
// });