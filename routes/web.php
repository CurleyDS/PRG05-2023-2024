<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
});

Auth::routes();

Route::middleware('auth')->group(function () {
	Route::get('/home', [PostController::class, 'index']);

    Route::prefix('chirp')->group(function () {
        Route::get('/', [PostController::class, 'create']);
        Route::post('/', [PostController::class, 'store']);

        Route::get('/{id}', [PostController::class, 'show']);

        Route::get('/{id}/edit', [PostController::class, 'edit']);
        Route::post('/{id}/edit', [PostController::class, 'update']);

        Route::get('/{id}/delete', [PostController::class, 'delete']);
        Route::post('/{id}/delete', [PostController::class, 'destroy']);
    });

    Route::get('/logout', [UserController::class, 'logout']);

    Route::prefix('{user}')->group(function () {
        Route::get('/', [UserController::class, 'index']);
    });
});
