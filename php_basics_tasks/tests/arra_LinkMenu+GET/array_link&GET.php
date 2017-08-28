<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>	
	<style>
		.menu {
			font-size: 18px;			
			font-weight: 700;
			font-family: Arial, sans-serif;
		}
		.menu a {			
			margin: 15px 0 0 15px;
		}
	</style>

</head>
<body>

<?php
	error_reporting(E_ALL & ~E_NOTICE);
	echo __FILE__;
	echo __DIR__;

	$menuItems = [
			'news' =>	[
						'href' => '?r=news.php',
						'name' => 'news',
						'status' => true
						],
			'about' =>	[
						'href' => '?r=about.php',
						'name' => 'about us',
						'status' => true
						]
	];
	// echo '<pre>'; print_r($menuItems); echo '</pre>';
?>		

<div class="menu">
	<?php 
		foreach ($menuItems as $key => $items) { 
		// $menuItems - название массива
		// $key - ключи первого уровня для перебора массива (тут 'news' и 'about')
		// $items - значение ключей (тут еще массивы ключей 'href', 'name', 'status' и их значений '?r=news.php', 'news', true )
		
		// echo '<pre>'; print_r($items); echo '</pre>';
		// echo $items['href']; // тут при первом проходе итерации будет (news -> ключ ['href'] = ?r=news.php)

		echo $html = "<a href=\"{$items['href']}\">{$items['name']}</a>";
		}
		
		if ( isset($_GET['r']) ) {
			$LinkTo = $_GET['r'];
			header("Location:" . $LinkTo);
		}
	?>
</div>



	
</body>
</html>