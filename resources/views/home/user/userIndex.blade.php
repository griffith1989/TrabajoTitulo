@extends('layouts.webIntra')
@section('contenido')


	 <?php $url='userModificar/'.Auth::user()->id ?>

	{!! Form::open(array('id' => 'updateUser', 'method' => 'POST', 'url' => $url, 'files' => true)) !!}
		<img id="updateClose" src="imgs/cerrar.png">
		<table id="updateTable">
			<tr>
				<td>
					<ul>
						<li>
							{!! Form::label('upFoto', 'Foto de Perfil') !!}
						</li>
						<li>
							<img id="upAvatar" src="imgs/{{Auth::user()->foto}}">
						</li>
					</ul>
				</td>
				<td>
					<div id="contFoto">
						{!! Form::file('upFoto') !!}
					</div>
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upUser', 'Usuario') !!}
				</td>
				<td>
					<input value="{{Auth::user()->user}}" name="upUser" id="upUser" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upPassword', 'Nuena Contraseña') !!}
				</td>
				<td>
					{!! Form::password('upPassword') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upR_password', 'Repita Nueva Contraseña') !!}
				</td>
				<td>
					{!! Form::password('upR_password') !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upP_nombre', 'Primer Nombre') !!}
				</td>
				<td>
					<input value="{{Auth::user()->p_nombre}}" name="upP_nombre" id="upP_nombre" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upS_nombre', 'Segundo Nombre') !!}
				</td>
				<td>
					<input value="{{Auth::user()->s_nombre}}" name="upS_nombre" id="upS_nombre" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upP_apellido', 'Primer Apellido') !!}
				</td>
				<td>
					<input value="{{Auth::user()->p_apellido}}" name="upP_apellido" id="upP_apellido" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upS_apellido', 'Segundo Apellido') !!}
				</td>
				<td>
					<input value="{{Auth::user()->s_apellido}}" name="upS_apellido" id="upS_apellido" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upRut', 'Rut') !!}
				</td>
				<td>
					<input value="{{Auth::user()->rut}}" name="upRut" id="upRut" type="text">
				</td>
				<td>
					{!! Form::label('upDv', '-') !!}
				</td>
				<td>
					<input value="{{Auth::user()->dv}}" name="upDv" id="upDv" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upEmail', 'E Mail') !!}
				</td>
				<td>
					<input value="{{Auth::user()->email}}" name="upEmail" id="upEmail" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upRep_codigo', 'Rep Codigo') !!}
				</td>
				<td>
					<input value="{{Auth::user()->rep_codigo}}" name="upRep_codigo" id="upRep_codigo" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upNro_cuota', 'Numero de Cuotas') !!}
				</td>
				<td>
					<input value="{{Auth::user()->nro_cuota}}" name="upNro_cuota" id="upNro_cuota" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upTotal_cuotas', 'Total de Cuotas') !!}
				</td>
				<td>
					<input value="{{Auth::user()->total_cuotas}}" name="upTotal_cuotas" id="upTotal_cuotas" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upValor', 'Valor') !!}
				</td>
				<td>
					<input value="{{Auth::user()->valor}}" name="upValor" id="upValor" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upCampus', 'Campus') !!}
				</td>
				<td>
					<input value="{{Auth::user()->campus}}" name="upCampus" id="upCampus" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label('upDescripcion', 'Descripcion') !!}
				</td>
				<td>
					<input value="{{Auth::user()->descripcion}}" name="upDescripcion" id="upDescripcion" type="text">
				</td>
			</tr>
		</table>
  		<input type="image" src="imgs/aceptar.png">
  	{!! Form::close() !!}
@stop