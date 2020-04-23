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
    return view('welcome');
})->name('index');


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')
->middleware(['auth','verified'])
->name('home');


Route::middleware(['auth','verified'])->prefix('admin')->group(function(){
	Route::get('/','AdminController@index')->name('admin.index');

	Route::get('usuario/','UserController@index')->name('admin.usuario.index');
	Route::get('usuario/crear','UserController@create')->name('admin.usuario.crear');
	Route::get('usuario/editar/{user}','UserController@edit')->name('admin.usuario.editar');
	

	Route::post('usuario/crear','UserController@store')->name('admin.usuario.store');
	
	Route::put('usuario/editar/{user}','UserController@update')->name('admin.usuario.editar');

	Route::patch('usuario/papelera/{idUsuario}','UserController@trash')
	->name('admin.usuario.papelera');

	Route::patch('usuario/restaurar/{idUsuario}','UserController@restore')
	->name('admin.usuario.restaurar');

});
