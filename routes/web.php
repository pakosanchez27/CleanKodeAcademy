<?php

use App\Http\Controllers\pagosPDF;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\controllerAuthGoogle;
use App\Http\Controllers\NuevoCursoController;
use App\Http\Controllers\PostMasterController;
use App\Http\Controllers\CrearClasesController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\CrearCapituloController;
use App\Http\Controllers\loginCodeMasterController;
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

// Vista de nuevo curso

Route::get('/CodeMaster/newCurso', [NuevoCursoController::class, 'index'])->name('newCurso.index');


// configuracion de Cleankoders

Route::get('/Cleankoders/config', [ConfiguracionController::class, 'index'])->name('config.index');

// Formulario para crear un curso

Route::post('/CodeMaster/newCurso', [NuevoCursoController::class, 'store'])->name('newCurso.store');
Route::put('/curso/{idCurso}', [NuevoCursoController::class, 'update'])->name('newCurso.update');



Route::get('/CodeMaster/clases', [CrearClasesController::class, 'index'])->name('clases.index');

Route::post('/CodeMaster/clases', [CrearClasesController::class, 'store'])->name('clases.store');



// PDFS

Route::get('/CodeMaster/PdfController', [PdfController::class, 'index'])->name('pagosPDF.index');


// Crar Capitulo
Route::post('/CodeMaster/clases', [CrearCapituloController::class, 'store'])->name('crearCapitulo.store');
Route::put('/crearCapitulo/{idCapitulo}',[CrearCapituloController::class, 'update'])->name('crearCapitulo.update');

Route::post('/CodeMaster/clases/crear', [CrearClasesController::class, 'store'])->name('crearClase.store');

