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


Route::get('', [
	'uses' 	=> 'PagesController@indexPage',
	'as' 	=> '/'
]);
Route::get('logout', [
	'uses' 	=> 'Auth\AuthController@logout',
	'as' 	=> 'api.v1.login'
]);

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

Route::get('invalid_admin', function ()
{
	return view('errors.not_admin_user_error');
});

Route::get('video/request', [
	'uses' 	=> 'VideoRequestController@getCreateVideoRequest',
	'as' 	=> 'api.v1.register'
]);

Route::post('video/request/create', [
	'uses' 	=> 'VideoRequestController@postCreateVideoRequest',
	'as' 	=> 'api.v1.register'
]);

Route::get('videos', [
	'uses' 	=> 'PagesController@searchPage',
	'as' 	=> 'api.v1.register'
]);

Route::get('search', [
	'uses' 	=> 'PagesController@searchPage',
	'as' 	=> 'api.v1.register'
]);

Route::get('preview/{id}', [
	'uses' 	=> 'PostController@previewVideo',
	'as' 	=> 'api.v1.register'
]);

Route::get('password/forgot', [
	'uses' 	=> 'Auth\PasswordController@forgotPasswordPage',
	'as' 	=> 'api.v1.register'
]);

Route::post('password/reset', [
	'uses' 	=> 'Auth\PasswordController@resetPassword',
	'as' 	=> 'api.v1.register'
]);

Route::get('password/update{token?}', [
	'uses' 	=> 'Auth\PasswordController@resetPasswordPage',
	'as' 	=> 'api.v1.register'
])->middleware('resetToken');

Route::post('password/change', [
	'uses' 	=> 'Auth\PasswordController@reset',
	'as' 	=> 'api.v1.register'
]);


Route::post('/pay', [
    'uses' => 'PaymentController@makePayment',
    'as' => 'pay'
]);

Route::get('/payment/callback', 'PaymentController@getPaymentResponse');

Route::group(['prefix' => 'dashboard'], function () {

	
	Route::get('/', [
		'uses' 	=> 'PagesController@adminIndex',
		'as' 	=> 'dashboard'
	]);


	Route::get('videos', [
		'uses' 	=> 'VideoController@getAllVideo',
		'as' 	=> 'api.v1.videos'
	]);

	Route::group(['prefix' => 'video'], function () {

		Route::get('request', [
			'uses' 	=> 'PostController@getVideoRequest',
			'as' 	=> 'api.v1.video.request'
		]);	
		
		Route::get('create', [
			'uses' 	=> 'PagesController@createVideo',
			'as' 	=> 'api.v1.video.create'
		])->middleware('isAdmin');	

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

	Route::get('users', [
		'uses' 	=> 'PagesController@usersPage',
		'as' 	=> 'dashboard.users'
	]);

	Route::group(['prefix' => 'user'], function () {
		
		Route::get('/', [
			'uses' 	=> 'PagesController@getUser',
			'as' 	=> 'dashboard.user.create'
		]);

		Route::get('create', [
			'uses' 	=> 'PagesController@getCreateUser',
			'as' 	=> 'dashboard.user.create'
		]);	

		Route::get('/{id}', [
			'uses' 	=> 'PagesController@getUserProfile',
			'as' 	=> 'dashboard.user.create'
		]);

		Route::post('create', [
			'uses' 	=> 'UserController@postCreateAdminUser',
			'as' 	=> 'dashboard.user.create'
		]);

		Route::post('update', [
			'uses' 	=> 'UserController@postUpdateUser',
			'as' 	=> 'dashboard.user.create'
		]);

	});

	Route::get('categories', [
		'uses' 	=> 'CategoriesController@getCategoriesPage',
		'as' 	=> 'dashboard.users'
	]);

	Route::group(['prefix' => 'category'], function () {

		Route::post('create', [
			'uses' 	=> 'CategoriesController@postCreateCategory',
			'as' 	=> 'dashboard.category.create'
		]);

		Route::get('{id}/delete', [
			'uses' 	=> 'CategoriesController@deleteCategory',
			'as' 	=> 'api.v1.video.{id}'
		]);

	});

	Route::get('payments', [
		'uses' 	=> 'PaymentController@getAllPayment',
		'as' 	=> 'dashboard.users'
	]);

});
