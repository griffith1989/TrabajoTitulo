<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function index(Request $request)
	{
		$userdata = array(
			'user' => $request->input('user'),
			'password' => $request->input('pass')
		);

		if (Auth::attempt($userdata))
		{
			if(Auth::user()->admin==false){
				return redirect('user');
			}
			else{
				$usuarios = User::all();
				return redirect('admin');
			}
		}
		else
		{
			return redirect()->guest('/');
		}
	}
}