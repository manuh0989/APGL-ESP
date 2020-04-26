<?php

Route::get('/','CategoriaController@index')->name('admin.categoria.index');
Route::get('crear','CategoriaController@create')->name('admin.categoria.crear');
Route::get('editar/{user}','CategoriaController@edit')->name('admin.categoria.editar');

Route::post('crear','CategoriaController@store')->name('admin.categoria.store');

Route::put('editar/{user}','CategoriaController@update')->name('admin.categoria.editar');

Route::patch('papelera/{idUsuario}','CategoriaController@trash')->name('admin.categoria.papelera');
Route::patch('restaurar/{idUsuario}','CategoriaController@restore')->name('admin.categoria.restaurar');