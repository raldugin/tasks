<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>21</title>
</head>
<body>
<p>
	<?php

		$number = '';

		for ($i = 1; $i <= 9; $i++) {
			for ($j = 0; $j < $i; $j++) {
				$number .= $i;
			}
			echo $number . '<br>';
			$number = '';
		}

	?>
</p>
</body>
</html>