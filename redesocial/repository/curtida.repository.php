<?php

class CurtidaRepository {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getInstancia();
    }

    public function curtirPost($idUsuario, $idPost) {
        $operacao = $this->conexao->prepare(
            'INSERT INTO curtida (idUsuario, idPost) VALUES (?, ?)'
        );

        $operacao->bindValue(1, $idUsuario);
        $operacao->bindValue(2, $idPost);

        return $operacao->execute();
    }

    public function descurtirPost($idUsuario, $idPost) {
        $operacao = $this->conexao->prepare(
            'DELETE FROM curtida WHERE idUsuario = ? AND idPost = ?'
        );

        $operacao->bindValue(1, $idUsuario);
        $operacao->bindValue(2, $idPost);

        return $operacao->execute();
    }
}
