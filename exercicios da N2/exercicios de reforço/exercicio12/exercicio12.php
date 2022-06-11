<?php
session_start();

$num = $_POST['num'];

// ERROR CHECK START
if (is_null($num)) {
    $_SESSION['error'] = 'Digite o valor primeiro!';
    header("location:index.php?");
} else


// ERROR CHECK END

$nums = explode(',', $num);

$message;

foreach ($nums as $num) {
    if (!is_numeric($num)) {
        $message .= nl2br("$num Não é um valor numérico!");
    } else

    $message .= nl2br("$num x 1 = ".$num * 1 ." \n");
    $message .= nl2br("$num x 2 = ".$num * 2 ." \n");
    $message .= nl2br("$num x 3 = ".$num * 3 ." \n");
    $message .= nl2br("$num x 4 = ".$num * 4 ." \n");
    $message .= nl2br("$num x 5 = ".$num * 5 ." \n");
    $message .= nl2br("$num x 6 = ".$num * 6 ." \n");
    $message .= nl2br("$num x 7 = ".$num * 7 ." \n");
    $message .= nl2br("$num x 8 = ".$num * 8 ." \n");
    $message .= nl2br("$num x 9 = ".$num * 9 ." \n");
    $message .= nl2br("$num x 10 = ".$num * 10 ." \n \n");
    }

    $_SESSION['msg'] = $message;
    header("location:index.php?");

?>