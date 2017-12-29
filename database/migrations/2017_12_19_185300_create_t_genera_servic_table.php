<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraServicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_servic', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nom_servic', 30)->comment('Nombre del Servicio');
			$table->text('des_servic', 65535)->comment('Descripcion del Servicio');
			$table->string('nom_rutaxx', 45)->comment('Ruta Servicio');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->integer('ind_ordenx')->default(0)->comment('Order del menu, segun nivel');
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
		Schema::drop('t_genera_servic');
	}

}
