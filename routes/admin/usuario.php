<?php

Route::get('/','UserController@index')->name('admin.usuario.index');
Route::get('crear','UserController@create')->name('admin.usuario.crear');
Route::get('editar/{user}','UserController@edit')->name('admin.usuario.editar');

Route::post('crear','UserController@store')->name('admin.usuario.store');

Route::put('editar/{user}','UserController@update')->name('admin.usuario.editar');

Route::patch('papelera/{idUsuario}','UserController@trash')->name('admin.usuario.papelera');
Route::patch('restaurar/{idUsuario}','UserController@restore')->name('admin.usuario.restaurar');