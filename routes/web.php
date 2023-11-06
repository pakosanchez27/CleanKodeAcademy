<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\controllerAuthGoogle;
use App\Http\Controllers\loginCodeMasterController;
use App\Http\Controllers\PostMasterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Login y homepaCleanKoders 

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store']);

// Login de codemaster
Route::get('/login-codemaster', [loginCodeMasterController::class, 'index'])->name('login-codemaster');
Route::post('/login-codemaster', [loginCodeMasterController::class, 'store']);


// Formulario de registro de Cleankoders

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [logoutController::class, 'logout'])->name('logout');


// Login con google
Route::get('/login-google', [AuthController::class, 'redirectToProvider'])->name('login-google');
Route::get('/google-callback', [AuthController::class, 'handleProviderCallback']);

// Dashboard de Cleankoders
Route::get('/CleanKoders/dashboard', [PostController::class, 'index'])->name('posts.index');

// Dashboard de CodeMaster

Route::get('/CodeMaster/dashboard', [PostMasterController::class, 'index'])->name('Master.index');