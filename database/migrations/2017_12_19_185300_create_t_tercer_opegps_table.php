<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTercerOpegpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_tercer_opegps', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_tercer_tercer_id')->index('fk_t_tercer_opegps_t_tercer_tercer1')->comment('ID Tercero');
			$table->integer('t_genera_opegps_id')->index('fk_t_tercer_opegps_t_genera_opegps1')->comment('ID Operador GPS');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_tercer_opegps');
	}

}
