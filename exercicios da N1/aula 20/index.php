<?php
session_start();
require_once 'model/aluno.class.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela - Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1 class="text-center mt-1">Tabela de Alunos - Web II - FL02</h1>

    <?php
    if (isset($_SESSION['sucesso'])) {
        ?>
        <h2 class="text-success"><?=$_SESSION['sucesso']?></h2>
        <?php
        unset($_SESSION['sucesso']);
    } else if (isset($_SESSION['erro'])) {
        ?>
        <h2 class="text-danger"><?=$_SESSION['erro']?></h2>
        <?php
        unset($_SESSION['erro']);
    }
    ?>

    <form action="contoller/salvaaluno.controller.php" method="post">
        <input type="text" name="nomeCompleto"
        placeholder="Nome Completo" required class="form-control"><br>

        <input type="number" name="n1" placeholder="N1"
        required min="0" max="10" step="0.01" class="form-control"><br>

        <input type="number" name="n2" placeholder="N2"
        required min="0" max="10" step="0.01" class="form-control"><br>

        <input type="number" name="faltas" placeholder="Faltas"
        required min="0" max="<?=Aluno::NUM_AULAS?>" class="form-control"><br>

        <input type="submit" value="Cadastrar" class="btn btn-success">
        
    </form>
    <a href="./views/historico.php" class="btn btn-primary mt-2">ver Histórico</a>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>