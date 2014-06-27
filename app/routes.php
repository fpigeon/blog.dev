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
Route::get('/', 'HomeController@sayHello');
Route::get('/sayhello/{name}', 'HomeController@sayHello');
// Routes for blog project
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');

//Create a route that responds to a GET request on the path /rolldice.
//Within the route, return a random number between 1 and 6.
// Modify the route to take in a parameter named guess. Someone will access the route
// by visiting http://blog.dev/rolldice/1, where 1 is their guess.
// Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.
Route::get('/rolldice/{guess}', function($guess){
	$random_num =  rand (1, 6);
	$data = [
		'random' => $random_num,
		'guess' => $guess
	];
	return View::make('temp.roll-dice')->with($data);
});
//posts conreoller
Route::resource('posts', 'PostsController');