<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>8</title>
</head>
<body>
<p>
	<?php

		$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

		echo "<pre>";
		print_r($arr);

		foreach ($arr as $value) {
			echo "$value"; // выводим как string
		}

		echo "</pre>";
	?>
</p>
</body>
</html>