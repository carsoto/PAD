<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTTranspTercerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_transp_tercer', function(Blueprint $table)
		{
			$table->foreign('cod_tercer', 'Fk_tercer_tercer_hijo')->references('id')->on('t_tercer_tercer')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('cod_transp', 'Fk_tercer_tercer_padre')->references('id')->on('t_tercer_tercer')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_transp_tercer', function(Blueprint $table)
		{
			$table->dropForeign('Fk_tercer_tercer_hijo');
			$table->dropForeign('Fk_tercer_tercer_padre');
		});
	}

}
