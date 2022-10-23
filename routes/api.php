<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


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

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

// Kategori
Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class)->middleware('auth:sanctum');;

// Muzakki
Route::apiResource('/muzakki', App\Http\Controllers\Api\MuzakkiController::class)->middleware('auth:sanctum');

// Pembayaran

Route::apiResource('/pembayaran', App\Http\Controllers\Api\PembayaranController::class)->middleware('auth:sanctum');;

//Count
Route::apiResource('/count', App\Http\Controllers\Api\CountController::class);

// register
/**
 * route "/register"
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

/**
 * route "/login"
 * @method "POST"
 */
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');



