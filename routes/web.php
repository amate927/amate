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

Route::get('/', function () {
    return view('welcome');
});

//Tamu
Route::get('index', 'cobaController@index');
Route::get('tamu/view', 'cobaController@view');
Route::get('tamu/create', 'cobaController@show');
Route::post('tamu/simpan_create', 'cobaController@create');
Route::get('tamu/update/{id}', 'cobaController@edit');
Route::put('tamu/simpan_update/{id}', 'cobaController@update');
Route::get('tamu/delete/{id}', 'cobaController@delete');