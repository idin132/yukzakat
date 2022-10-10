<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MustahiqController;
use App\Http\Controllers\MuzakkiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\PembayaranController;

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
/* Home */

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('auth:sanctum');

/* Login */

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

/* Muzakki */

Route::get('update', [MuzakkiController::class, 'update'])->name('muzakki.')->middleware('auth:sanctum');
Route::resource('muzakki', MuzakkiController::class)->middleware('auth:sanctum');

Route::resource('muzakkip', MuzakkiController::class)->middleware('auth:sanctum');

/* Dashboard */

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth:sanctum');

/* Mustahiq */

Route::resource('mustahiqp', MustahiqController::class)->middleware('auth:sanctum');

Route::get('update', [MustahiqController::class, 'update'])->name('mustahiq.')->middleware('auth:sanctum');
Route::resource('mustahiq', MustahiqController::class)->middleware('auth:sanctum');

// zakat

Route::get('update', [ZakatController::class], 'update')->name('zakat.')->middleware('auth:sanctum');
Route::resource('zakatp', ZakatController::class)->middleware('auth:sanctum');

// Pembayaran

Route::resource('pembayaranp', PembayaranController::class)->middleware('auth:sanctum');