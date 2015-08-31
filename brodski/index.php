<?php


if (isset ($_GET['add'])){
    include 'addform.html.php';
    exit;
}

$lyrics = scandir("lyrics");
$lyrics = array_diff($lyrics, array('.','..','.DS_Store'));
$lyrics = array_values($lyrics);
$names = scandir('names');
$names = array_diff($names, array('.','..','.DS_Store'));
$names = array_values($names);




if (isset ($_POST['name']) and ($_POST['lyrics'])){

    function generate($length = 5){
        $chars = 'abdefhiknrstyz23456789';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

    $file = generate(5);
    $file .='.txt';
    $names[] = $file;
    $handle=fopen('names/'.$file,'x');
    fwrite($handle,trim($_POST['name']));
    fclose($handle);

    $lyrics[] =$file;
    $handle=fopen('lyrics/'.$file,'x');
    fwrite($handle,$_POST['lyrics']);
    fclose($handle);
    array_values($names);
    array_values($lyrics);
    header('location: .');

}


if (isset($_POST['rename']) and ($_POST['relyrics'])){
    $i = $_POST['i'];
    $handle = fopen('names/'.$names[$i],'w');
    fwrite($handle,$_POST['rename']);
    fclose($handle);
    $handle = fopen('lyrics/'.$lyrics[$i],'w');
    fwrite($handle,$_POST['relyrics']);
    fclose($handle);
    header('location: .');
}

if (isset ($_POST['delete'])){
    unlink('names/'.$names[$_POST['delete']]);
    unlink('lyrics/'.$lyrics[$_POST['delete']]);
    header('location: .');

}


include "brodski.html.php";