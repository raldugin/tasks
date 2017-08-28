<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>9</title>
</head>
<body>
<p>
	<?php

		for ($i = 1; $i <= 100; $i++) {
			echo $i . '<br>';
		}

		// или
		$i=1;
		while($i<=100){
			echo $i."</br>";
			$i++;
		}

	?>
</p>
</body>
</html>