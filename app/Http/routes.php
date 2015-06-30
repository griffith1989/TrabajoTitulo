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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('admin', 'AdminIndexController@index');
Route::get('adminUsers', 'AdminIndexController@users');
Route::get('adminNews', 'AdminIndexController@news');
Route::post('/agregar', 'AdminIndexController@addNews');
Route::post('/crear', 'AdminIndexController@addUser');
Route::post('/eliminar', 'AdminIndexController@deleteUser');
Route::post('/modificar/{id}', 'AdminIndexController@updateUser');

Route::get('user', 'UserIndexController@index');
Route::post('/userModificar/{id}', 'UserIndexController@updateUser');

Route::post('login', 'AuthenticateController@index');

Route::get('logout',function()
{
	Auth::logout();
	return redirect('/');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
