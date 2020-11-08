<?php

    /*
        Библиотека для работы с матрицами
    */

    /*
        Вывод задания
    */
    function printTask ($task) {
        echo  "<h4>Задание: " . "</br>" . $task . "</h4></br>";
    }

    /*
        Создание и заполнение матрицы размерности n
    */
    function fillMatrix ($n, $m) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $matrix[$i][$j] = rand(-50, 50);
            }
        }
        return $matrix;
    }

    /*
        Вывод матрицы
    */
    function printMatrix ($matrix) {
        echo "<h4>Матрица " . count($matrix) . " х " . count($matrix[0]) . ": </h4>";
        echo "<TABLE border=1>";

        foreach ($matrix as $key => $value) {
            echo "<tr>";
            foreach ($value as $data) {
                echo "<td align=center>". $data ."</td>";
            }
            echo "</tr>";
        }

        echo "</TABLE>";
        echo "</br>";
    }

    /*
        Вариант 15
        Просуммировать элементы двумерного массива, сумма индексов которых равна заданной
        константе
    */
    function processMatrix_15 ($matrix, $const) {
        $s = -1;
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                if ($const == $i + $j) {
                    $s += $matrix[$i][$j];
                }
            }
        }
        return $s;
    }

    /*
        Вариант 3
        Все ненулевые элементы заменить обратными по величине и
        противоположными по знаку
    */
    function processMatrix_3 ($matrix) {
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                if ($matrix[$i][$j] !== 0) {
                    $matrix[$i][$j] = round((-1) / $matrix[$i][$j], 2);
                }
            }
        }
        return $matrix;
    }

?>