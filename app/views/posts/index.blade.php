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
    <div class="container col-md-8">
        <div class="row">
            <h1>All Blog Posts</h1>
            <!-- search field -->
            {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
                {{ Form::label('search', 'Search Posts') }}
                {{ Form::text('search') }}
                <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
            {{ Form::close() }}
        </div>

        <div class="container desc">
             <!-- display all posts -->
            @foreach ($posts as $post)
                <h2>{{ link_to_action('PostsController@show', $post->title, array($post->slug) ) }} </h2>
                <h5>written by {{ $post->user->first_name }} {{ $post->user->last_name }}</h5>
                <hr>
                <h5><span class="glyphicon glyphicon-time"></span> Posted on {{{ $post->created_at->format('l, F jS Y @ h:i A') }}}</h5>
                <hr>
                <p> {{ Str::limit($post->renderBody(), 200) }} </p>
            @endforeach

            <!-- show all posts button on return of a search -->
            @if ($isSearchFound)
            <a href="{{ action('PostsController@index') }}" class="btn btn-primary btn-small">All Posts</a>
            @endif
            <!-- pagination -->
            {{ $posts->links() }}
        </div>

    </div>
</div>



@stop