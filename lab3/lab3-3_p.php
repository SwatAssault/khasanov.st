<?
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 echo ("сумма чисел = $c");
} else {
 $c=$_POST["a"]*$_POST["b"];
 echo ("произведение чисел = $c");
 }
echo ("<BR> <A href='lab3-3.html'> Вернуться назад </A>");
?>