<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>23</title>
</head>
<body>
<h1>Введите число</h1>
<form method="POST">
	<input type="number" name="user_number" />
	<input type="submit" value="Посчитать" />
</form>

<?php

	$user_number = $_REQUEST['user_number'];
	$number_arr = str_split($user_number,1);
	$result = 0;

	if (!empty($user_number))
	{
		echo "Результат сложения равен:"."<br>";
		foreach ($number_arr as $key => $val)
		{
			$result += (int) $val;
		}
		echo $result;
	}
	else
	{
		echo "Введите число!";
	}

?>

</body>
</html>