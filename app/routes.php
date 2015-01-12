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

Route::get('/', array(
	'as'=>'home',
	'uses'=>'HomeController@home'	
));

Route::get('/posts/{slug}',[
	'as'=>'post-show',
	'uses'=>'PostController@getShow'
	]);

// =======================
//
// Vartotojo profiliai - GET
//
// =======================

Route::get('/profile', array('as'=>'profile-user', function() {
    return View::make('profile.profile');
}));

Route::get('/edit-profile', array('as'=>'edit-profile', function(){
    return View::make('profile.edit');
}));

// ========================



Route::get('/about', function(){
	return View::make('about');
});


Route::get('/todo', function(){
	return View::make('todo');
});

// Route::get('/login', function(){
// 	return View::make('login');
// });

Route::get('/login', array(
	'as' => 'login',
	'uses'=> 'HomeController@getLogin'
	));

Route::get('/register', array(
	'as' => 'register',
	'uses'=> 'HomeController@getRegister'
));

Route::get('/forgot', array(
	'as' => 'forgot',
	'uses'=> 'HomeController@getForgot'
));


/* 
Authenticated group
*/

Route::group(array('before' => 'auth'), function(){

	// CSRF protection group

	Route::group(array('before'=>'csrf'), function(){

		/* 
		Change Password (POST)
		*/
	Route::post('/account/change-password', array(
		'as'=> 'account-change-password-post',
		'uses' => 'AccountController@postChangePassword'
		));
		/* 
		Change Profile (POST)
		*/
	Route::post('/edit-profile', array(
		'as'=> 'edit-profile-post',
		'uses' => 'AccountController@postEditProfile'
		));

	});

		/* 
		Change Password (GET)
		*/
	Route::get('/account/change-password', array(
		'as'=> 'account-change-password',
		'uses' => 'AccountController@getChangePassword'

		));


	/**
	SHOP
	*/
	Route::get('/shop', array(
		'as' => 'getShop',
		'uses' => 'ShopController@getShop'
		));

	/**
	FORUM
	*/

	Route::get('/forum', array(
		'as' => 'getForum',
		'uses' => 'ForumController@getForum'
		));

	/** 
	Sign out (GET)
	*/
	Route::get('/account/sign-out', array(
		'as'=> 'account-sign-out',
		'uses'=>'AccountController@getSignOut'
		));
	/**
	USER PROFILE (GET)
	*/
	// Route::get('/user/{username}', array(
	// 'as'=> 'profile-user',
	// 'uses'=>'AccountController@user'
	// ));
	
	Route::get('/profile', array('as'=>'profile-user', function() {
		return View::make('profile.profile');
	}));

	Route::get('/edit-profile', array('as'=>'edit-profile', function(){
		return View::make('profile.edit');
	}));
	
	/**
	UPLOAD
	*/

	Route::get('/upload', array('uses'=>'UploadController@getUpload', 'as'=>'getUpload'));
	Route::post('/upload', array('uses'=>'UploadController@postUpload', 'as'=>'postUpload'));

	/**
    SHOW IMAGES
	*/
	

});







/* 
Unauthenticated group
*/
Route::group(array('before'=>'quest'), function(){

	// CSRF protection group

	Route::group(array('before'=>'csrf'), function(){

			// Create Account (POST)

			Route::post('/account/create', array(
				'as'=>'account-create-post',
				'uses' => 'AccountController@postCreate'
				
				));

			// Sign In (POST)
			Route::post('/account/signin', array(
				'as'=>'account-sign-in-post',
				'uses' => 'AccountController@postSignIn'
				));

			// Forgot Password (POST)
			Route::post('/account/forgot-password', array(
				'as' => 'account-forgot-password-post',
				'uses'=>'AccountController@postForgotPassword'
				));
	});

// Forgot Password (GET)
	Route::get('/account/forgot-password', array(
		'as' => 'account-forgot-password',
		'uses'=>'AccountController@getForgotPassword'
		));

	Route::get('/account/recover/{code}', array(
		'as' => 'account-recover',
		'uses' => 'AccountController@getRecover'
		));


	// Sign In (GET)
	Route::get('/account/signin', array(
		'as'=>'account-sign-in',
		'uses' => 'AccountController@getSignIn'
		));


	// Create Account (GET)

	Route::get('/account/create', array(
		'as'=>'account-create',
		'uses' => 'AccountController@getCreate'
		
		));

	Route::get('/account/activate/{code}', array(
		'as'=>'account-activate',
		'uses' => 'AccountController@getActivate'

		));


});