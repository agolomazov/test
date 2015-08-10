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
        $prod=array_product($arr);
        echo "$prod";
    } elseif ($action =="+") {
        $sum = array_sum($arr);
        echo "$sum";
    }elseif ($action == "-") {
        $min = $arr[0];
        for ($i = 1; $i <= count($arr); $i++) {
            $min = $min - $arr[$i];
        }
        echo "$min";
    }elseif ($action == "/"){
        $del = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            $del = $del / $arr[$i];
        }
        echo "$del";
    }else {
        echo 'Ошибка. Введите "*","+","-" или "/"';
    }
}
$arrayN =array(1,2,3,4,5,6,7,8);
doit($arrayN,"/");

?>

<h1>3</h1>

<?php

?>
</body>
</html>
