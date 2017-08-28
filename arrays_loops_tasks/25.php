<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>25</title>
</head>
<body>
<pre>

<?php

	$arr = [];

	for ($i=0; $i<=10; $i++){ // генерируем данные в массив
		$arr [$i] = mt_rand(1,100);
	}

	// находим мин макс значения в массиве
	$max = max($arr);
	$min = min($arr);

	print_r($arr);

	// узнаем ключи массива с мин макс значениями
	$key_max = array_search(max($arr), $arr);
	$key_min = array_search(min($arr), $arr);

	// выводим ключи массива и их значения (мин макс)
	echo "<br>" . $key_max . " - " . $arr[$key_max] . "<br>";
	echo $key_min . " - " . $arr[$key_min] . "<br><br>";

	$tmp_max = $arr[$key_max];
	$tmp_min = $arr[$key_min];

	$arr[$key_max] = $tmp_min;
	$arr[$key_min] = $tmp_max;

	print_r($arr);


?>
</pre>
</body>
</html>