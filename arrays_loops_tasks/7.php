<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>7</title>
</head>
<body>
<p>
	<?php

		$arr = [2, 5, 9, 15, 0, 4];

		echo "<pre>";
		print_r($arr);

		foreach ($arr as $value) {
			if ($value > 3 && $value < 10) {
				echo $value . "<br>";
			}
		}

		echo "</pre>";
	?>
</p>
</body>
</html>