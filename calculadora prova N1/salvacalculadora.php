<?php
session_start(); // Inicializa a sessao
require_once 'calculadora.php';
if(isset($_POST['num1']) && 
    isset($_POST['num2'])&&
    isset ($_POST['operacao'])){

        $num1= $_POST['num1'];
        $num2= $_POST['num2'];
        $operacao= $_POST['operacao'];

        if(!empty($operacao)&&
        is_numeric($num1)&&
        is_numeric($num2)){
            $calculadora = new Calculadora(
                $num1,
                $num2,
                $operacao
            );

            if(isset($_SESSION['calculadora'])){
                $_SESSION['calculadora']=[]; 
            }
            $_SESSION['calculadora'][]= serialize($calculadora);
            $_SESSION['sucesso']='soma cadastrada com sucesso';
            header('location:index.php');
        }else{
            $_SESSION['erro'] = 'Preencha os dados corretamente.';
            header('location:index.php');
        }
}else{
        header('location:index.php');
}
?>