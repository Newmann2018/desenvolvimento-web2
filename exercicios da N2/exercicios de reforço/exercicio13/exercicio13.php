<?php
session_start();

$num = $_POST['num'];

// ERROR CHECK START
if (is_null($num)) {
    $_SESSION['error'] = 'Digite o valor primeiro!';
    header("location:index.php?");
} else


// ERROR CHECK END

$nums = explode('-', $num);

$message;
$error;

foreach ($nums as $num) {
    switch($num) {
        case 1: {
            $message .= nl2br("$num - Janeiro \n"); 
        } break;
        case 2: {
            $message .= nl2br("$num - Fevereiro \n"); 
        } break;
        case 3: {
            $message .= nl2br("$num - Março \n"); 
        } break;
        case 4: {
            $message .= nl2br("$num - Abril \n"); 
        } break;
        case 5: {
            $message .= nl2br("$num - Maio \n"); 
        } break;
        case 6: {
            $message .= nl2br("$num - Junho \n"); 
        } break;
        case 7: {
            $message .= nl2br("$num - Julho \n"); 
        } break;
        case 8: {
            $message .= nl2br("$num - Agosto \n"); 
        } break;
        case 9: {
            $message .= nl2br("$num - Setembro \n"); 
        } break;
        case 10: {
            $message .= nl2br("$num - Outubro \n"); 
        } break;
        case 11: {
            $message .= nl2br("$num - Novembro \n"); 
        } break;
        case 12: {
            $message .= nl2br("$num - Dezembro \n"); 
        } break;
        default: {
            $error .= nl2br("$num não corresponde a nenhum mês! \n");
        } break;
    }
}

    $_SESSION['error'] = $error;
    $_SESSION['msg'] = $message;
    header("location:index.php?");

?>