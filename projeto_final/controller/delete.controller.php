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
        }else if(empty($senha)){
            $_SESSION['erro']='preencha a senha corretamente';
        }else if(empty($confirmarSenha) !=($senha)){
            $_SESSION['erro']='as senhas devem ser iguais';
        }else if (empty(!is_numeric($telefone))){
            $_SESSION['erro']='preencha o campo corretamente';
        }else if(empty($cidade)>50){
            $_SESSION['erro']='preencha o campo corretamente';
        }else if(empty($estado)>50){
            $_SESSION['erro']='preencha o campo corretamente';
        }else{
            require_once '../model/usuario.class.php';
            require_once '../model/pet.class.php';
            require_once '../repository/delete.repository.php';

            $usuario = new Usuario();

            $usuario->nome =$nomeCompleto;
            $usuario->email=$email;
            $usuario->senha = md5('QI'.$senha.'ASSIS');
            $usuario->confirmarSenha = md5('QI'.$confirmarSenha.'ASSIS');
            $usuario->telefone=$telefone;
            $usuario->cidade = $cidade;
            $usuario->estado = $estado;

            $pet = new Pet();
            $pet->cachorro= $cachorro;
            $pet->gato= $gato;
            $pet-> outro = $outro;

            $repository = new Repository();
            $repository = $repository->deletapet($idpet , $usuario->idusuario);
            $repository=$repository->deletaUsuario($idusuario, $usuario->idusuario);
            
            if($resutado){
                $_SESSION['sucesso']='cadastro deletado com sucesso';
                header('location:../index.php');
            }else{
                $_SESSION['erro']='não foi possível deletar';
            }
        }
}else{
    $_SESSION['erro']='tente novamente deletar';
    header('location:../index.php');
}
?>