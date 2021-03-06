<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTEmptraConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_emptra_config', function(Blueprint $table)
		{
			$table->foreign('t_tercer_tercer_id', 'fk_t_emptra_config_t_tercer_tercer1')->references('id')->on('t_tercer_tercer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_emptra_config', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_emptra_config_t_tercer_tercer1');
		});
	}

}
