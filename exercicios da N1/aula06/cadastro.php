<?php

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    if (isset($_POST['idade']) && is_numeric($_POST['idade'])) {
        echo "<h1>Hello, world!</h1>";

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        echo "<h3>Boas vindas, $nome!</h3>";
        echo "<p>Você tem $idade anos!</p>";

        $idadeEm2030 = $idade + 8;
        $idadeEm2020 = $idade - 2;

        echo "<p>Em 2030, você terá $idadeEm2030 anos.</p>";
        echo "<p>Em 2020, você tinha $idadeEm2020 anos.</p>";

        if (isset($_POST['salario']) && is_numeric($_POST['salario'])) {
            $salario = $_POST['salario'];
            
            echo "<p>Seu salário é R$ $salario.</p>";
            
            $novoSalario = $salario * 2;
            $salariosMinimos = $novoSalario / 1212;
            
            echo "<p>Seu novo salário é R$ $novoSalario.</p>";
            echo "<p>Agora você recebe $salariosMinimos salários mínimos!</p>";
        } else {
            echo '<p>Voce preferiu nao informar seu salário.</p>';
        } // fecha if do salário
    } else {
        echo '<p>Preencha a idade corretamente.</p>';
    } // fecha if da idade
} else {
    echo '<p>Preencha o nome corretamente.</p>';
} // fecha if do nome