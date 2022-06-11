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
    <title>Exercício 13</title>
</head>
<body>
<h1 class="text-center">Exercício 13</h1>
<?php
   if (isset($_SESSION['msg'])) {
       ?>
        <h4 class="text-success"><?=$_SESSION['msg']?></h4>
        <?php
        unset($_SESSION['msg']);
   } if (isset($_SESSION['error'])) {
    ?>
    <h4 class="text-danger"><?=$_SESSION['error']?></h4>
    <?php
    unset($_SESSION['error']);
}
?>

    <form action="exercicio13.php" method="post">
        <h6>Digite um ou mais números separados por HÍFENS (-)</h6>
        <input type="text" name="num" placeholder="Digite um número" required><br><br>
        <input type="submit" value="Enviar" class="btn btn-success"><br><br>
    </form>
</body>
</html>