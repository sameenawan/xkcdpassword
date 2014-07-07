<?php
	// let's have access to the session variables
	session_start();
	// bring in our constants which we've defined in another file
	require('constants.php');
	// bring in our functions which we've defined in another file
	require('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CS15 - Summer 2014 - Week 2 exercise</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>    
<body>

	<form method="post" action="/index.php">
		Number of students: <input type="text" name="no_of_students"><br />
		<input type="submit" />
	</form>
 	<p>The number of students is <?php echo show_student_count(); ?></p>
	<?php
		// get average once to avoid variance. Each call to returnAverage may be unique.
		$average = returnAverage();
	?>
	<p>The average students grade is <span class="<?php echo getAverageStyle($average); ?>"><?php echo $average; ?></span></p>

	<a href="session.php">Go to page that shows how session variables are accessible from another page</a><br />
	<a href="get.php?class_average=<?php echo $average; ?>">Go to page that shows how variables are passed by query string</a>
</body>
</html>