<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>ИВТ-417 Хасанов Р.М.</title>
</head>
<body>

	<?php

        $link = mysqli_connect('localhost', 'mysql', 'mysql') or die ("Невозможно подключиться к серверу");
        mysqli_query($link, 'SET NAMES utf8');
        mysqli_select_db($link, 'users') or die("Нет такой БД!");

        $result = mysqli_query($link, "SELECT id_user, user_name, user_login, user_password, user_e_mail, user_info FROM `user` WHERE id_user=".$_GET['id_user']);

        while ($row = mysqli_fetch_array($result)) {
            $id = $_GET['id_user'];
            $name = $row['user_name'];
            $login = $row['user_login'];
            $password = $row['user_password'];
            $e_mail = $row['user_e_mail'];
            $info = $row['user_info'];
        }
        
        print "<form action='save_edit.php' metod='get'>";
        print "Имя: <input name='name' size='50' type='text'
        value='".$name."'>";
        print "<br>Логин: <input name='login' size='20' type='text'
        value='".$login."'>";
        print "<br>Пароль: <input name='password' size='20' type='text'
        value='".$password."'>";
        print "<br>Е-mail: <input name='e_mail' size='30' type='text'
        value='".$e_mail."'>";
        print "<br>Информация: <textarea name='info' rows='4'
        cols='40'>".$info."</textarea>";
        print "<input type='hidden' name='id_user' value='".$id."'> <br>";
        print "<input type='submit' name='' value='Сохранить'>";
        print "</form>";
        print "<p><a href=\"lab4-1.php\"> Вернуться к списку
        пользователей </a>";

      
	?>

</body>
</html>