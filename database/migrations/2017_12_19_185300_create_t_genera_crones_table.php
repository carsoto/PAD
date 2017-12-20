<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraCronesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_crones', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_opegps_id')->index('fk_t_genera_crones_t_genera_opegps1')->comment('ID Operador GPS');
			$table->string('nom_script', 30)->comment('Nombre del Script');
			$table->string('rut_script', 100)->comment('Ruta del Script');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->string('cnf_cronxx', 30)->comment('Configuracion de ejecucion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_genera_crones');
	}

}
