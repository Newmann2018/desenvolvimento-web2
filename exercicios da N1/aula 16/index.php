<?php
session_start();
require_once 'alunos.php';
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

    <form action="salvaaluno.php" method="post">
        <input type="text" name="nomeCompleto"
        placeholder="Nome Completo" required class="form-control"><br>

        <input type="number" name="n1" placeholder="N1"
        required min="0" max="10" step="0.01" class="form-control"><br>

        <input type="number" name="n2" placeholder="N2"
        required min="0" max="10" step="0.01" class="form-control"><br>

        <input type="number" name="faltas" placeholder="Faltas"
        required min="0" max="<?=NUM_AULAS?>" class="form-control"><br>

        <input type="submit" value="Cadastrar" class="btn btn-success">
    </form>

    <div class="row mt-4">
        <div class="col-12">
            <?php
            if (isset($_SESSION['alunos'])) {
            ?>
            <table class="table table-light table-hover table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>N1</th>
                        <th>N2</th>
                        <th>Faltas</th>
                        <th>Média</th>
                        <th>Frequência</th>
                        <th>Resultado Final</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // LACOS DE REPETICAO
                    // 1. WHILE - ENQUANTO
                    // 2. DO...WHILE - FAÇA...ENQUANTO
                    // 3. FOR - PARA
                    // - Variável de controle
                    // - Condição
                    // - Incremento da variável de controle

                    //$contador = 0; TIRA POR CAUSA DO FOR
                    //$numeroDeAlunos = count($alunos); TIRA POR CAUSA DO FOREACH

                    $alunos = $_SESSION['alunos'];

                    foreach ($alunos as $aluno) {
                        //$aluno = $alunos[$contador]; TIRA POR CAUSA DO FOREACH
                        $nomeCompleto = $aluno['nomeCompleto'];
                        $nomes = explode(' ', $nomeCompleto);

                        $n1 = $aluno['n1'];
                        $n2 = $aluno['n2'];
                        $media = calculaMedia($n1, $n2);

                        $faltas = $aluno['faltas'];
                        $frequencia = calculaFrequencia($faltas);

                        ?>
                        <tr>
                            <td><?=$nomes[0]?></td>
                            <td><?=$nomes[count($nomes) - 1]?></td>
                            <td><?=$n1?></td>
                            <td><?=$n2?></td>
                            <td><?=$faltas?></td>
                            <td><?=number_format($media, 2)?></td>
                            <td><?=number_format($frequencia, 2).'%'?></td>
                            <td><?=verificaResultado($media, $frequencia)?></td>
                        </tr>
                        <?php

                        //$contador++; TIRA POR CAUSA DO FOR
                    }
                    ?>
                </tbody>
            </table>
            <!-- BOTAO LIMPAR -->
            <a href="limpahistorico.php" class="btn btn-danger">Limpar Histórico</a>
            <?php
            } else {
                ?>
                <h2>Nenhum aluno cadastrado.</h2>
                <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>