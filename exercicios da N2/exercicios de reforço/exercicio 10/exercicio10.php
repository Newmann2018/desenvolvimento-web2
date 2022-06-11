<?php
session_start();

const NOTA_200 = "Nota de 200; ";
const NOTA_100 = "Nota de 100; ";
const NOTA_50 = "Nota de 50; ";
const NOTA_20 = "Nota de 20; ";
const NOTA_10 = "Nota de 10; ";
const NOTA_5 = "Nota de 5; ";
const NOTA_2 = "Nota de 2; ";
const MOEDA_100 = " R$;Moeda de 1  ";
const MOEDA_50 = "Moeda de 50 centavos; ";
const MOEDA_25 = "Moeda de 25 centavos; ";
const MOEDA_10 = "Moeda de 10 centavos; ";
const MOEDA_5 = "Moeda de 5 centavos; ";
const MOEDA_1 = "Moeda de 1 centavos; ";

$preco = $_POST['price'];
$pagamento = $_POST['payment'];

// ERROR CHECK START
if (is_null($preco)) {
    $_SESSION['error'] = 'Um ou mais campos está vazio!';
    header("location:index.php?");
} else if (is_null($pagamento)) {
    $_SESSION['error'] = 'Um ou mais campos está vazio!';
    header("location:index.php?");
} else if (!is_numeric($preco)) {
    $_SESSION['error'] = 'Use apenas valores numéricos!';
    header("location:index.php?");
} else if (!is_numeric($pagamento)) {
    $_SESSION['error'] = 'Use apenas valores numéricos!';
    header("location:index.php?");
} else if ($pagamento < $preco) {
    $_SESSION['error'] = 'Valor insuficiente para a compra!';
    header("location:index.php?");
} else
// ERROR CHECK END

$troco = $pagamento - $preco;


$message = nl2br("O troco será de R$".number_format($troco,2)."Você receberá R$: ");

floor(($troco / NOTA_200 ) * NOTA_200);

if ($troco >= 200) {
   return $message .= NOTA_200;
    $troco - 200;
}else if($troco >= 100) {
    return $message .= NOTA_100;
    $troco - 100;
}else if($troco >= 50) {
    return$message .= NOTA_50;
    $troco - 50;
}else if ($troco >= 20 ) {
   return $message .= NOTA_20;
    $troco - 20;
}else if ($troco >= 10 ) {
    return $message .= NOTA_10;
    $troco - 10;
}else if ($troco >= 5 ) {
    return $message .= NOTA_5;
    $troco - 5;
}else{
    $_SESSION['msg'] = $message;
    header("location:index.php?");
}
?>