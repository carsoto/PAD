<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTServicServicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_servic_servic', function(Blueprint $table)
		{
			$table->foreign('cod_serhij', 'Fk_genera_servic_hijo')->references('id')->on('t_genera_servic')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('cod_serpad', 'Fk_genera_servic_padre')->references('id')->on('t_genera_servic')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_servic_servic', function(Blueprint $table)
		{
			$table->dropForeign('Fk_genera_servic_hijo');
			$table->dropForeign('Fk_genera_servic_padre');
		});
	}

}
