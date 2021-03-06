<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Frank Pigeon's Blog'">
    <meta name="author" content="Frank Pigeon">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link href="/assets/css/main.css" rel="stylesheet">
    <title>Frank Pigeon's Blog</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Custom fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('topscript')
</head>
 @yield('bodytag')
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation" id="navbar_top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-home"></span> FSP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
                <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                <li class="{{ Request::is('resume') ? 'active' : '' }}"><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{{ action('HomeController@showContact') }}}">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('connect') ? 'active' : '' }}"><a href="{{{ action('HomeController@showConnect') }}}">Connect</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- flash messages -->
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
    @if (Session::has('infoMessage'))
        <div class="alert alert-info">{{{ Session::get('infoMessage') }}}</div>
    @endif
    <!-- body content starts here -->
    @yield('content')
    @yield('footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/smoothscroll.js"></script>
    <script src="/assets/js/Chart.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53325305-1', 'auto');
      ga('send', 'pageview');

    </script>
    @yield('bottomscript')
</body>
</html>
