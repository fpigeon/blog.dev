@extends('layouts.master')

@section('topscript')
    <!-- Custom styles for this template -->
    {{--<link href="/assets/css/connect.css" rel="stylesheet">--}}
@stop

@section('bodytag')
    <body class="common connect">
@stop

@section('content')
    <div class="container">
        <div class="logo">
            <img src="/assets/img/avatar.png" width="100" class="img-circle" alt="profile">
        </div>
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2 w">
                <h1>Frank<br/>Pigeon</h1>
            </div>
        </div>
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
                <a data-toggle="tooltip" title="Twitter" href="https://twitter.com/fpigeonjr" target="_blank"><i class="fa fa-twitter"></i></a>
                <a data-toggle="tooltip" title="Google+" href="https://www.google.com/+FrankPigeon" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a data-toggle="tooltip" title="Facebook" href="http://www.facebook.com/frank.pigeon" target="_blank"><i class="fa fa-facebook"></i></a>
                <a data-toggle="tooltip" title="Linkedin" href="https://www.linkedin.com/in/frankpigeonjr" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a data-toggle="tooltip" title="GitHub" href="https://github.com/fpigeon" target="_blank"><i class="fa fa-github"></i></a>
                <a data-toggle="tooltip" title="Blog" href="{{ action('PostsController@index') }}"><i class="fa fa-comment" target="_blank"></i></a>
                <a data-toggle="tooltip" title="Instagram" href="http://instagram.com/frankpigeonjr" target="_blank"><i class="fa fa-instagram"></i></a>
                <a data-toggle="tooltip" title="Youtube" href="http://www.youtube.com/user/frankpigeonjr" target="_blank"><i class="fa fa-youtube"></i></a>
                <a data-toggle="tooltip" title="Email" href="mailto:frank.pigeonjr@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </div><!-- /.container -->

    <div class="container">
        <div class="row w centered">
            <br>
            <div class="col-lg-6 col-lg-offset-3">
                <p>Web Developer, Tech Enthusiast, U.S. Army veteran, bass player, father, husband, servant</p>
            </div>
        </div>
    </div>
@stop

@section('bottomscript')
    <script>
        $('.tooltip-demo').tooltip({
          selector: "[data-toggle=tooltip]",
          container: "body"
        })
    </script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="/assets/js/jquery.backstretch.min.js"></script>
    <script>
        // $.backstretch("/assets/img/bg.jpg", {speed: 500});
        $.backstretch("/img/bg5.jpg", {speed: 500});
    </script>
@stop
