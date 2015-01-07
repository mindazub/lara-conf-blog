<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{




		$posts=Post::paginate(3);

		return View::make('home')->with('posts', $posts);

		// return View::make('hello');
	}
	public function about(){
		return View::make('about');
	}
	public function getLogin(){
		return View::make('login');
	}
	public function getRegister(){
		return View::make('register');
	}
	public function getForgot(){
		return View::make('forgot');
	}
}
