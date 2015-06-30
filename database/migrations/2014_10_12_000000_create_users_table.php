<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('user')->unique();
			$table->string('password', 60);
			$table->string('foto');
			$table->string('rut');
			$table->string('dv');
			$table->string('email');
			$table->string('p_nombre');
			$table->string('s_nombre');
			$table->string('p_apellido');
			$table->string('s_apellido');
			$table->string('rep_codigo');
			$table->string('nro_cuota');
			$table->string('total_cuotas');
			$table->string('valor');
			$table->string('campus');
			$table->string('descripcion');
			$table->boolean('admin');
			$table->boolean('activo');
			$table->time('t_inactivo');

			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
