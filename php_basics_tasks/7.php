<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>7</title>
</head>
<body>
	
<?php
		$i=65;

		if ( $i >= 0 and $i <= 17) {
			echo "Вам $i лет и поэтому еще рано работать <br>";
		}
		elseif ( $i >= 18 and $i <= 59) {
			echo "Вам $i лет и поэтому работать и работать <br>";
		}
		elseif ($i >=60) {
			echo "Вам $i лет и поэтому пора на пенсию<br>";
		}

?>

</body>
</html>

