<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTAuditoDatosxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_audito_datosx', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->dateTime('fec_audito');
			$table->integer('fos_user_id')->index('fk_t_audito_datosx_fos_user1');
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
		Schema::drop('t_audito_datosx');
	}

}
