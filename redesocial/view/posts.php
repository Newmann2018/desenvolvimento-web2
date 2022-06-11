<?php
require_once '../controller/exibemensagem.controller.php';
require_once '../controller/auth.controller.php';

if ($estaLogado) {
    if (!$temUsuario) {
        header('location:./completar-perfil.php');
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
    <header class="bg-secondary pt-2 pb-2 row m-0">
        <h2 class="text-start text-white col-6">Bem-vind<?=$usuario->genero == 'F' ? 'a' : 'o'?>, <?=explode(' ', $usuario->nomeCompleto)[0]?>!</h2>
        <h1 class="text-end text-white mb-0 col-6">ABQI</h1>
    </header>
    <main class="container-fluid">
        <div class="row py-3">
            <aside class="col-2">
                <div class="sticky-top">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="./home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="./posts.php" class="nav-link active">Meus posts</a>
                        </li>
                        <li class="nav-item">
                            <a href="./perfil.php" class="nav-link">Meu perfil</a>
                        </li>
                        <li class="nav-item">
                        <a href="../controller/logout.controller.php" class="nav-link text-danger">Sair</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="col px-3">
                <section>
                    <h2>Meus posts</h2>
                    <?php if ($temErro) { ?>
                        <div class="mt-2 alert alert-danger" role="alert"><?=$erro?></div>
                    <?php } else if ($temSucesso) { ?>
                        <div class="mt-2 alert alert-success" role="alert"><?=$sucesso?></div>
                    <?php } ?>
                    <?php
                    require_once '../controller/meusposts.controller.php';

                    foreach ($posts as $post) {
                        ?>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p class="card-title"><strong><?=$post->nomeCompleto?></strong></p>
                                <p class="card-subtitle text-muted mb-3"><?=$post->dataHora?></p>
                                <p class="card-text"><?=nl2br($post->conteudo)?></p>
                                <div class="row">
                                    <div class="col-6">
                                        <span class="link-secondary float-start"><?=$post->curtidas?></span>
                                    </div>
                                    <form class="col-6" action="../controller/excluipost.controller.php" method="post">
                                        <input type="hidden" name="idPost" value="<?=$post->id?>">
                                        <input type="submit" value="Excluir" class="btn link-danger float-end">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </section>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>