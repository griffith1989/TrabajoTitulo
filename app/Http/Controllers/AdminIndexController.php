<?php namespace App\Http\Controllers;

use App\User;
use App\Noticia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
	public function __construct()
	{
		$this->beforefilter('auth');
	}

	public function index()
	{
		$consulta = 'select * from noticias order by updated_at desc limit 5';

		$noticias = \DB::select($consulta);

		return view('home.admin.adminIndex')->with('noticias', $noticias);
	}

	public function users(){
		$usuarios = User::all();
		return view('home.admin.adminUsers')->with('usuarios', $usuarios);
	}

	public function news(){
		$consulta = 'select * from noticias';

		$noticias = \DB::select($consulta);

		return view('home.admin.adminNews')->with('noticias', $noticias);
	}

	public function addUser(Request $request){

		$inputs = $request->all();
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
			'rep_codigo'     => 'required|max:20',
			'nro_cuota'      => 'required|max:20',
			'total_cuotas'   => 'required|max:20',
			'valor'          => 'required|max:20',
			'campus'         => 'required|max:20',
			'descripcion'    => 'required|max:20'
			);

		$validar = Validator::make($inputs, $reglas);

		if ($validar->fails()){
			return view('home.admin.adminUsers')->with('usuarios', $usuarios)->withErrors($validar);
		}
		else{
			$name = $request->file('foto')->getClientOriginalName();

			$usuario->user = $request->input('user');
			$usuario->password = $request->input('password');
			$usuario->foto = $name;
			$usuario->p_nombre = $request->input('p_nombre');
			$usuario->s_nombre = $request->input('s_nombre');
			$usuario->p_apellido = $request->input('p_apellido');
			$usuario->s_apellido = $request->input('s_apellido');
			$usuario->rut = $request->input('rut');
			$usuario->dv = $request->input('dv');
			$usuario->email = $request->input('email');
			$usuario->rep_codigo = $request->input('rep_codigo');
			$usuario->nro_cuota = $request->input('nro_cuota');
			$usuario->total_cuotas = $request->input('total_cuotas');
			$usuario->valor = $request->input('valor');
			$usuario->campus = $request->input('campus');
			$usuario->descripcion = $request->input('descripcion');

			$usuario->save();

			$request->file('foto')->move('imgs', $name);

			return redirect('admin');
		}
	}

	public function updateUser(Request $request, $id){
		
		$inputs = $request->all();
		$usuarios = User::all();

		$usuario = User::find($id);

		
		if(!empty($request->input('upUser'))){
			$reglas['upUser'] = 'required|max:20|unique:users,user';
		}
		if(!empty($request->input('upPassword')) and !empty($request->input('upR_password'))){
			$reglas['upPassword'] = 'required|max:20';
			$reglas['upR_password'] = 'required|max:20|same:password';
		}
		if(!empty($request->input('upP_nombre'))){
			$reglas['upP_nombre'] = 'required|max:20';
		}
		if(!empty($request->input('upS_nombre'))){
			$reglas['upS_nombre'] = 'required|max:20';
		}
		if(!empty($request->input('upP_apellido'))){
			$reglas['upP_apellido'] = 'required|max:20';
		}
		if(!empty($request->input('upS_apellido'))){
			$reglas['upS_apellido'] = 'required|max:20';
		}
		if(!empty($request->input('upRut'))){
			$reglas['upRut'] = 'required|max:20';
		}
		if(!empty($request->input('upEmail'))){
			$reglas['upEmail'] = 'required|max:20';
		}
		if(!empty($request->input('upRep_codigo'))){
			$reglas['upRep_codigo'] = 'required|max:20';
		}
		if(!empty($request->input('upNro_cuota'))){
			$reglas['upNro_cuota'] = 'required|max:20';
		}
		if(!empty($request->input('upTotal_cuotas'))){
			$reglas['upTotal_cuotas'] = 'required|max:20';
		}
		if(!empty($request->input('upValor'))){
			$reglas['upValor'] = 'required|max:20';
		}
		if(!empty($request->input('upCampus'))){
			$reglas['upCampus'] = 'required|max:20';
		}
		if(!empty($request->input('upDescripcion'))){
			$reglas['upDescripcion'] = 'required|max:20';
		}
		
		$validar = Validator::make($inputs, $reglas);
		
		if ($validar->fails()){
			//return view('home.admin.adminUsers')->with('usuarios', $usuarios)->withErrors($validar);
			return redirect('adminUsers')->withErrors($validar);
		}
		else{
			

			if(!empty($request->input('upUser'))){
				$usuario->user = $request->input('upUser');
			}
			if(!empty($request->input('upPassword')) && !empty($request->input('upR_password'))){
				$usuario->password = $request->input('upPassword');
			}
			if(!empty($request->input('upP_nombre'))){
				$usuario->p_nombre = $request->input('upP_nombre');
			}
			if(!empty($request->input('upS_nombre'))){
				$usuario->s_nombre = $request->input('upS_nombre');
			}
			if(!empty($request->input('upP_apellido'))){
				$usuario->p_apellido = $request->input('upP_apellido');
			}
			if(!empty($request->input('upS_apellido'))){
				$usuario->s_apellido = $request->input('upS_apellido');
			}
			if(!empty($request->input('upRut'))){
				$usuario->rut = $request->input('upRut');
				$usuario->dv = $request->input('upDv');
			}
			if(!empty($request->input('upEmail'))){
				$usuario->email = $request->input('upEmail');
			}
			if(!empty($request->input('upRep_codigo'))){
				$usuario->rep_codigo = $request->input('upRep_codigo');
			}
			if(!empty($request->input('upNro_cuota'))){
				$usuario->nro_cuota = $request->input('upNro_cuota');
			}
			if(!empty($request->input('upTotal_cuotas'))){
				$usuario->total_cuotas = $request->input('upTotal_cuotas');
			}
			if(!empty($request->input('upValor'))){
				$usuario->valor = $request->input('upValor');
			}
			if(!empty($request->input('upCampus'))){
				$usuario->campus = $request->input('upCampus');
			}
			if(!empty($request->input('upDescripcion'))){
				$usuario->descripcion = $request->input('upDescripcion');
			}

			
			
			

			$usuario->save();
			if (!empty($request->file('upFoto'))) {
				$name = $request->file('upFoto')->getClientOriginalName();
				$usuario->foto = $name;
				$request->file('foto')->move('imgs', $name);
			}
			

			return redirect('admin');
		}
	}

	public function deleteUser(Request $request){

		$id = $request->input('id2');
		$user = User::find($id);

		$user->delete();

		return redirect('admin');
	}

	public function addNews(Request $request){

		$inputs = $request->all();

		$usuarios = User::all();
		$noticia = new Noticia();

		$reglas = array(
			'titulo'     => 'required',
			'noticia'    => 'required'
			);

		$validar =  Validator::make($inputs, $reglas);

		if ($validar->fails()) {
			return view('home.adminIndex');
		}
		else{

			$name = $request->file('fotoNoticia')->getClientOriginalName();

			$noticia->titulo = $request->input('titulo');
			$noticia->fotoNoticia = $name;
			$noticia->noticiaCont = $request->input('noticia');

			$noticia->save();

			$request->file('fotoNoticia')->move('imgs', $name);

			return redirect('admin');
		}
	}
}
?>
