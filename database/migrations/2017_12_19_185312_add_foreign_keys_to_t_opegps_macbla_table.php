<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTOpegpsMacblaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_opegps_macbla', function(Blueprint $table)
		{
			$table->foreign('cod_opepad', 'FK_genera_opegps_padre')->references('id')->on('t_genera_opegps')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('cod_opehij', 'Fk_genera_opegps_hijo')->references('id')->on('t_genera_opegps')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_opegps_macbla', function(Blueprint $table)
		{
			$table->dropForeign('FK_genera_opegps_padre');
			$table->dropForeign('Fk_genera_opegps_hijo');
		});
	}

}
