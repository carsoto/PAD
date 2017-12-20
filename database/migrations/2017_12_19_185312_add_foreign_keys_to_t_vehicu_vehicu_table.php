<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTVehicuVehicuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_vehicu_vehicu', function(Blueprint $table)
		{
			$table->foreign('cod_propie', 'FK_tercer_propie')->references('id')->on('t_tercer_tercer')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('cod_conduc', 'Fk_tercer_conduc')->references('id')->on('t_tercer_tercer')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('cod_tenedo', 'Fk_tercer_tenedo')->references('id')->on('t_tercer_tercer')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('t_genera_carroc_id', 'fk_t_vehicu_vehicu_t_genera_carroc1')->references('id')->on('t_genera_carroc')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_ciudad_id', 'fk_t_vehicu_vehicu_t_genera_ciudad1')->references('id')->on('t_genera_ciudad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_colore_id', 'fk_t_vehicu_vehicu_t_genera_colore1')->references('id')->on('t_genera_colore')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_config_id', 'fk_t_vehicu_vehicu_t_genera_config1')->references('id')->on('t_genera_config')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_lineas_id', 'fk_t_vehicu_vehicu_t_genera_lineas1')->references('id')->on('t_genera_lineas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_asesoa', 'fk_t_vehicu_vehicu_t_tercer_tercer1')->references('id')->on('t_tercer_tercer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_aseprc', 'fk_t_vehicu_vehicu_t_tercer_tercer2')->references('id')->on('t_tercer_tercer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_vehicu_vehicu', function(Blueprint $table)
		{
			$table->dropForeign('FK_tercer_propie');
			$table->dropForeign('Fk_tercer_conduc');
			$table->dropForeign('Fk_tercer_tenedo');
			$table->dropForeign('fk_t_vehicu_vehicu_t_genera_carroc1');
			$table->dropForeign('fk_t_vehicu_vehicu_t_genera_ciudad1');
			$table->dropForeign('fk_t_vehicu_vehicu_t_genera_colore1');
			$table->dropForeign('fk_t_vehicu_vehicu_t_genera_config1');
			$table->dropForeign('fk_t_vehicu_vehicu_t_genera_lineas1');
			$table->dropForeign('fk_t_vehicu_vehicu_t_tercer_tercer1');
			$table->dropForeign('fk_t_vehicu_vehicu_t_tercer_tercer2');
		});
	}

}
