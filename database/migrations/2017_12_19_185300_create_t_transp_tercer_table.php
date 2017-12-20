<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTranspTercerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_transp_tercer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_transp')->index('Fk_tercer_tercer_padre')->comment('ID Transportadora');
			$table->integer('cod_tercer')->index('Fk_tercer_tercer_hijo')->comment('ID Tercero');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->integer('usr_creaci');
			$table->dateTime('fec_creaci');
			$table->integer('usr_modifi')->nullable();
			$table->dateTime('fec_modifi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_transp_tercer');
	}

}
