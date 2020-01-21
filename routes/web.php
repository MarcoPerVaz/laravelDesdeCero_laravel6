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


Route::get('/test', function () {
    return "Hola mundo";
});

/* Ejemplo - Ruta con parámetros obligatorios */
Route::get('/hola/{nombre}', function ($nombre) {
    return "Hola mundo $nombre";
});

/* Ejemplo - Ruta con parámetros opcionales */
Route::get('/hola/{nombre?}', function ($nombre = "Juan") {
    return "Hola mundo $nombre";
});

/* Notas:
    *Si se tienen rutas iguales, el orden de lectura de laravel es de arriba hacía abajo, por lo que la ruta de abajo será
     la usada y mostrada por laravel
*/
