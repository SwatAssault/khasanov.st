<?
    $mysqli = new mysqli("localhost", "mysql", "mysql");
    $mysqli->select_db("users") or die ("Нет такой таблицы!");

    $result = $mysqli->query("SELECT * FROM emails");

    $emailsArray = array();

    while ($row = mysqli_fetch_array($result)) {
        $arr['name'] = $row['name'];
        $arr['title'] = $row['title'];
        $arr['message'] = $row['message'];
        $arr['time'] = $row['time'];
        $arr['email'] = $row['email'];
        array_push($emailsArray, json_encode($arr));
    }

    echo json_encode($emailsArray);
?>