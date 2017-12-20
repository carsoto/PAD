<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTTercerActiviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_tercer_activi', function(Blueprint $table)
		{
			$table->foreign('t_genera_activi_id', 'fk_t_tercer_activi_t_genera_activi1')->references('id')->on('t_genera_activi')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_tercer_tercer_id', 'fk_t_tercer_activi_t_tercer_tercer1')->references('id')->on('t_tercer_tercer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_tercer_activi', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_tercer_activi_t_genera_activi1');
			$table->dropForeign('fk_t_tercer_activi_t_tercer_tercer1');
		});
	}

}
