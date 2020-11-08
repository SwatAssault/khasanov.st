<HTML>
    <HEAD>  
        <TITLE>Хасанов Р.М. ИВТ-417</TITLE>
    </HEAD>

    <BODY>
        <h2>Калькулятор</h2>
        <FORM method="post" action="<?php print $PHP_SELF ?>">
        <INPUT type="text" name="a" size="3">
        <INPUT type="text" name="b" size="3"> 
        <select name="action">Действие:
            <OPTION VALUE="1" SELECTED> сложить
            <OPTION VALUE="2"> вычесть
            <OPTION VALUE="3"> умножить
            <OPTION VALUE="4"> разделить
        </select>
        <P> <INPUT type="submit" name="ex" value="Вычислить">
        </FORM>

        <?
            if (isset($_POST["ex"])) {
                $a = $_POST["a"];
                $b = $_POST["b"];
                echo "<br>Результат:<br>";
                switch ($_POST["action"]) {
                    case 1:
                        $result = $a + $b;
                    break;

                    case 2:
                        $result = $a - $b;
                    break;

                    case 3:
                        $result = $a * $b;
                    break;

                    case 4:
                        $result = $a / $b;
                    break;
                }
                echo $result;
            }
        ?>

    </BODY>

</HTML>