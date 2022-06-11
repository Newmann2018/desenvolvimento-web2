<?php
session_start();

$num = $_POST['num'];

// ERROR CHECK START
if (is_null($num)) {
    $_SESSION['error'] = 'Digite o valor primeiro!';
    header("location:index.php?");
} else 
if (!is_numeric($num)) {
    $_SESSION['error'] = 'Não é um valor numérico!';
    header("location:index.php?");
} else 
// ERROR CHECK END

if ($num > 0) {
    $_SESSION['msg'] = 'O número é POSITIVO';
    header("location:index.php?");
} else 
if ($num < 0) {
    $_SESSION['msg'] = 'O número é NEGATIVO';
    header("location:index.php?");
} else 
    $_SESSION['msg'] = 'O número é NEUTRO';
    header("location:index.php?");


?>