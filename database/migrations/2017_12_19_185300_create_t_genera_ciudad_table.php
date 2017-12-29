<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_ciudad', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('Codigo Sistema');
			$table->integer('t_genera_depart_id')->index('fk_t_genera_ciudad_t_genera_depart1');
			$table->integer('cod_ciudad')->nullable()->comment('Codigo Ciudad Estandar');
			$table->string('nom_ciudad', 50)->comment('Nombre Ciudad');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->string('abr_ciudad', 20)->nullable()->comment('Abreviatura Ciudad');
			$table->float('val_icaxxx', 10, 0)->nullable()->comment('Impuesto ICA');
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
		Schema::drop('t_genera_ciudad');
	}

}
