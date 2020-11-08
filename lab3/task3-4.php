<HTML>
    <HEAD>  
        <TITLE>Хасанов Р.М. ИВТ-417</TITLE>
    </HEAD>

    <BODY>

        <FORM method="post" action="<?php print $PHP_SELF ?>">
        Введите логин:
        <INPUT type="text" name="login" size="10">
        
        <P> <INPUT type="submit" name="enter" value="Войти">
        </FORM>

        <?
            $logins = array("Ivanov_mail", "swatAssault", "dreamTeam", "qwerty");
            if (isset($_POST["enter"])) {
                $login = $_POST["login"];
                if (in_array($login, $logins)) {
                    echo "<br>Добро подаловать, " . $login . "!<br>";    
                } else {
                    echo "<br>Незарегистрированный пользователь: " . $login . "!<br>";    
                }
                
            }
        ?>

    </BODY>
</HTML>