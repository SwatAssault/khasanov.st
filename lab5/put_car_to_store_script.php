<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Хасавов Р.М. ИВТ-417</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
        mysqli_query($link, 'SET NAMES utf8');
        mysqli_select_db($link, 'users') or die("Нет такой БД!");

        $check = true;
        $chech_query = $link->query("SELECT car_id FROM cars_in_store");
        while ($row = mysqli_fetch_array($chech_query)) {
            if ($row['car_id'] == $_GET['car']) {
                echo "Этот автомобиль уже выставлен на продажу!!!<br>";
                print "<p><a href=\"cars_in_store_page.php\"> Вернуться к списку автомобилей в продаже </a>"; 
                $check = false;
                break;
            }
        }
        
        if ($check) {
            $query = "INSERT INTO cars_in_store SET car_id='" . $_GET['car']."', car_market_id='".$_GET['car_market']."'";
            mysqli_query($link, $query);
            if (mysqli_affected_rows($link) > 0) {
                print "<p>Автомобиль выставлен на продажу.";
                print "<p><a href=\"cars_in_store_page.php\"> Вернуться к списку автомобилей в продаже </a>"; 
            } else { 
                print "Ошибка сохранения. <a href=\"cars_in_store_page.php\">Вернуться к списку автомобилей в продаже </a>"; 
            }
        }
        
    ?>
</body>
</html>
