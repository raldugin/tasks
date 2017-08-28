<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		/.submenu { display: none; }
		/.has_submenu:hover .submenu { display: block; }
		
		/*.has_submenu:hover .submenu {
			display: block;
		}*/
	</style>
</head>
<body>

<?php
	error_reporting(E_ALL & ~E_NOTICE);
	
	function dump_array ($arr) {
		echo "<pre><hr>";
		print_r($arr);
		echo "</pre><hr>";
	}

	$menuItems = [

		['title' => 'Home', 'href' => '/home.php'],
		['title' => 'News', 'href' => '#', 'class' => 'has_submenu', 'subItems' =>
																[
																	[ 'title' => 'USAToday', 		'href' => '//www.usatoday.com' ],
																	[ 'title' => 'BBC News', 		'href' => '//www.bbc.co.uk/news' ],
																	[ 'title' => 'New-York Times',	'href' => '//www.nytimes.com' ]
																]
		],			
		['title' => 'Login', 'href' => '/login.php'],
	];

	dump_array ($menuItems);

	
	foreach ( $menuItems as $item ) {
		echo $item['title']."<br>";
		
		if ( isset($item['subItems']) && is_array($item['subItems']) ) {

			foreach ( $item['subItems'] as $submenuTitle ) {				
				echo "------->".$submenuTitle['title']."<br>";
			}
		}
	}

?>
	
	<ul>
		<?php foreach ( $menuItems as $item ): ?>
			
			<?php if (isset($item['class'])): ?>
				<li class="submenu"><a href="<?= $item['href'] ?>"  class="<?= $item['class'] ?>"><?= $item['title'] ?></a>
				<?php if ( isset($item['subItems']) && is_array($item['subItems']) ): ?>				
				<ul>
					<?php foreach ($item['subItems'] as $submenuTitle): ?>
						<li>
							<a href="<?= $submenuTitle['href'] ?>"><?= $submenuTitle['title'] ?></a>
						</li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>

				</li>
					<?php else: ?>
						<li><a href="<?= $item['href'] ?>"><?= $item['title'] ?></a></li>
			<?php endif ?>

			
		<?php endforeach ?>
	</ul>




	
</body>
</html>