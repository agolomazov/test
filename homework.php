<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Строки</title>
</head>
<body>
<h1>1</h1>
<?php

$array = array('первая строка', 'вторая строка', 'третья строка', 'четвертая строка', 'пятая строка');
function strings($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        $str=$arr[$i];
        echo "<p>$str</p>";
    }
}
strings($array);

?>

<h1>2</h1>

<?php
function doit($arr, $action){
    if ($action =="*"){
        $prod=1;
        for($p=0; $p<count($arr); $p++){
            $prod *= $arr[$p];
        }
        echo "$prod";
    } elseif ($action =="+") {
        $sum = 0;
        for($s=0; $s<count($arr); $s++){
            $sum += $arr[$s];
        }
        echo "$sum";
    }elseif ($action == "-") {
        $min = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $min -=$arr[$i];
        }
        echo "$min";
    }elseif ($action == "/"){
        $del = 1;
        for ($d = 0; $d < count($arr); $d++) {
            if($arr[$d]!=0){
                $del /= $arr[$d];
            }
        }
        echo "$del";
    }elseif ($action == "%") {
        $fdel = 1;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] != 0) {
                $fdel %= $arr[$i];
            }
        }
        echo "$fdel";
    }else {
        echo 'Ошибка. Введите "*","+","-" или "/"';
    }
}
$arrayN =array(1,2,3,4,5,6,7,8);
doit($arrayN,"-");


echo"<h1>3</h1>";


function arif(){
    $arrayArg=func_get_args();
    $act=func_get_arg(0);
    array_shift($arrayArg);
    doit($arrayArg, $act);


}
arif("*",5,8,10);


?>

<h1>4</h1>

<?php

function table($width, $heigth){
    if(is_int($width) && is_int($heigth)){
        echo "<table border='1' cellpadding='5' width='50%' cellspacing='0'>";
        for ($h=1; $h<=$heigth; $h++){
            echo "<tr>";

            for($i = 1; $i<=$width; $i++) {
                $n=$i*$h;
                echo "<td>$n</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    }else{
        echo "Ошибка, введите 2 целых числа";
    }
}
table(10,8);

?>
<h1>5</h1>

<?php
$numbers=array(7,22,5,66,3,57);
function sorts($numbers)
{
    $p=$numbers[0];
    $arSor=array();

    for ($i = 1; $i < count($numbers); $i++) {
        if ($p <= $numbers[$i]) {
            $p = $p;
        } else {
            $p = $numbers[$i];
        }
    }
    $arSor[] = $p;
    $key = array_search($p, $numbers);
    unset($numbers[$key]);

    print_r($arSor);

}
sorts($numbers);


?>

<h1>6</h1>
<?php
function recurs($first,$last){
    if ($first % 2 !=0) {
        echo "$first<br>";
    }if($first<$last){
        $first++;
        recurs($first, $last);
    }


}
recurs(8,16);
?>

<h1>7</h1>
<?php


function palindrom($string){
    $string = mb_strtolower($string);
    $reString =strrev($string);
    if($reString==$string){
        echo "TRUE";
    }else{
        echo "FALSE";
    }

}
palindrom("Civic");
?>
</body>
</html>



