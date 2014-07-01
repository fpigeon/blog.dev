@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
	<h1>{{{ $post->title }}}</h1>
	<!-- display post content   -->		
	<h5>	{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h5>
	<p>	{{{ $post->created_at->diffForHumans() }}}</p>

	<p>{{{ $post->body }}}</p>
	<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-small">Edit</a>
</div>
@stop