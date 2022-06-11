<?php
session_start();

$num = $_POST['num'];

// ERROR CHECK START
if (is_null($num)) {
    $_SESSION['error'] = 'Digite o valor primeiro!';
    header("location:index.php?");
}
// ERROR CHECK END

$nums = explode(' ', $num);

$message;
$error;

foreach ($nums as $num) {
if ($num > 0) {
    $message .= nl2br("$num é POSITIVO \n \n");
} else 
if ($num < 0) {
    $message .= nl2br("$num é NEGATIVO \n \n ");
} else 
if ($num == 0) {
    $message .= nl2br("$num é NEUTRO \n \n ");
} else 
    $error .= nl2br("$num não é um valor numérico válido! \n \n ");
}

$_SESSION['msg'] = $message;
$_SESSION['error'] = $error;
header("location:index.php?");
?>