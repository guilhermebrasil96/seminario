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

Route::get('/usuario','App\Http\Controllers\CruduserController@index');//api para leer todos los usuarios
Route::post('/usuario','App\Http\Controllers\CruduserController@store');//api para guardar un nuevo usuario
Route::put('/usuario/{id}','App\Http\Controllers\CruduserController@update');//api para actualizar u n u
Route::delete('/usuario/{id}','App\Http\Controllers\CruduserController@destroy');// --- eliminar

