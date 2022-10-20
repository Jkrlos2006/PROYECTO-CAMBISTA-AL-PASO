<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ClientesController;
use App\Http\Controllers\v1\DivisasController;

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


//TABLA CLIENTES
Route::get('/v1/clientes', [ClientesController::class, 'getAll']);
Route::get('/v1/clientes/{id}', [ClientesController::class, 'getItem']);
Route::post('/v1/clientes', [ClientesController::class, 'store']);
Route::put('/v1/clientes/{id}', [ClientesController::class, 'update']);
Route::patch('/v1/clientes/{id}', [ClientesController::class, 'patchUpdate']);
Route::delete('/v1/clientes/{id}', [ClientesController::class, 'delete']);


//TABLA DIVISAS
Route::get('/v1/divisas', [DivisasController::class, 'getAll']);
Route::get('/v1/divisas/{id}', [DivisasController::class, 'getItem']);
Route::post('/v1/divisas', [DivisasController::class, 'store']);
Route::put('/v1/divisas/{id}', [DivisasController::class, 'update']);
Route::patch('/v1/divisas/{id}', [DivisasController::class, 'patchUpdate']);
Route::delete('/v1/divisas/{id}', [DivisasController::class, 'delete']);
