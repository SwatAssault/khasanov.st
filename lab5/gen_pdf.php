<?php
    //require('../fpdf182/fpdf.php');

    require('../fpdf/fpdf.php');

    class PDF extends FPDF {

        function BasicTable($header, $result, $mysqli) {
           
            // Header
            $this->Cell(5, 6, "№", 1);
            unset($header[0]);
            foreach($header as $col) {
                $this->Cell(27, 6, $col, 1);
            }
            $this->Ln();

            // Data
            $n = 0;
            while ($row = mysqli_fetch_array($result)) {
                $n++;
                $this->Cell(5, 6, $n, 1);
                $line = getLine($n, $row['car_id'], $row['car_market_id'], $mysqli);
                foreach ($line as $value) {
                    $this->Cell(27, 6, $value, 1); 
                }
                $this->Ln();
            }
        }


    }

    $mysqli = new mysqli("localhost", "mysql", "mysql");
    $mysqli->select_db("users") or die ("Нет такой таблицы!");
    $result = $mysqli->query("SELECT id, car_id, car_market_id FROM `cars_in_store`");

    $column_titles = ['№', 'Марка', 'Модель', 'Год выпуска', 'Тип трансмисии', 'Стоимость', 'Автосалон', 'Адрес салона'];

    $pdf = new PDF();

    $pdf->SetFont('Arial','',10);
    $pdf->AddPage();
    $pdf->BasicTable($column_titles, $result, $mysqli);


    $pdf->Output();

    function getLine($n, $car_id, $car_market_id, $mysqli) {
        return array_merge(getCarById($car_id, $mysqli), getCarMarketById($car_market_id, $mysqli));
    }

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

