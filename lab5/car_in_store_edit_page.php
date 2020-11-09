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

        $result = mysqli_query($link, "SELECT id, car_id, car_market_id FROM cars_in_store WHERE id=".$_GET['id']);

        $car_request = $link->query("SELECT car_id, mark, model, year FROM cars");
        $cars_amount = mysqli_num_rows($car_request);

        $car_market_request = $link->query("SELECT id, name, address FROM car_market");
        $cars_markets_amount = mysqli_num_rows($car_market_request);

        while ($row = mysqli_fetch_array($result)) {
            $id = $_GET['id'];
            $car_id = $row['car_id'];
            $car_market_id = $row['car_market_id'];
        }
        
        print "<form action='cars_in_store_save_edit.php' metod='get'>";
        print "<p>Автомобиль: <select name='car' value='".$car_id."'>";
        while ($row = mysqli_fetch_array($car_request)) {
            echo "<option value=\"".$row['car_id']."\" >" .$row['mark']. " " .$row['model']. " " .$row['year']. "</option>";
        }
        print "</select>";

        print "<p>Автосалон: <select name='car_market' value='".$car_market_id."'> <br>";
        while ($row = mysqli_fetch_array($car_market_request)) {
            echo "<option value=\"".$row['id']."\" >" .$row['name']. " " .$row['address']. "</option>";
        }
        print "</select>";

        print "<p><input type='hidden' name='id' value='".$id."'> <br>";
        print "<p><input type='submit' name='' value='Сохранить'>";
        print "</form>";
        print "<p><a href=\"cars_in_store_page.php\"> Вернуться к списку
        автомобилей в наличии </a>";

      
	?>

</body>
</html>