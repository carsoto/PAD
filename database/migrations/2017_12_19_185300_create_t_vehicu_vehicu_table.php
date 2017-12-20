<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTVehicuVehicuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_vehicu_vehicu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_ciudad_id')->index('fk_t_vehicu_vehicu_t_genera_ciudad1')->comment('ID Ciudad del Vehiculo');
			$table->integer('t_genera_config_id')->index('fk_t_vehicu_vehicu_t_genera_config1');
			$table->integer('t_genera_colore_id')->index('fk_t_vehicu_vehicu_t_genera_colore1');
			$table->integer('t_genera_lineas_id')->index('fk_t_vehicu_vehicu_t_genera_lineas1');
			$table->integer('t_genera_carroc_id')->index('fk_t_vehicu_vehicu_t_genera_carroc1');
			$table->integer('cod_propie')->index('FK_tercer_propie')->comment('ID Tercero Propietario');
			$table->integer('cod_tenedo')->index('Fk_tercer_tenedo')->comment('ID Tercero Tenedor');
			$table->integer('cod_conduc')->index('Fk_tercer_conduc')->comment('ID Tercero Conductor');
			$table->integer('cod_asesoa')->index('fk_t_vehicu_vehicu_t_tercer_tercer1')->comment('ID Tercero Aseguradora Soat');
			$table->integer('cod_aseprc')->nullable()->index('fk_t_vehicu_vehicu_t_tercer_tercer2')->comment('ID Tercero Asegurador Poliza RC');
			$table->string('num_placax', 10)->comment('Placa Vehiculo');
			$table->integer('ano_modelo')->comment('Año Modelo Vehiculo');
			$table->string('num_motorx', 25)->comment('Numero Motor');
			$table->string('num_seriex', 25)->nullable()->comment('Numero Serie');
			$table->string('num_chasis', 25)->nullable()->comment('Numero Chasis');
			$table->string('num_tarpro', 30)->nullable()->comment('Numero Tarjeto Propiedad');
			$table->float('val_pesove', 10, 0)->comment('Peso del Vehiculo Vacio');
			$table->float('val_capaci', 10, 0)->comment('Capacidad');
			$table->string('reg_nalcar', 30)->nullable()->comment('Registro Nacional de Carga');
			$table->string('num_poliza', 20)->comment('Numero de Poliza');
			$table->date('fec_vigfin')->nullable()->comment('Fecha Vigencia Poliza');
			$table->integer('ano_reporte')->nullable()->comment('Año Reporte');
			$table->string('nom_vincul', 50)->nullable()->comment('Nombre Vinculacion Vehiculo');
			$table->dateTime('fec_vigvin')->nullable()->comment('Fecha Vigencia Vinculacion');
			$table->string('num_polirc', 20)->nullable()->comment('Numero Poliza RC');
			$table->dateTime('fec_venprc')->nullable()->comment('Fecha Vencimiento Poliza RC');
			$table->string('dir_fotfre')->nullable()->comment('Direccion Foto Frente');
			$table->string('dir_fotizq')->nullable()->comment('Direccion Foto Izquierda');
			$table->string('dir_fotder')->nullable()->comment('Direccion Foto Derecha');
			$table->string('dir_fotpos')->nullable()->comment('Direccion Foto Posterior');
			$table->dateTime('fec_revmec')->nullable()->comment('Fecha Revision Mecanica');
			$table->string('num_cergas', 30)->nullable()->comment('Numero Certificado de Gases');
			$table->string('num_tarope', 30)->nullable()->comment('Numero Tarjeta de Operacion');
			$table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
			$table->string('obs_estado')->nullable();
			$table->text('obs_vehicu')->nullable();
			$table->integer('usr_creaci')->nullable();
			$table->dateTime('fec_creaci')->nullable();
			$table->integer('usr_modidi')->nullable();
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
		Schema::drop('t_vehicu_vehicu');
	}

}
