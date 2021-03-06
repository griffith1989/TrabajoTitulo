<!DOCTYPE html>
<html>
<head>
	<title>Pagina AFAUTEM</title>
	<link rel="stylesheet" type="text/css" href="css/webHeader.css">
	<link rel="stylesheet" type="text/css" href="css/webSlider.css">
	<link rel="stylesheet" type="text/css" href="css/webBar.css">
	<link rel="stylesheet" type="text/css" href="css/webFooter.css">
	<link rel="stylesheet" type="text/css" href="css/webContenido.css">
	<link rel="stylesheet" type="text/css" href="css/rightBar.css">
	<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="js/webSlider.js"></script>
	<script type="text/javascript" src="js/webBar.js"></script>
</head>
<body>
	<div id="cabecera">
		<div class="margen"></div>
		<ul id="secciones">
			<li>Inicio</li>
			<li>Noticias</li>
			<li>Contactos</li>
		</ul>
		<div class="margen"></div>
	</div>

	<div class="slider">
		<div id="elem1" class="sElem sVisible"></div>
		<div id="elem2" class="sElem"></div>
		<div id="elem3" class="sElem"></div>
		<div id="elem4" class="sElem"></div>
		<div id="elem5" class="sElem"></div>
		<div id="elem6" class="sElem"></div>
	</div>

	<div id="bar">
		
		<form id="login" class="itemBar" action="{{url('login')}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input class="elem" type="text" name="user" placeholder="Usuario">
			<input class="elem" type="password" name="pass" placeholder="Contraseña">
			<input class="elem" type="submit" value="Ingresar">
		</form>

		<nav id="item" class="itemBar">
			<ul>
				<li>Algo 1</li>
				<li>Algo 2</li>
				<li>Algo 3</li>
				<li>Algo 4</li>
			</ul>
		</nav>
	</div>

	<div id="contenido">
		@foreach($noticias as $noticia)
			<div class="noticias">
				<p class="titular"><label>{{$noticia->titulo}}</label></p>
				<p class="foto"><img src="imgs/{{$noticia->fotoNoticia}}"></p>
				<p class="noticia"><label>{{$noticia->noticiaCont}}</label></p>
			</div>
		@endforeach
	</div>

	<div id="rightBar">

	</div>

	<footer>
		<article>
			<p>Hecho por: Nicolás Páez Morgado.</p>
			<p>Información de Contacto: ndpaez89@gmail.com.</p>
		</article>

		<ul id="logos">
				<a href="https://www.facebook.com/">
					<img  src="http://www.daad.co/imperia/md/images/informationszentren/icbogota/facebook_logo.jpg">
				</a>
				<a href="https://www.youtube.com/">
					<img src="http://www.daad.co/imperia/md/images/informationszentren/icbogota/youtube-logo.jpg">
				</a>
				<a href="https://accounts.google.com/ServiceLogin?sacu=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&hl=es&service=mail">
					<img src="http://www.youthcollection47.com/wp-content/uploads/2013/07/gmail-logo.jpg">
				</a>
		</ul>

	</footer>

</body>
</html>
