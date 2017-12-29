<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTVehicuRemolqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_vehicu_remolq', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_vehicu_vehicu_id')->index('fk_t_vehicu_remolq_t_vehicu_vehicu1')->comment('ID Vehiculo');
			$table->integer('t_remolq_remolq_id')->index('fk_t_vehicu_remolq_t_remolq_remolq1')->comment('ID Remolque');
			$table->dateTime('fec_asigna')->comment('Fecha Asignacion');
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
		Schema::drop('t_vehicu_remolq');
	}

}
