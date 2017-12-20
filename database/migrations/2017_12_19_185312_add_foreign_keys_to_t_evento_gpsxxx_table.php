<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTEventoGpsxxxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_evento_gpsxxx', function(Blueprint $table)
		{
			$table->foreign('t_genera_opegps_id', 'fk_t_evento_gpsxxx_t_genera_opegps1')->references('id')->on('t_genera_opegps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_evento_gpsxxx', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_evento_gpsxxx_t_genera_opegps1');
		});
	}

}
