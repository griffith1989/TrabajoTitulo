<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getIndex(){

		$consulta = 'SELECT * FROM `noticias` order by updated_at desc limit 5';

		$noticias = DB::select($consulta);

		return View::make('home.index')->with('noticias', $noticias);
	}

	public function userPost()
	{
		$userdata = array(
			'user' => Input::get('user'),
			'password' => Input::get('pass')
		);

		if (Auth::attempt($userdata, true))
		{
			if(Auth::user()->admin==false){
				return Redirect::to('intra');
			}
			else{
				$usuarios = User::all();
				return View::make('home.adminIndex')->with('usuarios', $usuarios);
			}
		}
		else
		{
			return Redirect::to('/')->with('login_errors', true);
		}
	}

}
