<!DOCTYPE html>
<html>
	<head>
		<title>Хасанов Р.М. ИВТ-417</title>
	</head>
	<body>
		<h1>Вариант 15</h1>
		<?php

			$a = rand(-20, 20);
			$c = rand(-20, 20);
			$d = rand(-20, 20);

			print("a = " . $a . '<br>' . "c = " . $c . '<br>' . "d = " . $d . '<br>');

			$f = (12 / $c + 73 + sqrt($d)) / (sqrt($a) - 2 * $a);

			print(" (12 / " . $c . " + 73 + " . $d . "^2) / (" . $a . "^2 - 2 * " . $a . ") = " . $f);

		?>
		<h1>Вариант 1</h1>
		<?php

			$a = rand(-20, 20);
			$c = rand(-20, 20);
			$d = rand(-20, 20);

			print("a = " . $a . '<br>' . "c = " . $c . '<br>' . "d = " . $d . '<br>');

			$f = (2 * $c - $d) / ($a / 4 - 1);

			print(" (2 * " . $c . " - " . $d . ") / (" . $a . " / - 4 - 1) = " . $f);

		?>
	</body>
</html>
