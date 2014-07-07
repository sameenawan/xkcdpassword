<!DOCTYPE html>
<html>
<head>

	<title>P2: XKCD Password Generator</title>
	<meta charset="utf-8">

	<link rel='stylesheet' href='' type='text/css'>

	<?php require 'logic.php'; ?>

</head>
<body>

<h2>Sameen's XKCD Password Generator</h2>
<p>Please use the below criteria to create a random secure password. It is found that XKCD passowrds are very secure and easy to remember. This app will generate a random password based on the following criteria you select.</p>


	<form action='index.php' method='GET'>
		
 		# of Words: <input type='text' name='numwords' maxlength =1 value = <?echo empty($_GET)? 4 : $_GET['num_words']?> >(max 9)<br>


		Include a number: <input type='checkbox' name='num' <?echo isset($_GET['num'])?>><br>


		Include a special symbol: <input type='checkbox' name='symbol' <?echo isset($_GET['symbol'])?>><br>
		Upper case first Letter: <input type='checkbox' name='uppercase' <?echo isset($_GET['uppercase'])?>><br>
		<input type='submit' name='Getpw' value='Generate Password'>
	</form>


		<BR><BR>Password is: <?php echo $result ?> <br>	
<h3><?echo $password?></h3>

<BR><BR><BR>


<p>The logic of an XKCD Password</p>
<img src="password_strength.png" alt = 'XKCD password generator comic'>
	



	</body>
</html>