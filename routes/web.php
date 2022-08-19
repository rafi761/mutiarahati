<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardPendaftarController;
use App\Http\Controllers\PendaftarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'index']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Route::resource('/pendaftaran/create', PendaftarController::class)->middleware('guest');
// Route::post('/pendaftaran/create', PendaftarController::class, 'store');
Route::get('/pendaftaran/create', [PendaftarController::class, 'index'])->middleware('guest');
Route::post('/pendaftaran/create', [PendaftarController::class, 'store']);

Route::resource('/dashboard/pendaftar', DashboardPendaftarController::class)->middleware('auth');
Route::resource('/dashboard/users', DashboardUserController::class)->middleware('auth');
