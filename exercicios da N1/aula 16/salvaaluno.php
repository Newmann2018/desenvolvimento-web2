<?php
session_start(); // Inicializa a sessao
require_once 'alunos.php';

if (isset($_POST['nomeCompleto']) &&
    isset($_POST['n1']) &&
    isset($_POST['n2']) &&
    isset($_POST['faltas'])) {

    $nomeCompleto = $_POST['nomeCompleto'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $faltas = $_POST['faltas'];
    
    if (!empty($nomeCompleto) &&
        is_numeric($n1) &&
        is_numeric($n2) &&
        is_numeric($faltas) &&
        $n1 >= 0 &&
        $n1 <= 10 &&
        $n2 >= 0 &&
        $n2 <= 10 &&
        $faltas >= 0 &&
        $faltas <= NUM_AULAS) {

        $aluno = [];
        $aluno['nomeCompleto'] = ucwords(strtolower($nomeCompleto));
        $aluno['n1'] = $n1;
        $aluno['n2'] = $n2;
        $aluno['faltas'] = $faltas;

        if (!isset($_SESSION['alunos'])) {
            // Inicializar o historico com um array vazio
            $_SESSION['alunos'] = [];
        }
        
        // armazenar esses dados - SESSION
        $_SESSION['alunos'][] = $aluno;

        // Exibir mensagem de sucesso
        $_SESSION['sucesso'] = 'Aluno cadastrado com sucesso!';

        // Redirecionar para o index
        header('location:index.php');
    } else {
        $_SESSION['erro'] = 'Preencha os dados corretamente.';
        header('location:index.php');
    }
} else {
    // Comportamento para um acesso de fora do form - redirecionamento para o form
    header('location:index.php');
}