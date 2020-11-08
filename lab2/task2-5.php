<!DOCTYPE html>
<html>
<head>
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
	<h2>Задача 2-5</h2>
	<h2>Вариант 15</h2>

	<?php
		
		$a = rand(-10, 10);
		$b = rand(-10, 10);

		echo "a = " . $a . " b = " . $b . "<br>";

		$z = pow(sin(f($a, $b)), 2) + f(log(abs($a - $b)), $b);

		echo "z = sin^2(f(" . $a . " + " . $b . ") + f(ln|" . $a . " - " . $b . "|, " . $b . ") = " . $z;
 
		function f ($u, $t) {
			$e = 2.7182818;
			if ($u * $u > abs(4 * $u * $t)) {
				return log(abs($u + $t));
			} elseif ($u * $u < abs(4 * $u * $t)) {
				return tan(1 / $u / $t);
			} else {
				return pow($e, ($u * $t + sqrt(sin($u))));
			}
		}


		echo "<h2>Вариант 3</h2>";

		$a = rand(-10, 10);
		$b = rand(-10, 10);

		echo "a = " . $a . " b = " . $b . "<br>";

		$z = f1($a, $b) + f1($a * $a, $b * $b) - f1($a - 1, $b);

		echo "z = f(" . $a . ", " . $b . ") + f(" . $a . "^2, " . $b . "^2) - f(" . $a . " - 1, " . $b . ") = " . $z;

		function f1 ($u, $t) {
			if ($u > 0 && $t > 0) {
				return $u * $u + $t * $t;
			} elseif ($u <= 0 && $t <= 0) {
				return $u + $t * $t; 
			} elseif ($u > 0 && $t <= 0) {
				return $u - $t;
			} else {
				return $u + $t;
			}
		}

	?>

</body>
</html>