<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3</title>
</head>
<body>
<p>
<?php

	$arr = [26, 17, 136, 12, 79, 15];
	$result = 0;

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	foreach ($arr as $value){
		$result += pow($value,2);
		echo $value . " -(^2)- " . pow($value,2) . "<br>";
	}

	echo "-------------------------------<br>";
	echo $result."<br>";

?>
</p>
</body>
</html>