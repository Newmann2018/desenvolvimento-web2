<?php
require_once '../data/conexao.class.php';
require_once '../model/pet.class.php';
require_once '../model/usuario.class.php';
class AtualizarRepository {

    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::getInstancia();
    }

    function updateUsuario ($usuario){
        $operacao = $this->conexao->prepare(
            'UPDATE  INTO usuario SET nomeCompleto=? AND email=? AND senha= ? AND cidade =?  AND estado =? AND telefone =?'
        );
        $operacao->bindValue(1,$usuario->nomeCompleto);
        $operacao->bindValue(2,$usuario->email);
        $operacao->bindValue(3, $usuario->senha);
        $operacao->bindValue(4, $usuario->cidade);
        $operacao->bindValue(5, $usuario->estado);
        $operacao->bindValue(6, $usuario->telefone);

        $resultado = $operacao->execute();

        if ($resultado) {
            return $operacao->fetchObject('usuario');
        }else{
            return null;
        }
    }
    
    function updatePet($Pet){
        $operacao = $this->conexao->prepare(
            'UPDATE INTO Pet SET cachorro =? AND gato =? AND outro =?'
        );
        $operacao->bindValue(1, $Pet->cachorro);
        $operacao->bindValue(2, $Pet->gato);
        $operacao->bindValue(3, $Pet->outro);

        $resultado = $operacao->execute();

        if ($resultado) {
            return $operacao->fetchObject('Pet');
        }else{
            return null;
        }
    }
} 
?>

