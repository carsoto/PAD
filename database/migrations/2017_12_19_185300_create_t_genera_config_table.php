<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_config', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cod_config')->nullable()->index('index_cod_colorx')->comment('Codigo Estandar');
			$table->string('abr_config', 5)->comment('Abreviacion COnfiguracion');
			$table->string('nom_config', 100)->comment('Configuracion');
			$table->integer('ind_tipoxx')->comment('1 Vehiculo; 2 Remolque');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->float('val_pesmax', 10, 0)->nullable()->comment('Peso Maximo de toda la configuracion');
			$table->float('val_pesmin', 10, 0)->nullable()->comment('Peso Minimo de toda la configuraion');
			$table->float('val_galmax', 10, 0)->nullable()->comment('Galones Maximo a cargar');
			$table->float('val_galmin', 10, 0)->nullable()->comment('Galones Minimo a cargar');
			$table->string('fot_config', 50)->nullable()->comment('Foto de la configuracion');
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
		Schema::drop('t_genera_config');
	}

}
