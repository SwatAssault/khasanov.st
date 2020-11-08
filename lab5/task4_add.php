<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ИВТ-417 Хасанов Р.М.</title>
</head>
<body>
    <H2>Добавить автомобиль:</H2>
    <form action="task4_save_new.php" metod="get">
    
        <p><br>Марка: <input name="mark" size="20" type="text">
        <p><br>Модель: <input name="model" size="20" type="text">
        <p><br>Год выпуска: <input name="year" size="30" type="number">
        <p><br>Тип трансмиссии: <input name="transmition" size="30" type="text">
        <p><br>Объем выпуска: <input name="amount" size="30" type="number">
        <p><br>Стоимость: <input name="cost" size="30" type="number">

        <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
    </form>

    <p><a href="/lab4/task4-1.php"> Вернуться к списку автомобилей </a>

</body>
</html>