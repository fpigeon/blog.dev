<!--
To build this game, follow these steps:
* Create your HTML markup and CSS to position your holes. These will be element that your mole will pop in and out of.
* Randomly select a hole on page load and change its background color to red. You may want to nest another element, and use an animated method like .fadeIn().
* Change the red background to use an image. This could be a mole, or any other image you'd like to use.
* Update the code to remove the mole when it is clicked.
* Add score. Each time the mole is successfully clicked, increase the displayed score by 1.

Bonus
* Add a start button. Don't start the game until the button is pressed.
* Add a timer. Only allow clicks during the period. If the timer is 30 seconds, the game should quit recording clicks after 30 seconds, and should activate the start button. Clicking the start button should reset the game.
* Keep the high score for the round. This does not need to persist between page loads, although it could if you wanted it to.
* Make the moles appear more often after each click.
 -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Whack-A-Mole</title>
    <style>
        body{
            background-color: #534557;
        }
        h1{
            color: white;
            text-align: center;
        }
        .mole{
            height: 195px;
            width: 260px;
            display: none;
            cursor: pointer;
        }
        .hole{
            border: 1px;
            height: 200px;
            width: 267px;
            padding: 0px;
            border: 4px solid #FF814A;
            background-color: #785D6B;
            float: left;
        }
        #main_container{
            border: 1px;
            height: 625px;
            width: 825px;
            padding: 10px;
            margin: 10px;
            border: 4px solid #FFF;
            color: white;
            margin-left: auto;
            margin-right: auto;
        }
        #start_button{
            color: white;
            background-color: #FF814A;
            width: 100px;
            height: 50px;
        }
        #header{
            width: 825px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        #running_totals{
            font-size: 30px;
            color:white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Whack-A-Mole</h1>
        <div id="running_totals">
            <span id="running_total">Score: 0</span>
            <span id="timer">Time: 0</span>
            <span id="high_score">High Score: 0</span>
        </div>
        <span><button id="start_button">START GAME</button></span>
    </div>

    <!-- main container div -->
    <div id="main_container">
        <div class="hole" id="hole1">
            <img id="mole1" class="mole" src="/img/mole.png" alt="mole1">
        </div>
        <div class="hole" id="hole2">
            <img id="mole2" class="mole" src="/img/mole.png" alt="mole2">
        </div>
        <div class="hole" id="hole3">
            <img id="mole3" class="mole" src="/img/mole.png" alt="mole3">
        </div>
        <div class="hole" id="hole4" style="clear:left">
            <img id="mole4" class="mole" src="/img/mole.png" alt="mole4">
        </div>
        <div class="hole" id="hole5" >
            <img id="mole5" class="mole" src="/img/mole.png" alt="mole5">
        </div>
        <div class="hole" id="hole6" >
            <img id="mole6" class="mole" src="/img/mole.png" alt="mole6">
        </div>
        <div class="hole" id="hole7" style="clear:left">
            <img id="mole7" class="mole" src="/img/mole.png" alt="mole7">
        </div>
        <div class="hole" id="hole8">
            <img id="mole8"  class="mole" src="/img/mole.png" alt="mole8">
        </div>
        <div class="hole" id="hole9">
            <img id="mole9" class="mole" src="/img/mole.png" alt="mole9">
        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        //constants
        const MIN = 1; // first box
        const MAX = 9; // last box
        const RUNTIME = 10000; //runtime for app 10 seconds
        //variables
        var random_box = 0; //assign random number
        var score = 0; //keeps track of score
        var count = 0; //start loop index
        var max_count = 10; //max loop index
        var interval = 1000; // interval time is 1 second
        var high_score = 0;

        // Returns a random integer between min and max
        // Using Math.round() will give you a non-uniform distribution!
        function getRandomInt(min, max) {
          return Math.floor(Math.random() * (max - min + 1)) + min;
        } // end of getRandomInt

        //will create a mole in the random hole
        function new_mole() {
            //get a random number
            random_box = getRandomInt(MIN, MAX);
            $(('#hole'+random_box)).children().fadeIn(1000);
            $(('#hole'+random_box)).children().fadeOut(0500);
        } //end of new_mole

        //when you click a mole add to score
        $('.mole').click(function(event) {
            event.preventDefault();
            score += 10;
            $(this).hide();
            $('#running_total').text('Score: '+score);
        }); //end of click on mole

        //start game only when you click the start button
        $('#start_button').click(function(event) {
            //disable the start button
            $('#start_button').attr("disabled", true);
            // get the start timestamp
            var start = Date.now();
            //refresh the scoree
            $('#running_total').text('Score: '+score);

            intervalId = setInterval(function () {
                if (count >= max_count || elapsed >= RUNTIME ) {
                    clearInterval(intervalId);
                    //hide all moles
                    $('.mole').hide();
                    //check to see if score is the high_score
                    if(score > high_score){
                        high_score = score;
                        $('#high_score').text('High Score: '+high_score);
                        alert('New High score: ' + high_score);
                    }
                    //clear timer, counter, score
                    elapsed = 0;
                    count = 0;
                    score = 0;
                    alert('GAME OVER');
                    $('#start_button').attr("disabled", false);
                } //end of if
                else {
                    // get the end timestamp
                    var end = Date.now();
                    // calculate the elapsed time in milliseconds
                    var elapsed = end - start;
                    //elapsed = (elapsed)
                    var time_display = Math.round((RUNTIME - elapsed) / 1000);
                    $('#timer').text('TIME: ' + time_display + ' sec');
                    count++; //increment count
                    new_mole(); // create new mole
                } //end of else
            }, interval);
        }); //end of start button
    </script>
</body>
</html>