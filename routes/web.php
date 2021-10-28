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

// Route::get('/', function () {
//     return view('bomberos');
// });
Route::get('/bomberos','App\Http\Controllers\BomberosController@bomberos')->name('bomberos');
Route::get('/','App\Http\Controllers\BomberosController@index');
Route::get('/registrar','App\Http\Controllers\BomberosController@registrar')->name('registrar');
Route::post('/add-bombero', 'App\Http\Controllers\BomberosController@addBombero')->name('add-bombero');
Route::get('/bombero/editar', 'App\Http\Controllers\BomberosController@editarBombero')->name('editar-bombero');
Route::post('/bombero/edit', 'App\Http\Controllers\BomberosController@editBombero')->name('edit-bombero');
Route::get('/bombero/delete', 'App\Http\Controllers\BomberosController@deleteBombero')->name('delete-bombero');

Route::get('/roles','App\Http\Controllers\BomberosController@roles')->name('roles');
Route::get('/add-rol','App\Http\Controllers\BomberosController@addRol')->name('add-rol');
Route::post('/registrar-rol', 'App\Http\Controllers\BomberosController@registrarRol')->name('registrar-rol');
Route::get('/rol/editar', 'App\Http\Controllers\BomberosController@editarRol')->name('editar-rol');
Route::post('/rol/edit', 'App\Http\Controllers\BomberosController@editRol')->name('edit-rol');
Route::get('/rol/delete', 'App\Http\Controllers\BomberosController@deleteRol')->name('delete-rol');
