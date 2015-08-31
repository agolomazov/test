<?php

$string = 'гуляки';
$names = file('names.txt');
$handle = fopen('names.txt', 'a');
$f = fwrite($handle,$string);
fclose($handle);