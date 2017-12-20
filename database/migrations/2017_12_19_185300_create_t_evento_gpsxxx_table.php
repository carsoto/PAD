<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTEventoGpsxxxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_evento_gpsxxx', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_opegps_id')->index('fk_t_evento_gpsxxx_t_genera_opegps1')->comment('ID Operador GPS');
			$table->string('cod_evento', 15)->comment('Codigo Evento del Operador Gps');
			$table->string('nom_evento', 60)->comment('Nombre Evento Operador GPS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_evento_gpsxxx');
	}

}
