@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
	<a href="{{ action('PostsController@edit', $post->id) }}"><h1>{{{ $post->title }}}</h1>	</a>
	<!-- display post content   -->		
	<h5> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}} </h5>
	<p>	{{{ $post->created_at->diffForHumans() }}} </p>
	<p> {{{ $post->body }}} </p>	
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
		{{ Form::submit('Delete') }}
	{{ Form::close() }}
</div>
@stop