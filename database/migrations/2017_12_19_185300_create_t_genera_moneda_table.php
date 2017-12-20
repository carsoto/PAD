<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraMonedaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_moneda', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom_moneda', 20)->comment('Nombre Moneda');
			$table->string('sim_moneda', 2)->comment('Simbolo Moneda');
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
		Schema::drop('t_genera_moneda');
	}

}
