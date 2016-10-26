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

Route::get('/rubros/crear', 'RubroController@create');
Route::post('/rubros/guardar', 'RubroController@store');
Route::get('/rubros','RubroController@index');