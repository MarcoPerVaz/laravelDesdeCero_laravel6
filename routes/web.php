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
    /* Link sin Rutas con nombre */
        // return "Hola $nombre conocenos: <a href='/nosotros'>Nosotros</a>";
    /* Link con Rutas con nombre */
        return "Hola $nombre conocenos: <a href='". route('nosotros') . "'>Nosotros</a>";
});

/* Ejemplo - Ruta con nombre */
Route::get('/sobre-nosotros', function () {
    return "<h1>Toda la información sobre nosotros!</h1>";
})->name("nosotros");

/* Notas:
    *Si se tienen rutas iguales, el orden de lectura de laravel es de arriba hacía abajo, por lo que la ruta de abajo será
     la usada y mostrada por laravel
    *Las rutas con nombre nos permite cambiar la url sin necesidad de cambiar el href de todos los enlaces del HTML 
     sea uno o mil
        *Se usa el helper route('nameRoute') de laravel
*/
