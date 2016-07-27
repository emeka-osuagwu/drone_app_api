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
	return view('index');
});	

Route::group(['prefix' => 'api/v1'], function () {

	// Route::get('/', function (){
	// 	return "Hello world :), not that I care";
	// });

	Route::get('/', function ()
	{
		return view('upload');
	});		

	Route::post('login', [
		'uses' 	=> 'Auth\AuthController@postLogin',
		'as' 	=> 'api.v1.login'
	]);

	Route::post('register', [
		'uses' 	=> 'Auth\AuthController@postRegister',
		'as' 	=> 'api.v1.register'
	]);

	Route::get('videos', [
		'uses' 	=> 'VideoController@getAllVideo',
		'as' 	=> 'api.v1.videos'
	]);

	Route::group(['prefix' => 'video'], function () {

		Route::get('create', function (){
			return view('upload');
		});	
		
		Route::post('create', [
			'uses' 	=> 'VideoController@postUploadVideo',
			'as' 	=> 'api.v1.video.create'
		]);	
		
		Route::get('{id}', [
			'uses' 	=> 'VideoController@getVideo',
			'as' 	=> 'api.v1.video.{id}'
		]);

		Route::post('{id}/delete', [
			'uses' 	=> 'VideoController@delete',
			'as' 	=> 'api.v1.video.{id}.delete'
		]);	

	});

	Route::get('users', [
		'uses' 	=> 'UserController@getAllUser',
		'as' 	=> 'api.v1.users'
	]);

	Route::group(['prefix' => 'user'], function () {

		Route::get('{id}', [
			'uses' 	=> 'UserController@getUser',
			'as' 	=> 'api.v1.{id}'
		]);	

		Route::get('{id}/videos', [
			'uses' 	=> 'UserController@getUserVideo',
			'as' 	=> 'api.v1.{id}.videos'
		]);	

	});

});
