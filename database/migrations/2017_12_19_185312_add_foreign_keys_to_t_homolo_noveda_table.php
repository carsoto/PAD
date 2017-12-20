<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTHomoloNovedaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_homolo_noveda', function(Blueprint $table)
		{
			$table->foreign('t_noveda_gpsxxx_id', 'fk_t_homolo_noveda_t_noveda_gpsxxx1')->references('id')->on('t_noveda_gpsxxx')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_homolo_noveda', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_homolo_noveda_t_noveda_gpsxxx1');
		});
	}

}
