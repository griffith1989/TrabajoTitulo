@if(Auth::check())
@if(Auth::user()->admin == 1)

<!DOCTYPE html>
<html>
<head>
	<title>pagina</title>
	<link rel="shortcut icon" type="image/x-icon" href="imgs/utem.png">
	<link rel="stylesheet" type="text/css" href="css/webHeader.css">
	<link rel="stylesheet" type="text/css" href="css/webBar.css">
	<link rel="stylesheet" type="text/css" href="css/webContenido.css">
	<link rel="stylesheet" type="text/css" href="css/webAvatar.css">
	<link rel="stylesheet" type="text/css" href="css/rightBar.css">
	<link rel="stylesheet" type="text/css" href="css/updateUser.css">
	<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="js/updateUser.js"></script>
	@yield('cabecera')
</head>
<body>
	<div id="cabecera">
		<div class="margen"></div>
		<ul id="secciones">
			<li><a href="regresoAdmin">Inicio</a></li>
			<li><a href="noticiasAdmin">Noticias</a></li>
			<li><a href="">Contactos</a></li>
		</ul>
		<div class="margen"></div>
	</div>

	<div id="bar">
		<nav id="item" class="itemBar">
			<ul>
				<li>Algo 1</li>
				<li>Algo 2</li>
				<li>Algo 3</li>
				<li>Algo 4</li>
			</ul>
		</nav>
	</div>

	<div id="avatar">
		<img id="imgAvatar" src="imgs/{{Auth::user()->foto}}"/>
		<p id="usuario">{{Auth::user()->user}}</p>
		<a id="salir" href="logout"><img src="imgs/logout.png"/></a>
	</div>

	<div id="contenido">
		@yield('contenido')
	</div>

	<div id="rightBar">
		@yield('extraRightBar')
	</div>

	@yield('extras')

	{{Form::open(array('id' => 'updateUser', 'method' => 'POST', 'url' => 'modificar', 'files' => true))}}
		<img id="updateClose" src="imgs/cerrar.png">
		<table id="updateTable">
			<tr>
				<td>
					{{Form::label('upFoto', 'Foto de Perfil')}}<img id="upAvatar" src="imgs/{{Auth::user()->foto}}">
				</td>
				<td>
					{{Form::file('upFoto')}}
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upUser', 'Usuario')}}
				</td>
				<td>
					<input value="{{Auth::user()->user}}" name="upUser" id="upUser" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upPassword', 'Nuena Contraseña')}}
				</td>
				<td>
					{{Form::text('upPassword')}}
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upR_password', 'Repita Nueva Contraseña')}}
				</td>
				<td>
					{{Form::text('upR_password')}}
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upP_nombre', 'Primer Nombre')}}
				</td>
				<td>
					<input value="{{Auth::user()->p_nombre}}" name="upP_nombre" id="upP_nombre" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upS_nombre', 'Segundo Nombre')}}
				</td>
				<td>
					<input value="{{Auth::user()->s_nombre}}" name="upS_nombre" id="upS_nombre" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upP_apellido', 'Primer Apellido')}}
				</td>
				<td>
					<input value="{{Auth::user()->p_apellido}}" name="upP_apellido" id="upP_apellido" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upS_apellido', 'Segundo Apellido')}}
				</td>
				<td>
					<input value="{{Auth::user()->s_apellido}}" name="upS_apellido" id="upS_apellido" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upRut', 'Rut')}}
				</td>
				<td>
					<input value="{{Auth::user()->rut}}" name="upRut" id="upRut" type="text">
				</td>
				<td>
					{{Form::label('upDv', '-')}}
				</td>
				<td>
					<input value="{{Auth::user()->dv}}" name="upDV" id="upDv" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upEmail', 'E Mail')}}
				</td>
				<td>
					<input value="{{Auth::user()->email}}" name="upEmail" id="upEmail" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upRep_codigo', 'Rep Codigo')}}
				</td>
				<td>
					<input value="{{Auth::user()->rep_codigo}}" name="upRep_codigo" id="upRep_codigo" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upNro_cuota', 'Numero de Cuotas')}}
				</td>
				<td>
					<input value="{{Auth::user()->nro_cuota}}" name="upNro_cuota" id="upNro_cuota" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upTotal_cuotas', 'Total de Cuotas')}}
				</td>
				<td>
					<input value="{{Auth::user()->total_cuotas}}" name="upTotal_cuotas" id="upTotal_cuotas" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upValor', 'Valor')}}
				</td>
				<td>
					<input value="{{Auth::user()->valor}}" name="upValor" id="upValor" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upCampus', 'Campus')}}
				</td>
				<td>
					<input value="{{Auth::user()->campus}}" name="upCampus" id="upCampus" type="text">
				</td>
			</tr>
			<tr>
				<td>
					{{Form::label('upDescripcion', 'Descripcion')}}
				</td>
				<td>
					<input value="{{Auth::user()->descripcion}}" name="upDescripcion" id="upDescripcion" type="text">
				</td>
			</tr>
		</table>
  		<input type="image" src="imgs/aceptar.png">
  	{{form::close()}}

</body>
</html>
@endif
@endif
