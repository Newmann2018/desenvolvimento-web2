<?php
session_start();

$month = $_POST['month'];

// ERROR CHECK START
if (is_null($month)) {
    $_SESSION['error'] = 'Você não digitou o valor!';
    header("location:index.php?");
} else 
if (!is_numeric($month)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
// ERROR CHECK END
 
switch($month) {
    case 1: {
        $_SESSION['msg'] = "Janeiro"; 
        header("location:index.php?");
    } break;
    case 2: {
        $_SESSION['msg'] = "Fevereiro"; 
        header("location:index.php?");
    } break;
    case 3: {
        $_SESSION['msg'] = "Março"; 
        header("location:index.php?");
    } break;
    case 4: {
        $_SESSION['msg'] = "Abril"; 
        header("location:index.php?");
    } break;
    case 5: {
        $_SESSION['msg'] = "Maio"; 
        header("location:index.php?");
    } break;
    case 6: {
        $_SESSION['msg'] = "Junho"; 
        header("location:index.php?");
    } break;
    case 7: {
        $_SESSION['msg'] = "Julho"; 
        header("location:index.php?");
    } break;
    case 8: {
        $_SESSION['msg'] = "Agosto"; 
        header("location:index.php?");
    } break;
    case 9: {
        $_SESSION['msg'] = "Setembro"; 
        header("location:index.php?");
    } break;
    case 10: {
        $_SESSION['msg'] = "Outubro"; 
        header("location:index.php?");
    } break;
    case 11: {
        $_SESSION['msg'] = "Novembro"; 
        header("location:index.php?");
    } break;
    case 12: {
        $_SESSION['msg'] = "Dezembro"; 
        header("location:index.php?");
    } break;
    default: {
        $_SESSION['error'] = "Não existe mês com este número!"; 
        header("location:index.php?");
    } break;
}
   


?>