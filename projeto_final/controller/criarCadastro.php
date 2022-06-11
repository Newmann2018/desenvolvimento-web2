<?php
require_once '../controller/exibemensagem.controller.php';

 if (isset ($_POST['nomeCompleto'])&& 
    (isset($_POST['email']))&&
    (isset($_POST['senha']))&&
    (isset($_POST['confirmaSenha']))&&
    (isset($_POST['telefone']))&&
    (isset($_POST['cidade']))&&
    (isset($_POST['estado']))){

        $nomeCompleto = ucwords(strtolower($_POST['nomeCompleto']));
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmaSenha'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        
        $cachorro = isset($_POST['cachorro']);
        $gato = isset($_POST['gato']);
        $outro = isset($_POST['outro']);

        if(empty($nomeCompleto)>50){
            $_SESSION['erro']='Preencha o nome corretamente';
        }else if(empty($email)>50){
            $_SESSION['erro']='preencha o email corretamente';
        }else if(empty($senha)!=0){
            $_SESSION['erro']='preencha a senha corretamente';
        }else if(($confirmarSenha) !=($senha)){
            $_SESSION['erro']='as senhas devem ser iguais';
        }else if ((!is_numeric($telefone))){
            $_SESSION['erro']='preencha o telefone corretamente';
        }else if(strlen($cidade)>50){
            $_SESSION['erro']='preencha a cidade corretamente';
        }else if(strlen($estado)>50){
            $_SESSION['erro']='preencha o estado corretamente';
        }else{

            require_once '../model/usuario.class.php';
            require_once '../repository/usuario.repository.php';
            require_once '../model/pet.class.php';
            require_once '../repository/pet.repository.php';

            $usuario = new Usuario();

            $usuario->nome =$nomeCompleto;
            $usuario->email=$email;
            $usuario->senha = md5('QI'.$senha.'ASSIS');
            $usuario->confirmaSenha = md5('QI'.$confirmarSenha.'ASSIS');
            $usuario->telefone=$telefone;
            $usuario->cidade = $cidade;
            $usuario->estado = $estado;

            $usuarioRepository = new UsuarioRepository();
            $resultado = $usuarioRepository->criarCadastro($usuario);

            if($resultado){
                $resultado = $usuarioRepository->buscaUsuario($email);

                $pet = new Pet();

                $pet->idusuario= $resultado->idusuario;
                $pet->cachorro= $cachorro;
                $pet->gato= $gato;
                $pet-> outro = $outro;

                $petRepository = new PetRepository();
                $resultado = $petRepository->criarPet($pet);

                if($resultado){
                    $_SESSION['sucesso']='cadastro realizado com sucesso';
                    header('location:../index.php');
                }else{
                    $_SESSION['erro']='não foi possível cadastrar o pet';
                    header('location:../index.php');
                }
            }else{
                $_SESSION['erro']='não foi possível cadastrar o usuario';
                header('location:../index.php');
            }
        }
}else{
    $_SESSION['erro']='não foi possível cadastrar';
    header('location:../index.php');
}

?>