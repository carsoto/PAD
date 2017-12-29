<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividades;

class ActividadesController extends Controller
{
	public function index(){
    	$actividades = Actividades::all();
    	return view("admin.rndc.actividades.index", ['actividades' => $actividades]);
    }

    public function changestatus(Request $request, $id){
        $actividad = Actividades::find($id);

        if($request->actividad_estatus != null){
            $actividad->ind_estado = $request->actividad_estatus;
        }else{
            $actividad->ind_estado = 0;
        }

        $actividad->save();
        return redirect('admin/rndc/actividades');
    }
}
