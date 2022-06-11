<?php
require_once '../data/conexao.class.php';
require_once '../model/pet.class.php';
require_once '../model/usuario.class.php';
class BuscaDadosRepository {

    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::getInstancia();
    }

    function buscarUsuario($usuario){
        $operacao = $this->conexao->prepare(
            'SELECT * FROM usuario WHERE nomeCompleto =?  AND email=? AND senha=? AND
            cidade =?  AND estado =?'
        );
        $operacao->bindValue(1, $nomeCompleto->nomeCompleto);
        $operacao->bindValue(2, $email->email);
        $operacao->bindValue(3, $senha->senha);
        $operacao->bindValue(4, $cidade->cidade);
        $operacao->bindValue(5, $estado->estado);

        $resultado = $operacao->execute();

        if ($resultado) {
            return $operacao->fetchObject('usuario');
        }else{
            return null;
        }
    }

    function buscarPet($Pet){
        $operacao = $this->conexao->prepare(
            'SELECT * FROM pet WHERE idPet = ? AND idusuario =?'
        );
        $operacao->bindValue(1,$idPet->idPet);
        $operacao->bindValue(2, $idusuario->idusuario);

        $resultado = $operacao->execute();

        if ($resultado) {
            return $operacao->fetchObject('pet');
        }else{
            return null;
        }
    }
}
?>