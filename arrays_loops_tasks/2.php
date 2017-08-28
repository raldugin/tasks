<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2</title>
</head>
<body>
<p>
<?php
	//header('Content-type: text/plain');

	$arr = [1, 20, 15, 17, 24, 35];
	$result = 0;

	foreach ($arr as $value){
		$result += $value;
	}

	echo $result;

	/* или
	echo array_sum($arr);
	*/

?>
</p>
</body>
</html>