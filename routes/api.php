<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/users', App\Http\Controllers\Api\UserController::class);
Route::apiResource('/count', App\Http\Controllers\Api\CountController::class);
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::post('/forgot-password', App\Http\Controllers\Api\NewPasswordController::class);
Route::post('/reset-password',  App\Http\Controllers\Api\ResetPasswordController::class);
Route::middleware('basicAuth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class);
Route::apiResource('/pembayaran', App\Http\Controllers\Api\PembayaranController::class);
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::apiResource('/total', App\Http\Controllers\Api\TotalController::class);
