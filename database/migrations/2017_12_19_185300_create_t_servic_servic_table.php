<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTServicServicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_servic_servic', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_serpad')->index('Fk_genera_servic_padre')->comment('ID Servicio Padre');
			$table->integer('cod_serhij')->index('Fk_genera_servic_hijo')->comment('ID Servicio Hijo');
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
		Schema::drop('t_servic_servic');
	}

}
