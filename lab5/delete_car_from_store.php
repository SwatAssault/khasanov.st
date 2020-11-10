<?php
	$link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
    mysqli_query($link, 'SET NAMES utf8');
    mysqli_select_db($link, 'users') or die("Нет такой БД!");

	$zapros = "DELETE FROM cars_in_store WHERE id=" . $_GET['id'];
	mysqli_query($link, $zapros);
	header("Location: cars_in_store_page.php");
	exit;
?>