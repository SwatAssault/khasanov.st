<HTML>
    <HEAD>  
        <TITLE>Хасанов Р.М. ИВТ-417</TITLE>
    </HEAD>

    <BODY>

        <FORM method="post" action="<?php print $PHP_SELF ?>">
        Введите два числа:
        <INPUT type="text" name="a" size="3">
        <INPUT type="text" name="b" size="3"> 
        <P> <INPUT type="submit" name="comp" value="Сравнить">
        </FORM>

        <?
            if (isset($_POST["comp"])) {
                $a = $_POST["a"];
                $b = $_POST["b"];
                echo "<br>Сравнение чисел:<br>";
                if ($a > $b) {
                    echo $a . " > " . $b . "<br>";
                } elseif ($b > $a) {
                    echo $b . " > " . $a . "<br>";
                } else {
                    echo "<br>Числа равны!<br>";
                }
            }
        ?>

    </BODY>
</HTML>