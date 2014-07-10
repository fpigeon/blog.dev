<?php

class Post extends BaseModel {

	// the db table this model realtes to
    protected $table = 'posts';
    protected $imgDir = 'img-upload';

    // validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:500'
    ];

    public function user()
	{
    	return $this->belongsTo('User');
	}// end of user

    public function addUpLoadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }// end of addUpLoadedImage

    public function renderBody()
    {
        $dirtyHTML = Parsedown::instance()->parse($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($dirtyHTML);
    } //end of renderBody

    public function canManagePost()
    {
        return Auth::check() && (Auth::user()->is_admin || Auth::user()->id == $this->user_id);
    }

} // end of Post model for our blog posts db