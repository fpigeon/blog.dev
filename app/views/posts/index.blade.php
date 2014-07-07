@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop

@section('content')
<div class="container pull-right">
    @if (Auth::check())
         <!-- show user email -->
         {{ auth::user()->email }}
         <!-- show create post -->
         <a href="{{ action('PostsController@create') }}" class="btn btn-primary btn-small">New Post</a>
         <!-- show logout -->
         <a href="{{ action('HomeController@logout') }}" class="btn btn-danger btn-small">Log Out</a>
    @else
         <!-- show login -->
         <a href="{{ action('HomeController@showLogin') }}" class="btn btn-primary btn-small">Log In</a>
    @endif
</div>
<div class="container">
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
    @endforeach

    <!-- show all posts button on return of a search -->
    @if ($isSearchFound)
    <a href="{{ action('PostsController@index') }}" class="btn btn-primary btn-small">All Posts</a>
    @endif
    <!-- pagination -->
    {{ $posts->links() }}
</div>
@stop