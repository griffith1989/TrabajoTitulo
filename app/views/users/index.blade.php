<h1>Prueba de vista</h1>

@if($users)
	<ul>
		@foreach ($users as $user)
			<li>nombre : {{$user->nombre }} {{$user->apellido_pat}} {{$user->apellido_mat}}</li>
		@endforeach
	</ul>
@else
	<p>no se encuentra ningun usuario registrado</p>
@endif