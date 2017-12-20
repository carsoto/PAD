<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTSeguriPerserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_seguri_perser', function(Blueprint $table)
		{
			$table->foreign('t_genera_servic_id', 'fk_t_seguri_perser_t_genera_servic1')->references('id')->on('t_genera_servic')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_seguri_perfil_id', 'fk_t_seguri_perser_t_seguri_perfil1')->references('id')->on('t_seguri_perfil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_seguri_perser', function(Blueprint $table)
		{
			$table->dropForeign('fk_t_seguri_perser_t_genera_servic1');
			$table->dropForeign('fk_t_seguri_perser_t_seguri_perfil1');
		});
	}

}
