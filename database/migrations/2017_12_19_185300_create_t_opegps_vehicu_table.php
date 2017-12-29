<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTOpegpsVehicuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_opegps_vehicu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_vehicu_vehicu_id')->index('fk_t_opegps_vehicu_t_vehicu_vehicu1');
			$table->integer('t_genera_opegps_id')->index('fk_t_opegps_vehicu_t_genera_opegps1');
			$table->integer('ind_estado')->comment('0 Inactivo; 1 Activo');
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
		Schema::drop('t_opegps_vehicu');
	}

}
