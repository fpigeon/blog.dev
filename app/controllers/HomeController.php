<?php

class HomeController extends \BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showResume()
    {
        return View::make('resume');
    }

    public function showPortfolio()
    {
        return View::make('portfolio');
    }

    public function showConnect()
    {
        return View::make('connect');
    }

    public function showWhack()
    {
        return View::make('portfolio.whack');
    }

    public function ShowContact()
    {
        return View::make('contact');
    }

    public function showLogin()
    {
        return View::make('login');
    }

    public function doLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            Session::flash('infoMessage', 'You have logged in successfully.');

            return Redirect::intended(action('PostsController@index'));
        } else {
            Session::flash('errorMessage', 'Email or Password not found.');

            return Redirect::action('HomeController@showLogin');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('infoMessage', 'You have logged out.');
        return Redirect::action('PostsController@index');
    }

}