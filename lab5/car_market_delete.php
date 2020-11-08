<?php
	$link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
    mysqli_query($link, 'SET NAMES utf8');
    mysqli_select_db($link, 'users') or die("Нет такой БД!");

	$zapros = "DELETE FROM car_market WHERE id=" . $_GET['id'];
	mysqli_query($link, $zapros);
	header("Location: car_market_page.php");
	exit;
?>