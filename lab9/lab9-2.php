<?
if($_POST['name'] && $_POST['email'] && $_POST['title'] && $_POST['message'] && $_POST['time']) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $time = $_POST['time'];

    $link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'users') or die ("Нет такой таблицы!");

    $sql_add = "INSERT INTO emails SET name='" . $name ."', title='". $title ."', message='". $message ."', time='". $time ."', email='". $email ."'";

	mysqli_query($link, $sql_add);
	if (mysqli_affected_rows($link) > 0) {
		echo("Ваше сообщение отправлено. Это уведомление от сервера");
	} else { 
		echo("Ошибка отправки");
	}
    
} 
?>