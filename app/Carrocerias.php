<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrocerias extends Model
{
    protected $table = "t_genera_carroc";
	protected $fillable = ['id', 'cod_carroc', 'nom_carroc', 'ind_estado', 'ind_tipoxx'];
}

