<!DOCTYPE html>
<html>
	<head>
		<title>Хасанов Р.М. ИВТ-417</title>
	</head>
	<body>
		<h1>Вариант 1</h1>
		<?php
			$num = rand(1, 100);
			echo "<h3> Делители числа " . $num . ":</h3>";
			for ($i = 1; $i <= $num; $i++) {
				if ($num % $i == 0) {
					print($i . "<br>");
				}
			}
		?>
		<h1>Вариант 4</h1>
		<?php
			$n = rand(1, 100);
			$m = rand(1, 100);

			echo "N = " . $n . "<br>";
			echo "M = " . $m . "<br>";

			echo "<h4>Числа, которые делятся на сумму своих цифр в промежутке : [" .$n . " , " . $m ."]</h4>";

			if ($n > $m) {
				echo "N > M !!!";
			}

			for ($i = $n; $i < $m; $i++) {
				if (devidedBySum($i)) {
					echo $i . "<br>";
				}
			}

			/* Делится ли число на сумму своих цифр */
			function devidedBySum ($num) {
				return $num % sumOfDigits($num) == 0;
			}

			/* Находим сумму цифр числа */
			function sumOfDigits ($num) {
				$str = strval($num);
				$result = 0;
				for ($i = 0; $i < strlen($str); $i++){
					$result += intval($str[$i]);
				}
				return $result;
			}
		?>
	</body>
</html>
