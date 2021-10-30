<?php

use Illuminate\Support\Facades\Route;

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

// BOMBEROS
Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrar','App\Http\Controllers\BomsController@registrar')->name('registrar');
Route::get('/bomberos/list', 'App\Http\Controllers\BomsController@list');
Route::post('/new-bom', 'App\Http\Controllers\BomsController@newBom')->name('new-bom');
Route::get('/bomberos/edit/{bombero}', 'App\Http\Controllers\BomsController@edit');

Route::get('/bomberos', 'App\Http\Controllers\BomsController@index');
Route::get('/bomberos/{bombero}', 'App\Http\Controllers\BomsController@show');
Route::post('/bomberos', 'App\Http\Controllers\BomsController@store');
Route::patch('/bomberos/{bombero}', 'App\Http\Controllers\BomsController@update');
Route::delete('/bomberos/{bombero}', 'App\Http\Controllers\BomsController@destroy');

//ROLES
Route::get('/add-rol', 'App\Http\Controllers\RolesController@addRol');
Route::get('/roles/list', 'App\Http\Controllers\RolesController@list');
Route::post('/new-rol', 'App\Http\Controllers\RolesController@newRol')->name('new-rol');
Route::get('/roles/edit/{rol}', 'App\Http\Controllers\RolesController@edit');

Route::get('/roles','App\Http\Controllers\RolesController@index');
Route::get('/bomberos/{bombero}', 'App\Http\Controllers\RolesController@show');
Route::post('/bomberos', 'App\Http\Controllers\RolesController@store');
Route::patch('/roles/{rol}', 'App\Http\Controllers\RolesController@update');
Route::delete('/roles/{rol}', 'App\Http\Controllers\RolesController@destroy');