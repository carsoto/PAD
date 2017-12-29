<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTranspVehicuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_transp_vehicu', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_tercer_tercer_id')->index('FK_tercer_tercer')->comment('Id Transportadora');
			$table->integer('t_vehicu_vehicu_id')->index('fk_t_transp_vehicu_t_vehicu_vehicu1')->comment('ID Vehiculo');
			$table->integer('t_genera_tipveh_id')->index('fk_t_transp_vehicu_t_genera_tipveh1');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->integer('usr_creaci');
			$table->dateTime('fec_creaci');
			$table->integer('usr_modifi')->nullable();
			$table->dateTime('fec_modifi')->nullable();
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
		Schema::drop('t_transp_vehicu');
	}

}
