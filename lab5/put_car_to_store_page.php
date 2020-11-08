<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ИВТ-417 Хасанов Р.М.</title>
</head>

<?php 
    echo "<h2><a href='lab5.php'>На главную</a></h2>"
?>

<body>
    <H2>Выставить автомобиль на продажу:</H2>

    <?php
        $mysqli = new mysqli("localhost", "mysql", "mysql");
		$mysqli->select_db("users") or die ("Нет такой таблицы!");

        $car_request = $mysqli->query("SELECT car_id, mark, model, year FROM cars");
        $cars_amount = mysqli_num_rows($car_request);

        $car_market_request = $mysqli->query("SELECT id, name, address FROM car_market");
        $cars_markets_amount = mysqli_num_rows($car_market_request);

        $ok = false;

        if ($cars_amount == 0) {
            echo "Чтобы выставить автомобиль на продажу, добавьте хотя бы один автомобиль!<br>";
            echo "<a href='../lab4/task4_add.php'>Добавить автомобиль</a><br>";
        } elseif ($cars_markets_amount == 0) {
            echo "Чтобы выставить автомобиль на продажу, добавьте хотя бы один автосалон!<br>";
            echo "<a href='car_market_add.php'>Добавить автосалон</a><br>";
        } else {
            $ok = true;
        }

    ?>

    <form action="put_car_to_store_script.php" metod="get">
    
        <p><br>Автомобиль: <select name="car">
        <?php
            while ($row = mysqli_fetch_array($car_request)) {
                echo "<option value=\"".$row['car_id']."\" >" .$row['mark']. " " .$row['model']. " " .$row['year']. "</option>";
            }
        ?>
        </select>

        <p><br>Автосалон: <select name="car_market">
        <?php
            while ($row = mysqli_fetch_array($car_market_request)) {
                echo "<option value=\"".$row['id']."\" >" .$row['name']. " " .$row['address']. "</option>";
            }
        ?>
        </select>

        <?php
            if ($ok) {
                echo "<p><input name='add' type='submit' value='Выставить на продажу'>";
            }
        ?>
        
    </form>


</body>
</html>