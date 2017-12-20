<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraCarrocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_carroc', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_carroc')->default(0)->index('index_cod_colorx')->comment('Codigo Estandar');
			$table->string('nom_carroc', 30)->comment('Carroceria');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->integer('ind_tipoxx')->comment('1 Vehiculo; 2 Remolque');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_genera_carroc');
	}

}
