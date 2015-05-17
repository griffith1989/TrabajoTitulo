@extends('layouts.webIntra')
@section('contenido')
	<p>Nombre : {{Auth::user()->p_nombre}} {{Auth::user()->s_nombre}} {{Auth::user()->apellido_pat}} {{Auth::user()->apellido_mat}}</p>
	<p>Rut : {{Auth::user()->rut}} - {{Auth::user()->dv}}</p>
	<p>Rep Codigo : {{Auth::user()->rep_codigo}}</p>
	<p>Número de Cuota : {{Auth::user()->nro_cuota}}</p>
	<p>Total Coutas : {{Auth::user()->total_cuotas}}</p>
	<p>Campus : {{Auth::user()->campus}}</p>
	<p>Descripción : {{Auth::user()->descripcion}}</p>
@stop