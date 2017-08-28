<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>6</title>
</head>
<body>
<p>
	<?php

		$arr = ['green' => 'зеленый',
			'red' => 'красный',
			'blue' => 'голубой'
		];

		$en = [];
		$ru = [];

		echo "<pre>";
		print_r($arr);

		foreach ($arr as $key => $value) {
			$en[] = $key;
			$ru[] = $value;

			// или
			// array_push($en, $key);
			// array_push($ru, $value);
		}
		print_r($en);
		print_r($ru);

		echo "</pre>";
	?>
</p>
</body>
</html>