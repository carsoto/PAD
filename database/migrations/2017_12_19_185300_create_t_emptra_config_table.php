<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTEmptraConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_emptra_config', function(Blueprint $table)
		{
			$table->integer('t_tercer_tercer_id')->primary();
			$table->string('nom_emptra', 60)->nullable()->comment('Nombre Empresa Transporte');
			$table->string('img_emptra', 70)->nullable()->comment('Ruta Imagen');
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
		Schema::drop('t_emptra_config');
	}

}
