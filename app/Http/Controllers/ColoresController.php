<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colores;

class ColoresController extends Controller
{
    public function index(){
    	$colores = Colores::all();
    	return view("admin.rndc.colores.index", ['colores' => $colores]);
    }

    public function changestatus(Request $request, $id){
        $color = Colores::find($id);

        if($request->color_estatus != null){
            $color->ind_estado = $request->color_estatus;
        }else{
            $color->ind_estado = 0;
        }

        $color->save();
        return redirect('admin/rndc/colores');
    }
}
