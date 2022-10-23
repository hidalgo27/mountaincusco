<?php

use App\Http\Controllers\API\FormpageController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('destinos', [FormpageController::class, 'destinos'])->name('api.destinos');
Route::get('categorias', [FormpageController::class, 'categorias'])->name('api.categorias');
