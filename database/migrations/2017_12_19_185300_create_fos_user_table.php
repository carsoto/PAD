<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFosUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fos_user', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('t_tercer_tercer_id')->nullable()->index('fk_t_seguri_usuari_t_tercer_tercer1');
			$table->string('username', 15)->comment('Usuario Aplicacion');
			$table->string('username_canonical', 15);
			$table->string('email');
			$table->string('email_canonical');
			$table->boolean('enabled');
			$table->string('salt');
			$table->string('password');
			$table->boolean('locked');
			$table->boolean('expired');
			$table->string('pas_oldusu', 50)->comment('Contraseña Anterior');
			$table->dateTime('expires_at')->nullable();
			$table->string('confirmation_token')->nullable();
			$table->dateTime('last_login')->nullable();
			$table->dateTime('password_requested_at')->nullable();
			$table->longText('roles')->comment('(DC2Type:array)');
			$table->boolean('credentials_expired');
			$table->dateTime('credentials_expire_at')->nullable();
			$table->dateTime('fec_caduca')->nullable()->comment('Fecha caduca Contraseña');
			$table->dateTime('fec_cambio')->nullable()->comment('Fecha se realizo cambio Contraseña');
			$table->integer('num_diasxx')->nullable()->comment('No Dias para cambiar contraseña');
			$table->integer('usr_creaci')->nullable();
			$table->dateTime('fec_creaci')->nullable();
			$table->integer('usr_modifi')->nullable();
			$table->dateTime('fec_modifi')->nullable();
			$table->integer('t_seguri_perfil_id')->index('fk_fos_user_t_seguri_perfil1')->comment('ID Perfil');
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
		Schema::drop('fos_user');
	}

}
