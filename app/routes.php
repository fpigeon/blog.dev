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

//Routes for blog project
Route::get('/env', function(){
	return $_SERVER['APP_ENV'];
});
Route::get('/', 'HomeController@showPortfolio');
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/connect', 'HomeController@showConnect');
Route::get('/whack', 'HomeController@showWhack');
Route::get('/contact', 'HomeController@showContact');

//Login and logout
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');

//Restful controllers
Route::resource('posts', 'PostsController');
Route::resource('visitors', 'VisitorController');
