<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTOpegpsRemolqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_opegps_remolq', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_genera_opegps_id')->index('fk_t_opegps_remolq_t_genera_opegps1');
			$table->integer('t_remolq_remolq_id')->index('fk_t_opegps_remolq_t_remolq_remolq1');
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
		Schema::drop('t_opegps_remolq');
	}

}
