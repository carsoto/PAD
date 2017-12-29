<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraOpegpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_opegps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('cod_opegps')->comment('Codigo Operador GPS');
			$table->string('nom_opegps', 30)->comment('Nombre Operador GPS');
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
		Schema::drop('t_genera_opegps');
	}

}
