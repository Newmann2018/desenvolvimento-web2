<?php
session_start();
require_once 'calculadora.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela - calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1 class="text-center mt-1">Tabela de calculadora</h1>

    <?php
    if (isset($_SESSION['calculadora'])) {
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

    <form action="salvacalculadora.php" method="post" class="text-center mt-1">
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br><br>
      <label>+</label><input value="soma" type="radio" name="operacao">     
     <label>-</label> <input value="subtrair"type="radio" name="operacao">     
      <label>x</label><input value="Multiplicacao"  type="radio" name="operacao">     
      <label>/</label><input  value="divisao"type="radio" name="operacao"><br><br>    
        
      <section class="text-center mt-1">
        <input type="submit" value="calcular" class="btn btn-success">
        </section>
     
    </form>

    <div class="row mt-3">
        <div class="col-12">
            <?php
            if (isset($_SESSION['calculadora'])){
            ?>
            <table class="table table-light table-hover table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>Num1</th>
                        <th>operacao</th>
                        <th>Num2</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  
                    $calculas = $_SESSION['calculadora'];

                    foreach ($calculas as $calcula) {
                        $calcula = unserialize($calcula);
                        ?>
                        <tr>
                            <td><?=$calcula->num1?></td>
                            <td><?=$calcula->operacao?></td>
                            <td><?=$calcula->num2?></td>
                            <td><?=number_format ($calcula->calcula())?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="limpahistorico.php" class="btn btn-danger">Limpar Histórico</a>
            <?php
            } else {
                ?>
                <h2 class="text-center mt-1">Nenhum calculo cadastrado.</h2>
                <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>