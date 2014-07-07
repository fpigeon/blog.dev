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
    } //end of showResume

    public function showPortfolio()
    {
        return View::make('portfolio');
    } //end of showPortfolio

    public function showConnect()
    {
        return View::make('connect');
    } //end of showConnect

    //example from class
    public function showWelcome()
    {
        return Redirect::action('HomeController@sayHello', ['codeUp']);
    } //end of showWelcome

} // end of Home Controller