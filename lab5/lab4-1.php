<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>

<h2>Список пользователей:</h2>
<body>

	<?php
		$mysqli = new mysqli("localhost", "mysql", "mysql");
		$mysqli->select_db("users") or die ("Нет такой таблицы!");

		$result = $mysqli->query("SELECT id_user, user_name, user_e_mail FROM user");

			print "<table>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['user_name'] . "</td>";
				echo "<td>" . $row['user_e_mail'] . "</td>";
				echo "<td><a href='lab4-3.php?id_user=" . $row['id_user']
				. "'>Редактировать</a></td>";
				echo "<td><a href='lab4-4.php?id_user=" . $row['id_user']
				. "'>Удалить</a></td>";
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего пользователей: $num_rows </p>");

			echo "<a href='lab4-2.php'>Добавить пользователя</a>";

		$mysqli->close();
	?>

</body>
</html>