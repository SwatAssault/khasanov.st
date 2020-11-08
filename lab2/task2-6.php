<!DOCTYPE html>
<html>
<head>
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
	<h2>Задача 2-6</h2>
	<h2>Вариант 15</h2>

	<?php
		include 'matrixLib.php';

        $myMatrix = fillMatrix(10, 7);
        printMatrix($myMatrix);

        printTask ("Просуммировать элементы двумерного массива, сумма индексов которых равна заданной константе.");

        $number = 15;
        echo "Заданная константа: " . $number . "</br>";
        $sum = processMatrix_15($myMatrix, $number);
        if ($sum == -1) {
            echo "Нет ни одного элемента матрицы, сумма индексов которого равна " . $num . "!</br>"; 
        } else {
            echo "Сумма элементов матрицы, индексы которых равны " . $number . " : " . $sum . "</br>";
        }

        echo "<h2>Вариант 3</h2>";

        printTask("В матрице A(m,n) все ненулевые элементы заменить обратными по величине и
        противоположными по знаку. Исходный и скорректированный массивы вывести на
        экран");

        echo "<h4>Исходный массив: </h4>";
        $secondMatrix = fillMatrix(9, 14);
        printMatrix($secondMatrix);

        echo "<h4>Скорректированный массив: </h4>";
        $resultMatrix = processMatrix_3($secondMatrix);
        printMatrix($resultMatrix);

	?>

</body>
</html>