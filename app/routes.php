<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){

	return Redirect::to('home');
});

Route::get('regreso', function(){

	$usuarios = User::all();

	return View::make('home/adminIndex')->with('usuarios', $usuarios);
});

Route::get('logout',function()
{
	Auth::logout();
	return Redirect::to('/');
});

Route::controller('home', 'HomeController');

Route::post('login', 'HomeController@userPost');

Route::controller('intra', 'UserIndexController');

Route::controller('admin', 'AdminIndexController');

Route::post('/crear', 'AdminIndexController@addUser');

Route::post('/eliminar', 'AdminIndexController@deleteUser');

Route::post('/agregar', 'AdminIndexController@addNews');
