<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>

<?php 
    echo "<h2><a href='lab5.php'>На главную</a></h2>"
?>

<h2>Автомобили в наличии:</h2>
<body>

	<?php
		$mysqli = new mysqli("localhost", "mysql", "mysql");
		$mysqli->select_db("users") or die ("Нет такой таблицы!");

		$result = $mysqli->query("SELECT id, car_id, car_market_id FROM cars_in_store");

            print "<table border=1>";
            echo "<tr> <td>Марка</td>  <td>Модель</td> <td>Год выпуска</td> <td>Тип трансмиссии</td> <td>Цена</td> <td>Автосалон</td> <td>Адрес салона</td> </tr>";
			while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                $car_info = getCarById($row['car_id'], $mysqli);
                foreach ($car_info as &$value) {
                    echo "<td>" . $value . "</td>";
                }

                $car_market_id = getCarMarketById($row['car_market_id'], $mysqli);
                foreach ($car_market_id as &$value) {
                    echo "<td>" . $value . "</td>";
                }

				echo "<td><a href='car_market_edit_page.php?id=" . $row['id']
				. "'>Редактировать</a></td>";
				echo "<td><a href='delete_car_from_store.php?id=" . $row['id']
                . "'>Убрать с продажи</a></td>";
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего автомобилей в наличии: $num_rows </p>");

			echo "<a href='put_car_to_store_page.php'>Выставить автомобиль на продажу</a>";

        $mysqli->close();
        
        function getCarById($car_id, $mysqli) {
            $car_request = $mysqli->query("SELECT mark, model, year, transmition, cost FROM `cars` WHERE car_id=".$car_id);
            $car = mysqli_fetch_array($car_request);
            return array($car['mark'], $car['model'], $car['year'], $car['transmition'], $car['cost']);
        }

        function getCarMarketById($car_market_id, $mysqli) {
            $car_market_request = $mysqli->query("SELECT name, address FROM `car_market` WHERE id=".$car_market_id);
            $car_market = mysqli_fetch_array($car_market_request);
            return array($car_market['name'], $car_market['address']);
        }

	?>

</body>
</html>