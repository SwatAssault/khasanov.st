<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Хасанов Р.М. ИВТ-417</title>
</head>
<body>
    <h4>Текст:</h4>
    <?php
        $text = $_POST["text"];
        $letter = $_POST["letter"];
        echo $text . "<br>";

        echo "<h4>Буква:</h4>";
        echo $letter . "<br>";

        echo "<br>Слова, начинающиеся на " . $letter . ":<br>";

        $words = explode(' ', $text); 

        $wordsCount = 0;

        $_POST["reg"] == '' ? $reg = true : $reg = false;

        foreach ($words as &$word) {
            if (!$reg) {
                if (mb_substr($word, 0, 1,'utf-8') == $letter) {
                    $wordsCount += 1;
                    echo $word . " ";
                }
            } else {
                if ((mb_strtoupper(mb_substr($word, 0, 1,'utf-8')) === mb_strtoupper($letter))) {
                    $wordsCount += 1;
                    echo $word . " ";
                }
            }
            
        }
        
        if ($wordsCount == 0) {
            echo "Таких слов нет!";
        }

    ?>
</body>
</html>