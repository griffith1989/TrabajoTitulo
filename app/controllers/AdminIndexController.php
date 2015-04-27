<?php

class AdminIndexController extends BaseController
{
	public function __construct()
	{
		$this->beforefilter('auth');
	}

	public function getIndex()
	{
		return View::make('home.adminIndex');
	}

	public function addUser(){

		$inputs = Input::all();
		$usuarios = User::all();

		$usuario = new User();

		$reglas = array(
			'user'           => 'required|max:20|unique:users,user',
			'password'       => 'required|max:20',
			'r_password'     => 'required|max:20|same:password',
			'p_nombre'       => 'required|max:20',
			's_nombre'       => 'required|max:20',
			'p_apellido'     => 'required|max:20',
			's_apellido'     => 'required|max:20',
			'rut'            => 'required|max:10',
			'rep_codigo'     =>'required|max:20',
			'nro_cuota'      => 'required|max:20',
			'total_cuotas'   => 'required|max:20',
			'valor'          => 'required|max:20',
			'campus'         => 'required|max:20',
			'descripcion'    => 'required|max:20'
			);

		$validar = Validator::make($inputs, $reglas);

		if ($validar->fails()){
			return View::make('home.adminIndex')->with('usuarios', $usuarios)->withErrors($validar);
		}
		else{

			$name = Input::file('foto')->getClientOriginalName();

			$usuario->user = Input::get('user');
			$usuario->password = Input::get('password');
			$usuario->foto = $name;
			$usuario->p_nombre = Input::get('p_nombre');
			$usuario->s_nombre = Input::get('s_nombre');
			$usuario->p_apellido = Input::get('p_apellido');
			$usuario->s_apellido = Input::get('s_apellido');
			$usuario->rut = Input::get('rut');
			$usuario->dv = Input::get('dv');
			$usuario->email = Input::get('email');
			$usuario->rep_codigo = Input::get('rep_codigo');
			$usuario->nro_cuota = Input::get('nro_cuota');
			$usuario->total_cuotas = Input::get('total_cuotas');
			$usuario->valor = Input::get('valor');
			$usuario->campus = Input::get('campus');
			$usuario->descripcion = Input::get('descripcion');

			$usuario->save();

			Input::file('foto')->move('imgs', $name);

			return Redirect::to('regreso');
		}
	}

	public function deleteUser(){

		$id = Input::get('id2');
		$user = User::find($id);

		$user->delete();

		return Redirect::to('regreso');
	}

	public function addNews(){

		$inputs = Input::all();

		$usuarios = User::all();
		$noticia = new Noticia();

		$reglas = array(
			'titulo'     => 'required',
			'noticia'    => 'required'
			);

		$validar =  Validator::make($inputs, $reglas);

		if ($validar->fails()) {
			return View::make('home.adminIndex')->with('usuarios', $usuarios)->withErrors($validar);
		}
		else{

			$name = Input::file('fotoNoticia')->getClientOriginalName();

			$noticia->titulo = Input::get('titulo');
			$noticia->fotoNoticia = $name;
			$noticia->noticiaCont = Input::get('noticia');

			$noticia->save();

			Input::file('fotoNoticia')->move('imgs', $name);

			return Redirect::to('regreso');
		}
	}
}
?>
