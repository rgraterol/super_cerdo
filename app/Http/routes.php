<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StaticController@index');

Route::get('login/facebook', 'Auth\AuthController@login');

Route::get('/home', 'Auth\AuthController@handleProviderCallback');

Route::post('save/user', 'StaticController@store');

Route::get('region/provincia/{id}', 'RegionesController@provincias');
/*Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
