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

	$sql_add = "INSERT INTO user SET user_name='" . $_GET['name']."', user_login='".$_GET['login']."', user_password='".$_GET['password']."', user_e_mail='".$_GET['e_mail']."', user_info='".$_GET['info']."'";

	mysqli_query($link, $sql_add);
	if (mysqli_affected_rows($link) > 0) {
		print "<p>Пользователь успешно добавлен в базу данных.";
		print "<p><a href=\"lab4-1.php\"> Вернуться к списку пользователей </a>"; 
	} else { 
		print "Ошибка сохранения. <a href=\"lab4-1.php\">Вернуться к списку пользователей </a>"; 
	}

?>
</body>
</html>

