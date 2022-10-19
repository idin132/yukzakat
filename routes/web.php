<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MustahiqController;
use App\Http\Controllers\MuzakkiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PenerimaanController;

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

/* Login */

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

/* Muzakki */

Route::get('update', [MuzakkiController::class, 'update'])->name('muzakki.')->middleware('auth:sanctum');
Route::resource('muzakki', MuzakkiController::class)->middleware('auth:sanctum');

/* Dashboard */

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth:sanctum');

/* Mustahiq */

Route::resource('mustahiq', MustahiqController::class)->middleware('auth:sanctum');

Route::get('update', [MustahiqController::class, 'update'])->name('mustahiq.')->middleware('auth:sanctum');
Route::resource('mustahiq', MustahiqController::class)->middleware('auth:sanctum');

// zakat

Route::get('update', [ZakatController::class], 'update')->name('zakat.')->middleware('auth:sanctum');
Route::resource('zakat', ZakatController::class)->middleware('auth:sanctum');

// Pembayaran

Route::resource('pembayaran', PembayaranController::class)->middleware('auth:sanctum');

// penerimaan

Route::resource('penerimaan', PenerimaanController::class)->middleware('auth:sanctum');
