<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Guess The Number" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Google MDL -->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-pink.min.css" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Guess The Number</title>
	</head>
	<body>
		<!-- MDL Header -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	    	<header class="mdl-layout__header">
		        <div class="mdl-layout__header-row">
		        	<span class="mdl-layout-title">Guess The Number</span>
		        </div>
	    	</header>
			
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Guess The Number</h1></center>';
			echo '<img src="./images/Guess.jpeg" width="15%"/>';
			echo '<center><p>The computer generated a random number from 1 to 6. Try to guess it!</p>';
			echo "<center><p>Enter your guess below and find out if you were correct.</p>"; 
		?>
		<!-- Textfields -->
		<form method = "post">   
			Enter your guess! <input type="number" name="guess" step="1" min="1" max="6">   
			<br><br>   
		<!-- Button -->
		<input type = "submit" name = "enter" value="Submit">    
		<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$userGuess = $_POST['guess'];   
				$ranNumber = rand(1, 6);
				if ($userGuess == $ranNumber) {
					echo "<br><br>The number was" . $ranNumber . "You correctly guessed the number! Good job.";
				} else {
					echo "<br><br>The number was" . $ranNumber ." You did not guess the number. Try again next time.";
				}
			}
		?>
	</body>
</html>