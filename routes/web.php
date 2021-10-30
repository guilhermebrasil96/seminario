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


// Route::get('/bomberos','App\Http\Controllers\BomberosController@bomberos')->name('bomberos');
// Route::get('/','App\Http\Controllers\BomberosController@index');
// Route::get('/registrar','App\Http\Controllers\BomberosController@registrar')->name('registrar');
// Route::post('/add-bombero', 'App\Http\Controllers\BomberosController@addBombero')->name('add-bombero');
// Route::get('/bombero/editar', 'App\Http\Controllers\BomberosController@editarBombero')->name('editar-bombero');
// Route::post('/bombero/edit', 'App\Http\Controllers\BomberosController@editBombero')->name('edit-bombero');
// Route::get('/bombero/delete', 'App\Http\Controllers\BomberosController@deleteBombero')->name('delete-bombero');

// Route::get('/roles','App\Http\Controllers\BomberosController@roles')->name('roles');
// Route::get('/add-rol','App\Http\Controllers\BomberosController@addRol')->name('add-rol');
// Route::post('/registrar-rol', 'App\Http\Controllers\BomberosController@registrarRol')->name('registrar-rol');
// Route::get('/rol/editar', 'App\Http\Controllers\BomberosController@editarRol')->name('editar-rol');
// Route::post('/rol/edit', 'App\Http\Controllers\BomberosController@editRol')->name('edit-rol');
// Route::get('/rol/delete', 'App\Http\Controllers\BomberosController@deleteRol')->name('delete-rol');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrar','App\Http\Controllers\BomberosController@registrar')->name('registrar');
Route::get('/bomberos/list', 'App\Http\Controllers\BomsController@list');
Route::post('/new-bom', 'App\Http\Controllers\BomsController@newBom')->name('new-bom');
Route::get('/bomberos/edit/{bombero}', 'App\Http\Controllers\BomsController@edit');

Route::get('/bomberos', 'App\Http\Controllers\BomsController@index');
Route::get('/bomberos/{bombero}', 'App\Http\Controllers\BomsController@show');
Route::post('/bomberos', 'App\Http\Controllers\BomsController@store');
Route::patch('/bomberos/{bombero}', 'App\Http\Controllers\BomsController@update');
Route::delete('/bomberos/{bombero}', 'App\Http\Controllers\BomsController@destroy');


Route::get('/roles','App\Http\Controllers\BomberosController@roles')->name('roles');
Route::post('/registrar-rol', 'App\Http\Controllers\BomberosController@registrarRol')->name('registrar-rol');
Route::get('/rol/editar', 'App\Http\Controllers\BomberosController@editarRol')->name('editar-rol');
Route::post('/rol/edit', 'App\Http\Controllers\BomberosController@editRol')->name('edit-rol');
Route::get('/rol/delete', 'App\Http\Controllers\BomberosController@deleteRol')->name('delete-rol');
