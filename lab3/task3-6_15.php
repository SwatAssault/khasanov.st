<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
    <h4>Зашифрованная строка:</h4>
    <?php
        
        $message = $_POST["message"];

        for ($i = 0; $i < strlen($message) - 1; $i++) {
            if ($i % 2 == 0) {
                $result .= mb_substr($message, $i + 1, 1,'utf-8');
            }
        }
        
        for ($i = strlen($message); $i > 0; $i--) {
            if ($i % 2 != 0) {
                $result .= mb_substr($message, $i - 1, 1,'utf-8');
            }
        }

        echo $result;

    ?>
</body>
</html>