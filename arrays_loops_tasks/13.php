<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13</title>
</head>
<body>
<p>
	<?php

		for ($i=1; $i<=9; $i++) {
			for ($j=1; $j<=9; $j++)
			{
				//echo $i." x ".$j."=".$i*$j."<br>";
				$result = $i*$j;
				echo sprintf("%d x %d = %d", $i, $j, $result)."<br>"; // почему тут не работает "%d x %d = %d\n" - для переноса строки и приходится добавлять <BR>??
			}
			echo "<br>"; // а тут, к примеру PHP_EOL не работает?
		}


	?>
</p>
</body>
</html>