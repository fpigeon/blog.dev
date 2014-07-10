@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="row">
        <div class="col-md-offset-6">
            @if (Auth::check())
                 <!-- show user email -->
                 <span class="glyphicon glyphicon-user"></span>{{ auth::user()->email }}
                 <!-- show create post -->
                 <a href="{{ action('PostsController@create') }}" class="btn btn-primary btn-sm" alt="New Post"><span class="glyphicon glyphicon-bullhorn"></span> New Post</a>
                 <!-- show logout -->
                 <a href="{{ action('HomeController@logout') }}" class="btn btn-danger btn-sm" alt="Log Out"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
            @else
                 <!-- show login -->
                 <a href="{{ action('HomeController@showLogin') }}" class="btn btn-primary" alt="Log In"><span class="glyphicon glyphicon-log-in"></span> Log In</a>
            @endif
        </div>

    </div>
    <div>
        <h1>All Blog Posts</h1>
        <!-- search field -->
        {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
            {{ Form::label('search', 'Search Posts') }}
            {{ Form::text('search') }}
            {{ Form::submit('Search') }}
        {{ Form::close() }}

        <!-- display all posts -->
        @foreach ($posts as $post)
            <h2>{{ link_to_action('PostsController@show', $post->title, array($post->id) ) }} </h2>
            <h5>written by {{ $post->user->first_name }} {{ $post->user->last_name }}</h5>
        @endforeach

        <!-- show all posts button on return of a search -->
        @if ($isSearchFound)
        <a href="{{ action('PostsController@index') }}" class="btn btn-primary btn-small">All Posts</a>
        @endif
        <!-- pagination -->
        {{ $posts->links() }}
    </div>
</div>



@stop