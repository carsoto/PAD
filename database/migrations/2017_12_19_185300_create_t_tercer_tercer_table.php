<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTercerTercerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_tercer_tercer', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_genera_tipdoc_id')->index('fk_t_tercer_tercer_t_genera_tipdoc1')->comment('ID Tipo de Documento');
			$table->integer('t_genera_ciudad_id')->index('fk_t_tercer_tercer_t_genera_ciudad1')->comment('ID Ciudad');
			$table->integer('t_genera_regime_id')->nullable()->index('fk_t_tercer_tercer_t_genera_regime1')->comment('ID Regimen');
			$table->bigInteger('cod_tercer')->comment('Codigo Tercero');
			$table->string('nom_tercer', 50)->comment('Nombre Tercero');
			$table->string('nom_apell1', 50)->nullable()->comment('Primer Apellido');
			$table->string('nom_apell2', 50)->nullable()->comment('Segundo Apellido');
			$table->string('abr_tercer', 30)->comment('Abreviacion Tercero');
			$table->integer('cod_estado')->comment('0 Inactivo; 1 Activo');
			$table->char('num_verifi', 1)->nullable()->comment('Numero de verificacion para NIT');
			$table->string('dir_domici', 100)->nullable()->comment('Direccion Domicilio');
			$table->string('num_telef1', 20)->nullable()->comment('Numero Telefono');
			$table->string('num_telef2', 20)->nullable()->comment('Numero Telefono Alternativo');
			$table->string('num_telmov', 30)->nullable()->comment('Numero Celular');
			$table->string('num_faxxxx', 20)->nullable()->comment('Numero Fax');
			$table->string('dir_emailx')->nullable()->comment('Emaiil');
			$table->string('dir_urlweb', 50)->nullable()->comment('url Aplicacion');
			$table->string('dir_ultfot')->nullable();
			$table->string('obs_tercer')->nullable()->comment('Observacion');
			$table->text('obs_aproba')->nullable()->comment('Observacion Aprovacion');
			$table->integer('usr_creaci');
			$table->dateTime('fec_creaci');
			$table->integer('usr_modifi')->nullable();
			$table->dateTime('fec_modifi')->nullable();
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
		Schema::drop('t_tercer_tercer');
	}

}
