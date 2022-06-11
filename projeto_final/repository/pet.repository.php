<?php
require_once '../data/conexao.class.php';
require_once '../model/pet.class.php';
class PetRepository {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getInstancia();
    }

    public function criarPet($pet){
        $operacao = $this->conexao->prepare(
            'INSERT INTO pet (cachorro, gato, outro, idusuario) VALUES(?, ?, ?, ?)'
        );

        $operacao->bindValue(1,$pet->cachorro);
        $operacao->bindValue(2,$pet->gato);
        $operacao->bindValue(3,$pet->outro);
        $operacao->bindValue(4,$pet->idusuario);

        return $operacao->execute();
    }
}
?>