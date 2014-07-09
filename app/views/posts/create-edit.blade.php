@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/pagedown/demo.css" />
    <script type="text/javascript" src="/pagedown/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Editor.js"></script>
@stop
@section('content')
<div class="container col-md-8 col-md-offset-2">
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
        <div class="wmd-panel">
            <div id="wmd-button-bar"></div>
            {{ Form::textarea('body', null, array('cols' => '45', 'rows' => '10', 'placeholder' => 'Blog Content',
            'class' => 'wmd-input', 'id' => 'wmd-input')) }}
        </div>
        <div id="wmd-preview" class="wmd-panel wmd-preview"></div>

        <button type="submit" class="btn btn-sm btn-primary">Save Post</button>
    {{ Form::close() }}

</div>

@stop

@section('bottomscript')
<script type="text/javascript">
            (function () {
                var converter1 = Markdown.getSanitizingConverter();
                var editor1 = new Markdown.Editor(converter1);
                editor1.run();
            })();
        </script>
@stop