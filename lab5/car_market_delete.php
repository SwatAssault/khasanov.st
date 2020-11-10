<?php
	$link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
    mysqli_query($link, 'SET NAMES utf8');
    mysqli_select_db($link, 'users') or die("Нет такой БД!");

	$zapros = "DELETE FROM car_market WHERE id=" . $_GET['id'];
	mysqli_query($link, $zapros);

	$car_market_query = "DELETE FROM cars_in_store WHERE car_market_id=" . $_GET['id'];
	mysqli_query($link, $car_market_query);

	header("Location: car_market_page.php");
	exit;
?>