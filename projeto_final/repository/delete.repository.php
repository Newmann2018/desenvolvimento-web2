<?php
require_once '../data/conexao.class.php';
require_once '../model/pet.class.php';
require_once '../model/usuario.class.php';
class DeleteRepository {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getInstancia();
    }

    function deletaPet($pet){
        $operacao = $this->conexao->prepare(
            'DELETE * FROM pet WHERE idpet=? '
        );
        $operacao->bindValue(1,$pet->idpet);

        $resultadopet = $operacao->execute();

        if ($resultadopet) {
            return $operacao->fetchObject('pet');
        }else{
            return null;
        }
    }

    function deletaUsuario($usuario){
        $operacao = $this->conexao->prepare(
            'DELETE * FROM  usuario WHERE idusuario =?'
        );

        $operacao->bindValue(1, $usuario->idusuario);

        $resultadousuario = $operacao->execute();

        if ($resultadousuario) {
            return $operacao->fetchObject('usuario');
        }else{
            return null;
        }
    }
}
?>