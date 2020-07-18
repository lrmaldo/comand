<?php

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



Route::get('/','InicioController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home','HomeController');

Route::resource('carrusel',"CarruselController");

Route::resource('datos','DatosController');
//Route::get('carrusel/create',"CarruselController@create")->name('carrusel/create');