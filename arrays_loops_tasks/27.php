<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>27</title>
</head>
<body>

	<table>
		<tbody>
			<?php

				$colors = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];
				$raw = mt_rand(5,7);
				$col = mt_rand(5,10);
				$array_size = count($colors)-1;

				/*
				for ($i = 1; $i <= $raw; $i++) {
					echo "<tr>";
					for ($j = 1; $j <= $col; $j++) {
						echo "<td style='padding: 10px; font-weight: bold; background-color:{$colors[mt_rand(0,$array_size)]}'>" . mt_rand(1, 1000) . "</td>";
					}
					echo "</tr>";
				}
				*/
			?>

			<?php for ($i = 0; $i <= $raw; $i++) : ?>
				<tr>
					<?php for ($j = 1; $j <= $col; $j++) : ?>
						<td style='padding: 10px; font-weight: bold; background-color:<?= $colors[mt_rand(0, $array_size)] ?>'><?= mt_rand(1, 1000) ?></td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>


	</tbody>
</table>
</body>
</html>