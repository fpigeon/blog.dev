@extends('layouts.master')
@section('content')
<div class="container">
	<h1>All Blog Posts</h1>
		
	@foreach ($posts as $post)
		<h2>{{{  $post->title }}}</h2>
		<p>{{{$post->body }}}</p>
	@endforeach
</div>

@stop