<!DOCTYPE html>
<html>
<head>

	<title>P2 XKCD Password Generator</title>
	<meta charset="utf-8">
	// <?php require 'logic.php'; ?>

</head>

<body>


<?php
// check if form has been submitted
if (isset($_GET['generate'])) {
	// how many words requested - default value is 4
	$howManyWords=$_GET['howManyWords'];
	// check if we should include characters or digits - default value is true
	$includeCharacters=$_GET['includeCharacters'];
	// store the dictionary file into an array
	$dictionary = file('dictionary.txt');
	// pull a random key from the dictionary array
	$randomKey = array_rand($dictionary, $howManyWords);
	// loop over the number of words requested
	for ($i=0;$i<$howManyWords;$i++) {
		// bold odd numbered words to increase readability
		if ($i % 2 == 1) {	
			// trim space from the word in case there is space
			$randomStr .= "<strong>".trim($dictionary[$randomKey[$i]])."</strong>";
		} else {
			$randomStr .= trim($dictionary[$randomKey[$i]]);
		}
	}
	if ($includeCharacters=="yes") {
		// pull random digit or symbol from this string
		$characters="1234567890!@#$%^&*()_+";
		$randomChar = $characters[rand(0, strlen($characters)-1)];
		$randomStr.=$randomChar;
	}
	// output
	echo $randomStr;
} else {
	echo "<form>";
	echo "<input type='hidden' name='generate' />";
		echo "<table>";
			echo "<tr>";
				echo "<td>How Many Words?</td>";
				echo "<td><input type='text' name='howManyWords' value='4'/></td>";
			echo "</tr>";
				echo "<td><div align='right'><input type='checkbox' name='includeCharacters' value='yes' checked/></div></td>";
				echo "<td>Include Characters in the Password?</td>";		
			echo "<tr>";
				echo "<td colspan='2' align='right'><input type='submit' value='Generate Random Password'/></td>";
			echo "</tr>";						
		echo "</table>";
	echo "</form>";
}
?>
		
	</body>
</html>
