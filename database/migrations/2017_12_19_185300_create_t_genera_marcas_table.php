<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraMarcasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_marcas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_marcax')->nullable()->index('index_cod_colorx')->comment('Codigo Estandar');
			$table->string('nom_marcax', 30)->comment('Marca');
			$table->integer('ind_tipoxx')->comment('1 Vehiculo; 2 Remolque');
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
		Schema::drop('t_genera_marcas');
	}

}
