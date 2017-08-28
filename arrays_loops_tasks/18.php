<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18</title>
</head>
<body>
<p>
	<?php

		$arr = ['Пн','Вт','Ср','Чт','Пт','Сб','Вс'];

		foreach ($arr as $key => $val) {
//			if ($key == 5 || $key == 6 ) {
			if ($val == 'Сб' || $val == 'Вс' ) {
				echo "<b>". $val . "</b><br>";
			} else {
				echo $val . "<br>";
			}
		}

	?>
</p>
</body>
</html>