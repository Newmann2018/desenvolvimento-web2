<?php
require_once '../controller/exibemensagem.controller.php';
require_once '../controller/auth.controller.php';

if ($estaLogado) {
    if ($temUsuario) {
        header('location:./home.php');
    }
} else {
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABQI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid p-0">
    <main>
        <h2 class="text-center mt-2">Finalize seu perfil</h2>
        <div class="row m-0 justify-content-center">
            <?php if ($temErro) { ?>
                <div class="col-8 mt-2 alert alert-danger" role="alert"><?=$erro?></div>
            <?php } ?>
            <section id="form-perfil" class="m-2 col-8">
                <form action="../controller/criausuario.controller.php" method="post">
                    <div class="form-group mt-2">
                        <label for="nome-completo" class="form-label">Nome completo</label>
                        <input type="text" name="nome-completo" id="nome-completo" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group mt-2">
                        <label for="data-nascimento" class="form-label">Data de nascimento</label>
                        <input type="text" name="data-nascimento" id="data-nascimento" class="form-control" required maxlength="10" minlength="10">
                    </div>
                    <div class="form-group mt-2">
                        <p>Gênero</p>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="genero" id="m" value="M" class="form-check-input" required>
                            <label for="m" class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input type="radio" name="genero" id="f" value="F" class="form-check-input">
                            <label for="f" class="form-check-label">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input type="radio" name="genero" id="x" value="X" class="form-check-input">
                            <label for="x" class="form-check-label">Outro</label>
                        </div>
                    </div>
                    <div class="form-group mt-4 text-center">
                        <input type="submit" class="btn btn-primary" value="Finalizar cadastro">
                    </div>
                </form>
            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>