<!DOCTYPE html>
<html>
	<head>
		<title>Jared Faucher ::: P2 ::: xkcd Password Generator</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="p2.css">
	</head>
	<body>
		<div class="container">
			<h1>Jared Faucher ::: P2</h1>
			<h2>xkcd Password Generator<h2>
			<p>
			<?php

				$dictionary = fopen(http://www-01.sil.org/linguistics/wordlists/english/wordlist/wordsEn.txt, "r");

				for ($i = 0; $i = 4; $i++)
				{
					${"word" . $i} = fgets($dictionary);
					print ${"word" . $i};
					if ($i < 3)
					{
						print "-";
					}
				}


			?>
			</p>
			<a href="http://xkcd.com/936/">
				<img src="http://imgs.xkcd.com/comics/password_strength.png" />
			</a>
		</div>
	</body>
</html>