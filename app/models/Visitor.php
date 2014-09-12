<?php

class Visitor extends BaseModel {

	// the db table this model realtes to
    protected $table = 'visitors';

    // validation rules for our model properties
    static public $rules = [
        'first_name' => 'required|max:50',
        'last_name' => 'required|max:50',
        'email' => 'required|unique:visitors',
        'phone_number' => 'required',
        'street' => 'required|max:50',
        'city' => 'required',
        'state' => 'required',
        'zip' => 'required|digits:5',
        'find' => 'required',
        'budget' => 'required',
        'recaptcha_response_field' => 'required|recaptcha'
    ];

} // end of Visitor model