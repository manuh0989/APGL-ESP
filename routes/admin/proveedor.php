<?php

Route::get('/','ProveedorController@index')->name('admin.proveedor.index');
Route::get('crear','ProveedorController@create')->name('admin.proveedor.crear');
Route::get('editar/{user}','ProveedorController@edit')->name('admin.proveedor.editar');

Route::post('crear','ProveedorController@store')->name('admin.proveedor.store');

Route::put('editar/{user}','ProveedorController@update')->name('admin.proveedor.editar');

Route::patch('papelera/{idUsuario}','ProveedorController@trash')->name('admin.proveedor.papelera');
Route::patch('restaurar/{idUsuario}','ProveedorController@restore')->name('admin.proveedor.restaurar');