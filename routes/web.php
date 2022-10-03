<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MustahiqController;
use App\Http\Controllers\ZakatController;

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

Route::get('update', [ZakatController::class, 'update'])->name('muzakki.');
Route::resource('muzakki', ZakatController::class)->middleware('auth:sanctum');

Route::resource('muzakkip', ZakatController::class);

/* Dashboard */

Route::get('dashboard', [ZakatController::class, 'dashboard'])->name('dashboard');

/* Mustahiq */

Route::resource('mustahiqp', MustahiqController::class);

Route::get('update', [MustahiqController::class, 'update'])->name('mustahiq.');
Route::resource('mustahiq', MustahiqController::class)->middleware('auth:sanctum');