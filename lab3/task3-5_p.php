<?
    if (isset($_POST["ex"])) {
        
        $name = $_POST["name"];

        $yes = array("f3","f9","f10","f13","f14","f19");
        $no = array("f1","f2","f4","f5","f6","f7","f8","f11","f12","f15","f16","f17","f18","f20");
        $sum = 0;

        for($i = 0; $i < count($yes); $i++){
            if ($_POST[$yes[$i]] === "y") {
                $sum +=1;
            }
        }

        for($i = 0; $i < count($no); $i++){
            if ($_POST[$no[$i]] === "n") {
                $sum +=1;
            }
        }

        echo "<h4>Результат:</h4>";

        if($sum > 15) {
            echo $name . ", у вас покладистый характер<br>";                    
        } elseif ($sum >= 8 && $sum < 15) {
            echo $name . ", вы не лишены недостатков, но с вами можно ладить<br>";
        } else {
            echo $name . ", вашим друзьям можно посочувствовать<br>";
        }

    }
?>