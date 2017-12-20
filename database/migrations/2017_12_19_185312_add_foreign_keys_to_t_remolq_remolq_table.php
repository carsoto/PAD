<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTRemolqRemolqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_remolq_remolq', function(Blueprint $table)
		{
			$table->foreign('t_genera_carroc_id', 'fk_t_remolq_remolq_t_genera_carroc1')->references('id')->on('t_genera_carroc')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_colore_id', 'fk_t_remolq_remolq_t_genera_colore1')->references('id')->on('t_genera_colore')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_config_id', 'fk_t_remolq_remolq_t_genera_config1')->references('id')->on('t_genera_config')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_marcas_id', 'fk_t_remolq_remolq_t_genera_marcas1')->references('id')->on('t_genera_marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_paisxx_id', 'fk_t_remolq_remolq_t_genera_paisxx1')->references('id')->on('t_genera_paisxx')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_tercer_tercer_id', 'fk_t_remolq_remolq_t_tercer_tercer1')->references('id')->on('t_tercer_tercer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_remolq_remolq', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_remolq_remolq_t_genera_carroc1');
			$table->dropForeign('fk_t_remolq_remolq_t_genera_colore1');
			$table->dropForeign('fk_t_remolq_remolq_t_genera_config1');
			$table->dropForeign('fk_t_remolq_remolq_t_genera_marcas1');
			$table->dropForeign('fk_t_remolq_remolq_t_genera_paisxx1');
			$table->dropForeign('fk_t_remolq_remolq_t_tercer_tercer1');
		});
	}

}
