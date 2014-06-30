@extends('layouts.master')
@section('content')
<h1>New Blog Post</h1>
<form action="{{{ action('PostsController@store') }}}" method="POST">
	<label for="title">Blog Title</label>
    <input id="title" name="title" type="title" placeholder="blog title" value="{{{	Input::old('title') }}}">
    <br>
	<label for="body">Blog Body</label>
	<br>
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Blog Content">{{{ Input::old('body') }}}</textarea>
    <br>
    <button type="submit" class="button">Create New Blog</button>
</form>
@stop