<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTTercerTercerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_tercer_tercer', function(Blueprint $table)
		{
			$table->foreign('t_genera_ciudad_id', 'fk_t_tercer_tercer_t_genera_ciudad1')->references('id')->on('t_genera_ciudad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_regime_id', 'fk_t_tercer_tercer_t_genera_regime1')->references('id')->on('t_genera_regime')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_tipdoc_id', 'fk_t_tercer_tercer_t_genera_tipdoc1')->references('id')->on('t_genera_tipdoc')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_tercer_tercer', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_tercer_tercer_t_genera_ciudad1');
			$table->dropForeign('fk_t_tercer_tercer_t_genera_regime1');
			$table->dropForeign('fk_t_tercer_tercer_t_genera_tipdoc1');
		});
	}

}
