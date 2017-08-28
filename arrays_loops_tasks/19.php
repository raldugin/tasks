<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19</title>
</head>
<body>
<p>
	<?php

		$arr = ['Пн','Вт','Ср','Чт','Пт','Сб','Вс'];

		$day = 1;

		foreach ($arr as $key => $val) {
			if ($key == $day-1 ) {
				echo "<i>". $val . "</i><br>";
			} else {
				echo $val . "<br>";
			}
		}

	?>
</p>
</body>
</html>