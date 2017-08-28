<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18</title>
</head>
<body>
<p>
	<?php

		$arr = ['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
		//$month = 8;
		$date = getdate();
		$month = $date['mon'];

		foreach ($arr as $key => $val) {
			if ($key == $month-1 ) {
				echo "<b>". $val . "</b><br>";
			} else {
				echo $val . "<br>";
			}
		}

	?>
</p>
</body>
</html>