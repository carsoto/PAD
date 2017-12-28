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
	    
	    Route::get('colores',array('as' => 'colores.index','uses' => 'ColoresController@index'));
	    Route::put('colores/{color}',array('as' => 'colores.changestatus','uses' => 'ColoresController@changestatus'));
	    
	});
});
