@extends('layouts.master')

@section('topscript')
<!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop

@section('content')
    <div class="container">
        <div class="logo">
            <img src="/assets/img/logo.png" width="100" alt="BlackTie.co">
        </div>
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2 w">
                <h1>BlackTie.co<br/>SMPL Theme.</h1>
            </div>
        </div>
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
                <a data-toggle="tooltip" title="Dribbble" href="http://dribbble.com/CarlosAlvarez"><i class="fa fa-dribbble"></i></a>
                <a data-toggle="tooltip" title="Twitter" href="http://twitter.com/BlackTie_co"><i class="fa fa-twitter"></i></a>
                <a data-toggle="tooltip" title="Premium Themes" href="https://wrapbootstrap.com/user/Basicoh"><i class="fa fa-briefcase"></i></a>
                <a data-toggle="tooltip" title="Free Themes" href="http://BlackTie.co"><i class="fa fa-heart"></i></a>
                <a data-toggle="tooltip" title="Blog" href="http://freelance.postach.io"><i class="fa fa-comment"></i></a>
                <a data-toggle="tooltip" title="Email Me!" href="mailto:carlos@alvarez.is"><i class="fa fa-envelope"></i></a>
                <a data-toggle="tooltip" title="Newsletter" href="http://eepurl.com/Eck_T"><i class="fa fa-coffee"></i></a>
            </div>
        </div>
    </div><!-- /.container -->

    <div class="container">
        <div class="row w centered">
            <br>
            <div class="col-lg-6 col-lg-offset-3">
                <p>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p>
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
        $.backstretch("/assets/img/bg.jpg", {speed: 500});
    </script>
@stop