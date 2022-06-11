<?php
require_once './exibemensagem.controller.php';
require_once '../repository/buscarDados.repository.php';
require_once '../repository/atualizar.repository.php';
require_once '../model/pet.class.php';

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

        if(!empty($senha)&& !empty($novaSenha)&& !empty($confirmeNovaSenha)){
            if($novaSenha == $confirmaSenha){
                require_once '../model/usuario.class.php';

                $senha = md5('QI'.$senha.'ASSIS');

                if($Senha == $usuario->senha){
                    require_once '../repository/usuario.repository.php';

                    $novaSenha= md5('QI'.$novaSenha.'ASSIS');
                    $repository = new usuariorepository();

                    $resultado =$repository->atualizarcadastro($usuario->idusuario,$novaSenha);

                    if($resultado){
                        $_SESSION['sucesso']= 'senha alterada com sucesso';
                        $usuario->senha=$novaSenha;
                    }else{
                        $_SESSION['erro']='não foi possível alterar a senha';
                    }
                }else{
                    $_SESSION['erro'] = 'Senha antiga invalida';
                }  
            }else{
                $_SESSION['erro'] = 'as senha precisam ser  iguais';
            }
        }
    }else {
        $_SESSION['erro']='tente novamente atualizar';
        header('location:../index.php');
    }
    

?>