<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colores extends Model
{
	protected $table = "t_genera_colore";
	protected $fillable = ['id', 'cod_colorx', 'nom_colorx', 'ind_estado'];
}
