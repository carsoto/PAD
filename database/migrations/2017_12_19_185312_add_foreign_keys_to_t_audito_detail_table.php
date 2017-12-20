<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTAuditoDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_audito_detail', function(Blueprint $table)
		{
			$table->foreign('t_audito_datosx_id', 'fk_t_audito_detail_t_audito_datosx1')->references('id')->on('t_audito_datosx')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_genera_servic_id', 'fk_t_audito_detail_t_genera_servic1')->references('id')->on('t_genera_servic')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_audito_detail', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_audito_detail_t_audito_datosx1');
			$table->dropForeign('fk_t_audito_detail_t_genera_servic1');
		});
	}

}
