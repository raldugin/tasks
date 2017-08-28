<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>20</title>
</head>
<body>
<p>
	<?php


		$symbol = '';

		for ($i = 1; $i <= 20; $i++) {
			$symbol .= 'x';
			echo $symbol . "<br>";
		}

	?>
</p>
</body>
</html>