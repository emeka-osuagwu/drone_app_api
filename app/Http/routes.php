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

Route::group(['prefix' => 'api/v1'], function () {

	Route::post('login', [
		'uses' 	=> 'Auth\AuthController@postLogin',
		'as' 	=> 'api.v1.login'
	]);

	Route::post('register', [
		'uses' 	=> 'Auth\AuthController@postRegister',
		'as' 	=> 'api.v1.register'
	]);

	Route::group(['prefix' => 'video'], function () {

		Route::get('create', function (){
			return view('upload');
		});	
		
		Route::post('create', [
			'uses' 	=> 'VideoController@postUpdateVideo',
			'as' 	=> 'api.v1.video.create'
		]);	

	});

});
