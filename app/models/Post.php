<?php

class Post extends BaseModel {

	// the db table this model realtes to
    protected $table = 'posts';

    // validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100 ',
    	'body' => 'required|max:100'
    ];

    public function user()
	{
    	return $this->belongsTo('User');
	}// end of user
} // end of Post model for our blog posts db
