@extends('layouts.master')

@section('topscript')
<!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stop

@section('content')
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
                <a href="https://github.com/fpigeon/Web_Todo_List"><img src="assets/img/portfolio/todo.jpg" class="img-responsive"></a>
                <h4>Todo List</h4>
                <p>
                    The application was built using PHP, MySQL, HTML and CSS and it allows for adding new items, removing completed items, and uploading a todo list.
                </p>
                <p>
                    <!-- <a href="#" class="btn btn-warning" role="button" target="_blank"> View Live <span><i class="fa fa-play-circle"></i></span></a> -->

                    <a href="https://github.com/fpigeon/Web_Todo_List" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="https://github.com/fpigeon/Codeup_Web_Exercises/blob/master/public/address_book.php"><img src="assets/img/portfolio/address.jpg" class="img-responsive"></a>
                <h4>Address Book</h4>
                <p>
                    The application was built using PHP, MySQL, HTML and CSS and it allows for adding new addresses, removing completed addresses, and uploading an exisiting address book.
                </p>
                <p>
                    <!-- <a href="#" class="btn btn-warning" role="button" target="_blank"> View Live <span><i class="fa fa-play-circle"></i></span></a> -->

                    <a href="https://github.com/fpigeon/Codeup_Web_Exercises/blob/master/public/address_book.php" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="{{{ action('HomeController@showWhack') }}}"><img src="assets/img/portfolio/whack_a_mole.jpg" class="img-responsive"></a>
                <h4>Whack-A-Mole</h4>
                <p>
                    The game randomly has moles pop out of holes and the object of the game is to hit the moles and have them go back in their hole. Bonus features include timer and high score.  Written in jQuery, HTML, and CSS.
                </p>
                <p>
                    <a href="{{{ action('HomeController@showWhack') }}}" class="btn btn-warning" role="button" target="_blank"> View Live <span><i class="fa fa-play-circle"></i></span></a>

                    <a href="https://github.com/fpigeon/Codeup_Web_Exercises/blob/master/public/whack.html" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="https://github.com/fpigeon/High_Low"><img src="assets/img/portfolio/code.jpg" class="img-responsive"></a>
                <h4>High Low Game</h4>
                <p>
                    The game picks a random number between 1 and 100. It prompts the user to take a guess and outputs higher, lower, or good guess. Written in PHP.
                </p>
                <p>
                    <a href="https://github.com/fpigeon/High_Low" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="https://github.com/fpigeon/Regis-University-CS-classwork"><img src="assets/img/portfolio/regis.jpg" class="img-responsive"></a>
                <h4>Regis University Classwork</h4>
                <p>
                    Check out my project exercises for the Computer Science courses I completed at Regis University. Written in C++.
                </p>
                <p>
                    <a href="https://github.com/fpigeon/Regis-University-CS-classwork" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></span></a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery">
                <a href="https://github.com/fpigeon/CodeUp_Exercises/blob/master/fizzbuzz.php"><img src="assets/img/portfolio/code.jpg" class="img-responsive"></a>
                <h4>Fizz Buzz Challenge</h4>
                <p>
                    The application prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Written in PHP.
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
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <a href="https://twitter.com/fpigeonjr" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="https://github.com/fpigeon" target="_blank"><i class="fa fa-github"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="https://www.linkedin.com/in/frankpigeonjr" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="col-md-2">
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
                    <p>Living in amazing San Antonio, Texas.</p>
                </div>
                <div class="col-md-4">
                    <a href="mailto:frank.pigeonjr@gmail.com" target="_blank"><p>frank.pigeonjr@gmail.com</p></a>
                </div>
            </div>
        </div>
    </div><! --/footerwrap -->
@stop