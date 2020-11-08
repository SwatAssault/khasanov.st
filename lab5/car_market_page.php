<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>

<h2>Список автосалонов:</h2>
<body>

	<?php
		$mysqli = new mysqli("localhost", "mysql", "mysql");
		$mysqli->select_db("users") or die ("Нет такой таблицы!");

		$result = $mysqli->query("SELECT id, name, address FROM car_market");

			print "<table>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
				echo "<td><a href='task4_edit.php?car_id=" . $row['car_id']
				. "'>Редактировать</a></td>";
				echo "<td><a href='task4_delete.php?car_id=" . $row['car_id']
				. "'>Удалить</a></td>";
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего автосалонов: $num_rows </p>");

			echo "<a href='car_market_add.php'>Добавить автосалон</a>";

		$mysqli->close();
	?>

</body>
</html>