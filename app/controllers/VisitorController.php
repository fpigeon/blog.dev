<?php

class VisitorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$visitors = DB::table('visitors')
								->orderBy('created_at', 'desc')
								->paginate(4);
		$data = [
            'visitors'=> $visitors,
        ];
        return View::make('visitors.index')->with($data);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$visitor = Visitor::findorFail($id);
        return View::make('visitors.show')->with('visitor', $visitor);
	}

	/**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), Visitor::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Something Went Wrong');
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            $visitor = new Visitor();
            $visitor->first_name = Input::get('first_name');
            $visitor->last_name = Input::get('last_name');
            $visitor->email = Input::get('email');
            $visitor->phone_number = Input::get('phone_number');
            $visitor->street = Input::get('street');
            $visitor->apt_num = Input::get('apt_num');
            $visitor->city = Input::get('city');
            $visitor->state = Input::get('state');
            $visitor->zip = Input::get('zip');
            $visitor->find = Input::get('find');
            $visitor->budget = Input::get('budget');
            $visitor->save();

        Mail::send('visitors.mails.welcome', array('first_name'=>Input::get('first_name')), function($message){
        $message->to(Input::get('email'), Input::get('first_name').' '.Input::get('last_name'))->subject('New User Has Registered');
    });
            Session::flash('successMessage', 'Thanks for registering for Happy Realtor');
            return Redirect::action('VisitorController@index');
        } //end of else
    } // end of store function

}
