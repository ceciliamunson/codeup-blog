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

	// public function __construct()
	// {
		// include parent constructor
		// parent::__construct();
// 
		// Run an auth filter before all methods except index and show
		// $this->beforeFilter('auth', ['except' => ['index', 'show']]);
	// }

	public function showWelcome()
	{
		return View::make('welcome');
	}

	public function showResume()
	{
		return View::make('resume'); 
	}

	public function showPortfolio()
	{
		return View::make('portfolio'); 
	}

	public function showContact()
	{
		return View::make('contact'); 
	}

	public function showLogin()
	{
		return View::make('login'); 
	}

	public function doLogin()
	{

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			Session::flash('successMessage', 'Login succesful!');
		    return Redirect::intended('/posts');
		}
		else
		{
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Login failed, please check your inputs');
		    return Redirect::back()->withInput();
		}

    	
	}

	public function logout()
	{
		Auth::logout(); 
		return Redirect::action('PostsController@index');
	}
		
}