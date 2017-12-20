<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraTipvehTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_tipveh', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom_tipveh', 30)->comment('Tipo Vehiculo');
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
		Schema::drop('t_genera_tipveh');
	}

}
