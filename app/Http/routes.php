<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//

//

Route::get('/','InicioController@index');
Route::get('/home','UsuariosController@home');
Route::get('/dashboard','UsuariosController@dashboard');
Route::resource('usuarios','UsuariosController');
Route::resource('establecimientos','EstablecimientosController');
Route::resource('publicaciones','PublicacionController');
Route::resource('tipoEstablecimiento','TipoEstablecimientoController');

//Rutas de autenticacion

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Rutas del WEBService

//Usuario
Route::group(array('prefix' => 'api','middleware' => 'cors'), function()
{
  Route::get('usuario',         'api\UsuariosController@listAll');
  Route::get('usuario/{id}',    'api\UsuariosController@listOne');
  Route::put('usuario/{id}',    'api\UsuariosController@update');
});

//Sitio
Route::group(array('prefix' => 'api','middleware' => 'cors'), function()
{
  Route::get('establecimientos',         'api\EstablecimientosController@listAll');
  Route::get('establecimientos/{id}',    'api\EstablecimientosController@listOne');
  Route::post('establecimientos',        'api\EstablecimientosController@create');
  Route::put('establecimientos/{id}',    'api\EstablecimientosController@update');
  Route::delete('establecimientos/{id}', 'api\EstablecimientosController@delete');
});

//Comentario
Route::group(array('prefix' => 'api','middleware' => 'cors'), function()
{
  Route::get('publicaciones/{SiteId}',         'api\PublicacionesController@listAll');
  Route::get('publicaciones/{SiteId}/{id}',    'api\PublicacionesController@listOne');
  Route::post('publicaciones/{SiteId}',        'api\PublicacionesController@create');
  Route::put('publicaciones/{SiteId}/{id}',    'api\PublicacionesController@update');
  Route::delete('publicaciones/{SiteId}/{id}', 'api\PublicacionesController@delete');
});
