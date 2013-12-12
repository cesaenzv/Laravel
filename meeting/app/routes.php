<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*Ruta registro nuevo usuario*/
Route::any(
	'usuario/nuevo',
	array(
		'before'=>'register',
		'as' => 'ususario.nuevo', 
		'uses'=>'UserController@store'
	)
);

/*Rutas controllers o resources*/

Route::group(array('before'=>'auth'),function(){

	Route::resource('usuario','UserController');

});

Route::controller('acceso','LoginController');


/*Ruta home*/
Route::any('/',array('before'=>'guest','as'=>'login','uses'=>'LoginController@anyIndex'));

Route::any('/package','CalendarController@anyIndex');
