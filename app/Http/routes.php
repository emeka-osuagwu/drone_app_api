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


Route::group(['prefix' => 'dashboard', 'middleware' => ['isAdmin']], function () {

	
	Route::get('/', [
		'uses' 	=> 'PagesController@adminIndex',
		'as' 	=> 'dashboard'
	]);


	Route::get('videos', [
		'uses' 	=> 'VideoController@getAllVideo',
		'as' 	=> 'api.v1.videos'
	]);

	Route::group(['prefix' => 'video'], function () {

		Route::get('create', function (){
			return view('upload');
		});	
		
		Route::get('create', [
			'uses' 	=> 'PagesController@createVideo',
			'as' 	=> 'api.v1.video.create'
		]);	

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

		Route::post('update', [
			'uses' 	=> 'PostController@postUpdatePost',
			'as' 	=> 'api.v1.video.{id}.delete'
		]);	

	});




	Route::post('create', [
		'uses' 	=> 'UserController@postCreateAdminUser',
		'as' 	=> 'api.v1.posts'
	]);

});
