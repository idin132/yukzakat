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

Route::get('/', function () {
    return view('welcome');
});

/* Login */

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('index');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

/* Muzakki */

Route::get('update', [MuzakkiController::class, 'update'])->name('muzakki.');
Route::resource('muzakki', MuzakkiController::class)->middleware('auth:sanctum');

Route::resource('muzakkip', MuzakkiController::class);

/* Dashboard */

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

/* Mustahiq */

Route::resource('mustahiqp', MustahiqController::class);

Route::get('update', [MustahiqController::class, 'update'])->name('mustahiq.');
Route::resource('mustahiq', MustahiqController::class)->middleware('auth:sanctum');

// zakat

Route::resource('zakatp', ZakatController::class);

// Pembayaran

Route::resource('pembayaranp', PembayaranController::class);