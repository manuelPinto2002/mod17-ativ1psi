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

//normal
route::get('/livros', 'App\http\Controllers\LivrosController@index')->name('livros.index');

route::get('/autores', 'App\http\Controllers\AutoresController@index')->name('autores.index');

route::get('/editoras', 'App\http\Controllers\EditorasController@index')->name('editoras.index');

route::get('/generos', 'App\http\Controllers\GenerosController@index')->name('generos.index');

route::get('/livros/{id}/show', 'App\http\Controllers\LivrosController@show')->name('livros.show');

route::get('/generos/{id}/show', 'App\http\Controllers\GenerosController@show')->name('generos.show');

route::get('/editoras/{id}/show', 'App\http\Controllers\EditorasController@show')->name('editoras.show');

route::get('/autores/{id}/show', 'App\http\Controllers\AutoresController@show')->name('autores.show');


//Create
route::get('/livros/create', 'App\http\Controllers\LivrosController@create')->name('livros.create');

route::get('/generos/create', 'App\http\Controllers\GenerosController@create')->name('generos.create');

route::get('/editoras/create', 'App\http\Controllers\EditorasController@create')->name('editoras.create');

route::get('/autores/create', 'App\http\Controllers\AutoresController@create')->name('autores.create');


//Store
route::post('/livros', 'App\http\Controllers\LivrosController@store')->name('livros.store');

route::post('/generos', 'App\http\Controllers\GenerosController@store')->name('generos.store');

route::post('/editoras', 'App\http\Controllers\EditorasController@store')->name('editoras.store');

route::post('/autores', 'App\http\Controllers\AutoresController@store')->name('autores.store');


//Update & patch
route::get('/livros/{id}/edit', 'App\http\Controllers\LivrosController@edit')->name('livros.edit');

route::patch('/livros', 'App\http\Controllers\LivrosController@update')->name('livros.update');

route::get('/autores/{id}/edit', 'App\http\Controllers\AutoresController@edit')->name('autores.edit');

route::patch('/autores', 'App\http\Controllers\AutoresController@update')->name('autores.update');

