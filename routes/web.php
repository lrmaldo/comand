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
Route::delete('home/destroy/{id}','HomeController@destroy');

Route::POST('home/store','HomeController@store');
Route::resource('carrusel',"CarruselController");
Route::POST('carrusel/store','CarruselController@store');
Route::delete('carrusel/destroy/{id}','CarruselController@destroy');

Route::resource('datos','DatosController');
//Route::PUT('datos/update/{id}','DatosController@update');
//Route::get('carrusel/create',"CarruselController@create")->name('carrusel/create');