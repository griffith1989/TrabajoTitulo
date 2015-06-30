@if(Auth::check())
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
			<li><a href="user">Inicio</a></li>
			<li><a href="">Noticias</a></li>
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

	@yield('agregarUsuario')

	<div id="contenido">
		@foreach($noticias as $noticia)
			<div class="noticias">
				<p class="titular"><label>{{$noticia->titulo}}</label></p>
				<p class="foto"><img src="imgs/{{$noticia->fotoNoticia}}"></p>
				<p class="noticia"><label>{{$noticia->noticiaCont}}</label></p>
			</div>
		@endforeach

		@yield('contenido')
	</div>

	<div id="rightBar">
		@yield('extraRightBar')
	</div>

</body>
</html>
@endif
