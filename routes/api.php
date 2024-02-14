<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\RegisterController;
use App\Http\Controllers\API\v1\ScopesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1'], static function () {

    /* Rutas publicas */
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [RegisterController::class, 'login']);

    /* Rutas autenticadas */
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [RegisterController::class, 'logout']);

        /* Scopes */
        Route::get('scopes', [ScopesController::class, 'get'])->name('get.scopes');
        Route::post('scopes/create', [ScopesController::class, 'create'])->name('create.scopes');
        Route::put('scopes/update', [ScopesController::class, 'update'])->name('update.scopes');
    });
});
