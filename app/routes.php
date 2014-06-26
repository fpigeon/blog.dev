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
Route::get('/', function(){
	return View::make('temp.my-first-view');
});

Route::get('/sayhello/{name}', function($name)
{
	$data = [
    	'name' => $name
    ];

    if ($name == "Chris")
    {
        return Redirect::to('/');
    }
    else
    {
        return View::make('temp.my-first-view')->with('name', $name);
        //return View::make('temp.my-first-view')->with($data);
    }


});


// Create a route for your resume page at the path '/resume' that returns 'This is my resume'.
// Create a route for your portfolio page at the path '/portfolio' that returns 'This is my portfolio'.
Route::get('/resume', function(){
	return 'This is my resume';
});
Route::get('/portfolio', function(){
	return 'This is my portfolio';
});
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