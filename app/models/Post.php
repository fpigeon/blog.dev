<?php

class Post extends Eloquent {	
    
	// the db table this model realtes to
    protected $table = 'posts';
    
    // validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100 ',
    	'body' => 'required|max:100'
    ];
} // end of Post model for our blog posts db