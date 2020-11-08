<HTML>
    <HEAD>  
        <TITLE>Хасанов Р.М. ИВТ-417</TITLE>
    </HEAD>

    <BODY>
        
        <FORM method="post" action="<?php print $PHP_SELF ?>">
        Введите N:
        <INPUT type="text" name="n" size="3">
        
        <select name="action">Опция:
            <OPTION VALUE="1" SELECTED> четные
            <OPTION VALUE="2"> нечетные
            <OPTION VALUE="3"> простые
            <OPTION VALUE="4"> составные
        </select>
        <P> <INPUT type="submit" name="ex" value="Вычислить">
        </FORM>

        <?
            if (isset($_POST["ex"])) {
                $n = $_POST["n"];

                switch ($_POST["action"]) {
                    case 1:
                        for ($i = 1; $i < $n; $i++) {
                            if (isEven($i)) {
                                echo $i . " ";
                            }
                        }
                    break;

                    case 2:
                        for ($i = 1; $i < $n; $i++) {
                            if (!isEven($i)) {
                                echo $i . " ";
                            }
                        }
                    break;

                    case 3:
                        echo "<br>Простые:<br>";
                        for ($i = 1; $i < $n; $i++) {
                            if (isPrime($i)) {
                                echo $i . " ";
                            }
                        }
                    break;

                    case 4:
                        echo "<br>Составные:<br>";
                        for ($i = 1; $i < $n; $i++) {
                            if (!isPrime($i)) {
                                echo $i . " ";
                            }
                        }
                    break;
                }
                
            }

            function isPrime($number) {
                for ($i = 2; $i <= $number / 2; $i++) {
                    if ($number % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            function isEven($number) {
                if ($number % 2 == 0) {
                    return true;
                }
                return false;
            }

        ?>

    </BODY>

</HTML>