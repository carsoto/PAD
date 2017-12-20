<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTOpegpsVehicuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_opegps_vehicu', function(Blueprint $table)
		{
			$table->foreign('t_genera_opegps_id', 'fk_t_opegps_vehicu_t_genera_opegps1')->references('id')->on('t_genera_opegps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_vehicu_vehicu_id', 'fk_t_opegps_vehicu_t_vehicu_vehicu1')->references('id')->on('t_vehicu_vehicu')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_opegps_vehicu', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_opegps_vehicu_t_genera_opegps1');
			$table->dropForeign('fk_t_opegps_vehicu_t_vehicu_vehicu1');
		});
	}

}
