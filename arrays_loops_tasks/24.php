<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>24</title>
</head>
<body>

<form method="POST">
	<h3>Введите число</h3>
	<input type="number" name="user_number" />
	<h3>Введите цифру какую надо искать в числе</h3>
	<input type="number" name="search_number" />
	<input type="submit" value="Искать" />
</form>

<?php

	$user_number = $_REQUEST['user_number'];
	$search_number = $_REQUEST['search_number'];
	$number_arr = str_split($user_number, 1);
	$counter = 0;

	if (!empty($user_number) && !empty($search_number)) {
		foreach ($number_arr as $key => $val) {
			if ($val == $search_number) {
				$counter++;
			}

		}
		echo "<br>". "Число " . $search_number . " встречается " . $counter . " раз(а)";
	} else {
		echo "Заполните поля!";
	}

?>

</body>
</html>