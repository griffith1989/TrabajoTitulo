@extends('layouts.webIntraAdmin')

@section('contenido')
	@foreach($noticias as $noticia)
		<div class="noticias">
			<p class="titular"><label>{{$noticia->titulo}}</label></p>
			<p class="foto"><img src="imgs/{{$noticia->fotoNoticia}}"></p>
			<p class="noticia"><label>{{$noticia->noticiaCont}}</label></p>
		</div>
	@endforeach
@stop