<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4</title>
</head>
<body>
<p>
<?php

	$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	foreach ($arr as $key => $value) {
	echo $key . "<br>";
	}
	foreach ($arr as $key => $value) {
		echo $value . "<br>";
	}

	// одним циклом
	foreach ($arr as $key => $value) {
		echo $key . " -- " . $value . "<br>";
	}

?>
</p>
</body>
</html>