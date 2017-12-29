<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTHomoloEventoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_homolo_evento', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom_evento', 80)->comment('Nombre del Evento en Integrador');
			$table->integer('t_evento_gpsxxx_id')->index('fk_t_homolo_evento_t_evento_gpsxxx1')->comment('ID Evento GPS');
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
		Schema::drop('t_homolo_evento');
	}

}
