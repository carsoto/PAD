<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFormatPlacaxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_format_placax', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_paisxx_id')->index('fk_t_format_placax_t_genera_paisxx1')->comment('ID Pais');
			$table->integer('ind_tipoxx')->comment('1 Vehiculo; 2 Remolque');
			$table->string('abr_format', 20)->comment('A Letra; 0 Numero; M Mixto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_format_placax');
	}

}
