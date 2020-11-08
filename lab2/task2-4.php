<!DOCTYPE html>
<html>
<head>
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
	<h2>Задача 2-4</h2>
	<h2>Вариант 15</h2>

	<?php
		
		$n = 20;
		echo "<h4>Исходный массив действительных чисел из " . $n . "элементов от -10 до 50</h4>";

		for ($i = 0; $i < $n; $i++) {
			$myArray[$i] = rand(-10, 50);
		}
		printArray($myArray);

		if (check($myArray)) {
			echo "<br><br>Заменяем все отрицательные числа, на их квадраты: <br><br>";
			$myArray = replaceNegatives($myArray);
			printArray($myArray);
		} else {
			echo "<br><br>В массиве нет чисел меньше, чем -2 !!!";
		}

		function replaceNegatives ($array) {
			for ($i = 0; $i < count($array); $i++) {
				if ($array[$i] < 0) {
					$array[$i] = $array[$i] * $array[$i];
				}
			}
			return $array;
		}

		function check ($array) {
			for ($i = 0; $i < count($array); $i++) {
				if ($array[$i] < -2) {
					return true;
				}
			}
			return false;
		}

		function printArray ($array) {
			for ($i = 0; $i < count($array); $i++) {
				echo $array[$i] . " ";
			}			
		}

		echo "<h2>Вариант 3</h2>";

		for ($i = 0; $i < $n; $i++) {
			$myArray[$i] = rand(-10, 50);
		}

		echo "<h4>Исходный массив:</h4>";
		printArray($myArray);
		$k = rand(1, 20);
		echo "<br><h4>K = " . $k . "<br>";
		echo "<h4>Результирующий массив:</h4>";
		
		$newArray = array_slice($myArray, 0, $k);
		$minVal = minBeforeK($newArray); 
		for ($i = 0; $i < $n; $i++) {
			$myArray[$i] = $minVal;
		}
		printArray($myArray);

		function minBeforeK ($array) {
			$min = $array[0];
			for ($i = 0; $i < count($array); $i++) {
				if ($array[$i] < $min) {
					$min = $array[$i];
				}
			}
			return $min;
		}

	?>

</body>
</html>