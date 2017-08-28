<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13</title>
</head>
<body>
<p>
	<?php

		$number = 1000;

		for ($i = 0; $number > 50; $i++) {
			$number /= 2;
		}
		echo $i . '</br>';
		echo '-------------------------<br>';
		echo $number;

	?>
</p>
</body>
</html>