<?php
	$link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
    mysqli_query($link, 'SET NAMES utf8');
    mysqli_select_db($link, 'users') or die("Нет такой БД!");

	$zapros = "DELETE FROM cars WHERE car_id=" . $_GET['car_id'];
	mysqli_query($link, $zapros);
	header("Location: task4-1.php");
	exit;
?>