<?php
	$link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
    mysqli_query($link, 'SET NAMES utf8');
    mysqli_select_db($link, 'users') or die("Нет такой БД!");

	$zapros = "DELETE FROM user WHERE id_user=" . $_GET['id_user'];
	mysqli_query($link, $zapros);
	header("Location: lab4-1.php");
	exit;
?>