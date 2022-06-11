<?php
require_once '../controller/exibemensagem.controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/estilo.css " type="text/css" />
    <title>Mundo Pet</title>
</head>

<body>
    <header id="topo">
        <figure id="logo">
            <img src="../src/img/logo-mundopet.png" alt="Logo da Mundo Pet" />
        </figure>
        <?php if ($temErro) { ?>
        <div class="mt-2 alert alert-danger" role="alert"><?=$erro?></div>
        <?php } else if ($temSucesso) { ?>
        <div class="mt-2 alert alert-success" role="alert"><?=$sucesso?></div>
        <?php } ?>
        <div class="container-table">
            <div class="content">
                <div id="formulario" class="formulario">
                    <div style="background-color:#FFF; width:max-content; padding: 30px auto; margin: 30px auto;">
                        <form action="../controller/delete.controller.php" method="post">
                            <div id="title">
                                <h1 id="title-form">Excluir dados</h1>
                                <a class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            </div>
                            <div class="container-form">
                                <div class="forma">
                                    <input class="input_form" type="text" name="nomeCompleto" placeholder="Digite seu Nome Completo"
                                         required>
                                </div>
                                <div class="forma">
                                    <input class="input_form" type="text" name="email" placeholder="Digite seu Email"
                                         required>
                                </div>
                                <div class="forma">
                                    <input class="input_form" type="password" name="senha"
                                        placeholder="Digite sua Senha" required>
                                </div>
                                <div class="forma">
                                    <input class="input_form" type="password" name="confimeSenha"
                                        placeholder="confirme seu senha"  required>
                                </div>
                                <div class="forma">
                                    <input class="input_form" type="text" name="telefone"
                                        placeholder="Digite seu Telefone"  required>
                                </div>
                                <div class="forma">
                                    <input class="input_form" type="text" name="cidade" placeholder="Digite sua Cidade"
                                         required>
                                </div>
                                <div class="forma">
                                    <input class="input_form" type="text" name="estado" placeholder="Digite seu Estado"
                                         required>
                                </div>
                                <div class="forma">
                                    animal:</div>
                                <div>
                                    <input type="checkbox" id="cachorro" name="cachorro">
                                    <label>cachorro</label>
                                    <input type="checkbox" id="gato" name="gato">
                                    <label>gato</label>
                                    <input type="checkbox" id="ourto" name="outro">
                                    <label>outro</label>
                                </div>
                            </div>
                            <button class="send-buttons" name="action" value="create">Excluir Dados </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-table">
            <button id="form-button" class="add_table"> Excluir Dados <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
        </div>
        </div>
        </div>
        <a id="btn-menu" href="#menu">
            <button>
                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
            </button>
        </a>
        <nav id="menu">
            <a id="btn-fechar" href="#">volta</a>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#redes">redes</a></li>
                <li><a href="#rodape">cadastre-se</a></li>
                <li><a href="https://www.mundopet.com/">Saiba Mais</a></li>
                <li><a href="atualizar.php">atualizar Dados</a></li>
            </ul>
        </nav>
    </header>
    <figure id="banner">
        <img src="../src/img/banner.png" alt="Banner com foto da empresa">
    </figure>
    <main id="corpo">
        <h1>Bem Vindo ao Mundo Pet </h1>
        <section id="msg-introducao">
            <p>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top">
                        <div class="petimg"></div>
                    </td>
                    <td valign="top">
                        <div class="pettext">
                            <p>É um prazer tê-los aqui! Somos a Mundo Pet, lugar onde você e o seu pet
                                viverão momentos inesquecíveis!
                                Fomos chamados para servir com excelência aos animais de estimação e encantar pessoas.
                                Ser surpreendido positivamente sempre será a nossa melhor experiência.
                                Por isso, nosso maior retorno é a quantidade de UAUs de nossos clientes e amigos.
                                Sabemos que ter um bichinho de estimação é sinônimo de companheirismo, alegria e muito
                                amor.
                                Não importando qual o tipo de animal você tenha em casa, mas o laço que se cria ao
                                depositarmos nele
                                todo o nosso amor e cuidado.
                            <p> A Mundo Pet tem como base fazer com que pessoas se conheçam.
                            <p>O nosso local é um ambiente de encontros.
                            <p>Então, o nosso maior intuito é estreitar os laços da comunidade pet, seja clubes de raça
                                ou
                                fãs de uma
                                determinada espécie.
                                Este estreitamento pode acontecer dentro dos eventos de adoção em parceria com as ONGs
                                protetoras de
                                animais, que fazem um trabalho extremamente importante para nossa comunidade.
                                Queremos também promover a posse responsável.
                                Ser um tutor de Pet é um ato de humanidade e requer muita responsabilidade.
                                Na Mundo Pet queremos assistir aos nossos clientes da melhor forma possível.
                                Faça-nos uma visita. Estamos esperando você e seu pet!
                            <p>"Retirado do Site original" (Mundo Pet)
                        </div>
                    </td>
                </tr>
            </table>
            </p>
    </main>
    <div>
        <section>
            <link rel="stylesheet" type="text/css" media="screen"
                href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <div id="carouselExampleControls" class="carousel slide" data-interval="2500" data-ride="carousel"
                style="width: 500px; height: 500px; margin: 50px auto;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../src/img/comprar.png" alt="1 slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../src/img/cocker.png" alt="2 slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../src/img/dalmata.png" alt="3 slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../src/img/maine.png" alt="4 slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../src/img/sphynx.png" alt="5 slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../src/img/calopsita.png" alt="6 slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../src/img/agapornis.png" alt="7 slide">
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <footer id="rodape">
        <div class="content">
            <section id="redes">
                <a href="https://www.facebook.com/mundopetbrasiloficial"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                <a href="https://twitter.com/login?lang=pt"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                <a href="https://www.google.com"><i class="fa fa-google fa-lg " aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                <a href="https://api.whatsapp.com/send?phone=5511968162569"><i class="fa fa-whatsapp fa-lg " aria-hidden="true"></i></a>
            </section>
            <p>
                Copyright © 2022.Todos os direitos reservados.
            </p>
            <section id="tecnico">
                Produzido pelos tecnicos para internet: Antonio Fabiano Martins Soares Junior, Newmann Naba Costa e
                Valeska Regina da Silva
            </section>
    </footer>
    <script src="../controller/js/ExcluirDados.js"></script>
</body>
</html>