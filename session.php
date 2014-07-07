<?php
	// give us access to the session
	session_start();

	// get the class average from the session variable
	$average = $_SESSION["class_average"];

	echo "The class average is " . $average;
?>