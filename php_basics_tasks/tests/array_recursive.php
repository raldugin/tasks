<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>	
</head>
<body>

<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$menuItems = [

			['title' => 'Home', 'href' => '/home.php'],
			['title' => 'News', 'href' => '/news.php', 
						'childItems' =>
						 [
							[ 'title' => 'USAToday' ],
							[ 'title' => 'BBC News' ],
							[ 'title' => 'New-York Times' ],
							[ 'title' => '', 'delimiter' => true ],
							[ 'title' => 'TCN' ],
							[ 'title' => '1+1' ]
						]
			],
			
			['title' => 'Login', 'href' => '/login.php'],
	];
	
	// echo "<pre>";
	// print_r($menuItems);
	// echo "</pre>";

	function dump_array ($arr) {
		echo "<pre><hr>";
		print_r($arr);
		echo "</pre><hr>";		
	}
	// <?= dump_array($item) ?>

?>



	<ul>
		<?php foreach ($menuItems as $item) : ?>
			
			<li>
				<a href="<?= $item['href'] ?>">
					<?= $item['title'] ?>
					
					 
				</a>

				
					<?php if (is_array($item['childItems'])) : ?>
							
							<ul>
								<?php foreach ($item as $key => $submenu) : ?>
									

									<li><?= $submenu ?></li>
								
								<?php endforeach ?>	
							</ul>
							
						
					<?php endif ?>
					
				
						
				
			</li>
		
		<?php endforeach ?>
	</ul>

	




	
</body>
</html>