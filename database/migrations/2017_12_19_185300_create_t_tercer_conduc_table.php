<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTercerConducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_tercer_conduc', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_tercer_tercer_id')->index('fk_t_tercer_conduc_t_tercer_tercer1')->comment('ID Tercero');
			$table->integer('t_genera_opemov_id')->index('fk_t_tercer_conduc_t_genera_opemov1')->comment('ID Operador Movil');
			$table->integer('num_soatxx');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->string('cod_tipsex', 1)->nullable()->comment('Sexo M o F');
			$table->string('cod_grupsa', 6)->nullable()->comment('Grupo Sangineo');
			$table->string('num_licenc', 20)->nullable()->comment('Numero licencia');
			$table->string('num_catlic', 1)->nullable()->comment('Categoria Licencia');
			$table->dateTime('fec_venlic')->nullable()->comment('Fecha vencmiento de licencia');
			$table->integer('cod_califi')->nullable()->comment('Calificacion');
			$table->string('obs_habili')->nullable()->comment('Observacion Habilitado');
			$table->string('nom_epsxxx', 50)->nullable()->comment('EPS');
			$table->string('nom_arpxxx', 80)->nullable()->comment('ARP');
			$table->string('nom_pensio', 80)->nullable()->comment('Fondo Pensiones');
			$table->string('num_pasado', 10)->nullable()->comment('Pasado Judicial');
			$table->dateTime('fec_venpas')->nullable()->comment('Fecha Vencimiento Pasado Judicial');
			$table->string('nom_refper', 50)->nullable()->comment('Nombre Referencia Personal');
			$table->string('tel_refper', 15)->nullable()->comment('Telefono Referencia Personal');
			$table->string('obs_conduc')->nullable()->comment('Observaciones del Conductor');
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
		Schema::drop('t_tercer_conduc');
	}

}
