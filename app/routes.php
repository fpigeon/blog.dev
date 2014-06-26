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
// Route::get('/', function(){
// 	return 'we are home';
// });


// Route::get('/sayHello/{name}', function($name)
// {
// 	if ($name == "frank")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });

// Create a route for your resume page at the path '/resume' that returns 'This is my resume'.
// Create a route for your portfolio page at the path '/portfolio' that returns 'This is my portfolio'.
Route::get('/resume', function(){
	return 'This is my resume';
});
Route::get('/portfolio', function(){
	return 'This is my portfolio';
});