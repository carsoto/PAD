<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrocerias;

class CarroceriasController extends Controller
{
    public function index(){
    	$carrocerias = Carrocerias::all();
    	return view("admin.rndc.carrocerias.index", ['carrocerias' => $carrocerias]);
    }

    public function changestatus(Request $request, $id){
        $carroceria = Carrocerias::find($id);

        if($request->carroceria_estatus != null){
            $carroceria->ind_estado = $request->carroceria_estatus;
        }else{
            $carroceria->ind_estado = 0;
        }

        $carroceria->save();
        return redirect('admin/rndc/carrocerias');
    }
}
