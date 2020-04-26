<?php

Route::get('/','ClienteController@index')->name('admin.cliente.index');
Route::get('crear','ClienteController@create')->name('admin.cliente.crear');
Route::get('editar/{user}','ClienteController@edit')->name('admin.cliente.editar');

Route::post('crear','ClienteController@store')->name('admin.cliente.store');

Route::put('editar/{user}','ClienteController@update')->name('admin.cliente.editar');

Route::patch('papelera/{idUsuario}','ClienteController@trash')->name('admin.cliente.papelera');
Route::patch('restaurar/{idUsuario}','ClienteController@restore')->name('admin.cliente.restaurar');