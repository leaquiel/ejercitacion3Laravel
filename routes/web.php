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

Route::get('/', function () {
    return view('index');
});

Route::get('/actors', 'ActorsController@index');


Route::get('/movies', 'MoviesController@index');


Route::get('/movies/{id}', 'MoviesController@show');


Route::get('/actors/search', 'ActorsController@search');


Route::get('/actors/result', 'ActorsController@result');


// Route::get('/movies/create', 'MoviesController@index');
// // ruta q me manda al formulario para crear una
//
// Route::get('/movies/save', 'MoviesController@index');
// // ruta q manda por post lo q tengo en el formulario
//
// Route::get('/movies', 'MoviesController@index');
//
//
//
// Route::get('/movies/{id}', 'MoviesController@index');
// // para buscar por la variable id las peliculas
