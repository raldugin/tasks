<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.submenu { display: none; }
		.has_submenu:hover .submenu { 
			display: block;
			position: absolute;
			top: 100%;
			left: -110%;
		}
		
		ul li { display: inline; 
				margin-right: 15px;
				position: relative;
				list-style: none;
		}
		.foot {
			height: 300px;
		}
	</style>
</head>
<body>

<?php
	error_reporting(E_ALL & ~E_NOTICE);
	
	function dump_array ($arr) {
		echo "<pre><hr>";
		print_r($arr);
		echo "</pre><hr>";
	};

	$menuItems = [

		// [1,2,3,4,5,6,7,8,9,10],
		// ['a'],
		// ['b' => 'b1'],['b2'],['14'] ,
		// ['c']

		['title' => 'Home', 'href' => '/home.php'],
		['title' => 'Home', 'href' => '/home.php'],
		['title' => 'News', 'href' => '#', 'class' => 'submenu', 'subItems' =>
																[
																	[ 'title' => 'USAToday', 		'href' => '//www.usatoday.com' ],
																	[ 'title' => 'BBC News', 		'href' => '//www.bbc.co.uk/news' ],
																	[ 'title' => 'New-York Times',	'href' => '//www.nytimes.com' ],
																	[ 'title' => 'New-York Times',	'href' => '//www.nytimes.com' ]
																]
		]
	];

	//dump_array ($menuItems);
	echo count($menuItems).'<hr>';
	
	function arrayItemCount($arr, $i=0)	{	
		foreach ($arr as $item) {
			if (is_array($item)) {				
				foreach ($item as $subItem) {				
					$i++;
					arrayItemCount($item);
				}
			}
			else {
				$i++;
			}
			
		}
		return $i;
	}

	
	echo arrayItemCount ($menuItems)."<hr>";

	
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
				<li class="has_submenu"><a href="<?= $item['href'] ?>"><?= $item['title'] ?></a>
				<?php if ( isset($item['subItems']) && is_array($item['subItems']) ): ?>				
				<ul class="<?= $item['class'] ?>">
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

	<footer class="foot">&nbsp;</footer>


	
</body>
</html>