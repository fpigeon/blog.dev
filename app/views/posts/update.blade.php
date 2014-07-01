@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
	<h1>New Blog Post</h1>	
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}
	
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}	
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		<!-- <label for="title">Blog Title</label>
	    <input id="title" name="title" type="title" placeholder="blog title" value="{{{	Input::old('title') }}}"> -->
	    <br>
	    {{ Form::label('body', 'Blog Content') }}
		<!-- <label for="body">Blog Body</label> -->
		<br>		
		{{ Form::textarea('body', null, array('cols' => '30', 'rows' => '10', 'placeholder' => 'Blog Content') )}}
	    <!-- <textarea name="body" id="body" cols="30" rows="10" placeholder="Blog Content">{{{ Input::old('body') }}}</textarea> -->
	    <br>
	    {{ Form::submit('Update Blog Post') }}
	    <!-- <button type="submit" class="button">Create New Blog</button> -->
	{{ Form::close() }}
</div>

@stop