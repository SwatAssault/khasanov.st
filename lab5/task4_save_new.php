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

	$sql_add = "INSERT INTO cars SET mark='" . $_GET['mark']."', model='".$_GET['model']."', year='".$_GET['year']."',
    transmition='".$_GET['transmition']."', amount='".$_GET['amount']."', cost='".$_GET['cost']."'";

	mysqli_query($link, $sql_add);
	if (mysqli_affected_rows($link) > 0) {
		print "<p>Автомобиль успешно добавлен в базу данных.";
		print "<p><a href=\"task4-1.php\"> Вернуться к списку автомобилей </a>"; 
	} else { 
		print "Ошибка сохранения. <a href=\"task4-1.php\">Вернуться к списку автомобилей </a>"; 
	}

?>
</body>
</html>
