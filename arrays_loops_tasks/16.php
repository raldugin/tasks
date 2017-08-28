<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16</title>
</head>
<body>
<p>
	<?php

		$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

		foreach ($arr as $e) {

			if ( !($e % 3) ){ // проверяем остаток от деления на 3
				//var_dump ((bool)$e % 3);
				echo $e . "<br>";
			} else {
				echo $e . ', ';
			}
		}

	?>
</p>
</body>
</html>