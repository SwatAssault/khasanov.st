<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
    <?php
        error_reporting(0);
        echo "<h2><a href='cars_in_store_page.php'>Назад</a></h2>";
        require_once('../PHPExcel-1.8/Classes/PHPExcel.php');
        $document = new PHPExcel();

        $sheet = $document->setActiveSheetIndex(0); // Выбираем первый лист в документе
    
        $columnPosition = 0; // Начальная координата x
        $startLine = 2; // Начальная координата y

        $mysqli = new mysqli("localhost", "mysql", "mysql");
        $mysqli->select_db("users") or die ("Нет такой таблицы!");

        $result = $mysqli->query("SELECT id, car_id, car_market_id FROM `cars_in_store`");

        $column_titles = ['№', 'Марка', 'Модель', 'Год выпуска', 'Тип трансмисии', 'Стоимость', 'Автосалон', 'Адрес салона'];

        $currentColumn = $columnPosition;
        
        // Шапка
        foreach ($column_titles as $column) {
            $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $column);
            $currentColumn++;
        }
        
      
        // Контент
        $num = 1;
        while ($row = mysqli_fetch_array($result)) {
            $startLine++;
            $currentColumn = 0;
            $content_array = array();
            array_push($content_array, $num);
            $num++;
            $car_info = getCarById($row['car_id'], $mysqli);
            foreach ($car_info as &$value) {
                array_push($content_array, $value);
            }
            $car_market_id = getCarMarketById($row['car_market_id'], $mysqli);
            foreach ($car_market_id as &$value) {
                array_push($content_array, $value);
            }
            foreach ($content_array as $content) {
                $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $content);
                $currentColumn++;
            }
            $startline++;
        }

        $document->getActiveSheet()->getColumnDimension('A') ->setWidth(5); 
        foreach(range('B','Z') as $columnID) { 
            $document->getActiveSheet()->getColumnDimension($columnID) ->setAutoSize(true); 
        } 

        $objWriter = \PHPExcel_IOFactory::createWriter($document, 'Excel5');
        $objWriter->save("carsInStore.xls");
        
        echo "Файл успешно сохранен<br><br>";
        echo "<a href='carsInStore.xls'>Скачать файл</a>";

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