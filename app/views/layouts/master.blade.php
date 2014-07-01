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
    <!-- Custom styles for this template -->
    <!-- <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->
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
<body>
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