<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTNovedaGpsxxxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_noveda_gpsxxx', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_opegps_id')->index('fk_t_noveda_gpsxxx_t_genera_opegps1')->comment('ID Operador GPS');
			$table->string('nom_noveda', 80)->comment('nombre Novedad del Operador GPS');
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
		Schema::drop('t_noveda_gpsxxx');
	}

}
