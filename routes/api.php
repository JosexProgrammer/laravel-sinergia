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

// Route::middleware('auth:api')->prefix('usuario')->group(function () {
//     Route::get('/',[ App\Http\Controllers\API\SinergiaController::class, 'getProfile']);
//     Route::post('/logout',[ App\Http\Controllers\API\SinergiaController::class, 'logout']);
// });


Route::get('/proyectos',[ App\Http\Controllers\API\SinergiaController::class, 'getAllProyects']);