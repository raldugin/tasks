<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>5</title>
</head>
<body>
<p>
<?php

	$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	foreach ($arr as $key => $value) {
		echo $key . " — зарплата " . $value . " долларов" . "<br>";
	}

?>
</p>
</body>
</html>