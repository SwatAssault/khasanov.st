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

        $result = mysqli_query($link, "SELECT id, name, address FROM `car_market` WHERE id=".$_GET['id']);

        while ($row = mysqli_fetch_array($result)) {
            $id = $_GET['id'];
            $name = $row['name'];
            $address = $row['address'];
        }
        
        print "<form action='car_market_save_edit.php' metod='get'>";
        print "<p>Название: <input name='name' size='50' type='text'
        value='".$name."'>";
        print "<p><br>Адрес: <input name='address' size='20' type='text'
        value='".$address."'>";
        print "<p><input type='hidden' name='id' value='".$id."'> <br>";
        print "<p><input type='submit' name='' value='Сохранить'>";
        print "</form>";
        print "<p><a href=\"car_market_page.php\"> Вернуться к списку
        автосалонов </a>";

      
	?>

</body>
</html>