<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTFormatPlacaxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_format_placax', function(Blueprint $table)
		{
			$table->foreign('t_genera_paisxx_id', 'fk_t_format_placax_t_genera_paisxx1')->references('id')->on('t_genera_paisxx')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_format_placax', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_format_placax_t_genera_paisxx1');
		});
	}

}
