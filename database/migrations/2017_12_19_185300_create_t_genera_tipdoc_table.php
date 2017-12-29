<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGeneraTipdocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_genera_tipdoc', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nom_docume', 45)->comment('Nombre Tipo Documento');
			$table->string('abr_docume', 10)->comment('Abreviacion Tipo Documento');
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
		Schema::drop('t_genera_tipdoc');
	}

}
