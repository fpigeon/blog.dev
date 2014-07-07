<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Frank Pigeon's Blog'">
    <meta name="author" content="Fank Pigeon">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <title>Frank Pigeon's Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom fonts -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('topscript')
</head>
<body style="padding-top: 70px">

    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{{ action('HomeController@showPortfolio') }}}">Frank Pigeon</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
                <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="{{{ action('HomeController@showConnect') }}}">Connect with Me</a></li> -->
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

    <!-- body content starts here -->
    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/smoothscroll.js"></script>
    <script src="/assets/js/Chart.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    @yield('bottomscript')
</body>
</html>