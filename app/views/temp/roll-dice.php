<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll Dice</title>
</head>
<body>
	<h1>Roll Dice</h1>
	Your guess is <?=$guess;?> 
	<br> 
	The roll of the dice is <?=$random;?>
	<br> 
	<? if ($guess == $random) : ?>
		Your guess was right! Yay!
	<? endif; ?>
</body>
</html>