<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 
	error_reporting(E_ALL);

	// создаем одномерный массив
	$arr_single = [977,979,978,976];

	// создаем многомерный массив
	$arr_ass = [
		'Серега' => 1977,
		'Петрович' => 1979,
		'Иванович' => 1978,
		'Васильевич' => 1976
	];
	$arr_ass1 = [
		'Жора' => 1952,
		'Ваня' => 1944,
		'Маша' => 1988,
		'Настя' => 1991
	];
	
	// считаем кол-во элементов одномерного массива
	function count_array_single ($arr_single)
	{
		$arr_single_count = count($arr_single);		
		echo "<hr>";
		return $arr_single_count;
	}
	// выводим на экран элементы одномерного массива
	function show_array_single($arr_single, $arr_single_count)
	{
		for ($i=0; $i < $arr_single_count; $i++) {
			echo "$arr_single[$i] <br>";
		}		
	}

	// считаем кол-во элементов ассоциативного массива
	function count_array_ass ($arr_ass)
	{
		$arr_ass_count =count($arr_ass);		
		echo "<hr>";
		return $arr_ass_count;
	}
	// выводим на экран элементы ассоциативного массива
	function show_array_ass($arr_ass)
	{
		foreach ($arr_ass as $name => $year) {
			echo "$name" ." "."$year".'<br>';			
		}
		echo "<hr>";
	}
	function show_array_merged($arr_merged)
	{
		foreach ($arr_merged as $key => $value) {
			echo "$key" ." "."$value".'<br>';			
		}
		echo "<hr>";
	}	
		
	// сортировки одномерных массивов
	//sort($arr_single); // sort и rsoft сортировка одномерным массивов сбрасывает значение ключей
	//show_array_single ($arr_single, count_array_single($arr_single));

	// сортировки ассоциативных массивов по ключам
	ksort($arr_ass); // ksort и krsort (по ключам) или asort arsort сортировка массива по ключам
	show_array_ass ($arr_ass);

	// сортировки ассоциативных массивов по значениям
	array_multisort($arr_ass, SORT_DESC); // SORT_ASC или SORT_DESC
	show_array_ass ($arr_ass);

	// перемешивание массива по генератору случайных чисел и сбрасывает значение ключа	
	//shuffle($arr_ass);
	//array_rand($arr_ass);		
	//show_array_ass ($arr_ass, count_array_ass($arr_ass));
	
	// объединение массивов
	//$merged = array_merge($arr_single, $arr_ass);
	$merged = $arr_ass + $arr_ass1;	
	ksort($merged);
	show_array_merged($merged);
	echo "<pre>";	
	print_r($merged);
	echo "</pre>";


	
	


	// array_multisort($arr_single, SORT_DESC); // сортировка от большего к меньшему по убыванию
	// show_array ($arr_single, count_array($arr_single));
	
	// array_multisort($arr_single, SORT_ASC); // сортировка от меньшему к большему по возрастанию
	// show_array ($arr_single, count_array($arr_single));

	// print "<pre>";
	// $arr_ass_count =count($arr_ass);
	// print ($arr_ass_count);
	// print_r ($arr_ass);
	// print "</pre>";



	/*
	function  funMakeArray(){
		$ret =  [];  
		$ret[0] =  "Hello";
		$ret[1] =  "world";
		$count = count($ret);
		echo "$count";
		return  $ret;
	}
	echo "<pre>";
	print_r (funMakeArray());
	echo "</pre>";
	*/
	

?>
</body>
</html>