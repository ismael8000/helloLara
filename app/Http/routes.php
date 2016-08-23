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

Route::get('/', 'ContatoController@lista');
Route::get('/contato', 'ContatoController@index');
Route::post('/enviar', 'ContatoController@enviar');
// Route::get('/lista', 'ContatoController@lista');
Route::get('/lista', ['middleware' => 'auth', 'uses' => 'ContatoController@lista']);


//Rotas para pagina de login

Route::get('auth/login', ['as' => 'auth.form', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);
