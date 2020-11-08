<!DOCTYPE html>
<html>
<head>
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
	<h2>Задание 2-1:</h2>

	<h4>Массив треугольных чисел:</h4>
	<?php
		for ($i = 1; $i <= 10; $i++) {
			$treug[$i - 1] = $i * ($i + 1) / 2;
			echo $treug[$i - 1] . " ";
		}

		echo "<h4>Массив квадратов натуральных чисел:</h4>";
		for ($i = 1; $i <= 10; $i++) {
			$kvd[$i - 1] = $i * $i;
			echo $kvd[$i - 1] . " ";
		}

		echo "<h4>Объединение:</h4>";
		$rez = array_merge($treug, $kvd);
		printArray($rez);

		echo "<h4>Сортировка:</h4>";
		sort($rez);
		printArray($rez);

		echo "<h4>Удаляем первый элемент:</h4>";
		unset($rez[0]);
		printArray($rez);					

		echo "<h4>Удаляем повторяющиеся элементы:</h4>";
		$rez1 = array_unique($rez);
		printArray($rez1);	

		function printArray ($array) {
			for ($i = 0; $i < count($array); $i++) {
				echo $array[$i] . " ";
			}			
		}

	?>

</body>
</html>