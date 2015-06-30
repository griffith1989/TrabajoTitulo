<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'user' => 'user1',
			'password' => '1234',
			'foto' => '01.jpg',
			'rut' => '9665707',
			'dv' => '2',
			'p_nombre' => 'pablo',
			's_nombre' => 'ivan',
			'p_apellido' => 'azocar',
			's_apellido' => 'fernandez',
			'rep_codigo' => '40301000',
			'nro_cuota' => '1',
			'total_cuotas' => '1',
			'valor' => '2941',
			'campus' => 'casa central',
			'descripcion' => 'afautem',
			'admin' => 1
		]);

		User::create([
			'user' => 'user2',
			'password' => '1234',
			'foto' => '02.jpg',
			'rut' => '7494251',
			'dv' => '2',
			'p_nombre' => 'luis',
			's_nombre' => 'patricio',
			'p_apellido' => 'bastias',
			's_apellido' => 'roman',
			'rep_codigo' => '20000000',
			'nro_cuota' => '1',
			'total_cuotas' => '1',
			'valor' => '7476',
			'campus' => 'casa central',
			'descripcion' => 'afautem',
			'admin' => 'false'
		]);

		User::create([
			'user' => 'user3',
			'password' => '1234',
			'rut' => '5813737',
			'dv' => '5',
			'p_nombre' => 'cesar',
			's_nombre' => 'maximiliano',
			'p_apellido' => 'cerda',
			's_apellido' => 'albarracin',
			'rep_codigo' => '40309000',
			'nro_cuota' => '1',
			'total_cuotas' => '1',
			'valor' => '3472',
			'campus' => 'casa central',
			'descripcion' => 'afautem',
			'admin' => 'false'
		]);

		User::create([
			'user' => 'user4',
			'password' => '1234',
			'rut' => '6369183',
			'dv' => '6',
			'p_nombre' => 'julia',
			's_nombre' => 'angela',
			'p_apellido' => 'cerda',
			's_apellido' => 'carvajal',
			'rep_codigo' => '40303000',
			'nro_cuota' => '1',
			'total_cuotas' => '1',
			'valor' => '3128',
			'campus' => 'casa central',
			'descripcion' => 'afautem',
			'admin' => 'false'
		]);

		User::create([
			'user' => 'user5',
			'password' => '1234',
			'rut' => '9471633',
			'dv' => '0',
			'p_nombre' => 'olimpia',
			's_nombre' => 'enriqueta',
			'p_apellido' => 'cermeño',
			's_apellido' => 'meza',
			'rep_codigo' => '40309000',
			'nro_cuota' => '1',
			'total_cuotas' => '1',
			'valor' => '2941',
			'campus' => 'casa central',
			'descripcion' => 'afautem',
			'admin' => 'false'
		]);
	}
}
