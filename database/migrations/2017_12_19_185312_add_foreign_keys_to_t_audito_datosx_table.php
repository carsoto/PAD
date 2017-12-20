<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTAuditoDatosxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_audito_datosx', function(Blueprint $table)
		{
			$table->foreign('fos_user_id', 'fk_t_audito_datosx_fos_user1')->references('id')->on('fos_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_audito_datosx', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_audito_datosx_fos_user1');
		});
	}

}
