<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'rndc'], function () {

		//Route::resource('colores','ColoresController');
	    
	    Route::get('actividades',array('as' => 'actividades.index','uses' => 'ActividadesController@index'));
	    Route::put('actividades/{accion}',array('as' => 'actividades.changestatus','uses' => 'ActividadesController@changestatus'));

	    Route::get('carrocerias',array('as' => 'carrocerias.index','uses' => 'CarroceriasController@index'));
	    Route::put('carrocerias/{accion}',array('as' => 'carrocerias.changestatus','uses' => 'CarroceriasController@changestatus'));

	    Route::get('colores',array('as' => 'colores.index','uses' => 'ColoresController@index'));
	    Route::put('colores/{color}',array('as' => 'colores.changestatus','uses' => 'ColoresController@changestatus'));
	    
	});
});
