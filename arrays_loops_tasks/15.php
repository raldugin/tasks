<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>15</title>
</head>
<body>
<p>
	<?php

		$arr = [4, 2, 5, 19, 13, 0, 10];
		$counter = 0;

		foreach ($arr as $e) {
			$counter++;
		}
		echo $counter;

	?>
</p>
</body>
</html>