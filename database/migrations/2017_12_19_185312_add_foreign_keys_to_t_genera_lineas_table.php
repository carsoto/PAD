<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTGeneraLineasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_genera_lineas', function(Blueprint $table)
		{
			$table->foreign('t_genera_marcas_id', 'fk_t_vehige_lineas_t_genera_marcas1')->references('id')->on('t_genera_marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_genera_lineas', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_vehige_lineas_t_genera_marcas1');
		});
	}

}
