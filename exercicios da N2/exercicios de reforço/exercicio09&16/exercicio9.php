<?php
session_start();
require_once "venda.class.php";

if (isset($_POST['area'])) {

    $metragem = $_POST['area'];

    
// ERROR CHECK START
if (!is_numeric($metragem)) {
    $_SESSION['error'] = 'Por favor, use um valor numérico!';
    header("location:index.php?");
} else 
if ($metragem <= 0) {
    $_SESSION['error'] = 'A área deve ser maior que zero!';
    header("location:index.php?");
} else 
if (is_null($metragem)) {
    $_SESSION['error'] = 'Por favor, digite o valor antes de enviar.';
    header("location:index.php?");
} else 
// ERROR CHECK END 

$venda = new Venda($metragem);

$galoes = $venda->calculaGaloes();
$preco = $venda->calculaCusto();

    $_SESSION['msg'] = "Para uma área de $metragem metros quadrados, é necessário $galoes lata(s) de tinta, o valor total será de R$".number_format($preco,2);
    header("location:index.php?");
}
   


?>