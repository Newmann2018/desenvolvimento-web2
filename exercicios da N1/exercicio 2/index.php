<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Aprovação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['mensagem'])) { ?>

    <h2>Erro - <?= $_SESSION['mensagem'] ?></h2>

    <?php
    unset($_SESSION['mensagem']);
    }
    ?>

    <header class="conteiner">
        <h1>Calculadora de Aprovação</h1>
        <main class="card">
        <form action="calculo.php" method="post">
        <section>
           <label class="nome" for="nome">Nome:</label>
            <input type="text" class="nome" name="nome" 
            placeholder="digite seu nomeCompleto" require>
        </section>
        <section>
            <label class="number" for="number">N1:</label>
            <input type="number" class="number" name="N1" 
            placeholder="digite sua nota da  N1" require min="0" max="10" step="0.01">
        </section> 
        <section>
            <label class="number" for="number">N2:</label>
            <input type="number" class="number" name="N2" 
            placeholder="digite sua nota da  N2" require min="0" max="10" step="0.01">
        </section>
        <section>
            <label class="number" for="number">Numero de Aulas:</label>
            <input type="number" class="number" name="Aulas"
             placeholder="digite o Numero de Aulas" require min="1">
        </section>
        <section>
        <label class="number" for="number">Numero De Faltas:</label>
            <input type="number" class="number" name="Faltas" 
            placeholder="digite o Numero de faltas " require min="0">
        </section>
        <section>
            <button class="Enviar" value="Enviar">Enviar</button>
        </section>
        </form>
    </main>
    </header>
</body>
</html>