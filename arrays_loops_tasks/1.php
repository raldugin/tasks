<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1</title>
</head>
<body>
<p>
<?php
	//header('Content-type: text/plain');

	$arr = ['html', 'css', 'php', 'js', 'jq'];

	foreach ($arr as $value ){
		echo "$value"."<br>";
	}

?>
</p>
</body>
</html>