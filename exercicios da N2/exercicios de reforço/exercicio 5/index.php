<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercício 5</title>
</head>
<body>
<h1 class="text-center">Exercício 5</h1>
<!--DECLARAÇÃO DE SESSÃO-->
<?php
   if (isset($_SESSION['msg'])) {
       ?>
        <h3 class="text-success"><?=$_SESSION['msg']?></h3>
        <?php
        unset($_SESSION['msg']);
   } else if (isset($_SESSION['error'])) {
    ?>
    <h3 class="text-danger"><?=$_SESSION['error']?></h3>
    <?php
    unset($_SESSION['error']);
}
?>
<!--DECLARAÇÃO DE SESSÃO-->

<form action="exercicio5.php" method="post">
        <p>Digite um número de 1 a 12</p>
        <input type="number" name="month" required><br><br>
        <input type="submit" value="Enviar" class="btn btn-success"><br><br>
        </form>


</body>
</html>