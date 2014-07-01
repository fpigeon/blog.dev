@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
	<h1>{{{ $post->title }}}</h1>
	<!-- display post content   -->		
	<p>	{{{ $post->created_at }}}</p>
	<p>{{{ $post->body }}}</p>
	<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-small">Edit</a>
</div>
@stop