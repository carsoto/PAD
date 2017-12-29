<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTSeguriPerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_seguri_perfil', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom_perfil', 40)->comment('Nombre Perfil');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
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
		Schema::drop('t_seguri_perfil');
	}

}
