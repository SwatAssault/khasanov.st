<?php
    require_once('../PHPExcel-1.8/Classes/PHPExcel.php');
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="carsInStore.xlsx"');
    header('Cache-Control: max-age=0');
    $document = new PHPExcel();
    $objWriter = PHPExcel_IOFactory::createWriter($document, 'Excel2007');
    $objWriter->save('php://output');
    exit;
?>