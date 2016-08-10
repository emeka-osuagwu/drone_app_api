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



Route::get('/', function (){
	return view('app.pages.index');
});

Route::post('login', [
	'uses' 	=> 'Auth\AuthController@postLogin',
	'as' 	=> 'api.v1.login'
]);

Route::get('login', [
	'uses' 	=> 'PagesController@login',
	'as' 	=> 'api.v1.login'
]);

Route::get('register', [
	'uses' 	=> 'PagesController@register',
	'as' 	=> ''
]);

Route::post('register', [
	'uses' 	=> 'Auth\AuthController@postRegister',
	'as' 	=> 'api.v1.register'
]);
