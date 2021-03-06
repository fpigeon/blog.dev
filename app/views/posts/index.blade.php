@extends('layouts.master')

@section('bodytag')
    <body class="common blog">
@stop

@section('content')
<div class="container login">
    <!-- login bar -->
            @if (Auth::check())
                <div class="row col-md-offset-9">
                 <!-- show user email -->
                 <span class="glyphicon glyphicon-user"></span>{{ auth::user()->first_name }} {{ auth::user()->last_name }}
                 <!-- show create post -->
                 <a href="{{ action('PostsController@create') }}" class="btn btn-primary btn-sm" alt="New Post"><span class="glyphicon glyphicon-bullhorn"></span> New Post</a>
                 <!-- show logout -->
                 <a href="{{ action('HomeController@logout') }}" class="btn btn-danger btn-sm" alt="Log Out"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
            @else
                <div class="row col-md-offset-11">
                 <!-- show login -->
                 <a href="{{ action('HomeController@showLogin') }}" class="btn btn-primary" alt="Log In"><span class="glyphicon glyphicon-log-in"></span> Log In</a>
            @endif

    </div>
    <!-- side bar -->
    <div class="col-md-4 centered body-block">

        <div class="logo">
            <img src="/assets/img/avatar.png" width="100" class="img-circle" alt="profile">
        </div>
        <p class="body-block">
            <br>
            Welcome to my first blog built from scratch in Laravel, PHP, HTML, CSS, and Bootstrap.
        </p>
        <p class="body-block">
            Web Developer, Tech Enthusiast, U.S. Army veteran, bass player, father, husband, servant
        </p>


        <!-- search field -->
        {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
            {{ Form::label('search', 'Search Posts') }}
            {{ Form::text('search') }}
            <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
        {{ Form::close() }}

        <a class="twitter-timeline" href="https://twitter.com/fpigeonjr" data-widget-id="487629049158590464">Tweets by @fpigeonjr</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <!-- main posts -->
    <div class="col-md-8">
        <!-- blog content -->
        <div class="body-block">
            <h1 class="blog-title">Dev Life</h1>
            <h4 class="blog-subtitle">//random thoughts and writings by Frank Pigeon</h4>
             <!-- display all posts -->
            @foreach ($posts as $post)
                <h2 class="list-title">{{ link_to_action('PostsController@show', $post->title, array($post->slug) ) }} </h2>
                <h5 class="list-author">written by {{ $post->user->first_name }} {{ $post->user->last_name }}</h5>
                <hr>
                <h5 class="list-date"><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('l, F jS Y @ h:i A') }}</h5>
                <hr>
                 <!-- post image -->
                @if ($post->img_path)
                        <a href="{{ action('PostsController@show', array($post->slug) ) }}">
                            <img  src=" {{ $post->img_path }}" class="img-responsive list-image">
                        </a>
                @endif
                <p class="list-p"> {{ strip_tags(Str::limit($post->renderBody(), 300)) }} <a class="list-more" href="{{ action('PostsController@show', array($post->slug) ) }}">MORE</a></p>
            @endforeach

            <!-- show all posts button on return of a search -->
            @if ($isSearchFound)
            <a href="{{ action('PostsController@index') }}" class="btn btn-primary btn-small">All Posts</a>
            @endif
            <div class="row centered">
                <!-- pagination -->
                {{ $posts->links() }}
            </div>

        </div>
    </div>
</div>

@stop

@section('footer')
    @include('includes.footer')
@stop
