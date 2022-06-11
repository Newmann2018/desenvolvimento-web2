<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="text-center mt-1">


<div class="container" style="padding: 20px; box-shadow: 0 2px 5px black; margin-top: 20px">
    <h1 class="text-center mt-1">Calculadora</h1>
    <div class="row">
       <div class="col-md-6">
           <section class="text-center mt-1">
               <!--------------- TENTANDO FAZER CALCULADORA + - * / --------------->
                <form name="CALCULADORA" method="post" class="row" style="height: 280px;">
                    <div class="col-md-11">
                    <input type="text" class="form-control" name="primeiroCampo" placeholder="Digite o primeiro número...">
                    <input type="text" class="form-control" name="segundoCampo" placeholder="Digite o segundo número...">
                    <select name="op" class="form-control">
                        <option value="soma">Somar</option>
                        <option value="subtrair">Subtrair</option>
                        <option value="multiplicar">Multiplicar</option>
                        <option value="dividir">Dividir</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
                    </div>
                    <!-- calculadora -->
                    <?php
                    if (isset($_POST['primeiroCampo']) && ($_POST['segundoCampo'])) {
                        $a = $_POST['primeiroCampo'];
                        $b = $_POST['segundoCampo'];
                        $op = $_POST['op'];
                        $c = [];

                         if ($op == "soma") {
                            $c = $a + $b;
                            echo "O resultado da soma é: $c";
                        
                        }else if ($op == "subtrair") {
                            $c = $a - $b;
                            echo "O resultado da subtração é: $c";
                        
                        }else if ($op == "multiplicar") {
                            $c = $a * $b;
                            echo "O resultado da multiplicação é: $c";
                        }else if ($op == "dividir") {
                            $c = $a / $b;
                            echo "O resultado da divisão é: $c";
                        }else if ($op != "soma" || $op != "subtrair" || $op != "multiplicar" || $op != "dividir")
                        echo "<br>Digite da maneira correta, exemplo(soma, subtrair, multiplicar ou dividir)";
                        }
                    ?>
                </form>
           </section>
            
        </div>
    </div>
</div>

<?php
//somar

?>

</body>
</html>