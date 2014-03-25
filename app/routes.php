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

Route::get('/', function()
{
	return 'hello';
});


Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/contact', 'HomeController@showContact');

Route::get('/sayhello/{name}', function($name)
{
	$data = array (
		'name' => $name
	);
    return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess}', function($guess)
{	
	$random = rand(1,6);
	$data = array (
		'random' => $random,
		'guess' => $guess
	);
	if ($random == $guess) {
		echo "You guessed the right number!";
	}
	else {
		echo "you guessed the wrong numer!";
	}

	return View::make("roll-dice")->with($data);
});

