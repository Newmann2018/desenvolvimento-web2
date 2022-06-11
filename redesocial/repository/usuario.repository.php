<?php

require_once '../data/conexao.class.php';
require_once '../model/usuario.class.php';

class UsuarioRepository {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getInstancia();
    }

    public function criaUsuario($usuario) {
        $operacao = $this->conexao->prepare(
            'INSERT INTO usuario (nomeCompleto, dataNascimento, genero, idConta) VALUES (?, ?, ?, ?)'
        );

        $operacao->bindValue(1, $usuario->nomeCompleto);
        $operacao->bindValue(2, $usuario->dataNascimento);
        $operacao->bindValue(3, $usuario->genero);
        $operacao->bindValue(4, $usuario->idConta);

        return $operacao->execute();
    }

    public function recuperaUsuario($idConta) {
        $operacao = $this->conexao->prepare(
            'SELECT id, nomeCompleto, genero, DATE_FORMAT(dataNascimento, "%d/%m/%Y") AS dataNascimento, idConta FROM usuario WHERE idConta = ?'
        );

        $operacao->bindValue(1, $idConta);

        $resultado = $operacao->execute();

        if ($resultado) {
            return $operacao->fetchObject('Usuario');
        } else {
            return null;
        }
    }

    public function atualizaUsuario($nomeCompleto, $genero, $dataNascimento, $idConta) {
        $operacao = $this->conexao->prepare(
            'UPDATE usuario SET nomeCompleto = ?, genero = ?, dataNascimento = ? WHERE idConta = ?'
        );

        $operacao->bindValue(1, $nomeCompleto);
        $operacao->bindValue(2, $genero);
        $operacao->bindValue(3, $dataNascimento);
        $operacao->bindValue(4, $idConta);

        return $operacao->execute();
    }
}