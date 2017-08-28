<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14</title>
</head>
<body>
<p>
	<?php

		$arr = [4, 2, 5, 19, 13, 0, 10];

		foreach ($arr as $e) {
			if ($e == 2 || $e == 3 || $e == 4) {
				echo "Есть" . "<br>";
			} else {
				echo "Нет" . "<br>";
			}
		}


	?>
</p>
</body>
</html>