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
<div id="social" class="social__blog">
    <div class="container">
        <div class="row centered">
            <div class="col-xs-6 col-md-3">
                <a href="https://twitter.com/fpigeonjr" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="https://github.com/fpigeon" target="_blank"><i class="fa fa-github"></i></a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="https://www.linkedin.com/in/frankpigeonjr" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="mailto:frank.pigeonjr@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
            </div>
        </div><! --/row -->
    </div><! --/container -->
</div><! --/social -->

<div id="footerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-md-4">
                <p><b>WEB DEVELOPER & COFFEE ADDICT</b></p>
            </div>

            <div class="col-md-4">
                <p>Living in amazing Ft. Worth, Texas.</p>
            </div>
            <div class="col-md-4">
                <a class="footer-link" href="mailto:frank.pigeonjr@gmail.com" target="_blank">frank.pigeonjr@gmail.com</a>
            </div>
        </div>
    </div>
</div><! --/footerwrap -->

@stop
