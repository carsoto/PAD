<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraDepartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_depart', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_paisxx_id')->index('fk_t_genera_depart_t_genera_paisxx1')->comment('ID Pais');
			$table->integer('cod_depart')->nullable()->comment('Codigo Estandar');
			$table->string('nom_depart', 50)->comment('Nombre Departamento');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->string('abr_depart', 20)->nullable()->comment('Abreviacion Departamento');
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
		Schema::drop('t_genera_depart');
	}

}
