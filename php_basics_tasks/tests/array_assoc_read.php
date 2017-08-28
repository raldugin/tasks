<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		error_reporting(E_ALL & ~E_NOTICE);

		$arr = [
				'hello',
				345,
				'person' => [
							'name' => 'Alex',
							'fio' => 'Raldugin',
							'phone' => '0663565083'],
				'person1' => [
							'name' => 'Sasha',
							'fio' => 'Selyanko',
							'phone' => '3563518004'],
				'world'	
			];
		
		echo '<pre>';
		print_r($arr);
		echo '</pre>';

		foreach ($arr as $key => $item) { // проходим по первому уровню массива
			echo $key." - ".$item."<br>"; // выводим ключи и элементы массива
			
			// проверяем.. isset установлена ли переменная и отлична от ли от NULL + is_array($item) это простое значение или массив? если и то и то TRUE читаем и выводим его
			if (isset($item) && is_array($item)) { 
				foreach ($item as $key1 => $item1) {
					echo $key1." - ".$item1."<br>";
				}
			}
			
		}

	?>
	
</body>
</html>