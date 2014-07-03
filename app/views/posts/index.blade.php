@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop

@section('content')
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
        <!-- <h2>{{{  $post->title }}}</h2> -->
        <h2>{{ link_to_action('PostsController@show', $post->title, array($post->id) ) }} </h2>
        <!-- <p>{{{$post->body }}}</p>       -->
        <!-- <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-small">Edit</a> -->
    @endforeach
    <a href="{{ action('PostsController@create') }}" class="btn btn-default btn-small">New Post</a>
    @if ($isSearchFound)
    <a href="{{ action('PostsController@index') }}" class="btn btn-default btn-small">All Posts</a>
    @endif
    <!-- pagination -->
    {{ $posts->links() }}

</div>

@stop