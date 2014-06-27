@extends('layouts.master')

@section('topscript')
<!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
@stop

@section('content')
	<!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ action('HomeController@showPortfolio') }}}">PORTFOLIO</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{{ action('HomeController@showPortfolio') }}}">Home</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}" target="_blank">Resume</a></li>
            <li><a href="#works">Works</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>HELLO WORLD, MY NAME IS</h4>										
					<h1>FRANK PIGEON</h1>
					<h4>WEB DEVELOPER & COFFEE ADDICT</h4>
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/headerwrap -->
	
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Portfolio</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="#work"><img src="assets/img/portfolio/folio01.png" class="img-responsive"></a>
				<h4>Todo List</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur, eveniet, eligendi temporibus voluptas fuga voluptatum laborum alias ea rem sint soluta. Totam, maxime, provident porro harum illum.
				</p>
				<p>
					<a href="https://github.com/fpigeon/Web_Todo_List" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="#work"><img src="assets/img/portfolio/folio02.png" class="img-responsive"></a>
				<h4>Address Book</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur, eveniet, eligendi temporibus voluptas fuga voluptatum laborum alias ea rem sint soluta. Totam, maxime, provident porro harum illum.
				</p>
				<p>
					<a href="https://github.com/fpigeon/Codeup_Web_Exercises/blob/master/public/address_book.php" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="#work"><img src="assets/img/portfolio/folio03.png" class="img-responsive"></a>
				<h4>BlackJack Challenge</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur, eveniet, eligendi temporibus voluptas fuga voluptatum laborum alias ea rem sint soluta. Totam, maxime, provident porro harum illum.
				</p>
				<p>
					<a href="https://github.com/fpigeon/blackjack" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="#work"><img src="assets/img/portfolio/folio04.png" class="img-responsive"></a>
				<h4>High Low Game</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur, eveniet, eligendi temporibus voluptas fuga voluptatum laborum alias ea rem sint soluta. Totam, maxime, provident porro harum illum.
				</p>
				<p>
					<a href="https://github.com/fpigeon/High_Low" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="#work"><img src="assets/img/portfolio/folio05.png" class="img-responsive"></a>
				<h4>Regis University Classwork</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur, eveniet, eligendi temporibus voluptas fuga voluptatum laborum alias ea rem sint soluta. Totam, maxime, provident porro harum illum.
				</p>
				<p>
					<a href="https://github.com/fpigeon/Regis-University-CS-classwork" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="#work"><img src="assets/img/portfolio/folio06.png" class="img-responsive"></a>
				<h4>Fizz Buzz Challenge</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur, eveniet, eligendi temporibus voluptas fuga voluptatum laborum alias ea rem sint soluta. Totam, maxime, provident porro harum illum.
				</p>
				<p>
					<a href="https://github.com/fpigeon/CodeUp_Exercises/blob/master/fizzbuzz.php" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
				</p>
			</div>
		</div><! --/row -->
	</div><! --/container -->						

	<div id="social">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-2">
					
				</div>
				<div class="col-lg-2">
					<a href="https://twitter.com/fpigeonjr" target="_blank"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="https://github.com/fpigeon" target="_blank"><i class="fa fa-github"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="https://www.linkedin.com/in/frankpigeonjr" target="_blank"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="mailto:frank.pigeonjr@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
				</div>			
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p><b>WEB DEVELOPER & COFFEE ADDICT</b></p>
				</div>
			
				<div class="col-lg-4">
					<p>Living in amazing San Antonio, Texas.</p>
				</div>
				<div class="col-lg-4">
					<p>frank.pigeonjr@gmail.com</p>
				</div>
			</div>
		</div>
	</div><! --/footerwrap -->
@stop