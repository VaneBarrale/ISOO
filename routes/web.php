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
    return view('welcome');
});

Route::get('componentes/crear', 'ComponenteController@create');
Route::post('componentes/guardar', 'ComponenteController@store');
Route::get('/componentes','ComponenteController@index');

Route::get('mantenimientos/crear', 'MantenimientoController@create');
Route::post('mantenimientos/guardar', 'MantenimientoController@store');
Route::get('/mantenimientos','MantenimientoController@index');

Route::get('usuarios/crear', 'UsuarioController@create');
Route::post('usuarios/guardar', 'UsuarioController@store');
Route::get('/usuarios','UsuarioController@index');