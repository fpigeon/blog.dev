@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
    @if (isset($post))
        <h1>Edit Post</h1>
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
    @else
        <h1>New Blog Post</h1>
        {{ Form::open(array('action' => 'PostsController@store' )) }}
    @endif
        <!-- errors on page -->
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        {{ $errors->first('body', '<span class="help-block">:message</span>') }}
        <!-- new form  -->
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title') }}
        <br>
        {{ Form::label('body', 'Blog Content') }}
        <!-- <label for="body">Blog Body</label> -->
        <br>
        {{ Form::textarea('body', null, array('cols' => '30', 'rows' => '10', 'placeholder' => 'Blog Content') )}}
        <!-- <textarea name="body" id="body" cols="30" rows="10" placeholder="Blog Content">{{{ Input::old('body') }}}</textarea> -->
        <br>
        {{ Form::submit('Save Post') }}
        <!-- <button type="submit" class="button">Create New Blog</button> -->
    {{ Form::close() }}

</div>

@stop