<?php
session_start();

$value = $_POST['num'];
$mult1 = $value*1;
$mult2 = $value*2;
$mult3 = $value*3;
$mult4 = $value*4;
$mult5 = $value*5;
$mult6 = $value*6;
$mult7 = $value*7;
$mult8 = $value*8;
$mult9 = $value*9;
$mult10 = $value*10;

// ERROR CHECK START
if (is_null($value)) {
    $_SESSION['error'] = 'Digite um valor primeiro!';
    header("location:index.php?");
} else 
if (!is_numeric($value)) {
    $_SESSION['error'] = 'Digite um valor numérico!';
    header("location:index.php?");
} else 
if ($value <= 0) {
    $_SESSION['error'] = 'Digite um valor maior que zero!';
    header("location:index.php?");
} else
// ERROR CHECK END


    $_SESSION['msg'] = nl2br("$value x 1 = $mult1
    $value x 2 = $mult2
    $value x 3 = $mult3
    $value x 4 = $mult4
    $value x 5 = $mult5
    $value x 6 = $mult6
    $value x 7 = $mult7
    $value x 8 = $mult8
    $value x 9 = $mult9
    $value x 10 = $mult10"); 
    header("location:index.php?");


?>