<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>

<?php 
    echo "<h2><a href='lab5.php'>На главную</a></h2>"
?>

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
				echo "<td><a href='car_market_edit_page.php?id=" . $row['id']
				. "'>Редактировать</a></td>";
				echo "<td><a href='car_market_delete.php?id=" . $row['id']
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