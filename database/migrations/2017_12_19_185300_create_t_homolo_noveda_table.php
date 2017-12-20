<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTHomoloNovedaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_homolo_noveda', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_noveda_gpsxxx_id')->index('fk_t_homolo_noveda_t_noveda_gpsxxx1')->comment('ID Novedad GPS');
			$table->string('nom_noveda', 80)->comment('Nombre Novedad en Integrador');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_homolo_noveda');
	}

}
