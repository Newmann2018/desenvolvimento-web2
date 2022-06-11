<?php
session_start();
require_once "retangulo.class.php";


if (isset($_POST['base']) &&
    isset($_POST['altura'])) {

    $base = $_POST['base'];
    $altura = $_POST['altura'];

// ERROR CHECK START
if (is_null($base)) {
    $_SESSION['error'] = 'Um ou mais campos está vazio';
    header("location:index.php?");
} else 
if (is_null($altura)) {
    $_SESSION['error'] = 'Um ou mais campos está vazio';
    header("location:index.php?");
} else 
//
if ($base <= 0) {
    $_SESSION['error'] = 'Um ou mais campos deve ser maior que zero!';
    header("location:index.php?");
} else 
if ($altura <= 0) {
    $_SESSION['error'] = 'Um ou mais campos deve ser maior que zero!';
    header("location:index.php?");
} else 
//
if (!is_numeric($base)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
if (!is_numeric($altura)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
// ERROR CHECK END

$retangulo = new Retangulo(
    $base,
    $altura,
);

$tipo = $retangulo->verificaTipo();
$area = $retangulo->calculaArea();
$perimetro = $retangulo->calculaPerimetro();

$_SESSION['msg'] = "Base=$base, Altura=$altura, indica que a figura é um $tipo com uma área de $area e um perímetro de $perimetro.";
header("location:index.php?");

}
   


?>