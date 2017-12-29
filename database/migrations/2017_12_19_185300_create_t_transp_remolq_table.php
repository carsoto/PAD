<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTranspRemolqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_transp_remolq', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_tercer_tercer_id')->index('fk_t_transp_remolq_t_tercer_tercer1')->comment('ID Transportadora');
			$table->integer('t_remolq_remolq_id')->index('fk_t_transp_remolq_t_remolq_remolq1')->comment('ID Remolque');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
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
		Schema::drop('t_transp_remolq');
	}

}
