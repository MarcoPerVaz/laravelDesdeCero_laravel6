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
});




/* Ejemplo de Ruta para Controlador Resource (7 métodos en una sola ruta) */
Route::resource('dashboard/post', 'Dashboard\PostController');