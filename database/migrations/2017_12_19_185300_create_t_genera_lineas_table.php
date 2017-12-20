<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraLineasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_lineas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_marcas_id')->index('fk_t_vehige_lineas_t_genera_marcas1');
			$table->integer('cod_lineax')->nullable()->index('index_cod_colorx')->comment('Codigo Estandar');
			$table->string('nom_lineax', 30)->comment('Linea');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_genera_lineas');
	}

}
