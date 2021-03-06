<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

	admin/usuario=> routes/adminUsuarios.php
	admin/proveedor=>routes/adminProveedor.php
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes(['verify'=>true]);