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
    <title>Exercício 10</title>
</head>
<body lass="text-center mt-1">
    <div class= "card text-center mt-1" >
    <h1 class="text-center mt-1">Exercício 10</h1>

<?php
   if (isset($_SESSION['msg'])) {
?>
        <h2><?=$_SESSION['msg']?></h2>
<?php
        unset($_SESSION['msg']);
   } else if (isset($_SESSION['error'])) {
?>
    <h2 class="text-danger"><?=$_SESSION['error']?></h2>
<?php
    unset($_SESSION['error']);
}
?>

<?php
   if (isset($_SESSION['troco'])) {
?>
        <h2><?=$_SESSION['troco']?></h2>
<?php
        unset($_SESSION['troco']);
   }
?>

    <form action="exercicio10.php" method="post"> 
        <h2>Digite o valor do produto.</h2>
        <input type="number" name="price" min="0.01" step="0.01" required><br><br>
        <h2>Digite o valor pago em dinheiro.</h2>
        <input type="number" name="payment" min="0.01" step="0.01" required><br><br>
        <input type="submit" value="Enviar" class="btn btn-success"><br><br>
    </form>
</div>
</body>
</html>