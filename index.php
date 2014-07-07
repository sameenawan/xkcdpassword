<!DOCTYPE html>
<html>
<head>

	<title>Raffle</title>
	<meta charset="utf-8">

	<link rel='stylesheet' href='' type='text/css'>

	<?php require 'logic.php'; ?>

</head>
<body>

	<form action='index.php' method='POST'>
		
 		Contestant 0: <input type='text' name='contestant0'><br>
		Contestant 1: <input type='text' name='contestant1'><br>
		Contestant 2: <input type='text' name='contestant2'><br>
		Contestant 3: <input type='text' name='contestant3'><br>
		<input type='submit'>
	</form>

	<?php foreach($contestants as $name => &$result): ?>

		<?php echo $name; ?> is a <?php echo $result ?> <br>		

	<?php endforeach; ?>
	
	</body>
</html>