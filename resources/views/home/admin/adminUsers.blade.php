@extends('layouts.webIntraAdmin')

@section('cabecera')
	<link rel="stylesheet" type="text/css" href="css/adminTable.css">
	<link rel="stylesheet" type="text/css" href="css/addUser.css">
	<script type="text/javascript" src="js/adminTable.js"></script>
	<script type="text/javascript" src="js/addUser.js"></script>
@stop

@section('contenido')
	<table id="userTable">
	    <thead>
	    	<tr>
	    		<th class="colcheck" class="filtitulo"><input type=checkbox id="checkall"></th>
				<th class="colusuario" class="filtitulo">Usuario</th>
	        	<th class="colnombre" class="filtitulo">Nombre</th>
	        	<th class="colemail" class="filtitulo">E-Mail</th>
	    	</tr>
	    </thead>
	    <tbody>
			@foreach($usuarios as $usuario)
				@if($usuario->id != Auth::user()->id || $usuario->admin != true)
				    <tr>
				    	<td class="colcheck"><input type=checkbox class="checkbox"></td>
						<td class="colusuario">{{$usuario->user}}</td>
				        <td class="colnombre" id="nombre"><img src="imgs/abrir.png"> {{$usuario->p_nombre}} {{$usuario->p_apellido}} {{$usuario->s_apellido}}</td>
				        <td class="colemail">{{$usuario->email}}</td>
				        <td class="coleditar">
							<input type="image" src="imgs/modificar.png">
				        </td>
				        <td class="coleliminar">
							{!! Form::open(array('id' => 'deleteUser', 'method' => 'POST', 'url' => 'eliminar')) !!}
								<input type="image" src="imgs/eliminar.png">
								<input type="hidden" name="id2" value={{$usuario->id}}>
							{!! Form::close() !!}
						</td>
						<td class="oculto">{{$usuario->foto}}</td>
				        <td class="oculto">Nombre : {{$usuario->p_nombre}} {{$usuario->s_nombre}} {{$usuario->p_apellido}} {{$usuario->s_apellido}}</td>
				        <td class="oculto">Rut : {{$usuario->rut}} - {{$usuario->dv}}</td>
				        <td class="oculto">Rep Codigo : {{$usuario->rep_codigo}}</td>
				        <td class="oculto">Número de Cuota : {{$usuario->nro_cuota}}</td>
				        <td class="oculto">Total Coutas : {{$usuario->total_cuotas}}</td>
				        <td class="oculto">Campus : {{$usuario->campus}}</td>
				        <td class="oculto">Descripción : {{$usuario->descripcion}}</td>
				    </tr>
			    @endif
		    @endforeach
    	</tbody>
  	</table>

  	<input id="agregar" type="image" src="imgs/agregar.png">


  	<div id="id">
  		<p id="showUser">cerrar</p>
  		<div>
  			<img id="r_foto" src="">
  			<p id="user"></p>
  			<p id="r_nombre"></p>
	  		<p id="r_rut"></p>
	  		<p id="r_repcod"></p>
	  		<p id="r_ncuota"></p>
	  		<p id="r_tcuota"></p>
	  		<p id="r_campus"></p>
	  		<p id="r_descr"></p>
  		</div>
  	</div>

  	<p>{{$errors->first('user')}}</p>
  	<p>{{$errors->first('password')}}</p>
  	<p>{{$errors->first('r_password')}}</p>
  	<p>{{$errors->first('p_nombre')}}</p>
  	<p>{{$errors->first('s_nombre')}}</p>
  	<p>{{$errors->first('p_apellido')}}</p>
  	<p>{{$errors->first('s_apellido')}}</p>
  	<p>{{$errors->first('rut')}}</p>
  	<p>{{$errors->first('rep_codigo')}}</p>
  	<p>{{$errors->first('nro_cuotas')}}</p>
  	<p>{{$errors->first('total_cuotas')}}</p>
  	<p>{{$errors->first('valor')}}</p>
  	<p>{{$errors->first('campus')}}</p>
  	<p>{{$errors->first('descripcion')}}</p>
@stop

@section('extras')
	{!! Form::open(array('id' => 'addUser', 'method' => 'POST', 'url' => 'crear', 'files' => true)) !!}
		<img id="cerrar" src="imgs/cerrar.png">
		<table id="tableAdd">
			<tr>
				<td>
					{!! Form::label('foto', 'Foto de Perfil') !!}
				</td>
				<td>
					{!! Form::file('foto') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('user', 'Usuario') !!}
				</td>
				<td>
					{!! Form::text('user') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('password', 'Contraseña') !!}
				</td>
				<td>
					{!! Form::text('password') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('r_password', 'Repita Contraseña') !!}
				</td>
				<td>
					{!! Form::text('r_password') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('p_nombre', 'Primer Nombre') !!}
				</td>
				<td>
					{!! Form::text('p_nombre') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('s_nombre', 'Segundo Nombre') !!}
				</td>
				<td>
					{!! Form::text('s_nombre') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('p_apellido', 'Primer Apellido') !!}
				</td>
				<td>
					{!! Form::text('p_apellido') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('s_apellido', 'Segundo Apellido') !!}
				</td>
				<td>
					{!! Form::text('s_apellido') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('rut', 'Rut') !!}
				</td>
				<td>
					{!! Form::text('rut') !!}
				</td>
				<td>
					{!! Form::label('dv', '-') !!}
				</td>
				<td>
					{!! Form::text('dv') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('email', 'E Mail') !!}
				</td>
				<td>
					{!! Form::text('email') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('rep_codigo', 'Rep Codigo') !!}
				</td>
				<td>
					{!! Form::text('rep_codigo') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('nro_cuota', 'Numero de Cuotas') !!}
				</td>
				<td>
					{!! Form::text('nro_cuota') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('total_cuotas', 'Total de Cuotas') !!}
				</td>
				<td>
					{!! Form::text('total_cuotas') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('valor', 'Valor') !!}
				</td>
				<td>
					{!! Form::text('valor') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('campus', 'Campus') !!}
				</td>
				<td>
					{!! Form::text('campus') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('descripcion', 'Descripcion') !!}
				</td>
				<td>
					{!! Form::text('descripcion') !!}
				</td>
			</tr>
		</table>


  		<input type="image" src="imgs/aceptar.png">
  	{!! Form::close() !!}
@stop