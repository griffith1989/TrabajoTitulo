<?php namespace App\Http\Controllers;

use App\User;
use App\Noticia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function index()
	{
		$consulta = 'select * from noticias order by updated_at desc limit 5';

		$noticias = \DB::select($consulta);

		return view('home.user.userIndex')->with('noticias', $noticias);
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
			return redirect('user');
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
			

			return redirect('user');
		}
	}
}