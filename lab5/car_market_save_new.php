<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
<?php

	$link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'users') or die("Нет такой БД!");

	$sql_add = "INSERT INTO car_market SET name='" . $_GET['name']."', address='".$_GET['address']."'";

	mysqli_query($link, $sql_add);
	if (mysqli_affected_rows($link) > 0) {
		print "<p>Автосалон успешно добавлен в базу данных.";
		print "<p><a href=\"car_market_page.php\"> Вернуться к списку автосалонов </a>"; 
	} else { 
		print "Ошибка сохранения. <a href=\"car_market_page.php\">Вернуться к списку автосалонов </a>"; 
	}

?>
</body>
</html>
