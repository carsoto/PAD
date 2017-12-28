<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraColoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_colore', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_colorx')->nullable()->index('index_cod_colorx')->comment('Codigo Estandar');
			$table->string('nom_colorx', 255)->comment('Color');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
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
		Schema::drop('t_genera_colore');
	}

}
