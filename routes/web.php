<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return "<h1>Hola</h1>";
});
<<<<<<< HEAD

Route::get('/rubros/crear', 'RubroController@create');
Route::post('/rubros/guardar', 'RubroController@store');
Route::get('/rubros','RubroController@index');
Route::get('/rubros/{id}/editar','RubroController@edit');
Route::post('/rubros/actualizar','RubroController@update');
Route::get('/rubros/{id}/eliminar','RubroController@destroy');
=======
Route::get('/bienes/crear','BienesController@create');
Route::post('/bienes/guardar','BienesController@store');
Route::get('/bienes','BienesController@index');

>>>>>>> master
