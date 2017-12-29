<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $table = "t_genera_activi";
	protected $fillable = ['id', 'nom_activi', 'abr_activi', 'ind_estado'];
}

