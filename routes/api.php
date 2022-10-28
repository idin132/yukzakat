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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('/user', App\Http\Controllers\Api\UserController::class);
Route::apiResource('/count', App\Http\Controllers\Api\CountController::class);
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::apiResource('/profile', App\Http\Controllers\Api\CpwController::class)->middleware('basicAuth');
Route::post('/cpw', 'App\Http\Controllers\Api\CpwController@changePassword')->middleware('basicAuth');
Route::middleware('basicAuth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

    Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class);
    Route::apiResource('/pembayaran', App\Http\Controllers\Api\PembayaranController::class);
    Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);


    // Route::controller(CpwController::class)->group(function () {
    //     Route::get('/profile', 'index')->name('cpw');
    //     Route::post('/cpw', 'changePassword')->name('cpw.reset-password');
    // });
    