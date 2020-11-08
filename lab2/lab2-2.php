<!DOCTYPE html>
<html>
<head>
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
	<h2>Задание 2-2</h2>

	<?php

		$length = rand(3, 20);
		for ($i = 0; $i < $length; $i++) {
			$myArray[$i] = rand(10, 99);
		}

		echo "<h4>Массив из " . $length . " случайных чисел:</h4>";

		printArray($myArray);

		echo "<h4>Сортировка:</h4>";

		sort($myArray);
		printArray($myArray);

		echo "<h4>Переворачиваем массив:</h4>";

		$reversedArray = array_reverse($myArray);
		printArray($reversedArray);

		echo "<h4>Удаляем последний элемент:</h4>";
		array_pop($myArray);
		printArray($myArray);

		echo "<h4>Сумма элементов в массиве:</h4>";
		echo sumOfElements($myArray);

		echo "<h4>Количество элементов в массиве:</h4>";
		echo count($myArray);

		echo "<h4>Среднее арифметическое элементов:</h4>";
		echo sumOfElements($myArray) / count($myArray);

		echo "<h4>Есть число 50?</h4>";
		in_array(50, $myArray) ? $answer = "Есть" : $answer = "Нет";
		echo $answer;

		echo "<h4>Удаляем повторяющиеся элементы:</h4>";
		$rez = array_unique($myArray);
		printArray($rez);	

		function printArray ($array) {
			for ($i = 0; $i < count($array); $i++) {
				echo $array[$i] . " ";
			}			
		}

		function sumOfElements ($array) {
			$result = 0;
			for ($i = 0; $i < count($array); $i++) {
				$result += $array[$i];
			}
			return $result;
		}

	?>

</body>
</html>