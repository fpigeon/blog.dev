@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
    <div class=".col-md-6 col-md-offset-2">
        @if ($post->canManagePost() )
            <a href="{{ action('PostsController@edit', $post->id) }}"><h1>{{{ $post->title }}}</h1> </a>
        @else
            <h1 class="post-title">{{{ $post->title }}}</h1>
        @endif
        <!-- display post content   -->
        <h5 class="post-date"> {{{ $post->created_at->format('l, F jS Y @ h:i A') }}} </h5>
        <h6 class="post-author"> {{{ $post->created_at->diffForHumans() }}} by {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</h6>
        <!-- post image -->
        @if ($post->img_path)
            <!-- show image here -->
            <img src=" {{{ $post->img_path }}}" class="img-responsive post-image">
        @endif
        <div class="post-content"> {{ $post->renderBody() }} </div>
        <a class="btn btn-primary" href="{{ action('PostsController@index') }}"><i class="fa fa-long-arrow-left"></i> Back to All Posts</a>
        <!-- delete post button -->
        @if ($post->canManagePost() )
        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
            <!--{{ Form::submit('Delete') }}-->
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        {{ Form::close() }}
        @endif
    </div>
</div>

@stop

@section('footer')
    @include('includes.footer')
@stop
