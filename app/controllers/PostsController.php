<?php

class PostsController extends \BaseController {

    public function __construct()
    {
        // call base controller constructor
        parent::__construct();

        // run auth filter before all methods on this controller except index and show
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    } // end __construct

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $searchField = Input::get('search');
        $posts = Post::with('user')->where ('title', 'LIKE', '%' . $searchField . '%' )->orderBy('created_at', 'desc')->paginate(4);
        $isSearchFound = ($searchField != '') ? TRUE : FALSE ;
        $data = [
            'posts'=> $posts,
            'isSearchFound' => $isSearchFound
        ];
        //return ('Show a list of all posts');
        return View::make('posts.index')->with($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return ('Show a form for creating a post');
        return View::make('posts.create-edit');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), Post::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Post failed');
            return Redirect::back()->withInput()->withErrors($validator);
        } // if it fails
        else
        {
            //return $purifier->purify($value);
            $post = new Post();
            $post->user_id = Auth::user()->id;
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->slug = Input::get('title');
            $post->save();
            if (Input::hasFile('image') && Input::file('image')->isValid())
            {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            } //end if

            Session::flash('successMessage', 'Post successfully created');
            return Redirect::action('PostsController@index');
        } //end of else
    } // end of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        //$post = Post::where('slug', $slug)->firstOrFail();
        $post = Post::findBySlug($slug);
        return View::make('posts.show')->with('post', $post);
    } // end of function show


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if ($post->canManagePost() )
        {
            return View::make('posts.create-edit')->with('post', $post);
        }
        else
        {
            Session::flash('errorMessage', 'Access Denied');
            return Redirect::action('PostsController@index');
        }
    } // end of function edit


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $validator = Validator::make(Input::all(), Post::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Post failed');
            return Redirect::back()->withInput()->withErrors($validator);
        } // end of if it fails
        else
        {
            $post = Post::find($id);
            if ($post->canManagePost() )
            {
                $post->title = Input::get('title');
                $post->body = Input::get('body');
                $post->slug = Input::get('title');
                $post->save();
                if (Input::hasFile('image') && Input::file('image')->isValid())
                {
                    $post->addUploadedImage(Input::file('image'));
                    $post->save();
                } //end if

                Session::flash('successMessage', 'Post updated created');
                return Redirect::action('PostsController@show', $post->slug)->with('post', $post);
            }
            else
            {
                Session::flash('errorMessage', 'Access Denied');
                return Redirect::action('PostsController@index', $jobs->id);
            }

        } //end of else
    } // end of update function


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id);
        if ($post->canManagePost() )
        {
            $post->delete();
            Session::flash('successMessage', 'Post successfully deleted');
            return Redirect::action('PostsController@index');
        }
        else
        {
            Session::flash('errorMessage', 'Access Denied');
            return Redirect::action('PostsController@index');
        }
    }  //end of destroy function

} //end of PostController
