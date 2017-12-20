<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraPaisxxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_paisxx', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_genera_moneda_id')->index('fk_t_genera_paisxx_t_genera_moneda1')->comment('ID Moneda');
			$table->integer('cod_paisxx')->nullable()->comment('Codigo Pais Estandar');
			$table->string('nom_paisxx', 50)->comment('Nombre Pais');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->string('abr_paisxx', 20)->nullable()->comment('Abreviacion Pais');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_genera_paisxx');
	}

}
