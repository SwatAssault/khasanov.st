<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>

<h2>Список автомобилей:</h2>
<body>

	<?php
		$mysqli = new mysqli("localhost", "mysql", "mysql");
		$mysqli->select_db("users") or die ("Нет такой таблицы!");

		$result = $mysqli->query("SELECT car_id, mark, model, year, transmition, amount, cost FROM cars");

			print "<table>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['mark'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['transmition'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
				echo "<td>" . $row['cost'] . "</td>";
				echo "<td><a href='task4_edit.php?car_id=" . $row['car_id']
				. "'>Редактировать</a></td>";
				echo "<td><a href='task4_delete.php?car_id=" . $row['car_id']
				. "'>Удалить</a></td>";
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего автомобилей: $num_rows </p>");

			echo "<a href='task4_add.php'>Добавить автомобиль</a>";

		$mysqli->close();
	?>

</body>
</html>