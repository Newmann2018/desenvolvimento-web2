<?php
require_once '../data/conexao.class.php';
require_once '../model/usuario.class.php';

class UsuarioRepository{
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getInstancia();
    }

    public function criarCadastro($usuario){
        $operacao = $this->conexao->prepare(
            'INSERT INTO usuario (nomeCompleto,email,senha,confirmaSenha,telefone,cidade,estado) VALUES (?, ?, ?, ?, ?, ?, ? )'
        );

        $operacao->bindValue(1, $usuario->nome);
        $operacao->bindValue(2, $usuario->email);
        $operacao->bindValue(3, $usuario->senha);
        $operacao->bindValue(4, $usuario->confirmaSenha);
        $operacao->bindValue(5, $usuario->telefone);
        $operacao->bindValue(6, $usuario->cidade);
        $operacao->bindValue(7, $usuario->estado);
        
         $resultado = $operacao->execute();
         return $resultado;

    }

    public function buscaUsuario($email){
        $operacao = $this->conexao->prepare('SELECT * FROM usuario WHERE email = ?');

        $operacao->bindValue(1, $email);

        if ($operacao->execute()){
            return $operacao->fetchObject('Usuario');
        } else {
            return null;
        }
    }

    


}
?>