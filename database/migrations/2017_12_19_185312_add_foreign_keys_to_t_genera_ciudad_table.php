<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTGeneraCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_genera_ciudad', function(Blueprint $table)
		{
			$table->foreign('t_genera_depart_id', 'fk_t_genera_ciudad_t_genera_depart1')->references('id')->on('t_genera_depart')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_genera_ciudad', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_genera_ciudad_t_genera_depart1');
		});
	}

}
