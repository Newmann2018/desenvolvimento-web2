<?php
require_once '../controller/criamensagem.controller.php';

function trataErro($mensagem) {
    criaErro($mensagem);
    header('location:../view/completar-perfil.php');
}

if (isset($_POST['nome-completo']) && isset($_POST['data-nascimento']) && isset($_POST['genero'])) {
    $nomeCompleto = ucwords(strtolower($_POST['nome-completo']));
    $dataNascimento = $_POST['data-nascimento'];
    $genero = strtoupper($_POST['genero']);

    $nomeValido = strlen($nomeCompleto) <= 50;

    if (empty($nomeCompleto)) {
        trataErro('Preencha o nome!');
    } else if (!$nomeValido) {
        trataErro('O nome deve possuir menos de ? caracteres!');
    } else if (empty($dataNascimento)) {
        trataErro('Preencha a data de nascimento!');
    } else if (empty($genero)) {
        trataErro('Selecione o gênero!');
    } else if ($genero != 'M' && $genero != 'F' && $genero != 'X') {
        trataErro('Selecione um gênero válido!');
    } else {
        require_once '../model/conta.class.php';
        require_once '../model/usuario.class.php';
        require_once '../repository/usuario.repository.php';

        $usuario = new Usuario();
        $usuario->nomeCompleto = $nomeCompleto;
        $usuario->genero = $genero;
        
        $dataExplodida = explode('/', $dataNascimento);
        $usuario->dataNascimento = $dataExplodida[2].'-'.$dataExplodida[1].'-'.$dataExplodida[0];

        $conta = unserialize($_SESSION['auth']);

        $usuario->idConta = $conta->id;

        $usuarioRepository = new UsuarioRepository();
        $resultado = $usuarioRepository->criaUsuario($usuario);

        if ($resultado) {
            header('location:../view/home.php');
        } else {
            trataErro('Não foi possível criar seu usuário.');
        }
    }
} else {
    header('location:../view/completar-perfil.php');
}