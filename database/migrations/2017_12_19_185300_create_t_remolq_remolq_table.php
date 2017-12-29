<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTRemolqRemolqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_remolq_remolq', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('t_genera_paisxx_id')->index('fk_t_remolq_remolq_t_genera_paisxx1')->comment('ID Pais');
			$table->integer('t_genera_marcas_id')->index('fk_t_remolq_remolq_t_genera_marcas1')->comment('ID Marca');
			$table->integer('t_genera_carroc_id')->index('fk_t_remolq_remolq_t_genera_carroc1');
			$table->integer('t_genera_config_id')->index('fk_t_remolq_remolq_t_genera_config1');
			$table->integer('t_genera_colore_id')->nullable()->index('fk_t_remolq_remolq_t_genera_colore1');
			$table->integer('t_tercer_tercer_id')->nullable()->index('fk_t_remolq_remolq_t_tercer_tercer1')->comment('ID Tercero Aseguradora Poliza');
			$table->string('num_placax', 8)->unique('num_placax')->comment('Placa Remolque');
			$table->integer('ind_estado')->comment('0 Inactivo; 1 Activo');
			$table->string('fot_remolq', 50)->nullable()->comment('Foto Remolque');
			$table->integer('ano_modelo')->comment('Año Modelo del Remolque');
			$table->integer('num_ejesxx')->comment('Numero de Ejes del Remolque');
			$table->string('ser_chasis', 20)->nullable()->comment('Serial Chasis');
			$table->float('val_anchox', 10, 0)->nullable()->comment('Ancho del Remolque');
			$table->float('val_altoxx', 10, 0)->nullable()->comment('Altura Remolque');
			$table->float('val_largox', 10, 0)->nullable()->comment('Largo Remolque');
			$table->string('val_volpos', 20)->nullable()->comment('Volumen Posible');
			$table->float('val_pesoxx', 10, 0)->comment('Peso del Remolque Vacio');
			$table->float('val_capaci', 10, 0)->nullable()->comment('Capacidad en Peso');
			$table->string('tip_tramit', 20)->nullable()->comment('Tipo de Tramite');
			$table->string('nom_propie', 45)->comment('Nombre del Propietario');
			$table->string('cod_tarpro', 40)->nullable()->comment('Numero tarjeta propiedad');
			$table->integer('num_radica')->nullable()->comment('Numero Radicado MinTra');
			$table->dateTime('fec_radica')->nullable()->comment('Fecha de Radicacion MinTra');
			$table->string('num_respon', 20)->nullable()->comment('Numero Poliza Responsabilidad Civil');
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
		Schema::drop('t_remolq_remolq');
	}

}
