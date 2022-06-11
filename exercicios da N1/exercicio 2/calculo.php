<?php
session_start(); 

function exibeErro($mensagem) {
    $_SESSION['mensagem'] = $mensagem;
    header("location:index.php");
}
function formataNome($nome) {
    $nome = strtolower($nome);
    $nome = ucwords($nome);
    
    return $nome;
}
$nome = $_POST['nome'];
$n1 = $_POST['N1'];
$n2 = $_POST['N2'];
$aulas = $_POST['Aulas'];
$faltas = $_POST['faltas'];
$media=($NotaN1+$NotaN2/2);
$frequencia=(($Numerodefaltas/$Numerodeaulas)*100);

$tamanhoDoNome = strlen($nome);

if (
    isset($_POST['nome']) &&
    isset($_POST['n1']) &&
    isset($_POST['n2']) &&
    isset($_POST['aulas']) &&
    isset($_POST['Faltas'])
){
    

    if (empty($nome)) {
        $_SESSION['erro'] = 'Preencha o nome corretamente!';
        header('location:./');
    } else if (!is_numeric($n1) || $n1 < 0 || $n1 > 10) {
        $_SESSION['erro'] = 'Preencha a N1 corretamente!';
        header('location:./');
    } else if (!is_numeric($n2) || $n2 < 0 || $n2 > 10) {
        $_SESSION['erro'] = 'Preencha a N2 corretamente!';
        header('location:./');
    } else if (!is_numeric($aulas) || $aulas <= 0) {
        $_SESSION['erro'] = 'Preencha o nº de aulas corretamente!';
        header('location:./');
    } else if (!is_numeric($faltas) || $faltas < 0) {
        $_SESSION['erro'] = 'Preencha o nº de faltas corretamente!';
        header('location:./');
    } else if ($aulas < $faltas) {
        $_SESSION['erro'] = 'Você precisa ter mais aulas que faltas!';
        header('location:./');
    } else {
        $media = ($n1 + $n2) / 2;
        $aulasFrequentadas = $aulas - $faltas;
        $frequencia = $aulasFrequentadas / $aulas * 100;

        echo "<h2>Boas-vindas, $nome!</h2>";
        echo "<h2>Sua média é $media.</h2>";
        echo "<h2>Sua frequência foi $frequencia%.</h2>";

        if ($frequencia < 75) {
            echo "<h2>Infelizmente você reprovou por faltas.</h2>";
        } else {
            if ($media >= 6) {
                echo "<h2>Parabéns, você passou!</h2>";
            } else if ($media >= 5.75) {
                echo "<h2>Você passou por conselho de classe.</h2>";
            } else {
                echo "<h2>Você reprovou por nota.</h2>";
            }
        }
    }
} else {
    header('location:./');
}
?>