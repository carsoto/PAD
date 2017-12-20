<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTOpegpsMacblaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_opegps_macbla', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_opepad')->index('FK_genera_opegps_padre');
			$table->integer('cod_opehij')->index('Fk_genera_opegps_hijo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_opegps_macbla');
	}

}
