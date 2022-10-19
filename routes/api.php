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

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

// Kategori
Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class);

// Muzakki
Route::apiResource('/muzakki', App\Http\Controllers\Api\MuzakkiController::class);

// Pembayaran

Route::apiResource('/pembayaran', App\Http\Controllers\Api\PembayaranController::class);
