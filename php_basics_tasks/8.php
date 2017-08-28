<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>8</title>
</head>
<body>
	
<?php
	
	for ($i= -1; $i <=60; $i++) {		
		//if ( ($i >= 18 && $i <= 59) ) {
		if ( $i < 0 ) {
			echo "Неизвестный возраст <br>";
		}
		elseif ( $i >= 0 and $i <= 17) {
			echo "Вам $i лет и поэтому еще рано работать <br>";
		}
		elseif ( $i >= 18 and $i <= 59) {
			echo "Вам $i лет и поэтому работать и работать <br>";
		}
		elseif ($i >=60) {
			echo "Вам $i лет и поэтому пора на пенсию<br>";
		}
	}

?>

</body>
</html>

