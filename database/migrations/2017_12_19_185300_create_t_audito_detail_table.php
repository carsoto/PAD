<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTAuditoDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_audito_detail', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_audito_datosx_id')->index('fk_t_audito_detail_t_audito_datosx1');
			$table->integer('t_genera_servic_id')->nullable()->index('fk_t_audito_detail_t_genera_servic1')->comment('ID Servicio');
			$table->string('val_campox', 45);
			$table->text('val_valuex', 65535);
			$table->integer('cod_action')->comment('1 UPDATE; 2 DELETE');
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
		Schema::drop('t_audito_detail');
	}

}
