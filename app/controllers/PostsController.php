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
            $post = new Post();
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->save();

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
    public function show($id)
    {
        $post = Post::findorFail($id);
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
        return View::make('posts.create-edit')->with('post', $post);
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
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->save();

            Session::flash('successMessage', 'Post updated created');
            return Redirect::action('PostsController@show', $post->id)->with('post', $post);
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
        $post->delete();
        Session::flash('successMessage', 'Post successfully deleted');
        return Redirect::action('PostsController@index');
    }  //end of destroy function

} //end of PostController
