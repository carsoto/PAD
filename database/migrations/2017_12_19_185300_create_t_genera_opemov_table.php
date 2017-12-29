<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraOpemovTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_opemov', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom_opemov', 45)->comment('Nombre Operador Movil');
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
		Schema::drop('t_genera_opemov');
	}

}
