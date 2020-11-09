<?php

    include_once('PHPExcel/PHPExcel.php');
    $document = new \PHPExcel();
    $objWriter = \PHPExcel_IOFactory::createWriter($document, 'Excel5');
    
    $objWriter->save("carsInStore.xls");


?>