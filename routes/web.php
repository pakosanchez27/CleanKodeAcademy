<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\controllerAuthGoogle;



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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/login-google', [AuthController::class, 'redirectToProvider'])->name('login-google');
Route::get('/google-callback', [AuthController::class, 'handleProviderCallback']);


Route::get('/CleanKoders/dashboard', [PostController::class, 'index'])->name('posts.index');
