<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFosUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fos_user', function(Blueprint $table)
		{
			$table->foreign('t_seguri_perfil_id', 'fk_fos_user_t_seguri_perfil1')->references('id')->on('t_seguri_perfil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('t_tercer_tercer_id', 'fk_t_seguri_usuari_t_tercer_tercer1')->references('id')->on('t_tercer_tercer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fos_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_fos_user_t_seguri_perfil1');
			$table->dropForeign('fk_t_seguri_usuari_t_tercer_tercer1');
		});
	}

}
