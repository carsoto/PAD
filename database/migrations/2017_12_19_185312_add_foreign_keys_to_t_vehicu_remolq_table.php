<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTVehicuRemolqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_vehicu_remolq', function(Blueprint $table)
		{
			$table->foreign('t_remolq_remolq_id', 'fk_t_vehicu_remolq_t_remolq_remolq1')->references('id')->on('t_remolq_remolq')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_vehicu_vehicu_id', 'fk_t_vehicu_remolq_t_vehicu_vehicu1')->references('id')->on('t_vehicu_vehicu')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_vehicu_remolq', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_vehicu_remolq_t_remolq_remolq1');
			$table->dropForeign('fk_t_vehicu_remolq_t_vehicu_vehicu1');
		});
	}

}
