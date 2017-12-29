<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTercerActiviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_tercer_activi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_activi_id')->index('fk_t_tercer_activi_t_genera_activi1')->comment('ID Actividad');
			$table->integer('t_tercer_tercer_id')->index('fk_t_tercer_activi_t_tercer_tercer1')->comment('ID Tercero');
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
		Schema::drop('t_tercer_activi');
	}

}
