@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop

@section('content')
<div class="container">
	<h1>All Blog Posts</h1>

	@foreach ($posts as $post)
		<!-- <h2>{{{  $post->title }}}</h2> -->
		<h2>{{ link_to_action('PostsController@show', $post->title, array($post->id) ) }} </h2>
		<!-- <p>{{{$post->body }}}</p>		 -->
		<!-- <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-small">Edit</a> -->
	@endforeach
	<!-- <h2>{{ link_to_action('PostsController@create', 'New Post')  }} </h2> -->
	<a href="{{ action('PostsController@create') }}" class="btn btn-default btn-small">New Post</a>
	{{ $posts->links() }}

</div>

@stop