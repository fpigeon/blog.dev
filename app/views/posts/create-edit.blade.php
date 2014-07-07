@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
    @if (isset($post))
        <h1>Edit Post</h1>
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
    @else
        <h1>New Blog Post</h1>
        {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
    @endif
        <!-- errors on page -->
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        {{ $errors->first('body', '<span class="help-block">:message</span>') }}
        <!-- new form  -->
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title') }}
        <br>
        {{ Form::file('image') }}
        <h5>Uploaded images are recommeded to be 200px by 200px</h5>
        {{ Form::label('body', 'Blog Content') }}
        <!-- <label for="body">Blog Body</label> -->
        <br>
        {{ Form::textarea('body', null, array('cols' => '30', 'rows' => '10', 'placeholder' => 'Blog Content') )}}
        <br>

        {{ Form::submit('Save Post') }}
        <!-- <button type="submit" class="button">Create New Blog</button> -->
    {{ Form::close() }}

</div>

@stop