<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Строки</title>
</head>
<body>
<h1>1</h1>
<?php

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(1, 22, 5, 66, 3, 57);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
?>

?>

</body>
</html>
