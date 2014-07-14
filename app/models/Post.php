<?php

class Post extends BaseModel {

	// the db table this model realtes to
    protected $table = 'posts';
    protected $imgDir = 'img-upload';

    // validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:5000'
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

    public static function findBySlug($slug)
    {
        $post = self::where('slug', $slug)->first();
        return ($post == null) ? App::abort(404) : $post;
    }


    public function setSlugAttribute($value)
    {
        $value = str_replace(' ', '-', trim($value));
        $this->attributes['slug'] = strtolower($value);
    }

} // end of Post model for our blog posts db