@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container col-md-8 col-md-offset-2">
	<a href="{{ action('PostsController@edit', $post->id) }}"><h1>{{{ $post->title }}}</h1>	</a>
	<!-- display post content   -->
	<h5> {{{ $post->created_at->format('l, F jS Y @ h:i A') }}} </h5>
	<h6>	{{{ $post->created_at->diffForHumans() }}} by {{{ $post->user->email }}}</h6>
	<p> {{ $post->renderBody() }} </p>
	@if ($post->img_path)
		<!-- show image here -->
		<img src=" {{{ $post->img_path }}}" class="img-responsive">
	@endif
	<!-- delete post button -->
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
		<!--{{ Form::submit('Delete') }}-->
		<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	{{ Form::close() }}
</div>
@stop