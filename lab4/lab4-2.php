<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ИВТ-417 Хасанов Р.М.</title>
</head>
<body>
    <H2>Регистрация на сайте:</H2>
    <form action="save_new.php" metod="get">
    <p>Имя: <input name="name" size="50" type="text">
        <p><br>Логин: <input name="login" size="20" type="text">
        <p><br>Пароль: <input name="password" size="20" type="password">
        <p><br>Е-mail: <input name="e_mail" size="30" type="text">
        <p><br>Информация: <textarea name="info" rows="4" cols="40">
        </textarea>
        <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
    </form>

    <p><a href="/lab4/lab4-1.php"> Вернуться к списку пользователей </a>

</body>
</html>