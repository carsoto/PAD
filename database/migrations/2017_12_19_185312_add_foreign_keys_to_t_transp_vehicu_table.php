<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTTranspVehicuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_transp_vehicu', function(Blueprint $table)
		{
			$table->foreign('t_tercer_tercer_id', 'FK_tercer_tercer')->references('id')->on('t_tercer_tercer')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('t_genera_tipveh_id', 'fk_t_transp_vehicu_t_genera_tipveh1')->references('id')->on('t_genera_tipveh')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_vehicu_vehicu_id', 'fk_t_transp_vehicu_t_vehicu_vehicu1')->references('id')->on('t_vehicu_vehicu')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_transp_vehicu', function(Blueprint $table)
		{
			$table->dropForeign('FK_tercer_tercer');
			$table->dropForeign('fk_t_transp_vehicu_t_genera_tipveh1');
			$table->dropForeign('fk_t_transp_vehicu_t_vehicu_vehicu1');
		});
	}

}
