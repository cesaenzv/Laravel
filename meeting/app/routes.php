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

Route::any('usuario/nuevo',array('as' => 'ususario.nuevo', 'uses'=>'UserController@store'));

Route::group(array('before'=>'auth'),function(){
	Route::resource('usuario','UserController',
			array('except' => array('CreateNew')));	
});

Route::controller('acceso','LoginController');
Route::any('/',array('as'=>'home','uses'=>'HomeController@showHome'));
