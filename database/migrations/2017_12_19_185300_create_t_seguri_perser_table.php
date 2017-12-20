<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTSeguriPerserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_seguri_perser', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_seguri_perfil_id')->index('fk_t_seguri_perser_t_seguri_perfil1')->comment('ID Perfil');
			$table->integer('t_genera_servic_id')->index('fk_t_seguri_perser_t_genera_servic1')->comment('ID Servicio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_seguri_perser');
	}

}
