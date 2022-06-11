<?php
session_start();
require_once "triangulo.class.php";


if (isset($_POST['lado1']) &&
    isset($_POST['lado2']) &&
    isset($_POST['lado3'])) {

    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];


// ERROR CHECK START
if (!is_numeric($lado1)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
if (!is_numeric($lado2)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
if (!is_numeric($lado3)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
//
if ($lado1 <= 0) {
    $_SESSION['error'] = 'Por favor, use valores maiores que zero!';
    header("location:index.php?");
} else 
if ($lado2 <= 0) {
    $_SESSION['error'] = 'Por favor, use valores maiores que zero!';
    header("location:index.php?");
} else 
if ($lado3 <= 0) {
    $_SESSION['error'] = 'Por favor, use valores maiores que zero!';
    header("location:index.php?");
} else 
//
if (is_null($lado1)) {
    $_SESSION['error'] = 'Um ou mais campos estão vazios!';
    header("location:index.php?");
} else 
if (is_null($lado2)) {
    $_SESSION['error'] = 'Um ou mais campos estão vazios!';
    header("location:index.php?");
} else 
if (is_null($lado3)) {
    $_SESSION['error'] = 'Um ou mais campos estão vazios!';
    header("location:index.php?");
} else 
// ERROR CHECK END 

$triangulo = new Triangulo($lado1, $lado2, $lado3,);

$checktri = $triangulo->verificaTriangulo();
$type = $triangulo->verificaTipo();

if (!$checktri) {
    $_SESSION['error'] = nl2br("As medidas do triângulo is estão incorretas!
                               um lado do triângulo não pode ser maior que a soma dos outros dois lados!");
    header("location:index.php?");
} else

$_SESSION['msg'] = "O triângulo é $type";
header("location:index.php?");

}
   


?>