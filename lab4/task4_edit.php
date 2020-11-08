<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>
<body>

	<?php

        $link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
        mysqli_query($link, 'SET NAMES utf8');
        mysqli_select_db($link, 'users') or die("Нет такой БД!");

        $result = mysqli_query($link, "SELECT car_id, mark, model, year, transmition, amount, cost FROM `cars` WHERE car_id=".$_GET['car_id']);

        while ($row = mysqli_fetch_array($result)) {
            $car_id = $_GET['car_id'];
            $mark = $row['mark'];
            $model = $row['model'];
            $year = $row['year'];
            $transmition = $row['transmition'];
            $amount = $row['amount'];
            $cost = $row['cost'];
        }
        
        print "<form action='task4_save_edit.php' metod='get'>";
        print "<p>Марка: <input name='mark' size='50' type='text'
        value='".$mark."'>";
        print "<p><br>Модель: <input name='model' size='20' type='text'
        value='".$model."'>";
        print "<p><br>Год выпуска: <input name='year' size='20' type='text'
        value='".$year."'>";
        print "<p><br>Тип трансмиссии: <input name='transmition' size='30' type='text'
        value='".$transmition."'>";
        print "<p><br>Объем выпуска: <input name='amount' size='30' type='text'
        value='".$amount."'>";
        print "<p><br>Цена: <input name='cost' size='30' type='text'
        value='".$cost."'>";
        print "<p><input type='hidden' name='car_id' value='".$car_id."'> <br>";
        print "<p><input type='submit' name='' value='Сохранить'>";
        print "</form>";
        print "<p><a href=\"task4-1.php\"> Вернуться к списку
        автомобилей </a>";

      
	?>

</body>
</html>