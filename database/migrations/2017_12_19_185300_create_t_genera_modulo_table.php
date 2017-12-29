<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraModuloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_modulo', function(Blueprint $table)
		{
			$table->integer('cod_modulo', true);
			$table->string('nom_modulo', 45)->nullable();
			$table->string('des_modulo', 120)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_genera_modulo');
	}

}
