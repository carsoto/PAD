<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraActiviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_activi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom_activi', 50)->comment('Nombre Actividad');
			$table->string('abr_activi', 15)->comment('Abreviacion Actividad');
			$table->boolean('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
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
		Schema::drop('t_genera_activi');
	}

}
