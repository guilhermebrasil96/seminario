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
Route::get('/','App\Http\Controllers\BomberosController@index');
Route::get('/registrar','App\Http\Controllers\BomberosController@registrar')->name('registrar');