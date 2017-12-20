<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTHomoloEventoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_homolo_evento', function(Blueprint $table)
		{
			$table->foreign('t_evento_gpsxxx_id', 'fk_t_homolo_evento_t_evento_gpsxxx1')->references('id')->on('t_evento_gpsxxx')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_homolo_evento', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_homolo_evento_t_evento_gpsxxx1');
		});
	}

}
