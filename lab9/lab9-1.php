<?
if($_POST['loadAmount'] && $_POST['currentAmount']) {

    $currentAmount = $_POST['currentAmount'];
    $loadAmount = $_POST['loadAmount'];

    $from = $currentAmount + 1;
    $to = $currentAmount + $loadAmount + 1;

    $mysqli = new mysqli("localhost", "mysql", "mysql");
    $mysqli->select_db("users") or die ("Нет такой таблицы!");

    $result = $mysqli->query("SELECT * FROM news WHERE id BETWEEN '" . $from . "' AND  '" . $to . "'");

    $newsArray = array();

    while ($row = mysqli_fetch_array($result)) {
        $arr['title'] = $row['title'];
        $arr['newsText'] = $row['newsText'];
        $arr['img'] = $row['img'];
        array_push($newsArray, json_encode($arr));
    }

    echo json_encode($newsArray);
} 
?>