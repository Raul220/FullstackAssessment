<?php

use \App\Articulo;
use \App\Cliente;
use \App\Calificaciones;

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

Route::resource('/tags', 'TagController');
Route::post('/tags/add', 'TagController@add');
Route::post('/tags/modify', 'TagController@modify');