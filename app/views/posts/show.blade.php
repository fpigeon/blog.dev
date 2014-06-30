@extends('layouts.master')
@section('content')
<div class="container">
	<h1>Blog Post {{{ $post->id }}}</h1>
	<!-- display post ocntent   -->	
	<h2>{{{ $post->title }}}</h2>
	<p>{{{ $post->body }}}</p>
</div>
@stop