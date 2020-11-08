<!DOCTYPE html>
<html>
<head>
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
	<h2>Задание 2-3</h2>

	<?php
		echo "<h4>Ассоциативный массив:</h4>";
		$cust["cnum"] = "2001";
		$cust["cname"] = "Hoffman";
		$cust["city"] = "London";
		$cust["snum"] = "1001";

		printMap($cust);

		echo "<h4>Добавим rating:</h4>";
		$cust["rating"] = "100";		
		printMap($cust);

		echo "<h4>Сортируем по значениям:</h4>";
		asort($cust);
		printMap($cust);

		echo "<h4>Сортируем по ключам:</h4>";
		ksort($cust);
		printMap($cust);

		echo "<h4>Сортируем с помощью sort:</h4>";
		sort($cust);
		printMap($cust);

		echo "<h4>sort - для индексированных массивов, превращает ключи в индексы</h4>";

		function printMap ($map) {
			foreach($map as $key => $value) {
  				echo "Ключ = " . $key . ", Значение = " . $value . "<br>";
			}
		}
	?>

</body>
</html>